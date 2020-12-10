<?php
  include "functies.php";
  $array1 = [1,2,3,4,5,6,7,8,9,10];
  $array2 = array(6,7,8,9,10,11,12,13,14,15);
  $array3 = array_merge($array1, $array2);
  $arrayFilms = [
    [
      "title" => "A Wrinkle In Time",
      "year" => 2018,
      "director" => "Ava DuVernay",
      "stars" => ["Storm Reid", "Oprah Winfrey"],
      "imageURL" => "https://m.media-amazon.com/images/M/MV5BMjMxNjQ5MTI3MV5BMl5BanBnXkFtZTgwMjQ2MTAyNDM@._V1_UX182_CR0,0,182,268_AL_.jpg"
    ],
    [
      "title" => "Black Panther",
      "year" => 2018,
      "director" => "Ryan Coogler",
      "stars" => ["Chadwick Boseman", "Michael B. Jordan"],
      "imageURL" => "https://m.media-amazon.com/images/M/MV5BMTg1MTY2MjYzNV5BMl5BanBnXkFtZTgwMTc4NTMwNDI@._V1_UX182_CR0,0,182,268_AL_.jpg"
    ],
    [
      "title" => "Tenet",
      "year" => 2020,
      "director" => "Christopher Nolan",
      "stars" => ["John David Washington", "Elizabeth Decki"],
      "imageURL" => "https://m.media-amazon.com/images/M/MV5BYzg0NGM2NjAtNmIxOC00MDJmLTg5ZmYtYzM0MTE4NWE2NzlhXkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_UX182_CR0,0,182,268_AL_.jpg"
    ],
    [
      "title" => "Us",
      "year" => 2018,
      "director" => "Jordan Peele",
      "stars" => ["Lupita Nyong'o ", "Winston Duke"],
      "imageURL" => "https://m.media-amazon.com/images/M/MV5BZTliNWJhM2YtNDc1MC00YTk1LWE2MGYtZmE4M2Y5ODdlNzQzXkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_UX182_CR0,0,182,268_AL_.jpg"
    ]
  ];

  $huis = [
  'slaapkamer' => [0, 0, 1, 0, 1, 0],
  'woonkamer' => [1, 0, 0, 1, 0, 0],
  'keuken' => [0, 0, 0, 1, 0, 0]
  ];
  
  function maakEenElement($filmArray) {

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
  <h1>Voorbereiding Les 5</h1>
  <?php
    var_dump($array1);
    var_dump($array2);
    var_dump($array3);
    echo "<p>Lengte film: ".minutenNaarUur(220)."</p>";
  ?>

  <h1>Les 5</h1>
  <?php var_dump($huis)?>

  <h1>Opdracht 1</h1>
  <table>
    <tr>
      <th>Titel</th>
      <th>jaar</th>
      <th>Regisseur</th>
    </tr>
    <tr>
      <td><?php echo $arrayFilms[1]['title']?></td>
      <td><?php echo $arrayFilms[1]['year']?></td>
      <td><?php echo $arrayFilms[1]['director']?></td>
    </tr>
  </table>
  <?php echo "<img src=".$arrayFilms[1]['imageURL'].">"?>

  <h1>Opdracht 2</h1>
  <?php $arrayTemp = array_slice($arrayFilms, 2, 2, True);
  var_dump($arrayTemp);?>

  <h1>Opdracht 3</h1>

</body>
</html>