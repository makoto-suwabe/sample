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

$age = 15;

$foo = <<<'EOI'
Nowdoc では、終端識別子をシングルクオートで囲みます。
複数行にわたる文章をそのまま表記することができます。

Tom の年齢は "$age" 歳です。
この $age は展開されず、$age のまま出力されます。
EOI;

class NowDocTest
{
	const DOCUMENT1 = <<<'EOI'
変数やエスケープ文字を展開しないため、文字列がパースされません。
このため、constに指定できます。
EOI;

	const DOCUMENT2 = <<<EOI
PHP 5.3 からは、変数を含まない、または、ドル文字が適切にエスケープ
されていれば、ヒアドキュメントもconstに指定できます。
ドルを含んだ文章は、\$foo のようにドル文字をエスケープします。
EOI;
}

$bar = new NowDocTest();

echo "${foo}<br />", PHP_EOL;
echo $bar::DOCUMENT1, "<br />", PHP_EOL;
echo $bar::DOCUMENT2, "<br />", PHP_EOL;

?>

</body>
</html>
