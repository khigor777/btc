<?php defined('SYSPATH') or die('No direct script access.');

class Model_Country extends ORM {
    protected $_table_name = 'country';

    private $countries = array();

    public function __construct(){
        parent::__construct();
        if(empty($this->countries)){
            $this->countries = $this->getCountry();
        }
    }

    /**
     * @return array
     */
    public function getCountries($id = null)
    {
        return (isset($this->countries[$id]))? $this->countries[$id]:$this->countries;
    }


    protected  function getCountry() {
        $result = array();
        $items =  $this->order_by('sort_order', 'desc')->find_all();
        foreach($items as $item){
            $result[$item->id] = $item->nicename;
        }
        return $result;
    }

}
