<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Templates {
    public function action_index() {
        $this->template->content = View::factory('base/index');
        $this->template->title = "test application";
        $this->template->styles = array(
            '/design/css/bootstrap.css',
            '/design/css/style.css');
        $this->template->scripts = array(
            '/design/js/jquery.js',
            '/design/js/bootstrap.js',
            '/design/js/script.js'
        );
    }
    
    public function action_task(){
        $tasks = ORM::factory('task');
        $t = $tasks->select()->as_array();
        print_r($t);
    }
} // End Welcome
