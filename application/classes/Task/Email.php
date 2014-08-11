<?php defined('SYSPATH') or die('No direct script access.');

class Task_Email extends Minion_Task {

    protected function _execute(array $params){
        $this->getAllLinksToUpdate();
        Minion_CLI::write('ok!');
    }

    protected function sendEmail($value) {
        $items = ORM::factory('Config')->where('name', '=', 'email')->find_all();
        if(!empty($items)) {
            $config = Kohana::$config->load('email');
            Email::connect($config);
            foreach($items as $item) {
                if(filter_var($item->value, FILTER_VALIDATE_EMAIL)){
                    Email::send($item->value, 'seo@seo.ru', 'Список сылок для обновления на: '.date('d.m.Y',time()), $value);
                }
            }
        }
    }

    protected function getAllLinksToUpdate(){
        $orm = ORM::factory('Param')->where('expires', '<', strtotime('+5 day', time()))->find_all();
        $result = array();
        /**
         * @var $item Model_Param
         */
        foreach($orm as $item){
            $result[] = $item->link_site .' размещена до:' . date('d.m.Y',$item->expires) ;
        }

        $this->sendEmail(implode("\n", $result));
    }
}
