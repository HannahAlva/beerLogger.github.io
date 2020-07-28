<?php

$dbServerName   = "localhost";
$dbUserName     = "root";
$dbpassword     = ""; # this means 'no password'
$dbName         = "beerlogger";

#this is the variable that will give access to the database 'beerlogger'
$connection     = mysqli_connect($dbServerName, $dbUserName, $dbpassword, $dbName);

?>
