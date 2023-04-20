<?php 
	$array = explode("\n", file_get_contents('login.txt'));
		

	for ($x = 0; $x < count($array); $x++) {
		$myString = $array[$x];
		$myArray = explode(',', $myString);
		$logins[$myArray[0]] = $myArray[1];
		}
		if (!isset($logins[ $_POST["Username"]])){
			$previousFileContent = file_get_contents("login.txt");
			$data = $_POST["Username"]. "," .$_POST["Password"]. ",";
			file_put_contents("login.txt", trim($previousFileContent ."\n". $data));
		$msg="<span style='color:green'>You are singed up!</span>";

		}else if (isset($_POST["Username"])){
		$msg="<span style='color:red'>This username exist, please try another username</span>";

		}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sing Up</title>
<link href="css/style.css" rel="stylesheet">
<link rel="icon"        type="image/png"        href="goods.png">

</head>
<body>
<?php

    require ('common.php');

	print_nav();

?> 
<br>
<div id ="center_log">
<form action="" method="post" name="Sign_Up" id="log_form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Sing Up</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input" minlength="4"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input" minlength="4"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>	  <input name="Submit" type="submit" value="Sign Up" class="Button3">
	  <button  type="button" onclick="location.href = 'login.php';" value="Login" class="Button3">Login</button>
	  </td>
	   <td>    </td>
    </tr>
  </table>
</form>
</div>
</body>
</html>