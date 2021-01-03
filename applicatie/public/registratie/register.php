<?php
session_start();

$_SESSION['username'] = htmlspecialchars($_POST['username']);
$_SESSION['firstname'] = htmlspecialchars($_POST['firstname']);
$_SESSION['lastname'] = htmlspecialchars($_POST['lastname']);
$_SESSION['email'] = htmlspecialchars($_POST['email']);
$_SESSION['occupation'] = htmlspecialchars($_POST['occupation']);
$_SESSION['gender'] = htmlspecialchars($_POST['gender']);

header('location: gebruiker.php');
?>