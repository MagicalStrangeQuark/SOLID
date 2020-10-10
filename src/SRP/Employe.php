<?php

namespace App\SRP;

class Employe
{
    /** @var string */
    private string $cargo;

    /** @var float */
    private float $salario;

    /**
     * @name getSalario
     * 
     * @param void
     * 
     * @return float
     */
    public function getSalario(): float
    {
        return $this->salario;
    }

    /**
     * @name setSalario
     * 
     * @param string
     * 
     * @return Self
     */
    public function setSalario(float $salario): Self
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * @name getCargo
     * 
     * @param void
     * 
     * @return string
     */
    public function getCargo(): string
    {
        return $this->cargo;
    }

    /**
     * @name setCargo
     * 
     * @param string
     * 
     * @return Self
     */
    public function setCargo(string $cargo): Self
    {
        $this->cargo = $cargo;

        return $this;
    }
}
