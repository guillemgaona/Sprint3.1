<?php
require_once('Tigger.php');

$instance1 = Tigger::getInstance();

$numAleatori = rand(1, 50);
for ($i = 0; $i < $numAleatori; $i++) {
    $instance1->roar(). "<br>";
}


echo $instance1->getCounter();