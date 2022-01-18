<?php

namespace App\Traits;

use Doctrine\ORM\Mapping as ORM;

trait Nationalite
{

    /**
     * @ORM\Column(type="string")
     */
    protected string $nationalite;

    public function Nationalite()
    {
        $this->nationalite;
        return $this;
    }

    /**
     * Get the value of nationalite
     */ 
    public function getNationalite() : string
    {
        return $this->nationalite;
    }

    /**
     * Set the value of nationalite
     *
     * @return  self
     */ 
    public function setNationalite(string $nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }
}