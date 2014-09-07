<?php defined('SYSPATH') or die('No direct script access.');

class Model_Address extends ORM {
    protected $_table_name = 'address';
    protected static $country = array('begin' => 1, 'end'=> 239);


    public function rules(){
         return array(
            'address_first' => array(
                array('not_empty'),
            ),
            'zip' =>array(
                array('not_empty'),
            ),
            'state' =>array(
                array('not_empty'),
            //    array('alpha')
            ),
            'city' =>array(
                        array('not_empty'),
                     //   array('alpha')
                    ),
            'country_id' => array(
                array('numeric', array(':value')),
                array('range', array(':value', self::$country['begin'], self::$country['end']))
            ),
            'file' => array(
                     array('Upload::valid'),
                     array('Upload::not_empty'),
                     array('Upload::type', array(':value', array('jpg', 'jpeg', 'png', 'gif'))),
                     array(array($this, 'save_file'), array(':value'))
                 ),
        );
    }

    public function save_file($file)
    {
        $helper = new Model_Helper('upload/address');
        return $helper->save_file($file, $this);
    }

}
