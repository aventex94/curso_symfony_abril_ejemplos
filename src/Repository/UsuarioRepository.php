<?php

namespace App\Repository;

use App\Entity\Usuario;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

Class UsuarioRepository extends ServiceEntityRepository{
    
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Usuario::class);
    }

    public function findByNombre($nombre){
        
        $qb = $this->getEntityManager()->createQueryBuilder()
            ->select('u')
            ->from('App:Usuario', 'u')
            ->where('u.nombre = :nombre')
            ->setParameter('nombre', $nombre);
        return $qb->getQuery()->getResult(); 
        
    }
}