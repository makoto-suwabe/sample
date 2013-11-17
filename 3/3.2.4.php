<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>CAPiTA009</title>
</head>
<body>

<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'On');

// エラー制御演算子
$var = $_GET['aaa'];
$foo = @$_GET['bbb'];
var_dump($var);
echo "<br />", PHP_EOL;
var_dump($foo);
echo "<br />", PHP_EOL;

// 実行演算子
$result1 = `hostname`;
var_dump($result1);
echo "<br />", PHP_EOL;
$result2 = shell_exec('uname -a');
var_dump($result2);
echo "<br />", PHP_EOL;

?>

</body>
</html>
