<!DOCTYPE html>
<html lang="en">
<title>Northwind</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-container">
    <button> <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a> </button>
    <button> <a href="or_s2crtdb.php" class="w3-bar-item w3-button w3-padding-large w3-white">Crtdb</a> </button>
    <button> <a href="or_s3select.php" class="w3-bar-item w3-button w3-padding-large w3-white">Select</a> </button>
    <button> <a href="or_s4insert.php" class="w3-bar-item w3-button w3-padding-large w3-white">Insert</a> </button>
    <button> <a href="or_s5delete.php" class="w3-bar-item w3-button w3-padding-large w3-white">Delete</a> </button>
    <button> <a href="or_s6update.php" class="w3-bar-item w3-button w3-padding-large w3-white">Update</a> </button>
    <button> <a href="or_s7drop.php" class="w3-bar-item w3-button w3-padding-large w3-white">Drop</a> </button>
</div>


  
  

<!-- Header -->
<header class="w3-container w3-gray w3-center" style="padding:350px 16px">
<?php
if(file_exists("or_s1connect.php"))
  require("or_s1connect.php");
else
  die("File not found");


if ($dbstatus == 0) dbWork("create database $db");
qWork("create table $tb (OrderID char(4),CustomerID char(40),EmployeeID char(40),OrderDate char(40),RequiredDate char(40),ShippedDate char(40),ShippedVia char(40),Freight char(40),ShipName char(40),ShipAddress char(40),ShipCity char(40),ShipRegion char(40),ShipPostalCode char(40),ShipCountry char(40))");
//qWork("insert into $tb values('1001','Tom')");
//qWork("insert into $tb values('1002','Dang')");
//qWork("insert into $tb values('1003','Pom')");
if((int)phpversion() >= 7) $connect->close(); else mysql_close($connect);
echo '<a href="index.php">back</a>';

function dbWork($sql) {
	global $db,$host,$uname,$upass,$connect;	
	if((int)phpversion() >= 7) {
		if ($connect->query($sql) === FALSE) 
			echo "$sql : failed ". $conn->error . "<br/>";
		else {
			echo "$sql : succeeded<br/>";
			$connect = new mysqli($host, $uname, $upass, $db);
		}
	} else { 
		if (!$result=mysql_query($sql,$connect))
			echo "$sql : failed<br/>"; 
		else 
			echo "$sql : succeeded<br/>";  
	}
}	
function qWork($sql) {
	global $connect,$db;
	if((int)phpversion() >= 7) {
		if ($connect->query($sql) === FALSE) 
			echo "$sql : failed ". $conn->error . "<br/>";
		else 
			echo "$sql : succeeded<br/>";
	} else {   
		if (!$result=mysql_db_query($db,$sql))
			echo "$sql : failed<br/>"; 
		else 
			echo "$sql : succeeded<br/>";  
	}
}
?>
</header>



<!-- Footer -->
<footer class="w3-container w3-padding-5 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
  <a href="https://www.facebook.com/orfile.php?id=100004114149387" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
  <a href="https://www.instagram.com/nuengwarayut/" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
  <a href="https://www.youtube.com/channel/UCFYt2ritCwm38J1HLGNSfRg?view_as=subscriber" target="_blank"> <i class="fa fa-youtube w3-hover-opacity"></i></a>
  <a href="https://twitter.com/Warayut25179889?s=09&fbclid=IwAR0MRCtW7dmm8Kw7kk7IuwUIVw6hheYZGDDHSxlk51yY_dRNm5rRsS8VuvQ" target="_blank"> <i class="fa fa-twitter w3-hover-opacity"></i></a>
 </div>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
