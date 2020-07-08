<?php

class Vierkant extends Figuur {

public function __construct ($Ix) {
    parent::__construct($Ix);
}

public function getX() {
  return $this->x;
}

public function berekenOppervlakte() {
  $opp =
  ($this->x * $this->x);

  return $opp;
  }
}
?>
