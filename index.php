<?php
require('dbconfig.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>workshop || Instructor</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

	
	<?php
		if(!empty($_GET['meg'])){
			echo $_GET['meg'];
		}

	?>


<body>
<div class="container">
	<h2>ALL Student Data</h2>
	<a class="btn btn-success" href="form.php"> Add New Data </a>

	<table class="table">
		<thead>
		<tr>
			<th> Name </th>
			<th>Email </th>
			<th> Department </th>
			<th> Registration </th>


			</tr>
		</thead>
		<tbody>
		

	

	
  	
<?php
	$sql="SELECT *FROM info";
	$result=$conn->query($sql);

	if($result-> num_rows >0){

		while($row=$result->fetch_assoc()){
			echo '<tr class="success">
				<td>'.$row["name"].'</tb>
				<td>' .$row["email"].'</tb>
				<td>' .$row["dept"].'</tb>
				<td>' .$row["reg"].'</tb>

				</tr>';
				
		}

	}else{
		echo "0result";
	}


?>
</tbody>
</table>

</body>
</html>





?>