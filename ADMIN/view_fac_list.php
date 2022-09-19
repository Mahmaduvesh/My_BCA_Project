<!DOCTYPE html>
<html>
	<head>
		<title>View Faculty List</title>
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
	<body>
	<div class="row">
    
    <div class="col-sm-25">
  <?php require_once('admin.php'); ?>
      
   
		<div class="container">
			
              <div class="text-heading"><h1>All Register Faculty list.</h1></div>

			
			<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
			<table class="table table-bordered" id="myTable">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Title</th>
						<th scope="col">First Name</th>
						<th scope="col">Middle Name</th>
						<th scope="col">Last Name</th>
						<th scope="col">Gender</th>
						<th scope="col">Street_address</th>
						<th scope="col">City</th>
						<th scope="col">Email Id</th>
						<th scope="col">Area code</th>
						<th scope="col">Phone No.</th>
						<th scope="col">Department</th>
						<th scope="col">Qualification</th>
						<th scope="col">Passing year</th>
						<th scope="col">Percentage</th>
						<th scope="col">Teaching Expierence Year</th>
						<th scope="col">Teaching Expierence Month</th>
						<th scope="col">Password</th>
						
					</tr>
				</thead>
				<tbody>
					<?php
					require_once('connection.php');
					$q = " select * from  f_registration  ORDER BY fname ";
					$result = mysqli_query($conn,$q);
					$num = mysqli_num_rows($result);
					if ($num > 0) {
					
					while ($row = mysqli_fetch_array($result))
					{
					?>
					<tr>
						<th scope="row"><?php echo $row['title']; ?></th>
						<td class="title"><?php echo $row['fname']; ?></td>
						<td ><?php echo $row['mname']; ?></td>
						<td ><?php echo $row['lname']; ?></td>
						<td ><?php echo $row['gender']; ?></td>
						<td ><?php echo $row['street_address']; ?></td>
						<td ><?php echo $row['city']; ?></td>
						<td ><?php echo $row['email']; ?></td>
						<td ><?php echo $row['area_code']; ?></td>
						<td ><?php echo $row['phone_no']; ?></td>
						<td ><?php echo $row['department']; ?></td>
						<td ><?php echo $row['qualification']; ?></td>
						<td ><?php echo $row['passing_year']; ?></td>
						<td ><?php echo $row['percentage']; ?></td>
						<td ><?php echo $row['year']; ?></td>
						<td ><?php echo $row['month']; ?></td>
						<td ><?php echo $row['pwd']; ?></td>
					
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
	</body>
</html>