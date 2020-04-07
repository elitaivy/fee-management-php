<?php 
  include'include/top-header.php';
     // <!-- BEGIN: Header-->
  include 'include/topbar.php';
    // <!-- BEGIN: SideNav-->
  include 'include/sidebar.php';
    // <!-- END: SideNav-->
 ?>
     <!-- BEGIN: Page Main-->
<div id="main">
  <div class="row">
    
    <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
    <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
      <div class="container">
        <div class="row">
          <div class="col s10 m6 l6">
            <h5 class="breadcrumbs-title mt-0 mb-0">List of Students</h5>         
          </div>
        </div>
      </div>
    </div>

    <div class="col s12">
      <div class="container">
        <div class="section section-data-tables">
          <div class="row">
            <div class="col s12">
              <div class="card">
                <div class="card-content" style="padding: 15px;">
                  <h4 class="card-title">Students</h4>
                  <div class="row">
                    <div class="col s12">
                      <table class="display" attr="teacher" style="width: 100%">
                        <thead>
                          <tr>
                            <th>Sr.No</th>
                            <th>Reg.No</th>
                            <th>Reg.Date</th>
                            <th>Branch Name</th>
                            <th>User Name</th>
                            <th>Teacher Name</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Pincode</th>
                            <th>Staus</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>Sr.No</th>
                            <th>Reg.No</th>
                            <th>Reg.Date</th>
                            <th>Branch Name</th>
                            <th>User Name</th>
                            <th>Teacher Name</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Pincode</th>
                            <th>Staus</th>
                            <th>Action</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- Scroll - vertical, dynamic height -->

<?php include 'include/customizer.php'; 
  include 'include/footer.php';?>
<div id="modal2" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Modal Header</h4>
                        <form class="col s12 card2" id="update_teacher">
                        <div class="row">
                          <input type="hidden" name="id" class="id">

                          <div class="input-field col s12">
                            <select id="branch_name" class="branch_name" name="branch_name" style="display: block;">
                            <option value=""  disabled selected>Choose your Branch</option>
                              <?php $sql=mysqli_query($con, "select * from branch");
                                    while ($branch=mysqli_fetch_array($sql))
                                    {?>
                                     <option value="<?php echo $branch['branch_code'];?>"><?php echo $branch['branch_name'];?>  
                                     </option>
                              <?php } ?>
                          </select>
                          <label style="position: unset;" for="branch_name">Branch Name</label>           
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="teacher_user_name" type="text" class="teacher_user_name" name="teacher_user_name">
                             <label  style="position: unset;" for="teacher_user_name">user_name</label>
                          </div>                          
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="password6" type="password" class="password" name="password" >
                            <label style="position: unset;"  for="password">Password</label>                          
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col s12">
                            <input id="teacher_name" type="text" class="teacher_name" name="teacher_name">
                            <label  style="position: unset;" for="teacher_name">Teacher Name</label>           
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col s12">
                            <input id="teacher_name" type="text" class="teacher_add" name="teacher_add">
                            <label  style="position: unset;" for="teacher_add">Teacher Address</label>           
                          </div>
                        </div>
                        

                        <div class="row">
                          <div class="input-field col m4 s12">
                            <select name="state" class="state" onchange="getcity(this.value);" style="display: block;">
                              <option value="" disabled selected>Choose your State</option>
                                <?php 
                                  $sql=mysqli_query($con, "select * from state_list") ;
                                  while ($state=mysqli_fetch_array($sql)) 
                                    {?>
                                      <option value="<?php echo $state['id']; ?>"><?php echo $state['state']; ?></option>
                                   <?php }
                                ?>
                            </select>     
                            <label style="position: unset;" >Select State</label>                       
                          </div> 

                          <div class="input-field col m4 s12">
                            <select name="city" class="city" id="city_list" class="mycites city" value="" style="display: block;">                             
                            </select>     
                                <label>Select City</label>              
                          </div>

                          <div class="input-field col m4 s12">
                            <select name="status" class="status" id="status"  style="display: block;">         
                              <?php 
                              if ($view['status']==1)
                               {?>
                                <option value="1">Active</option>  
                                <option value="0">Inactive</option>  
                               
                            <?php } 

                            else{?>
                                <option value="0">Inactive</option>  
                                <option value="1">Active</option>  

                              
                           <?php }?>

                            </select>     
                                <label>Status</label>              
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col m6 s12">
                              <input id="pincode" type="text" class="pincode" name="pincode" placeholder="Pin Code">    
                              <label style="position: unset;"  for="pincode">Pin Code</label>                         
                            </div>
                          <div class="input-field col m6 s12">
                            <input name="date" type="date" class="datepicker arw date"  placeholder="Date">
                          </div>
                        </div>                  
                      
    </div>
    <div class="modal-footer">
      <button class="btn cyan waves-effect waves-light right update_teacher" type="submit" value="updateTeacher" name="update_teacher">Update
        <i class="material-icons right">send</i>
      </button>
    </div>
    </form>
  </div>