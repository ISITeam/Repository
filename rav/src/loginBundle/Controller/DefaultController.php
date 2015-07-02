<?php

namespace loginBundle\Controller;

use loginBundle\Entity\users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/login")
     * @Template()
     */
    public function indexAction()
    {
        $error = null;
        $user = null;
        var_dump($_POST);
        if (isset($_POST["mail"])) {
            $user = new users();
            $user->setMail($_POST["mail"]);
            $user->setPassword($_POST["password"]);
            $user->setLogin($_POST["login"]);
            $user->setDroit("membre");


            //On fait ici appel au manager afin de pouvoir publier dans la BDD
            try {
                $entitymanager = $this->getDoctrine()->getManager();
                $entitymanager->persist($user);
                $entitymanager->flush();
            } catch (\Exception $e) {
                $error = "une erreur est survenue :" . $e->getMessage();
            }
        }
        // On fait le passage de paramètres à la vue index.html.twig
        return array('error' => $error, "indexAction" => $user);
    }

    public function allUsersAction()
    {
        $error = null;

        $repository = $this->getDoctrine()
            ->getRepository('loginBundle:User');
        try {
            $allProfile = $repository->findAll();
        } catch (\Exception $e) {
            $error = "une erreur est survenue " . $e->getMessage();
        }
        return array('error' => $error, "allUser" => $allProfile);
    }
}
