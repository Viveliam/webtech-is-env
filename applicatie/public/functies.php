<?php
function minutenNaarUur($minuten) {
    $minutenOver = $minuten % 60; 
    $uur = intval($minuten / 60);
    $string = $uur.":".$minutenOver;
    return $string;
}
?>