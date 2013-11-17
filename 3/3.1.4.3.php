<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>CAPiTA009</title>
</head>
<body>

<?php
$age = 15;

$foo = <<<EOI
ヒアドキュメントでは、このように、
複数行にわたる文章をそのまま表記することができます。

Tom の年齢は "$age" 歳です。
EOI;

var_dump($foo);
echo "<br />", PHP_EOL;
echo "${foo}<br />", PHP_EOL;
?>

</body>
</html>
