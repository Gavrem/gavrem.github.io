<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
<html>
<head>
<meta charset="utf-8">
<title>Welcome to Nerdluv</title>
<link href="nerdluv.css" rel="stylesheet">
</head>
<body>
<?php

    require ('common.php');

	print_header();

?>


<div class = "main">
<p><span style="font-weight:bold;">Welcome!</span></p>

<a href="singup.php"><div class = "line">
<div class="line-img"><img src="../../IMG/singup.png" alt="singup"  width = "32px"/> </div>
<div class= "line-link"> Sign up for new account</div>
</div></a>

<a href="matches.php">
<div class = "line">
<div class="line-img"><img src="../../IMG/check.png" alt="check your matches"  width = "32px"/> </div>
<div class= "line-link">Check your mathces</div>

</div></a>


</div>
 


<?php

	print_footer();

?>
</body>
</html>