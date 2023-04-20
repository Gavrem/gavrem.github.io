<?php session_start(); /* Starts the session */
			if ( isset($_SESSION['UserData']['Username'])){
			$msg = "You successfully Loged Out!";
			session_destroy(); /* Destroy started session */
			}else{
				$msg = "You need to Log In before Loging Out!";
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
      <td>
	 <button  type="button" onclick="location.href = 'login.php';" value="login" class="Button3">Log In</button>
	<button  type="button" onclick="location.href = 'signup.php';" value="SignUp" class="Button3">Sign Up</button>

	     </td>
	   <td>    </td>
    </tr>
  </table>
</form>
</div>

</body>
</html>