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