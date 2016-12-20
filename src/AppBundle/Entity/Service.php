<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ServiceRepository")
 */
class Service
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\User", mappedBy="service")
     */
    protected $user;

    /**
     * Departement.
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Departement", inversedBy="service" )
     */
    private $departement;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Candidat", mappedBy="service")
     */
    protected $candidat;

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
     * Set nom
     *
     * @param string $nom
     * @return Service
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
     * Set description
     *
     * @param string $description
     * @return Service
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
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \AppBundle\Entity\User $user
     * @return Service
     */
    public function addUser(\AppBundle\Entity\User $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AppBundle\Entity\User $user
     */
    public function removeUser(\AppBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set departement
     *
     * @param \AppBundle\Entity\Departement $departement
     * @return Service
     */
    public function setDepartement(\AppBundle\Entity\Departement $departement = null)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return \AppBundle\Entity\Departement 
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Add candidat
     *
     * @param \AppBundle\Entity\Candidat $candidat
     * @return Service
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
}
