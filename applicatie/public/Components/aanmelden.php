<?php
    session_start();

    $_SESSION['naam'] = $_POST['naam'];
    $_SESSION['mail'] = $_POST['mail'];
    if ($_POST['oorsprong'] === 'get') {
        header('Location: /get.php');
    }
?>