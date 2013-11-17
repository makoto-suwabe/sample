<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>CAPiTA009</title>
</head>
<body>

<?php
$var     = 1;
$VAR     = 2;
$var3    = 3;
$_var    = 4;
$var_var = 5;
#$2var    = 6;	// 数字が先頭にきてはいけません

$var_null = null;

var_dump(isset($var));
var_dump(isset($var1));
var_dump(isset($var_null));
?>

</body>
</html>
