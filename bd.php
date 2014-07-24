<?php

$hostname = "172.16.42.16";
$database = "Agromotes";
$username = "richy";
$password = "Contr@";

$login = mysql_connect($hostname, $username, $password) or die ("sin conexion");
mysql_select_db($database);

?>
