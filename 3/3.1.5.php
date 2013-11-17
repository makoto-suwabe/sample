<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>CAPiTA009</title>
</head>
<body>

<?php
$boolean1 = true;
$boolean2 = (bool)1;

var_dump($boolean1);
var_dump($boolean2);

$boolean3 = false;
$boolean4 = (bool)0;
$boolean5 = (bool)0.0;
$boolean6 = (bool)"";
$boolean7 = (bool)"0";
$arr = array();
$boolean8 = (bool)$arr;
$boolean9 = (bool)$booltest;

var_dump($boolean3);
var_dump($boolean4);
var_dump($boolean5);
var_dump($boolean6);
var_dump($boolean7);
var_dump($boolean8);
var_dump($boolean9);
?>

</body>
</html>
