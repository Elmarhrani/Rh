<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 27/12/16
 * Time: 21:56
 */

namespace AppBundle\factories;

use AppBundle\Entity\User;
use AppBundle\factories\PersonneFactoryInterface;
use Doctrine\ORM\EntityManager;

class PersonneFactory implements PersonneFactoryInterface
{
    private $em;
    private $personne;

    /**
     * PersonneFactory constructor.
     *
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
        $this->personne = null;
    }

    /**
     * @param string $type
     *
     * @return User
     */
    public function create($type) {

        if($type == User::class){
            return $this->em->getRepository('AppBundle:User')->find(1);

        }

    }

}