<?php 
session_start();
include 'include/dbc.php';

/*--------------------------for add branch------------------*/

if (isset($_POST['add_branch'])) 
	{ 
		if ($_POST['add_branch']=='addBranch') {
			//echo $_POST['add_branch'];
				
				$date=$_POST['date'];
				$branch_name=$_POST['branch_name'];
				$branch_add=$_POST['branch_add'];
				$branch_user_name=$_POST['branch_user_name'];
				$password=$_POST['password'];
				$state=$_POST['state'];
				$city=$_POST['city'];
				$pincode=$_POST['pincode'];
				// echo "<script></script>";
				$sql=mysqli_query($con, "insert into branch ( cur_date, reg_date, branch_user_name, password, branch_name, branch_add, pincode, state, city, status) value(localtime(),'".$date."','".$branch_user_name."','".$password."','".$branch_name."','".$branch_add."','".$pincode."','".$state."','".$city."','1')");

					$id=mysqli_insert_id($con);
					//print_r($id);
						if (!empty($id))
						{
								$reg_no="BRANCH00".$id;
								$sql=mysqli_query($con, "update branch SET branch_code='".$reg_no."' where id = '".$id."'");
								print_r($reg_no);				
						}

		}		
		echo "branch_added";
	}


if (isset($_POST['update_branch'])) 
	{
		if ($_POST['update_branch']=='updateBranch') {
			//echo $_POST['add_branch'];
				$id=$_POST['id'];
				$date=$_POST['date'];
				$branch_name=$_POST['branch_name'];
				$branch_add=$_POST['branch_add'];
				$branch_user_name=$_POST['branch_user_name'];
				$password=$_POST['password'];
				$state=$_POST['state'];
				$city=$_POST['city'];
				$pincode=$_POST['pincode'];
				$status=$_POST['status'];
				// echo "<script></script>";
				$sql=mysqli_query($con, "update branch set reg_date='".$date."', branch_user_name='".$branch_user_name."', password='".$password."', branch_name= '".$branch_name."', branch_add='".$branch_add."', pincode='".$pincode."', state='".$state."', city='".$city."',  status='".$status."', update_dt=LOCALTIME() where id='".$id."' ");

		}		
		echo "branch_Updated";
	}
	

if (isset($_POST['add_teachers'])) 
	{
		// echo $_POST['add_teachers'];
		if ($_POST['add_teachers']=='addTeachers') {
				$date=$_POST['date'];
				$branch_code=$_POST['branch'];
				$teacher_name=$_POST['teacher_name'];
				$gender=$_POST['gender'];
				$teacher_add=$_POST['teacher_add'];
				$teacher_user_name=$_POST['tea_usr_name'];
				$password=$_POST['password'];
				$state=$_POST['state'];
				$city=$_POST['city'];
				$pincode=$_POST['pincode'];

				$sql=mysqli_query($con, "insert into teacher (cur_date, reg_date, branch_code, teacher_user_name, password, teacher_name, gender,teacher_add,  state, city, pincode, status) value(localtime(),'$date','$branch_code','$teacher_user_name','$password','$teacher_name','$gender','$teacher_add','$state','$city', '$pincode','1')");

					$id=mysqli_insert_id($con);
					//print_r($id);
						if (!empty($id))
						{
								$teacher_code="TEACHER00".$id;
								$sql=mysqli_query($con, "update teacher SET teacher_code='".$teacher_code."' where id = '".$id."'");
								//print_r($teacher_code);				
						}

		}		

	echo "teacher_added";
}

// for update branch

if (isset($_POST['update_teacher'])) 
	{
		if ($_POST['update_teacher']=='updateTeacher') {
			//echo $_POST['add_branch'];
				$id=$_POST['id'];
				$branch_name=$_POST['branch_name'];
				$teacher_user_name=$_POST['teacher_user_name'];
				$password=$_POST['password'];
				$teacher_name=$_POST['teacher_name'];
				$teacher_add=$_POST['teacher_add'];
				$status=$_POST['status'];
				$state=$_POST['state'];
				$city=$_POST['city'];
				$pincode=$_POST['pincode'];
				$date=$_POST['date'];
				
				$sql=mysqli_query($con, "update teacher set branch_code= '".$branch_name."',  teacher_user_name='".$teacher_user_name."', password='".$password."', teacher_name= '".$teacher_name."', teacher_add='".$teacher_add."',status='".$status."',  state='".$state."', city='".$city."', pincode='".$pincode."',   reg_date='".$date."', update_dt=LOCALTIME() where id='".$id."' ");

		}		
		echo "teacher_Updated";
	}
	


	if (isset($_POST['add_course'])) 
	{
		// echo $_POST['add_teachers'];
		if ($_POST['add_course']=='addCourse') {
				$date=$_POST['date'];
				$branch_code=$_POST['branch'];
				$stream=$_POST['stream'];
				$course=$_POST['course'];

				$sql=mysqli_query($con, "insert into course (reg_dt, date, branch_name,  stream_name, course_name, status) 
					value(localtime(),'$date','$branch_code','$stream','$course', '1')");

					$id=mysqli_insert_id($con);
					//print_r($id);
						if (!empty($id))
						{
								$reg_no="COURSE00".$id;
								$sql=mysqli_query($con, "update course SET reg_no='".$reg_no."' where id = '".$id."'");
								//print_r($teacher_code);				
						}

		}		

	echo "branch_added";
}


if (isset($_POST['update_course'])) 
	{
		if ($_POST['update_course']=='updateCourse') {
			//echo $_POST['add_branch'];
				$id=$_POST['id'];
				$branch_name=$_POST['branch_name'];
				$stream=$_POST['stream'];
				$course=$_POST['course'];
				$status=$_POST['status'];
				$date=$_POST['date'];
				
				$sql=mysqli_query($con, "update course set
				branch_name= '".$branch_name."', 
				stream_name='".$stream."', 
				course_name= '".$course."', 
				status='".$status."',  
				date='".$date."',  
				update_dt=LOCALTIME() where id='".$id."' ");

		}		
		echo "course_Updated";
	}
	


 ?>