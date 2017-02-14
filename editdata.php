<?php
require('dbconfig.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Workshop || Instructor</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"-->

<?php
		if(!empty($_GET['meg'])){
			echo $_GET['meg'];
		}

	?>


<body>
<div class="container">
	<h2>Edit Student Data</h2>
	

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
	$i=1;
	$count = mysqli_num_rows($result);

	if($result-> num_rows >0){

		while($row=$result->fetch_assoc()){
			echo '<tr class="success">
				<td>'.$row["name"].'</tb>
				<td>' .$row["email"].'</tb>
				<td>' .$row["dept"].'</tb>
				<td>' .$row["reg"].'</tb>
				<td>' .$row["id"].'</tb>
				</tr>';
				echo '<td>';
   				
       			echo '<a href="editformpage.php?id='.$row['id'].'">EDIT</a>';
   				
   				echo '</td>';
   				echo '</tr>';
   				$i++;

				
		}

	}else{
		echo "No result found";
	}


?>
</tbody>
</table>
	

</body>
</html>

