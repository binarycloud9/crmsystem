function showList(){
    $.ajax({
        url:'/project/show',
        type:'post',
        success:function(data){
            $('.todo-content').html(data);
             
        }
    });
}

function upd_project(id,pname){
               var pid = id,
                   name = pname;
                    $.ajax({
                    url:'/project/editproject',
                    data:{id:pid,name:name},
                    type:'post',
                    success:function(){
                        showList();
                            }
                        });
         $('.dropupdate').popover('hide');
    }
    
    
function upd_task(id,tname){
               var tid = id,
                   name = tname;
                    $.ajax({
                    url:'/task/edittask',
                    data:{id:tid,name:name},
                    type:'post',
                    success:function(){
                        showList();
                            }
                        });
         $('.edit_task').popover('hide');
    }

$(function(){
    showList();
    
    $('.btlist').live('click',function(){
        var name = "Complete the test task for Ruby Garage";
        $.ajax({
        url:'/project/addproject',
        data:{name:name},
        type:'post',
        success:function(){
                showList();
            }
                 });
                     });  
             
            $('.btx').live('click',function(){
                    var name = $(this).prev().val(),
                        pid = $(this).prev().data('id');
                                $.ajax({
                                    url:'/task/addtask',
                                    data:{name:name, project_id:pid},
                                    type:'post',
                                    success:function(){
                                        showList();
                                    }
                             });
                });
                
           $('.del-project').live('click',function(){
                var pid = $(this).data('pid');
                          $.ajax({
                             url:'/project/delproject',
                             data:{project_id:pid},
                             type:'post',
                             success:function(){
                                 showList();
                             }
                     });
             });
             
         $('.del-task').live('click',function(){
           var tid = $(this).data('tid');
                     $.ajax({
                        url:'/task/deltask',
                        data:{id:tid},
                        type:'post',
                        success:function(){
                            showList();
                        }
                });
             });  

});