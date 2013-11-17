<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>CAPiTA009</title>
</head>
<body>

<?php

//error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'On');

echo 'テストプログラム開始', "<br />", PHP_EOL;

//Errors will be printed on the screen with the following line
error_reporting(E_STRICT);

function change (&$var) {
  $var += 10;
}

$var = 1;
change(++$var);
echo "var=$var", "<br />", PHP_EOL;
change($var = 5);
echo "var=$var", "<br />", PHP_EOL;

echo 'テストプログラム終了', "<br />", PHP_EOL;

?>

</body>
</html>
