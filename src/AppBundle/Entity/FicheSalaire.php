<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FicheSalaire
 *
 * @ORM\Table(name="fiche_salaire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FicheSalaireRepository")
 */
class FicheSalaire
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
     * @var float
     *
     * @ORM\Column(name="totalPret", type="float")
     */
    private $totalPret;

    /**
     * @var float
     *
     * @ORM\Column(name="SalaireNet", type="float")
     */
    private $salaireNet;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="fiches")
     */
    private $personne;

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
     * @return FicheSalaire
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
     * Set totalPret
     *
     * @param float $totalPret
     * @return FicheSalaire
     */
    public function setTotalPret($totalPret)
    {
        $this->totalPret = $totalPret;

        return $this;
    }

    /**
     * Get totalPret
     *
     * @return float 
     */
    public function getTotalPret()
    {
        return $this->totalPret;
    }

    /**
     * Set salaireNet
     *
     * @param float $salaireNet
     * @return FicheSalaire
     */
    public function setSalaireNet($salaireNet)
    {
        $this->salaireNet = $salaireNet;

        return $this;
    }

    /**
     * Get salaireNet
     *
     * @return float 
     */
    public function getSalaireNet()
    {
        return $this->salaireNet;
    }

    /**
     * Set personne
     *
     * @param \AppBundle\Entity\User $personne
     * @return FicheSalaire
     */
    public function setPersonne(\AppBundle\Entity\User $personne = null)
    {
        $this->personne = $personne;

        return $this;
    }

    /**
     * Get personne
     *
     * @return \AppBundle\Entity\User 
     */
    public function getPersonne()
    {
        return $this->personne;
    }
}
