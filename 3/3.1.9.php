<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>CAPiTA009</title>
</head>
<body>

<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'On');

function no_return_func(){
}

$null_value = no_return_func();
var_dump($null_value);

$var = 1;
var_dump(isset($var));
$var = null;
var_dump(isset($var));
var_dump($var);
unset($var);
var_dump(isset($var));
var_dump($var);
?>

</body>
</html>
