<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <title>Matches NerdLuv</title>
  <link href="nerdluv.css" rel="stylesheet">

</head>
<body>

<?php
    require ('common.php');
	print_header();
?>
<?php
if ($_GET["name"] != ""){
	
$number = -1;
$array = explode("\n", file_get_contents('singles2.txt'));
	for ($x = 0; $x <= count($array); $x++) {
		
		$myString = $array[$x];
		$myArray = explode(',', $myString);
		$Newarray[$x] = $myArray;
		if ($Newarray[$x][0]== $_GET["name"] ) {
			$number= $x;
		}
	}

$matches = array();
for ($x = 0; $x <= count($Newarray); $x++) {
		if ($Newarray[$number][0] != $Newarray[$x][0] ){
			if (($Newarray[$number][1]== $Newarray[$x][7][0] or 
			$Newarray[$number][1]== $Newarray[$x][7][1]) and ($Newarray[$x][1]== $Newarray[$number][7][0]
			or $Newarray[$x][1]== $Newarray[$number][7][1])   ) {
				if ($Newarray[$number][2]>= $Newarray[$x][5] and $Newarray[$number][2] <= $Newarray[$x][6]   ) {
					if ($Newarray[$number][4] == $Newarray[$x][4] ) {
						$pers1 = str_split($Newarray[$number][3]);
						$pers2 = str_split($Newarray[$x][3]);
						$pers_comman = 0;
						for ($j = 0; $j <= count($pers1); $j++) {
								for ($t = 0; $t <= count($pers2); $t++) {
									if ($pers1[$j] == $pers2[$t] ) {
										$pers_comman = $pers_comman + 1;								
									}
								}
						}
						if ($pers_comman >= 1 ) {
							array_push($matches, $Newarray[$x]);

						}
				}
				
			}
				
			}
		}
}


	function printMathces($match)
	{	
		echo "<div class = \"main\">";
		echo "<div class = \"match\">";
		echo "<div class = \"match-img\">";
		if (file_exists("images/" . str_replace(' ','_',strtolower( $match[0] )). ".jpg")) {
			echo "<img src=\"images/"  . str_replace(' ','_',strtolower( $match[0] )). ".jpg\" alt=\"back to page\"  width = \"128px\"/></div>";
		} else {
			echo "<img src=\"../../IMG/nerdluv/img/" . str_replace(' ','_',strtolower( $match[0] )). ".jpg\" alt=\"back to page\"  width = \"128px\"/></div>";
		}
		echo "<div class = \"match-info\">";
		echo "<p style=\"background-color:lavender;width:400px;margin-top: -1%;\">".($match[0])."</p>";
		echo "<div class = \"match-row\">";
		echo "<div class = \"match-column\">";
		echo "<ul>  <li style=\"font-weight:bold;\">Gender:</li>  <li style=\"font-weight:bold;\">Age:</li>";
		echo "<li style=\"font-weight:bold;\">Type:</li> <li style=\"font-weight:bold;\">OS:</li>";
		echo "<li style=\"font-weight:bold;\">Seek Gender(s):</li>   </ul></div>";
		echo "<div class = \"match-column\">";
		echo "<ul>  <li>".($match[1])."</li>  <li>".$match[2]."</li>";
		echo "<li>".$match[3]."</li> <li>".$match[4]."</li> <li>".$match[7].$match[8]."</li> </ul>";
		echo "</div></div></div>";
		}

	if ( $number != -1){
	echo"<p style=\"padding-left:1em;\"><span style=\"font-weight:bold;\">Matches for " . $_GET["name"] . "</span></p></div>";

	for ($j = 0; $j < count($matches); $j++) {
		printMathces($matches[$j]);
	}

	}else{
		
			print_error("Error No Such User!"," We're sorry. You submitted invalid user information. Please go back and try again.");

	}
	}else{
		print_error();
	}


	?>





	<br>
	<?php	print_footer();?>






</body>
</html>
