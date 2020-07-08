<?php

class Cilinder extends Figuur {

  public function __construct($Ih, $Ir) {
  parent::__construct($Ih, $Ir);
  }

  public function getH() {
  }

  public function berekenOppervlakte() {
    $opp =
     (2 * $PI * $this->y * $this->y) + (2 * $PI * $this->y * $this->x);

    return $opp;
  }
}
?>
