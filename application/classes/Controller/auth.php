<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Template {

    public $template = 'index';
    public function action_index()
    {   
        $data= array();

        $auth = Auth::instance();
        if($auth->logged_in()!=0)
        {
            $data['message'] = 'Залогинен';
            $this->redirect('http://barber/admin');
        }else{
            $data['message'] = 'Не залогинен';
            if(isset($_POST['auth']))
            {
                $login=Arr::get($_POST, 'login', '');
                $pass=Arr::get($_POST, 'password', '');

                if($auth->login($login,$pass)){
                $this->redirect('http://barber/admin');
                }
            }
        }
        $this->template->content = View::factory('template/auth',$data);

    }
    public function action_hpass()
    {
        $auth = Auth::instance();
        $this->template->content =$auth->hash_password('admin');
    }
    public function action_logout()
    {
        $auth = Auth::instance();
        $auth->logout();
        $this->template->content ='Разлогинились';
    }
} // End Auth
