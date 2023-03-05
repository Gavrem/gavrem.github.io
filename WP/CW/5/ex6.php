<!DOCTYPE html>
<HTML lang="en">
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<TITLE>CW4 #5 Exercise 6 </TITLE>


</HEAD>

<BODY>
	<head>
	<title>Exercise 6</title>
	</head>
	<body>
	<div>
	<?php
	
	function remove_all($word,$letter){
		$newText = '';
		for($i=0;$i < strlen($word);$i++){
			if($word[$i]!= $letter){
				$newText .= $word[$i];
		}
	 }
	 return $newText;
	}
	$text = "Summer is here!";
	echo remove_all($text, 'e');
	
	?>
	</div>
	</body>
	</html>

</BODY>
</HTML>
