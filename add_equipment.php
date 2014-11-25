<!DOCTYPE html>
<html lang="en">
  <head>

    <title>ADMIN</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

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
            <li class="active"><a href="#">Add New Equipment</a></li>
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

        <br>
        <br>
        <div class="container">

          <form class="form-signin" action='add_equipment.php' method="POST">
            
            <fieldset>
              
              <div class="control-group">
                <label class="control-label"  for="newEquip">Name Of Equipment</label>
                <div class="controls">
                  <input type="text" id="newEquip" name="newEquip" placeholder="" class="input-xlarge" style="width: 250px" required>
                  <p class="help-block"></p>
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label"  for="officeEquip">Office</label>
                <div class="controls">
                  <input type="text" id="officeEquip" name="officeEquip" placeholder="" class="input-xlarge" style="width: 250px" required>
                  <p class="help-block"></p>
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label"  for="qtyEquip">Quantity</label>
                <div class="controls">
                  <input type="text" id="qtyEquip" name="qtyEquip" placeholder="" class="input-xlarge" style="width: 250px" required>
                  <p class="help-block"></p>
                </div>
              </div>

              <div class="control-group">
                <!-- Button -->
                <div class="controls">
                  <button class="btn btn-success">Add Equipment</button>
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

  $try=$_SESSION['userName'];

  if(isset($try))
    //header("location:main_login.php");

  if(empty($_POST['newEquip']))
    $equipName = '';
  else
    $equipName = ($_POST['newEquip']);

  if(empty($_POST['officeEquip']))
    $equipOffice = '';
  else
    $equipOffice = ($_POST['officeEquip']);

  if(empty($_POST['qtyEquip']))
    $equipQuantity = '';
  else
    $equipQuantity = ($_POST['qtyEquip']);

  if(!$equipName == '' && !$equipOffice == '' && !$equipQuantity == ''){
  $sql = " INSERT INTO Equipment(ECode,Name,Quantity,Stat,Office)
           VALUES ('', '$equipName', '$equipQuantity', '', '$equipOffice'); ";

  $result = mysql_query($sql);
            if (!$result) {
                die('Invalid Input: ' . mysql_error().$sql);

            }
            else{
              echo "<script> alert('Equipment Successfully Added'); </script>";
            }  
  }
?>

</html>
