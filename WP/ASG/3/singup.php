<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
<html>
<head>
<meta charset="utf-8">
<title>Signup to Nerdluv</title>
<link href="nerdluv.css" rel="stylesheet">
</head>
<body>

<?php

    require ('common.php');

	print_header();

?>

<div class = "main2-top">New User Signup</div>

<div class = "main2">

<form action="singup-submit.php" method="post" enctype="multipart/form-data"> 
<div class = "main2-left">
<ul>
<li>Name:</li>
<li>Gender: </li>
<li>Age:</li>
<li>Personality:</li>
<li>Favorite OS: </li>
<li>Seeking age: </li>
<li>Seek Gender(s): </li>
<li>Photo: </li>

</ul>
<input type="submit" value="Sign Up" class="sub-button"> 

</div>
<div class = "main2-right">
<ul> <li>
<input name="name" type="text" maxlength="16" > </li>

<li><input name="gender" type="radio" value="M"> Male

<input name="gender" type="radio" value="F"> Female</li>


<li><input name="age" type="text" maxlength="2"  size="4"> </li>
 <li><input name="personality" type="text" maxlength="4" size="4">
 <a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">(Don't know your type?)</a></li>
<li>
<select name="system"> 
<option selected> Windows 
<option> Mac 
<option> Linux 
</select> 
</li>

<li> <input name="age-min" type="text" maxlength="2"  size="4" placeholder="min"> to
<input name="age-max" type="text" maxlength="2"  size="4" placeholder="max"></li>
<li>
  <label> <input type="checkbox" name="seek_male" value="M" >      Male</label>
    <label> <input type="checkbox" name="seek_female" value="F" >     Female</label>
</li>
<li>  <input type="file" id="myFile" name="photo" accept="image/jpg"></li>
</ul>
 </div>
</form> 
</div>
<br>
<?php	print_footer();?>

</body>
</html>