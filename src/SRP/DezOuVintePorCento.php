<?php

namespace App\SRP;

class DezOuVintePorCento implements \App\SRP\SalaryRules
{
    public function calc(\App\SRP\Employe $employe): float
    {
        if ($employe->getSalario() > 3000.0) {
            return $employe->getSalario() * 0.8;
        } else {
            return $employe->getSalario() * 0.9;
        }
    }
}
