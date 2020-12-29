<?php
session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['logged_in'] = True;
header('Location: /7-4.php');
?>