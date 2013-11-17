<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>CAPiTA009</title>
</head>
<body>

<?php
$globals_test = 1;

echo $globals_test, "<br />", PHP_EOL;
echo $GLOBALS['globals_test'], "<br />", PHP_EOL;

echo htmlspecialchars($_GET['name'], ENT_QUOTES);
?>

</body>
</html>
