<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Templates extends Controller_Template {
    public $template = 'tmp/template';
    public function before() {
        parent::before();
        $this->template->content = "";
        $this->template->title = "";
        $this->template->styles = array();
        $this->template->scripts = array();
    }
} // End Welcome
