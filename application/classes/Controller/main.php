<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {

    public $template = 'index';

    public function action_index()
    {   
        $guest_data = array();
        $data["message"]='';

        $deal_to_base = new Model_Base();
        $to_mail = new Model_Mail();

        if(isset($_POST['btn']))
        {
            $guest_data['date'] = Arr::get($_POST, 'date', '');
            $guest_data['time'] = Arr::get($_POST, 'time', '');
            $guest_data['guests'] = Arr::get($_POST, 'guests', '');
            $guest_data['name'] = Arr::get($_POST, 'name', '');
            $guest_data['second_name'] = Arr::get($_POST, 'second_name', '');
            $guest_data['phone'] = Arr::get($_POST, 'phone', '');
            $guest_data['comment'] = Arr::get($_POST, 'comment', '');
            $err = $deal_to_base->write($guest_data);// записываем в базу все данные из формы
            $guest_data['id'] =  $deal_to_base->get_id($guest_data['phone']);//получаем последний созданый id по номеру телефона

            if ($err)
            {
                $to_mail->send_data($guest_data);
                $data["message"] =  "Данные записаны в базу";
                // var_dump($guest_data['date']);
                 //exit;

            }else
            {
                $data["message"] =  "Запись на данное время невозможно";
            }
        }

        if(isset($_POST['btn1']))
        {
            $id = Arr::get($_POST, 'id', ''); 
            if($deal_to_base->delete($id)) $data["message"] =  "Элемент удален";
            else $data["message"] =  "Произошла ошибка при удалении записи из базы данных";
        }


        $this->template->content = View::factory('template/home',$data);
    }

} // End main
