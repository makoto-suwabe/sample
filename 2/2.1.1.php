<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>CAPiTA009</title>
</head>
<body>

PHP スクリプトを実行します。<br />

<?php
/*
  サンプルのPHPスクリプトです。
 */

$number = rand();	// 乱数を取得します
if ( $number % 2 == 0 ) {
	echo $number, "は偶数です。<br />", PHP_EOL;
}
else {
	echo $number, "は奇数です。<br />", PHP_EOL;
}
?>

PHP スクリプトを終了します。<br />

</body>
</html>
