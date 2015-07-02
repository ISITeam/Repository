<?php

namespace autoBundle\Controller;

use Doctrine\ORM\Mapping\Entity;
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
        $repository = $this->getDoctrine()
            ->getRepository('autoBundle:voiture');

        try {
            $allVoiture = $repository->findAll();
        }catch(\Exception $e){
            $error = "une erreur est survenue " . $e->getMessage();
        }

        return array("voitures" => $allVoiture);
    }

    /**
     * @Route("/insertAuto")
     * @Template()
     */
    public function insertAction()
    {
        $error = null;

        var_dump($_POST);

        if(isset($_POST['marque'])&&
            ($_POST['modele'])&&
            ($_POST['carburant'])&&
            ($_POST['kilometrage'])&&
            ($_POST['annee'])&&
            ($_POST['portes'])&&
            ($_POST['prix']));
        {
            //enregistrement
            $voiture = new voiture();
            $voiture->setMarque($_POST['marque']);
            $voiture->setModele($_POST['modele']);
            $voiture->setCarburant($_POST['carburant']);
            $voiture->setKilometrage($_POST['kilometrage']);
            $voiture->setAnnee($_POST['annee']);
            $voiture->setPortes($_POST['portes']);
            $voiture->setPrix($_POST['prix']);

            try {
                $em = $this->getDoctrine()->getManager();
                $em->persist($voiture);
                $em->flush();

            }catch(\Exception $e){
                $error = "une erreur est survenue :" . $e->getMessage();;
            }

            // Passage de paramètres à ma vue index.html.twig
            return array('error' => $error);
        }

        return array("error" => false);
    }
}
