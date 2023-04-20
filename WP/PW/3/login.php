<?php session_start(); /* Starts the session */
	$array = explode("\n", file_get_contents('login.txt'));
	

	for ($x = 0; $x < count($array); $x++) {
		$myString = $array[$x];
		$myArray = explode(',', $myString);
		$logins[$myArray[0]] = $myArray[1];
		}
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		/* You can change username and associated password array to your pref*/		

		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';


		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$Username;
			header("location:../3/gameOfLife.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link href="css/style.css" rel="stylesheet">
<link rel="icon"        type="image/png"        href="goods.png">

</head>
<body>
<?php

    require ('common.php');

	print_nav();

?> 
<br>
<div id= "center_log">
<form action="" method="post" name="Login_Form" id= "log_form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" value="Login" class="Button3">
	  		 <button  type="button" onclick="location.href = 'singup.php';" value="Sign Up" class="Button3">Sign Up</button>

	     </td>
	   <td>    </td>
    </tr>
  </table>
</form>
</div>

</body>
</html>