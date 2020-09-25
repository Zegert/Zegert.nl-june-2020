<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');

//Inloggegevens van en naar de database
$DB_hostname = "localhost";
$DB_username = "zegert";
$DB_password = "3312Lr2001";
$DB_database = "zegert";

//de query om te connecten naar de database
$mysqli = mysqli_connect($DB_hostname, $DB_username, $DB_password, $DB_database);

//Fout afvanger, geeft weer als de connectie niet goed is
if (!$mysqli) {
    echo "Fout, geen connectie naar de database.";
    error_log("Error", 1, "Includes/error.log");
}
function reCaptcha($recaptcha){
    $secret = "6LdrTdAZAAAAANEP-JCbhwgWsa3BWCsZqLO6e7iM";
    $ip = $_SERVER['REMOTE_ADDR'];
  
    $postvars = array("secret"=>$secret, "response"=>$recaptcha, "remoteip"=>$ip);
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
    $data = curl_exec($ch);
    curl_close($ch);
  
    return json_decode($data, true);
  }

?>