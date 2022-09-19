
<!DOCTYPE html>
<html>
	<head>
		<title>View Feedback List</title>
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
	
	
	<div class="row">
    
    
		<div class="container">
			
              <div class="text-heading"><h1>Student Feedback.</h1></div>

			
			<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
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
					$q = " select * from  feedback  ORDER BY fname ";
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