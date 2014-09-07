<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Base {
    public $template = 'base/in_user';

    public function before()
    {
        parent::before();

        $this->template->styles[] = HTML::style('media/css/signin.css');
    }
    public function action_index(){
        $this->template->content = View::factory('in_user');
    }

    public function action_login()
    {
        $this->template->content = View::factory('in_user')->bind('message', $message);

        if($this->request->method() === 'POST'){
            $remember = isset($_POST['remember'])? (bool)$_POST['remember'] : false;
            $user = Auth::instance()->login($this->request->post('username'),$this->request->post('password'), $remember);

            if($user){
                $this->redirect('main');
            }

            $message = 'Login failed';

        }
    }

    public function action_create()
    {
        $error = '';
        $this->template->content = View::factory('user_create')
            ->bind('errors', $error)
            ->bind('message', $message);

        if ($this->request->method() === 'POST') {

            try {
                /** @var $orm Model_Auth_User */
                $orm = ORM::factory('User')->create_user($this->request->post(),
                    array(
                        'username',
                        'password',
                        'email')
                );
                $orm->add('roles', ORM::factory('role', array('name' => 'login')));

                $_POST = array();

                $message = "You have added user '{$orm->username}' to the database";

            } catch (ORM_Validation_Exception $e) {
                $error = $e->errors('model');
                $message = 'Registration Error';
            }
        }

    }

    public function action_logout()
    {
        Auth::instance()->logout();
        $this->redirect('user');
    }


    protected function setUser(){}

}
