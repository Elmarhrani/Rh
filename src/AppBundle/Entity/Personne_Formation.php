<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personne_Formation
 *
 * @ORM\Table(name="personne__formation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Personne_FormationRepository")
 */
class Personne_Formation
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
     * @ORM\Column(name="Resultat", type="string", length=255)
     */
    private $resultat;

    /**
     * Type de Formation.
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="personne_formations" )
     */
    private $user;

    /**
     * Type de Formation.
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Formation", inversedBy="personne_formations" )
     */
    private $formation;


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
     * Set resultat
     *
     * @param string $resultat
     * @return Personne_Formation
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * Get resultat
     *
     * @return string 
     */
    public function getResultat()
    {
        return $this->resultat;
    }

    /**
     * Set personne
     *
     * @param \AppBundle\Entity\User $personne
     * @return Personne_Formation
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

    /**
     * Set formation
     *
     * @param \AppBundle\Entity\Formation $formation
     * @return Personne_Formation
     */
    public function setFormation(\AppBundle\Entity\Formation $formation = null)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formation
     *
     * @return \AppBundle\Entity\Formation 
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return Personne_Formation
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
}
