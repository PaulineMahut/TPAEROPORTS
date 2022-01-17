<?php

namespace App\Traits;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
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
}