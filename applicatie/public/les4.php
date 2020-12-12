<?php
  $campert = <<<EOD
  Verzet begint niet met grote woorden
  maar met kleine daden

  zoals storm met zacht geritsel in de tuin
  of de kat die de kolder in zijn kop krijgt

  zoals brede rivieren
  met een kleine bron
  verscholen in het woud

  zoals een vuurzee
  met dezelfde lucifer
  die een sigaret aansteekt

  zoals liefde met een blik
  een aanraking iets wat je opvalt in een stem

  jezelf een vraag stellen
  daarmee begint verzet

  en dan die vraag aan een ander stellen.
  EOD;  

  // We declareren en initialiseren een aantal variabelen.
  $naam = 'Hogeschool van Arnhem en Nijmegen';
  $plaats = 'Arnhem';
  $adres = 'Ruitenberglaan 31';   //string
  $postcode = '6826 CC';          //string
  $geslacht = 'm';                //char
  $isStudent = 'False';           //boolean
  $leeftijd = '20';               //int
  $html = "$naam<br>$adres<br>$postcode $plaats";
  function printOutStringAndLength($input) {
    echo "<h1>".$input."</h1>";
    echo "<em>Deze string is ".strlen($input)." tekens lang</em>";
  }
  function last3Characters($string) {
    echo substr($string, strlen($string)-3, 3);
  }
  
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
    <p><?php echo "meneer x is $leeftijd jaars oud"?></p>
    <p><?php printOutStringAndLength($campert)?></p>
    <p><?php last3Characters($naam)?></p>
    
  </body>
</html>