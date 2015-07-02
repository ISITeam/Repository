<?php

namespace loginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * droits
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="loginBundle\Entity\droitsRepository")
 */
class droits
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
     * @ORM\Column(name="droits", type="string", length=255)
     */
    private $droits;


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
     * Set droits
     *
     * @param string $droits
     * @return droits
     */
    public function setDroits($droits)
    {
        $this->droits = $droits;

        return $this;
    }

    /**
     * Get droits
     *
     * @return string 
     */
    public function getDroits()
    {
        return $this->droits;
    }
}
