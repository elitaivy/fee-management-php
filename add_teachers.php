
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
            <h5 class="breadcrumbs-title mt-0 mb-0">Add New Teacher</h5>
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
                  <h4 class="card-title">Teacher's Details</h4>
                  <form class="col s12" id="add_teachers">
                    <div class="row">
                      <div class="row">
                        <div class="input-field col  s12">
                          <select name="branch" style="display: block;">
                            <option value=""  disabled selected>Choose your Branch</option>
                              <?php $sql=mysqli_query($con, "select * from branch");
                                    while ($branch=mysqli_fetch_array($sql))
                                    {?>
                                     <option value="<?php echo $branch['branch_code'];?>"><?php echo $branch['branch_name'];?>  
                                     </option>
                              <?php } ?>
                          </select>
                          <label>Select Branch</label>
                        </div>
                      </div>
                      
                      
                      <div class="row">
                        <div class="input-field col m8 s12">
                          <select name="gender" style="display: block;">
                            <option value=""  disabled selected>Choose your Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                          <label>Select Gender</label>
                        </div>

                        <div class="input-field col m4 s12">
                          <input name="date" type="date" class="datepicker arw" id="dob">
                          <label for="dob">Date</label>
                        </div>
                      </div>
                       <div class="row">
                        <div class="input-field col s12">
                          <input id="teacher_name" type="text" name="teacher_name">
                          <label for="teacher_name">Teacher's Name</label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <input id="teacher_add" type="text" name="teacher_add">
                          <label for="teacher_add">Teacher's Address</label>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="input-field col s12">
                          <input id="user_name" type="text" name="tea_usr_name">
                          <label for="user_name">User Name</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input id="password6" type="password" name="password">
                          <label for="password">Password</label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col m4 s12">
                          <select name="state" onchange="getcity(this.value);" style="display: block;">
                            <option value="" disabled selected>Choose your State</option>
                             
                              <?php $sql=mysqli_query($con,"select * from state_list"); 
                                    while ($state=mysqli_fetch_array($sql))
                                      {?>
                                      <option value="<?php echo $state['id'];?>"><?php echo $state['state'];?></option>
                                <?php } ?>
                          </select>
                          <label>Select State</label>
                        </div>
                      
                        <div class="input-field col m4 s12">
                          <select name="city" id="city_list" style="display: block;">
                                              
                          </select>
                          <label>Select City</label>
                        </div>
                      
                        <div class="input-field col m4 s12">
                          <input id="pincode" type="text" name="pincode">
                          <label for="pincode">Pin Code</label>
                        </div>  
                      </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light right add_teachers" type="submit" name="add_teachers" value="addTeachers">Submit
                            <i class="material-icons right">send</i>
                          </button>
                        </div>
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

<?php include 'include/customizer.php'; 
      include 'include/footer.php';
    ?>
