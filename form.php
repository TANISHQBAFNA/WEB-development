<!DOCTYPE html>
<html>
<head>
	<title>Query Sent</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
<?php  


$host = "localhost";
	$un = "root";
	$pwd = "";
	$dbname = "form";

	$con = mysqli_connect($host, $un, $pwd, $dbname);

	if(mysqli_connect_error()){
		die("Connection failed:" . mysqli_connect_error);
	}
$fName=$_POST["fName"];
$contact=$_POST["contact"];
$email=$_POST["email"];
$query=$_POST["Query"];

$sql="INSERT INTO form(fName,contact,email,query) VALUES('".$fName."','".$contact."','".$email."','".$query."')";
$q=mysqli_query($con,$sql);

if($q == 1){
		echo "<h1>Thank You</h1><br><h1>Your Query has been sent</h1>";
	}
	else{
		echo "Error";
	}
		mysqli_close($con);
?> 
</body>
</html>
