<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use DateTime;

/**
 * @ORM\Entity
 */
class Reservation {


    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id;

    /** 
     * @ORM\Column(name="numReservation", type="integer") 
    */
    private int $numReservation;

    /** 
     * @ORM\Column(name="prix", type="float") 
    */
    private float $prix;

    /**
     * @ORm\Column(length="8", name="dateReservation")
     */
    private DateTime $dateReservation;

    /**
     * @ORM\ManyToOne(targetEntity="Passager") //plusieurs pour 1, plusieurs emprunt peuvent avoir 1 seul et meme membre
     * @ORM\JoinColumn(name="passager_id", referencedColumnName="id") //précise le nom de la colonne de ref avec laquelle on fait la relation
     */
    private Passager $passager;

    /**
     * @ORM\ManyToOne(targetEntity="Client") //plusieurs pour 1, plusieurs emprunt peuvent avoir 1 seul et meme membre
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id") //précise le nom de la colonne de ref avec laquelle on fait la relation
     */
    private Client $client;

    /** 
     * @ORM\Column(name="bagages", type="float") 
    */
    private bool $bagages;

    public function __construct(int $numReservation, int $prix, DateTime $dateReservation, Passager $passager, Client $client)
    {
        $this->numReservation = $numReservation;
        $this->prix = $prix;
        $this->dateReservation = $dateReservation;

        $this->client = $client;
        $this->passager = $passager;

    }


    /**
     * Get the value of numReservation
     */ 
    public function getNumReservation() : int
    {
        return $this->numReservation;
    }

    /**
     * Set the value of numReservation
     *
     * @return  self
     */ 
    public function setNumReservation(int $numReservation)
    {
        $this->numReservation = $numReservation;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix() : float
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix(float $prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of dateReservation
     */ 
    public function getDateReservation() : DateTime
    {
        return $this->dateReservation;
    }

    /**
     * Set the value of dateReservation
     *
     * @return  self
     */ 
    public function setDateReservation(DateTime $dateReservation)
    {
        $this->dateReservation = $dateReservation;

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