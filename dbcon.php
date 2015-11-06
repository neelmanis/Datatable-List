<?php

$dbname="neel_test";
$dbuser="root";
$dbhost="localhost";
$dbpass="";

@$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die("Connection failed");
$db=mysql_select_db("neel_test", $conn) or die("Database not connected");
?>