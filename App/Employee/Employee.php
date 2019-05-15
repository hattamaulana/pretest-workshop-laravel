<?php

namespace App\Employee;

class Employee {
  private $name;
  private $title;
  private $salary;

  public function setEmployeeName($name) {
    $this->name = $name;
  }

  public function getEmployeeName() {
    return $this->name;
  }

  public function setEmployeeTitle($title) {
    $this->title = $title;
  }

  public function getEmployeeTitle() {
    return $this->title;
  }

  public function getEmployeeProfile() {
    echo "Nama : ". $this->name. '<br>';
    echo "Title : ". $this->title. '<br>';
  }

  public function getEmployeeMonthlySalary($day) {
    return $day * 30;
  }
}
