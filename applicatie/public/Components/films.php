<?php
require_once 'connection.php';
require_once 'functies.php';
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
$html = "";

function haalAlleFilmsOp($dbh): array {
    $sth = $dbh->prepare("SELECT TOP 100 Title, Publication_year FROM Movie");
    $sth->execute();
    $data = $sth->fetchAll();
    return $data;
}
$data = haalAlleFilmsOp($dbh);
foreach($data as $rij){
    $films[] = createFilm($rij['Title'], $rij['Publication_year'], 'regisseur', ['ster1', 'ster2'],  'http://placehold.it/300/200');
}
foreach($films as $film){
    $html .= enkeleFilmNaarHTML($film);
}
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alle films</title>
    </head>
    <body>
        <?php 
            echo $html;
        ?>
    </body>
</html>