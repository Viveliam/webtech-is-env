<?php 
require_once 'Components/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Voorbereiding les 8</h1>
    <?php print_r(PDO::getAvailableDrivers()); ?>

    <h1>Les 8</h1>
    <h1><a href="/Components/films.php">films</a></h1>
</body>
</html>