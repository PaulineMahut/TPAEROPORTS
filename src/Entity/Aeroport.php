<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/** 
 * @ORM\Entity 
*/
final class Aeroport {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id;

    /**
     * @ORM\Column(name="nom", type="string")
     */
    private string $nom;

    public function __construct(int $id, string $nom)
    {
        $this->id = $id;
        $this->nom = $nom;
    }

    /**
     * Get the value of id
     */ 
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom() : string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }
}