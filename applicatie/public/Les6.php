<?php
    function isArrayLongerThan($inputArray, $comparison) {
        if (count($inputArray) > $comparison) {
            return true;
        }
        else return false;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Voorbereiding Les 6</h1>
    <h1>Les 6</h1>
    
    <h1>Opdracht 1<h1>
    <p><?php
    echo isArrayLongerThan($huis["slaapkamer"], 7);
    echo isArrayLongerThan($huis["woonkamer"], 6);
    echo isArrayLongerThan($huis["keuken"], 5);
    ?></p>
</body>
</html>