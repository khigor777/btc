<?php
class Parse_Linkpad extends Parse_Main {
    const URL = 'http://www.linkpad.ru/';
    public $db_param = 'linkpad';
    public function getPage(){
        $res = $this->curl->getPageCurl(self::URL, array('search' => $this->url));
        return $this->parse($res);

    }

    private function parse($html){
        $result = array();
        $query = phpQuery::newDocument($html);
        $don = $query->find('#a4')->html();
        $res = $query->find('#a16')->html();
        if($don == ''){
            $don= self::ERROR;
        }
        if($res == ''){
            $res = self::ERROR;
        }
        $result['linkpad_donors'] = filter_var($don, FILTER_SANITIZE_NUMBER_INT);
        $result['linkpad_recipients'] = filter_var($res, FILTER_SANITIZE_NUMBER_INT);
        return $result;
    }
}