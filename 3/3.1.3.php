<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>CAPiTA009</title>
</head>
<body>

<?php
$float1 = 1.2;
$float2 = 1.2e3;

$float3 = floatval("1.2");
$float4 = (float)"1.2";
$float5 = doubleval("1.2");
$float6 = (double)"1.2";

var_dump($float1);
var_dump($float2);
var_dump($float3);
var_dump($float4);
var_dump($float5);
var_dump($float6);
?>

</body>
</html>
