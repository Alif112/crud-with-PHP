<?php 
	require('dbconfig.php');

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
	<h2> Data Collection</h2>

	<form class="form-horizontal" action="data.php" method="POST" >
	<div class="form-group">
		<label class = "control-label col-md-2"  for="name"> Name: </label>
		<div class="col-md-6">
			<input type="text" name="name" class="form-control" placeholder="Enter Your Full Name" required>
		</div>

	</div>

	<div class="form-group">
		<label class = "control-label col-md-2"  for="email"> Email: </label>
		<div class="col-md-6">
			<input type="email" name="email" class="form-control" placeholder="something@gmail.com" required>
		</div>

	</div>

	<div class="form-group">
		<label class = "control-label col-md-2"  for="dept"> Dept: </label>
		<div class="col-md-6">
			<input type="text" name="dept" class="form-control" placeholder="E.g. CSE , PME" required>
		</div>

	</div>

	<div class="form-group">
		<label class = "control-label col-md-2"  for="reg"> Reg: </label>
		<div class="col-md-6">
			<input type="text" name="reg" class="form-control" placeholder="201X331XXX" required >
		</div>

	</div>


	<div class="form-group">
		<div class = "col-sm-offset-2 col-md-6">
		<button type="submit" class ="btn btn-primary"> Submit  </button>

	</div>


  	

</form>
</body>
</html>

?>