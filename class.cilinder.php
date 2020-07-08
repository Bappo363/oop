<?php

class Cilinder extends Figuur {

  public function __construct($Ih, $Ir) {
  parent::__construct($Ih, $Ir);
  }

  public function getH() {
    return $this->x;
  }

  public function getR() {
    return $this->y;
  }

  public function berekenOppervlakte() {
    $opp =
     (2 * self::$PI * $this->getR() * $this->getR()) + (2 * self::$PI * $this->getR() * $this->getH());

    return $opp;
  }
}
?>
