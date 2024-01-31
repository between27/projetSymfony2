<?php

namespace App\Repository;

use App\Entity\WeaponPhoto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<WeaponPhoto>
 *
 * @method WeaponPhoto|null find($id, $lockMode = null, $lockVersion = null)
 * @method WeaponPhoto|null findOneBy(array $criteria, array $orderBy = null)
 * @method WeaponPhoto[]    findAll()
 * @method WeaponPhoto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WeaponPhotoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WeaponPhoto::class);
    }

//    /**
//     * @return WeaponPhoto[] Returns an array of WeaponPhoto objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('w.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?WeaponPhoto
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
