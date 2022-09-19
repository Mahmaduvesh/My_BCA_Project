<?php
	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	if (isset($_POST['submit'])) 
	{
		if (empty($_POST['email']) || empty($_POST['pwd'])) 
		{
			$error = "email or Pwd is invalid";
		}
		else
		{
			// Define $username and $password
			$email=$_POST['email'];
			$password=$_POST['pwd'];

			// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			$con = mysqli_connect("localhost","root","");
			
			// To protect MySQL injection for Security purpose
			$email = stripslashes($email);
			$password = stripslashes($password);
			$email = mysqli_real_escape_string($con,$email);
			$password = mysqli_real_escape_string($con,$password);
			
			// Selecting Database
			$db = mysqli_select_db($con,"college");
			
			// SQL query to fetch information of registerd users and finds user match.
			$query = mysqli_query($con,"select * from s_registration where pwd='$password' AND email='$email'");
			$rows = mysqli_num_rows($query);
			
			if ($rows == 1) 
			{
				$_SESSION['login_user']=$email; // Initializing Session
				header("location: Student_index.php"); // Redirecting To Other Page
			} 
			else
			{
				echo '<script>alert("STUDENT WRONG CREDENTIALS!!")</script>';
			}
			mysqli_close($con); // Closing Connection
		}
	}
?>