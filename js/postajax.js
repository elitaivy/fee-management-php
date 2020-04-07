
 // ajax code for adding branch
  $(document).ready(function()
    {
      $("#add_branch").on('submit',function(e)
        { //alert("hello");
          var a=new FormData(this);
          a.append('add_branch','addBranch');
          e.preventDefault();
          $.ajax
            ({
              type:'POST',
              url:'postajax.php',
              data:a,
              contentType:false,
              cache:false,
              processData:false,
              beforeSend:function()
                {
                  $('.add_branch').attr("disabled",false);
                },
              success:function(msg)
                {
                  msg=$.trim(msg);
                  
                   show_message("Success","Branch Added successfully","success");
                    //window.location="home.php";
                    $('#add_branch').trigger("reset");
                }
            });
          });
    });

function show_message(title,text,mode)
{
  swal(title,text,mode);
}

 // ajax code for branch Update

  $(document).ready(function()
    {
      $("#update_branch").on('submit',function(e)
        {//alert("hello");     
          var a=new FormData(this);
          a.append('update_branch','updateBranch');
          e.preventDefault();
          $.ajax
            ({
              type:'POST',
              url:'postajax.php',
              data:a,
              contentType:false,
              cache:false,
              processData:false,
              beforeSend:function()
                {
                  $('.update_branch').attr("disabled",false);
                },
              success:function(msg)
                {
                  msg=$.trim(msg);
                  
                   show_message("Success","Branch Details successfully updated","success");
                    //window.location="home.php";
                    // $('#update_branch').trigger("reset");
                }
            });
        });
    });

function show_message(title,text,mode)
{
  swal(title,text,mode);
}
// ajax code for adding teacher




  $(document).ready(function()
    {
      $("#add_teachers").on('submit',function(e)
        {
          var a=new FormData(this);
          a.append('add_teachers','addTeachers');
          e.preventDefault();

     
          $.ajax
            ({
              type:'POST',
              url:'postajax.php',
              data:a,
              contentType:false,
              cache:false,
              processData:false,

              beforeSend:function()
                {
                  $('.add_teachers').attr("disabled",false);
                },
              success:function(msg)
                {
                  msg=$.trim(msg);
                  
                   show_message("Success"," Teachers Added successfully","success");
                    //window.location="home.php";
                    // $('#add_teachers').trigger("reset");
                }     
            });
        });
    });

function show_message(title,text,mode)
{
  swal(title,text,mode);
}

 // ajax code for branch Update

  $(document).ready(function()
    {
      $("#update_teacher").on('submit',function(e)
        {//alert("hello");     
          var a=new FormData(this);
          a.append('update_teacher','updateTeacher');
          e.preventDefault();
          $.ajax
            ({
              type:'POST',
              url:'postajax.php',
              data:a,
              contentType:false,
              cache:false,
              processData:false,
              beforeSend:function()
                {
                  $('.update_teacher').attr("disabled",false);
                },
              success:function(msg)
                {
                  msg=$.trim(msg);                  
                   show_message("Success","teacher Details successfully updated","success");
                    //window.location="home.php";
                    $('#update_teacher').trigger("reset");
                }
            });
        });
    });

function show_message(title,text,mode)
{
  swal(title,text,mode);
}


$(document).ready(function(){
  $("#add_course").on('submit', function(e){
    var a=new FormData(this);
    a.append('add_course','addCourse');
    e.preventDefault();
    $.ajax({
      type:'POST',
      url:'postajax.php',
      data:a,
      contentType:false,
      cache:false,
      processData:false,
      beforeSend:function()
      {
        $('.add_course').attr("disabled",false);

      },
      success:function(msg)
      {
        msg=$.trim(msg);
        show_message("Success","Branch Added successfully", "success");
        $('#add_course').trigger("reset");
      }

    });
  });
});


 $(document).ready(function()
    {
      $("#update_course").on('submit',function(e)
        {//alert("hello");     
          var a=new FormData(this);
          a.append('update_course','updateCourse');
          e.preventDefault();
          $.ajax
            ({
              type:'POST',
              url:'postajax.php',
              data:a,
              contentType:false,
              cache:false,
              processData:false,
              beforeSend:function()
                {
                  $('.update_course').attr("disabled",false);
                },
              success:function(msg)
                {
                  msg=$.trim(msg);                  
                   show_message("Success","Course Details successfully updated","success");
                    //window.location="home.php";
                    $('#update_course').trigger("reset");
                }
            });
        });
    });

function show_message(title,text,mode)
{
  swal(title,text,mode);
}
