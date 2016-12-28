<?php

namespace AppBundle\Repository;

use AppBundle\Entity\User;
use Doctrine\ORM\EntityRepository;

/**
 * FormationRepository.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends EntityRepository
{

    /**
     * @return User
     **/
    public function findLastUser() {

        $query = $this->createQueryBuilder('c')
            ->select('c')
            ->orderBy('c.matricule', 'DESC')->setMaxResults(1);

        return $query->getQuery()->getOneOrNullResult();
    }

}
