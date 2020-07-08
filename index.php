<?php
include 'class.figuur.php';
include 'class.cilinder.php';
//include 'class.vierkant.php';

$cilindertje = new Cilinder(10,5);
$oopp = $cilindertje->berekenOppervlakte;
echo "De oppervlakte van de Cilinder met een hoogte van: " . $cilindertje->getH() . " is " . $oopp;


$oopp->setX(123123);
