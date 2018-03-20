<?php

	require "../config/dbconnect.php";
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$mobno = $_POST['mobno'];
	$username = $_POST['username'];
	$password = base64_encode($_POST['password']);

	if($_FILES['file']['type']=="image/jpeg"||$_FILES['file']['type']=="image/jpg"||$_FILES['file']['type']=="image/png"||$_FILES['file']['type']=="image/bmp"||$_FILES['file']['type']=="image/JPG")
	{
	//        print_r($_FILES);
		$source=$_FILES['file']['tmp_name'];
		$destination="../images/User/".$username.".jpg";
	}
	else
	{
		echo "INVALID FILE";
	}

	if(move_uploaded_file($source,$destination))
	{
		echo "FILE UPLOADED";
	}
	else
	{
		echo "NOT UPLOADED";
	}

	$image_path = "User/".$username.".jpg";
	$sqlinsert = "INSERT INTO `user`(`id`, `first_name`, `last_name`, `mobno`, `email`, `username`, `password`, `image_path`) VALUES ('','$fname','$lname','$mobno','$email','$username','$password','$image_path')";
	$runinsert = mysqli_query($conn,$sqlinsert);

	if($runinsert)
		{
			echo "New User Added ";
		}
		else
		{
			echo "Error in Adding User";
		}

		mysqli_close($conn);
?>
