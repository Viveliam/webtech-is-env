<?php
    require_once "functies.php";
    
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
        else {
            $onvoldoendes[] = $cijfer;
        }
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

    function addToTable($array) {
        $htmlString = "<table>";
        $htmlString .= "<tr>";
        $htmlString .= "<th>".key($array)."</th>";
        $htmlString .= "<th>".key($array)."</th>";
        $htmlString .= "<th>".key($array)."</th>";
        $htmlString .= "</tr><tr>";
        $htmlString .= "<td><?php echo $films[1]['title']?></td>";
        $htmlString .= "<td><?php echo $films[1]['year']?></td>";
        $htmlString .= "<td><?php echo $films[1]['director']?></td>";
        $htmlString .= "</tr>";
        $htmlString .= "</table>";
    }

    $nepDatabase = [
        [
          'title' => 'Mijn vakantiefoto 2019',
          'content' => '<p><img src="http://placehold.it/300/200" alt="Vakantiefoto"></p>'
        ],
        [
          'title' => 'Mijn vakantiefoto 2018',
          'content' => '<p><img src="http://placehold.it/300/200" alt="Vakantiefoto"></p>'
        ],
        [
          'title' => 'Mijn vakantiefoto 2017',
          'content' => '<p><img src="http://placehold.it/300/200" alt="Vakantiefoto"></p>'
        ],
        [
          'title' => 'Mijn vakantiefoto 2016',
          'content' => '<p><img src="http://placehold.it/300/200" alt="Vakantiefoto"></p>'
        ]
      ];
      
    function renderPosts($array) {
        for ($i = 0; $i < count($array); $i++) {
            echo $array[$i]['title'];
            echo $array[$i]['content'];
        }
    }

    $films =
    [
        [
        'title' => 'A Wrinkle In Time',
        'year' => 2018,
        'director' => 'Ava DuVernay',
        'stars' => ['Storm Reid', 'Oprah Winfrey'],
        'imageURL' => 'https://m.media-amazon.com/images/M/MV5BMjMxNjQ5MTI3MV5BMl5BanBnXkFtZTgwMjQ2MTAyNDM@._V1_UX182_CR0,0,182,268_AL_.jpg'
        ],
        [
        'title' => 'Black Panther',
        'year' => 2018,
        'director' => 'Ryan Coogler',
        'stars' => ['Chadwick Boseman', 'Michael B. Jordan'],
        'imageURL' => 'https://m.media-amazon.com/images/M/MV5BMTg1MTY2MjYzNV5BMl5BanBnXkFtZTgwMTc4NTMwNDI@._V1_UX182_CR0,0,182,268_AL_.jpg'
        ],
        [
        'title' => 'Tenet',
        'year' => 2020,
        'director' => 'Christopher Nolan',
        'stars' => ['John David Washington', 'Elizabeth Decki'],
        'imageURL' => 'https://m.media-amazon.com/images/M/MV5BYzg0NGM2NjAtNmIxOC00MDJmLTg5ZmYtYzM0MTE4NWE2NzlhXkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_UX182_CR0,0,182,268_AL_.jpg'
        ],
        [
        'title' => 'Us',
        'year' => 2018,
        'director' => 'Jordan Peele',
        'stars' => ['Lupita Nyong\'o', 'Winston Duke'],
        'imageURL' => 'https://m.media-amazon.com/images/M/MV5BZTliNWJhM2YtNDc1MC00YTk1LWE2MGYtZmE4M2Y5ODdlNzQzXkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_UX182_CR0,0,182,268_AL_.jpg'
        ]
    ];

    function createFilm(string $title, int $year, string $director, array $stars, string $imageURL) : array {
        $nieuweFilm = [
            'title' => $title,
            'year' => $year,
            'director' => $director,
            'stars' => $stars,
            'imageURL' => $imageURL
        ];
        return $nieuweFilm;
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

    <h1>Opdracht 3</h1>
    <?php
    print_r($myFavorites);
    ?>
    
    <h1>Les 6</h1>
    <h1>Opdracht 1<h1>
    <p><?php 
        echo isArrayLongerThan($cijfers, 7)
    ?></p>

    <h1>Opdracht 2</h1>
    <p><?php
        if (isArrayLongerThan($nepDatabase, 3) == True) {
            renderPosts($nepDatabase);
        }
    ?></p>

    <h1>Opdracht 3</h1>
    <?php 
        foreach($films as $film){
            echo enkeleFilmNaarHTML($film);
        }
    ?>

    <h1>Opdracht 4</h1> 
    <?php 
        $films[] = createFilm('titel', 2020, 'regisseur', ['ster1', 'ster2'], 'http://placehold.it/300/200');
        var_dump($films);
    ?>
</body>
</html>