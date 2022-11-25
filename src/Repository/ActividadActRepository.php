<?php

namespace App\Repository;

use App\Entity\ActividadAct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ActividadAct>
 *
 * @method ActividadAct|null find($id, $lockMode = null, $lockVersion = null)
 * @method ActividadAct|null findOneBy(array $criteria, array $orderBy = null)
 * @method ActividadAct[]    findAll()
 * @method ActividadAct[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActividadActRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ActividadAct::class);
    }

    public function add(ActividadAct $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ActividadAct $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getActsForIdEve(int $idEve): array
    {
        return $this->createQueryBuilder('e')
        ->andWhere('e.idEve = :val')
        ->setParameter('val', $idEve)
        ->orderBy('e.idEve', 'ASC')
        ->setMaxResults(10)
        ->getQuery()
        ->getResult();
    }

//    /**
//     * @return ActividadAct[] Returns an array of ActividadAct objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ActividadAct
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
