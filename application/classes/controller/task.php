<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Task extends Controller {
    public function action_addtask(){
        $tasks = ORM::factory('task');
        $tasks->values($_POST);
        if($tasks->check()){
            if($tasks->save()){
                $tasks->save();
            }
        }
    }
    
        public function action_edittask(){
        if(isset($_POST['id'])){
        $tasks = ORM::factory('task',$_POST['id']);
        $tasks->values($_POST);
        if($tasks->check()){
            if($tasks->save()){
                $tasks->save();
                }
            }
        }
    }
    
        public function action_deltask(){
        if(isset($_POST['id'])){
            $project = ORM::factory('task',$_POST['id']);
            $project->delete();
            }
    }
} // End Welcome
