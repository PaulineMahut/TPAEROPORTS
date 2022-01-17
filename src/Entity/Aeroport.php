<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/** 
 * @ORM\Entity
 *  @ORM\Table(name="Aeroport",uniqueConstraints={@ORM\UniqueConstraint(name="search_idx", columns={"nom"})})
 * 
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

    public function __construct(string $nom)
    {
        $this->nom = $nom;

        $this->id = random_int(1,99999);
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