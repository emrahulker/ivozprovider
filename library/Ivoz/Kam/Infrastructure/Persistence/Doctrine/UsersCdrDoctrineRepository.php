<?php

namespace Ivoz\Kam\Infrastructure\Persistence\Doctrine;

use Doctrine\ORM\EntityRepository;
use Ivoz\Kam\Domain\Model\UsersCdr\UsersCdr;
use Ivoz\Kam\Domain\Model\UsersCdr\UsersCdrRepository;

/**
 * UsersCdrDoctrineRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UsersCdrDoctrineRepository extends EntityRepository implements UsersCdrRepository
{
    /**
     * @param mixed $userId
     * @return int
     */
    public function countByUserId($userId) :int
    {
        $qb = $this->createQueryBuilder('self');

        return $qb
            ->select('count(self.id)')
            ->where($qb->expr()->eq('self.user', $userId))
            ->getQuery()
            ->getSingleScalarResult();
    }
}