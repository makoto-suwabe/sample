<?php
$mysql = mysql_connect('localhost', 'test', 'test');
var_dump(get_resource_type($mysql));
