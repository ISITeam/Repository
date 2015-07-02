<?php

namespace autoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * voiture
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="autoBundle\Entity\voitureRepository")
 */
class voiture
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
     * @ORM\Column(name="marque", type="string", length=255)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="string", length=255 nullable=true)
     */
    private $modele;

    /**
     * @var string
     *
     * @ORM\Column(name="carburant", type="string", length=255)
     */
    private $carburant;

    /**
     * @var integer
     *
     * @ORM\Column(name="kilometrage", type="integer")
     */
    private $kilometrage;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee", type="integer")
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="portes", type="integer")
     */
    private $portes;


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
     * Set marque
     *
     * @param string $marque
     * @return voiture
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string 
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set modele
     *
     * @param string $modele
     * @return voiture
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string 
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set carburant
     *
     * @param string $carburant
     * @return voiture
     */
    public function setCarburant($carburant)
    {
        $this->carburant = $carburant;

        return $this;
    }

    /**
     * Get carburant
     *
     * @return string 
     */
    public function getCarburant()
    {
        return $this->carburant;
    }

    /**
     * Set kilometrage
     *
     * @param integer $kilometrage
     * @return voiture
     */
    public function setKilometrage($kilometrage)
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    /**
     * Get kilometrage
     *
     * @return integer 
     */
    public function getKilometrage()
    {
        return $this->kilometrage;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return voiture
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     * @return voiture
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return voiture
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set portes
     *
     * @param integer $portes
     * @return voiture
     */
    public function setPortes($portes)
    {
        $this->portes = $portes;

        return $this;
    }

    /**
     * Get portes
     *
     * @return integer 
     */
    public function getPortes()
    {
        return $this->portes;
    }
}
