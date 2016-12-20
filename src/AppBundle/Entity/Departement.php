<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DepartementRepository")
 */
class Departement
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
     * @ORM\Column(name="descriptionDep", type="string", length=255, nullable=true)
     */
    private $descriptionDep;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Service", mappedBy="departement")
     */
    protected $service;

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
     * @return Departement
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
     * Set descriptionDep
     *
     * @param string $descriptionDep
     * @return Departement
     */
    public function setDescriptionDep($descriptionDep)
    {
        $this->descriptionDep = $descriptionDep;

        return $this;
    }

    /**
     * Get descriptionDep
     *
     * @return string 
     */
    public function getDescriptionDep()
    {
        return $this->descriptionDep;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->service = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add service
     *
     * @param \AppBundle\Entity\Service $service
     * @return Departement
     */
    public function addService(\AppBundle\Entity\Service $service)
    {
        $this->service[] = $service;

        return $this;
    }

    /**
     * Remove service
     *
     * @param \AppBundle\Entity\Service $service
     */
    public function removeService(\AppBundle\Entity\Service $service)
    {
        $this->service->removeElement($service);
    }

    /**
     * Get service
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getService()
    {
        return $this->service;
    }
}
