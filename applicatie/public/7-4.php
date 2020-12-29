<?php
// Maak sessie beschikbaar.
session_start();

$html = '';

var_dump($_SESSION);
// Voeg welkomstgroet toe.
if (isset($_SESSION['logged_in']) && isset($_SESSION['username'])) {
    $html = "<h1>Welkom {$_SESSION['username']}</h1>";
    $logged_in = true;
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inlogpagina</title>
</head>
<body>
    <?=$html?>
    <form action="Components/login.php" method="post">
        <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        </div>
        <input type="submit" value="login">
    </form>
    <form action="Components/logout.php" method="post">
        <input type="submit" value="logout">
    </form>
    <?php
    if ($logged_in) {
        require_once 'Components/geheimen.html';
    }
    ?>
</body>
</html>