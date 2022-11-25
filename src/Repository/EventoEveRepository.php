<?php

namespace App\Repository;

use App\Entity\EventoEve;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EventoEve>
 *
 * @method EventoEve|null find($id, $lockMode = null, $lockVersion = null)
 * @method EventoEve|null findOneBy(array $criteria, array $orderBy = null)
 * @method EventoEve[]    findAll()
 * @method EventoEve[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EventoEveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EventoEve::class);
    }

    public function createEve (EventoEve $entity/*, bool $flush = false*/): void
    {
        $this->getEntityManager()->persist($entity);

       /*if ($flush) {*/
            $this->getEntityManager()->flush();
       /* }*/
    }

    public function remove(EventoEve $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

       // if ($flush) {
            $this->getEntityManager()->flush();
        //}
    }



  /*  public function getEve($value): ?EventoEve
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.id_Eve = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult();
    }
*/

    //    /**
    //     * @return EventoEve[] Returns an array of EventoEve objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('e.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?EventoEve
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
