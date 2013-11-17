<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>CAPiTA009</title>
</head>
<body>

<?php
$int1 = 1;
$int2 = -1;
$int3 = 011;
$int4 = 0xff;
$int5 = PHP_INT_MAX;
$int6 = PHP_INT_MAX + 1;

$int7 = intval("1");
$int8 = (int)"1";

var_dump($int1);
var_dump($int2);
var_dump($int3);
var_dump($int4);
var_dump($int5);
var_dump($int6);

var_dump($int7);
var_dump($int8);
?>

</body>
</html>
