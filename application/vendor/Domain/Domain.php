<?php
class Parse_Domain extends Parse_Main {

    const URL = 'https://www.nic.ru/whois/';

    public $db_param = 'domain';

    public function getPage(){
        $res = $this->curl->getPageCurl('https://www.nic.ru/whois/?query='.$this->url);//shell_exec('whois '.$this->url);
        $result = FactoryDomain::factory($this->url, $res);
        $res = $result->getDomainInfo();
        return $res;
    }

    public static function age($created_date, $finish_date) {
        $begin = date('Y-m-d',$created_date);
        $end  = date('Y-m-d', $finish_date);
        $dt1 = new DateTime($begin);
        $dt2 = new DateTime($end);
        $interval = $dt1->diff($dt2);
        return $interval->format('%y year, %m month, %d days');
    }
}

