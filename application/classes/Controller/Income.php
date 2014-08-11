<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Income extends Controller_Base {
    public function before(){
        parent::before();
        $this->template->title = 'New Income Verification Request';
    }

	public function action_index()
	{
        $this->template->content = View::factory('in_income', array('params'=> ''));
	}

}
