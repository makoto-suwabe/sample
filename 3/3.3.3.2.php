<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>CAPiTA009</title>
</head>
<body>

<?php
$fruits_mixed = array(
	'peach',
	'blueberry',
	'apple' => 'red',
	'banana' => 'yellow',
	'orange' => 'orange',
);

echo $fruits_mixed[1], "<br />", PHP_EOL;
echo $fruits_mixed['banana'], "<br />", PHP_EOL;
?>

</body>
</html>
