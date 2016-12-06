<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetailsPret
 *
 * @ORM\Table(name="details_pret")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DetailsPretRepository")
 */
class DetailsPret
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
     * @var string
     *
     * @ORM\Column(name="montant", type="float", length=255)
     */
    private $montant;

    /**
     * @var string
     * @ORM\Column(name="motif", type="string", length=250)
     */
    private $motif;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pret", inversedBy="detailsPret", cascade={"persist"})
     */
    private $pret;

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
     * Set mois
     *
     * @param \DateTime $mois
     * @return DetailsPret
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

    

    /**
     * Set montant
     *
     * @param float $montant
     * @return DetailsPret
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set motif
     *
     * @param string $motif
     * @return DetailsPret
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return string 
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set pret
     *
     * @param \AppBundle\Entity\Pret $pret
     * @return DetailsPret
     */
    public function setPret(\AppBundle\Entity\Pret $pret = null)
    {
        $this->pret = $pret;

        return $this;
    }

    /**
     * Get pret
     *
     * @return \AppBundle\Entity\Pret 
     */
    public function getPret()
    {
        return $this->pret;
    }
}
