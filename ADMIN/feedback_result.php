
<!DOCTYPE html>

<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    	<title>View Feedback List</title>  
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
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/admin_comman.css">
		
		<style type="text/css">
	
			.container{
				margin-top: 20px;
			}
			#myInput {
		
		background-position: 10px 5px;
		background-repeat: no-repeat;
		width: 50%;
		font-size: 16px;
		padding: 12px 20px 12px 40px;
		border: 1px solid grey;
		margin-bottom: 12px;
		float: right;
		border-radius: 5px;
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
	<h1 style="margin-top:30px;Text-shadow:3px 3px 5px white;background-color:#5AA3B9;font-size:40px"><b><center><span class="fa fa-book"></span>  Materials Management System  <span class="fa fa-book"></span> </center></b></h1>
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
						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown"><i class="fa fa-plus-circle"></i>&nbsp&nbsp&nbsp Add </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="add_course.php"><i class="fa fa-angle-right"></i>&nbsp&nbsp Add Course</a>
								<a class="dropdown-item" href="add_sem.php"><i class="fa fa-angle-right"></i>&nbsp&nbsp Add Semester</a>
							</div>
						</li>
								
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown"><i class="fa fa-plus-circle"></i>&nbsp&nbsp&nbsp Details </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="view_std_list.php"><i class="fa fa-angle-right"></i>&nbsp&nbsp Student Details</a>
								<a class="dropdown-item" href="view_fac_list.php"><i class="fa fa-angle-right"></i>&nbsp&nbsp Faculty Details</a>
							</div>
						</li>
						<li class="nav-item active"><a class="nav-link " href="feedback_result.php"><i class="fa fa-eye"></i>&nbsp&nbsp View Feedback</a></li>
					</ul>
				</div>
			</div>
			</center>
		</nav>
		
	</header>
	<!-- End header -->
	
	 <div class="regmain">
	<div class="row">
    
		<div class="container">
			
              <div class="text-heading"><h1>Student Feedback.</h1></div>

			
			<table class="table table-bordered" id="myTable">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Name</th>
						<th scope="col">Gender</th>
						<th scope="col">Email Id</th>
						<th scope="col">Department</th>
						<th scope="col">year</th>
						<th scope="col">class</th>
						<th scope="col">sem</th>
						<th scope="col">number</th>
						<th scope="col">feedback_message</th>
						<th scope="col">date</th>
						
						
					</tr>
				</thead>
				<tbody>
					<?php
					require_once('connection.php');
					$q = " select * from  feedback  ORDER BY name ";
					$result = mysqli_query($conn,$q);
					$num = mysqli_num_rows($result);
					if ($num > 0) {
					
					while ($row = mysqli_fetch_array($result))
					{
					?>
					<tr>
						<th scope="row"><?php echo $row['name']; ?></th>
						<td class="title"><?php echo $row['gender']; ?></td>
						<td ><?php echo $row['email']; ?></td>
						<td ><?php echo $row['dept']; ?></td>
						<td ><?php echo $row['year']; ?></td>
						<td ><?php echo $row['class']; ?></td>
						<td ><?php echo $row['sem']; ?></td>
						<td ><?php echo $row['number']; ?></td>
						<td ><?php echo $row['feedback_message']; ?></td>
						<td ><?php echo $row['post_date']; ?></td>
					
					</tr>
					<?php
					}
					}
					?>
				</tbody>
			</table>
			 </div>

  </div>
		
		<script>
		function myFunction() {
		var input, filter, table, tr, td, i, txtValue;
		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		table = document.getElementById("myTable");
		tr = table.getElementsByTagName("tr");
		for (i = 0; i < tr.length; i++) {
		td = tr[i].getElementsByTagName("td")[0];
		if (td) {
		txtValue = td.textContent || td.innerText;
		if (txtValue.toUpperCase().indexOf(filter) > -1) {
		tr[i].style.display = "";
		} else {
		tr[i].style.display = "none";
		}
		}
		}
		}
		</script>
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
	</body>
</html>