<?php

namespace App\Repository;

use App\Entity\Captions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Captions|null find($id, $lockMode = null, $lockVersion = null)
 * @method Captions|null findOneBy(array $criteria, array $orderBy = null)
 * @method Captions[]    findAll()
 * @method Captions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaptionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Captions::class);
    }

    // /**
    //  * @return Captions[] Returns an array of Captions objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Captions
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
