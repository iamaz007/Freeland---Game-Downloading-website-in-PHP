<?php
/*** mysql hostname ***/
$db_hostname = 'localhost';

/*** mysql database name ***/
$db_dbname   = 'id6971474_az';

/*** mysql username ***/
$db_username = 'id6971474_freelandpk';

/*** mysql password ***/
$db_password = 'abdullah007';

/*** mysql database charset ***/
$db_charset = 'utf8';

/***
$dsn = "mysql:host=$db_hostname;dbname=$db_dbname;charset=$db_charset";

$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$dbh = new PDO($dsn, $user, $pass, $opt); ***/

try {
    $dbh = new PDO("mysql:host=$db_hostname;dbname=id6971474_az", $db_username, $db_password);
    /*** echo a message saying we have connected ***/
    // echo 'Connected to database! </br>';


    }
catch(PDOException $e)
    {
    echo "Error!:". $e->getMessage() . "<br/>";
    die();
    }
 ?>