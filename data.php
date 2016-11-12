<?php require('dbconfig.php');
	
	if($_SERVER ["REQUEST_METHOD"] == "POST" ){
		$name = $_POST["name"];
		$email = $_POST["email"];
		$dept = $_POST["dept"];
		$reg = $_POST["reg"];
		 
		// echo "Name is: " . $name . "<br>";
		// echo "Email: " . $email . "<br>";
		// echo "dept: " . $dept . "<br>";
		// echo "Reg is: " . $reg . "<br>";

	
	$sql="INSERT INTO info(name,email,dept,reg) values('$name','$email','$dept','$reg') ";

	if($conn->query($sql) ==TRUE ){
		$message = "your data has been created succesfully";
		header('location: form.php?meg='.$message);		
	}else{
		$message = "Something went wrong";
		header('location: form.php?meg='.$message);	
	}




	$conn->close();
	}


?>