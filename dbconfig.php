<?php

$DB_host = "your-server-name"; //i have removed my credentials for privacy reasons
$DB_user = "username";
$DB_pass = "password";
$DB_name = "database name";

try
{
	$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
include_once 'class.crud.php';
$crud = new crud($DB_con);
?>
