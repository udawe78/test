<?php
function connect(
	$host="localhost",
	$user="root",
	$pass="654321",
	$dbname="evstadb")
{
mysql_connect($host, $user, $pass) or die("Connection error");
mysql_select_db($dbname) or die("Select DB error");
mysql_query("set names 'utf8'");
}


?>