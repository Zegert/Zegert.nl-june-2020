<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');

//Inloggegevens van en naar de database
$DB_hostname = "localhost";
$DB_username = "adminroot";
$DB_password = "Qsfl48Qbb4yKpL1g";
$DB_database = "zegert";

//de query om te connecten naar de database
$mysqli = mysqli_connect($DB_hostname, $DB_username, $DB_password, $DB_database);

//Fout afvanger, geeft weer als de connectie niet goed is
if (!$mysqli) {
    echo "Fout, geen connectie naar de database.";
    error_log("Error", 1, "Includes/error.log");
}

?>