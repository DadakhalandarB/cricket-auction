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

//select the db
mysqli_select_db($con,"pdetails");

//create insert query
$sql="INSERT INTO duplesis(id,name,teams,batst,bowlst,baseprice,matches,runs,strikerate,wickets,economy,soldprice) VALUES ('$_POST[id]','$_POST[name]','$_POST[teams]','$_POST[batst]','$_POST[bowlst]','$_POST[beseprice]','$_POST[matches]','$_POST[runs]','$_POST[strikerate]','$_POST[wickets]','$_POST[economy]','$_POST[soldprice]')";
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