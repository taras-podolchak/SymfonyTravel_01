<?php

namespace App\Repository;

use App\Entity\InscribirEvePer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<InscribirEvePer>
 *
 * @method InscribirEvePer|null find($id, $lockMode = null, $lockVersion = null)
 * @method InscribirEvePer|null findOneBy(array $criteria, array $orderBy = null)
 * @method InscribirEvePer[]    findAll()
 * @method InscribirEvePer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InscribirEvePerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InscribirEvePer::class);
    }

    public function add(InscribirEvePer $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(InscribirEvePer $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getIdPersForIdEve(int $idEve): array
    {
        return $this->createQueryBuilder('e')
        ->andWhere('e.idEve = :val')
        ->setParameter('val', $idEve)
        ->orderBy('e.idEve', 'ASC')
        ->setMaxResults(30)
        ->getQuery()
        ->getResult();
    }

        /*
    public function getIdPersForIdEve(int $idEve): array
    {
        return $this->createQueryBuilder('e')
        ->select(array('e.idPer'))
        ->from('InscribirEvePer' , 'e')
        ->andWhere('e.idEve = :val')
        ->setParameter('val', $idEve)
        ->orderBy('e.idEve', 'ASC')
        ->setMaxResults(30)
        ->getQuery()
        ->getResult();
    }
    */
    
//    /**
//     * @return InscribirEvePer[] Returns an array of InscribirEvePer objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?InscribirEvePer
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
