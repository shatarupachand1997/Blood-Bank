<!DOCTYPE html>

<html>
<head>
	<title>Store data</title>
</head>
<body>
<center><h1>OUR DONORS</h1></center>
<BR><BR>
<?php
$query="select * from bloodbank";
$mysqli=new mysqli("localhost","root","","test");

$result=$mysqli->query($query);
/*
if($mysqli->errno)
{
	echo "not done";
	echo $mysqli->error;
}
else
{
	echo "successful";
}
*/
echo "<CENTER><table cellspacing='10'>";
echo "<tr><th>Donor Name</th><th>Age</th><th>Address</th><th>Email ID</th><th>Mobile</th><th>Blood Group</th><th>Sex</th></tr>";

while($row=$result->fetch_assoc())	
{
	echo "<tr><td>".$row["donor_name"]."</td><td>".$row["age"]."</td><td>".$row["address"]."</td><td>".$row["email"]."</td><td>".$row["mobile"]."</td><td>".$row["bloodgroup"]."</td><td>".$row["gender"]."</td></tr>";
}
echo "</table>";
?>
<a href="filter.html">Filter data>></a>
</body>
</html>
