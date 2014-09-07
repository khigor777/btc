<?php defined('SYSPATH') or die('No direct script access.');

class Model_Network extends ORM {
    protected $_table_name = 'network';
    const TYPE_FACEBOOK = 1;
    const TYPE_TWITTER = 2;
    const TYPE_LINKED_IN = 3;
    const TYPE_PAYPAL = 4;

    public static function getNetworkType($id = null){
        $types = array(
            self::TYPE_FACEBOOK => 'Facebook',
            self::TYPE_TWITTER => 'Twitter',
            self::TYPE_LINKED_IN => 'Linked In',
            self::TYPE_PAYPAL => 'Paypal'
        );
        if(isset($types[$id])){
            return $types[$id];
        }
        return array();
    }

    public static function getNetworkTypeByName($name)
    {
        $res = array(
            'facebook' => self::TYPE_FACEBOOK,
            'twitter' => self::TYPE_TWITTER,
            'linkedin' => self::TYPE_LINKED_IN,
            'paypal' => self::TYPE_PAYPAL
        );

        if(isset($res[$name])){
            return $res[$name];
        }
        return $res;
    }

}
