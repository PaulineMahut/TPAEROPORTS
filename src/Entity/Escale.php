<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/** 
 * @ORM\Entity 
*/
final class Escale {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id;

    /**
     * @ORM\ManyToOne(targetEntity="Aeroport")
     * @ORM\JoinColumn(name="lieuDepart", referencedColumnName="id")
     */
    private Aeroport $lieuDepart;

    /**
     * @ORM\ManyToOne(targetEntity="Aeroport")
     * @ORM\JoinColumn(name="lieuArrivee", referencedColumnName="id")
     */
    private Aeroport $lieuArrivee;

    public function __construct(Aeroport $lieuDepart, Aeroport $lieuArrivee)
    {
        $this->lieuDepart = $lieuDepart;
        $this->lieuArrivee = $lieuArrivee;
    }

    /**
     * Get the value of lieuDepart
     */ 
    public function getLieuDepart()
    {
        return $this->lieuDepart;
    }

    /**
     * Set the value of lieuDepart
     *
     * @return  self
     */ 
    public function setLieuDepart($lieuDepart) : Escale
    {
        $this->lieuDepart = $lieuDepart;

        return $this;
    }

    /**
     * Get the value of lieuArrivee
     */ 
    public function getLieuArrivee()
    {
        return $this->lieuArrivee;
    }

    /**
     * Set the value of lieuArrivee
     *
     * @return  self
     */ 
    public function setLieuArrivee($lieuArrivee) : Escale
    {
        $this->lieuArrivee = $lieuArrivee;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
}