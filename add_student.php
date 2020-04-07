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
              <h5 class="breadcrumbs-title mt-0 mb-0">Add New student</h5>               
            </div>
          </div>
        </div>
      </div>
    <div class="col s12">
      <div class="container">
        <div class="seaction">
          <form class="col s12 card2" id="add_branch">
            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-header">
                                <h4 class="card-title">Student Details</h4>
                            </div>
                            <ul class="stepper linear" id="linearStepper">
                                <li class="step active">
                                    <div class="step-title waves-effect">Step 1</div>
                                    <div class="step-content">
                                        <div class="row">
                                            <div class="input-field col m6 s12">
                                                <label for="firstName1">First Name: <span class="red-text">*</span></label>
                                                <input type="text" id="firstName1" name="firstName1" class="validate" required>
                                            </div>
                                            <div class="input-field col m6 s12">
                                                <label for="lastName1">Last Name: <span class="red-text">*</span></label>
                                                <input type="text" id="lastName1" class="validate" name="lastName1" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col m6 s12">
                                                <label for="Email">Email: <span class="red-text">*</span></label>
                                                <input type="email" class="validate" name="Email" id="Email" required>
                                            </div>
                                            <div class="input-field col m6 s12">
                                                <label for="contactNum">Contact Number: <span class="red-text">*</span></label>
                                                <input type="number" class="validate" name="contactNum" id="contactNum"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="step-actions">
                                            <div class="row">
                                                <div class="col m4 s12 mb-3">
                                                    <button class="red btn btn-reset" type="reset">
                                                        <i class="material-icons left">clear</i>Reset
                                                    </button>
                                                </div>
                                                <div class="col m4 s12 mb-3">
                                                    <button class="btn btn-light previous-step" disabled>
                                                        <i class="material-icons left">arrow_back</i>
                                                        Prev
                                                    </button>
                                                </div>
                                                <div class="col m4 s12 mb-3">
                                                    <button class="waves-effect waves dark btn btn-primary next-step"
                                                        type="submit">
                                                        Next
                                                        <i class="material-icons right">arrow_forward</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="step">
                                    <div class="step-title waves-effect">Step 2</div>
                                    <div class="step-content">
                                      <div class="card-header">
                                         <h4 class="card-title">Course Details</h4>
                                      </div>
                                        <div class="row">
                                            <div class="input-field col m6 s12">
                                                <label for="proposal1">Proposal Title: <span class="red-text">*</span></label>
                                                <input type="text" class="validate" id="proposal1" name="proposal1" required>
                                            </div>
                                            <div class="input-field col m6 s12">
                                                <label for="job1">Job Title: <span class="red-text">*</span></label>
                                                <input type="text" class="validate" id="job1" name="job1" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col m6 s12">
                                                <label for="company1">Previous Company:</label>
                                                <input type="text" class="validate" id="company1" name="company1">
                                            </div>
                                            <div class="input-field col m6 s12">
                                                <label for="url1">Video Url:</label>
                                                <input type="text" class="validate" id="url1">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col m6 s12">
                                                <label for="exp1">Experience: <span class="red-text">*</span></label>
                                                <input type="text" class="validate" id="exp1" name="exp1">
                                            </div>
                                            <div class="input-field col m6 s12">
                                                <label for="desc1">Short Description: <span class="red-text">*</span></label>
                                                <textarea name="desc" id="desc1" rows="4"
                                                    class="materialize-textarea"></textarea>
                                            </div>
                                        </div>
                                        <div class="step-actions">
                                            <div class="row">
                                                <div class="col m4 s12 mb-3">
                                                    <button class="red btn btn-reset" type="reset">
                                                        <i class="material-icons left">clear</i>Reset
                                                    </button>
                                                </div>
                                                <div class="col m4 s12 mb-3">
                                                    <button class="btn btn-light previous-step">
                                                        <i class="material-icons left">arrow_back</i>
                                                        Prev
                                                    </button>
                                                </div>
                                                <div class="col m4 s12 mb-3">
                                                    <button class="waves-effect waves dark btn btn-primary next-step"
                                                        type="submit">
                                                        Next
                                                        <i class="material-icons right">arrow_forward</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="step">
                                    <div class="step-title waves-effect">Step 3</div>
                                    <div class="step-content">
                                      <div class="card-header">
                                         <h4 class="card-title">fee Details</h4>
                                      </div>
                                        <div class="row">
                                            <div class="input-field col m6 s12">
                                                <label for="eventName1">Event Name: <span class="red-text">*</span></label>
                                                <input type="text" class="validate" id="eventName1" name="eventName1" required>
                                            </div>
                                            <div class="input-field col m6 s12">
                                                <select>
                                                    <option value="Select" disabled selected>Select Event Type</option>
                                                    <option value="Wedding">Wedding</option>
                                                    <option value="Party">Party</option>
                                                    <option value="FundRaiser">Fund Raiser</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col m6 s12">
                                                <select>
                                                    <option value="Select" disabled selected>Select Event Status</option>
                                                    <option value="Planning">Planning</option>
                                                    <option value="In Progress">In Progress</option>
                                                    <option value="Completed">Completed</option>
                                                </select>
                                            </div>
                                            <div class="input-field col m6 s12">
                                                <select>
                                                    <option value="Select" disabled selected>Event Location</option>
                                                    <option value="New York">New York</option>
                                                    <option value="Queens">Queens</option>
                                                    <option value="Washington">Washington</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col m6 s12">
                                                <label for="Budget1">Event Budget: <span class="red-text">*</span></label>
                                                <input type="Number" class="validate" id="Budget1" name="Budget1">
                                            </div>
                                            <div class="input-field col m6 s12">
                                                <p> <label>Requirments</label></p>
                                                <p> <label>
                                                        <input type="checkbox">
                                                        <span>Staffing</span>
                                                    </label></p>
                                                <p><label>
                                                        <input type="checkbox">
                                                        <span>Catering</span>
                                                    </label></p>
                                            </div>
                                        </div>
                                        <div class="step-actions">
                                            <div class="row">
                                                <div class="col m6 s12 mb-1">
                                                    <button class="red btn mr-1 btn-reset" type="reset">
                                                        <i class="material-icons">clear</i>
                                                        Reset
                                                    </button>
                                                </div>
                                                <div class="col m6 s12 mb-1">
                                                    <button class="waves-effect waves-dark btn btn-primary"
                                                        type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          </form>                  
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


