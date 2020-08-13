<?php

namespace App\Repository;

use App\Entity\ClientNonSalarie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ClientNonSalarie|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClientNonSalarie|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClientNonSalarie[]    findAll()
 * @method ClientNonSalarie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientNonSalarieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClientNonSalarie::class);
    }

    // /**
    //  * @return ClientNonSalarie[] Returns an array of ClientNonSalarie objects
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
    public function findOneBySomeField($value): ?ClientNonSalarie
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
