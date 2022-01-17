<?php

namespace App\Controllers;

use DateTime;
use App\Traits\Nationalite;
use App\Entity\Aeroport;
use App\Entity\Client;
use App\Entity\Escale;
use App\Entity\Passager;
use App\Entity\Reservation;
use App\Entity\Vol;
use App\Helpers\EntityManagerHelper as Em;
use App\Models\AbstractRepository;
use Doctrine\ORM\EntityManager;

class AppController
{
    public static function index()
    {
        $entityManager = Em::getEntityManager();

        $CharlesDeGaulle = new Aeroport("Charles De Gaulle", "France");        
        $MarseilleProvence = new Aeroport("Marseille Provence", "France");
        $LyonSaintExupery = new Aeroport("Lyon Saint-Exupéry", "France");
        $LondresHeathrow = new Aeroport("Heathrow", "Londres");


        $passager1 = new Client("DUPONT", "Jean", 563652, 987897987);
        $entityManager->persist($passager1);

        $Paris_Marseille = new Vol("Paris_Marseille", DateTime::createFromFormat('j-M-Y', '25-Dec-2021'), DateTime::createFromFormat('j-M-Y', '25-Dec-2021'), $CharlesDeGaulle, $MarseilleProvence);
        $entityManager->persist($Paris_Marseille);

        $Paris_Lyon = new Vol("Paris_Lyon", DateTime::createFromFormat('j-M-Y', '25-Dec-2021') , DateTime::createFromFormat('j-M-Y', '25-Dec-2021'), $CharlesDeGaulle, $LyonSaintExupery);
        $entityManager->persist($Paris_Lyon);

        $entityManager->persist($LondresHeathrow);
        $entityManager->persist($CharlesDeGaulle);
        $entityManager->persist($MarseilleProvence);
        $entityManager->persist($LyonSaintExupery);
        $entityManager->flush();

    }
}
