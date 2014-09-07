<?php defined('SYSPATH') or die('No direct script access.');

class Model_Country extends ORM {
    protected $_table_name = 'country';

    public function __construct(){
        parent::__construct();

    }

    /**
     * @return array
     */
    public function getCountries($id = null)
    {
        return (isset($this->countries[$id]))? $this->countries[$id]:$this->countries;
    }


    public  function getCountry() {
        $result = array();
        $items =  $this->order_by('sort_order', 'desc')->find_all();
        foreach($items as $item){
            $result[$item->id] = $item->nicename;
        }
        return $result;
    }

}
