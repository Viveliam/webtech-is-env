<?php 
require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Voorbereiding les 7</h1>
    <?php print_r(PDO::getAvailableDrivers()); ?>
</body>
</html>