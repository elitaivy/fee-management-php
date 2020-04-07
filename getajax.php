
<?php 
include 'include/dbc.php';
/* ---------------------------------- For Login Purpose---------------------------------------*/

if (isset($_POST['login'])) {
    if ($_POST['login']=='login')
        {
          $name=$_POST['name'];
          $password=$_POST['password'];          
          $res=mysqli_query($con, "select * from admin where name='".$name."' && password='".$password."' ");
          $data=mysqli_fetch_assoc($res);

            if (!empty($data))
              { 

                session_start();
                $_SESSION['name']=$name;
                $_SESSION['name'] == $data['name'];                    
                    if ($data['type']==1) 
                      {
                         //print_r($data);
                        echo "login";

                      }
                    else 
                      {
                        echo "invalid";
                      }           
              }
            else
            {
              echo "failed";
            }die();
        }    
}
/* ---------------------------------- For view all Branches ---------------------------------------*/


if (!empty($_POST["state_id"]))
{
  $query=mysqli_query($con,"select * from all_cities where state_code='".$_POST["state_id"]."'");
    ?>
<option value="">Select City</option>
<?php 
while ($row=mysqli_fetch_array($query)) 
  {?>
   <option value="<?php echo $row["city_code"];?> "> <?php echo $row ["city_name"]; ?> </option>
 <?php } }

/*-------------------------------  For view all  courses  -----------------------*/

if (!empty($_POST["course_id"]))
{
  $query=mysqli_query($con,"select * from course_sub_cat where course_code='".$_POST["course_id"]."'");
    ?>
<option value="">Select course</option>
<?php 
while ($row=mysqli_fetch_array($query)) 
  {?>
   <option value="<?php echo $row["subcourse_cat_code"];?> "> <?php echo $row ["subcourse_cat_name"]; ?> </option>
 <?php } }




/* ---------------------------------- For view all Details of branch in data table ---------------------------------------*/
if(isset($_POST['getlist'])){
  if($_POST['getlist']=="branchlist"){
    $sql=mysqli_query($con, "SELECT state_list.state, all_cities.city_name, branch.id, branch.reg_date, branch.branch_code,branch.branch_name,branch.branch_add,branch.pincode,branch.status FROM state_list INNER JOIN branch ON state_list.id=branch.state INNER JOIN all_cities ON all_cities.city_code=branch.city;");

    $branch_list = array();

    while ($branch=mysqli_fetch_array($sql))
    {
        $obj=new stdClass;

        $obj->id=$branch['id'];
        $obj->date=$branch['reg_date'];
        $obj->branch_code=$branch['branch_code'];
        $obj->branch_name=$branch['branch_name'];
        $obj->branch_add=$branch['branch_add'].",".$branch['city_name']."-<br>".$branch['state']."-".$branch['pincode'];

        if ($branch['status']==1)
        {
            $text='active'; 
            $class='btn-succes';
        }
        else
        {
            $text='inactive';
            $class='btn-denger';
        }


        $obj->status=" <button type='button' class='btn ".$class."'>".$text."</button>";

    array_push($branch_list, $obj);

    }

    $result= array("data" => $branch_list);
    echo json_encode($result);
    // echo $result;
  }
  /* ---------------------------------- For view all Details of teacher in data table ---------------------------------------*/
  
  if($_POST['getlist']=="teachlist"){

    $sql=mysqli_query($con, "SELECT state_list.state, all_cities.city_name, branch.branch_name, teacher.id, teacher.reg_date, 
  teacher.teacher_code, teacher.teacher_user_name, teacher.teacher_name, teacher.gender, teacher.teacher_add, teacher.pincode, teacher.status FROM state_list INNER JOIN teacher ON state_list.id=teacher.state INNER JOIN all_cities ON all_cities.city_code=teacher.city INNER JOIN branch ON branch.branch_code=teacher.branch_code;");

    $teacher_list = array();

    while ($teacher=mysqli_fetch_array($sql))
    {
        $obj=new stdClass;

        $obj->id=$teacher['id'];
        $obj->teacher_code=$teacher['teacher_code'];
        $obj->reg_date=$teacher['reg_date'];
        $obj->branch_name=$teacher['branch_name'];
        $obj->teacher_user_name=$teacher['teacher_user_name'];
        $obj->teacher_name=$teacher['teacher_name'];
        $obj->gender=$teacher['gender'];
        $obj->teacher_add=$teacher['teacher_add'].",".$teacher['city_name']."-<br>".$teacher['state'];
        $obj->pincode=$teacher['pincode'];

        if ($teacher['status']==1)
        {
            $text='active'; 
            $class='btn-succes';
        }
        else
        {
            $text='inactive';
            $class='btn-denger';
        }


        $obj->status=" <button type='button' class='btn ".$class."'>".$text."</button>";

    array_push($teacher_list, $obj);

    }

    $result= array("data" => $teacher_list);
    echo json_encode($result);
    // echo $result;


  }


  if ($_POST['getlist']=="courselist") {
    $sql=mysqli_query($con,"SELECT course_cat.course, course_sub_cat.subcourse_cat_name, branch.branch_name, course.id, course.reg_no, course.status, course.date, course.date FROM course_cat INNER JOIN course ON course_cat.id=course.stream_name INNER JOIN course_sub_cat ON course_sub_cat.subcourse_cat_code=course.course_name INNER JOIN branch ON branch.branch_code=course.branch_name;");

      $courselist=array();

      while ($course=mysqli_fetch_array($sql)) {
        
        $obj=new stdClass;

        $obj->id=$course['id'];
        $obj->reg_no=$course['reg_no'];
        $obj->branch_name=$course['branch_name'];
        $obj->stream_name=$course['course'];
        $obj->course_name=$course['subcourse_cat_name'];
        $obj->date=$course['date'];
        if ($course['status']==1)
        {
            $text='active'; 
            $class='btn-succes';
        }
        else 
        {
            $text='inactive';
            $class='btn-denger';
        }


        $obj->status=" <button type='button' class='btn ".$class."'>".$text."</button>";

        array_push($courselist,$obj);
      }

      $result=array("data"=> $courselist);
      echo json_encode($result);

  }

}

// <------For Fetch details in Edit  Modal-----------------
if (isset($_POST['modal'])) {
  if (($_POST['modal']=="edit_branch")) {
   
    $user_id=$_POST['id'];
    $sql=mysqli_query($con, "select * from branch b LEFT JOIN all_cities c on c.city_code=b.city where b.id= '".$user_id."' ");
    $view=mysqli_fetch_assoc($sql);

    $a=json_encode($view);
    echo $a;
  }
  if (($_POST['modal']=="edit_teacher")) {
   
    $user_id=$_POST['id'];
    $sql=mysqli_query($con, "select * from teacher t LEFT JOIN all_cities c on c.city_code=t.city where t.id= '".$user_id."'  ");
    $view=mysqli_fetch_assoc($sql);

    $a=json_encode($view);
    echo $a ;
  }

  if (($_POST['modal']=="edit_course")) {
   
    $user_id=$_POST['id'];
    $sql=mysqli_query($con, "select * from course a LEFT JOIN course_sub_cat b  on b.subcourse_cat_code=a.course_name  where a.id= '".$user_id."'  ");
    $view=mysqli_fetch_assoc($sql);

    $a=json_encode($view);
    echo $a ;
  }

}



// <------For Delete details from table-----------------


if (isset($_GET['modal'])) {
  if (($_GET['modal']=="delete_branch")) {

    if ($_GET['id']) {
      $id=$_GET['id'];
      $sql=mysqli_query($con, "delete from branch where id='".$id."'");
      if (!empty($sql)) {
        echo "Delete";
      }
      else{
        echo "Error";
      }
    }
  }

  if (($_GET['modal']=="delete_teacher")) {

    if ($_GET['id']) {
      $id=$_GET['id'];
      $sql=mysqli_query($con, "delete from teacher where id='".$id."'");
      if (!empty($sql)) {
        echo "Delete";
      }
      else{
        echo "Error";
      }
    }
  }

   if (($_GET['modal']=="delete_course")) {

    if ($_GET['id']) {
      $id=$_GET['id'];
      $sql=mysqli_query($con, "delete from course where id='".$id."'");
      if (!empty($sql)) {
        echo "Delete";
      }
      else{
        echo "Error";
      }
    }
  }
}


?>