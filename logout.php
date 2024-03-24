<?php
    session_start();
    $_SESSION["utilizator_autentificat"] = false;
    $_SESSION["id_utilizator"] = 0;
    header("Location: index.php");
    exit();
?>