<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Address extends Controller_Base {

    public function before(){
        parent::before();

        $this->template->title = 'Address Verification New Request';

    }

	public function action_index()
    {
        /**
         * @var $orm Model_Address
         */
        $orm = ORM::factory('Address');
        var_dump($orm->getCountry());
        $this->template->content = View::factory('in_address', array('params' =>''));

    }

}