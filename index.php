<?php
include 'class.figuur.php';
include 'class.cilinder.php';
include 'class.vierkant.php';

$cilindertje = new Cilinder(10,5);
$oopp = $cilindertje->berekenOppervlakte();
echo "De oppervlakte van de Cilinder met een hoogte van: " . $cilindertje->getH() . " is " . $oopp;
?>
<br>
<?php
$cilinder2 = new Cilinder(12,9);
$oopp = $cilinder2->berekenOppervlakte();
echo "De oppervlakte van de Cilinder met een hoogte van: " . $cilinder2->getH() . " is " . $oopp;
?>
<br>
<?php
$vierkantje = new Vierkant(5);
$oopp = $vierkantje->berekenOppervlakte();
echo "De oppervlakte van het Vierkant met een lengte/breete van: " . $vierkantje->getX() . " is " . $oopp;
?>
<br>
<?php
$vierkant2 = new Vierkant(8);
$oopp = $vierkant2->berekenOppervlakte();
echo "De oppervlakte van het Vierkant met een lengte/breete van: " . $vierkant2->getX() . " is " . $oopp;
?>
