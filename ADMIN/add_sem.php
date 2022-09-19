<!DOCTYPE html>

<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Add course </title>  
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
    <style type="text/css">
    .date{
    color: red;
    }
    .not_title{
    text-transform: uppercase;
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
		left:465px;
		top:30px;
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
	
    <div class="row">
      	
        <!--success message -->
        <?php
        if (isset($_REQUEST['info']))
        {
        if ($_REQUEST['info']=="add_success") {
        ?><div class="container msg">
          <div class="alert alert-info alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> Course Add Successfully.
          </div></div><?php
          }
          elseif ($_REQUEST['info']=="notification_delete") {
          ?><div class="container msg">
            <div class="alert alert-info alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Success!</strong> Course Delete Successfully.
            </div></div><?php
            
            }
            }
            ?>
            <br></br>			
			
			<button onclick="document.location='sem_form.php'" class="sub">+ Add Semester</button>
			
			<br></br><br></br>
			
            <div class="container">
              <br></br><br></br>
              <div class="regform"><h2 style="margin-top:10px;Text-shadow:4px 4px 5px #5AA3B9;font-size:30px"> <b> All SEMESTER</b> </h2></div>

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Add Date</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
				
                <tbody>
                  <?php
                  require_once('connection.php');
                  $q = " select * from  sem";
                  $result = mysqli_query($conn,$q);
                  $num = mysqli_num_rows($result);
                  if ($num > 0) {
                  
                  while ($row = mysqli_fetch_array($result))
                  {
                  ?>
                  <tr>
                    <th scope="row"><?php echo $row['a_id']; ?></th>
                    <td class="not_title"><?php echo $row['sem']; ?></td>
                    <td class="date"><?php echo $row['date']; ?></td>
                    <td>  <a  onclick="job_delete();" href="logic.php?a_id=<?php echo $row["a_id"];?>">  <i class="fa fa-trash" ></i></a></td>
                  </tr>
                  <?php
                  }
                  }
                  ?>
                </tbody>
              </table>
              
            </div>
          </div>
      
  
    <script type="text/javascript">
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
	<!-- ALL JS FILES -->
    <script src="js/all.js"> </script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		
	
    // Get the modal
    var modal = document.getElementById('add_notification');
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
    modal.style.display = "none";
    }
    }
    function job_delete(){
    alert("Hello! do you want to delete this Course?");
    }
    </script>
	  </body>
  </html>