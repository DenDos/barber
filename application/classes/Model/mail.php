<?php defined('SYSPATH') or die('No direct script access.');

class Model_Mail 
{
    public function send_data($data_array)
    {
        $date=  $data_array['date'];
        $time = $data_array['time'];
        $guests = $data_array['guests'];
        $name = $data_array['name'];
        $second_name=  $data_array['second_name'];
        $com = $data_array['comment'];

        try
        {
            $config = Kohana::$config->load('email');
            Email::connect($config);
            $to = 'cotoha92@gmail.com';
            $subject = 'ТЕСТ';
            $from = 'kohanaframework@test.ru';
            $message = "Произошла запись на прием\nИмя:$name\nФамилия: $second_name\nДата: $date\nВремя: $time\n";

            Email::send($to, $from, $subject, $message, $html = false);

        }
        catch (Exeption $e)
        {
            echo $e->getMessage();
            return false; 
        }

    }

}