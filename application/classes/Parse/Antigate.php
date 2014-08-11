<?php
class Parse_Antigate  {
    const ANTIGATE_URL= 'http://antigate.com/res.php';

    public function getBalance() {
        $curl = Parse_Curl::getInstance();
       return $curl->getPageCurl(self::ANTIGATE_URL , array('key'=> Kohana::$config->load('antigate')->key, 'action' =>'getbalance'));
    }
}