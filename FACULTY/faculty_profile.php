<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Faculty Profile</title>
      <!-- bootstrap 4 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- w3school font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
    .profile .table-properties th {
    font-weight: normal;
    width: 15rem;
    }
    .profile .table-properties td {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    }
    .profile .table-properties tr:first-child td,
    .profile .table-properties tr:first-child th {
    border-top: none !important;
    }
    .profile .img-lg {
    width: 9rem;
    height: 9rem;
    }
    button a{
    color: white;
    }
    button a:hover{
    color: white;
    }
    </style>
  </head>
  <body>
    <?php
    require_once('faculty.php');
if (isset($_REQUEST['info']))
{
 if ($_REQUEST['info']=="update") {
?>
<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Profile update successfully
</div>
<?php  
 }
}
?>
    <?php
    if ($_SESSION['email']) {
    $email=$_SESSION['email'];
    }
    else{
    echo "not email ";
    }
    require_once("connection.php");
    $query =" select * from f_registration where  email='$email'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    ?>
    <div id="user" class="container profile" >
      <div class="row">
        <div class="col text-center mt-3">
		 <img alt="picture" src="assets/comp_logo/<?php echo $row['comp_logo']; ?>" class="img-lg rounded-circle border shadow" />
          <h2 class="mt-3" style="text-transform: uppercase;"><?php echo $row['fname']; ?></h2>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true"><b>Profile</b></a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <table class="table table-hover table-sm table-properties">
                <tr v-show="user.sub">
                  <th>Title :</th>
                  <td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 20rem;"><?php echo $row['title']; ?></td>
                </tr>
                <tr>
                  <th>First Name :</th>
                  <td><?php echo $row['fname']; ?></td>
                </tr>
                <tr>
                  <th>Middle Name :</th>
                  <td><?php echo $row['mname']; ?></td>
                </tr>
                <tr >
                  <th>Last Name :</th>
                  <td><?php echo $row['lname']; ?></td>
                </tr>
                <tr >
                  <th>Gender :</th>
                  <td><?php echo $row['gender']; ?></td>
                </tr>
				<tr >
                  <th>Date of Birth :</th>
                  <td><?php echo $row['dob']; ?></td>
                </tr>
				<tr >
                  <th>Age :</th>
                  <td><?php echo $row['age']; ?></td>
                </tr>
				<tr >
                  <th>Street_address :</th>
                  <td><?php echo $row['street_address']; ?></td>
                </tr>
				<tr >
                  <th>Street_address_line_2 :</th>
                  <td><?php echo $row['street_address_line_2']; ?></td>
                </tr>
				<tr >
                  <th>Country :</th>
                  <td><?php echo $row['country']; ?></td>
                </tr>
				<tr >
                  <th>City :</th>
                  <td><?php echo $row['city']; ?></td>
                </tr>
				<tr >
                  <th>State :</th>
                  <td><?php echo $row['state']; ?></td>
                </tr>
				<tr >
                  <th>Zip Code :</th>
                  <td><?php echo $row['zip']; ?></td>
                </tr>
				<tr >
                  <th>Email Id :</th>
                  <td><?php echo $row['email']; ?></td>
                </tr>
				<tr >
                  <th>Area code :</th>
                  <td><?php echo $row['area_code']; ?></td>
                </tr><tr >
                  <th>Phone No. :</th>
                  <td><?php echo $row['phone_no']; ?></td>
                </tr>
				<tr >
                  <th>Department :</th>
                  <td><?php echo $row['department']; ?></td>
                </tr>
				<tr >
                  <th>Qualification :</th>
                  <td><?php echo $row['qualification']; ?></td>
                </tr>
				<tr >
                  <th>Passing Year :</th>
                  <td><?php echo $row['passing_year']; ?></td>
                </tr>
				<tr >
                  <th>Percentage :</th>
                  <td><?php echo $row['percentage']; ?></td>
                </tr>
				<tr >
                  <th>Year :</th>
                  <td><?php echo $row['year']; ?></td>
                </tr>
				<tr >
                  <th>Month :</th>
                  <td><?php echo $row['onth']; ?></td>
                </tr>
				<tr >
                  <th>Password :</th>
                  <td><?php echo $row['pwd']; ?></td>
                </tr>
				<tr >
                  <th>Confirm Password :</th>
                  <td><?php echo $row['cpwd']; ?></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <button class="btn btn-primary btn-lg" style="margin-bottom: 20px;"><i class="fa fa-edit"></i>
      <a href=" faculty_profile_edit.php?faculty_id=<?php echo $row["faculty_id"];?>">Edit</a></button>
    </div>
    <?php
    ?>
    
  </body>
</html>