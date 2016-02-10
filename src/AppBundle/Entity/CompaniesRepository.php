<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\QueryBuilder;

/**
 *@ORM\Entity(repositoryClass="AppBunddle\Entity\CompaniesRepository")
 */
class CompaniesRepository extends \Doctrine\ORM\EntityRepository
{
   public function showAction()
    {
        $connect = $this->get('database_connection');
        $query= $connect->fetchAll("select * From companies");
        return $query;
    }
}
