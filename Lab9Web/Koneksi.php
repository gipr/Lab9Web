<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "Latihan1";
$conn = mysql_connect($host, $user, $pass, $db);

if ($conn == false)
{
	echo "Connection Failed";
	die();
	}
else
{
	echo "Connection Good";
}