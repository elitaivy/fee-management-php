
var jQueryScript = document.createElement('script');  
jQueryScript.setAttribute('src','https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet');
document.head.appendChild(jQueryScript);

// for login varification
  $(document).ready(function()
    {
      $("#login").on('submit',function(e)
        {
      
            var a=new FormData(this);
            a.append('login','login');
            e.preventDefault();
            $.ajax
              ({
                type:'POST',
                url:'getajax.php',
                data:a,
                contentType:false,
                cache:false,
                processData:false,
                beforeSend:function()
                {
                    $('.login').attr("disabled","disabled");
                },
                success:function(msg)
                {
                    msg=$.trim(msg);
                    if (msg=="login") 
                    {
                      //show_message("Success","Login success","success");
                      window.location="home.php";
                    }
                    else
                    {
                      show_message("ERROR",msg,"error");
                      $('.login').attr("disabled",false);
                    }
                }
                });
          });
    });

function show_message(title,text,mode)
{
  swal(title,text,mode);
}

// for fetch city_list in dropdown at add_branch page
function getcity(val){
  //alert('hello!')
  $.ajax({
    type:"POST",
    url:"getajax.php",
    data:'state_id='+val,
    success: function(data)
    {
      
      $("#city_list").html(data);

      //alert(html(data));
    }
  });
}




function getcourse(val){
  //alert('hello!')
  $.ajax({
    type:"POST",
    url:"getajax.php",
    data:'course_id='+val,
    success: function(data)
    {
      
      $("#course_list").html(data);

      //alert(html(data));
    }
  });
}


// for fetch all branch data in datatable form DB
       $(document).ready(function(){
          
          $("[attr=example]").DataTable
          ({
              "responsive": true,
              ajax:{
                "url":"getajax.php",
                "type":"POST",
                "dataType":"json",
                "data":{getlist:'branchlist'}
              },
              columns:
              [
                {data:'id'},
                {data:'date'},
                {data:'branch_code'},
                {data:'branch_name'},
                {data:'branch_add'},
                {data:'status'},
                {
                    mRender:function(data,type,row)
                    {
                     
                      return '<a id="" class=" waves-effect waves-light btn-Small action-btn mdl modal-trigger" href="#modal1" user_id='+row.id+'><i class="material-icons">create</i></a><a id="" class=" waves-effect waves-light btn-Small action-btn dlt modal-trigger" href="#swal" user_id='+row.id+'><i class="material-icons">delete_forever</i></a>';                     
                    }
                  }
              ]
          });
           $("body").on('click','.dropdown-trigger',function(){

              $('.dropdown-trigger').dropdown();
            });
        });


            


// for fetch value in edit modal for branch 
  $(document).ready(function(){
    $('body').on('click','.mdl',function(){

        var id=$(this).attr("user_id");
            $.ajax({
              "url":"getajax.php",
              "type":"POST",
              "data":{id:id,modal:'edit_branch'},
              "dataType":"json",
              success:function(data)
              { // alert(data);
                $('.id').val(data.id);
                $('.branch_name').val(data.branch_name);
                $('.branch_add').val(data.branch_add);
                $('.branch_user_name').val(data.branch_user_name);
                $('.password').val(data.password);
                $('.state').val(data.state);
                $('.status').val(data.status);
                $('.city').html("<option value='"+data.city_code+"'>"+data.city_name+"</option>");
                $('.pincode').val(data.pincode);
                $('.date').val(data.reg_date);
              }
            });
              $('.modal').modal();
      });
  });



// for Delete branches from  table

 $(document).ready(function()
 {
    $('body').on('click','.dlt',function(e)
    {
      var that=this;
          swal
          ({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            icon: 'warning',
            dangerMode: true,
            buttons: 
            {
              cancel: 'No, Please!',
              delete: 'Yes, Delete It'
            }
          })
          .then(function (willDelete)
          {
            if (willDelete) 
            {
             var id=$(that).attr("user_id");
             //alert(id);
                $.ajax
                ({

                  "url":"getajax.php",
                  "type":"GET",
                  "data":{id:id,modal:'delete_branch'},
                  "contentType":"false",
                  "cache":"false",
                  success:function(msg)
                  {
                    msg=$.trim(msg);
                    if (msg=="Delete")
                    {                    
                      swal("Poof! Your imaginary file has been deleted!", 
                      {
                      icon: "success",
                      });
                    }
                  }
                });
            } 

            else 
            {
              swal("Your imaginary file is safe", {
                title: 'Cancelled',
                icon: "error",
              });
            }
          });

      });
  });

                                                          //=========================Branch end here


// for fetch all Teachres data in datatable form DB

       $(document).ready(function(){
          
          $("[attr=teacher]").DataTable
          ({
              "responsive": true,
              ajax:{
                "url":"getajax.php",
                "type":"POST",
                "dataType":"json",
                "data":{getlist:'teachlist'}
              },
              columns:
              [
              
                {data:'id'},
                {data:'teacher_code'},
                {data:'reg_date'},
                {data:'branch_name'},
                {data:'teacher_user_name'},
                {data:'teacher_name'},
                {data:'gender'},
                {data:'teacher_add'},
                {data:'pincode'},
                {data:'status'},
                {
                    mRender:function(data,type,row)
                    {
                     
                      return '<a id="" class=" waves-effect waves-light btn-Small action-btn edit_teacher modal-trigger" href="#modal2" user_id='+row.id+'><i class="material-icons">create</i></a><a id="" class=" waves-effect waves-light btn-Small action-btn delete_teacher modal-trigger" href="#swal" user_id='+row.id+'><i class="material-icons">delete_forever</i></a>';                     
                    }
                  }
              ]
          });
           $("body").on('click','.dropdown-trigger',function(){

              $('.dropdown-trigger').dropdown();
            });
        });




// for fetch value in edit modal for teachers 


  $(document).ready(function(){
    $('body').on('click','.edit_teacher',function(){

        var id=$(this).attr("user_id");
            $.ajax({
              "url":"getajax.php",
              "type":"POST",
              "data":{id:id,modal:'edit_teacher'},
              "dataType":"json",
              success:function(data)
              { //alert(data.branch_code);
                $('.id').val(data.id);
                $('.branch_name').val(data.branch_code);
                $('.teacher_user_name').val(data.teacher_user_name);
                $('.password').val(data.password);
                $('.teacher_name').val(data.teacher_name);
                $('.teacher_add').val(data.teacher_add);
                $('.state').val(data.state);
                $('.status').val(data.status);
                $('.city').html("<option value='"+data.city_code+"'>"+data.city_name+"</option>");
                $('.pincode').val(data.pincode);
                $('.date').val(data.reg_date);
              }
            });
              $('.modal').modal();
      });
  });

// for  delete teachers  list ==========================

$(document).ready(function()
 {
    $('body').on('click','.delete_teacher',function(e)
    {
      var that=this;
          swal
          ({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            icon: 'warning',
            dangerMode: true,
            buttons: 
            {
              cancel: 'No, Please!',
              delete: 'Yes, Delete It'
            }
          })
          .then(function (willDelete)
          {
            if (willDelete) 
            {
             var id=$(that).attr("user_id");
             //alert(id);
                $.ajax
                ({

                  "url":"getajax.php",
                  "type":"GET",
                  "data":{id:id,modal:'delete_teacher'},
                  "contentType":"false",
                  "cache":"false",
                  success:function(msg)
                  {
                    msg=$.trim(msg);
                    if (msg=="Delete")
                    {                    
                      swal("Poof! Your imaginary file has been deleted!", 
                      {
                      icon: "success",
                      });
                    }
                  }
                });
            } 

            else 
            {
              swal("Your imaginary file is safe", {
                title: 'Cancelled',
                icon: "error",
              });
            }
          });

      });
  });


                                                                      //=========================Branch end here
  $(document).ready(function(){
    $("[attr=course]").DataTable
    ({
      "responsive":true,
      ajax:{
        "url":"getajax.php",
        "type":"POST",
        "dataType":"json",
        "data":{getlist:'courselist'}
      },
      columns:
      [
        {data:'id'},
        {data:'reg_no'},
        {data:'branch_name'},
        {data:'stream_name'},
        {data:'course_name'},
        {data:'date'},
        {data:'status'},
        {
         mRender:function(data,type,row)
          {
            return '<a id="" class=" waves-effect waves-light btn-Small action-btn modal-trigger edit_course" href="#modal3" user_id='+row.id+'><i class="material-icons">create</i></a><a id="" class=" waves-effect waves-light btn-Small action-btn delete_course modal-trigger" href="#swal" user_id='+row.id+'><i class="material-icons">delete_forever</i></a>'; 
          }
        }
      ]

    });
    $("body").on('click','.dropdown-trigger',function(){
      $('.dropdown-trigger').dropdown();
    });
  });




$(document).ready(function(){
  $('body').on('click','.edit_course',function(){
    var id=$(this).attr("user_id");
      $.ajax({
        "url":"getajax.php",
        "type":"POST",
        "data":{id:id,modal:'edit_course'},
        "dataType":"json",
        success:function(data)
        {

          $('.id').val(data.id);
          $('.branch_name').val(data.branch_name);
          $('.stream').val(data.stream_name);
          $('.course').html("<option value='"+data.subcourse_cat_code+"'>"+data.subcourse_cat_name+"</option>");
          $('.status').val(data.status);
          $('.date').val(data.date);
        }
      });
      $('.modal').modal();
  });
});


 $(document).ready(function()
 {
    $('body').on('click','.delete_course',function(e)
    {
      var that=this;
          swal
          ({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            icon: 'warning',
            dangerMode: true,
            buttons: 
            {
              cancel: 'No, Please!',
              delete: 'Yes, Delete It'
            }
          })
          .then(function (willDelete)
          {
            if (willDelete) 
            {
             var id=$(that).attr("user_id");
             //alert(id);
                $.ajax
                ({

                  "url":"getajax.php",
                  "type":"GET",
                  "data":{id:id,modal:'delete_course'},
                  "contentType":"false",
                  "cache":"false",
                  success:function(msg)
                  {
                    msg=$.trim(msg);
                    if (msg=="Delete")
                    {                    
                      swal("Poof! Your imaginary file has been deleted!", 
                      {
                      icon: "success",
                      });
                    }
                  }
                });
            } 

            else 
            {
              swal("Your imaginary file is safe", {
                title: 'Cancelled',
                icon: "error",
              });
            }
          });

      });
  });
