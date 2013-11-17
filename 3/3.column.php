<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>CAPiTA009</title>
</head>
<body>

<?php
$array = array(
	'hoge' => 1,
	'fuga' => 2,
);

var_dump(array_key_exists('hoge', $array));
var_dump(isset($array['hoge']));
?>

</body>
</html>
