<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>CAPiTA009</title>
</head>
<body>

<?php
var_dump($_SERVER);
/*
foreach ($_SERVER as $i) {
	echo $i, "<br />", PHP_EOL;
}
 */
?>

<?php
echo htmlspecialchars($_GET['name'], ENT_QUOTES);
?>

</body>
</html>
