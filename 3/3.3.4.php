<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>CAPiTA009</title>
</head>
<body>

<?php
$fruits = array(
	'apple' => array(
		'price' => 100,
		'count' => 2,
	),
	'banana' => array(
		'price' => 80,
		'count' => 5,
	),
	'orange' => array(
		'price' => 90,
		'count' => 3,
	),
);

foreach ($fruits as $name => $value) {
	echo "$name は1つ{$value['price']}円で、{$value['count']}個です<br />", PHP_EOL;
}
?>

</body>
</html>
