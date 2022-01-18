<?php

namespace App\Entity;

use App\Traits\Nationalite;
use Doctrine\ORM\Mapping as ORM;

/** 
 * @ORM\Entity 
*/
class Client extends Passager {

    use Nationalite;

    /**
     * @ORM\Column(name="userCompte", type="integer")
     */
    private int $userCompte;

    public function __construct(string $nom, string $prenom, int $numPasseport, int $userCompte, string $nationalite)
    {
        parent::__construct($nom, $prenom, $numPasseport, $userCompte, $nationalite);

        $this->userCompte = $userCompte;
        $this->nationalite = $nationalite;
    }


    /**
     * Get the value of userCompte
     */ 
    public function getUserCompte() :int
    {
        return $this->userCompte;
    }

    /**
     * Set the value of userCompte
     *
     * @return  self
     */ 
    public function setUserCompte(int $userCompte)
    {
        $this->userCompte = $userCompte;

        return $this;
    }
}