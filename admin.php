<?php
require('Includes/config.php');
if (!isset($_SESSION['ID'])) {
        header('Location: index.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <meta charset="utf-8">
	    <meta name="copyright"
		content="Zegert.nl is eigendom van Zegert Boele, u mag niets gebruiken of overnemen van deze site zonder toesteming van de eigenaar.">
	    <meta name="description"
		content="Dit is het digitale portfolio van Zegert Boele">
	    <meta name="keywords" content="Zegert Boele, Zegert, Web, Development, PHP, HTML, CSS, JS">
        <meta name="robots" content="index, follow" />
        <meta http-equiv="expires" content="3600"/>

        <title>Zegert Boele || Webdevelopment</title>
        
        <link rel="stylesheet" href="./CSS/index.css">
    </head>
    <body>
        <a href="logout.php">Uitloggen</a>
        <h2>Nieuw artikel</h2>
        <form action='artikel_nieuw_verwerk.php' method='POST' enctype="multipart/form-data">
        <h5>Titel</h5>
        <textarea cols='70' name='titel' value='titel' maxlength='255' placeholder='titel...'></textarea><br>
        <h5>Subtitel</h5>
        <textarea cols='70' name='subtitel' value='subtitel' maxlength='255' placeholder='subtitel...'></textarea><br>
        <h5>Foto</h5>
        <input type="file" name="img" placeholder="foto" value="img">
        <h5>Tekst</h5>
        <textarea cols='70' name='tekst' value='tekst' maxlength='255' placeholder='tekst...'></textarea><br>
        <h5>Link</h5>
        <textarea cols='70' name='link' value='link' maxlength='255' placeholder='Link...'></textarea><br>
        <input type='submit' value='Verzenden'>
    </form>
    </body>
</html>