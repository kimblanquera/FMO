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
            <li><a href="main_login.php">SIGN OUT</a></li>
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
            <li class="active"><a href="#">Add New Admin</a></li>
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

        <br>
        <br>
        <div class="container">
          <form class="form-signin" action='' method="POST">
            
            <fieldset>
              
              <div class="control-group">
                <!-- Username -->
                <label class="control-label"  for="username">Username: </label>
                <div class="controls">
                  <input type="text" id="username" name="username" placeholder="" class="input-xlarge" style="width: 250px">
                  <p class="help-block">Username can contain any letters or numbers, without spaces</p>
                </div>
              </div>
           
              <div class="control-group">
                <!-- E-mail -->
                <label class="control-label" for="email">E-mail: </label>
                <div class="controls">
                  <input type="text" id="email" name="email" placeholder="" class="input-xlarge" style="width: 250px" required>
                  <p class="help-block">Please provide your E-mail</p>
                </div>
              </div>
           
              <div class="control-group">
                <!-- firstname -->
                <label class="control-label" for="fname">First Name: </label>
                <div class="controls">
                  <input type="text" id="fname" name="fname" placeholder="" class="input-xlarge" style="width: 250px" required>
                  <p class="help-block">Please provide your First Name</p>
                </div>
              </div>

              <div class="control-group">
                <!-- last name -->
                <label class="control-label" for="fname">Last Name: </label>
                <div class="controls">
                  <input type="text" id="lname" name="lname" placeholder="" class="input-xlarge" style="width: 250px" required>
                  <p class="help-block">Please provide your Last Name</p>
                </div>
              </div>

              <div class="control-group">
                <!-- Password-->
                <label class="control-label" for="password">Password</label>
                <div class="controls">
                  <input type="password" id="password" name="password" placeholder="" class="input-xlarge" style="width: 250px" required>
                  <p class="help-block">Password should be at least 4 characters</p>
                </div>
              </div>
           
              <div class="control-group">
                <!-- Password -->
                <label class="control-label"  for="password_confirm">Password (Confirm)</label>
                <div class="controls">
                  <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge" style="width: 250px" required>
                  <p class="help-block">Please confirm password</p>
                </div>
              </div>
           
              <div class="control-group">
                <!-- Button -->
                <div class="controls">
                  <button class="btn btn-success">Register</button>
                </div>
              </div>
            </fieldset>
          </form>

        </div>
            
      </div>
    </div>
  </body>
</html>
