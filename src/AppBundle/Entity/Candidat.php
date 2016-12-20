<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Candidat
 *
 * @ORM\Table(name="candidat")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CandidatRepository")
 */
class Candidat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=20, unique=true)
     */
    private $matricule;

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

    /**
     * Name of amdin li recrutah
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="candidat" )
     */
    private $user;

    /**
     * Service of Candidate
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Service", inversedBy="candidat" )
     */
    private $service;

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
     * Set matricule
     *
     * @param string $matricule
     * @return Candidat
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string 
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Candidat
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
     * @return Candidat
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
     * @return Candidat
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
     * @return Candidat
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
     * @return Candidat
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
     * @return Candidat
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
     * @return Candidat
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
     * @return Candidat
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
     * @return Candidat
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
     * @return Candidat
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
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return Candidat
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set service
     *
     * @param \AppBundle\Entity\Service $service
     * @return Candidat
     */
    public function setService(\AppBundle\Entity\Service $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \AppBundle\Entity\Service 
     */
    public function getService()
    {
        return $this->service;
    }
}
