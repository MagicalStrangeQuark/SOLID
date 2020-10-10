<?php

require_once "vendor/autoload.php";

$employe = new \App\SRP\Employe();

$employe->setCargo(\App\SRP\Occupation::TESTER);
$employe->setSalario(3000);

echo $employe->getCargo();
echo $employe->getSalario();

/**
 * if TESTER and receive 3000, so the salary gets a discount of 75%, remaining 3000 * 0.75 = 2250.
 */
$employeSalaryCalculator = new \App\SRP\EmployeSalaryCalculator();

echo $employeSalaryCalculator->calc($employe);
