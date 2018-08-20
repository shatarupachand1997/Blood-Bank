<!DOCTYPE html>

<html>
<head>
	<title>Store data</title>
</head>
<body>


<?php
extract($_POST);

$dname=$_POST["dname"];
$age=$_POST["age"];
$address=$_POST["address"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$bg=$_POST["bg"];
$gender=$_POST["gender"];

$query="insert into bloodbank values('$dname',$age,'$address','$email',$mobile,'$bg','$gender')";
$mysqli=new mysqli("localhost","root","","test");

$result=$mysqli->query($query);
if($mysqli->errno)
{
	echo "not inserted";
	echo $mysqli->error;
}
else
{
	echo "Inserted successfully";
}

?>
<br><br>
<a href="display.php">Next>></a>
</body>
</html>