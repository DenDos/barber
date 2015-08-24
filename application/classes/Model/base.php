<?php defined('SYSPATH') or die('No direct script access.');

class Model_Base
{

    public function write($data)
    {
        $app = new Model_Application();
        $array = array('date' => $data['date'], 'time' => $data['time']);

        $into_base = ORM::factory('Application', $array);
        
        if($into_base->loaded()){
            return false;
        }else{
            $app->date =$data['date'];
            $app->time =$data['time'];
            $app->guests =$data['guests'];
            $app->name =$data['name'];
            $app->second_name =$data['second_name'];
            $app->phone =$data['phone'];
            $app->comment =$data['comment'];
            $app->save();
            return true;
        }
        //var_dump($addId);
        //exit;
    }

    public function get_id($data)
    {

        $app = new Model_Application();

        //Узнаем id только что соданный 
        $usertemp = ORM::factory('Application', array('phone'=>$data));
        $addId = $usertemp->id;
        return $addId;

    }

    public function delete($id)
    {
        if(!is_numeric($id)) return false;// Если число 
        else{

            $usertemp = ORM::factory('Application', array('id'=>$id)); //Application - т название модели Model_Application

            if($usertemp->loaded()) { // если элемент найден в базе

                $usertemp->delete();
                return true;

            }else return false;
        }
    }

}
