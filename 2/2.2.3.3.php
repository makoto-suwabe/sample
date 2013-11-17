<?php

error_reporting(E_ALL | E_STRICT);
ini_set('disply_errors', 'On');

$foo = 1;

function some_function() {
	global $foo;
	$bar = 20;

	echo $foo, PHP_EOL;
	echo $bar, PHP_EOL;
}

$foo = 100;
some_function();

echo $foo, PHP_EOL;
echo $bar, PHP_EOL;
