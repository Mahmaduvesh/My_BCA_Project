
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include('A_d.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: Admin_index.php");
exit();
}
?>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Admin Login Form </title>  
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
	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
	
	<!-- bootstrap 4 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Core css -->
    <link rel="stylesheet" href="assets/css/style.min.css"/>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
    




<head>
    <title>Login Form Design</title>
  
 <style>
 body{
    margin:0;
    padding:0;
    background: url(images/sss.png);
    background-size: 1710px 100%;
    font-family: sans-serif;
}

.loginbox{
    width: 450px;
    height: 600px;
    background: black;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%) ;
    padding: 70px 30px;
	border-radius: 15px;
	border: solid;

}

#avatar{
    height: 100px;
    width : 100px;
    border-radius: 50%;
    position: absolute;
    top: -40px;

    left: calc(50% - 50px)
}

h1{
    margin:0;
    padding:0 0 20px;
    text-align: center;
    font-size: 25px;
	color:white;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type="email"],  input[type="password"] 
{
    border: none;
    border-bottom: 1px solid #fff;
     background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
 

.loginbox input[type="submit"]
{
    border: none;
    background: #f00606;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}

.loginbox input[type="submit"]:hover{
    cursor: pointer;
    background: #bff608;
    color: #000;
}

.loginbox a{
    text-decoration: none;
    font-size: 14px;
    line-height: 20px;
    color: white;
}

.loginbox a:hover{
    color: #bff608;
}
 
 .loginbox input[type="reset"]
{
    border: none;
    background: #f00606;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.loginbox input[type="reset"]:hover{
    cursor: pointer;
    background: #bff608;
    color: #000;
}

#btn{
		font-weight:bold;
		
}

  .icon{
       position: absolute;
      margin-top: -48px;
      margin-left: 340px;
      font-size: 20px;
	  color:blue;
    }
 #bu{
	 padding-top:20px;
	   margin-left: 30px;
	 font-weight:bold;
 }
 
#eml{
	 position: absolute;
      margin-top: 48px;
      margin-left: -200px;
}
#bu1{
	 padding-top:20px;
	   margin-left: 30px;
	 font-weight:bold;
 }
 
#pass{
	 position: absolute;
      margin-top: 84px;
      margin-left: -380px;
}
#sub{
  display: inline-block;
  padding: 0 10px;
  font-size: 20px;
  cursor: pointer;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: blue;
  border: solid;
  border-radius: 5px;
  box-shadow: 0 9px #999;
}

#sub:hover {background-color: green}

#sub:active {
  background-color: orange;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.fa-color
{
		color:bluef;
}
.fa-customize
{
		font-size:90px;
}
 </style>
</head>
<body>
<!-- Start header -->
	
	
	<table border="0" width="100%">
	<tr>
		<td><img src="images/sslogo.png" style="width:385px; height:85px;" alt="" /></td>
		
			 
	</tr>    
</table>
    <div claSS="loginbox">
 
	
	<i class="fa fa-graduation-cap fa-5x fa-color fa-customize"  id="avatar"></i>
    <h1><b>Admin Login Here</b></h1>
    <form action="" method="post">
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <button type="button" class="btn btn-facebook" id="sub"><i class="fa fa-facebook mr-2"></i>Facebook</button> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <button type="button" class="btn btn-google" id="sub"><i class="fa fa-google mr-2"></i>Google</button>
		 
		<br></br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Or
		 
		 <i class="fa fa-envelope" id="eml"></i><p id="bu" >E-mail :</p>
        <input type="email" name="email"  placeholder="Enter email">
        
		<i class="fa fa-key" id="pass"></i><p id="bu1">Password :</p>
        
		<input type="password"  id="password" placeholder="Enter password" name="pwd" >
		<span class="fa fa-eye icon" onclick="showpassword()" ></span>

        <input type="submit" name="submit" id="btn" value="Login"><br>
		
		
		 <input type="reset" name="reset" id="btn" value="Cancel">
        <span><?php echo $error; ?></span> <br>
							
				<a href="A_REG.php"> Don't have an account ? <br> Then Go for Register...</a>
    </form>
	<script>
      function showpassword() {
      var x = document.getElementById("password");
      if (x.type === "password") {
      x.type = "text";
      } else {
      x.type = "password";
      }
      }
      </script>
</body>
</html>