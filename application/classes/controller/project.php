<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Project extends Controller {
    public function action_show() {
        $project = ORM::factory("project");
        $tasks = ORM::factory('task');
        $p = $project->select()->limit(2)->order_by('id','desc')->find_all();
        $view = View::factory('project/show');
        $view->dataproject = $p;
        $view->datatask = $tasks;
        $this->response->body($view);
    }
   
    public function action_addproject(){
        $project = ORM::factory('project');
        $project->values($_POST);
        if($project->check()){
            if($project->save()){
                $project->save();
            }
        }
    }
    
        public function action_editproject(){
        if(isset($_POST['id'])){
        $project = ORM::factory('project',$_POST['id']);
        $project->values($_POST);
        if($project->check()){
            if($project->save()){
                $project->save();
                }
            }
         }
    }
        public function action_delproject(){
            if(isset($_POST['project_id'])){
        $project = ORM::factory('project',$_POST['project_id']);
        $project->delete();
            }
    }
}