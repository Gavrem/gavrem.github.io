<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"

<html>
<head>
<meta charset="utf-8">
<title>Mathces Nerdluv</title>
<link href="nerdluv.css" rel="stylesheet">
</head>
<body>

<?php
    require ('common.php');
	print_header();
?>

<div class = "main2-top">Returning User:</div>

<div class = "main2">

<form action="matches-submit.php" method="get"> 
<div class = "main2-left">
Name:<p><p>


</div>
<div class = "main2-right">
<input name="name" type="text" maxlength="16" > 
<p> 

 </div>
  <input type="submit" value="View My Mathces" style="clear:both; float:left;"> 

</form> 
</div>
<br>
<?php	print_footer();?>


</body>
</html>