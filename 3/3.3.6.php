<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>CAPiTA009</title>
</head>
<body>

<?php
$a = array(
	'a' => 1,
	'b' => 3,
	'c' => 5,
);

$b = array(
	'a' => 1,
	'c' => 5,
	'b' => 3,
);

$c = array(
	'a' => 1,
	'b' => 2,
);

var_dump($a == $b);
var_dump($a === $b);
var_dump($a + $c);
var_dump($c + $a);
?>

</body>
</html>
