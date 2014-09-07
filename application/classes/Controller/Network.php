<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Network extends Controller_Base {
    public function before(){
        parent::before();
        $this->template->title = 'PayPal, eBay & Social Networks';
    }

	public function action_index()
	{
        $this->showIndex();
	}

    private function showIndex($error = null){
        $this->SaveParamsNetwork();
        $items = ORM::factory('network')->where('user_id' , '=' ,$this->user->id)->find_all();
        $this->template->content = View::factory('in_network',
            array(
                'items'=> $items,
                'error' => $error,
            ));
    }

    private function SaveParamsNetwork()
    {
        if (isset($_POST['token'])) {
            $s = file_get_contents('http://ulogin.ru/token.php?token=' . $_POST['token'] . '&host=' . $_SERVER['HTTP_HOST']);
            $user = json_decode($s, true);
            $this->saveNetwork($user);
            $this->redirect('network');

        }
        if(isset($_GET['code'])){
            $user = array();
            $user['uid'] = $_GET['code'];
            $user['network'] = 'paypal';
            $this->saveNetwork($user);
            echo '<script>window.close();
             window.opener.location.reload();</script>>';
        }


    }

    protected function saveNetwork($user){
        $exist  = $this->checkIfExists($user);
        if($exist) {
            $orm = ORM::factory('network');
            $orm->type = Model_Network::getNetworkTypeByName($user['network']);
            $orm->date_create  = time();
            $orm->user_id = $this->user->id;
            $orm->code = $user['uid'];
            $orm->save();
        }


    }

    protected function checkIfExists($user) {
        $orm = ORM::factory('Network')->
            where('user_id','=' ,$this->user->id)
            ->and_where('type', '=', Model_Network::getNetworkTypeByName($user['network']))
            ->find();

        return  ! $orm->loaded();

    }
}
