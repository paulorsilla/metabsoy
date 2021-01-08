<?php

namespace Metabsoy\Repository;


class Colaborador extends AbstractRepository {

    public function getQuery($search = []) {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('c')
                ->from(ColaboradorEntity::class, 'c');
       return $qb->getQuery()->getResult();  
    
    }    
}