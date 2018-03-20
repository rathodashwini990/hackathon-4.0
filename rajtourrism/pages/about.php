<?php
 // require_once 'config/dbconnect.php';
  session_start();
if (isset($_SESSION['username'])) {
  $user=$_SESSION['username'];
  $query = "SELECT `username` FROM `admin`  WHERE `username`='$user'";
  if ($result = mysqli_query($conn,$query))
  {
    $row =  mysqli_fetch_assoc($result);
    if ($user == $row['username'])
    {
      header('Location:ahome.php');
    }
    else
    {
      header('Location:user/uhome.php');
    }
  }
  }
?>
<!DOCTYPE html>
<html>
<head>
<title>tourrism</title>
    <meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/formating.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/all.css" media="all" />
</head>
<body background="images/tour.jpg" style="padding:0px; margin:0px; background-color:#fff;font-family:'Open Sans',sans-serif,arial,helvetica,verdana">


<div style=" background-color:#000;">

	<div class="header_auction">
	<ul>
	  <li><a href="index.php">HOME</a></li>
      <li><a href="pages/login.php">LOGIN</a></li>
      <li><a href="about.php">ABOUT</a></li>
      <li><a href="contact.php">CONTACT</a></li>
    </ul>
    </div><!--End of header_auction-->
</div>
<br/><br/>
<marquee><h1>RAJASTHAN PARIBRHAMAN</h1></marquee>
<B>
<body><h3>Dear Visitor,</h3>
<p><h3>Welcome to Rajasthan,Fascinating Rajasthan.</h3>
This land is a colourful melange of massive forts, stunning palaces, diverse cultures, delectable cuisines and warm people, set amidst a rugged yet inviting landscape.

It is a land that has inspired me and countless others. Come tread on the sands of time. In Rajasthan you will find every hue in Nature's grand palette - the red sands, the blue of royalty, the pink cities or the amber sunsets. Surrender yourself to the sounds of trinkets or the sounds of the all conquering wind. Sight and sounds that are far removed from any city. Sights and sounds that will transport you into a folk lore.

Music, art and dance is woven into every inch of this land I call paradise. You will find it carved in every grain of sand. Here you will find the past, the present and the future. You will find passion. You will find adventure. And you will find yourself.

Come, walk into the unforgettable embrace of my Rajasthan.

Vasundhara Raje,</p>

The Hon'ble Chief Minister of Rajasthan
</B>
</body>

