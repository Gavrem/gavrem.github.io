<!DOCTYPE html>
<HTML lang="en">
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<TITLE>CW4 #5 Exercise 5 </TITLE>


</HEAD>

<BODY>
	<head>
	<title>Exercise 5</title>
	</head>
	<body>
	<div>
	<?php
	$str = "Some example of words occurse multiple time in the same senteces such as this example is has words with multiple times in it. S this an example of the same kinf of some example.";
	$words = explode(' ', $str);
	function wordCount($word){
		$str = "Some example of words occurse multiple time in the same senteces such as this example is has words with multiple times in it. S this an example of the same kinf of some example.";
		$words = explode(' ', $str);
		$count = 0;
		foreach($words as $A1){
			if (strcasecmp($word,$A1) == 0 ){
				$count  = $count +1;
			}
		}
		return $count;
	}
	echo '<pre>'; print_r($words); print_r($count); echo '</pre>';
	
	echo '<pre>'; 	print_r(array_map("wordCount", $words));echo '</pre>';


	

	

	?>
	</div>
	</body>
	</html>

</BODY>
</HTML>
