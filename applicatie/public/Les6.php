<?php
    $vegetarisch = false;
    $glutenvrij = false;
    if (!$vegetarisch && !$glutenvrij) {
        $eten = 'Burger';
    }
    elseif (!$vegetarisch && $glutenvrij) {
        $eten = 'iets';
    }
    elseif ($vegetarisch && !$glutenvrij) {
        $eten = 'Broodje ei';
    }
    else {
        $eten = 'bietentartaar';
    }

    $cijfers = [5, 9, 3, 5, 6, 10, 2, 4];
    $voldoendes = [];
    $onvoldoendes = [];
    foreach ($cijfers as $cijfer) {
        if ($cijfer >= 5.5) {
            $voldoendes[] = $cijfer;
        }
        else $onvoldoendes[] = $cijfer;
    }

    $myFavorites = [
        'Color' => 'Blue',
        'Band' => 'Nirvana',
        'Course' => 'WTIS'
    ];

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
    <h1>Opdracht 1</h1>
    <?php echo $eten ?>

    <h1>Opdracht 2</h1>
    <?php var_dump($voldoendes);
    var_dump($onvoldoendes);?>

    <h1>Opdracht 2</h1>
    
    
    <h1>Les 6</h1>
    <h1>Opdracht 1<h1>
    <p><?php
    echo isArrayLongerThan();
    ?></p>
</body>
</html>