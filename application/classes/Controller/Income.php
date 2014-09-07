<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Income extends Controller_Base {
    public function before(){
        parent::before();
        $this->template->title = 'New Income Verification Request';
    }

	public function action_index()
	{
        $this->showIndex();
	}

    public function action_add()
    {
        if(isset($_POST)){
            try{
                $post = $this->request->post();
                $res = $this->getCheckBoxIfExists($post);
                $post=  Arr::merge($res, $post);
                $post = Arr::merge($_FILES, $post);
                $orm = ORM::factory('Income');
                $orm->values($post);
                $orm->user_id = $this->user->id;
                $orm->save();
            }catch (ORM_Validation_Exception $e){
                $error = $e->errors('models');
            }
            if(!isset($error)){
               $this->redirect('income/index');
            }

            $this->showIndex($error);
        }


    }

    private function showIndex($error = null){
        /**
         * @var $status Model_Income
         */
        $status = ORM::factory('Income');
        $this->template->content = View::factory('in_income',
            array(
                'params'=> '',
                'error' => $error,
                'employee_status' => $status->getEmployeeStatus()

            ));
    }

    private function getCheckBoxIfExists($post){
        $res = array();
        if(isset($post['home_owner'])){
            $res['home_owner'] = Model_Income::HOME_OWNER_TRUE;
        }

        if(isset($post['car_owner'])){
                  $res['car_owner'] = Model_Income::CAR_OWNER_TRUE;
              }
        return $res;
    }

}
