<?php

namespace App\Repository;

use App\Entity\Rools;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Rools>
 *
 * @method Rools|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rools|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rools[]    findAll()
 * @method Rools[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoolsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rools::class);
    }

    //    /**
    //     * @return Rools[] Returns an array of Rools objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Rools
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
