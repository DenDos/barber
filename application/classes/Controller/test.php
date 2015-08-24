<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller_Template   {

    public $template = 'index';

    public function action_index()
    {
        $articles = array();
        $article = new Model_Article();
        $articles = $article->get_all();

        $this->template->content = View::factory('template/show')->bind('articles', $articles);
    }


} // End Test
