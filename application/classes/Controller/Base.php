<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {

    public $template = 'base/in_base';

    public function before()
    {

        parent::before();
        require_once Kohana::find_file('vendor', 'Domain/Domain');
        require_once Kohana::find_file('vendor', 'Domain/Main');
        require_once Kohana::find_file('vendor', 'phpQuery/phpQuery/phpQuery');
            I18n::lang('ru');
            $this->template->title = 'Анализ ссылок';
            $this->template->meta_keywords = '';
            $this->template->meta_description = '';
            $this->template->meta_copywrite = '';
            $this->template->header = '';
            $this->template->content = '';
            $this->template->footer = '';
            $this->template->menu = array(
                        'Identity Verification' => URL::site('main'),
                        'Address' => URL::site('address'),
                        'Income Verification ' => URL::site('income'),
                        'Добавить' => URL::site('link'),
                        'Настройки' => Url::site('config'));
            $this->template->styles = array(
                HTML::script('media/js/main/jquery-1.9.1.min.js'),
                HTML::script('media/js/main/jquery.mockjax.js'),
                HTML::script('media/js/main/moment.min.js'),
                HTML::style('media/css/main/select2.css'),
                HTML::script('media/js/main/select2.js'),
                HTML::style('media/css/main/bootstrap.css'),
                HTML::script('media/js/main/bootstrap.js'),
                HTML::style('media/css/main/datetimepicker.css'),
                HTML::script('media/js/main/bootstrap-datetimepicker.js'),
                HTML::style('media/css/main/bootstrap-editable.css'),
                HTML::script('media/js/main/bootstrap-editable.js'),
                HTML::style('media/css/main/select2-bootstrap.css'),
                HTML::style('media/css/main/typeahead.js-bootstrap.css'),
                HTML::script('media/js/main/typeahead.js'),
                HTML::script('media/js/main/typeaheadjs.js'),
                HTML::style('media/css/main/demo-bs3.css'),
                HTML::style('media/css/main/address.css'),
                HTML::script('media/js/main/address.js'),
                HTML::style('media/css/dashboard.css'),
            );
        $this->template->antigate = '';//$this->getBalanceAntigate();
    }

    private function getBalanceAntigate() {
        $key = 'antigate';
        $result = '';
        $cokie = Cookie::get($key);
        if(!empty($cokie)) {
            return $cokie;
        }
        $antigate = new Parse_Antigate();
        $balance = $antigate->getBalance();
        Cookie::set($key, $balance, 60*60 );
        return $balance;
    }
}
