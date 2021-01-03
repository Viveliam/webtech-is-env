<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>les05-demo: formulieren</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/les05_formulieren.css" />
  </head>

  <body>
    <header>
      <h1>Fruitverkoop</h1>
    </header>

    <main>
      <h2>Aanmelden</h2>
      <p>Meld je aan om <em>fruit</em> te kopen!</p>

      <form method="POST" action="register.php">
        <div class="form-field">
          <label for="username">Gebruikersnaam</label>
          <input
            required
            pattern="[a-zA-Z0-9]+"
            title="Een gebruikersnaam mag alleen bestaan uit alphanumerieke waarden"
            type="text"
            name="username"
            id="username"
          />
        </div>

        <div class="form-field">
          <label for="firstname">Voornaam</label>
          <input required type="text" name="firstname" id="firstname" />
        </div>

        <div class="form-field">
          <label for="lastname">Achternaam</label>
          <input required type="text" name="lastname" id="lastname" />
        </div>

        <div class="form-field">
          <label for="email">Email</label>
          <input required type="email" name="email" id="email" />
        </div>

        <div class="form-field">
          <label for="occupation">Beroep</label>
          <input
            required
            list="occupation-list"
            name="occupation"
            id="occupation"
          />
          <datalist id="occupation-list">
            <option value="Student"></option>
            <option value="Docent"></option>
            <option value="Developer"></option>
            <option value="Designer"></option>
            <option value="Manager"></option>
          </datalist>
        </div>

        <div class="form-field">
          <label for="gender">Geslacht</label>
          <select required name="gender" id="gender">
            <option value="" default>Maak een keuze</option>
            <option value="female" default>Vrouw</option>
            <option value="male" default>Man</option>
            <option value="non-binary" default>Non-binary</option>
            <option value="other" default>Iets anders</option>
            <option value="rathernot" default>Wil niet zeggen</option>
          </select>
        </div>

        <label for="file">Voortgang formulier: </label>

        <progress id="file" max="100" value="10">10%</progress>

        <input type="submit" value="Meld je nu aan!" />
      </form>
    </main>
    <footer>
      <a href="//han.nl"
        ><img
          src="https://www.han.nl/lib/v3/images/han_university.svg"
          alt="logo van de HAN"
          title="HAN"
      /></a>
      &copy; 2020
    </footer>
  </body>
</html>
