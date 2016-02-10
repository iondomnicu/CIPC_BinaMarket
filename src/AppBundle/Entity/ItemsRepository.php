<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\QueryBuilder;

class ItemsRepository extends \Doctrine\ORM\EntityRepository
{
    function showItems($i = null){
        $db = $this->createQueryBuilder('Items')
                ->setFirstResult($i)
                ->setMaxResults(12);
        $query = $db->getQuery();
        return $query->execute();
                
    }
}
