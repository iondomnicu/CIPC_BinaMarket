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
class DefaultController extends Controller
{
    /**
     * @Route("/{subjectId}", name="home")
     */
    public function indexAction(Request $request,$subjectId = null)
    {
       /* $connect = $this->get('database_connection');
        $menu['result'] = $connect->fetchAll('select * From menu');
        $companies['result'] = $connect->fetchAll('select * from companies');
        
        $data= [
          'menu'=>$menu['result'],
          'companies'=>$companies['result'],
        ];
         return $this->render('AppBundle:Default:index2.html.twig');*/
        $menuRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('AppBundle:Menu');
    /*  $cRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('AppBundle:Companies');*/
        $menu['result'] = $menuRepository->showAction();
        $connect = $this->get('database_connection');
         $search1['result'] = $connect->fetchAll("select DISTINCT Nm From companies ORDER By Nm ASC");
        $popular['result'] = $connect->fetchAll('select * from companies order by `views` DESC limit 5');
        $popular['items'] = $connect->fetchAll('select * from items order by `views` DESC limit 5');
        if($subjectId == 'items'){
         /* $itemsRepository = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('AppBundle:Articles');
            $items['result'] = $itemsRepository->showItems();*/
            $connect = $this->get('database_connection');
             $search1['result'] = $connect->fetchAll("select DISTINCT Nm From companies");
            $items['result'] = $connect->fetchAll('select * from items limit 12');
            $rezult = $connect->fetchAll("select * From items ");
            $count = 0;
            foreach($rezult as $item){
                $count++;
            }
             $rez= $count/12;
         $data= [
               'search1'=>$search1['result'],
             'this'=>1,
             'search1'=>$search1['result'],
              'tip'=>'names',
              'ts'=>null,
              'a' =>1,
              'b'=>1,
              'popularitem' =>$popular['items'],
              'name'=>'items',
              'count'=>ceil($rez),
              'menu'=>$menu['result'],
              'items'=>$items['result'],
         ];
        }else if($subjectId =='articles'){
            $connect = $this->get('database_connection');
             $search1['result'] = $connect->fetchAll("select DISTINCT Nm From companies");
            $articles['result'] = $connect->fetchAll('select * from articles limit 12');
            $rezult = $connect->fetchAll("select * From articles ");
                 $count = 0;
            foreach($rezult as $item){
                $count++;
            }
            $rez= $count/12;
         $data= [
               'search1'=>$search1['result'],
             'this'=>1,
             'search1'=>$search1['result'],
              'tip'=>'names',
              'ts'=>null,
              'a' =>1,
              'b'=>1,
              'popular' =>$popular['result'],
              'name'=>'articles',
              'count'=>ceil($rez),
              'menu'=>$menu['result'],
              'articles'=>$articles['result'],
         ];
        }else{
            
        
        
        $connect = $this->get('database_connection');
         $search1['result'] = $connect->fetchAll("select DISTINCT Nm From companies");
        $companys['result'] = $connect->fetchAll("select * From companies limit 12");
        $rezult = $connect->fetchAll("select * From companies ");
        $count = 0;
        foreach($rezult as $item){
            $count++;
        }
        $rez= $count/12;
          $data= [
                'search1'=>$search1['result'],
              'this'=>1,
              'search1'=>$search1['result'],
              'tip'=>'names',
              'ts'=>null,
              'a' =>1,
              'b'=>1,
              'popular' =>$popular['result'],
              'name'=>'companies',
              'count'=>ceil($rez),
              'menu'=>$menu['result'],
              'companies'=>$companys['result'],
         ];
        }
      
        return $this->render('AppBundle:Default:index2.html.twig',compact('data'));
    }
}
