<?php
    function minutenNaarUur($minuten) {
        $minutenOver = $minuten % 60; 
        $uur = intval($minuten / 60);
        $string = $uur.":".$minutenOver;
        return $string;
    }

    function enkeleFilmNaarHTML($filmArray) {
        $htmlString = "";
        $htmlString .= "<h2>Titel = ".$filmArray['title']."</h2>";
        $htmlString .= "<p>jaartal = ".$filmArray['year']."</p>";
        $htmlString .= "<p>Regisseur = ".$filmArray['director']."</p>";
        $htmlString .= "<p>Acteurs = ". $filmArray['stars'][0].",   ".$filmArray['stars'][1]."</p>";
        $htmlString .= "<img src=".$filmArray['imageURL'].">";
        return $htmlString;
    }
?>