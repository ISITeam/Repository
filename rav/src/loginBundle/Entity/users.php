<?php

namespace loginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * users
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="loginBundle\Entity\usersRepository")
 */
class users
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var integer
     *
     * @ORM\Column(name="droit", type="integer")
     */
    private $droit;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return users
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return users
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get droit
     *
     * @return integer
     */
    public function getDroit()
    {
        return $this->droit;
    }

    /**
     * Set droit
     *
     * @param integer $droit
     * @return users
     */
    public function setDroit($droit)
    {
        $this->droit = $droit;

        return $this;
    }
}
