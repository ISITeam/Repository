<?php

namespace autoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * carburant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="autoBundle\Entity\carburantRepository")
 */
class carburant
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
