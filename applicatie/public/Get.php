<?php
  session_start();
  var_dump($_GET);

  if (isset($_GET['naam'])) {
    echo "{$_GET['naam']} <br>";
  };
  if (isset($_GET['naam'])) {
    echo "{$_GET['mail']} <br>";
  };
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Eenvoudig formulier</title>
</head>
<body>
  <form method="post" action="aanmelden.php">
    <div>
      <label for="naam">Naam</label>
      <input type="text" name= "naam" id="naam">
    </div>
    <div>
      <label for="mail">E-mail</label>
      <input type="email" name= "mail" id="mail">
    </div>
    <input type="hidden" name="oorsprong" value="get">
    <input type="submit" value="Versturen">
  </form>
</body>
</html>