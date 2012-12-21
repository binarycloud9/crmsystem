<?php

class Model_Task extends ORM{
        protected $_table_name = 'tasks';
    protected $_primary_key = 'id';
    
    protected $_has_many = array(
        'project'=>array(
            'model'=>'project',
            'foreign_key'=>'project_id'
        )
    );
}