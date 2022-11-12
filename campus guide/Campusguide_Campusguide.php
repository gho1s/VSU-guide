<!DOCTYPE html>
<html>
<head>
	<title> VSU travel guide </title>
</head>
<body>
<h1>Campus Guide</h1>
<form method = "post" action="">
  
  <label for="fname">Hunter mack hall<b></b></</label>
  <input type="radio" id="Building" name="Building" value="hunter"><br>
  
  <label for="age1">test</label>
  <input type="radio" id="Building" name="Building" value="hi"><br>
  
  <label for="age2">L. Douglas Wilder Building</label><br> 
  <input type="radio" id="Building" name="Building" value="Douglas"><br>
	
  <label for="age3">test</label>
  <input type="radio" id="Building" name="Building" value="100"><br>
  
  <input type="submit" value="Submit">
</form>
<?php
$Building = $_POST['Building'];
if($Building == "hunter"){
	?>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1479.2426586621204!2d-77.42027826534081!3d37.23998739708185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a66732ab6bff%3A0xf9211c32725a95ba!2sHunter-McDaniel%2C%20Carter%20G%20Woodson%20Ave%2C%20Petersburg%2C%20VA%2023803!5e0!3m2!1sen!2sus!4v1668044523566!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
} else if ($Building == "Douglas"){
	?>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1938.3770732133712!2d-77.41980921582437!3d37.24048552689225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1a6674eeb3ee7%3A0x9e740c8b3d8f25b2!2sL.%20Douglas%20Wilder%20Building%2C%20Carter%20G%20Woodson%20Ave%2C%20Petersburg%2C%20VA%2023803!5e0!3m2!1sen!2sus!4v1668155571648!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<?php
}
	else{
echo "HIIII";
}
?>
</body>
</html>
