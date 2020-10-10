<?php

namespace App\SRP;

class QuinzeOuVinteCincoPorCento implements \App\SRP\SalaryRules
{
    public function calc(\App\SRP\Employe $employe): float
    {
        if ($employe->getSalario() > 2000.0) {
            return $employe->getSalario() * 0.75;
        } else {
            return $employe->getSalario() * 0.85;
        }
    }
}
