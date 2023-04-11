
<?php
$servername="localhost";
$username="root";
$password="";
$Db="uasingishu event db";



$conn=mysqli_connect($servername,$username,$password,$Db);
if(!$conn){
	echo "not connected";
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>Event</title>
</head>
<body>
<h1>Event</h1>
</body>
</html>