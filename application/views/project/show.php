<?php foreach ($dataproject as $value_p) : ?>
<div class="todo-form">
    <div class="todo-top">
        <img alt="" src="/design/img/icon1.png" width="24" height="23" />
        <span class="todo-title"> <?php echo $value_p->name; ?> </span>
        <span class="icon">
            <ul class="list-project-crud">
                <li>
                    <a class="dropupdate" 
                       rel="tooltip" 
                       data-html="true" 
                       title="Edit project name" 
                       data-content="
                       <input type='text' data-id='<?php echo $value_p->id; ?>' 
                       class='edit_project'><input type='submit' 
                       class='btn edit_project_button' onClick='upd_project(<?php echo $value_p->id; ?>,$(this).prev().val());' 
                       value='Update' >" href="#">
                        <img src="/design/img/edit.png" alt="" >
                    </a>
                        
                </li>
                <li style="color: #08c;"> | </li>
                <li> 
                    <a class="del-project" data-pid="<?php echo $value_p->id; ?>" href="#"><img src="/design/img/delete.png" alt="" ></a>
                </li>
        </span>
    </div>
    <div class="todo-add">
            <div class="input-append">
                <img alt="" class="plus-img" src="/design/img/plus.png" width="23" height="23" />
                <input class="span2 xspan" data-id="<?php echo $value_p->id; ?>" placeholder="Start typing here to create a task..." id="appendedInputButton" type="text" required>
                <button class="btn btx" type="button">Add Task</button>
            </div>
       <ul class="t-list">
            <?php $t = $datatask->select()->where('project_id','=',$value_p->id)->limit(4)->order_by('id','desc')->find_all();?>
            <?php foreach ($t as $value_t) : ?>
           <li class="list-items">
                    <span class="select-task">
                        <input type='checkbox' >
                    </span>
                    
               <span class="rside">
                   <span class="task-name">
                       <span class="ntext name-text"><?php echo $value_t->name; ?></span>
                       <span class="utext name-upd" ></span>
                       
                    </span>
                   <span class="task-bar">
                       <ul class="list-crud">
                           <li><a class="upd-task"rel="tooltip" 
                       data-html="true" 
                       title="Edit task name" 
                       data-content="
                       <input type='text' data-id='<?php echo $value_t->id; ?>' 
                       class='edit_task'><input type='submit' 
                       class='btn edit_task_button' onClick='upd_task(<?php echo $value_t->id; ?>,$(this).prev().val());' 
                       value='Update' >"
                       href="#">
                                   <img src="/design/img/editmin.png" alt="" >
                               </a> | </li>
                           <li><a class="del-task" data-tid="<?php echo $value_t->id; ?>" href="#"><img src="/design/img/delmin.png" alt="" ></a></li>
                       </ul>
                   </span>
              </span>
           </li>
            <?php endforeach; ?>
           <div class="clear"></div>
       </ul>
    </div>
</div>
        
<?php endforeach; ?>

<script type="text/javascript">
    $('.dropupdate').popover(); 
    $('.upd-task').popover();

</script>
