<html>
<head>
<style>
table {border-collapse: collapse;
width: 40%;
height: 70%;
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

.floatleft{
float:left;
width:20%}

.floatright{
float:center;}

.text{
opacity:0;
}
.h1{background-color:#f2f2f2;
color:Black; 
font-family: comic sans ms; 
}
input[type=submit]{
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  font-family: comic sans ms;
  font-size:25px;
}
</style><center>
<h1 class="h1" >PLAYER DETAILS</h1></center>
</head>
<body bgcolor="dadu">
<center>
	<table>
		<tr>
		</tr>
		<?php
		$con = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($con,'pdetails');
		
		if(isset($_POST['search']))
		{
			$id = $_POST['id'];
			
			$query = "SELECT * FROM `players` WHERE `id`=$id";
			$query_run = mysqli_query($con,$query);
			
			while($row = mysqli_fetch_array($query_run))
			{
				?>
				<tr><th>Name: <td><?php echo $row['name'];?></td></th></tr>
				<tr><th>Role: <td><?php echo $row['role'];?></td></th></tr>
				<tr><th>Batsman Style: <td><?php echo $row['batst'];?></td></th></tr>
				<tr><th>Bowler Style: <td><?php echo $row['bowlst'];?></td></th></tr>
				<tr><th>Base Price: <td><?php echo $row['baseprice'];?></td></th></tr>
				<tr><th>Matches: <td><?php echo $row['matches'];?></td></th></tr>
				<tr><th>Runs <td><?php echo $row['runs'];?></td></th></tr>
				<tr><th>Strike Rate: <td><?php echo $row['strikerate'];?></td></th></tr>
				<tr><th>Wickets: <td><?php echo $row['wickets'];?></td></th></tr>
				<tr><th>Economy: <td><?php echo $row['economy'];?></td></th></tr>
				</tr>
				<?php
			}
		}
		?>
	</table>
	<a href="sold.html"><input type="submit" value="SOLD"></a>
</center>
</body>
</html>