<!DOCTYPE html>
<html lang="en">
  <head>

    <title>ADMIN</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

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
            <li><a href="main_logout.php">SIGN OUT</a></li>
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
            <li class="active"><a href="#">Inventory</a></li>
            <li><a href="reg_form.php">Reservation Form</a></li>
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

          
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Facilities</th>
                  <th>capacity</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                
              </tbody>
            </table>
            <br>
            <br>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Audio Visual Equipment</th>
                  <th>Quantity</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Laptop</td>
                  <td>TBD</td>
                </tr>
                  <tr>
                  <td>LCD Projector</td>
                  <td>TBD</td>
                </tr>
                <tr>
                  <td>Projector Screen</td>
                  <td>TBD</td>
                </tr>
                <tr>
                  <td>P.A. System</td>
                  <td>TBD</td>
                </tr>
                <tr>
                  <td>Microphone</td>
                  <td>TBD</td>
                </tr>
                <tr>
                  <td>Microphone Stand</td>
                  <td>TBD</td>
                </tr>
                <tr>
                  <td>Television</td>
                  <td>TBD</td>
                </tr>
                <tr>
                  <td>CD Player</td>
                  <td>TBD</td>
                </tr>
                <tr>
                  <td>DVD Player</td>
                  <td>TBD</td>
                </tr>
              </tbody>
            </table>
            <br>
            <br>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>I.T. Related Request</th>
                  <th>Quantity</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Desktop</td>
                  <td>TBD</td>
                </tr>
                <tr>
                  <td>Printer</td>
                  <td>TBD</td>
                </tr>
                <tr>
                  <td>Internet</td>
                  <td>TBD</td>
                </tr>
              </tbody>
            </table>
            <br>
            <br>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Other Materials</th>
                  <th>Quantity</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Landscape/Plants</td>
                  <td>TBD</td>
                </tr>
                <tr>
                  <td>Platform</td>
                  <td>TBD</td>
                </tr>
                <tr>
                  <td>Stage</td>
                  <td>TBD</td>
                </tr>
                <tr>
                  <td>Flags</td>
                  <td>TBD</td>
                </tr>
                <tr>
                  <td>Chairs</td>
                  <td>TBD</td>
                </tr>
                <tr>
                  <td>Tables</td>
                  <td>TBD</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
  <?php

  ?>

</html>
