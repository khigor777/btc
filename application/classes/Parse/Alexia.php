<?php
class Parse_Alexia extends Parse_Main {

    const URL = 'http://www.alexa.com/siteinfo/';

    public $db_param = 'alexa_rank';

    public function getPage() {
        $html = $this->curl->getPageCurl(self::URL . $this->url);
        return $this->parse($html);
    }

    private function parse($html) {
        $result = array();
        $query = phpQuery::newDocument($html);
        $res = $query->find('strong.metrics-data, .align-vmiddle')->eq(0)->html();
        if($res == ''){
            return $result[$this->db_param] = self::ERROR;
        }
        $result[$this->db_param] = filter_var($res, FILTER_SANITIZE_NUMBER_INT);
        return $result;
    }

}