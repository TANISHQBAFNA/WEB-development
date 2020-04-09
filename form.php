
<!DOCTYPE html>
<html>
<head>
	<title>Query Sent</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	<form class="form">Thank You<br> Your Query has been sent</form>

<?php  


$host = "localhost";
	$un = "root";
	$pwd = "";
	$dbname = "enquiry";

	$con =new mysqli($host, $un, $pwd, $dbname);

	if(!$con){
		die("Connection failed:" . mysqli_connect_error);
	}
$fName=$_POST["fName"];
$contact=$_POST["contact"];
$email=$_POST["email"];
$query=$_POST["Query"];
$query="INSERT INTO enquiry WHERE VALUES('$fName',$contact,'$email','$query')";
$dbresult =$con->query($query);

?> 

</body>
</html>