<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
/**
 * @Template()
 */
class SortareController extends Controller{
    /**
     * @Route("/sortasc/{nume}",name="sortasc")
     */
    function ascAction($nume)
      {
        $menuRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('AppBundle:Menu');
        $menu['result'] = $menuRepository->showAction();
        
        $connect = $this->get('database_connection');
         $search1['result'] = $connect->fetchAll("select DISTINCT Nm From companies");
        $rezult = $connect->fetchAll('select *from '.$nume.' ');
        $popular['result'] = $connect->fetchAll('select * from companies order by `views` DESC limit 5');
         $count = 0;
            foreach($rezult as $item){
                $count++;
            }
            $rez= $count/12;
        
        if($nume == 'companies'){
            $connect = $this->get('database_connection');
            $sort['result'] = $connect->fetchAll('SELECT * FROM `'.$nume.'`  ORDER By `Nm` ASC LIMIT 12');
           $data = [
              'tip'=>'names',
              'ts'=>'ASC',
               'a'=>1,
               'b'=>1,
               'count'=>ceil($rez),
               'popular'=> $popular['result'],
             'name'=>$nume,
             'menu'=>$menu['result'],
             'companies'=>$sort['result'],
          ]; 
        }
        if($nume == 'articles'){
            $connect = $this->get('database_connection');
            $sort['result'] = $connect->fetchAll('SELECT * FROM `'.$nume.'`  ORDER By `title` ASC LIMIT 12');
            
            $data = [
                  'search1'=>$search1['result'],
              'tip'=>'names',
              'ts'=>'ASC',
               'a'=>1,
               'b'=>1,
               'count'=>ceil($rez),
                'popular'=> $popular['result'],
             'name'=>$nume,
             'menu'=>$menu['result'],
             'articles'=>$sort['result'],
          ]; 
          }
          if($nume == 'items'){
           $connect = $this->get('database_connection');
           $sort['result'] = $connect->fetchAll('SELECT * FROM `'.$nume.'`  ORDER By `Nm` ASC LIMIT 12');
           $data = [
                 'search1'=>$search1['result'],
              'tip'=>'names',
              'ts'=>'ASC',
               'a'=>1,
               'b'=>1,
               'count'=>ceil($rez),
               'popular'=> $popular['result'],
             'name'=>'items',
             'menu'=>$menu['result'],
             'items'=>$sort['result'],
          ]; 
           
        }
      return $this->render('AppBundle:Default:index2.html.twig',compact('data'));
    
     }
     
     /**
     * @Route("/sortdesc/{nume}",name="sortdesc")
     */
      function descAction($nume){
                $menuRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('AppBundle:Menu');
        $menu['result'] = $menuRepository->showAction();
          
        $connect = $this->get('database_connection');
         $search1['result'] = $connect->fetchAll("select DISTINCT Nm From companies");
        $popular['result'] = $connect->fetchAll('select * from companies order by `views` DESC limit 5');
        $rezult = $connect->fetchAll('select *from '.$nume.' ');
         $count = 0;
            foreach($rezult as $item){
                $count++;
            }
            $rez= $count/12;
        
        if($nume == 'companies'){
            $connect = $this->get('database_connection');
        $sort['result'] = $connect->fetchAll('SELECT * FROM `'.$nume.'`  ORDER By `Nm` DESC LIMIT 12');
           $data = [
                 'search1'=>$search1['result'],
              'tip'=>'names',
              'ts'=>'DESC',
               'a'=>1,
               'b'=>1,
               'popular' => $popular['result'],
               'count'=>ceil($rez),
             'name'=>$nume,
             'menu'=>$menu['result'],
             'companies'=>$sort['result'],
          ]; 
        }
        if($nume == 'articles'){
            $connect = $this->get('database_connection');
            $sort['result'] = $connect->fetchAll('SELECT * FROM `'.$nume.'`  ORDER By `title` DESC LIMIT 12');
             $data = [
                   'search1'=>$search1['result'],
              'tip'=>'names',
              'ts'=>'DESC',
               'a'=>1,
               'b'=>1,
               'count'=>ceil($rez),
                 'popular' => $popular['result'],
             'name'=>$nume,
             'menu'=>$menu['result'],
             'articles'=>$sort['result'],
             ]; 
          }
         if($nume == 'items'){
             $connect = $this->get('database_connection');
             $sort['result'] = $connect->fetchAll('SELECT * FROM `'.$nume.'`  ORDER By `Nm` DESC LIMIT 12');
           $data = [
                 'search1'=>$search1['result'],
              'tip'=>'names',
              'ts'=>'DESC',
               'a'=>1,
               'b'=>1,
               'count'=>ceil($rez),
               'popular'=>$popular['result'],
             'name'=>'items',
             'menu'=>$menu['result'],
             'items'=>$sort['result'],
          ]; 
           
        }
      return $this->render('AppBundle:Default:index2.html.twig',compact('data'));
   
     }
     
     /**
     * @Route("/ascpret/",name="ascpret")
     */
     function ascpretAction(){
                  $menuRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('AppBundle:Menu');
        $menu['result'] = $menuRepository->showAction();
        
        $connect = $this->get('database_connection');
         $search1['result'] = $connect->fetchAll("select DISTINCT Nm From companies");
         $popular['result'] = $connect->fetchAll('select * from companies order by `views` DESC limit 5');
        $sort['result'] = $connect->fetchAll('SELECT * FROM `items`  ORDER By `SalePrice` ASC LIMIT 12');
        $rezult = $connect->fetchAll('select *from items ');
         $count = 0;
            foreach($rezult as $item){
                $count++;
            }
            $rez= $count/12;
        
        
           $data = [
                 'search1'=>$search1['result'],
              'tip'=>'pret',
              'ts'=>'DESC',
               'a'=>1,
               'b'=>1,
               'popular' => $popular['result'],
               'count'=>ceil($rez),
             'name'=>'items',
             'menu'=>$menu['result'],
             'items'=>$sort['result'],
          ]; 
      
      return $this->render('AppBundle:Default:index2.html.twig',compact('data'));
   
     }
      /**
     * @Route("/descpret/",name="descpret")
     */
     function descpretAction(){
               $menuRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('AppBundle:Menu');
        $menu['result'] = $menuRepository->showAction();
        
        $connect = $this->get('database_connection');
         $search1['result'] = $connect->fetchAll("select DISTINCT Nm From companies");
         $popular['result'] = $connect->fetchAll('select * from companies order by `views` DESC limit 5');
        $sort['result'] = $connect->fetchAll('SELECT * FROM `items`  ORDER By `SalePrice` DESC LIMIT 12');
        $rezult = $connect->fetchAll('select *from items ');
         $count = 0;
            foreach($rezult as $item){
                $count++;
            }
            $rez= $count/12;
        
        
           $data = [
                 'search1'=>$search1['result'],
              'tip'=>'pret',
              'ts'=>'DESC',
               'a'=>1,
               'b'=>1,
               'popular' => $popular['result'],
               'count'=>ceil($rez),
             'name'=>'items',
             'menu'=>$menu['result'],
             'items'=>$sort['result'],
          ]; 
      
      return $this->render('AppBundle:Default:index2.html.twig',compact('data'));
   
     }
    
}