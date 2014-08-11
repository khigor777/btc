<?php
class Parse_Dmoz extends Parse_Main {
    const URL = 'http://www.dmoz.org/search/';

    public $db_param = 'dmoz';

    public function getPage() {

        $html = $this->curl->getPageCurl(self::URL, array('q' => $this->url));
        return $this->parse($html);
    }

    private function parse($html) {
        $result = array();
        $query = phpQuery::newDocument($html);
        $res = $query->find('div.ref');
        $html = pq($res)->find('a')->eq(0)->html();
        $result[$this->db_param] = $html;
        return $result;
    }
}
