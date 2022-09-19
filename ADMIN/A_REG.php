<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Admin Registration Form</title>  
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
		height:220%;
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
	margin-top:15px;
	top:25px;
	color:white;
	font-size:18px;
	font-weight:700;
}


.firstname{
	position:relative;
	left:143px;
	top:-15px;
	line-height:40px;
	border-radius:6px;
	padding:0 19px;
	font-size:16px;
}
.middlename{
	position:relative;
	left:100px;
	top:-15px;
	line-height:40px;
	border-radius:6px;
	padding:0 19px;
	font-size:16px;
	color:#555;
	
}
.lastname{
	position:relative;
	left:30px;
	top:-15px;
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
		top:20px;
}
.middlelabel{
		position:relative;
		color:white;
		text-tranform:capitalize;
		font-size:14px;
		left:-60px;
		top:20px;
}

.lastlabel{
		position:relative;
		color:white;
		text-tranform:capitalize;
		font-size:14px;
		left:745px;
		top:-12px;
}
#gn{
	margin-left:25px;
	margin-top:15px;
	top:10px;
	color:white;
	font-size:18px;
	font-weight:700;
}
.gn{
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
	margin-left:25px;
	margin-top:15px;
	top:10px;
	color:white;
	font-size:18px;
	font-weight:700;
}
.db{
		position:relative;
		text-tranform:capitalize;
		font-size:14px;
		border-radius:6px;
		left:145px;
		top:-35px;
}
#add{
	margin-left:25px;
	margin-top:15px;
	top:-5px;
	color:white;
	font-size:18px;
	font-weight:700;
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
	top:20px;
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
	top:42px;		
}
.country{
	position:relative;
	left:80px;
	top:35px;
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
	top:71px;	
}
.city{
	position:relative;
	left:525px;
	top:-36px;
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
	top:2px;	
}
.state{
	position:relative;
	left:-292px;
	top:47px;
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
	top:82px;	
}
.zip{
	position:relative;
	left:562px;
	top:2px;
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
	top:82px;			
}
#em{
	margin-left:25px;
	margin-top:55px;
	width:125px;
	color:white;
	top:15px;
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
		top:-10px;
}
.code{
		position:relative;
		left:145px;
		top:-15px;
		width:95px;
		line-height:40px;
		border-radius:6px;
		padding:0 5px;
		font-size:16px;	
}
.number{
		position:relative;
		left:125px;
		top:-15px;
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
		left:55px;
		top:25px;
}
.phone_no{
		position:relative;
		color:white;
		text-tranform:capitalize;
		font-size:14px;
		left:-126px;
		top:25px;
}

.code1{
		position:relative;
		left:-397px;
		top:75px;
		width:95px;
		line-height:40px;
		border-radius:6px;
		padding:0 5px;
		font-size:16px;	
}
.number1{
		position:relative;
		left:298px;
		top:32px;
		width:255px;
		line-height:40px;
		border-radius:6px;
		padding:0 5px;
		font-size:16px;	
}
.area_code1{
		position:relative;
		color:white;
		text-tranform:capitalize;
		font-size:14px;
		left:-482px;
		top:112px;
}
.mobile_no{
		position:relative;
		color:white;
		text-tranform:capitalize;
		font-size:14px;
		left:48px;
		top:68px;
}
#cs{
	margin-left:25px;
	margin-top:15px;
	top:82px;
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
		top:55px;	
}
#qa{
	margin-left:5px;
	margin-top:25px;
	width:125px;
	top:95px;
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
		top:65px;
}
#ps{
	position:relative;
		color:white;
		text-tranform:capitalize;
		font-size:14px;
		left:163px;
		top:161px;
}

.pass{
		position:relative;
		text-tranform:capitalize;
		font-size:14px;
		border-radius:6px;
		width:18%;
		height:42px;
		left:145px;
		top:85px;
}
#pr{
		position:relative;
		color:white;
		text-tranform:capitalize;
		font-size:14px;
		left:351px;
		top:96px;
}
.per{
		position:relative;
		text-tranform:capitalize;
		font-size:14px;
		border-radius:6px;
		width:10%;
		height:42px;
		left:345px;
		top:18px;	
}

#pwd{
	margin-left:25px;
	margin-top:15px;
	top:86px;
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
		top:55px;
}
#cpwd{
	margin-left:25px;
	margin-top:15px;
	width:125px;
	top:85px;
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
		top:45px;
}



.icon{
       position: absolute;
      margin-top: 58px;
      margin-left: 95px;
      font-size: 23px;
	  color:black;
    }
	.icon:hover {color: red}
#icon1{
       position: absolute;
      margin-top: 57px;
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
		top:120px;
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
	<body class="host_version"> 

    
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
	 <div class="regform"><h2><b>ADMIN  REGISTRATION  FORM </b></h2></div>
	 <div class="regmain">
		<form action="" method="post">
				 
			<div id="name">
			<h2 class="name">Name :</h2>
				<input type="text" class="firstname" name="fname" placeholder="Enter First Name" required="" >
				<label class="firstlabel"> First Name :</label>
				
				<input type="text" class="middlename" name="mname" placeholder="Enter Middle Name" required="" >
				<label class="middlelabel"> Middle Name :</label>
				
				<input type="text" class="lastname" name="lname" placeholder="Enter Last Name" required="" >
				<label class="lastlabel"> Last Name :</label>	
			</div>
			<h2 id="gn">Gender :</h2>
					<select class="gn" name="gender"  required="" >
							<option>- Select Your Gender -</option>
							<option>MALE</option>
							<option>FEMALE</option>
							<option>OTHER</option>

					</select> 
					
			<h2 id="db">D.O.B. :</h2>
					<input type="date" name="dob" class="db" style="width:233px; height:42px;" placeholder="" required="">
					
			<div class="address">
			<h2 id="add">ADDRESS :</h2>
				
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
			
			<input type="text" name="area_code1" class="code1" placeholder="code" required="">
			<label class="area_code1"> Area Code : </label>
			
			<input type="text" name="mobile_no" class="number1" placeholder="Enter Number" required="">
			<label class="mobile_no"> Mobile Number : </label>
			
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
					
						
			<h2 id="pwd"> Password :</h2>
				<input type="password"  id="password" class="pd" placeholder="Enter password" name="pwd" >
				<span class="fa fa-eye icon" onclick="showpassword()" ></span>
			
			<h2 id="cpwd"> Confirm Password :</h2>
				<input type="password"  id="password1" class="cpd" placeholder="Enter Confirm password" name="pwd" >
				<span class="fa fa-eye icon" id="icon1" onclick="showpassword1()" ></span>

			<input type="submit" class="sub" id="s" name="submit" value="Submit" >
			<input type="reset" class="sub" id="r" name="reset" value="Reset">
			<br></br><br></br>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<a href="A_login.php" class="log"> Click to go for LOGIN</a>
					
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
	  
	   function showpassword1() {
      var x = document.getElementById("password1");
      if (x.type === "password1") {
      x.type = "text";
      } else {
      x.type = "password1";
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
		$fname=$_POST["fname"];
		$mname=$_POST["mname"];
		$lname=$_POST["lname"];
		$gender=$_POST["gender"];
		$dob=$_POST["dob"];
		$street_address=$_POST["street_address"];
		$street_address_line_2=$_POST["street_address_line_2"];
		$country=$_POST["country"];
		$city=$_POST["city"];
		$state=$_POST["state"];
		$zip=$_POST["zip"];
		$email=$_POST["email"];
		$area_code=$_POST["area_code"];
		$phone_no=$_POST["phone_no"];
		$area_code1=$_POST["area_code1"];
		$mobile_no=$_POST["mobile_no"];
		$department=$_POST["department"];
		$qualification=$_POST["qualification"];
		$passing_year=$_POST["passing_year"];
		$percentage=$_POST["percentage"];
		$pwd=$_POST["pwd"];
				
		$sql= "INSERT INTO a_registration(fname,mname,lname,gender,dob,street_address,street_address_line_2,country,city,state,zip,email,area_code,phone_no,area_code1,mobile_no,department,qualification,passing_year,percentage,pwd) 
		VALUES
		( '$fname', '$mname', '$lname', '$gender', '$dob', '$street_address', '$street_address_line_2', '$country', '$city', '$state', '$zip', '$email', '$area_code', '$phone_no', '$area_code1', '$mobile_no', '$department', '$qualification', '$passing_year', '$percentage', '$pwd')";
		
		if(mysqli_query($conn,$sql))
		{
			echo ' <script>alert("ADmin Registration Successfully!!")</script>';
		}
		else
		{
			echo ' <script>alert("Error!!")</script>'. mysqli_error($conn);
		}
	}
	
?>

</body>
</html>