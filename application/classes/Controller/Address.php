<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Address extends Controller_Base {

    public function before(){
        parent::before();

        $this->template->title = 'Address Verification New Request';

    }

	public function action_index()
    {
        $this->showIndex();

    }

    public function action_add()
    {

        try{
            $orm = ORM::factory('Address');
            $orm->values(Arr::merge($_FILES, $this->request->post()));
            $orm->user_id = $this->user->id;
            $orm->save();
        }catch (ORM_Validation_Exception $e){
            $error = $e->errors('models');
        }

        if(!isset($error)){
            $this->redirect('address/index');
        }

        $this->showIndex($error);

    }

    private function showIndex($error = null){
        /**
         * @var $orm Model_Country
         */
        $orm = ORM::factory('Country');
        $this->template->content = View::factory('in_address', array(
            'error' =>$error,
            'params' =>'',
            'country' => $orm->getCountry()

        ));
    }


}