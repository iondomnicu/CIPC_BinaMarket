<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\CompaniesRepository;
/**
 * @Template()
 */
class PaginationController extends Controller{
    /**
     * @Route("/page/{i}/{name}/{tip}/{ts}",name="page")
     */
    function paginationAction($i,$name,$tip,$ts=null){
         $menuRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('AppBundle:Menu');
        $menu['result'] = $menuRepository->showAction();
        
        $connect = $this->get('database_connection');
         $search1['result'] = $connect->fetchAll("select DISTINCT Nm From companies");
        $popular['result'] = $connect->fetchAll('select * from companies order by `views` DESC limit 5');
        $popular['items'] = $connect->fetchAll('select * from items order by `views` DESC limit 5');
         $nn = $i;
         $nn--;
         $rezult = $connect->fetchAll('select * from '.$name);
                $count = 0;
              foreach($rezult as $item){
                  $count++;
              }
              $rez= $count/12;
               $m=$i-1;
               $m=$m*12;if($m>0){
               $m--;}
        if($tip == 'names'){
           
             if($name == 'companies'){
                  if($ts == null){
                 $company['rezult']= $connect->fetchAll('select * from '.$name.'  LIMIT 12 OFFSET '.$m);
            }else{
            $company['rezult']= $connect->fetchAll('select * from '.$name.' Order By `Nm` '.$ts.'  LIMIT 12 OFFSET '.$m);}
                $data = [
                      'search1'=>$search1['result'],
                    'this'=>$i,
                   'name'=>$name,
                   'menu'=>$menu['result'],
                   'tip'=>$tip,
                   'ts'=>$ts,
                   'a'=>++$i,
                   'b'=>$nn,
                    'popular'=>$popular['result'],
                   'companies' => $company['rezult'],
                   'count' =>  ceil($rez),
                 ];
             } 
               if($name == 'items'){
                          if($ts == null){
                   $company['rezult']= $connect->fetchAll('select * from '.$name.'  LIMIT 12 OFFSET '.$m);
                  }else{
                   $company['rezult']= $connect->fetchAll('select * from '.$name.' Order By `Nm` '.$ts.'  LIMIT 12 OFFSET '.$m);}
                $data = [
                      'search1'=>$search1['result'],
                    'this'=>$i,
                   'name'=>$name,
                   'menu'=>$menu['result'],
                   'tip'=>$tip,
                   'ts'=>$ts,
                   'a'=>++$i,
                   'b'=>$nn,
                    'popularitem'=>$popular['items'],
                   'items' => $company['rezult'],
                   'count' =>  ceil($rez),
                 ]; 
             }if($name == 'articles'){
                if($ts == null){
                   $company['rezult']= $connect->fetchAll('select * from '.$name.'  LIMIT 12 OFFSET '.$m);
                  }else{
                   $company['rezult']= $connect->fetchAll('select * from '.$name.' Order By `title` '.$ts.'  LIMIT 12 OFFSET '.$m);}
               $data = [
                     'search1'=>$search1['result'],
                   'this'=>$i,
                   'name'=>$name,
                   'menu'=>$menu['result'],
                   'tip'=>$tip,
                   'ts'=>$ts,
                   'a'=>++$i,
                   'b'=>$nn,
                   'popular'=>$popular['result'],
                   'articles' => $company['rezult'],
                   'count' =>  ceil($rez), 
               ];
             }
        }
        else{
           if($ts == null){
                 $company['rezult']= $connect->fetchAll('select * from '.$name.'  LIMIT 12 OFFSET '.$m);
            }else{
            $company['rezult']= $connect->fetchAll('select * from '.$name.' Order By `SalePrice` '.$ts.'  LIMIT 12 OFFSET '.$m);}
             if($name == 'items'){
                $data = [
                      'search1'=>$search1['result'],
                    'this'=>$i,
                   'name'=>$name,
                   'menu'=>$menu['result'],
                   'tip'=>$tip,
                   'ts'=>$ts,
                   'a'=>++$i,
                   'b'=>$nn,
                    'popularitem'=>$popular['items'],
                   'items' => $company['rezult'],
                   'count' =>  ceil($rez),
                 ]; 
             }
        }
        return $this->render('AppBundle:Default:index2.html.twig',compact('data'));
    }
}