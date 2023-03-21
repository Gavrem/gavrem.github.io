<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"

<html>
<head>
<meta charset="utf-8">
<title>Common PHP</title>
<link href="nerdluv.css" rel="stylesheet">
</head>
<body>
<?php 
function print_header(){
	echo "<div class = \"header\">";
	if (file_exists("../../IMG/nerdluv.png")) {
			echo "<img src=\"../../IMG/nerdluv.png\" alt=\"Logo\" width=\"200\" </div> <br>  ";

	} else {
			echo "<img src=\"../../../IMG/nerdluv.png\" alt=\"Logo\" width=\"200\" </div> <br>  ";

	}

 echo "<!--I have complited all thre extra features :1)validation 2)User photo 3) LGBT matches: -->";

}

?>

<?php 
function print_footer(){
	echo "<div class= \"footer\">";
	echo "<p> This page is for singles nerds to meet and date each other!";
	echo "Type in your personal information and wait for the nerdly luv to begin!</p>";
	echo "<p style=\"margin-top:-15px;\">Thank you for using our site.</p>";
	echo "<p>Results and page (C) Copyright NerdLuv Inc.</p>";
	echo "<div class = \"bottom\">";
	echo "<div class = \"bottom-back\">";

	echo "<a href=\"index.php\">";
	echo "<div class = \"line\">";
	
		if (file_exists("../../IMG/back-arrow.png")) {
		echo "<div class=\"line-img\"><img src=\"../../IMG/back-arrow.png\" alt=\"back to page\"  width = \"32px\"/> </div>";	

	} else {
		echo "<div class=\"line-img\"><img src=\"../../../IMG/back-arrow.png\" alt=\"back to page\"  width = \"32px\"/ > </div>";	

	}

	echo "<div class= \"line-link\">Back to front page</div></div></a></div> </div>";
	
	echo "<div class = \"bottom-front\">";
	
		if (file_exists("../../IMG/back-arrow.png")) {
			echo "<a href=\"loginScripts/login.php\">";
		echo "<div class = \"line\"> <div class= \"line-link\">Back to login page</div>";

		echo "<div class=\"line-img\"><img src=\"../../IMG/back-arrow.png\" alt=\"back to page\" ";
		echo "width = \"32px\"/ style=\"transform: rotate(180deg); margin-left:5px;\"> </div>";	

	} else {
			echo "<a href=\"logout.php\">";
			echo "<div class = \"line\"> <div class= \"line-link\"> Logout </div>";
		echo "<div class=\"line-img\" ><img src=\"../../../IMG/back-arrow.png\" alt=\"back to page\"  width = \"32px\"/ ";
		echo "style=\"transform: rotate(180deg); margin-left:5px;\"> </div>";	

	}

	echo "</div></a></div> </div> </div>";
		echo "<div style= \"float:right; margin-right:400px; margin-top:-60px;\"><p><a href=\"http://jigsaw.w3.org/css-validator/check/referer\">";
		
		if (file_exists("../../IMG/vcss.png")) {
		
			echo "<img style=\"border:0;width:88px;height:31px;\" src=\"../../IMG/vcss.png\"  alt=\"Valid CSS!\" />     </a> </p>  </div>";
		}else{
			echo "<img style=\"border:0;width:88px;height:31px;\"  src=\"../../../IMG/vcss.png\"  alt=\"Valid CSS!\" />     </a> </p>  </div>";

			
		}

}

	

?>


<?php 
function print_error($error_name = " Error Invalid data!",$error_response = " We're sorry.
 You submitted invalid user information. Please go back and try again."){
	echo "<div class = \"main\">";
	echo "<p><span style=\"font-weight:bold;\"> $error_name</span></p>";
	echo "<p> $error_response </p></div><br>";

}

?>



</body>
</html>