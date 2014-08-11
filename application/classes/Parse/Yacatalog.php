<?php
class Parse_Yacatalog extends Parse_Main {
    const URL = 'http://yaca.yandex.ru/yca';

    public function getPage() {
        $html = $this->curl->getPageCurl(self::URL, array('text' => $this->url, 'yaca'=>1));
        return $this->parse($html);
    }

    private function parse($html) {
        $result = array();
        $query = phpQuery::newDocument($html);
        $res = $query->find('div.b-result__all');
        $html = pq($res)->find('a.b-result__region')->eq(0)->html();
        $result['yaca'] = $html;
        return $result;
    }

}