
<html>
<head>
<meta charset="utf-8">
<title>Common PHP</title>
<link href="grid.css" type="text/css" rel="stylesheet">
</head>
<body>

<?php 
function print_nav(){
	
 echo "<header><nav>";
	echo "<div class='logo'> <h1 >	
	<img src='goods.png' alt='Logo' width='60' height='60'>
	 Menu </h1> </div>";
	echo "<div class='menu'>";
	echo "	<a href='gameOfLife.php' >Game</a>";
	echo "	<a href='about.php'>About</a>";
	echo " 	<a href='summary.php'>Summary</a>";
	echo "<a href='login.php'>Log In</a>";
	echo " 	<a href='logout.php'>Log Out</a>";
	echo " 	<a href='singup.php'>Sing Up</a>";
	echo "</div></nav></header> ";
}
?>


</body>
</html>
