
<?php 
      include 'include/top-header.php';
      include 'include/topbar.php';
      include 'include/sidebar.php';
?>
    <!-- BEGIN: Page Main-->
<div id="main">
  <div class="row">
    <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
    
    <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
      <!-- Search for small screen-->
      <div class="container">
        <div class="row">
          <div class="col s10 m6 l6">
            <h5 class="breadcrumbs-title mt-0 mb-0">Add New Courses</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12">
      <div class="container">
        <div class="seaction">
          <div class="row">
            <div class="col s12 m12 l12">
              <div id="Form-advance" class="card card card-default scrollspy">
                <div class="card-content">
                  <h4 class="card-title">Course Details</h4>
                  <form class="col s12" id="add_course">

                    <div class="row">
                      <div class="input-field col  s12">
                        <select name="branch" style="display: block;">
                          <option value="" disabled selected>Choose your Branch</option>
                           <?php $sql=mysqli_query($con, "select * from branch");
                                while ($branch=mysqli_fetch_array($sql))
                                {?>
                                 <option value="<?php echo $branch['branch_code'];?>"><?php echo $branch['branch_name'];?>  
                                 </option>
                          <?php } ?>
                        </select>
                        <label>Select Course</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col  s12">
                        <select name="stream" onchange="getcourse(this.value);" style="display: block;">
                          <option value="" disabled selected>Choose your Stream</option>
                            <?php $sql=mysqli_query($con, "select * from course_cat");
                                    while ($course=mysqli_fetch_array($sql))
                                    {?>
                                     <option value="<?php echo $course['id'];?>"><?php echo $course['course'];?>  
                                     </option>
                              <?php } ?>
                        </select>
                        <label>Select Course</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col m6 s12">
                        <select name="course" style="display: block;" id="course_list">
                          <option value="" disabled selected>Choose your Course</option>
                            
                          </select>
                        <label>Select Semester</label>
                      </div>

                      <div class="input-field col m6 s12">
                        <input name="date"  type="date" class="datepicker arw" id="dob">
                        <label for="dob">Date</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s12">
                        <button class="btn cyan waves-effect waves-light right add_course" value="add_course" name="addCourse" type="submit">Add Course
                          <i class="material-icons right">send</i>
                        </button>
                      </div>
                    </div>
                  </form>                
                </div>
              </div>
            </div>
          </div>
        </div>          
      </div>
    </div>
  </div>
</div>
    <!-- END: Page Main-->

    <!-- Theme Customizer -->
<?php include 'include/customizer.php'; 
   include 'include/footer.php';
    ?>
