<?php

namespace loginBundle\Controller;

use loginBundle\Entity\users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/register")
     * @Template()
     */
    public function registerAction()
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
        return array('error' => $error, "registerAction" => $user);
    }

    /**
     * @Route("/login")
     * @Template()
     */
public function loginAction()
{
    $error = null;
    $user = null;
    var_dump($_GET);
    if ($_GET["login"] && $_GET["password"]) {
        $user->setPassword($_GET["password"]);
        $user->setLogin($_GET["login"]);
    }
        return array('error' => $error, "registerAction" => $user);

}
}