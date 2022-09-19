<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Result</title>
		<!-- bootstrap 4 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>
	<body>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Email</th>
					<th scope="col">Dept</th>
					<th scope="col">Year</th>
					<th scope="col">Class</th>
					<th scope="col">Sem</th>
					<th scope="col">Subject Name</th>
					<th scope="col">posting date</th>
					<th scope="col">submission date</th>
					<th scope="col">Journal</th>
				</tr>
			</thead>
			<tbody>
				
				<?php
				require_once('connection.php');
				if (isset($_REQUEST['submit_filter'])) {
					$depart=$_REQUEST['depart'];
					$year=$_REQUEST['year'];
					$class=$_REQUEST['class'];
					$sem=$_REQUEST['sem'];
						$q = " select * from  journal where depart='$depart' && year='$year' && class='$class' && sem='$sem' ";
				$result = mysqli_query($conn,$q);
				$num = mysqli_num_rows($result);
				if ($num > 0) {
				
				while ($row = mysqli_fetch_array($result))
				{
				?>
				<tr>
					<th scope="row">1</th>
					<td><?php  echo $row['email'];?> </td>
					<td><?php  echo $row['depart'];?> </td>
					<td><?php  echo $row['year'];?> </td>
					<td><?php  echo $row['class'];?> </td>
					<td><?php  echo $row['sem'];?> </td>
					<td><?php  echo $row['sub_name'];?> </td>

					<td><?php  echo $row['cdate'];?> </td>
					<td><?php  echo $row['sdate'];?> </td>
					<td><a href="journal/<?php  echo $row['file'];?>" target="_blank">View Journal</a>	</td>
					
				</tr>	<?php
				// while close
				}
				
				// inner if close
				}
				else{
						?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>not have any Journal</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

				<?php
				}
			

// main if 
				}
				?>
				
				
			</tbody>
		</table>
	</body>
</html>