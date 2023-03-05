<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <title>Form Data</title>
  		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php
if (empty($_POST["name"]) || empty($_POST["surname"]) || empty($_POST["account_type"])|| empty($_POST["creditcard"])|| empty($_POST["credit_type"])) {
    echo "You did not fill the form completely. <a href = \"buyagrade.html\"> <span class=\"again\" >Try again?</span></a>";    
} else {  
    
echo "<h1>Thanks, Sucker!</h1>";

echo "<!-- Extract each form item from posted data -->";
echo "<p>Your information has been recorded.</p>";
echo "<p>Name: <dd>"; print $_POST["name"]; echo"</p></dd>";
echo "<p>Surname: <dd>"; print $_POST["surname"]; echo "</p></dd>";
echo "<p>Account type:<dd>";  print $_POST["account_type"]; echo"</p></dd>";
echo "<p>Creditcard: <dd>"; print $_POST["creditcard"]." (".$_POST["credit_type"]; echo")</p></dd>";

echo "<!-- Run thru all elements of the array of posted data -->";
echo"<p>Here are all the suckers who have submitted here:</p>";

if(isset($_POST['name'])){
$Name = $_POST['name'].";";
$Name = $Name.$_POST['surname'].";";
$Name = $Name.$_POST['account_type'].";";
$Name = $Name.$_POST['creditcard'].";";
$Name = $Name.$_POST['credit_type'].";<br>";

$file=fopen("sucker.html", "a");
fwrite($file, $Name);
fclose($file);
}
echo "<pre>";include 'sucker.html'; echo "</pre>";

}

?>
</body>
</html>