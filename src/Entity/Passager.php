<?php

namespace App\Entity;

use App\Traits\Nationalite;
use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass 
 * @ORM\Table(name="Passager",uniqueConstraints={@ORM\UniqueConstraint(name="search_idx", columns={"numPasseport"})})
*/
abstract class Passager {

    use Nationalite;

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

    /** 
     * @ORM\Column(name="prenom", type="string") 
    */
    private string $prenom;

    /** 
     * @ORM\Column(name="numPasseport", type="integer") 
    */
    private int $numPasseport;

    public function __construct(string $nom, string $prenom, int $numPasseport, string $nationalite)
    {
        $this->id = random_int(1, 99999);
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numPasseport = $numPasseport;
        $this->nationalite = $nationalite;
    }

    public function reserverBillet(Reservation $numReservation)
    {
        
    }

    public function annulerBillet()
    {
        # code...
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
    public function getNom() :string
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

    /**
     * Get the value of prenom
     */ 
    public function getPrenom() : string
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of numPasseport
     */ 
    public function getNumPasseport() : int
    {
        return $this->numPasseport;
    }

    /**
     * Set the value of numPasseport
     *
     * @return  self
     */ 
    public function setNumPasseport(int $numPasseport)
    {
        $this->numPasseport = $numPasseport;

        return $this;
    }
}