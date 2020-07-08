<?php
public function __construct ($Ix) {
  $this->setX($Ix);
}

public function getX() {
}

public function berekenOppervlakte() {
  $opp =
  ($this->X * $this->X);

  return $opp;
}
