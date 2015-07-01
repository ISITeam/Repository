<?php

namespace autoBundle\Controller;

use Doctrine\ORM\Mapping\Entity;
use autoBundle\Entity\carburant;
use autoBundle\Entity\marque;
use autoBundle\Entity\modele;
use autoBundle\Entity\TypeVente;
use autoBundle\Entity\voiture;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/auto")
     * @Template()
     */
    public function indexAction()
    {
        $carburant = new carburant();
        $carburant->setType("Diesel");

        return array("carburantObject" => $carburant);
    }
}
