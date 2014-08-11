<?php
class Parse_Index extends Parse_Main {
    private $urls = array();
    protected static $IMAGE_PATH;
    //const KEY_ANTIGATE = 'dc67ad66ac5d0b5abe220215fc61b1c4';
    private $file_name;
    /**
     * @var $curl Parse_Curl
     */
    protected  $curl;

    public function __construct(){
        parent::__construct();
        self::$IMAGE_PATH = DOCROOT. '/media/img/';

    }

    public function setUrls(array $urls) {
        $this->urls = $urls;
        $this->curl = Parse_Curl::getInstance();
    }



    public function getYandexIndex($url)  {
        $result = $this->curl->getPageCurl('http://yandex.ru/yandsearch', array('surl' => $url));
        return $this->parseYandex($result);
    }


    public function getGoogleIndex($url){
        $html = $this->curl->getPageCurl('https://www.google.ru/search', array('q'=>'site:' . $url));
        return $this->parseGoogle($html);
    }

    private function parseGoogle($html) {
        $doc = phpQuery::newDocument($html);
        $result = $doc->find('div#resultStats')->html();
        $end = strpos($result, '(');
        $end = substr($result, 0, $end);
        $result = filter_var($end, FILTER_SANITIZE_NUMBER_INT) *1;
        return $result;
    }


    private function parseYandex($html) {
        $doc = phpQuery::newDocument($html);
        $result = $doc->find('strong.b-head-logo__text')->html();
        if(empty($result)){
            $params = $this->getParamsForCaptcha($html);
            $res = $this->curl->getPageCurl('http://yandex.ru/checkcaptcha', $params);
            $doc = phpQuery::newDocument($res);
            $result = $doc->find('div.input__found')->eq(0)->html();
        }
        if($result == ''){
            return self::ERROR;
        }
        $str = $this->checkOnMillionYandex($result);
        $result = filter_var($result, FILTER_SANITIZE_NUMBER_INT) . $str;
        return $result * 1;
    }

    private function checkOnMillionYandex($html){
        $str = '';
        if(strpos($html, 'млн') > 0) {
            $str.= '000000';
        }elseif(strpos($html, 'ты')> 0){
            $str.= '000';
        }
        return $str;
    }

    private function getParamsForCaptcha($html){
        $captcha = $this->getYandexCaptcha($html);
        $doc = phpQuery::newDocument($html);
        $key = $doc->find('input[name=key]')->val();
        $retpath = $doc->find('input[name=retpath]')->val();
        return array('key'=>$key, 'retpath'=>$retpath, 'rep'=>$captcha);
    }

    private function getYandexCaptcha($html) {
        $doc = phpQuery::newDocument($html);
        $res = $doc->find('img.b-captcha__image')->attr('src');
        $content = $this->curl->getPageCurl($res, array(), array(CURLOPT_BINARYTRANSFER => 1));
        $name = self::$IMAGE_PATH. uniqid().'.gif';
        $this->file_name = $name;
        file_put_contents($name, $content);
        $file_data = file_get_contents($name);
        $antigate_img = base64_encode($file_data);
        $captcha = $this->getCaptchFromAntigate($antigate_img);
        return $captcha;
    }

    private function getCaptchFromAntigate($img){
        $count = 0;
        do{
            $count++;

            $res = $this->curl->postCurl('http://antigate.com/in.php',
                 array(
                     'method'=>'base64',
                     'key' => Kohana::$config->load('antigate')->key,
                     'is_russian' => 1,
                     'body' => $img
                 ));
             $str = explode('|', $res);
        sleep(3);
        }while(!isset($str[1]) && $count < 5);
        $key = isset($str[1])?$str[1]:0;
        sleep(10);
        return $this->getCaptcha($key);

    }

    private function getCaptcha($id){
        $count = 0;
        do{
            $count++;
            $res = $this->curl->getPageCurl('http://antigate.com/res.php', array(
                      'key' => Kohana::$config->load('antigate')->key,
                      'action' => 'get',
                      'id' => $id));
                  $res = explode('|', $res);
        sleep(3);
        }while(!isset($res[1]) && $count < 5);
        $res = isset($res[1])?$res[1]:0;
        return $res;
    }

    public function getPage(){
        return array(
            'yandex_index' => $this->getYandexIndex($this->url),
            'google_index' => $this->getGoogleIndex($this->url));
    }

    public function getIndexedPages()  {
        $result = array();
        $yaca = new PR();

        foreach ($this->urls as $url) {
            $yaca->setUrl($url);
            sleep(1);
            $yandex = $this->getYandexIndex($url);
            $google = $this->getGoogleIndex($url);
            $result[] = array(
                'url' => $url,
                'yandex' => $yandex,
                'google' => $google);
        }
        return $result;
    }



    public function __destruct(){
       if(file_exists($this->file_name)){
            unlink($this->file_name);
        }
    }
}
