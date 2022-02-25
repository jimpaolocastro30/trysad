<?php

namespace App\Repository;

use App\Entity\Sublocation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Sublocation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sublocation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sublocation[]    findAll()
 * @method Sublocation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SublocationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sublocation::class);
    }

    // /**
    //  * @return Sublocation[] Returns an array of Sublocation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Sublocation
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
