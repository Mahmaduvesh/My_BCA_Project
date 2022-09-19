<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>FACLUTY Registration Form </title>  
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
	
    
 
<style>
 body{
    margin:0;
    padding:0;
    background: url(images/sss.png);
    
    font-family: sans-serif;
}
h2{
 color:white;	
}
.regform
{
	width:950px;
	background-color:rgb(0,0,0,0.6);
	margin:auto;
	background-color:black;
	padding:10px 0px 10px 0px;
    text-align:center;
	border-radius:15px 15px 0px 0px;
}

.regmain
{
		background-color:rgb(0,0,0,0.5);
		width:950px;
		margin:auto;
}

form 
{
		padding:10px;
}
#name
{
	width:100%;
	height:100px;
}
.name{
	margin-left:25px;
	margin-top:10px;
	color:white;
	font-size:18px;
	font-weight:700;
}

#title{
	position:relative;
	text-tranform:capitalize;
	height:45px;
	width:82%;
	font-size:14px;
	border-radius:6px;
	left:145px;
	top:-35px;
}

.firstname{
	position:relative;
	left:143px;
	top:-37px;
	line-height:40px;
	border-radius:6px;
	padding:0 19px;
	font-size:16px;
}
.middlename{
	position:relative;
	left:100px;
	top:-37px;
	line-height:40px;
	border-radius:6px;
	padding:0 19px;
	font-size:16px;
	color:#555;
	
}
.lastname{
	position:relative;
	left:30px;
	top:-37px;
	line-height:40px;
	border-radius:6px;
	padding:0 19px;
	font-size:16px;
	color:#555;
	
}
.firstlabel{
		position:relative;
		color:white;
		text-tranform:capitalize;
		font-size:14px;
		left:-15px;
		top:-2px;
}
.middlelabel{
		position:relative;
		color:white;
		text-tranform:capitalize;
		font-size:14px;
		left:-60px;
		top:-2px;
}

.lastlabel{
		position:relative;
		color:white;
		text-tranform:capitalize;
		font-size:14px;
		left:745px;
		top:-32px;
}

#gn{
		position:relative;
		text-tranform:capitalize;
		font-size:14px;
		border-radius:6px;
		width:82%;
		height:45px;
		left:145px;
		top:-35px;
}

#db{
		position:relative;
		text-tranform:capitalize;
		font-size:14px;
		border-radius:6px;
		left:145px;
		top:-35px;
}

#ag{
		position:relative;
		text-tranform:capitalize;
		font-size:14px;
		border-radius:6px;
		width:82%;
		height:42px;
		left:145px;
		top:-35px;
}

#address
{
	width:100%;
	height:100px;
}
.ar1{
	position:relative;
	text-tranform:capitalize;
	left:2px;
	top:5px;
	border-radius:6px;
	width:82%;
}
.ar2{
	position:relative;
	text-tranform:capitalize;
	left:-4px;
	top:15px;
	border-radius:6px;
	width:82%;
}
#st1{
	position:relative;
	left:150px;
	top:290px;
	color:white;
	font-size:14px;
	top:29px;
	
}

#st2{
	position:relative;
	left:155px;
	color:white;
	font-size:14px;
	top:37px;		
}
.country{
	position:relative;
	left:80px;
	top:20px;
	width:350px;
	line-height:42px;
	border-radius:6px;
	padding:0 5px;
	font-size:16px;
}
#cn{
	position:relative;
	left:155px;
	color:white;
	font-size:14px;
	top:57px;	
}
.city{
	position:relative;
	left:525px;
	top:-48px;
	width:350px;
	line-height:42px;
	border-radius:6px;
	padding:0 5px;
	font-size:16px;
}
#ct{
	position:relative;
	left:575px;
	color:white;
	font-size:14px;
	top:-10px;	
}
.state{
	position:relative;
	left:-292px;
	top:30px;
	width:350px;
	line-height:42px;
	border-radius:6px;
	padding:0 5px;
	font-size:16px;
}
#st{
	position:relative;
	left:-235px;
	color:white;
	font-size:14px;
	top:67px;	
}
.zip{
	position:relative;
	left:562px;
	top:-16px;
	width:350px;
	line-height:42px;
	border-radius:6px;
	padding:0 5px;
	font-size:16px;
}
#zi{
	position:relative;
	left:-220px;
	color:white;
	font-size:14px;
	top:67px;			
}
#em{
	margin-left:25px;
	margin-top:55px;
	width:125px;
	color:white;
	font-size:18px;
	font-weight:700;
	padding:0 5px;
}
.email{
		position:relative;
		text-tranform:capitalize;
		font-size:14px;
		border-radius:6px;
		width:82%;
		height:42px;
		left:145px;
		top:-25px;
}
.code{
		position:relative;
		left:145px;
		top:-37px;
		width:95px;
		line-height:40px;
		border-radius:6px;
		padding:0 5px;
		font-size:16px;	
}
.number{
		position:relative;
		left:125px;
		top:-37px;
		width:255px;
		line-height:40px;
		border-radius:6px;
		padding:0 5px;
		font-size:16px;	
}
.area_code{
		position:relative;
		color:white;
		text-tranform:capitalize;
		font-size:14px;
		left:48px;
		top:-4px;
}
.phone_no{
		position:relative;
		color:white;
		text-tranform:capitalize;
		font-size:14px;
		left:-132px;
		top:-4px;
}
#cs{
	margin-left:25px;
	margin-top:15px;
	width:125px;
	color:white;
	font-size:18px;
	font-weight:700;
	padding:0 5px;
}
.course{
		position:relative;
		text-tranform:capitalize;
		font-size:14px;
		border-radius:6px;
		width:82%;
		height:42px;
		left:145px;
		top:-25px;	
}
#qa{
	margin-left:5px;
	margin-top:25px;
	width:125px;
	color:white;
	font-size:18px;
	font-weight:700;
	padding:0 5px;
}
.quali{
		position:relative;
		text-tranform:capitalize;
		font-size:14px;
		border-radius:6px;
		width:82%;
		height:42px;
		left:145px;
		top:-35px;
}
#ps{
	position:relative;
		color:white;
		text-tranform:capitalize;
		font-size:14px;
		left:149px;
		top:42px;
}

.pass{
		position:relative;
		text-tranform:capitalize;
		font-size:14px;
		border-radius:6px;
		width:18%;
		height:42px;
		left:145px;
		top:-33px;
}
#pr{
		position:relative;
		color:white;
		text-tranform:capitalize;
		font-size:14px;
		left:354px;
		top:-25px;
}
.per{
		position:relative;
		text-tranform:capitalize;
		font-size:14px;
		border-radius:6px;
		width:10%;
		height:42px;
		left:345px;
		top:-102px;	
}

#year{
	margin-left:25px;
	margin-top:-42px;
	width:125px;
	color:white;
	font-size:18px;
	font-weight:700;
	padding:0 5px;
}
.yr{
		position:relative;
		text-tranform:capitalize;
		font-size:14px;
		border-radius:6px;
		height:42px;
		width:15%;
		left:145px;
		top:-33px;	
}
.mn{
		position:relative;
		text-tranform:capitalize;
		font-size:14px;
		border-radius:6px;
		width:15%;
		height:42px;
		left:148px;
		top:-32px;	
}
#pwd{
	margin-left:25px;
	margin-top:15px;
	width:125px;
	color:white;
	font-size:18px;
	font-weight:700;
	padding:0 5px;	
}
.pd{
		position:relative;
		text-tranform:capitalize;
		font-size:14px;
		border-radius:6px;
		width:82%;
		height:42px;
		left:145px;
		top:-25px;
}
#cpwd{
	margin-left:25px;
	margin-top:15px;
	width:125px;
	color:white;
	font-size:18px;
	font-weight:700;
	padding:0 5px;	
}
.cpd{
		position:relative;
		text-tranform:capitalize;
		font-size:14px;
		border-radius:6px;
		width:82%;
		height:42px;
		left:145px;
		top:-45px;
}

.icon{
       position: absolute;
      margin-top: -18px;
      margin-left: 95px;
      font-size: 23px;
	  color:black;
    }
	.icon:hover {color: red}
	
#icon1{
       position: absolute;
      margin-top: -38px;
      margin-left: 95px;
      font-size: 23px;
	  color:black;
    }
	#icon1:hover {color: red}
	
	.log{
margin-left:25px;
	
	top:136px;
	width:125px;
	color:white;
	font-size:18px;
	font-weight:700;
	padding:0 5px;	
	
}	

	
#s{
	margin-left:355px;
	
}
#r{
	margin-left:30px;
	
}
.sub{
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
	<hr>
	<br>
	 <div class="regform"><h2><b> FACLUTY  REGISTRATION  FORM </b></h2></div>
	 <div class="regmain">
		<form action="" method="post">
				<h2 class="name">Title :</h2>
					<select id="title" name="title"  required="">
							<option>- Select Title -</option>
							<option>Mr.</option>
							<option>Ms.</option>
							<option>Dr.</option>
							<option>proof.</option>
					</select> 
			<div id="name">
			<h2 class="name">Name :</h2>
				<input type="text" class="firstname" name="fname" placeholder="Enter First Name" required="">
				<label class="firstlabel"> First Name :</label>
				
				<input type="text" class="middlename" name="mname" placeholder="Enter Middle Name" required="">
				<label class="middlelabel"> Middle Name :</label>
				
				<input type="text" class="lastname" name="lname" placeholder="Enter Last Name" required="">
				<label class="lastlabel"> Last Name :</label>	
			</div>
			<h2 class="name">Gender :</h2>
					<select id="gn" name="gender"  required="">
							<option>- Select Your Gender -</option>
							<option>MALE</option>
							<option>FEMALE</option>
							<option>OTHER</option>

					</select> 
					
			<h2 class="name">D.O.B. :</h2>
					<input type="date" name="dob" id="db" style="width:233px; height:42px;" placeholder="" required="">
					
			<h2 class="name">Age :</h2>
					<input type="text" name="age" id="ag" placeholder="Enter Your Age" required="">
			
			<div class="address">
			<h2 class="name">ADDRESS :</h2>
				
				<label id="st1"> Street Address Line 1:</label>
					<textarea cols="50" rows="1" type="text"  class="ar1" name="street_address" placeholder="Enter Street Adress line 1" required=""></textarea><br><br>
				
				<label id="st2"> Street address Line 2 :</label>
					<textarea cols="50" rows="3" type="text"  class="ar2" name="street_address_line_2" placeholder="Enter Street Adress line 2 *"></textarea><br><br>
								
				<label id="cn"> Country : </label>
					<input type="text" name="country" class="country" placeholder="Enter Country Name" required="">
				<br></br>
				<label id="ct"> City : </label>
					<input type="text" name="city" class="city" placeholder="Enter City Name" required="">
						
				<label id="st"> State : </label>
					<input type="text" name="state" class="state" placeholder="Enter State Name" required="">
				
				<label id="zi"> Postal/Zip Code : </label>
					<input type="text" name="zip" class="zip" placeholder="Enter Zip Code" required="">
			</div>
			
			<h2 id="em"> E-mail : </h2>
				<input type="email" name="email" class="email" placeholder="Enter Your E-mail Address" required="">
			
			<h2 class="name"> Phone :</h2>
			<input type="text" name="area_code" class="code" placeholder="code" required="">
			<label class="area_code"> Area Code : </label>
			
			<input type="text" name="phone_no" class="number" placeholder="Enter Number" required="">
			<label class="phone_no"> Phone Number : </label>
			
			<h2 id="cs"> Course :</h2>
			<select  name="department" class="course">
				<option>-Select Your Department-</option>
				<option> B.COM </option>
				<option> M.COM </option>
				<option> BBA</option>
				<option> MBA </option>
				<option> BCA </option>
				<option> MCA </option>
				<option> B.sc.Chemistry </option>
				<option> B.sc.Micro-Biolog) </option>		
            </select>

			<h2 id="qa"> Qualification:</h2>
					<input type="text" class="quali" name="qualification" placeholder="Enter Your Qualification" required="">
			
			<h2 id="ps">Passing Year:</h2>
					<input type="text" class="pass" name="passing_year" placeholder="" required="">
		
			<h2 id="pr">Percentage :</h2>
					<input type="text" class="per" name="percentage" placeholder="" required="">
			
			<h2 id="year">Teaching Experience :</h2>
						<select  class="yr" name="year" >
							<option>-Select Year-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5 above</option>
						</select>
									
			<select class="mn" name="month">
							<option>-Select Month-</option>
							<option>(1)-January</option>
							<option>(2)-February</option>
							<option>(3)-March</option>
							<option>(4)-April</option>
							<option>(5)-May</option>
							<option>(6)-jun </option>
							<option>(7)-July</option>
							<option>(8)-Aguest</option>
							<option>(9)-Sptember</option>
							<option>(10)-October</option>
							<option>(11)-November</option>
							<option>(12)-December</option>
                       </select>			
						
			<h2 id="pwd"> Password :</h2>
				<input type="password"  id="password" class="pd" placeholder="Enter password" name="pwd" >
				<span class="fa fa-eye icon" onclick="showpassword()" ></span>
			
			<h2 id="cpwd"> Confirm Password :</h2>
				<input type="password"  id="password" class="cpd" placeholder="Enter Confirm password" name="pwd" >
				<span class="fa fa-eye icon" id="icon1" onclick="showpassword()" ></span>
			
				<input type="submit" class="sub" id="s" name="submit" value="Submit">
				<input type="reset" class="sub" id="r" name="reset" value="Reset">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="F_login.php" class="log">Click to Faculty Login</a>
				<br></br>
				
		</form>
	</div>
	<a href="" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

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
	
      function showpassword() {
      var x = document.getElementById("password");
      if (x.type === "password") {
      x.type = "text";
      } else {
      x.type = "password";
      }
      }
      </script>
		
<?php
	$localhost="localhost";
	$dbuser="root";
	$pwd="";
	$dbname="college" ;

	$conn= mysqli_connect($localhost,$dbuser,$pwd,$dbname);

	if (isset ($_POST["submit"]))
	{
		$title=$_POST["title"];
		$fname=$_POST["fname"];
		$mname=$_POST["mname"];
		$lname=$_POST["lname"];
		$gender=$_POST["gender"];
		$dob=$_POST["dob"];
		$age=$_POST["age"];
		$street_address=$_POST["street_address"];
		$street_address_line_2=$_POST["street_address_line_2"];
		$country=$_POST["country"];
		$city=$_POST["city"];
		$state=$_POST["state"];
		$zip=$_POST["zip"];
		$email=$_POST["email"];
		$area_code=$_POST["area_code"];
		$phone_no=$_POST["phone_no"];
		$department=$_POST["department"];
		$qualification=$_POST["qualification"];
		$passing_year=$_POST["passing_year"];
		$percentage=$_POST["percentage"];
		$year=$_POST["year"];
		$month=$_POST["month"];
		$pwd=$_POST["pwd"];
				
		$sql= "INSERT INTO f_registration(title,fname,mname,lname,gender,dob,age,street_address,street_address_line_2,country,city,state,zip,email,area_code,phone_no,department,qualification,passing_year,percentage,year,month,pwd) 
		VALUES
		( '$title', '$fname', '$mname', '$lname', '$gender', '$dob', '$age', '$street_address', '$street_address_line_2', '$country', '$city', '$state', '$zip', '$email', '$area_code', '$phone_no', '$department', '$qualification', '$passing_year', '$percentage', '$year', '$month', '$pwd')";
		
		if(mysqli_query($conn,$sql))
		{
			echo ' <script>alert("Registration Successfully!!")</script>';
		}
		else
		{
			echo ' <script>alert("Error!!")</script>'. mysqli_error($conn);
		}
	}
	
?>

</body>
</html>