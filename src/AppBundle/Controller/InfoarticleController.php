<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
/**
 * @Template() 
 */
class InfoarticleController extends Controller{
    /**
     * @Route("/infoarticle/{i}",name="infoarticle")
     */
    function indexAction($i){
        $connect = $this->get('database_connection');
         $search1['result'] = $connect->fetchAll("select DISTINCT Nm From companies");
        $info['infos'] = $connect->fetchAll("SELECT * FROM articles where Company_id=".$i);
        $popular['result'] = $connect->fetchAll('select * from articles order by `views` DESC limit 5');
        $menuRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('AppBundle:Menu');
            $menu['result'] = $menuRepository->showAction();
        $data = [
              'search1'=>$search1['result'],
            'menu'=>$menu['result'],
            'info'=>$info['infos'],
            'popular'=>$popular['result'],
          ];
        
        return $this->render('AppBundle:Company:list.html_1.twig',compact('data')); 
    }
    
    /**
     *@Route("/infopage/{id}",name="infopage") 
     */
    
    function infoAction($id){
        $connect = $this->get('database_connection');
         $search1['result'] = $connect->fetchAll("select DISTINCT Nm From companies ORDER By Nm ASC");
        $connect->executeUpdate('UPDATE `items` SET `views`=`views`+1 WHERE C='.$id);
        $information['rezult'] = $connect->fetchAll('select * from items where C='.$id);
        $popular['items'] = $connect->fetchAll('select * from items order by `views` DESC limit 5');
       // $infocompany['result'] = $connect->fetchAll('select * from companies where C='.$id);
        $menuRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('AppBundle:Menu');
          $menu['result'] = $menuRepository->showAction();
        $data = [
              'search1'=>$search1['result'],
          'menu' => $menu['result'],
          'info' => $information['rezult'],
          'popularitem'=>$popular['items'],
        //  'infocompany' => $infocompany['result'],
        ];  
        
        return $this->render('AppBundle:Company:info.html.twig',compact('data'));
    }
} 