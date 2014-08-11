<?php

class Parse_Magicseo extends Parse_Main {
    const LOGIN = 'pageev@mail.ru';
    const PWD = 'seomaj2001';
    const SITE_URL = 'https://www.majesticseo.com/';
    const NUM_REQUEST = 1;

    private $parse_result;

    public function __construct(){
        parent::__construct();
        $this->auth();
    }

    protected  function auth() {
        $this->curl->getPageCurl(self::SITE_URL);
        $agent = $this->curl->random_user_agent();
        $res = $this->curl->postCurl(self::SITE_URL . 'account/login',
            array(
                'EmailAddress' => self::LOGIN,
                'Password' => 'seomaj2001',
                'redirect' => '/account/register'),
            array(
                CURLOPT_CAINFO => dirname(__FILE__) . '/cacert.pem',
                CURLOPT_SSL_VERIFYPEER => true,
                CURLOPT_SSL_VERIFYHOST => 2,
                CURLOPT_SSLVERSION => 3,
                CURLOPT_USERAGENT => $agent,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_COOKIE => true,
                //CURLINFO_HEADER_OUT => true,
                CURLOPT_COOKIEJAR => dirname(__FILE__) . '/cook.txt',
                CURLOPT_COOKIEFILE => dirname(__FILE__) . '/cook.txt'));
    }

    /**
     * Основной метод получения данных по majesticseo.com
     * @param string $url
     * @return array
     */
    public function getPage() {
        $result = $this->getResult();
        if($result['majestic_tf'] == '0' || $result['majestic_tfw']){
            $i = 0;
            do{
                $i++;
                $result = $this->getResult();
                if((int)$result['majestic_tf'] > 0 || (int)$result['majestic_tfw'] > 0){
                    break;
                }
            }while($i > self::NUM_REQUEST);
        }
        return $result;
    }

    private function getResult(){
        $urls = $this->create2Urls($this->url);
           $result = array();
           foreach($urls as $key=>$sub_url) {

               $html = $this->curl->getPageCurl(self::SITE_URL.'reports/site-explorer?q='.$sub_url.'&oq='.$sub_url.'&IndexDataSource=F');
               $result[$key] = $this->parsePage($html);
           }
           $db_result = array();
           $db_result['majestic_tf'] = $result['without_www']['trustflow'];
           $db_result['majestic_cf'] = $result['without_www']['citationflow'];
           $db_result['majestic_tfw']= $result['www']['trustflow'];
           $db_result['majestic_cfw'] = $result['www']['citationflow'];
           return $db_result;
    }

    private function create2Urls($url) {
        $result = array();
        $no_www =  $this->getUrlWithoutWWW($url);
        $result['www'] = 'www.'.$no_www;
        $result['without_www'] = $no_www;
        return $result;
    }

    private function parsePage($html){
        $result = array();
        $result['trustflow'] = $this->parseHelp($html, 'trustFlow');
        $result['citationflow'] = $this->parseHelp($html, 'citationFlow');
        return $result;
    }
}