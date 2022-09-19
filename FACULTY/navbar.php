<!DOCTYPE html>
<html>
 <head>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <style>
  *{margin: 0; padding: 0;}
  nav{
  background-color: white;
  height: 65px;
  width: 100%;
  border-bottom: 1px solid lightgrey;
  }
  nav ul {
  margin: 25px 0 0 0px;
  }
  nav ul li {
  list-style-type: none;
  display: inline-block;
  }
  nav ul li a {
  font-size:16px;
  text-decoration: none;
  color:#0272db;
  text-transform: uppercase;
  font-weight: bolder;
  padding-right: 15px;
  
  }
  nav ul li a:hover{
  color:grey;
  }
  /*for phone view*/
  @media(max-width:775px){
  nav{
  height: 50px;
  width: 100%;
  border-bottom: 1px solid lightgrey;
  }
  nav ul {
  position: fixed;
  height: 100vh;
  top: 80px;
  left: -100%;
  margin:0px 0 0 0;
  background-color:#fff;
  transition: all .5s;
  width: 85%;
  }
  nav ul li {
  display: block;
  margin: 20px 0 0 40px;
  line-height: 40px;
  }
  nav ul li a {
  font-size: 23px;
  text-decoration: none;
  color:black; }
  
  }
  .logoimg{
  padding-left: 20px;
  margin-top: 0px;
  height: 65px;
  }
  .logoimg img {
  height: 49px;
  width: auto;
  margin-top: 10px;
  }
  .checkbtn{
  font-size: 22px;
  float: right;
  line-height: 80px;
  margin-right: 20px;
  cursor: pointer;
  display: none;
  color: black;
  }
  #check{
  display: none;
  z-index: 100;
  }
  .bar{
  display: none;
  }
  .navbar_right{
  float: right;
  margin-top: -72px;
  }
  /*more navbar  slide*/
  .more_content{
  display: none;
  position: absolute;
  background-color: white;
  min-width:200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.1);
  z-index: 1;
  font-size: 20px;
  margin: 0px 0 0 0px;
  }
  .more_content a{
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  }
  .more_content a:hover {background-color: #ddd;}
  /* job categary area */
  .job_search{display: inline-block;}
  .job_search:hover .more_content {display: block; transform: 3s;}
  /* more navbar section*/
  .more{display: inline-block;}
  
  .more:hover .more_content {display: block; transform: 3s;}
  .login_btn{
  display: inline-block;
  }
  
  
  /*for phone size*/
  @media(max-width:775px){
  .checkbtn{
  display: block;
  left: 0px;
  }
  .more  li a {
  color: black;}
  .job_search li a{
  color: black;
  }
  
  #bar{
  float: left;
  margin-left: 15px;
  margin-top: -15px;
  cursor: pointer;
  }
  /* close btn */
  #close_bar{
  display: none;
  float: left;
  font-size:22px;
  margin-left: 15px;
  margin-top: -15px;
  cursor: pointer;
  }
  .logoimg{
  line-height: 0px;
  }
  .logoimg img{
  height: 28px;
  /*width: 100%;*/
  }
  
  
  #check:checked ~ ul{
  left: 0px;
  z-index: 100;
  margin-top: -30px;
  }
  }
/*  .post_btn{
    padding: 0px; 
    margin-right: 15px;
    border: none;
    float: right;
    width: 152px;
    height: 32px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    background: #0272db;
    font-size: 13px;
    color: #fff;
    margin-top: 5px;  
  }
*/  
  </style>
 </head>
 <body id="body">
  <nav id="nav">
   <input type="checkbox" id="check">
   <label id="bar" for="check" class="checkbtn">
    <span id="bar2"onclick="openNav()"> <i class="  fas fa-bars"></i></span>
   </label>
   <!-- close btn on navbar -->
   <label id="close_bar"  class="checkbtn" onclick="closeNav()">
    <i class="fas fa-times"></i>
   </label>
   
   <div class="logoimg">
    <img src="assets/images/logo.png" width="100">
   </div>
   
   <ul  id="close">
    <div class="navbar_right">
     <li id="icon-home"><a href="index.php"><i class="fa fa-home"></i></a></li>
     <li><a href="job_detail.php">All Vacancy</a></li>
     <li><a href="under_admin_approval.php">Under Approval</a></li>
     <li><a href="active_vacancy.php">Active vancancy</a></li>
     
     <div class="more">
      <li> <a href="#">Profile</a></li>
      <div class="more_content">
       <a href="comp_profile.php" style="cursor: pointer;">Profile</a>
       <a href="job_post.php">post vacancy</a>
      </div>
     </div>
     <li><a href="under_admin_approval.php">post vacancy</a></li>
    </div>
   </ul>
   
   
  </nav>
  <script>
  function openNav() {
  document.getElementById("close_bar").style.display = "inline-block";
  document.getElementById("bar").style.display = "none";
  document.getElementById("body").style.position = "fixed";
  }
  function closeNav() {
  document.getElementById("close_bar").style.display = "none";
  document.getElementById("check").checked = false ;
  document.getElementById("bar").style.display = "block";
  document.getElementById("w").style.position = "static";
  }
  </script>
  
 </body>
</html>