<?php
  $campert = <<<EOD
  Verzet begint niet met grote woorden<br>
  maar met kleine daden<br>
  <br>
  zoals storm met zacht geritsel in de tuin<br>
  of de kat die de kolder in zijn kop krijgt<br>
  <br>
  zoals brede rivieren<br>
  met een kleine bron<br>
  verscholen in het woud<br>
  <br>
  zoals een vuurzee<br>
  met dezelfde lucifer<br>
  die een sigaret aansteekt<br>
  <br>
  zoals liefde met een blik<br>
  een aanraking iets wat je opvalt in een stem<br>
  <br>
  jezelf een vraag stellen<br>
  daarmee begint verzet<br>
  <br>
  en dan die vraag aan een ander stellen.<br>
  EOD;  

  // We declareren en initialiseren een aantal variabelen.
  $naam = 'Hogeschool van Arnhem en Nijmegen';
  $plaats = 'Arnhem';
  $adres = 'Ruitenberglaan 31';   //string
  $postcode = '6826 CC';          //string
  $geslacht = 'm';                //string
  $isStudent = False;             //boolean
  $leeftijd = 20;                 //int

  $html = "$naam<br>$adres<br>$postcode $plaats";

  function printOutStringAndLength($input) {
    echo "<h1>".$input." <em>Deze string is ".strlen($input)." tekens lang</em></h1>";
  }

  function last3Characters($string) {
    echo substr($string, strlen($string)-3);
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