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
    <button> <a href="emp_s2crtdb.php" class="w3-bar-item w3-button w3-padding-large w3-white">Crtdb</a> </button>
    <button> <a href="emp_s3select.php" class="w3-bar-item w3-button w3-padding-large w3-white">Select</a> </button>
    <button> <a href="emp_s4insert.php" class="w3-bar-item w3-button w3-padding-large w3-white">Insert</a> </button>
    <button> <a href="emp_s5delete.php" class="w3-bar-item w3-button w3-padding-large w3-white">Delete</a> </button>
    <button> <a href="emp_s6update.php" class="w3-bar-item w3-button w3-padding-large w3-white">Update</a> </button>
    <button> <a href="emp_s7drop.php" class="w3-bar-item w3-button w3-padding-large w3-white">Drop</a> </button>
</div>


  
  

<!-- Header -->
<header class="w3-container w3-gray w3-center" style="padding:350px 16px">

<form action="emp_s6update.php">
<input name="empid" value="">
<input name="last" value="">
<input name="first" value="">
<input name="tit" value="">
<input name="title" value="">
<input name="bi" value="">
<input name="hi" value="">
<input name="ad" value="">
<input name="cci" value="">
<input name="regi" value="">
<input name="pos" value="">
<input name="cou" value="">
<input name="home" value="">
<input name="ext" value="">
<input name="pho" value="">
<input name="not" value="">
<input name="repo" value="">
<input type="submit" value="emp_s6update.php">
</form>

<?php
if (!isset($_GET['empid'])) { exit; }
require("emp_s1connect.php");
$sql.="update empducts set ";
$sql.="emperID =". $_GET['empid'] .", ";
$sql.="ProductID ='". $_GET['last'] ."', ";
$sql.="UnitPrice ='". $_GET['first'] ."' ";
$sql.="Quantity ='". $_GET['tit'] ."' ";
$sql.="Discount ='". $_GET['bi'] ."' ";
$sql.="Discount ='". $_GET['hi'] ."' ";
$sql.="Discount ='". $_GET['ad'] ."' ";
$sql.="Discount ='". $_GET['cci'] ."' ";
$sql.="Discount ='". $_GET['regi'] ."' ";
$sql.="Discount ='". $_GET['pos'] ."' ";
$sql.="Discount ='". $_GET['cou'] ."' ";
$sql.="Discount ='". $_GET['home'] ."' ";
$sql.="Discount ='". $_GET['ext'] ."' ";
$sql.="Discount ='". $_GET['pho'] ."' ";
$sql.="Discount ='". $_GET['not'] ."' ";
$sql.="Discount ='". $_GET['repo'] ."' ";
$sql.="where EmployeeID =". $_GET['empid'] ." ";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=emp_s6update.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : True";
	else 
		echo "<meta http-equiv='refresh' content='0; url=emp_s6update.php'/>";
	mysql_close($connect);
}
echo "<center><a href=emp_s3select.php>back</a>";
?>
</header>



<!-- Footer -->
<footer class="w3-container w3-padding-5 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
  <a href="https://www.facebook.com/empfile.php?id=100004114149387" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
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


