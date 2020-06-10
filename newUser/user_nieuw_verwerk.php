<?php
require_once ('../Includes/config.php');
$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$rang = $_POST['rang'];
$sql = "INSERT INTO `users`(`ID`, `username`, `password`, `rang`) 
    VALUES ('' , '$username' , '$password' , '$rang')";
if (mysqli_query($mysqli , $sql)){
    echo "toegevoegd!";
    header("Location:../index.php");
}else{
    echo "error";
}
?>