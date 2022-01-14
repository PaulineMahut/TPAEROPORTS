<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/** 
 * @ORM\Entity 
*/
class Client extends Passager {

    /**
     * @ORM\Column(name="userCompte", type="int")
     */
    private int $userCompte;

    public function __construct(int $id, string $nom, string $prenom, int $numPasseport, int $userCompte)
    {
        parent::__construct($id, $nom, $prenom, $numPasseport, $userCompte);

        $this->userCompte = $userCompte;
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