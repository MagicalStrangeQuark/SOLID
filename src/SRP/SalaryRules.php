<?php

namespace App\SRP;

interface SalaryRules
{
    public function calc(\App\SRP\Employe $employe);
}
