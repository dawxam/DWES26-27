<?php
    if (isset($_COOKIE['color'])) {
        setcookie('color', '', time() - 3600, '/');
        unset($_COOKIE['color']);
    }

    header("Location: index.php");
    exit();
?>