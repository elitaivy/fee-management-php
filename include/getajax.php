<?php
include 'include/top-header.php';



/* ------------------------------------------- For Login Purpose-----------------------------------*/
if (isset($_POST['check'])) {
    if (isset($_POST['login'])) 
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
                        header('location:home.php');
                      }
                    else 
                      {
                        header('location:user.php');
                      }           
              }
              

            else
            {
              echo "failed";
            }

        }
}
/* ---------------------------------- For Login Purpose---------------------------------------*/
?>

