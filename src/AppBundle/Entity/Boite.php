<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boite
 *
 * @ORM\Table(name="boite")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BoiteRepository")
 */
class Boite
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
     * @ORM\Column(name="etat", type="string", length=50)
     */
    private $etat;

    /**
     * One Boite has One User.
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\User", mappedBy="boite")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Messages", mappedBy="boite",cascade={"remove"})
     */
    private $messages;



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
     * Set etat
     *
     * @param string $etat
     * @return Boite
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return Boite
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
     * Set messages
     *
     * @param \AppBundle\Entity\Messages $messages
     * @return Boite
     */
    public function setMessages(\AppBundle\Entity\Messages $messages = null)
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * Get messages
     *
     * @return \AppBundle\Entity\Messages 
     */
    public function getMessages()
    {
        return $this->messages;
    }
}
