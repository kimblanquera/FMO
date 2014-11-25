<!DOCTYPE html>
<html lang="en">
  <head>

    <title>ADMIN</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">

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
            <li><a href="reg_form.php">Reservation Form</a></li>
            <li><a href="add_user.php">Add New User</a></li>
            <li><a href="add_equipment.php">Add New Equipment</a></li>
            <li class="active"><a href="#">Add New Venue</a></li>
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

        <br>
        <br>
        <div class="container">
          
          <form class="form-signin" action='' method="POST">
            
            <fieldset>
              
              <div class="control-group">
                <label class="control-label"  for="newFacility">Name Of Facility</label>
                <div class="controls">
                  <input type="text" id="newFacility" name="newFacility" placeholder="" class="input-xlarge" style="width: 250px" required>
                  <p class="help-block"></p>
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label"  for="capacity">Capacity</label>
                <div class="controls">
                  <input type="text" id="capacity" name="capacity" placeholder="" class="input-xlarge" style="width: 250px" required>
                  <p class="help-block"></p>
                </div>
              </div>

              <div class="control-group">
                <!-- Button -->
                <div class="controls">
                  <button class="btn btn-success">Add Facility</button>
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

  require 'Connect.php';

  if(empty($_POST['newFacility']))
    $Location = '';
  else
    $Location = ($_POST['newFacility']);
  if(empty($_POST['capacity']))
    $Capacity = '';
  else
    $Capacity = ($_POST['capacity']);

  $sql = " INSERT INTO Venue(Vcode,Location,Stat,Capacity,Location2)
           VALUES ('', '$Location', '', '$Capacity',''); ";

  if(!$Location == '' && $Capacity == ''){
  $result = mysql_query($sql);
            if(!$result){
              die('Invalid Input: ' . mysql_error());
            }
            else{
              echo "<script> alert('Venue Successfully Added'); </script>";
            }  

  }
  ?>   

</html>