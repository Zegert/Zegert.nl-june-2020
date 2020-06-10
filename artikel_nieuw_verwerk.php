<?php

require('./Includes/config.php');

$titel = $_POST['titel'];
$subtitel = $_POST['subtitel'];
$tekst = $_POST['tekst'];
$link = $_POST['link'];

$target_dir = "./Img/";
$fileName = basename($_FILES["file"]["name"]);
$target_file = $target_dir . basename($_FILES["img"]["name"]);
$linkUp = $targetdir . $fileName;
$fileType = pathinfo($linkUp, PATHINFO_EXTENSION);

if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf', 'webp');
    if (in_array($fileType, $allowTypes)) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $linkUp)) {
        }
    }
}
$sql = "INSERT INTO `feed`(`ID`, `Titel`, `Subtitel`, `Tekst`, `Afbeelding`, `Link`) 
    VALUES (,$titel,$subtitel,$linkUp,$tekst,$link)";

if (mysqli_query($mysqli, $sql)) {
    echo "<p>Toegevoegd!</p>";
} else {
    echo "<p>Error</p>";
}
