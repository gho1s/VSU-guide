<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {
  box-sizing: border-box;
}
.map{
	position: absolute;
	bottom: -800px;
}
.parkingbutton{
	left: 740px;
	position: absolute;
	bottom: -700px;
}
.parkingmap{
	left: 740px;
	position: absolute;
	bottom: -800px;
}
/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
   width: 100

}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #ffd633;
  color: white;
}

 /* The side navigation menu */
.sidenav {
  height: 80%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  bottom: 0; /* Stay at the top */
  left: 0;
  background-color: #111; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s;
  padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
} 

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<body>
<div class="topnav">
  <a href="">Student</a>
  <a class = active href="">Faculty/Staff</a>
  <a href="GuideVistor.php">Vistor</a>
</div> 

<h1>Campus Guide</h1>

<div class="row">
  

<?php
session_start();



include "Mapbuttons.php";


Buildings_AtoG();

Buildings_HtoM();

Buildings_OtoW();
	
error_reporting(E_ALL ^ E_WARNING); 
$Building = $_POST['Building'];

$_SESSION['test'] = $Building;
if($Building == "Agrultrue"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d222.0707598796879!2d-77.41542014861119!3d37.23640450932973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1669738221213!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<div class = "map">
	<h1>Agrultrue enginerring shop</h1>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d536.4800242275039!2d-77.41520961565416!3d37.236147929889874!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a665d8404aaf%3A0xb55820619b1795a2!2sAgriculture%20Engineering%20Shop%2C%20Colonial%20Heights%2C%20VA%2023834!5e1!3m2!1sen!2sus!4v1668669434287!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	</div>
	<?php
} else if ($Building == "Alummi"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1275.89914564274!2d-77.4183412!3d37.2404357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66739a4086f%3A0xc4564b08126afac9!2sFaculty%2FStaff%20Parking%20-%20Lot%2032%2C%20Carter%20G%20Woodson%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1669741201517!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<div class = "map">
	<h1>Alummi Foundation</h1>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d159.48732321572407!2d-77.41733081511761!3d37.24046877714408!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6674023c135%3A0xeca1e340708e538e!2sAlumni%20Foundation%2C%20Carter%20G%20Woodson%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668669634305!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	</div>
	<?php
}
else if ($Building == "Appomaxtoox"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d890.3536881326412!2d-77.41713089819798!3d37.23505443141401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1669741842680!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<div class = "map">
	<h1>Appomaxtoox Overlook</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d353.959315589287!2d-77.41734950971082!3d37.23306500182025!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a711af5a0cbd%3A0xd87d89c276e4e635!2sVirginia%20State%20University!5e1!3m2!1sen!2sus!4v1668668700681!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<?php
}
else if ($Building == "Arthletic"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.7933096071947!2d-77.42408733128913!3d37.24058284635399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66046dcf96d%3A0xc9abb593ebaf94ca!2sLot%2029%20-%20Faculty%20%2F%20Staff%20Parking%2C%204th%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1669741990449!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<div class = "map">
	<h1>Arthletic Deparment</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d536.4543852616736!2d-77.42223886308034!3d37.23975054072081!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6604c49bde5%3A0x1859b40699ec7e0e!2sAthletics%2C%2020720%204th%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668670041430!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<?php
}
else if ($Building == "Arthletic Storage"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.7933096071947!2d-77.42408733128913!3d37.24058284635399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66046dcf96d%3A0xc9abb593ebaf94ca!2sLot%2029%20-%20Faculty%20%2F%20Staff%20Parking%2C%204th%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1669741990449!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<div class = "map">
	<h1>Arthletic Storage Building</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d159.48483924436803!2d-77.4207629697985!3d37.241642687530536!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1668670148208!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<?php
}
else if ($Building == "Basketball"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1353.3624717872929!2d-77.42219099387617!3d37.238656936550534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6613f9ae323%3A0xfcee5effc87c6092!2sLot%2024%20Faculty%20%2F%20Staff%20Parking%2C%20Boisseau%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1669742307806!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<div class = "map">
	<h1>Baseball courts</h1>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.8396482038825!2d-77.42253453538218!3d37.23921410056468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6611e806593%3A0x4323435a7e9eaf61!2sVSU%20Outdoor%20Basketball%20Courts%2C%204th%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668670397158!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	</div>
	<?php
}
else if ($Building == "Bookstore"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d793.6468617843292!2d-77.41827016919727!3d37.23756334107544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a666b24a12c1%3A0x916253a7d794868e!2sLot%2034%20-%20Faculty%20%2F%20Staff%2C%20College%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1669742388095!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<div class = "map">
	<h1>Bookstore</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1072.9495953411576!2d-77.4184620254209!3d37.23688235384374!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6624bc1411b%3A0x33a55de0f079b538!2sVirginia%20State%20University%20Bookstore!5e1!3m2!1sen!2sus!4v1668670624902!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<?php
}else if ($Building == "Branch"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Branch Hall</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1804.5276304380607!2d-77.42210904261815!3d37.2348480954955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a663b73c5d5f%3A0xddcd423c49bcc24a!2sBranch%20Residence%20Hall%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668670738387!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<?php
}
else if ($Building == "Carter"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Carter Hall</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d536.4548740245622!2d-77.417835728914!3d37.23968186591355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a7a255371ec7%3A0xa9550dc4fc7c334d!2sVSU%20M%20T%20Carter!5e1!3m2!1sen!2sus!4v1668670833289!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<?php
}
else if ($Building == "Colbert"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Colbert baseball field</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d451.09475771918886!2d-77.42055644380055!3d37.24105581170674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1668671343873!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<?php
}
else if ($Building == "Colson"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Colson Hall</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d159.49872110196674!2d-77.41840888722875!3d37.23508179678471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6647452ce57%3A0x8161a42f6e9f341e!2sColson%20Hall%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668671465967!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<?php
}else if ($Building == "Daniel"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Daniel Gymnasium</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.860392357543!2d-77.42408734786086!3d37.23860134746197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6610600962b%3A0x676282a94627c10e!2sDaniel%20Gymnasium!5e1!3m2!1sen!2sus!4v1668671511138!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<?php
}else if ($Building == "Davis"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Davis Hall</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.90837643464!2d-77.41918729947156!3d37.23718393232277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a666baa983d5%3A0xe916e2d38e5049af!2sDavis%20Hall%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668671731974!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<?php
}else if ($Building == "Enginerring"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Enginerring Technology Building </h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d758.6959277815857!2d-77.4191580493995!3d37.23628687963012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a663f93a29f9%3A0x1e150517fef363c!2sEngineering%20Building%2C%20Lee%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668671764276!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<?php
}else if ($Building == "Fauntleroy"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Fauntleroy Hall</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d758.6844686118322!2d-77.41610047416579!3d37.23742546579561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6666196c49f%3A0x36a00b84387c109!2sFauntleroy%20Hall!5e1!3m2!1sen!2sus!4v1668671819812!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<?php
}else if ($Building == "Foster"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Foster Hall</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d318.9855664293113!2d-77.4194765684276!3d37.23788830225016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66146383363%3A0xd83c02f4af385971!2sFoster%20Hall%2C%20College%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668671869463!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<?php
}else if ($Building == "Gandy"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Gandy Hall</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1002.83083495693!2d-77.42009233304297!3d37.23709371197081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a7175d2212db%3A0x5b7c108a39a4dd80!2sVSU%20Gandy%20Hall!5e1!3m2!1sen!2sus!4v1668671915722!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<?php
}else if ($Building == "Gateway Dining"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Gateway Dining Hall</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1275.8666999406507!2d-77.41913292805623!3d37.242352391326556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a65dfb689773%3A0xf0308847f251da2f!2sGateway%20Dining%2C%20Colonial%20Heights%2C%20VA%2023834!5e1!3m2!1sen!2sus!4v1668672001929!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<?php
}else if ($Building == "Gateway II"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Gateway Hall II</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1275.8666999406507!2d-77.41913292805623!3d37.242352391326556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a65d898ab0d9%3A0x89a4b03898391934!2sGateway%20Hall!5e1!3m2!1sen!2sus!4v1668672228003!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<?php
}else if ($Building == "Graduate"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Graduate & Transfer Admissions Building</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d729.0105554736974!2d-77.4235130803989!3d37.240580446819436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66039116a49%3A0x644d3444009464bf!2sAdmissions%20Office%2C%2020708%204th%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668672451807!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<?php
}else if ($Building == "Guest"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Guest House</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d758.7132982585429!2d-77.4210084947243!3d37.234560887634686!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a663a7510b87%3A0x236cf79027cce4df!2sGuest%20House%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668673215115!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	</div>
	<?php
}























else if ($Building == "Heating"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Heating Plant</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.9934282045742!2d-77.4194692853823!3d37.23467145082284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66469ba8911%3A0x5f3a15d977ccdf1b!2sHeating%20Plant%2C%20College%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668675652957!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Honors"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Guest House</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d440.3228908612713!2d-77.42105580650764!3d37.23419566846939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a78af5d213a1%3A0x86726dcafde1249!2sHonors%20House!5e1!3m2!1sen!2sus!4v1668675748739!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "hunter"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Hunter-McDaniel Building</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1245.3394470432231!2d-77.42115073861258!3d37.23914475395138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66732ab6bff%3A0xf9211c32725a95ba!2sHunter-McDaniel%2C%20Carter%20G%20Woodson%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668675841580!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Institunional"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Institunional Effectiveness</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d902.2482474021514!2d-77.42017430632201!3d37.23614885349501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a663e9dcb743%3A0xc3d25af779d8c75!2sInstitutional%20Planning%2C%20Lee%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668676029205!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Jackson"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Jackson Place Cottage</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d225.55997306903936!2d-77.41763297251067!3d37.236846944154244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a7bed7871f1b%3A0x4355c5fb81c186f2!2sJackson%20Place%201!5e1!3m2!1sen!2sus!4v1668676154741!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Jesse"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Jesse B. Bolling Hall</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d758.6687061504396!2d-77.41750969635471!3d37.23899157953302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6671c651d6d%3A0x931a756bb0e0e7fa!2sJesse%20B.%20Boiling%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668676345114!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Johnnella"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Johnnella Jackson Hall</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d536.4878540712062!2d-77.42008328494363!3d37.235047674790735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a663be2e77dd%3A0xb3ea8fd4f44173d5!2sTrinkle%20Hall%2C%20Lee%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668676639993!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Johnston"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Johnston Memorial Library</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.4103566990461!2d-77.42093081552358!3d37.23693772896051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6624bc1411b%3A0x57fe755ed801495!2sJohnston%20Memorial%20Library!5e1!3m2!1sen!2sus!4v1668676714601!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Jones"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Jones Dining Hall</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.4264519104904!2d-77.42031568860173!3d37.235693811779655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a663f68de16d%3A0x6cd57972ccccdb81!2sJones%20Dining%20Hall!5e1!3m2!1sen!2sus!4v1668676769441!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Douglas"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>L. Douglas Wilder Building</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.781930651421!2d-77.42034358538211!3d37.24091895046774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6674eeb3ee7%3A0x9e740c8b3d8f25b2!2sL.%20Douglas%20Wilder%20Building%2C%20Carter%20G%20Woodson%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668677344409!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Langston"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Langston Hall</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d758.6998817512514!2d-77.41862416395655!3d37.23589400524053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a664142a797f%3A0x2449a9ea5d4ee0f3!2sLangston%20Residence%20Hall%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668677442700!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Linday-Montague"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Linday-Montague Building</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.993756556536!2d-77.42186798538228!3d37.2346617508234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66399f30e4d%3A0x4b4e457da2d0e506!2sLindsay-Montague%20Building%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668677521919!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Lockett hall"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Lockett Hall</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.953363806904!2d-77.41969188111418!3d37.235854995786376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a665d38f9bc9%3A0x9a784904af5a40f!2sLockett%20Hall%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668677769117!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Lucretia"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Lucretia Campbell Hall</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d536.4847374795686!2d-77.41989713500779!3d37.235485623752254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66394b8f393%3A0xfb7e4db4ba55adb1!2sEggleston%20Hall%2C%20Lee%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668677873792!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Lula"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Lula Johnson Hall</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1001.1175106725863!2d-77.41912562309255!3d37.23536763772742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66472846ba5%3A0xb705a30b76165988!2sVawter%20Hall%2C%20College%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668678166727!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Memorial Hall"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Memorial Hall- Student Health Services</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1072.9672170914364!2d-77.42159586504229!3d37.23564426244416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a663c5f7f561%3A0x62bd7d162592c90f!2sMemorial%20Hall%20-%20Student%20Health%20Services%2C%20Lee%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668678640038!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Moore"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Moore Hall</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.699134511147!2d-77.42031478538202!3d37.2433644503287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a65de75a2299%3A0x1294b8c263f7e5b5!2sMoore%20Hall!5e1!3m2!1sen!2sus!4v1668678779664!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Multipurpose"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Multipurpose Center</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.819469238446!2d-77.42713208538215!3d37.23981015053081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a68a5eed34ed%3A0x79e146f68bcabfd1!2sVSU%20Multipurpose%20Center!5e1!3m2!1sen!2sus!4v1668678853667!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}















else if ($Building == "Otelia"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Otelia Howard Hall</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d637.995740707927!2d-77.42104276828184!3d37.23498061218367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a663bb8f68f3%3A0xdee518df32bf3153!2sByrd%20Residence%20Hall%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668679875165!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Owen"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Owen Hall</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.8807788545487!2d-77.41998488538218!3d37.23799915063369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a666c66c4d29%3A0x41a7b43208645b3c!2sOwens%20Hall%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668679786412!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Physical"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Physical Plant Administration</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1275.9642282497473!2d-77.41571189948598!3d37.23659076795101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6667ba24563%3A0x426e098e4075eb81!2sPhysical%20Plant%20Administration%2C%20Colonial%20Heights%2C%20VA%2023834!5e1!3m2!1sen!2sus!4v1668680087524!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Police"){
	?>
	
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Police and Public Safety</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d902.227963711659!2d-77.41695961106879!3d37.23784358471126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a666f052c981%3A0x34c47aabec9c4684!2sVSU%20Police%20and%20Public%20Safety!5e1!3m2!1sen!2sus!4v1668680197134!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Post"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Post Office</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d318.9961785279048!2d-77.41937726281562!3d37.23538043968741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1668680274373!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "President"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>President's Residence</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d638.0009846875057!2d-77.42014443578428!3d37.23436095279318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6637440b625%3A0x8c1f1521598713ec!2sPresident&#39;s%20House%2C%20Chesterfield%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668680348680!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Qaud I"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Qaud I Hall</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1072.9537747317954!2d-77.4213214205446!3d37.23658871607162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a663d3b7fa47%3A0x40fbff393a49461c!2sQuad%20Residence%20Hall%2C%20Lee%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668680604847!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Qaud II"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Qaud II Hall</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1072.9537747317954!2d-77.4213214205446!3d37.23658871607162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66183d1eb4f%3A0xc005e71753dd32f4!2sQuad%20II!5e1!3m2!1sen!2sus!4v1668680679265!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Rogers"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Rogers Stadium`
	</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2806.9878557989387!2d-77.41894750619775!3d37.239992671427835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6606461ede5%3A0xdc2166a9226650c!2sRogers%20Stadium!5e1!3m2!1sen!2sus!4v1668680847262!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Resorce"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Resorce & Development Center</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d189.66444326005086!2d-77.42272045034346!3d37.24007782947306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6604c9d90c1%3A0x60f4719ac747af28!2sSchool%20of%20Graduate%20Studies%20and%20Continuing%20Education!5e1!3m2!1sen!2sus!4v1668704067960!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Seward"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Seward Hall</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d553.4793760087372!2d-77.41830704962534!3d37.23588198082373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6641960c3c1%3A0x5bfbf4ca5c7d2349!2sSeward%20Residence%20Hall%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668704346372!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Singleton"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Singleton Hall</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.869806956495!2d-77.4207022853823!3d37.238323250615274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a666cc9cd60d%3A0x9358df322580febe!2sSingleton%20Hall%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668704553713!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Softball"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Softball Field </h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d268.21498743737095!2d-77.42050602285207!3d37.243180243205494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1668704597261!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Summmerseat"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Summmerseat Building</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d382.9659667079109!2d-77.42708827530406!3d37.23919158962536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a68bb311d835%3A0x9c837067dc96b0ef!2s20829%20Chesterfield%20Ave%2C%20South%20Chesterfield%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668705561849!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Tennis"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Tennis Courts</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1288.1378773870074!2d-77.4218399371981!3d37.23924758328103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1668705776278!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "University"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>University College</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d637.9666501213414!2d-77.41690867081574!3d37.2384179664276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a666fae08fff%3A0x81c6325fd1762931!2sAcademic%20Success%20Center%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668706078543!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "UTS"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>UTS Building</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d536.4821206390441!2d-77.41994867289729!3d37.23585334340295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a663c15cd8ab%3A0x58d5490f66ecd677!2sUTS%20Building%2C%20Lee%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668706185092!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Virginia"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Virginia Hall</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.9913159180373!2d-77.42119988538236!3d37.23473385081935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6638f4d363f%3A0xbae6346f605f8bc0!2sVirginia%20Hall!5e1!3m2!1sen!2sus!4v1668706320993!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Hoptiality"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Hoptiality Management Building</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d730.2782323255819!2d-77.42319621523458!3d37.24023633278079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66037f74e67%3A0x12dc69aa25bc79d8!2sHospitality%20Management%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668706538546!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Credit"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>VSU Credit Union</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1275.9653728651367!2d-77.42384740255459!3d37.23652314364557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6623cc6b285%3A0x8dd93cce0cb02ac4!2sVirginia%20State%20University%20FCU!5e1!3m2!1sen!2sus!4v1668706733759!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Water"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Water Tower</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d268.23436298988616!2d-77.41548477181244!3d37.23773551854685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1668706885652!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}else if ($Building == "Whiting"){
	?>
	<div class = "parkingmap">
	<h1>Closest Faculty/Staff Parking</h1>
	
	</div>
	<div class = "map">
	<h1>Whiting Hall Williams</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.962803138709!2d-77.42348198538231!3d37.23557615077146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a663ca42cfb7%3A0x1cfd99b7986fe5e!2sWhiting%20Residence%20Hall%2C%20Lee%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668707346645!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}
	else{
}

?>

</div>
</body>
</html>
