<?php
abstract class Parse_Main {
    const ERROR = 9999999;
    /**
     * @var $curl CurlRequests
     */
    protected $curl;
    /**
     * @var $url string
     */
    protected $url;

    /**
     * @var $hash_url string
     */
    public $hash_url;

    /**
     * @var string
     */
    public $db_param = '';

    public function __construct(){
        $this->curl = Parse_Curl::getInstance();
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url) {
        $this->url = $this->getUrlWithoutWWW($url);
        $this->hash_url = $this->getHashUrl($this->url);
    }

    /**
     * Основной метод получения данных
     * @return array
     */
    abstract public function getPage();

    /**
     * @param $url
     * @return mixed
     */
    public function getUrlWithoutWWW($url) {
        $url = str_replace('www.', '', $url);
        $url = str_replace('http://', '', $url);
        $url = parse_url('http://'.$url);
        return $url['host'];
    }


    /**
     * @param $url
     * @return string
     */
    public function getHashUrl($url){
        return md5($url);
    }

    public function getClassName(){
        return get_called_class();
    }

    public static function getUrlWithoutWWWStatic($url, $hash = false) {
        $url = str_replace('www.', '', $url);
            $url = str_replace('http://', '', $url);
            $url = parse_url('http://'.$url);
        return ($hash)? md5($url['host']):$url['host'];
    }

    /**
     * @param $html
     * @param string $first_find
     * @param string $end_find
     * @return mixed
     */
    protected function parseHelp($html,$first_find = 'trustFlow', $end_find = ';', $filter_int = true){
        $begin = strpos($html, $first_find);
        $end = strpos($html,$end_find,$begin);
        $text = substr($html, $begin, $end - $begin);
        if($text == ''){
            return self::ERROR;
        }
        return ($filter_int)? filter_var($text, FILTER_SANITIZE_NUMBER_INT):$text;
    }
}
