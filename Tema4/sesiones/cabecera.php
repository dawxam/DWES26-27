<?php
    session_start();

    if (!isset($_SESSION['loginusu'])) {
        header("Location: login.php");
        exit();
    }
?>