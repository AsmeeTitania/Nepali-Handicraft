<?php
    session_start();
   include("connection.php");
   
   if(isset($_POST['btnLogIn']) && isset($_POST['btnLogIn'])=="Submit")
   {
    $user=$_POST['userName'];
    $password=$_POST['pwd']; 
    	$query="SELECT * FROM admin WHERE AdminName='$user' AND AdminPassword='$password' AND IsActive=1";
        $result = mysql_query($query);
        //die("error: " . mysql_error());			
		$row = mysql_fetch_row($result);

		if($row)
		{			
			$_SESSION['user']=$user;			
			$url = "dashboard";									
					
			echo "<script>window.location='".$url."';</script>";	
		}
		else
		{			
			$error_msg = "<div class='errormsg'> Login Failed </div>";
		}
	
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Bootsrtap For Beginners</title>
  <meta name="description" content="Hello World">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
  <body>
  
<div class="container"><h3>Log In</h3></div>

<div class="container">
<div class="well">
    
   <form method="post">
  <div class="form-group">
    <label for="userName">User Name:</label>
    <input type="text" name="userName" class="form-control" id="u">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="pwd" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button name="btnLogIn" type="submit" value="LogIn" class="btn btn-default">Submit</button>
</form>
  </div></div>
  
   <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body> 
</html>

