<?php
	session_start();
	if(session_destroy()) // Destroying All Sessions
	{
		header("Location: A_login.php"); // Redirecting To Home Page
	exit();
	}
?>