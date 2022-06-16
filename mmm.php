
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
html{
box-sizing:border-box;
}

*, *:before, *:after {
box-sizing: inherit;
}

.column{
float:left;
width"33.3%;
margin-bottom: 16px;
padding: 0 8px;
}

@media screen and (max-width:650px){
.coloum{
width: 100%;
display:block;
}}

.card{
box-shadow: 0 4px 8px 0 rgba(255,255,255,0.2);
}

.container{
padding: 0 16px;
color:white;
font-family: comic sans ms;

}

.container::after, .row::after{
content:"";
clear:both;
display:table;
}
.title{
color:white;
font-weight:bold;
}

.button{
border:none;
outline:0;
display:inline-block;
padding:8px;
color:white;
background-color: rgb(125,125,125);
text-align:center;
cursor:pointer;
width:100%;
text-transform: uppercase;
font-family: comic sans ms;
}

.button:hover{
background-color:#555;}

.dropbtn{
background-color:#3498db;
color:white;
padding:1px;
font-size:15px;
border:none;
cursor:pointer;
width:150px;}

.dropbtn:hover, .dropbtn:focus{
background-color:#2980b9;}

.dropdown{
position:relative;
display:inline-black;}

.dropdown-content{
display:none;
position:absolute;
background-color:#f1f1f1;
min-width:160px;
overflow:auto;
box-shadow:0px 8px 16px 0px rgba(255,255,255,0.2);
z-index:1;
font-family:timesnewroman;}

.dropdown a:hover{background-color:#ddd;}

.show{display:black;}

.floatright{
float:right;
background-color:black;
border:none;
cursor:pointer;
width:150px;}
body{
 background-size: cover;
 }
 body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 30%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}
.text{
opacity:;}
</style>
</head>
<body background="black.jpg">
<script src="pop_script.js"></script>
<h1 style="color:white; font-family: comic sans ms; "><center>MARQUEE PLAYERS LIST</center></h1>


<br>

<div class="row">
	<div class="column">
		<div class="card"><form method="post" action="exx.php">
			<img src="ABDE.png" alt="ABDEVILLIARS" style="width:100%">
			<div class="container">
			<h2> A B DE</h2>
			<p class="title">BATSMAN</p>
			<p>CREDITS:94</p>
			<form action="exx.php" method="POST">
		<input type="text" name="id" value="3"class="text"><br>
		<input type="submit" id="mybtn" name="search" value="Details" >
			</div>
		</div>
	</div>
<table align="center">

<?php
		$con = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($con,'pdetails');
		
		if(isset($_POST['search']))
		{
			$id = $_POST['id'];
			
			$query = "SELECT * FROM `list` WHERE `id`=$id";
			$query_run = mysqli_query($con,$query);
			
			while($row = mysqli_fetch_array($query_run))
			{
				?>
				<tr>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['teams'];?></td>
				<td><?php echo $row['batst'];?></td>
				<td><?php echo $row['bowlst'];?></td>
				</tr>
				<?php
			}
		}
		?>

</body>
</html>