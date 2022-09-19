<!DOCTYPE html>

<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Course Form </title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<head>
<style>
	h2{
 color:white;	
}
.regform
{
	width:950px;
	margin:auto;
	background-color:rgba(255,0,0,0.2);;
	padding:10px 0px 10px 0px;
    text-align:center;
	
}

.regmain
{
		background-color:#333333;
		width:950px;
		height:260px;
		margin:auto;
		
}

form 
{
		padding:10px;
}
.course{
	position:relative;
	text-tranform:capitalize;
	font-size:16px;
	border-radius:6px;
	padding:0 19px;
	width:89%;
	height:42px;
	left:58px;
	top:30px;
}
.date{
	position:relative;
	text-tranform:capitalize;
	font-size:16px;
	border-radius:6px;
	padding:0 19px;
	width:89%;
	height:42px;
	left:58px;
	top:60px;
}
#s{
	margin-left:255px;
	
}
#r{
	margin-left:30px;
	
}
.sub{
		position:relative;
		text-tranform:capitalize;
		width:12%;
		height:42px;
		left:70px;
		top:90px;
		display: inline-block;
		padding: 0 5px;
		font-size: 20px;
		cursor: pointer;
		text-decoration: none;
		outline: none;
		color: #fff;
		background-color: black;
		border: solid;
		border-radius: 5px;
		box-shadow: 0 9px #999;
}

.sub:hover {background-color: green}

.sub:active {
		background-color: cyan;
		box-shadow: 0 5px #666;
		transform: translateY(4px);
}
</style>
</head>
<body class="host_version"> 

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	
	
	<!-- Start header -->
	
	
	<table border="0" width="100%">
	<tr>
		<td><img src="images/sslogo.png" style="width:385px; height:85px;" alt="" /></td>
		
		<td style="width:50px; height:45px;" class="ph">
               <a href="tel:02637232667">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-phone fa-2x"></i></a>   
		</td>
		<td>  
                  <h5>Call Us</h5>
                  <span>02637-232667</span>      
		</td>
		 
		 <td style="width:50px; height:45px;">
               <a href="mailto:info@ssagrawal.org">&nbsp&nbsp<i class="fa fa-envelope fa-2x"></i></a>
		</td>
         <td>
				<h5>Email</h5>
                <span>info@ssagrawal.org</span>
		 </td>
		 
	</tr>    
</table>
	
<body>
<br>
		<header class="top-navbar">
		
		<nav class="navbar navbar-expand-lg navbar-light bg-light" >
		<center><div class="container-fluid">
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item "><a class="nav-link" href="Admin_index.php"><i class="fa fa-home"></i> Home</a></li>
						
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown"><i class="fa fa-plus-circle"></i>&nbsp&nbsp&nbsp Add </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="add_course.php"><i class="fa fa-angle-right"></i>&nbsp&nbsp Add Course</a>
								<a class="dropdown-item" href="A_ADD_SEMESTER.php"><i class="fa fa-angle-right"></i>&nbsp&nbsp Add Semester</a>
							</div>
						</li>
								
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown"><i class="fa fa-plus-circle"></i>&nbsp&nbsp&nbsp Details </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="view_std_list.php"><i class="fa fa-angle-right"></i>&nbsp&nbsp Student Details</a>
								<a class="dropdown-item" href="view_fac_list.php"><i class="fa fa-angle-right"></i>&nbsp&nbsp Faculty Details</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="view_feedback.php"><i class="fa fa-eye"></i>&nbsp&nbsp View Feedback</a></li>
						<li class="nav-item"><a class="nav-link" href="A_logout.php"><i class="fa fa-sign-out"></i>&nbsp&nbsp Logout</a></li>
					</ul>
				</div>
			</div>
			</center>
		</nav>
		
	</header>
	<!-- End header -->
      
      <br></br>
        <div class="regform"><h2 style="margin-top:10px;Text-shadow:4px 4px 5px #5AA3B9;font-size:30px"> <b> ADD COURSE</b> </h2></div>
	 <div class="regmain">
	 
		<form action="" method="post" >
						
			<input type="text"  class="course" name="course" placeholder="Enter  New Course Name" required="">
			
			<input type="date" class="date" name="date"   required="">
				
			
			<input type="submit" name="submit" Value="submit" class="sub" >
			<input type="submit" name="submit" Value="View" class="sub" onclick="document.location='add_course.php'">
		</form>
	</div>
	
    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
				
<?php
	$localhost="localhost";
	$dbuser="root";
	$pwd="";
	$dbname="college" ;

	$conn= mysqli_connect($localhost,$dbuser,$pwd,$dbname);

	if (isset ($_POST["submit"]))
	{
		$course=$_POST["course"];
		$date=$_POST["date"];
		
				
		$sql= "INSERT INTO course(course,date) 
		VALUES
		( '$course', '$date')";
		
		if(mysqli_query($conn,$sql))
		{
			echo ' <script>alert("Course added Registration Successfully!!")</script>';
		}
		else
		{
			echo ' <script>alert("Error!!")</script>'. mysqli_error($conn);
		}
	}
	
?>		
						
            
</body>
</html>