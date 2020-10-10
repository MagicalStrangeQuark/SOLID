<?php

namespace App\SRP;

class EmployeSalaryCalculator
{
    public function calc(\App\SRP\Employe $employe): float
    {
        if ($employe->getCargo() === \App\SRP\Occupation::DEVELOPER) {
            return (new \App\SRP\DezOuVintePorCento())->calc($employe);
        }

        if ($employe->getCargo() === \App\SRP\Occupation::DBA || $employe->getCargo() === \App\SRP\Occupation::TESTER) {
            return (new \App\SRP\QuinzeOuVinteCincoPorCento())->calc($employe);
        }

        throw new \RuntimeException("Invalid Employe");
    }
}
