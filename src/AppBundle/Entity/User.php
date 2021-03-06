<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="matricule", type="string", length=20 ,nullable=true)
     */
    private $matricule;

    /**
     * @var string
     * @ORM\Column(name="nom", type="string", length=125,nullable=true)
     */
    protected $nom;

    /**
     * @var string
     * @ORM\Column(name="prenom", type="string", length=125,nullable=true)
     */
    protected $prenom;

    /**
     * @var string
     * @ORM\Column(name="image", type="string", length=125,nullable=true)
     */
    protected $image;

    /**
     * @ORM\Column(name="adresse", type="string", length=255,nullable=true)
     */
    protected $adresse;

    /**
     * @var string
     * @ORM\Column(name="telephone", type="string", length=40,nullable=true)
     */
    protected $tel;
    /**
     * @ORM\Column(name="dateNaissance", type="date",nullable=true)
     */
    protected $dateNaiss;


    /**
     * @ORM\Column(name="niveau", type="string",nullable=true )
     */
    protected $niveau;

    /**
     * @var string
     * @ORM\Column(name="CIN", type="string", length=10,nullable=true)
     */
    protected $CIN;

    /**
     * @var string
     * @ORM\Column(name="CNSS", type="string", length=15,nullable=true)
     */
    protected $CNSS;

    /**
     * @var string
     * @ORM\Column(name="situation_familaile", type="string", length=40,nullable=true)
     */
    protected $sitFamilaile;

    /**
     * @var int
     * @ORM\Column(name="nbre_enfant", type="integer",nullable=true)
     */
    protected $nbreEnfant;
    /**
     * @var int
     * @ORM\Column(name="salaire", type="float",nullable=true)
     */
    private $salaire;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\FicheSalaire", mappedBy="personne",cascade={"remove"})
     */
    protected $fiches;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Personne_Formation", mappedBy="user",cascade={"remove"})
     */
    protected $personne_formations;

    /**
     * One User has One Boite.
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Boite", mappedBy="user")
     */
    private $boite;

    /**
     * Type de Service
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Service", inversedBy="user" )
     */
    private $service;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Candidat", mappedBy="user")
     */
    protected $candidat;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Pret", mappedBy="user")
     */
    protected $pret;

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

    /**
     * Add fiches
     *
     * @param \AppBundle\Entity\FicheSalaire $fiches
     * @return User
     */
    public function addFich(\AppBundle\Entity\FicheSalaire $fiches)
    {
        $this->fiches[] = $fiches;

        return $this;
    }

    /**
     * Remove fiches
     *
     * @param \AppBundle\Entity\FicheSalaire $fiches
     */
    public function removeFich(\AppBundle\Entity\FicheSalaire $fiches)
    {
        $this->fiches->removeElement($fiches);
    }

    /**
     * Get fiches
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFiches()
    {
        return $this->fiches;
    }

    /**
     * Add personne_formations
     *
     * @param \AppBundle\Entity\Personne_Formation $personneFormations
     * @return User
     */
    public function addPersonneFormation(\AppBundle\Entity\Personne_Formation $personneFormations)
    {
        $this->personne_formations[] = $personneFormations;

        return $this;
    }

    /**
     * Remove personne_formations
     *
     * @param \AppBundle\Entity\Personne_Formation $personneFormations
     */
    public function removePersonneFormation(\AppBundle\Entity\Personne_Formation $personneFormations)
    {
        $this->personne_formations->removeElement($personneFormations);
    }

    /**
     * Get personne_formations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPersonneFormations()
    {
        return $this->personne_formations;
    }


    /**
     * Set boite
     *
     * @param \AppBundle\Entity\Boite $boite
     * @return User
     */
    public function setBoite(\AppBundle\Entity\Boite $boite = null)
    {
        $this->boite = $boite;

        return $this;
    }

    /**
     * Get boite
     *
     * @return \AppBundle\Entity\Boite 
     */
    public function getBoite()
    {
        return $this->boite;
    }

    /**
     * Set service
     *
     * @param \AppBundle\Entity\Service $service
     * @return User
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

    /**
     * Set matricule
     *
     * @param string $matricule
     * @return User
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
     * Add candidat
     *
     * @param \AppBundle\Entity\Candidat $candidat
     * @return User
     */
    public function addCandidat(\AppBundle\Entity\Candidat $candidat)
    {
        $this->candidat[] = $candidat;

        return $this;
    }

    /**
     * Remove candidat
     *
     * @param \AppBundle\Entity\Candidat $candidat
     */
    public function removeCandidat(\AppBundle\Entity\Candidat $candidat)
    {
        $this->candidat->removeElement($candidat);
    }

    /**
     * Get candidat
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCandidat()
    {
        return $this->candidat;
    }

    /**
     * Add pret
     *
     * @param \AppBundle\Entity\Pret $pret
     * @return User
     */
    public function addPret(\AppBundle\Entity\Pret $pret)
    {
        $this->pret[] = $pret;

        return $this;
    }

    /**
     * Remove pret
     *
     * @param \AppBundle\Entity\Pret $pret
     */
    public function removePret(\AppBundle\Entity\Pret $pret)
    {
        $this->pret->removeElement($pret);
    }

    /**
     * Get pret
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPret()
    {
        return $this->pret;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return User
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }
}
