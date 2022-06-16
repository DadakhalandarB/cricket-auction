<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";

//create connection
$con = new mysqli($servername,$username,$password);
//check connectio
if($con->connect_error){
	die("connection failed:".$con->connect_error);
$con->connect_error;}
echo "connected successfully";	

mysqli_select_db($con,"pdetails");

$sql="INSERT INTO sold_players(name,sold_to,sold_price) VALUES ('$_POST[name]','$_POST[sold_to]','$_POST[sold_price]')";

if($con->query($sql) === TRUE)
{
	echo "New record created successfully";
}
else
{
	echo "Error:".$sql."<br>".$con->error;
}
mysqli_close($con);
?>
</body>
</html>