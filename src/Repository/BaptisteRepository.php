<?php

namespace App\Repository;

use App\Entity\Baptiste;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Baptiste|null find($id, $lockMode = null, $lockVersion = null)
 * @method Baptiste|null findOneBy(array $criteria, array $orderBy = null)
 * @method Baptiste[]    findAll()
 * @method Baptiste[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BaptisteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Baptiste::class);
    }

    // /**
    //  * @return Baptiste[] Returns an array of Baptiste objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Baptiste
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
