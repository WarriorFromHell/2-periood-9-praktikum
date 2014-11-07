<?php 
session_start();
?>
<?php
$_SESSION["first_name"] = "Markus";
$_SESSION["last_name"] = "J6emets";
$_SESSION["age"] = "20";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> praks 9 </title>


</style>
</head>
<body> 
<?php 
print_r($_SESSION);
?>
<a href="index2.php"> Teine </a>
<?php
/*  $first_name = $_SESSION["first_name"];
echo $_SESSION
?>

<?php
  $_SESSION["first_name"] = "Markus";*/
?>	
</body>
</html>