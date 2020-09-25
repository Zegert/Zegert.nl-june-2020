<?php
require_once './Includes/config.php';
$username = $_POST['inputUsername'];
$password = $_POST['inputPassword'];
$recaptcha = $_POST['g-recaptcha-response'];
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($mysqli, $username);
$password = mysqli_real_escape_string($mysqli, $password);
$res = reCaptcha($recaptcha);
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE username = '$username'")
    or die("failed to query database.");
$row = mysqli_fetch_array($result);
if (password_verify($password, $row['password'])) {
            $_SESSION['ID'] = $row['ID'];
            $_SESSION['rang'] = $row['rang'];
            if($res['succes']){
                if ($_SESSION['rang'] >= 1) {
                    echo "Ingelogd, maar er is een fout met de doorlinking.";
                    header("Location: admin.php");
                }else{
                    echo "Geen rang toegekend.";
                }
            }else{
                echo "Je bent een bot...";
            }
        }else{
            echo "Login failed. <br>";
            header("Location: index.php");
        }
?>