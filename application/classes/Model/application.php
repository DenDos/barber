<?php defined('SYSPATH') or die('No direct script access.');

class Model_Application extends ORM
{
    //protected $_table_name = 'first';
    public function get_all(){
        
        return $this->find_all();
            
    }

}