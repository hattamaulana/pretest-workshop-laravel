<?php

namespace App\Company;

class Company {
  private $name;

  public function setCompanyName($name) {
    $this->name = $name;
  }

  public function getCompanyName() {
    return $this->name;
  }
}
