<?php

namespace App\Controllers;

use App\Entity\Aeroport;
use DateTime;
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

        $CharlesDeGaulle = new Aeroport("Charles De Gaulle");
        $entityManager->persist($CharlesDeGaulle);



        $MarseilleProvence = new Aeroport("Marseille Provence");
        $entityManager->persist($MarseilleProvence);



        // $passager1 = new Client("DUPONT", "Jean", 563652, 987897987);
        // $entityManager->persist($passager1);
        // $entityManager->flush($passager1);

        $Paris_Marseille = new Vol("Paris_Marseille", DateTime::createFromFormat('j-M-Y', '25-Dec-2021'), DateTime::createFromFormat('j-M-Y', '25-Dec-2021'), $CharlesDeGaulle, $MarseilleProvence);
        $entityManager->persist($Paris_Marseille);
        // $entityManager->flush();

        $Paris_Lyon = new Vol("Paris_Lyon", DateTime::createFromFormat('j-M-Y', '18-juillet-2021'), DateTime::createFromFormat('j-M-Y', '18-juillet-2021'), $CharlesDeGaulle, $MarseilleProvence);
        $entityManager->persist($Paris_Lyon);
        $entityManager->flush();
    }
}
