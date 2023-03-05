<!DOCTYPE html>
<HTML lang="en">
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<TITLE>CW4 #5 Exercise 4 </TITLE>


</HEAD>

<BODY>
	<head>
	<title>Exercise 4</title>
	</head>
	<body>
	<div>
	<?php
	
	function word_count($word) {
	$wordcount = 1;
	 for($i=0;$i < strlen($word);$i++){
		if($word[$i]==' '){
			$wordcount++;
			while($word[$i]!=' '){
				$i++;
			}
		}
	 }
	 echo	$wordcount;
 }
	
	$word = "hello, how are you?";
	word_count($word);
	

	?>
	</div>
	</body>
	</html>

</BODY>
</HTML>
