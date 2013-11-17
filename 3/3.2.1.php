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

// 代入演算子
$a = 10;
echo $a, "<br />", PHP_EOL;
echo $b = 20, "<br />", PHP_EOL;

// 代数演算子
echo 1 + 2, "<br />", PHP_EOL;
echo '1.5' - 2, "<br />", PHP_EOL;
echo true * 2, "<br />", PHP_EOL;
echo 6 / 3, "<br />", PHP_EOL;
#echo 6 / 0, "<br />", PHP_EOL;

// ビット演算子
printf("%064b\n", 15);
printf("%064b\n", 51);
printf("%064b\n", 15 & 51);
printf("%064b\n", 15 | 51);
printf("%064b\n", 15 ^ 51);
printf("%064b\n", ~15);
printf("%064b\n", 15 << 1);
printf("%064b\n", 15 >> 1);

//// 最上位ビットが1の場合
printf("%064b\n", 0xf000000000000000 >> 1);
echo "<br />";

// 文字列演算子
$age = 15;
$tom = 'Tom is ' . $age . ' years old.';
#$bob = 'Bob is ' . 16. ' years old.';

echo $tom, "<br />", PHP_EOL;
#echo $bob, "<br />", PHP_EOL;

// 複合演算子
$c = 30;
$c += 10;
echo $c, "<br />", PHP_EOL;

// 加算子・減算子
$d = 50;
echo $d++, "<br />", PHP_EOL;
echo $d, "<br />", PHP_EOL;
echo ++$d, "<br />", PHP_EOL;
echo $d, "<br />", PHP_EOL;
echo $d--, "<br />", PHP_EOL;
echo $d, "<br />", PHP_EOL;
echo --$d, "<br />", PHP_EOL;
echo $d, "<br />", PHP_EOL;

// 論理演算子
if (isset($argv[1]) && $argv[1]) {
	echo '与えられた引数は真です', "<br />", PHP_EOL;
} else {
	echo '引数が与えられていないか、与えられた引数が真ではありません', "<br />", PHP_EOL;
}

function foo() {
	echo "function foo() を呼びました", "<br />", PHP_EOL;
}

$argv[1] and foo();

// 比較演算子
if ("true" === true) {
	echo "厳密なチェックOK<br />", PHP_EOL;
} elseif ("true" == true) {
	echo "自動キャストによるOK<br />", PHP_EOL;
} else {
	echo "false<br />", PHP_EOL;
}

// 型演算子
class SomeClass
{
}
$e = new SomeClass();

if ($e instanceof SomeClass) {
	echo '$e は SomeClass のインスタンスです<br />', PHP_EOL;
}	

interface FooInterface
{
}

class ParentFoo
{
}

class Foo extends ParentFoo implements FooInterface
{
}

class Bar
{
}

$f = new Foo();
var_dump($f instanceof Foo);
var_dump($f instanceof ParentFoo);
var_dump($f instanceof FooInterface);
var_dump($f instanceof Bar);
?>

</body>
</html>
