<?php

namespace autoBundle\Controller;

use Doctrine\ORM\Mapping\Entity;
use autoBundle\Entity;
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
        $carburant = new Entity\carburant();
        $carburant->

        return array("carburantObject" => $carburant);
    }
}
