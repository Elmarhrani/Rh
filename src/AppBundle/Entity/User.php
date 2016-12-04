<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="nom", type="string", length=125, nullable=true)
     */
    protected $nom;

    /**
     * @var string
     * @ORM\Column(name="prenom", type="string", length=125, nullable=true)
     */
    protected $prenom;

    /**
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    protected $adresse;

    /**
     * @var string
     * @ORM\Column(name="telephone", type="string", length=40, nullable=true)
     */
    protected $tel;
    /**
     * @ORM\Column(name="dateNaissance", type="date", nullable=true)
     */
    protected $dateNaiss;


    /**
     * @ORM\Column(name="niveau", type="string", nullable=true )
     */
    protected $niveau;

    /**
     * @var string
     * @ORM\Column(name="CIN", type="string", length=10, nullable=true)
     */
    protected $CIN;

    /**
     * @var string
     * @ORM\Column(name="CNSS", type="string", length=15, nullable=true)
     */
    protected $CNSS;

    /**
     * @var string
     * @ORM\Column(name="situation_familaile", type="string", length=40, nullable=true)
     */
    protected $sitFamilaile;

    /**
     * @var int
     * @ORM\Column(name="nbre_enfant", type="integer", nullable=true)
     */
    protected $nbreEnfant;
    /**
     * @var int
     * @ORM\Column(name="salaire", type="float", nullable=true )
     */
    private $salaire;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }



    /**
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return User
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set dateNaiss
     *
     * @param \DateTime $dateNaiss
     * @return User
     */
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    /**
     * Get dateNaiss
     *
     * @return \DateTime
     */
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * Set niveau
     *
     * @param string $niveau
     * @return User
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return string
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set CIN
     *
     * @param string $cIN
     * @return User
     */
    public function setCIN($cIN)
    {
        $this->CIN = $cIN;

        return $this;
    }

    /**
     * Get CIN
     *
     * @return string
     */
    public function getCIN()
    {
        return $this->CIN;
    }

    /**
     * Set CNSS
     *
     * @param string $cNSS
     * @return User
     */
    public function setCNSS($cNSS)
    {
        $this->CNSS = $cNSS;

        return $this;
    }

    /**
     * Get CNSS
     *
     * @return string
     */
    public function getCNSS()
    {
        return $this->CNSS;
    }

    /**
     * Set sitFamilaile
     *
     * @param string $sitFamilaile
     * @return User
     */
    public function setSitFamilaile($sitFamilaile)
    {
        $this->sitFamilaile = $sitFamilaile;

        return $this;
    }

    /**
     * Get sitFamilaile
     *
     * @return string
     */
    public function getSitFamilaile()
    {
        return $this->sitFamilaile;
    }

    /**
     * Set nbreEnfant
     *
     * @param integer $nbreEnfant
     * @return User
     */
    public function setNbreEnfant($nbreEnfant)
    {
        $this->nbreEnfant = $nbreEnfant;

        return $this;
    }

    /**
     * Get nbreEnfant
     *
     * @return integer
     */
    public function getNbreEnfant()
    {
        return $this->nbreEnfant;
    }

    /**
     * Set salaire
     *
     * @param float $salaire
     * @return User
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get salaire
     *
     * @return float
     */
    public function getSalaire()
    {
        return $this->salaire;
    }
}
