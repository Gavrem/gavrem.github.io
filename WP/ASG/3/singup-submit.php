<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <title>Singedup to NerdLuv</title>
  <link href="nerdluv.css" rel="stylesheet">

</head>
<body>
<?php
    require ('common.php');
	print_header();
?>
<?php 
					
if (isset($_POST["name"]) and isset($_POST["gender"])and isset($_POST["age"]) and 
isset($_POST["personality"])and isset($_POST["system"]) and isset($_POST["age-min"])
and isset($_POST["age-max"]) and isset($_FILES['photo']) ) {
	$pers = str_split($_POST["personality"]);
	if ($_POST["age"]> 0 and $_POST["age"]<99 and $_POST["name"]!= "" and
	($pers[0] == "I" or $pers[0] == "E") and ($pers[1] == "N" or $pers[1] == "S")
		and ($pers[2] == "F" or $pers[2] == "T")and ($pers[3] == "J" or $pers[3] == "P")
		and $_POST["age-min"]> 0 and $_POST["age-min"]<99 and $_POST["age-max"]> 0 
	and $_POST["age-max"]<99  and ($_POST["seek_male"]== "M" or $_POST["seek_female"]== "F" ) ){
		$repeat = 0;
		$array = explode("\n", file_get_contents('singles2.txt'));
		for ($x = 0; $x <= count($array); $x++) {
				$myString = $array[$x];
			$myArray = explode(',', $myString);
			if ($myArray[0]== $_POST["name"] ) {
				$repeat = $repeat  + 1;
			}
			
		}
		if ($repeat == 0){	
			$previousFileContent = file_get_contents("singles2.txt");
			$data = $_POST["name"]. "," .$_POST["gender"]. "," . $_POST["age"]. ",". $_POST["personality"].
			"," . $_POST["system"]. ",". $_POST["age-min"]. ",". $_POST["age-max"].",". $_POST["seek_male"]. $_POST["seek_female"];
			file_put_contents("singles2.txt", trim($previousFileContent ."\n". $data));
	
			echo "<div class = \"main\">";
			echo "<p><span style=\"font-weight:bold;\"> Thank you!</span></p>";
			echo "<p>Welcome to NerLuv, ". $_POST["name"] ."!</p> ";
			echo "<p> Now <a href=\"matches.php\"> log in to see your matches!</a></p></div><br>";
			
			$ImageName = $_FILES['photo']['name'];
			$path = 'images/'; 
			$location = $path . str_replace(' ','_',strtolower($_POST["name"] )) . ".jpg"; 
			move_uploaded_file($_FILES['photo']['tmp_name'],$location); 

			
			}  else {
				print_error("Error User already in system!", " We're sorry. User is already registerred." );

}
	
	}else{
			print_error();


	}

}else {
		print_error();

	
}


?>




<?php	print_footer();?>




</body>
</html>
