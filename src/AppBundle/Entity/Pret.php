<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pret
 *
 * @ORM\Table(name="pret")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PretRepository")
 */
class Pret
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
     * @ORM\Column(name="mois", type="date")
     */
    private $mois;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\DetailsPret", mappedBy="pret", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $detailsPret;

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
     * Constructor
     */
    public function __construct()
    {
        $this->detailsPret = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add detailsPret
     *
     * @param \AppBundle\Entity\DetailsPret $detailsPret
     * @return Pret
     */
    public function addDetailsPret(\AppBundle\Entity\DetailsPret $detailsPret)
    {
        $this->detailsPret[] = $detailsPret;

        return $this;
    }

    /**
     * Remove detailsPret
     *
     * @param \AppBundle\Entity\DetailsPret $detailsPret
     */
    public function removeDetailsPret(\AppBundle\Entity\DetailsPret $detailsPret)
    {
        $this->detailsPret->removeElement($detailsPret);
    }

    /**
     * Get detailsPret
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDetailsPret()
    {
        return $this->detailsPret;
    }

    /**
     * Set mois
     *
     * @param \DateTime $mois
     * @return Pret
     */
    public function setMois($mois)
    {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get mois
     *
     * @return \DateTime 
     */
    public function getMois()
    {
        return $this->mois;
    }
}
