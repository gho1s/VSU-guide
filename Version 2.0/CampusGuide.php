<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
h1 { color: #111; font-family: 'Helvetica Neue', sans-serif; font-size: 80px; font-weight: bold; letter-spacing: -1px; line-height: 1; text-align: center; }
body{
    background:#fd8105;
    font-size: 14px;
    font-family: 'Lato', sans-serif;
    font-family: 'Poppins', sans-serif;



}
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
  background-color: #fd8105;
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
  background-color: #0a0ef3;
  color: white;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
} 



</style>
<body>
<div class="topnav">
  <a class = active href="">Student</a>
  <a href="StaffGuide.php">Faculty/Staff</a>
  <a href="GuideVistor.php">Vistor</a>
</div> 

<h1>Campus Guide</h1>

<div class="row">
  
<?php

$Student_Parking_title = "Closest Student Parking";


include "Mapbuttons.php";


Buildings_AtoG();

Buildings_HtoM();

Buildings_OtoW();
	
error_reporting(E_ALL ^ E_WARNING); 
$Building = $_POST['Building'];
session_start();
$_SESSION['Guide'] = $Building;
$VSU_locations = array(

    'Agriculture engineering shop' => array(
        'title' => 'Agriculture engineering shop',
        'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d511.9615025168322!2d-77.41605018397658!3d37.23557364022983!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a665d21016c9%3A0x605aa1d17f601087!2sParking%20lot%2C%20Vaughan-Williams%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1669694065375!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d536.4800242275039!2d-77.41520961565416!3d37.236147929889874!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a665d8404aaf%3A0xb55820619b1795a2!2sAgriculture%20Engineering%20Shop%2C%20Colonial%20Heights%2C%20VA%2023834!5e1!3m2!1sen!2sus!4v1668669434287!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		),
    'Alumni Foundation' => array(
        'title' => 'Alumni Foundation',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1275.9022541751751!2d-77.4181427165329!3d37.24025206270958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6670563ae8f%3A0x9c2135efd123b64b!2sParking%20lot%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1669741306637!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d159.48732321572407!2d-77.41733081511761!3d37.24046877714408!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6674023c135%3A0xeca1e340708e538e!2sAlumni%20Foundation%2C%20Carter%20G%20Woodson%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668669634305!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		),
	'Appomaxtoox Overlook' => array(
		'title' => 'Appomaxtoox Overlook',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d545.8740663495777!2d-77.41744097841652!3d37.23385662580246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1669741791162!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d353.959315589287!2d-77.41734950971082!3d37.23306500182025!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a711af5a0cbd%3A0xd87d89c276e4e635!2sVirginia%20State%20University!5e1!3m2!1sen!2sus!4v1668668700681!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Athletic Deparment' => array(
		'title' => 'Athletic Deparment',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1112.667487591946!2d-77.42027829417809!3d37.24000654885598!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a660e8ea9c49%3A0x8248487731d5ba65!2sStudent%20Parking%20-%20Lot%2027%2C%20College%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1669741929471!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
		'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d536.4543852616736!2d-77.42223886308034!3d37.23975054072081!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6604c49bde5%3A0x1859b40699ec7e0e!2sAthletics%2C%2020720%204th%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668670041430!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
	),
	'Athletic Storage' => array(
		'title' => 'Athletic Storage',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1112.667487591946!2d-77.42027829417809!3d37.24000654885598!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a660e8ea9c49%3A0x8248487731d5ba65!2sStudent%20Parking%20-%20Lot%2027%2C%20College%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1669741929471!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
		'map' => 'https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d159.48483924436803!2d-77.4207629697985!3d37.241642687530536!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1668670148208!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
	),
	'Basketball Courts' => array(
		'title' => 'Basketball courts',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1112.667487591946!2d-77.42027829417809!3d37.24000654885598!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a660e8ea9c49%3A0x8248487731d5ba65!2sStudent%20Parking%20-%20Lot%2027%2C%20College%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1669741929471!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.8396482038825!2d-77.42253453538218!3d37.23921410056468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6611e806593%3A0x4323435a7e9eaf61!2sVSU%20Outdoor%20Basketball%20Courts%2C%204th%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668670397158!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
	),
	'Bookstore' => array(
		'title' => 'Bookstore',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d793.6468617843292!2d-77.41827016919727!3d37.23756334107544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a666c09233ef%3A0x7cddbae6865fc9cf!2sLot%2010%20-%20Student%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1669742422448!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1072.9495953411576!2d-77.4184620254209!3d37.23688235384374!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6624bc1411b%3A0x33a55de0f079b538!2sVirginia%20State%20University%20Bookstore!5e1!3m2!1sen!2sus!4v1668670624902!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
		),
	'Branch Hall' => array(
		'title' => 'Branch Hall',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d937.0501454773107!2d-77.42221257940125!3d37.235189529275175!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6624d4686af%3A0x8ea22961183d1cea!2sParking%20lot%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023806!5e1!3m2!1sen!2sus!4v1681787260676!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1804.5276304380607!2d-77.42210904261815!3d37.2348480954955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a663b73c5d5f%3A0xddcd423c49bcc24a!2sBranch%20Residence%20Hall%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668670738387!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Carter Hall' => array(
		'title' => 'Carter Hall',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d820.4309077326856!2d-77.41731118320439!3d37.23927693045619!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6670563ae8f%3A0x9c2135efd123b64b!2sParking%20lot%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1681787541788!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d536.4548740245622!2d-77.417835728914!3d37.23968186591355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a7a255371ec7%3A0xa9550dc4fc7c334d!2sVSU%20M%20T%20Carter!5e1!3m2!1sen!2sus!4v1668670833289!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Colbert Baseball Field' => array(
		'title' => 'Colbert Baseball Field',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1742.9081942554628!2d-77.42011861794627!3d37.241359061738464!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a660e8ea9c49%3A0x8248487731d5ba65!2sStudent%20Parking%20-%20Lot%2027%2C%20College%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1681788008051!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d451.09475771918886!2d-77.42055644380055!3d37.24105581170674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1668671343873!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Colson Hall' => array(
		'title' => 'Colson Hall',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3163.5604156040554!2d-77.4233533823872!3d37.23862264789392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66161091281%3A0x451db5f8527f0164!2sLot%2023%20Students%2C%20Third%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1681788981025!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d159.49872110196674!2d-77.41840888722875!3d37.23508179678471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6647452ce57%3A0x8161a42f6e9f341e!2sColson%20Hall%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668671465967!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Daniel Gymnasium' => array(
		'title' => 'Daniel Gymnasium',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1325.5026446998477!2d-77.42169325339933!3d37.239127542579205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a660e8ea9c49%3A0x8248487731d5ba65!2sStudent%20Parking%20-%20Lot%2027%2C%20College%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1681789975529!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.860392357543!2d-77.42408734786086!3d37.23860134746197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6610600962b%3A0x676282a94627c10e!2sDaniel%20Gymnasium!5e1!3m2!1sen!2sus!4v1668671511138!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Davis Hall' => array(
		'title' => 'Davis Hall',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d704.0010155248734!2d-77.41791452039979!3d37.237743109511996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a666c09233ef%3A0x7cddbae6865fc9cf!2sLot%2010%20-%20Student%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1681790780766!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.90837643464!2d-77.41918729947156!3d37.23718393232277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a666baa983d5%3A0xe916e2d38e5049af!2sDavis%20Hall%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668671731974!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Engineering Technology Building' => array(
		'title' => 'Engineering Technology Building',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1542.1312612269228!2d-77.41940064647399!3d37.236365364377626!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66161091281%3A0x451db5f8527f0164!2sLot%2023%20Students%2C%20Third%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1681826403951!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d758.6959277815857!2d-77.4191580493995!3d37.23628687963012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a663f93a29f9%3A0x1e150517fef363c!2sEngineering%20Building%2C%20Lee%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668671764276!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Fauntleroy Hall' => array(
		'title' => 'Fauntleroy Hall',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d576.6406649539009!2d-77.4162291512794!3d37.23712396428499!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6666196c49f%3A0x36a00b84387c109!2sFauntleroy%20Hall!5e1!3m2!1sen!2sus!4v1681831047594!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d758.6844686118322!2d-77.41610047416579!3d37.23742546579561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6666196c49f%3A0x36a00b84387c109!2sFauntleroy%20Hall!5e1!3m2!1sen!2sus!4v1668671819812!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Foster Hall' => array(
		'title' => 'Foster Hall',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1217.9755650491693!2d-77.42000422936717!3d37.23761660040154!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a661655c96e9%3A0xa438c53421beebeb!2sLot%2025%20Student%20Parking%2C%20Boisseau%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1681831563668!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d318.9855664293113!2d-77.4194765684276!3d37.23788830225016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66146383363%3A0xd83c02f4af385971!2sFoster%20Hall%2C%20College%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668671869463!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Gandy Hall' => array(
		'title' => 'Gandy Hall',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1228.2286619399092!2d-77.42033072452996!3d37.237048534836354!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66161091281%3A0x451db5f8527f0164!2sLot%2023%20Students%2C%20Third%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1681831934485!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade', 
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1002.83083495693!2d-77.42009233304297!3d37.23709371197081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a7175d2212db%3A0x5b7c108a39a4dd80!2sVSU%20Gandy%20Hall!5e1!3m2!1sen!2sus!4v1668671915722!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Gateway Dining Hall' => array(
		'title' => 'Gateway Dining Hall',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d910.0210930632012!2d-77.4179397445256!3d37.24265040475336!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a65e1d18c143%3A0x28eabdd79a70bab4!2sStudent%20Parking%20-%20Lot%2028%2C%20College%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1681832198727!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1275.8666999406507!2d-77.41913292805623!3d37.242352391326556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a65dfb689773%3A0xf0308847f251da2f!2sGateway%20Dining%2C%20Colonial%20Heights%2C%20VA%2023834!5e1!3m2!1sen!2sus!4v1668672001929!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Gateway II Hall' => array(
		'title' => 'Gateway II Hall',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d611.9519003954128!2d-77.41657609935565!3d37.2416868048086!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1681832669309!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1275.8666999406507!2d-77.41913292805623!3d37.242352391326556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a65d898ab0d9%3A0x89a4b03898391934!2sGateway%20Hall!5e1!3m2!1sen!2sus!4v1668672228003!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Graduate & Transfer Admissions Building' => array(
		'title' => 'Graduate & Transfer Admissions Building',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1420.611594525157!2d-77.4231333376498!3d37.2405501326626!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a660e8ea9c49%3A0x8248487731d5ba65!2sStudent%20Parking%20-%20Lot%2027%2C%20College%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1681832832538!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d729.0105554736974!2d-77.4235130803989!3d37.240580446819436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66039116a49%3A0x644d3444009464bf!2sAdmissions%20Office%2C%2020708%204th%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668672451807!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Guest House' => array(
		'title' => 'Guest House',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d929.2417519362825!2d-77.42093410254154!3d37.23460614575326!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6624d4686af%3A0x8ea22961183d1cea!2sParking%20lot%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023806!5e1!3m2!1sen!2sus!4v1681833255865!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d758.7132982585429!2d-77.4210084947243!3d37.234560887634686!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a663a7510b87%3A0x236cf79027cce4df!2sGuest%20House%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668673215115!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Heating Plant' => array(
		'title' => 'Heating Plant',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d542.4168289034508!2d-77.41757251607247!3d37.23383366522944!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1681871720582!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d638.0020675018465!2d-77.417279!3d37.234233!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a718c358f76f%3A0x4be13d002f891628!2sVSU%20Heating%20Plant!5e1!3m2!1sen!2sus!4v1681871288495!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Honors House' => array(
		'title' => 'Honors House',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d929.2417519362825!2d-77.42093410254154!3d37.23460614575326!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6624d4686af%3A0x8ea22961183d1cea!2sParking%20lot%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023806!5e1!3m2!1sen!2sus!4v1681833255865!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d440.3228908612713!2d-77.42105580650764!3d37.23419566846939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a78af5d213a1%3A0x86726dcafde1249!2sHonors%20House!5e1!3m2!1sen!2sus!4v1668675748739!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Hunter-McDaniel' => array(
		'title' => 'Hunter-McDaniel',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1097.9836999431545!2d-77.41955824280609!3d37.239963359902156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a660e8ea9c49%3A0x8248487731d5ba65!2sStudent%20Parking%20-%20Lot%2027%2C%20College%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1669924272451!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1245.3394470432231!2d-77.42115073861258!3d37.23914475395138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66732ab6bff%3A0xf9211c32725a95ba!2sHunter-McDaniel%2C%20Carter%20G%20Woodson%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668675841580!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Institunional Effectiveness' => array(
		'title' => 'Institunional Effectiveness',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1493.915207223953!2d-77.42003277335932!3d37.23604476555952!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66161091281%3A0x451db5f8527f0164!2sLot%2023%20Students%2C%20Third%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1681872700197!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d902.2482474021514!2d-77.42017430632201!3d37.23614885349501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a663e9dcb743%3A0xc3d25af779d8c75!2sInstitutional%20Planning%2C%20Lee%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668676029205!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Jackson Place Cottage' => array(
		'title' => 'Jackson Place Cottage',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d819.9758600622546!2d-77.41771250796924!3d37.23752069272678!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a666c09233ef%3A0x7cddbae6865fc9cf!2sLot%2010%20-%20Student%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1681873934373!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d225.55997306903936!2d-77.41763297251067!3d37.236846944154244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a7bed7871f1b%3A0x4355c5fb81c186f2!2sJackson%20Place%201!5e1!3m2!1sen!2sus!4v1668676154741!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Jesse B. Bolling Hall' => array(
		'title' => 'Jesse B. Bolling Hal',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1275.918894811623!2d-77.41663!3d37.239269!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6670563ae8f%3A0x9c2135efd123b64b!2sParking%20lot%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1681874293101!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d758.6687061504396!2d-77.41750969635471!3d37.23899157953302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6671c651d6d%3A0x931a756bb0e0e7fa!2sJesse%20B.%20Boiling%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668676345114!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Johnnella Jackson Hall' => array(
		'title' => 'Johnnella Jackson Hall',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d846.2269482392886!2d-77.42123484792178!3d37.23509981942952!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6624d4686af%3A0x8ea22961183d1cea!2sParking%20lot%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023806!5e1!3m2!1sen!2sus!4v1681874991711!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d536.4878540712062!2d-77.42008328494363!3d37.235047674790735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a663be2e77dd%3A0xb3ea8fd4f44173d5!2sTrinkle%20Hall%2C%20Lee%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668676639993!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Johnston Memorial Library' => array(
		'title' => 'Johnston Memorial Library',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1234.6309314163793!2d-77.42022013902277!3d37.23701337753792!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66161091281%3A0x451db5f8527f0164!2sLot%2023%20Students%2C%20Third%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1681926220147!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.4103566990461!2d-77.42093081552358!3d37.23693772896051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6624bc1411b%3A0x57fe755ed801495!2sJohnston%20Memorial%20Library!5e1!3m2!1sen!2sus!4v1668676714601!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Jones Dining Hall' => array(
		'title' => 'Jones Dining Hall',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1234.6309314163793!2d-77.42022013902277!3d37.23701337753792!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66161091281%3A0x451db5f8527f0164!2sLot%2023%20Students%2C%20Third%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1681926220147!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.4264519104904!2d-77.42031568860173!3d37.235693811779655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a663f68de16d%3A0x6cd57972ccccdb81!2sJones%20Dining%20Hall!5e1!3m2!1sen!2sus!4v1668676769441!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
	),
	
	'L. Douglas Wilder Building' => array(
		'title' => 'L. Douglas Wilder Building',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d948.6754480965246!2d-77.41907064061402!3d37.2418896081426!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a65e1d18c143%3A0x28eabdd79a70bab4!2sStudent%20Parking%20-%20Lot%2028%2C%20College%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1681927168399!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.781930651421!2d-77.42034358538211!3d37.24091895046774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6674eeb3ee7%3A0x9e740c8b3d8f25b2!2sL.%20Douglas%20Wilder%20Building%2C%20Carter%20G%20Woodson%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668677344409!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Langston Hall' => array(
		'title' => 'Langston Hall',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1009.8247437978505!2d-77.41760293603731!3d37.235696434794804!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6643cc735ff%3A0xb5156724cdff2f76!2sLot%206%20-%20Student%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1681927921241!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d758.6998817512514!2d-77.41862416395655!3d37.23589400524053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a664142a797f%3A0x2449a9ea5d4ee0f3!2sLangston%20Residence%20Hall%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668677442700!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Linday-Montague Building' => array(
		'title' => 'Linday-Montague Building',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1275.9893437539756!2d-77.42226910005934!3d37.2351069104359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6624d4686af%3A0x8ea22961183d1cea!2sParking%20lot%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023806!5e1!3m2!1sen!2sus!4v1681928223414!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.993756556536!2d-77.42186798538228!3d37.2346617508234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66399f30e4d%3A0x4b4e457da2d0e506!2sLindsay-Montague%20Building%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668677521919!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Lucretia Campbell Hall' => array(
		'title' => 'Lucretia Campbell Hall',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d834.5596489608492!2d-77.4205359870731!3d37.23663250362036!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66161091281%3A0x451db5f8527f0164!2sLot%2023%20Students%2C%20Third%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1681967270208!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d536.4847374795686!2d-77.41989713500779!3d37.235485623752254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66394b8f393%3A0xfb7e4db4ba55adb1!2sEggleston%20Hall%2C%20Lee%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668677873792!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Lula Johnson Hall' => array(
		'title' => 'Lula Johnson Hall',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d423.111331394523!2d-77.41737336555666!3d37.23549094273379!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6643cc735ff%3A0xb5156724cdff2f76!2sLot%206%20-%20Student%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1681967605811!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1001.1175106725863!2d-77.41912562309255!3d37.23536763772742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66472846ba5%3A0xb705a30b76165988!2sVawter%20Hall%2C%20College%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668678166727!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
	),
	'Memorial Hall' => array(
		'title' => 'Memorial Hall - Student Health Services',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d997.6405823420729!2d-77.42060558651129!3d37.23637321154061!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66161091281%3A0x451db5f8527f0164!2sLot%2023%20Students%2C%20Third%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1681967868198!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1072.9672170914364!2d-77.42159586504229!3d37.23564426244416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a663c5f7f561%3A0x62bd7d162592c90f!2sMemorial%20Hall%20-%20Student%20Health%20Services%2C%20Lee%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668678640038!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Moore Hall' => array(
		'title' => 'Moore Hall',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d631.3229019250444!2d-77.41833940406491!3d37.243798840590536!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a65ddbb8c453%3A0xff396bf35d21df98!2sParking%20lot%2C%20E%20River%20Rd%2C%20Colonial%20Heights%2C%20VA%2023834!5e1!3m2!1sen!2sus!4v1681968032940!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.699134511147!2d-77.42031478538202!3d37.2433644503287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a65de75a2299%3A0x1294b8c263f7e5b5!2sMoore%20Hall!5e1!3m2!1sen!2sus!4v1668678779664!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Multipurpose Center' => array(
		'title' => 'Multipurpose Center',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d883.6637043221536!2d-77.42365441411745!3d37.237566228317384!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6618a721987%3A0xc8bd603a44f8c9e3!2sLot%2036%20Student%20Parking%2C%202nd%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1681968295622!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.819469238446!2d-77.42713208538215!3d37.23981015053081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a68a5eed34ed%3A0x79e146f68bcabfd1!2sVSU%20Multipurpose%20Center!5e1!3m2!1sen!2sus!4v1668678853667!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Otelia Howard Hall' => array(
		'title' => 'Otelia Howard Hall',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d637.9952895047138!2d-77.42160787137223!3d37.23503392859032!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6624d4686af%3A0x8ea22961183d1cea!2sParking%20lot%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023806!5e1!3m2!1sen!2sus!4v1682023116590!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d637.995740707927!2d-77.42104276828184!3d37.23498061218367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a663bb8f68f3%3A0xdee518df32bf3153!2sByrd%20Residence%20Hall%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668679875165!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Owen Hall' => array(
		'title' => 'Owen Hall',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2551.880919367232!2d-77.417796!3d37.237995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a666c09233ef%3A0x7cddbae6865fc9cf!2sLot%2010%20-%20Student%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1682023506990!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.8807788545487!2d-77.41998488538218!3d37.23799915063369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a666c66c4d29%3A0x41a7b43208645b3c!2sOwens%20Hall%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668679786412!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Physical Plant Administration' => array(
		'title' => 'Physical Plant Administration',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d429.7596875407937!2d-77.41551937439979!3d37.23585006299697!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a665d21016c9%3A0x605aa1d17f601087!2sParking%20lot%2C%20Vaughan-Williams%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1682023678312!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1275.9642282497473!2d-77.41571189948598!3d37.23659076795101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6667ba24563%3A0x426e098e4075eb81!2sPhysical%20Plant%20Administration%2C%20Colonial%20Heights%2C%20VA%2023834!5e1!3m2!1sen!2sus!4v1668680087524!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
	),
	'Police and Public Safety' => array(
		'title' => 'Police and Public Safety',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d759.9913944277869!2d-77.4165963988754!3d37.2383079219329!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a666e5fa1391%3A0x2ff8aa9a5321b294!2sLot%2013%20-%20Student%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1682024140686!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d902.227963711659!2d-77.41695961106879!3d37.23784358471126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a666f052c981%3A0x34c47aabec9c4684!2sVSU%20Police%20and%20Public%20Safety!5e1!3m2!1sen!2sus!4v1668680197134!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
	),
	'Post Office' => array(
		'title' => 'Post Office',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1155.6306625851914!2d-77.42085104645886!3d37.23611395922758!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66161091281%3A0x451db5f8527f0164!2sLot%2023%20Students%2C%20Third%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1682024370419!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
		'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d318.9961785279048!2d-77.41937726281562!3d37.23538043968741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1668680274373!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
	),
	'Presidents Residence' => array(
		'title' => "President's Residence",
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1275.9955894250706!2d-77.4213462!3d37.2347379!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6624d4686af%3A0x8ea22961183d1cea!2sParking%20lot%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023806!5e1!3m2!1sen!2sus!4v1682398860918!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d638.0009846875057!2d-77.42014443578428!3d37.23436095279318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6637440b625%3A0x8c1f1521598713ec!2sPresident&#39;s%20House%2C%20Chesterfield%20Ave%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668680348680!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
 	),
	'Quad One' => array(
		'title' => 'Quad I',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1921.1612423545778!2d-77.421466!3d37.237499!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a661655c96e9%3A0xa438c53421beebeb!2sLot%2025%20Student%20Parking%2C%20Boisseau%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1684822422521!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1072.9537747317954!2d-77.4213214205446!3d37.23658871607162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a663d3b7fa47%3A0x40fbff393a49461c!2sQuad%20Residence%20Hall%2C%20Lee%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668680604847!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',	
	),
	'Qaud Two' => array(
		'title' => 'Qaud II',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1072.9463375515866!2d-77.42021346731224!3d37.23711123992199!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a661655c96e9%3A0xa438c53421beebeb!2sLot%2025%20Student%20Parking%2C%20Boisseau%20St%2C%20Petersburg%2C%20VA%2023806!5e1!3m2!1sen!2sus!4v1687295498051!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1072.9539538417298!2d-77.42112467313027!3d37.23657613202968!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66183d1eb4f%3A0xc005e71753dd32f4!2sQuad%20II!5e1!3m2!1sen!2sus!4v1687295575931!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Rogers Stadium' => array(
		'title' => 'Rogers Stadium',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3230.811480732265!2d-77.42156847473984!3d37.24178520300069!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a660e8ea9c49%3A0x8248487731d5ba65!2sStudent%20Parking%20-%20Lot%2027%2C%20College%20Ave%2C%20Petersburg%2C%20VA%2023806!5e1!3m2!1sen!2sus!4v1687296641831!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3230.811480732265!2d-77.42156847473984!3d37.24178520300069!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6606461ede5%3A0xdc2166a9226650c!2sRogers%20Stadium!5e1!3m2!1sen!2sus!4v1687296607072!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
	),
	'Resorce & Development Center' => array(
		'title' => 'Resorce & Development Center',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1398.2221479364994!2d-77.42275058141887!3d37.24019882213885!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a660e8ea9c49%3A0x8248487731d5ba65!2sStudent%20Parking%20-%20Lot%2027%2C%20College%20Ave%2C%20Petersburg%2C%20VA%2023806!5e1!3m2!1sen!2sus!4v1687296939096!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1358.4216273225638!2d-77.42083525775213!3d37.23996908198002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6604c9d90c1%3A0x60f4719ac747af28!2sSchool%20of%20Graduate%20Studies%20and%20Continuing%20Education!5e1!3m2!1sen!2sus!4v1687296999589!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Seward Hall' => array(
		'title' => 'Seward Hall',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d480.3020279501743!2d-77.41694859293939!3d37.2356599129607!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6643cc735ff%3A0xb5156724cdff2f76!2sLot%206%20-%20Student%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023806!5e1!3m2!1sen!2sus!4v1687297623441!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d480.30149734367023!2d-77.41719267395973!3d37.23574319546545!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6641960c3c1%3A0x5bfbf4ca5c7d2349!2sSeward%20Residence%20Hall%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023806!5e1!3m2!1sen!2sus!4v1687297664603!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Singleton Hall' => array(
		'title' => 'Singleton Hall',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d960.572005516556!2d-77.42126449942587!3d37.238175111784265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66113186f8b%3A0x455abc4fb1a5fd61!2sParking%20lot%2C%2026%20Boisseau%20St%2C%20Petersburg%2C%20VA%2023806!5e1!3m2!1sen!2sus!4v1687298199054!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d960.5701583550713!2d-77.41915733035118!3d37.238320065945466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a666cc9cd60d%3A0x9358df322580febe!2sSingleton%20Hall%2C%20Petersburg%2C%20VA%2023806!5e1!3m2!1sen!2sus!4v1687298267101!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Softball Field' => array(
		'title' => 'Softball Field',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d960.513149485459!2d-77.42122263129264!3d37.24279354311523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a65e1d18c143%3A0x28eabdd79a70bab4!2sStudent%20Parking%20-%20Lot%2028%2C%20College%20Ave%2C%20Petersburg%2C%20VA%2023806!5e1!3m2!1sen!2sus!4v1687470094328!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d960.513149485459!2d-77.42122263129264!3d37.24279354311523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a65e393ed13f%3A0xabf9149518359272!2sVSU%20Softball%20Field%2C%20College%20Ave%2C%20Petersburg%2C%20VA%2023806!5e1!3m2!1sen!2sus!4v1687470182159!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Soccer Field' => array(
		'title' => 'Soccer Field',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d836.2012491576099!2d-77.41993815683495!3d37.24046280787488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a660e8ea9c49%3A0x8248487731d5ba65!2sStudent%20Parking%20-%20Lot%2027%2C%20College%20Ave%2C%20Petersburg%2C%20VA%2023806!5e1!3m2!1sen!2sus!4v1687471010981!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d836.2072198398383!2d-77.42321652511897!3d37.23992461702899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1687470797882!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Tennis Courts' => array(
		'title' => 'Tennis Courts',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d634.4619678108477!2d-77.42116933660895!3d37.24002318884204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a660e8ea9c49%3A0x8248487731d5ba65!2sStudent%20Parking%20-%20Lot%2027%2C%20College%20Ave%2C%20Petersburg%2C%20VA%2023806!5e1!3m2!1sen!2sus!4v1687472763751!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d634.4662081135372!2d-77.42158181105235!3d37.23951943175241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1687472692858!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'University College' => array(
		'title' => 'University College',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d530.1502508540216!2d-77.41721362110617!3d37.23823127890547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a666e5fa1391%3A0x2ff8aa9a5321b294!2sLot%2013%20-%20Student%2C%20Petersburg%2C%20VA%2023806!5e1!3m2!1sen!2sus!4v1687474239563!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d637.9666501213414!2d-77.41690867081574!3d37.2384179664276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a666fae08fff%3A0x81c6325fd1762931!2sAcademic%20Success%20Center%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668706078543!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'UTS Building' => array(
		'title' => 'UTS Building',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d530.1575400689401!2d-77.4205274534636!3d37.23719484278707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66161091281%3A0x451db5f8527f0164!2sLot%2023%20Students%2C%20Third%20Ave%2C%20Petersburg%2C%20VA%2023806!5e1!3m2!1sen!2sus!4v1687474731389!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d536.4821206390441!2d-77.41994867289729!3d37.23585334340295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a663c15cd8ab%3A0x58d5490f66ecd677!2sUTS%20Building%2C%20Lee%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668706185092!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Virginia Hall' => array( 
		'title' => 'Virginia Hall',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d450.47836059892563!2d-77.4210757161742!3d37.2348349273507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6624d4686af%3A0x8ea22961183d1cea!2sParking%20lot%2C%20Hayden%20St%2C%20Petersburg%2C%20VA%2023806!5e1!3m2!1sen!2sus!4v1687716542672!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d849.408427817324!2d-77.41962932220325!3d37.23479132384412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6638f4d363f%3A0xbae6346f605f8bc0!2sVirginia%20Hall!5e1!3m2!1sen!2sus!4v1687716466901!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Hoptiality Management Building' => array(
		'title' => 'Hoptiality Management Building',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1314.4182398598107!2d-77.42207967647423!3d37.24033183726261!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a660e8ea9c49%3A0x8248487731d5ba65!2sStudent%20Parking%20-%20Lot%2027%2C%20College%20Ave%2C%20Petersburg%2C%20VA%2023806!5e1!3m2!1sen!2sus!4v1687716724425!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d730.2782323255819!2d-77.42319621523458!3d37.24023633278079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66037f74e67%3A0x12dc69aa25bc79d8!2sHospitality%20Management%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1668706538546!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'VSU Credit Union' => array(
		'title' => 'VSU Credit Union',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1615.5328908711836!2d-77.42138183571304!3d37.23585232087686!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6624d4a2cf9%3A0xc08ecb9bd900377d!2sParking%20lot%2C%20Lee%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1687716966582!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1615.5328908711836!2d-77.42138183571304!3d37.23585232087686!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6623cc6b285%3A0x8dd93cce0cb02ac4!2sVirginia%20State%20University%20FCU!5e1!3m2!1sen!2sus!4v1687716995510!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Water Tower' => array(
		'title' => 'Water Tower',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d480.28936712996943!2d-77.41549142576028!3d37.237647076256756!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1687717185270!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d480.28766643381067!2d-77.415533!3d37.237914!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1687717042640!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
	'Whiting Hall Williams' => array(
		'title' => 'Whiting Hall Williams',
		'parking' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d774.8619262206404!2d-77.42159774429992!3d37.23580254913677!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6624d4a2cf9%3A0xc08ecb9bd900377d!2sParking%20lot%2C%20Lee%20St%2C%20Petersburg%2C%20VA%2023803!5e1!3m2!1sen!2sus!4v1687717651107!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
		'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d774.8619262206404!2d-77.42159774429992!3d37.23580254913677!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a663ca42cfb7%3A0x1cfd99b7986fe5e!2sWhiting%20Residence%20Hall%2C%20Lee%20St%2C%20Petersburg%2C%20VA%2023806!5e1!3m2!1sen!2sus!4v1687717688734!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
	),
);

$Agriculture_engineering_shop = $VSU_locations['Agriculture engineering shop'];

	$Agriculture_engineering_shop_title = $Agriculture_engineering_shop['title'];

	$Agriculture_engineering_shop_parking = $Agriculture_engineering_shop['parking'];

	$Agriculture_engineering_shop_map = $Agriculture_engineering_shop['map'];
	

$Alumni_Foundation = $VSU_locations['Alumni Foundation'];

	$Alumni_Foundation_title = $Alumni_Foundation['title'];

	$Alumni_Foundation_parking = $Alumni_Foundation['parking'];

	$Alumni_Foundation_map = $Alumni_Foundation['map'];


$Appomaxtoox_Overlook = $VSU_locations['Appomaxtoox Overlook'];

	$Appomaxtoox_Overlook_title = $Appomaxtoox_Overlook['title'];
	
	$Appomaxtoox_Overlook_parking = $Appomaxtoox_Overlook['parking'];
	
	$Appomaxtoox_Overlook_map = $Appomaxtoox_Overlook['map'];
	
	
$Athletic_Deparment = $VSU_locations['Athletic Deparment'];

	$Athletic_Deparment_title = $Athletic_Deparment['title'];
	
	$Athletic_Deparment_parking = $Athletic_Deparment['parking'];
	
	$Athletic_Deparment_map = $Athletic_Deparment['map'];
	
	
$Athletic_Storage = $VSU_locations['Athletic Storage'];

	$Athletic_Storage_title = $Athletic_Storage['title'];
	
	$Athletic_Storage_parking = $Athletic_Storage['parking'];
	
	$Athletic_Storage_map =$Athletic_Storage['map'];
	

$Basketball = $VSU_locations['Basketball Courts'];

	$Basketball_title = $Basketball['title'];
	
	$Basketball_parking = $Basketball['parking'];
	
	$Basketball_map = $Basketball['map'];
	
	
$Bookstore = $VSU_locations['Bookstore'];

	$Bookstore_title = $Bookstore['title'];
	
	$Bookstore_parking = $Bookstore['parking'];
	
	$Bookstore_map = $Bookstore['map'];
	
	
$Branch_Hall = $VSU_locations['Branch Hall'];

	$Branch_Hall_title = $Branch_Hall['title'];
	
	$Branch_Hall_parking = $Branch_Hall['parking'];
	
	$Branch_Hall_map = $Branch_Hall['map'];
	
	
$Carter_Hall = $VSU_locations['Carter Hall'];

	$Carter_Hall_title = $Carter_Hall['title'];
	
	$Carter_Hall_parking = $Carter_Hall['parking'];
	
	$Carter_Hall_map = $Carter_Hall['map'];
	

$Colbert_Baseball_Field = $VSU_locations['Colbert Baseball Field'];

	$Colbert_Baseball_title = $Colbert_Baseball_Field['title'];
	
	$Colbert_Baseball_parking = $Colbert_Baseball_Field['parking'];
	
	$Colbert_Baseball_map = $Colbert_Baseball_Field['map'];
	
	
$Colson_Hall = $VSU_locations['Colson Hall'];

	$Colson_Hall_title = $Colson_Hall['title'];
	
	$Colson_Hall_parking = $Colson_Hall['parking'];
	
	$Colson_Hall_map = $Colson_Hall['map'];
	

$Daniel_Gymnasium = $VSU_locations['Daniel Gymnasium'];

	$Daniel_Gymnasium_title = $Daniel_Gymnasium['title'];
	
	$Daniel_Gymnasium_parking = $Daniel_Gymnasium['parking'];
	
	$Daniel_Gymnasium_map = $Daniel_Gymnasium['map'];
	

$Davis_Hall = $VSU_locations['Davis Hall'];

	$Davis_Hall_title = $Davis_Hall['title'];
	
	$Davis_Hall_parking = $Davis_Hall['parking'];
	
	$Davis_Hall_map = $Davis_Hall['map'];
	
	
$Engineering = $VSU_locations['Engineering Technology Building'];

	$Engineering_title = $Engineering['title'];
	
	$Engineering_parking = $Engineering['parking'];
	
	$Engineering_map = $Engineering['map'];


$Fauntleroy_Hall = $VSU_locations['Fauntleroy Hall'];

	$Fauntleroy_Hall_title = $Fauntleroy_Hall['title'];
	
	$Fauntleroy_Hall_parking = $Fauntleroy_Hall['parking'];
	
	$Fauntleroy_Hall_map = $Fauntleroy_Hall['map'];
	

$Foster_Hall = $VSU_locations['Foster Hall'];

	$Foster_Hall_title = $Foster_Hall['title'];
	
	$Foster_Hall_parking = $Foster_Hall['parking'];
	
	$Foster_Hall_map = $Foster_Hall['map'];


$Gandy_Hall = $VSU_locations['Gandy Hall'];

	$Gandy_Hall_title = $Gandy_Hall['title'];
	
	$Gandy_Hall_parking = $Gandy_Hall['parking'];
	
	$Gandy_Hall_map = $Gandy_Hall['map'];
	
	
$Gateway_Dining = $VSU_locations['Gateway Dining Hall'];

	$Gateway_Dining_title = $Gateway_Dining['title'];
	
	$Gateway_Dining_parking = $Gateway_Dining['parking'];
	
	$Gateway_Dining_map = $Gateway_Dining['map'];
	
	
$Gateway_II_Hall = $VSU_locations['Gateway II Hall'];

	$Gateway_II_Hall_title = $Gateway_II_Hall['title'];
	
	$Gateway_II_Hall_parking = $Gateway_II_Hall['parking'];
	
	$Gateway_II_Hall_map = $Gateway_II_Hall['map'];
	

$Graduate_and_Transfer_Admissions = $VSU_locations['Graduate & Transfer Admissions Building'];

	$Graduate_and_Transfer_Admissions_title = $Graduate_and_Transfer_Admissions['title'];
	
	$Graduate_and_Transfer_Admissions_parking = $Graduate_and_Transfer_Admissions['parking'];
	
	$Graduate_and_Transfer_Admissions_map = $Graduate_and_Transfer_Admissions['map'];
	
	
$Guest_House = $VSU_locations['Guest House'];

	$Guest_House_title = $Guest_House['title'];
	
	$Guest_House_parking = $Guest_House['parking'];
	
	$Guest_House_map = $Guest_House['map'];
	
$Heating_Plant = $VSU_locations['Heating Plant'];

	$Heating_Plant_title = $Heating_Plant['title'];
	
	$Heating_Plant_parking = $Heating_Plant['parking'];
	
	$Heating_Plant_map = $Heating_Plant['map'];
	
$Honors_House = $VSU_locations['Honors House'];

	$Honors_House_title = $Honors_House['title'];
	
	$Honors_House_parking = $Honors_House['parking'];
	
	$Honors_House_map = $Honors_House['map'];
	
$Hunter_McDaniel = $VSU_locations['Hunter-McDaniel'];

	$Hunter_McDaniel_title = $Hunter_McDaniel['title'];
	
	$Hunter_McDaniel_parking = $Hunter_McDaniel['parking'];
	
	$Hunter_McDaniel_map = $Hunter_McDaniel['map'];	
	
$Institunional_Effectiveness = $VSU_locations['Institunional Effectiveness'];

	$Institunional_Effectiveness_title = $Institunional_Effectiveness['title'];
	
	$Institunional_Effectiveness_parking = $Institunional_Effectiveness['parking'];
	
	$Institunional_Effectiveness_map = $Institunional_Effectiveness['map'];	
	
$Jackson_Place = $VSU_locations['Jackson Place Cottage'];

	$Jackson_Place_title = $Jackson_Place['title'];
	
	$Jackson_Place_parking = $Jackson_Place['parking'];
	
	$Jackson_Place_map = $Jackson_Place['map'];	
	
$Jesse_Bolling_Hall = $VSU_locations['Jesse B. Bolling Hall'];

	$Jesse_Bolling_Hall_title = $Jesse_Bolling_Hall['title'];
	
	$Jesse_Bolling_Hall_parking = $Jesse_Bolling_Hall['parking'];
	
	$Jesse_Bolling_Hall_map = $Jesse_Bolling_Hall['map'];	
	
$Johnnella_Jackson_Hall = $VSU_locations['Johnnella Jackson Hall'];

	$Johnnella_Jackson_Hall_title = $Johnnella_Jackson_Hall['title'];
	
	$Johnnella_Jackson_Hall_parking = $Johnnella_Jackson_Hall['parking'];
	
	$Johnnella_Jackson_Hall_map = $Johnnella_Jackson_Hall['map'];	
	
$Johnston_Memorial_Library = $VSU_locations['Johnston Memorial Library'];

	$Johnston_Memorial_Library_title = $Johnston_Memorial_Library['title'];
	
	$Johnston_Memorial_Library_parking = $Johnston_Memorial_Library['parking'];
	
	$Johnston_Memorial_Library_map = $Johnston_Memorial_Library['map'];	
	
	
$Jones_Dining_Hall = $VSU_locations['Jones Dining Hall'];

	$Jones_Dining_Hall_title = $Jones_Dining_Hall['title'];
	
	$Jones_Dining_Hall_parking = $Jones_Dining_Hall['parking'];
	
	$Jones_Dining_Hall_map = $Jones_Dining_Hall['map'];	
	
	
$Douglas_Wilder_Building = $VSU_locations['L. Douglas Wilder Building'];

	$Douglas_Wilder_Building_title = $Douglas_Wilder_Building['title'];
	
	$Douglas_Wilder_Building_parking = $Douglas_Wilder_Building['parking'];
	
	$Douglas_Wilder_Building_map = $Douglas_Wilder_Building['map'];	
	
	
$Langston_Hall = $VSU_locations['Langston Hall'];

	$Langston_Hall_title = $Langston_Hall['title'];
	
	$Langston_Hall_parking = $Langston_Hall['parking'];
	
	$Langston_Hall_map = $Langston_Hall['map'];	
	
	
	
$Linday_Montague_Building = $VSU_locations['Linday-Montague Building'];

	$Linday_Montague_Building_title = $Linday_Montague_Building['title'];
	
	$Linday_Montague_Building_parking = $Linday_Montague_Building['parking'];
	
	$Linday_Montague_Building_map = $Linday_Montague_Building['map'];


$Lucretia_Campbell_Hall = $VSU_locations['Lucretia Campbell Hall'];

	$Lucretia_Campbell_Hall_title = $Lucretia_Campbell_Hall['title'];
	
	$Lucretia_Campbell_Hall_parking = $Lucretia_Campbell_Hall['parking'];
	
	$Lucretia_Campbell_Hall_map = $Lucretia_Campbell_Hall['map'];
	
	
$Lula_Johnson_Hall = $VSU_locations['Lula Johnson Hall'];

	$Lula_Johnson_Hall_title = $Lula_Johnson_Hall['title'];
	
	$Lula_Johnson_Hall_parking = $Lula_Johnson_Hall['parking'];
	
	$Lula_Johnson_Hall_map = $Lula_Johnson_Hall['map'];
	
	
$Memorial_Hall = $VSU_locations['Memorial Hall'];

	$Memorial_Hall_title = $Memorial_Hall['title'];
	
	$Memorial_Hall_parking = $Memorial_Hall['parking'];
	
	$Memorial_Hall_map = $Memorial_Hall['map'];
	
	
$Moore_Hall = $VSU_locations['Moore Hall'];

	$Moore_Hall_title = $Moore_Hall['title'];
	
	$Moore_Hall_parking = $Moore_Hall['parking'];
	
	$Moore_Hall_map = $Moore_Hall['map'];
	
	
$Multipurpose_Center = $VSU_locations['Multipurpose Center'];

	$Multipurpose_Center_title = $Multipurpose_Center['title'];
	
	$Multipurpose_Center_parking = $Multipurpose_Center['parking'];
	
	$Multipurpose_Center_map = $Multipurpose_Center['map'];
	
$Otelia_Howard_Hall = $VSU_locations['Otelia Howard Hall'];

	$Otelia_Howard_Hall_title = $Otelia_Howard_Hall['title'];
	
	$Otelia_Howard_Hall_parking = $Otelia_Howard_Hall['parking'];
	
	$Otelia_Howard_Hall_map = $Otelia_Howard_Hall['map'];

$Owen_Hall = $VSU_locations['Owen Hall'];

	$Owen_Hall_title = $Owen_Hall['title'];
	
	$Owen_Hall_parking = $Owen_Hall['parking'];
	
	$Owen_Hall_map = $Owen_Hall['map'];
	
$Physical_Plant_Administration = $VSU_locations['Physical Plant Administration'];

	$Physical_Plant_Administration_title = $Physical_Plant_Administration['title'];
	
	$Physical_Plant_Administration_parking = $Physical_Plant_Administration['parking'];
	
	$Physical_Plant_Administration_map = $Physical_Plant_Administration['map'];
	
$Police_and_Public_Safety = $VSU_locations['Police and Public Safety'];

	$Police_and_Public_Safety_title = $Police_and_Public_Safety['title'];
	
	$Police_and_Public_Safety_parking = $Police_and_Public_Safety['parking'];
	
	$Police_and_Public_Safety_map = $Police_and_Public_Safety['map'];
	
$Post_Office = $VSU_locations['Post Office'];

	$Post_Office_title = $Post_Office['title'];
	
	$Post_Office_parking = $Post_Office['parking'];
	
	$Post_Office_map = $Post_Office['map'];
	
$Presidents_Residence = $VSU_locations['Presidents Residence'];

	$Presidents_Residence_title = $Presidents_Residence['title'];
	
	$Presidents_Residence_parking = $Presidents_Residence['parking'];
	
	$Presidents_Residence_map = $Presidents_Residence['map'];
	
$Quad_One = $VSU_locations['Quad One'];

	$Quad_One_title = $Quad_One['title'];
	
	$Quad_One_parking = $Quad_One['parking'];
	
	$Quad_One_map = $Quad_One['map'];
	
$Quad_Two = $VSU_locations['Qaud Two'];

	$Quad_Two_title = $Quad_Two['title'];
	
	$Quad_Two_parking = $Quad_Two['parking'];
	
	$Quad_Two_map = $Quad_Two['map'];
	
	
$Rogers_Stadium = $VSU_locations['Rogers Stadium'];

	$Rogers_Stadium_title = $Rogers_Stadium['title'];
	
	$Rogers_Stadium_parking = $Rogers_Stadium['parking'];
	
	$Rogers_Stadium_map = $Rogers_Stadium['map'];
	
$Resorce_and_Development_Center = $VSU_locations['Resorce and Development Center'];

	$Resorce_and_Development_Center_title = $Resorce_and_Development_Center['title'];
	
	$Resorce_and_Development_Center_parking = $Resorce_and_Development_Center['parking'];
	
	$Resorce_and_Development_Center_map = $Resorce_and_Development_Center['map'];
	
$Seward_Hall = $VSU_locations['Seward Hall'];

	$Seward_Hall_title = $Seward_Hall['title'];
	
	$Seward_Hall_parking = $Seward_Hall['parking'];
	
	$Seward_Hall_map = $Seward_Hall['map'];
	
$Singleton_Hall = $VSU_locations['Singleton Hall'];

	$Singleton_Hall_title = $Singleton_Hall['title'];
	
	$Singleton_Hall_parking = $Singleton_Hall['parking'];
	
	$Singleton_Hall_map = $Singleton_Hall['map'];
	
$Softball_Field = $VSU_locations['Softball Field'];

	$Softball_Field_title = $Softball_Field['title'];
	
	$Softball_Field_parking = $Softball_Field['parking'];
	
	$Softball_Field_map = $Softball_Field['map'];
	
$Soccer_Field = $VSU_locations['Soccer Field'];

	$Soccer_Field_title = $Soccer_Field['title'];
	
	$Soccer_Field_parking = $Soccer_Field['parking'];
	
	$Soccer_Field_map = $Soccer_Field['map'];

$Tennis_Courts = $VSU_locations['Tennis Courts'];

    $Tennis_Courts_title = $Soccer_Field['title'];
	
    $Tennis_Courts_parking = $Soccer_Field['parking'];
	
    $Tennis_Courts_map = $Soccer_Field['map'];
    
$University_College = $VSU_locations['University College'];

	$University_College_title = $Soccer_Field['title'];
	
	$University_College_parking = $Soccer_Field['parking'];
	
	$University_College_map = $Soccer_Field['map'];

 $UTS_Building = $VSU_locations['UTS Building'];

	$UTS_Building_title = $UTS_Building['title'];
	
	$UTS_Building_parking = $UTS_Building['parking'];
	
	$UTS_Building_map = $UTS_Building['map'];

 $Virginia_Hall = $VSU_locations['Virginia Hall'];

	 $Virginia_Hall_title =  $Virginia_Hall['title'];
	
	 $Virginia_Hall_parking =  $Virginia_Hall['parking'];
	
	 $Virginia_Hall_map =  $Virginia_Hall['map'];

$Hoptiality_Management_Building = $VSU_locations['Hoptiality Management Building'];

	$Hoptiality_Management_Building_title = $Hoptiality_Management_Building['title'];
	
	$Hoptiality_Management_Building_parking = $Hoptiality_Management_Building['parking'];
	
	$Hoptiality_Management_Building_map = $Hoptiality_Management_Building['map'];

$VSU_Credit_Union = $VSU_locations['VSU Credit Union'];

	 $VSU_Credit_Union_title =  $VSU_Credit_Union['title'];
	
	 $VSU_Credit_Union_parking =  $VSU_Credit_Union['parking'];
	
	 $VSU_Credit_Union_map =  $VSU_Credit_Union['map'];

$Water_Tower = $VSU_locations['Water Tower'];

	 $Water_Tower_title = $Water_Tower['title'];
	
     $Water_Tower_parking =  $Water_Tower['parking'];
	
	 $Water_Tower_map =  $Water_Tower['map'];

$Whiting_Hall_Williams = $VSU_locations['Whiting Hall Williams'];

	$Whiting_Hall_Williams_title =  $Whiting_Hall_Williams['title'];
	
    $Whiting_Hall_Williams_parking =  $Whiting_Hall_Williams['parking'];
	
	$Whiting_Hall_Williams_map =  $Whiting_Hall_Williams['map'];

switch ($Building){
	
		case "Agrultrue":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'. $Agriculture_engineering_shop_parking . '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>". $Agriculture_engineering_shop_title. "</h2>";
			echo '<iframe src="'. $Agriculture_engineering_shop_map . '"></iframe>';
			echo '</div>';
			break;
			
		case "Alummi":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Alumni_Foundation_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Alumni_Foundation_title. "</h2>";
			echo '<iframe src="'.$Alumni_Foundation_map. '"></iframe>';
			echo '</div>';
			break;
			
			
		case "Appomaxtoox":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Appomaxtoox_Overlook_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Appomaxtoox_Overlook_title. "</h2>";
			echo '<iframe src="'.$Appomaxtoox_Overlook_map. '"></iframe>';
			echo '</div>';
			break;
		
		case "Athletic Deparment":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Athletic_Deparment_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Athletic_Deparment_title. "</h2>";
			echo '<iframe src="'.$Athletic_Deparment_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Athletic Storage":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Athletic_Storage_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Athletic_Storage_title. "</h2>";
			echo '<iframe src="'.$Athletic_Storage_map. '"></iframe>';
			echo '</div>';
			break;	
			
		case "Basketball Courts":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Basketball_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Basketball_title. "</h2>";
			echo '<iframe src="'.$Basketball_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Basketball Courts":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Basketball_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Basketball_title. "</h2>";
			echo '<iframe src="'.$Basketball_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Bookstore":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Bookstore_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Bookstore_title. "</h2>";
			echo '<iframe src="'.$Bookstore_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Branch Hall":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Branch_Hall_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Branch_Hall_title. "</h2>";
			echo '<iframe src="'.$Branch_Hall_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Carter Hall":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Carter_Hall_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Carter_Hall_title. "</h2>";
			echo '<iframe src="'.$Carter_Hall_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Colbert Baseball Field":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Colbert_Baseball_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Colbert_Baseball_title. "</h2>";
			echo '<iframe src="'.$Colbert_Baseball_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Colson Hall":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Colson_Hall_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Colson_Hall_title. "</h2>";
			echo '<iframe src="'.$Colson_Hall_map. '"></iframe>';
			echo '</div>';
			break;
			
			
		case "Daniel Gymnasium":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Daniel_Gymnasium_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Daniel_Gymnasium_title. "</h2>";
			echo '<iframe src="'.$Daniel_Gymnasium_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Davis Hall":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Davis_Hall_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Davis_Hall_title. "</h2>";
			echo '<iframe src="'.$Davis_Hall_map. '"></iframe>';
			echo '</div>';
			break;
			
			
		case "Engineering Technology Building":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Engineering_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Engineering_title. "</h2>";
			echo '<iframe src="'.$Engineering_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Fauntleroy Hall":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Fauntleroy_Hall_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Fauntleroy_Hall_title. "</h2>";
			echo '<iframe src="'.$Fauntleroy_Hall_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Foster Hall":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Foster_Hall_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Foster_Hall_title. "</h2>";
			echo '<iframe src="'.$Foster_Hall_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Gandy Hall":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Gandy_Hall_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Gandy_Hall_title. "</h2>";
			echo '<iframe src="'.$Gandy_Hall_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Gateway Dining Hall":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Gateway_Dining_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Gateway_Dining_title. "</h2>";
			echo '<iframe src="'.$Gateway_Dining_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Gateway II Hall":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Gateway_II_Hall_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Gateway_II_Hall_title. "</h2>";
			echo '<iframe src="'.$Gateway_II_Hall_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Graduate & Transfer Admissions Building":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Graduate_and_Transfer_Admissions_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Graduate_and_Transfer_Admissions_title. "</h2>";
			echo '<iframe src="'.$Graduate_and_Transfer_Admissions_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Guest House":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Guest_House_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Guest_House_title. "</h2>";
			echo '<iframe src="'.$Guest_House_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Heating Plant":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Heating_Plant_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Heating_Plant_title. "</h2>";
			echo '<iframe src="'.$Heating_Plant_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Honors House":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Honors_House_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Honors_House_title. "</h2>";
			echo '<iframe src="'.$Honors_House_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Hunter-McDaniel":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Hunter_McDaniel_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Hunter_McDaniel_title. "</h2>";
			echo '<iframe src="'.$Hunter_McDaniel_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Institunional Effectiveness":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Institunional_Effectiveness_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Institunional_Effectiveness_title. "</h2>";
			echo '<iframe src="'.$Institunional_Effectiveness_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Jackson Place Cottage":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Jackson_Place_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Jackson_Place_title. "</h2>";
			echo '<iframe src="'.$Jackson_Place_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Jesse B. Bolling Hall":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Jesse_Bolling_Hall_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Jesse_Bolling_Hall_title. "</h2>";
			echo '<iframe src="'.$Jesse_Bolling_Hall_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Johnnella Jackson Hall":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Johnnella_Jackson_Hall_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Johnnella_Jackson_Hall_title. "</h2>";
			echo '<iframe src="'.$Johnnella_Jackson_Hall_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Johnston Memorial Library":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Johnston_Memorial_Library_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Johnston_Memorial_Library_title. "</h2>";
			echo '<iframe src="'.$Johnston_Memorial_Library_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Jones Dining Hall":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Jones_Dining_Hall_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Jones_Dining_Hall_title. "</h2>";
			echo '<iframe src="'.$Jones_Dining_Hall_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "L. Douglas Wilder Building":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Douglas_Wilder_Building_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Douglas_Wilder_Building_title. "</h2>";
			echo '<iframe src="'.$Douglas_Wilder_Building_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Langston Hall":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Langston_Hall_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Langston_Hall_title. "</h2>";
			echo '<iframe src="'.$Langston_Hall_map. '"></iframe>';
			echo '</div>';
			break;

        case "Linday-Montague Building":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Linday_Montague_Building_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Linday_Montague_Building_title. "</h2>";
			echo '<iframe src="'.$Linday_Montague_Building_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Lucretia Campbell Hall":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Lucretia_Campbell_Hall_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Lucretia_Campbell_Hall_title. "</h2>";
			echo '<iframe src="'.$Lucretia_Campbell_Hall_map. '"></iframe>';
			echo '</div>';
			break;
		
		case "Lula Johnson Hall":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Lula_Johnson_Hall_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Lula_Johnson_Hall_title. "</h2>";
			echo '<iframe src="'.$Lula_Johnson_Hall_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Memorial Hall":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Memorial_Hall_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Memorial_Hall_title. "</h2>";
			echo '<iframe src="'.$Memorial_Hall_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Moore Hall":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Moore_Hall_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Moore_Hall_title. "</h2>";
			echo '<iframe src="'.$Moore_Hall_map. '"></iframe>';
			echo '</div>';
			break;
		
		case "Multipurpose Center":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Multipurpose_Center_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Multipurpose_Center_title. "</h2>";
			echo '<iframe src="'.$Multipurpose_Center_map. '"></iframe>';
			echo '</div>';
			break;

        case "Otelia Howard Hall":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Otelia_Howard_Hall_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Otelia_Howard_Hall_title. "</h2>";
			echo '<iframe src="'.$Otelia_Howard_Hall_map. '"></iframe>';
			echo '</div>';
			break;

        case "Owen Hall":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Owen_Hall_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Owen_Hall_title. "</h2>";
			echo '<iframe src="'.$Owen_Hall_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Physical Plant Administration":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Physical_Plant_Administration_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Physical_Plant_Administration_title. "</h2>";
			echo '<iframe src="'.$Physical_Plant_Administration_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Police and Public_Safety":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Police_and_Public_Safety_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Police_and_Public_Safety_title. "</h2>";
			echo '<iframe src="'.$Police_and_Public_Safety_map. '"></iframe>';
			echo '</div>';
			break;

		case "Post Office":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Post_Office_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Post_Office_title. "</h2>";
			echo '<iframe src="'.$Post_Office_map. '"></iframe>';
			echo '</div>';
			break;

        case "Presidents Residence":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Presidents_Residence_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Presidents_Residence_title. "</h2>";
			echo '<iframe src="'.$Presidents_Residence_map. '"></iframe>';
			echo '</div>';
			break;

		case "Quad One":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Quad_One_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Quad_One_title. "</h2>";
			echo '<iframe src="'.$Quad_One_map. '"></iframe>';
			echo '</div>';
			break;

        case "Quad Two":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Quad_Two_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Quad_Two_title. "</h2>";
			echo '<iframe src="'.$Quad_Two_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Rogers Stadium":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Rogers_Stadium_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Rogers_Stadium_title. "</h2>";
			echo '<iframe src="'.$Rogers_Stadium_map. '"></iframe>';
			echo '</div>';
			break;
			
			
		case "Resorce and Development Center":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Resorce_and_Development_Center_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Resorce_and_Development_Center_title. "</h2>";
			echo '<iframe src="'.$Resorce_and_Development_Center_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Seward Hall ":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Seward_Hall_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Seward_Hall_title. "</h2>";
			echo '<iframe src="'.$Seward_Hall_map. '"></iframe>';
			echo '</div>';
			break;
			
			
		case "Singleton Hall":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Singleton_Hall_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Singleton_Hall_title. "</h2>";
			echo '<iframe src="'.$Singleton_Hall_map. '"></iframe>';
			echo '</div>';
			break;
			
			
		case "Softball Field":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Softball_Field_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Softball_Field_title. "</h2>";
			echo '<iframe src="'.$Softball_Field_map. '"></iframe>';
			echo '</div>';
			break;
			
			
		case "Soccer Field":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Soccer_Field_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Soccer_Field_title. "</h2>";
			echo '<iframe src="'.$Soccer_Field_map. '"></iframe>';
			echo '</div>';
			break;

        case "Tennis Courts":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Tennis_Courts_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Tennis_Courts_title. "</h2>";
			echo '<iframe src="'.$Tennis_Courts_map. '"></iframe>';
			echo '</div>';
			break;

		case "University College":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$University_College_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$University_College_title. "</h2>";
			echo '<iframe src="'.$University_College_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "UTS Building":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$UTS_Building_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$UTS_Building_title. "</h2>";
			echo '<iframe src="'.$UTS_Building_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Virginia Hall":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Virginia_Hall_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Virginia_Hall_title. "</h2>";
			echo '<iframe src="'.$Virginia_Hall_map. '"></iframe>';
			echo '</div>';
			break;
			
		case "Hoptiality Management Building":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Hoptiality_Management_Building_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Hoptiality_Management_Building_title. "</h2>";
			echo '<iframe src="'.$Hoptiality_Management_Building_map. '"></iframe>';
			echo '</div>';
			break;

        case "VSU Credit Union":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$VSU_Credit_Union_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$VSU_Credit_Union_title. "</h2>";
			echo '<iframe src="'.$VSU_Credit_Union_map. '"></iframe>';
			echo '</div>';
			break;

        case "Water Tower":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Water_Tower_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Water_Tower_title. "</h2>";
			echo '<iframe src="'.$Water_Tower_map. '"></iframe>';
			echo '</div>';
			break;

        case "Whiting Hall Williams":
		
			echo '<div class = "parkingmap">';
			echo "<h2>".$Student_Parking_title. "</h2>";
			echo '<iframe src="'.$Whiting_Hall_Williams_parking. '"></iframe>';
			echo '</div>';
			echo '<div class = "map">';
			echo "<h2>".$Whiting_Hall_Williams_title. "</h2>";
			echo '<iframe src="'.$Whiting_Hall_Williams_map. '"></iframe>';
			echo '</div>';
			break;
            
}
?>
</body>
</html>
