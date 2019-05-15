<?php

namespace App;

use App\Company\Company;
use App\Employee\Employee;
use App\Departement\Departement;

class App {
  public static function main() {
    $company = new Company();
    $employee = new Employee();
    $departement = new Departement();

    $company->setCompanyName('PT. Halintar Jawa, Tbk');
    $employee->setEmployeeName('Mahatta Maulana');
    $employee->setEmployeeTitle('Manager');
    $departement->setDepartementName('Customer Service');

    echo "Perusahaan  : ". $company->getCompanyName(). '<br>';
    echo "Departement : ". $departement->getDepartementName() . '<br>';
    $employee->getEmployeeProfile();
    echo "Gaji : Rp ". $employee->getEmployeeMonthlySalary(50000). '<br>';
  }
}
