<?php

  abstract class Figuur {
  static public $PI = 3.1415;
  protected $x;
  protected $y;
  private $omschrijving;

  public function __construct ($Ix, $Iy) {
    $this->setX($Ix);
  }

  public function setX($Ix) {
    if (!is_int($Ix) {
      die("dat gaat niet");
    } else {
      this->x = $Ix;
    }
  }

  public function setY($Iy) {
    if (!is_int($Iy) {
      die("dat gaat niet");
    } else {
      this->y = $Iy;
    }
  }

}
?>
