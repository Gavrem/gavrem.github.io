<!DOCTYPE html>
<HTML lang="en">
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<TITLE>CW4 #5 Exercise 3 </TITLE>


</HEAD>

<BODY>
	<head>
	<title>Exercise 3</title>
	</head>
	<body>
	<div>
	<?php
	
	function triangle($n) {
		for($i=1; $i<=$n; $i++){
			for($j=1; $j<=$i; $j++){
				echo ' * ';
			}
			echo "<br>";
		}
	}
	triangle(15);

	?>
	</div>
	</body>
	</html>

</BODY>
</HTML>
