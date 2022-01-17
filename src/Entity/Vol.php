<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use DateTime;


/**
 *  @ORM\Entity 
*/
final class Vol {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /** 
     * @ORM\Column(name="nom", type="string") 
    */
    private string $nom;


    /**
     * @ORm\Column(length="10", name="dateDepart", type="datetime")
     */
    private $dateDepart;

    /**
     * @ORm\Column(length="10", name="dateArrivee", type="datetime")
     */
    private $dateArrivee;

    /**
     * @ORM\ManyToOne(targetEntity="Aeroport") //plusieurs pour 1, plusieurs emprunt peuvent avoir 1 seul et meme membre
     * @ORM\JoinColumn(name="lieuDepart_id", referencedColumnName="id") //précise le nom de la colonne de ref avec laquelle on fait la relation
     */
    private Aeroport $lieuDepart;

    /**
     * @ORM\ManyToOne(targetEntity="Aeroport") //plusieurs pour 1, plusieurs emprunt peuvent avoir 1 seul et meme membre
     * @ORM\JoinColumn(name="lieuArrivee_id", referencedColumnName="id") //précise le nom de la colonne de ref avec laquelle on fait la relation
     */
    private Aeroport $lieuArrivee;
    

    public function __construct(string $nom, DateTime $dateDepart, DateTime $dateArrivee, Aeroport $lieuDepart, Aeroport $lieuArrivee)
    {
        $this->id = random_int(1, 99999);
        $this->nom = $nom;

        $this->lieuDepart = $lieuDepart;
        $this->lieuArrivee = $lieuArrivee;

        $this->dateArrivee =  $dateArrivee;
        $this->dateDepart = $dateDepart;
        
    }

    public function ouvrirReservation()
    {
        # code...
    }

    public function fermerReservation() 
    {
        # code...
    }


    /**
     * Get the value of id
     */ 
    public function getId()
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

    /**
     * Get the value of dateDepart
     */ 
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set the value of dateDepart
     *
     * @return  self
     */ 
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    /**
     * Get the value of dateArrivee
     */ 
    public function getDateArrivee() 
    {
        return $this->dateArrivee;
    }

    /**
     * Set the value of dateArrivee
     *
     * @return  self
     */ 
    public function setDateArrivee($dateArrivee)
    {
        $this->dateArrivee = $dateArrivee;

        return $this;
    }
}