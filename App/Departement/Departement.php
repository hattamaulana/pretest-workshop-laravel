<?php

namespace App\Departement;

class Departement {
  private $name;

  public function setDepartementName($name) {
    $this->name = $name;
  }

  public function getDepartementName() {
    return $this->name;
  }
}
