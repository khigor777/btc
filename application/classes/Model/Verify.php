<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Class Model_Param
 * @property $id
 * @property $user_id
 * @property $name
 * @property $gender
 * @property $date_bith
 * @property $type
 * @property $number
 * @property $image
 */
class Model_Verify extends ORM {

    const MALE = 1;
    const FEMALE = 2;

    const TYPE_DRIVER = 1;
    const TYPE_NATIONAL_ID = 2;
    const TYPE_PASSPORT = 3;

    protected $_table_name = 'verify';

    public static function getGender($id = false){
        $res = array(self::MALE => 'Male',  self::FEMALE => 'Female');
        return ($id)? $res[$id]: $res;
    }

    public function filters(){
        return array(
            'date_bith'  => array(
                array('strtotime'),
             ),
        );
    }

    public function rules(){
        return array(
            'name' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 100)),
            ),
            'gender' => array(
                array('not_empty'),
                array('range', array(':value', self::MALE, self::FEMALE))
            ),
            'date_bith' =>array(
                array('not_empty'),
                array('numeric', array(':value'))
            ),
            'type' =>array(
                array('range', array(':value', self::TYPE_DRIVER, self::TYPE_PASSPORT))
            ),
            'number' => array(
                array('numeric', array(':value'))
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
        $helper = new Model_Helper('upload/verify');
        return $helper->save_file($file, $this);
    }
}
