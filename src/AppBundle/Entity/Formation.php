<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FormationRepository")
 */
class Formation
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
     * @var \DateTime
     *
     * @ORM\Column(name="debut", type="date")
     */
    private $debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="date")
     */
    private $fin;

    /**
     * @var string
     *
     * @ORM\Column(name="remarque", type="string", length=100)
     */
    private $remarque;

    /**
     * Type de Formation.
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeFormation", inversedBy="formations" )
     */
    private $type;


    /**
     * personne concerne par la formation.
     *
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Personne_Formation", mappedBy="formation")
     */
    private $personne_formations;

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
     * Set debut
     *
     * @param \DateTime $debut
     * @return Formation
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * Get debut
     *
     * @return \DateTime 
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     * @return Formation
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime 
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set remarque
     *
     * @param string $remarque
     * @return Formation
     */
    public function setRemarque($remarque)
    {
        $this->remarque = $remarque;

        return $this;
    }

    /**
     * Get remarque
     *
     * @return string 
     */
    public function getRemarque()
    {
        return $this->remarque;
    }

    /**
     * Set type
     *
     * @param \AppBundle\Entity\TypeFormation $type
     * @return Formation
     */
    public function setType(\AppBundle\Entity\TypeFormation $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \AppBundle\Entity\TypeFormation 
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->personne_formations = new \Doctrine\Common\Collections\ArrayCollection();
    }



    /**
     * Add personne_formations
     *
     * @param \AppBundle\Entity\Personne_Formation $personneFormations
     * @return Formation
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
}
