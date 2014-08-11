<?php
abstract class AbstractParseDomainFactory {
    const CREATE_DATE = 'domain_create';
    const EXPIRES_DATE = 'domain_expires';
    protected $html;

    public function __construct($html = '')
    {
        $this->html = $html;
    }

    protected function parseHelp($html,$first_find = 'trustFlow', $end_find = "\n"){
        $begin = strpos($html, $first_find);
        $end = strpos($html,$end_find,$begin);
        $len_first = strlen($first_find);
        $begin += $len_first;
        $text = substr($html, $begin, $end - $begin);
        $text = $this->clearAll($text);
        return $text;
    }

    protected function clearAll($text){
        $res = filter_var($text, FILTER_SANITIZE_NUMBER_INT);
        $res = str_replace('-','',$res);
        $res = substr($res, 0, 8);
        $date = DateTime::createFromFormat('Ymd', $res);
        return $date->getTimestamp();

    }

    protected function getNormalDate($date){
        $date_len = 8;
        if(!empty($date) && strlen($date) == $date_len) {
            $year = $date[0].$date[1].$date[2].$date[3];
            $month = $date[4].$date[5];
            $day = $date[6].$date[7];
            return strtotime($day.'-'.$month.'-'.$year);
        }
        return $date;
    }



    abstract function getDomainInfo();

}


class ParseCa extends  AbstractParseDomainFactory{

    protected function clearAll($text)
     {
         $res = filter_var($text, FILTER_SANITIZE_STRING);
         $res = str_replace('&nbsp;', '',$res);
         $res = trim(substr($res, 0, 14));
         $date = DateTime::createFromFormat('Y/m/d', $res);
         if(is_object($date)) {
             return $date->getTimestamp();
         }
         return 0;
     }

    public function getDomainInfo(){
        $create = $this->parseHelp($this->html, 'Creation date:');
        $finish = $this->parseHelp($this->html, 'Expiry date:');
        return array(self::CREATE_DATE => $create, self::EXPIRES_DATE => $finish);
    }
}

class ParseDe extends  AbstractParseDomainFactory{
    public function getDomainInfo(){
        $create = $this->parseHelp($this->html, 'created:');
        $finish = $this->parseHelp($this->html, 'expires:');
        return array(self::CREATE_DATE => $create, self::EXPIRES_DATE => $finish);
    }
}


class ParseCouk extends  AbstractParseDomainFactory{


    protected function clearAll($text)
     {
         $res = filter_var($text, FILTER_SANITIZE_STRING);
         $res = str_replace('&nbsp;', '',$res);
         $res = trim(substr($res, 0, 12));
         $date = DateTime::createFromFormat('j-M-Y', $res);

         if(is_object($date)) {
              return $date->getTimestamp();
          }
          return 0;
     }

    public function getDomainInfo(){
        $create = $this->parseHelp($this->html, 'Registered on:');
        $finish = $this->parseHelp($this->html, 'Expiry date:');

        return array(self::CREATE_DATE => $create, self::EXPIRES_DATE => $finish);
    }
}


class ParseComua extends  AbstractParseDomainFactory{
    public function getDomainInfo(){
        $create = $this->parseHelp($this->html, 'created:');
        $finish = $this->parseHelp($this->html, 'expires:');
        return array(self::CREATE_DATE => $create, self::EXPIRES_DATE => $finish);
    }
}

class ParseKz extends AbstractParseDomainFactory {
    protected function clearAll($text)
     {
         $res = filter_var($text, FILTER_SANITIZE_STRING);
         $res = trim(substr($res, 0, 11));
         $date = DateTime::createFromFormat('Y-m-d', $res);
         if(is_object($date)) {
              return $date->getTimestamp();
          }
          return 0;
     }

    public function getDomainInfo(){
        $create = $this->parseHelp($this->html, 'Domain created:');
        $finish = $this->parseHelp($this->html, 'Last modified :');
        return array(self::CREATE_DATE => $create, self::EXPIRES_DATE => $finish);
    }
}

class ParseInfo extends AbstractParseDomainFactory {
    protected function clearAll($text)
     {
         $res = filter_var($text, FILTER_SANITIZE_STRING);
         $res = trim(substr($res, 0, 11));
         $date = DateTime::createFromFormat('Y-m-d', $res);
         if(is_object($date)) {
              return $date->getTimestamp();
          }
          return 0;
     }

    public function getDomainInfo(){
        $create = $this->parseHelp($this->html, 'Creation Date:');
        $finish = $this->parseHelp($this->html, 'Registry Expiry Date:');
        return array(self::CREATE_DATE => $create, self::EXPIRES_DATE => $finish);
    }
}


class ParseSu extends AbstractParseDomainFactory {

    public function getDomainInfo(){
        $create = $this->parseHelp($this->html, 'created:');
        $finish = $this->parseHelp($this->html, 'paid-till:');
        return array(self::CREATE_DATE => $create, self::EXPIRES_DATE => $finish);
    }
}

class ParseCom extends AbstractParseDomainFactory {

    protected function clearAll($text)
    {
        $res = filter_var($text, FILTER_SANITIZE_STRING);
        $res = trim(substr($res, 0, 12));
        $date = DateTime::createFromFormat('d-M-Y', $res);
        if (is_object($date)) {
            return $date->getTimestamp();
        }
        return 0;
    }

    public function getDomainInfo(){
        $create = $this->parseHelp($this->html, 'Creation Date:');
        $finish = $this->parseHelp($this->html, 'Expiration Date:');
        return array(self::CREATE_DATE => $create, self::EXPIRES_DATE => $finish);
    }
}


class ParseNet extends AbstractParseDomainFactory {

    protected function clearAll($text)
    {
        $res = filter_var($text, FILTER_SANITIZE_STRING);
        $res = trim(substr($res, 0, 12));
        $date = DateTime::createFromFormat('d-M-Y', $res);
        if(is_object($date)) {
             return $date->getTimestamp();
         }
         return 0;
    }

    public function getDomainInfo(){
        $create = $this->parseHelp($this->html, 'Creation Date:');
        $finish = $this->parseHelp($this->html, 'Expiration Date:');
        return array(self::CREATE_DATE => $create, self::EXPIRES_DATE => $finish);
    }
}

class ParseOrg extends AbstractParseDomainFactory {

    public function getDomainInfo(){
        $create = $this->parseHelp($this->html, 'Creation Date:');
        $finish = $this->parseHelp($this->html, 'Registry Expiry Date:');
        return array(self::CREATE_DATE => $create, self::EXPIRES_DATE => $finish);
    }
}

class ParseRu extends AbstractParseDomainFactory {

    public function getDomainInfo(){
        $create = $this->parseHelp($this->html, 'created:');
        $finish = $this->parseHelp($this->html, 'paid-till:');
        return array(self::CREATE_DATE => $create, self::EXPIRES_DATE => $finish);
    }
}


class ParseDefault extends AbstractParseDomainFactory {

    public function getDomainInfo(){
        return array(self::CREATE_DATE => Parse_Main::ERROR, self::EXPIRES_DATE => Parse_Main::ERROR);
    }
}


/**
 * Class FactoryDomain
 */
class FactoryDomain {
    protected static $third_domain = array(
        'com.ua', 'co.uk'
    );
    /**
     * @param $domain
     * @param $html
     * @return AbstractParseDomainFactory
     */
    public static function factory($domain, $html) {
        foreach(self::$third_domain as $item){
            if(strpos($domain, $item) > 0){
                $item = str_replace('.', '',$item);
                $class_name = 'Parse'.ucfirst($item);
                return new $class_name($html);
            }
        }
        $info = pathinfo($domain, PATHINFO_EXTENSION);
        $class_name = 'Parse'.ucfirst($info);
        if(class_exists($class_name)){
            return new $class_name($html);
        }
        return new ParseDefault();
    }
}