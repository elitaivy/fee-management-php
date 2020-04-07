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
            <h5 class="breadcrumbs-title mt-0 mb-0">List of Courses</h5>         
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
                <div class="card-content">
                  <h4 class="card-title">Courses</h4>
                  <div class="row">
                    <div class="col s12">
                      <table attr="course" style="width: 100%" class="display">
                        <thead>
                          <tr>
                            <th>Sr.No</th>
                            <th>Reg.No</th>
                            <th>Branch</th>
                            <th>Stream</th>
                            <th>course</th>
                            <th>Date</th>
                            <th>status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>Sr.No</th>
                            <th>Reg.No</th>
                            <th>Branch </th>
                            <th>Stream</th>
                            <th>course/th>
                            <th>status</th>
                            <th>Date</th>
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


<div id="modal3" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Modal Header</h4>
                        <form class="col s12 card2" id="update_course">
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
                          <div class="input-field col m4 s12">
                            <select name="stream" class="stream" onchange="getcourse(this.value);" style="display: block;">
                              <option value="" disabled selected>Choose your Stream</option>
                                <?php 
                                  $sql=mysqli_query($con, "select * from course_cat") ;
                                  while ($course=mysqli_fetch_array($sql)) 
                                    {?>
                                      <option value="<?php echo $course['id']; ?>"><?php echo $course['course']; ?></option>
                                   <?php }
                                ?>
                            </select>     
                            <label style="position: unset;" >Select Stream</label>                       
                          </div> 

                          <div class="input-field col m4 s12">
                            <select name="course" class="course" id="course_list" class="course" value="" style="display: block;">                             
                            </select>     
                                <label>Select course</label>              
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
                            <input name="date" type="date" class="datepicker arw date"  placeholder="Date">
                          </div>
                        </div>                  
                      
    </div>
    <div class="modal-footer">
      <button class="btn cyan waves-effect waves-light right update_course" type="submit" value="updateCourse" name="update_course">Update
        <i class="material-icons right">send</i>
      </button>
    </div>
    </form>
  </div>