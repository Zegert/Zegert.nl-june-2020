<?php
require_once "./Includes/config.php";
$result = mysqli_query($mysqli, "SELECT * FROM feed ORDER BY ID DESC");
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <?php
        include_once("./Includes/meta.php");
    ?>
    <script src="https://kit.fontawesome.com/5acde6ec8d.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/index.css">

    <!-- reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body>
    <div class="main_img">
        <a class="top_icon" id="icon1" href="https://www.facebook.com/profile.php?id=100006312939679"><i class="fab fa-facebook-f"></i></a>
        <a class="top_icon" id="icon2" href="https://www.linkedin.com/in/zegert-boele-663713177/"><i class="fab fa-linkedin-in"></i></a>
        <a class="top_icon" id="icon3" href="https://www.instagram.com/zegert_/"><i class="fab fa-instagram"></i></a>
        <h1>Zegert Boele</h1>
        <h2>Webdevelopment</h2>
        <div class="scroll-downs">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
        </div>
    </div>
        <?php
            include_once("./Includes/nav.php");
        ?>
        <div id="bg"></div>
        <div id="wrapper">
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "<h2 class='titel'>" . $row['Titel'] . "</h2>";
                echo "<h3 class='subtitel'>" . $row['Subtitel'] . "<h3>";
                echo "<img class='img_artikel' loading='lazy' src='" . $row['Afbeelding'] . "' alt='Afbeelding bij artikel " . $row['Titel'] . "'>";
                echo "<p class='tekst'>" . $row['Tekst'] . "<p>";
                echo "<a class ='link' href='" . $row['Link'] . "'>" . $row['Link'] . "</a>";
                echo "<div class='streep'></div>";
            }
            include_once("./Includes/footer.php");
        ?>
</body>
<script> 

</script>
</html>