<?php   require_once('connection.php');
?>
<!DOCTYPE html>
<html>
 <head>
  <title>view Feedback</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <!-- bootstrap 4 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- css -->
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/admin_comman.css">

 </head>
 <body>
  
  <div class="row">
    <div class="col-sm-2">
  <?php require_once('faculty.php'); ?>
      
    </div>
    
      
 
  <div class="container">
              <div class="text-heading"><h1>All Feedback.</h1></div>
   <table class="table table-bordered" id="myTable">
    <thead>
     <tr>
      <th scope="col">No</th>
      <th scope="col">Student name</th>
      <th scope="col">Email</th>
      <th scope="col">Department</th>
      <th scope="col">contact</th>

      <th scope="col"> Feedback Message</th>
      <th scope="col"> Post Date</th>


     </tr>
    </thead>
    <tbody>
     <?php
     require_once('connection.php');
     $q = " select * from  feedback  ORDER BY id DESC ";
     $result = mysqli_query($conn,$q);
     $num = mysqli_num_rows($result);
     if ($num > 0) {
     
     while ($row = mysqli_fetch_array($result))
     {
     ?>
     <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td class="title" ><?php echo $row['name']; ?></td>
      <td ><?php echo $row['email']; ?></td>
      <td class="title" ><?php echo $row['dept']; ?></td>
      <td  ><?php echo $row['number']; ?></td>

      <td ><?php echo $row['feedback_message']; ?></td>
      <td class="date" ><?php echo $row['post_date']; ?></td>


     </tr>
     <?php
     }
     }
     ?>
    </tbody>
   </table>
      </div>

  </div>
  </div>
 </body>
</html>