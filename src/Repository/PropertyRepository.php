<?php

namespace App\Repository;

use App\Entity\Property;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Property|null find($id, $lockMode = null, $lockVersion = null)
 * @method Property|null findOneBy(array $criteria, array $orderBy = null)
 * @method Property[]    findAll()
 * @method Property[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PropertyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Property::class);
    }

<<<<<<< HEAD
    public function findBetween($min, $max){
        $qb = $this->createQueryBuilder('p')
            ->andWhere('p.price => :price')
=======
    public function findBetween($min, $max)
    {
        $qb = $this->createQueryBuilder('p')
            ->andWhere('p.price >= :price')
>>>>>>> 259961637fa9deeedd07e4a997433a793eeb785f
            ->setParameter('price', $min)
            ->andWhere('p.price <= :price')
            ->setParameter('price', $max)
            ->orderBy('p.price', 'ASC')
            ->getQuery();
        return $qb->execute();
    }

<<<<<<< HEAD
    public function findLatest(){
        $qb = $this->createQueryBuilder('p')
            ->setMaxResults(1)
=======
    public function findByMinArea($areaMin)
    {
        $qb = $this->createQueryBuilder('p')
            ->andWhere('p.area >= :area')
            ->setParameter('area', $areaMin)
            ->orderBy('p.area', 'ASC')
            ->getQuery();
        return $qb->execute();
    }

    public function findLatest()
    {
        $qb = $this->createQueryBuilder('p')
            ->setMaxResults(10)
>>>>>>> 259961637fa9deeedd07e4a997433a793eeb785f
            ->orderBy('p.id', 'ASC')
            ->getQuery();
        return $qb->execute();
    }

    // /**
    //  * @return Property[] Returns an array of Property objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Property
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
