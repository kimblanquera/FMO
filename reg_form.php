<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
    <meta charset="UTF-8" />
    <title>ADMIN</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="bootstrap-daterangepicker-master/daterangepicker-bs3.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap-daterangepicker-master/moment.min.js"></script>
    <script type="text/javascript" src="bootstrap-daterangepicker-master/moment.js"></script>
    <script type="text/javascript" src="bootstrap-daterangepicker-master/daterangepicker.js"></script>

  <body>
    
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="calendar.php">CALENDAR VIEW</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <!--<li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>-->
            <li><a href="logout.php">SIGN OUT</a></li>
          </ul>
          <!--<form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        </div>
      </div>
    </div>
  

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="inventory.php">Inventory</a></li>
            <li class="active"><a href="#">Reservation Form</a></li>
            <li><a href="add_user.php">Add New User</a></li>
            <li><a href="add_equipment.php">Add New Equipment</a></li>
            <li><a href="add_venue.php">Add New Venue</a></li>
          </ul>
          <!--<ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>-->
        </div>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!--
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>
        -->

          
        <div class="controls">

          <form class="form-signin" action='' method="POST">
            
            <fieldset>
              
              <div class="row">
                <div class="col-lg-4">
                  <label for="type">Reserver Type</label>
                    <select class="form-control" id="type" name="type">
                    <option>STC Students</option>
                    <option>Taft Students</option>
                    <option>Outsider</option>
                    <option>Staff</option>
                  </select>
                  <div class="text-group">
                      <input type="text" class="form control" id="reserverOffice" name="reserverOffice" placeholder="Office/Department">
                      </input>
                  </div><!-- /btn-group -->
                </div>
              </div>

              <br>
              <div class="row">
                <div class="col-lg-4">
                  <label for="facility">Facilities</label>
                    <select class="form-control" id="facility" name="facility">
                    <option>---NONE---</option>
                    <option>Multi-Purpose Hall</option>
                    <option>Media Lab</option>
                    <option>Covered Courts</option>
                    <option>Pergola</option>
                    <option>Gazebo</option>
                    <option>Sunken Quadrangle</option>
                    <option>Campsite</option>
                    <option>Kalye Berde / Locsin Park</option>
                    <option>St. La Salle Park</option>
                    <option>Audio Visual Park</option>
                    <option>LC 1 Chapel</option>
                    <option>Prayer Room (MRDR BLDG)</option>
                    <option>West Lobby</option>
                  </select>
                  <div class="text-group">
                      <input type="text" class="form control" id="numberOfPersons" name="numberOfPersons" placeholder="Number Of Persons">
                      </input>
                  </div><!-- /btn-group -->
                </div>
              </div>
           
              <br>
              <div class="row">
                <div class="col-lg-4">
                  <label for="audioVisual">Audio Visual Equipment</label>
                    <select class="form-control" id="audioVisual" name="audioVisual">
                    <option>---NONE---</option>
                    <option>Laptop</option>
                    <option>LCD Projector</option>
                    <option>Projector Screen</option>
                    <option>P.A. System</option>
                    <option>Microphone</option>
                    <option>Microphone Stand</option>
                    <option>Television</option>
                    <option>CD Player</option>
                    <option>Casette Player</option>
                    <option>DVD Player</option>
                  </select>
                  <div class="text-group">
                      <input type="text" class="form control" id="eqty" name="eqty" placeholder="Quantity">
                      </input>
                  </div><!-- /btn-group -->
                </div>
              </div>
              
              <br>
              <div>

               <form class="form-horizontal">
                 <fieldset>
                  <div class="control-group">
                    <label class="control-label" for="reservationdate">Date Requested:</label>
                    <div class="controls">
                     <div class="input-prepend input-group">
                       <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span><input type="text" style="width: 200px" name="birthday" id="birthday" class="form-control" value="03/18/2014" /> 
                     </div>
                    </div>
                  </div>
                 </fieldset>
               </form>

               <script type="text/javascript">
               $(document).ready(function() {
                  $('#birthday').daterangepicker({ singleDatePicker: true }, function(start, end, label) {
                    console.log(start.toISOString(), end.toISOString(), label);
                  });
               });
               </script>

            </div>

              <br>
              <div>

               <form class="form-horizontal">
                 <fieldset>
                  <div class="control-group">
                    <label class="control-label" for="reservationtime">Date and Time Reserved:</label>
                    <div class="controls">
                     <div class="input-prepend input-group">
                       <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                       <input type="text" style="width: 300px" name="reservation" id="reservationtime" class="form-control" value="11/13/2014 1:00 PM - 11/13/2014 1:30 PM"  class="span4"/>
                     </div>
                    </div>
                  </div>
                 </fieldset>
               </form>

               <script type="text/javascript">
               $(document).ready(function() {
                  $('#reservationtime').daterangepicker({
                    timePicker: true,
                    timePickerIncrement: 30,
                    format: 'MM/DD/YYYY h:mm A'
                  }, function(start, end, label) {
                    console.log(start.toISOString(), end.toISOString(), label);
                  });
               });
               </script>

            </div>  

              <br>
              <div class="control-group">
                <!-- firstname -->
                <label class="control-label" for="fname">First Name: </label>
                <div class="controls">
                  <input type="text" id="fname" name="fname" placeholder="" class="input-xlarge" style="width: 300px" required>
                  <p class="help-block">Please provide your First Name</p>
                </div>
              </div>

              <div class="control-group">
                <!-- last name -->
                <label class="control-label" for="fname">Last Name: </label>
                <div class="controls">
                  <input type="text" id="lname" name="lname" placeholder="" class="input-xlarge" style="width: 300px" required>
                  <p class="help-block">Please provide your Last Name</p>
                </div>
              </div>
           
              <div class="control-group">
                <!-- ID number -->
                <label class="control-label" for="idNum">ID Number: </label>
                <div class="controls">
                  <input type="text" id="idNum" name="idNum" placeholder="" class="input-xlarge" style="width: 300px" required>
                  <p class="help-block">For outsiders, please provide any valid id. For students and staff, please provide your school ID</p>
                </div>
              </div>

              <div class="control-group">
                <!-- contact number -->
                <label class="control-label" for="contactNum">Contact Number: </label>
                <div class="controls">
                  <input type="text" id="contactNum" name="contactNum" placeholder="" class="input-xlarge" style="width: 300px" required>
                  <p class="help-block">Please provide you're phone or cellphone number</p>
                </div>
              </div>

              <div class="control-group">
                <!-- email add -->
                <label class="control-label" for="email">Email Address: </label>
                <div class="controls">
                  <input type="text" id="email" name="email" placeholder="" class="input-xlarge" style="width: 300px" required>
                  <p class="help-block">Provide with you're active email address</p>
                </div>
              </div>

              <br>
              <div class="control-group">
                <!-- Button -->
                <div class="controls">
                  <button class="btn btn-success">Submit</button>
                </div>
              </div>
            
            </fieldset>
          </form>
        </div>
      </div>
    </div>

    
  </body>
  <?php
    session_start();



  ?>
</html>
