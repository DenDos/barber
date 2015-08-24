<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Template {

    public $template = 'index';
    public function before()
    {  
        $auth = Auth::instance();
        if($auth->logged_in() ==0)
        {
            $this->redirect('http://barber/auth');
        }
        return parent::before();
    }
    public function action_index()
    {   

        $auth = Auth::instance();//экземпляр класса авторизации

        if($auth->logged_in()!=0)
        {
            //Залогинен
        }else{
            //НЕЗАЛОГИНЕН 
        }

        $dial_to_base = new Model_Base();
        if(isset($_POST['delete']))
        {
            $id=Arr::get($_POST, 'id', '');
            $dial_to_base->delete($id);
        }
        $app = new Model_Application();
        $clients = $app->get_all();
        $this->template->content = View::factory('template/admin')->bind('clients', $clients);

    }

} // End Admin