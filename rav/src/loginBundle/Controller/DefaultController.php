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
        return array('error' => $error);
    }

    /**
     * @Route("/login")
     * @Template()
     */
public function loginAction()
{
    $error = null;

    var_dump($_POST);
    $repository = $this->getDoctrine()
        ->getRepository('loginBundle:users');
    if (isset($_POST["login"]) && ($_POST["password"])) {
        $qb = $repository->createQueryBuilder('p');
        $qb->where('p.login = :login')
            ->setParameters(array('login' => $_POST["login"]));

        $profile = $qb->getQuery()->getResult();

        var_dump($profile);

        if (false != $profile) {

            if ($_POST['password'] == $profile[0]->getPassword()) {
                echo "vous êtes connectés ";
            } else {
                echo "mauvais mot de passe";
            }
        }else{
            echo "utilisateur innexistant";
        }

    }


    return array('error' => $error);

}
}