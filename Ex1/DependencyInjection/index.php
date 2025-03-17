<?php
require_once('Persona.php');

$cartera1 = new Cartera;
$clausCasa1 = new ClausCasa;
$clausCotxe1 = new ClausCotxe;
$targetaMetro1 = new TargetaMetro;

$persona1 = new Persona($cartera1, $clausCasa1, $clausCotxe1, $targetaMetro1);
$persona2 = new Persona($cartera1, $clausCasa1, $clausCotxe1, $targetaMetro1);

$persona1->agafarCartera();
echo $persona1->sortirCasa(). "<br>";

$persona2->agafartot();
echo $persona2->sortirCasa();