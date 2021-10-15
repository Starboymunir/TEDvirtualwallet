<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_db";
$dbport = 3308;

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport))
{
    die("failed to connect");
}
