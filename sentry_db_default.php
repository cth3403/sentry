<?php

$dbhost = "[database host]";
$dbport = "[database port]";
$dbuser = "[database user]";
$dbpass = "[database password]";
$dbase = "[database name]";

$GLOBALS["dbconnect"] = mysqli_connect($dbhost, $dbuser, $dbpass, $dbase, $dbport);

$mysqli = $GLOBALS["dbconnect"];

if (!$mysqli) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

?>