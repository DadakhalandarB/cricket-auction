<html>
<head>
<title>Table with database</title>
<style>
table {border-collapse: collapse;
width: 50%;
height: 10%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;}
td{
text-align:left;}
th:nth-child(even){
background-color: #f2f2f2;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}

.img{
width:16%;}

.floatleft{
float:left;
width:20%}
.floatright{
float:center;}
</style>
</head>
<body background="Angel_Care.png"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="DUPLESIS.png" class="img"><br>
<div class="floatleft">
<p style="font-size:20px;font-family:monospace;"><b><center>DUPLESIS</center></p><br>
<table align="center">

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


mysqli_select_db($con, "pdetails");
$sql = "SELECT * FROM duplesis";

$result = $con->query($sql);
if ($result->num_rows > 0) 
{
	// output data of each row
	
	while($row = $result->fetch_assoc()) 
	{
		echo "<tr><th>";
		echo "Name ";
		echo "<td>" . $row["name"]. "</td>";
		echo "</th></tr>";
		
		
		echo "<tr><th>";
		echo "Teams ";
		echo "<td>" . $row["teams"]. "</td>";
		echo "</th></tr>";
		
		echo "Bat Style ";
		echo "<td>" . $row["batst"]. "</td>";
		echo "</th></tr>";
		echo "<tr><th>";
		echo "Bowl Style";
		echo "<td>" . $row["bowlst"]. "</td>";
		echo "</th></tr>";
	}
} 
else 
{ 
	echo "0 results"; 
}

$con->close();
?>
</table>
</div>
<div class="floatright">
<button><a href="home.php">open</a></button>
</div>
</body>
</html>