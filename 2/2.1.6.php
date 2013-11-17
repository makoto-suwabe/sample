<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>CAPiTA009</title>
</head>
<body>

<?php
$a = 1;
$b = "foo bar";
$c = array(1, 2, 3);

var_dump($a);	// 整数

var_dump($b);	// 文字列は、文字列の長さとその中身が出力される

var_dump($c);	// 配列は、要素数、キー、値が出力される

var_dump($a == $b)	// 演算の評価値
?>

</body>
</html>
