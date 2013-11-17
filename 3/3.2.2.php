<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>CAPiTA009</title>
</head>
<body>

<?php
$param = isset($argv[1]) ? $argv[1] : 'default';

/* -- 上記と全く同じロジックをif構文を用いて表現
if (isset($argv[1])) {
	$param = $argv[1];
} else {
	$param = 'default';
}
 */

echo $param, "<br />", PHP_EOL;

// 三項演算子の省略記法
function some_func($a) {
	return $a;
}

#$result = some_func($argv[1]) ? some_func($argv[1]) : 'default';
$result = some_func($argv[1]) ?: 'default';
echo $result, "<br />", PHP_EOL;

// 三項演算子の結合規則（左結合）
$flag1 = true;
$flag2 = false;
echo $flag1 ? 1 : $flag2 ? 2 : 0, "<br />", PHP_EOL;
echo $flag1 ? 1 : ($flag2 ? 2 : 0), "<br />", PHP_EOL;
?>

</body>
</html>
