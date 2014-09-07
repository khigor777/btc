<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Base {
    /**
      * @var $session Session
      */
    protected $session;
    protected $file_errors = null;
    public function before(){
        parent::before();

        $this->session = Session::instance();
        $this->template->title = 'Identity Verification';
    }
	public function action_index()
	{
        $text = $this->session->get_once('Added');
        $params = array('params' => '');
        $this->template->content = View::factory('in_main', $params)->bind('error', $errors);
        if ($_POST) {
             $post = $this->request->post();
             try {
                 $verify = ORM::factory('Verify');
                 $verify->values(Arr::merge($_FILES, $post));
                 $verify->user_id = $this->user->id;
                 $verify->save();
             } catch (ORM_Validation_Exception $e) {
                 $errors = $e->errors('model');
             }
         }
	}



    public function action_add()
    {


    }


}
