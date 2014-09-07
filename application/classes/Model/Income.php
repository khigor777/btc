<?php defined('SYSPATH') or die('No direct script access.');

class Model_Income extends ORM {

    protected $_table_name = 'income';
    const HOME_OWNER_TRUE = 1;
    const CAR_OWNER_TRUE = 1;

    private static $employee_status = array(
        1=> 'Employee',
        2=> 'Worker' ,
        3=> 'Self-employed',
        4=>  'Unemployed',
        5=> 'Entrepreneur'
    );

    public function getEmployeeStatus($id = null){
        if(isset(self::$employee_status[$id])){
            return self::$employee_status[$id];
        }
        return self::$employee_status;
    }

    public function rules(){
        $first = self::getEmployeeStatus();
        $first = key($first);
        $end = self::getEmployeeStatus();
        end($end);
        $end = key($end);
         return array(
            'ssn' => array(
                array('not_empty'),
            ),
            'annual_income' =>array(
                array('digit'),
            ),
            'employee_status' =>array(
                array('not_empty'),
                array('range', array(':value',$first , $end ))
            ),
            'credit_score' => array(
                array('numeric', array(':value')),
            ),
            'file1' => array(
                     array('Upload::valid'),
                     array('Upload::not_empty'),
                     array('Upload::type', array(':value', array('jpg', 'jpeg', 'png', 'gif'))),
                     array(array($this, 'save_file1'), array(':value'))
                 ),
             'file2' => array(
                            array('Upload::valid'),
                            array('Upload::not_empty'),
                            array('Upload::type', array(':value', array('jpg', 'jpeg', 'png', 'gif'))),
                            array(array($this, 'save_file2'), array(':value'))
                        ),
             'file3' => array(
                            array('Upload::valid'),
                            array('Upload::not_empty'),
                            array('Upload::type', array(':value', array('jpg', 'jpeg', 'png', 'gif'))),
                            array(array($this, 'save_file3'), array(':value'))
                        ),
        );
    }

    public function save_file1($file)
     {
          $this->file($file, 'file1');
     }

    public function save_file2($file)
     {
          $this->file($file, 'file2');
     }

    public function save_file3($file)
     {
          $this->file($file, 'file3');
     }
    private function file($file, $name){
        $helper = new Model_Helper('upload/income');
        return $helper->save_file_array($file, $this, $name);
    }

}
