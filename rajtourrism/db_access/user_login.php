<?php 

	require "../config/dbconnect.php";
	$username = $_POST['username'];
    $password  = base64_encode($_POST['password']);
	$mysql_qry = "SELECT * FROM `user` WHERE username='$username' AND password='$password';";
	
	//create an array
    $json_data = array();
	$result = mysqli_query($conn, $mysql_qry);
	
	if(mysqli_num_rows($result)==1)
	{	
		while($row = mysqli_fetch_assoc($result))
		{
			$json_array['status'] = "User Login Success";
			$json_array['id'] = $row['id'];
			$json_array['username'] = $row['username'];
			$json_array['first_name'] = $row['first_name'];
			$json_array['last_name'] = $row['last_name'];
			$json_array['mobno'] = $row['mobno'];
			$json_array['email'] = $row['email'];
			array_push($json_data, $json_array);
		}
	}
	else if(mysqli_num_rows($result) == 0)
	{
		$json_array['status'] = "Login Failed";
		array_push($json_data, $json_array);
	}
	
	//built in PHP function to encode the data in to JSON format  
	echo json_encode($json_data); 

    //close the db connection
    mysqli_close($conn);
	

?>