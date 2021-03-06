
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
</style>
</head>
<body background="black.jpg">
<script src="pop_script.js"></script>
<h1 style="color:white; font-family: comic sans ms; "><center>MARQUEE PLAYERS LIST</center></h1>


<br>

<div class="row">
	<div class="column">
		<div class="card">
			<img src="ABDE.png" alt="ABDEVILLIARS" style="width:100%">
			<div class="container">
			<h2> A B DE</h2>
			<p class="title">BATSMAN</p>
			<p>Player ID :3</p>
			<p>CREDITS:94</p>
			<p><button class="button" id="myBtn1">Details</button></p>
			</div>
		</div>
	</div>
	
	<div class="column">
		<div class="card">
			<img src="BOULT.png" alt="BOULT" style="width:100%">
			<div class="container">
			<h2>BOULT</h2>
			<p class="title">BOWLER</p>
			<p>Player ID : </p>
			<p>CREDITS:91</p>
			<p><button class="button" id="myBtn1">Details</button></p>
			</div>
		</div>
	</div>
	
	<div class="column">
		<div class="card">
			<img src="KOHLI.png" alt="KOHLI" style="width:100%">
			<div class="container">
			<h2>KOHLI</h2>
			<p class="title">BATSMAN</p>
			<p>Player ID : 2</p>
			<p>CREDITS:96</p>
			<p><button class="button" id="myBtn2">Details</button></p>
			</div>
		</div>
	</div>
	
	<div class="column">
		<div class="card">
			<img src="MSD.png" alt="MSD" style="width:100%">
			<div class="container">
			<h2> MSDHONI</h2>
			<p class="title">WICKETKEEPER</p>
			<p>Player ID : 1</p>
			<p>CREDITS:90</p>
			<p><button class="button" id="myBtn3">Details</button></p>
			</div>
		</div>
	</div>
	
	<div class="column">
		<div class="card">
			<img src="RUSSELL.png" alt="RUSSELL" style="width:100%">
			<div class="container">
			<h2>RUSSELL</h2>
			<p class="title">ALL-ROUNDER</p>
			<p>Player ID : </p>
			<p>CREDITS:92</p>
			<p><button class="button" id="myBtn4">Details</button></p>
			</div>
		</div>
	</div>
	<div class="column">
		<div class="card">
			<img src="BUMRAH.png" alt="BUMRAH" style="width:100%">
			<div class="container">
			<h2>J.BUMRAH</h2>
			<p class="title">BOWLER</p>
			<p>Player ID : </p>
			<p>CREDITS:92</p>
			<p><button class="button" id="myBtn5">Details</button></p>
			</div>
		</div>
	</div>
	<div class="column">
		<div class="card">
			<img src="WARNER.png" alt="WARNER" style="width:100%">
			<div class="container">
			<h2>D.WARNER</h2>
			<p class="title">BATSMAN</p>
			<p>Player ID : </p>
			<p>CREDITS:91</p>
			<p><button class="button" id="myBtn6">Details</button></p>
			</div>
		</div>
	</div>
	<div class="column">
		<div class="card">
			<img src="RASHID.png" alt="RASHID" style="width:100%">
			<div class="container">
			<h2>RASHID K.</h2>
			<p class="title">BOWLER</p>
			<p>Player ID : </p>
			<p>CREDITS:91</p>
			<p><button class="button" id="myBtn7">Details</button></p>
			</div>
		</div>
	</div>
	<div class="column">
		<div class="card">
			<img src="SMITH.png" alt="SMITH" style="width:100%">
			<div class="container">
			<h2>S.SMITH</h2>
			<p class="title">BATSMAN</p>
			<p>Player ID : </p>
			<p>CREDITS:90</p>
			<p><button class="button" id="myBtn8">Details</button></p>
			</div>
		</div>
	</div>
	<div class="column">
		<div class="card">
			<img src="ROHIT.png" alt="RS" style="width:100%">
			<div class="container">
			<h2>ROHIT S.</h2>
			<p class="title">BATSMAN</p>
			<p>Player ID : </p>
			<p>CREDITS:90</p>
			<p><button class="button" id="myBtn9">Details</button></p>
			</div>
		</div>
	</div>
	<div class="column">
		<div class="card">
			<img src="BUTTLER.png" alt="JOS" style="width:100%">
			<div class="container">
			<h2>J.BUTTLER</h2>
			<p class="title">WICKET-KEEPER</p>
			<p>Player ID : </p>
			<p>CREDITS:93</p>
			<p><button class="button" id="myBtn10">Details</button></p>
			</div>
		</div>
	</div>
	<div class="column">
		<div class="card">
			<img src="PANDYA.png" alt="PANDYA" style="width:100%">
			<div class="container">
			<h2>H.PANDYA</h2>
			<p class="title">ALL-ROUNDER</p>
			<p>Player ID : </p>
			<p>CREDITS:91</p>
			<p><button class="button" id="myBtn11">Details</button></p>
			</div>
		</div>
	</div>
	

</div>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <form action="" method="POST">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id" placeholder="Enter the Id">
		<input type="submit" name="search" value="OK" >
	</form>
    </div>
    <div class="modal-body">
<table align="center">

<?php
		$con = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($con,'pdetails');
		
		if(isset($_POST['search']))
		{
			$id = $_POST['id'];
			
			$query = "SELECT * FROM `duplesis` WHERE `id`=$id";
			$query_run = mysqli_query($con,$query);
			
			while($row = mysqli_fetch_array($query_run))
			{
		echo "<tr><th>";
		echo "Name ";
		echo "<td>" . $row["name"]. "</td>";
		echo "</th></tr>";
		echo "<tr><th>";
		echo "Teams ";
		echo "<td>" . $row["teams"]. "</td>";
		echo "</th></tr>";
		echo "<tr><th>";
		echo "Bat Style ";
		echo "<td>" . $row["batst"]. "</td>";
		echo "</th></tr>";
		echo "<tr><th>";
		echo "Bowl Style ";
		echo "<td>" . $row["bowlst"]. "</td>";
		echo "</th></tr>";
		echo "<tr><th>";
		echo "Base Price ";
		echo "<td>" . $row["baseprice"]. "</td>";
		echo "</th></tr>";
		echo "<tr><th>";
		echo "Matches ";
		echo "<td>" . $row["matches"]. "</td>";
		echo "</th></tr>";
		echo "<tr><th>";
		echo "Runs";
		echo "<td>" . $row["runs"]. "</td>";
		echo "</th></tr>";
		echo "<tr><th>";
		echo "Strike Rate";
		echo "<td>" . $row["strikerate"]. "</td>";
		echo "</th></tr>";echo "<tr><th>";
		echo "Wickets";
		echo "<td>" . $row["wickets"]. "</td>";
		echo "</th></tr>";echo "<tr><th>";
		echo "Economy";
		echo "<td>" . $row["economy"]. "</td>";
		echo "</th></tr>";
		echo "<tr><th>";
		echo "Sold Price";
		echo "<td>" . $row["soldprice"]. "</td>";
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
    <div class="modal-footer">
      <h3></h3>
    </div>
  </div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn1 = document.getElementById("myBtn1");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");
var btn4 = document.getElementById("myBtn4");
var btn5 = document.getElementById("myBtn5");
var btn6 = document.getElementById("myBtn6");
var btn7 = document.getElementById("myBtn7");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}
btn1.onclick = function() {
  modal.style.display = "block";
}

btn2.onclick = function() {
  modal.style.display = "block";
}
btn3.onclick = function() {
  modal.style.display = "block";
}
btn4.onclick = function() {
  modal.style.display = "block";
}
btn5.onclick = function() {
  modal.style.display = "block";
}
btn5.onclick = function() {
  modal.style.display = "block";
}
btn6.onclick = function() {
  modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>