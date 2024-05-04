<?php

namespace App\Repository;

use App\Entity\Lhack;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Lhack>
 *
 * @method Lhack|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lhack|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lhack[]    findAll()
 * @method Lhack[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LhackRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lhack::class);
    }

    //    /**
    //     * @return Lhack[] Returns an array of Lhack objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('l.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Lhack
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
