<?php
  /*
  Hier wordt voorbereidend werk gedaan.
  De resultaten kunnen dan vervolgens met eenvoudige stukken PHP-broncode in de HTML geïnjecteerd worden.
  Zo krijgen we zo veel mogelijk scheiding van PHP en HTML-broncode.
  (Zo veel mogelijk scheiding van functionaliteit en presentatie.)
  */

  // We declareren en initialiseren een aantal variabelen.
  $naam = 'Hogeschool van Arnhem en Nijmegen';
  $adres = 'Ruitenberglaan 31';
  $postcode = '6826 CC';
  $plaats = 'Arnhem';
  $html = "$naam<br>$adres<br>$postcode $plaats";
?> 
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kennismaking met PHP - voorbeeld 2</title>
  </head>
  <body>
    <h1>Kennismaking met PHP - voorbeeld 2</h1>
    <h2>HAN adresgegevens</h2>
    <adress>
      <?php echo $html?>
    </address>
    <p><strong>Gebruik de ‘Developer Tools’ om vast te stellen dat alle PHP-broncode omgezet is naar HTML!</strong></p>
  </body>
</html>