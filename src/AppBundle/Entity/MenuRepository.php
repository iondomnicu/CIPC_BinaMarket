<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\QueryBuilder;

/**
 *@ORM\Entity(repositoryClass="AppBunddle\Entity\MenuRepository")
 */
class MenuRepository extends \Doctrine\ORM\EntityRepository
{
    function showAction(){
//       $repository = $this->getDoctrine()
//            ->getRepository('AppBundle:Menu');
//       $menu = $repository->findAll();
//       return $menu->getResult();
         $db = $this->createQueryBuilder('Menu');    
         $query = $db->getQuery();
         return $query->execute();
    }
}
