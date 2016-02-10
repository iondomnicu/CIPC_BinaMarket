<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\ORM\EntityManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
/**
 * @Template()
 *
 */
class InfoController extends Controller{
    /**
     *@Route("/info/{i}",name="info")
     */
    function indexAction($i){
          $connect = $this->get('database_connection');
           $search1['result'] = $connect->fetchAll("select DISTINCT Nm From companies");
          $connect->executeUpdate('UPDATE `companies` SET `views`=`views`+1 WHERE C='.$i);
          $infos['infol'] = $connect->fetchAll("SELECT * FROM companies where C=".$i);
          $popular['result'] = $connect->fetchAll('select * from companies order by `views` DESC limit 5');
            $menuRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('AppBundle:Menu');
            $menu['result'] = $menuRepository->showAction();
          $data = [
                'search1'=>$search1['result'],
              'menu'=>$menu['result'],
              'info'=>$infos['infol'],
              'popular' => $popular['result'],
          ];
          return $this->render('AppBundle:Company:list.html.twig',compact('data'));   
    }
   
        /**
        *@Route("/info1/{i}",name="info1")
         */
    function morearticleAction($i){
          $connect = $this->get('database_connection');
           $search1['result'] = $connect->fetchAll("select DISTINCT Nm From companies");
          $connect->executeUpdate('UPDATE `articles` SET `views`=`views`+1 WHERE id='.$i);
          $infos['infol'] = $connect->fetchAll("SELECT * FROM articles where id=".$i);
          $popular['result'] = $connect->fetchAll('select * from articles order by `views` DESC limit 5');
            $menuRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('AppBundle:Menu');
            $menu['result'] = $menuRepository->showAction();
          $data = [
                'search1'=>$search1['result'],
              'menu'=>$menu['result'],
              'info'=>$infos['infol'],
              'popular' => $popular['result'],
          ];
          return $this->render('AppBundle:Articles:list.html.twig',compact('data'));   
    } 
    
} 