<?php
  require_once '../config/dbconnect.php';
  session_start();

  if (isset($_POST['signup']))
  {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobno = $_POST['mobno'];
    $username = $_POST['username'];
    $password = base64_encode($_POST['password']);

    $query="SELECT username FROM user WHERE `username` = '$username' ";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)!=0)
    {
      echo '<div class="alert alert-danger alert-dismissable fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Username is already in Use.</strong>
      </div>';

    }
    else
    { 
  
      $sqlinsert = "INSERT INTO `user`(`id`, `first_name`, `last_name`, `mobno`, `email`, `username`, `password`) VALUES ('','$fname','$lname','$mobno','$email','$username','$password')";
      $runinsert = mysqli_query($conn,$sqlinsert);
      if($runinsert)
      {
        echo "New User Added ";
        header('Location:login.php');
      }
      else
      {
        echo "Error in Adding User";
      }
    }
  }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign Up</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/formating.css" media="all" />
<link rel="stylesheet" type="text/css" href="../css/all.css" media="all" />
<style>
div .ani{
    position: relative;
    animation-name: example;
    animation-duration: 5s;
    animation-timing-function: linear;
    animation-delay: 2s;
    animation-iteration-count: 1  ;
    animation-direction: alternate;
}
@keyframes example {
    0%   {left:0px; top:0px;}
    25%  {left:200px; top:0px;}
    50%  {left:200px; top:200px;}
    75%  {left:0px; top:200px;}
    100% {left:0px; top:0px;}
}

body, html {
    height: 100%;
}
  

</style>
</head>
<body background="../images/1.jpg">
<header>
	<div class="header_auction">
	<ul>
      <li><a href="../index.php">HOME</a></li>
      <li><a href="login.php">LOGIN</a></li>
  </ul>
    </div><!--End of header_auction-->
<br/><br/><br/><br/><br/>
<!--img src="../images/f4.jpg" height="300" width="300" align="left" border="2px" /-->
<center><h2><font color="purple">Paribhraman Sign-up Panel</font></h2></center>
<br/><br/>
<div class="container">
  <center><form class="form-inline" method="post" action="new.php" enctype="multipart/form-data">
    <div class="form-group">
      <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
    </div><br/>
    <div class="form-group">
       <input type="text" class="form-control" id="mobno" name="mobno" placeholder="Mobile No.">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div><br/>
	<div class="form-group">
       <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
    </div><br/>
  <br/>
    <div class="checkbox">
      <label><input type="checkbox"> I accept the Terms and Conditions and the Privacy Policy</label>
    </div><br/><br/>
    <input type="submit" class="btn btn-info btn-lg" name="signup" value="Signup">
    
  </form></center>
</div>
<h2 align="center">Follow Us On</h2>
		<center>
          <a href="https://www.facebook.com"><img  src="../images/facebook.png"  height="80" width="80" /></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <a href="https://www.twitter.com"><img  src="../images/twitter.jpg"  height="80" width="80"/></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <a href="https://plus.google.com"><img  src="../images/gplus.jpg"  height="80" width="80"/></a>
    </center>
</body>
</html>
