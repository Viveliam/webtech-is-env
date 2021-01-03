<?php
echo htmlspecialchars($_POST['tekst']);
?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onveilig formulier</title>
    <style>
      form {
        display: flex;
        flex-direction: column;
        width: 400px;
      }
    </style>
  </head>
  <body>
    <form method="post">
      <textarea name="tekst">
        <img src="https://upload.wikimedia.org/wikipedia/commons/9/9c/42227_Traditionele_stadswoning%2C_de_B.jpg" alt="Traditionele stadswoning" />
      </textarea>
      <input type="submit" value="Verstuur">
    </form>
  </body>
</html>