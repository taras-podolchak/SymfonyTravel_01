<?php

namespace App\Repository;

use App\Entity\PersonaPer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PersonaPer>
 *
 * @method PersonaPer|null find($id, $lockMode = null, $lockVersion = null)
 * @method PersonaPer|null findOneBy(array $criteria, array $orderBy = null)
 * @method PersonaPer[]    findAll()
 * @method PersonaPer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonaPerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PersonaPer::class);
    }

    public function add(PersonaPer $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PersonaPer $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getPersForIdEve(int $idPer): PersonaPer
    {
        return $this->createQueryBuilder('e')
        ->andWhere('e.idPer = :val')
        ->setParameter('val', $idPer)
        ->orderBy('e.idPer', 'ASC')
        ->setMaxResults(30)
        ->getQuery()
        ->getOneOrNullResult();
    }

//    /**
//     * @return PersonaPer[] Returns an array of PersonaPer objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PersonaPer
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
