<?php defined('SYSPATH') or die('No direct script access.');

class Model_Helper {

    private $path = 'upload/address';
    public function __construct($path){
        $this->path = $path;
    }

    public function save_file(array $file, ORM $obj)
    {
        $dir = $this->getUploadDir();
        $res = Upload::save($_FILES['file'], $this->getFileName($file), $dir);
        if($res){
            $obj->set('file', $this->getFileName($file));
        }
        return $res;
    }

    public function save_file_array(array $file, ORM $obj, $name  = 'file'){
        $dir = $this->getUploadDir();
         $res = Upload::save($_FILES[$name], $this->getFileName($file), $dir);
         if($res){
             $obj->set($name, $this->getFileName($file));
         }
         return $res;
    }


    private function getUploadDir()
    {
        return DOCROOT . $this->path . DIRECTORY_SEPARATOR;
    }



    private function getFileName($file)
    {
        return uniqid() . '.' . strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    }

}
