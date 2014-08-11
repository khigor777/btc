<?php
class Parse_Sitelink extends Parse_Main {

    public function getPage(){
        $res = $this->curl->getPageCurl($this->url);
        return array('ex_link' => $this->parseLinks($res));
    }

    private function parseLinks($html) {
        $query = phpQuery::newDocument($html);
        $links = $query->find('a');
        $res = array();
        foreach($links as $link){
            $check = pq($link)->attr('href');

            $url = parse_url($check, PHP_URL_HOST);
            $url = str_replace('www.', '',$url);

            if(!empty($url) && $url != $this->url ){
               $res[] = $check;
            }
        }
        $this->res = $res;
        return count($res);
    }
}