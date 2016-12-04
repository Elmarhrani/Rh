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
     * @Assert\NotBlank()
     * @ORM\Column(name="nom", type="string", length=125)
     */
    protected $nom;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="prenom", type="string", length=125)
     */
    protected $prenom;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    protected $adresse;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="telephone", type="string", length=40)
     */
    protected $tel;
    /**
     * @Assert\NotBlank()
     * @ORM\Column(name="dateNaissance", type="date")
     */
    protected $dateNaiss;


    /**
     * @Assert\NotBlank()
     * @ORM\Column(name="niveau", type="string" )
     */
    protected $niveau;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="CIN", type="string", length=10)
     */
    protected $CIN;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="CNSS", type="string", length=15)
     */
    protected $CNSS;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="situation_familaile", type="string", length=40)
     */
    protected $sitFamilaile;

    /**
     * @var int
     * @Assert\NotBlank()
     * @ORM\Column(name="nbre_enfant", type="integer")
     */
    protected $nbreEnfant;

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
}
