<?php
require_once("./Includes/config.php");
session_destroy();
header("location:index.php");
echo "uitgelogd.";
?>