<?php

namespace App\Repository;

use App\Entity\Lhacksug;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Lhacksug>
 *
 * @method Lhacksug|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lhacksug|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lhacksug[]    findAll()
 * @method Lhacksug[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LhacksugRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lhacksug::class);
    }

    //    /**
    //     * @return Lhacksug[] Returns an array of Lhacksug objects
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

    //    public function findOneBySomeField($value): ?Lhacksug
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
