<?php

class Helper_Update
{
    public function addParserParams()
    {
        $orm = ORM::factory('Param')->where('parse_status', '=', Model_Param::PARSE_STATUS_YES)->find_all();

        if (is_object($orm)) {
            /**
             * @var $item Model_Param
             */
            foreach ($orm as $item) {
                $this->addAllDataByUrl($item->link_site, $item->id);

            }
        }
    }


    public function addAllDataByUrl($url, $id)
    {
        $this->addData(new Parse_Domain(), $url);
        $this->addData(new Parse_Pr(), $url);
        $this->addData(new Parse_Alexia(), $url);
        $this->addData(new Parse_Yacatalog(), $url);
        $this->addData(new Parse_Sitelink(), $url);
        $this->addData(new Parse_Magicseo(), $url);
        $this->addData(new Parse_Linkpad(), $url);
        $this->addData(new Parse_Dmoz(), $url);
        $this->addData(new Parse_Index(), $url);

        $this->updateById($id);

    }

    public function updateById($id){
        $orm = ORM::factory('Param', $id);
        /**
         * @var $orm Model_Param
         */
        if($orm->loaded()){
            $orm->parse_status = Model_Param::PARSE_STATUS_NO;
            $orm->import_date = time();
            $orm->save();
        }
    }

    protected function addData(Parse_Main $parse_lib, $url){
        $parse_lib->setUrl($url);
        $insert = $parse_lib->getPage();
        $this->updateInsert($parse_lib, $insert);
    }

    private function updateInsert(Parse_Main $parse_lib, $db_filed)
    {
        try {
            $param = $this->checkOnExists($parse_lib->hash_url);
            $param->values($db_filed);

            $param->save();
        } catch (ORM_Validation_Exception $e) {
            return $e->errors('validation');
        }
        return true;
    }

    /**
     * @param $hash_url
     * @return Model_Param
     *
     */
    public function checkOnExists($hash_url){

        /** @var Model_Param $param */
        $hash = ORM::factory('Param')->where('hash_url', '=', $hash_url)->limit(1)->find_all();
        $id = (isset($hash[0]->id) && $hash[0]->id > 0) ? $hash[0]->id : null;
        $param = ORM::factory('Param', $id);
        if ( ! $param->loaded()) {
            $param = ORM::factory('Param');
        }
        return $param;
    }



}