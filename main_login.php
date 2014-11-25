<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DLSU STC</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

</head>

  <body>

    <div class="container">
        <center>
        <img src="schoolLogo.png"/>
        <h1>DLSU-STC RESERVATION</h1>
        </center>

      <form class="form-signin" role="form" action="main_login.php" method="post">
        
        <input type="text" class="form-control" name="uname" placeholder="Username" required autofocus>
        <input type="password" class="form-control" name="pass" placeholder="Password" required>
        <!--<label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>-->
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
      </form>

    </div> <!-- /container -->
  </body>

  <?php

    session_start();
    require 'Connect.php';
    
    //require 'redirect.php';
    
    //error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
      
    
    $myusername=$_POST['uname']; 
    $mypassword=$_POST['pass']; 

    $sql="SELECT Username, Password, Type
      FROM user
      WHERE Username = '".$myusername."'
            AND Password='".$mypassword."'
            AND Type = 'Admin' ; "  ;
  
    $result=mysql_query($sql) OR die('error: '.mysql_error());


    $row = mysql_fetch_array($result);
    
    // Mysql_num_row is counting table row
    $count=mysql_num_rows($result);
    

    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count == 1){
        
      //generate new session id
      session_regenerate_id(true);
      
      // stores info for session
      $session_username = $myusername;
      $session_name = $row["First_Name"];
      
      
      // store values to session
      $_SESSION['userName'] = $session_username;
      $_SESSION['name'] = $session_name;
      header("location:calendar.php");
    }
    elseif(strlen($myusername) >= 2 && strlen($mypassword)>= 2)  
    {
    
      echo "<script> alert('WRONG USERNAME OR PASSWORD'); </script>";
      
    }
    

    ob_end_flush();
  ?>
</html>
