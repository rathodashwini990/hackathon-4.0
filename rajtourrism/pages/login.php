
<?php
  require_once '../config/dbconnect.php';
  session_start();
  if (isset($_SESSION['username'])) {
    $user=$_SESSION['username'];
    $query = "SELECT `username` FROM `user`  WHERE `username`='$user'";
    if ($result = mysqli_query($conn,$query))
    {
      $row =  mysqli_fetch_assoc($result);
      if ($user == $row['username'])
      {
        header('Location:page1.php');
      }
    }

  }
  else
  {
    if (isset($_POST['login']))
    {
      $username = $_POST['username'];
      $password  = base64_encode($_POST['password']);

      $query = "SELECT `username` FROM `user`  WHERE `username`='$username' AND `password`='$password'";
      if ($result = mysqli_query($conn,$query))
      {
        if (mysqli_num_rows($result) == 1)
        {
          $row =  mysqli_fetch_assoc($result);
          $_SESSION['username'] = $row['username'];
          header('Location:page1.php');
        }
      }
      else
        {
          echo '<div class="alert alert-danger alert-dismissable fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Sorry Sir,</strong> Your Username or Password is wrong Pls Try Again.
				</div>';
        }
      }


    }
?>
<html>
<head>
<title>Login</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link href="../css/ninja-slider.css" rel="stylesheet" type="text/css" />
<script src="../js/ninja-slider.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/formating.css" media="all" />
<link rel="stylesheet" type="text/css" href="../css/all.css" media="all" />

<style type="text/css">
  body, html {
    height: 100%;
}
  .bg{
    background-image: url("../images/tour.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>>
</head>
<body class="bg">
<header>
<div style=" background-color:#000;">
	<div class="header_auction">
	<ul>
	  <li><a href="../index.php">HOME</a></li>
      <li><a href="login.php">LOGIN</a></li>
    </ul>
    </div><!--End of header_auction-->
</div>
<br/><br/><br/>
<center><h2><font color="white">Welcome To Paribhraman</font></h2></center>

<div style="float:right; width:40%;">
	<br/>
<h1><font color='White' size="30">LOGIN</font></h1>
</h4><font color='White'>Sign-up takes less than 30 seconds. </font></h4>
<div class="container">
  <form class="form-inline" method="POST" action="">
    <div class="form-group">
      <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username"><br/>
    </div><br/>
    <div class="form-group">
       <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div><br/>
    <button type="submit" class="btn btn-info btn-lg" name="login">Login</button><br />
    <a href="new.php"><font color="red"><h3 align="left">Create New Account?</h3></font></a>
  </form>
</div>
</div>
</body>
</html>
