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
              <h5 class="breadcrumbs-title mt-0 mb-0">Add New Branch</h5>               
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
                    <h4 class="card-title">Branch Details</h4>
                      <form class="col s12 card2" id="add_branch">
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="branch_name" type="text" name="branch_name">
                            <label for="branch_name">Branch Name</label>
                          </div>

                          <div class="input-field col s12">
                            <input id="branch_add" type="text" name="branch_add">
                            <label for="branch_name">Branch Address</label>
                          </div>
                          
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="user_name" type="text" name="branch_user_name">
                            <label for="user_name">User Name</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="password6" type="password" name="password" >
                            <label for="password">Password</label>
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col m6 s12">
                            <select name="state" onchange="getcity(this.value);" style="display: block;">
                              <option value="" disabled selected>Choose your State</option>
                                <?php 
                                  $sql=mysqli_query($con, "select * from state_list") ;
                                  while ($state=mysqli_fetch_array($sql)) 
                                    {?>
                                      <option value="<?php echo $state['id']; ?>"><?php echo $state['state']; ?></option>
                                   <?php }
                                ?>
                            </select>
                            <label>Select State</label>
                          </div>
                          
                          <div class="input-field col m6 s12">
                            <select name="city" id="city_list" class="mycites" style="display: block;">
                                            
                            </select>
                            <label>Select City</label>
                           
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="input-field col m6 s12">
                              <input id="pincode" type="text" name="pincode">
                              <label for="pincode">Pin Code</label>
                            </div>

                          <div class="input-field col m6 s12">
                            <input name="date"  type="date" class="datepicker arw" id="dob">
                            <label for="dob">Date</label>
                          </div>
                        </div>



                          
                       
                        <div class="row">
                          <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right add_branch" type="submit" value="addBranch" name="add_branch">Add Branch
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
<?php include 'include/customizer.php'; ?>
    <!--/ Theme Customizer -->
 
    <!-- BEGIN: Footer-->
<?php include 'include/footer.php'; ?>
    <!-- END: Footer-->


