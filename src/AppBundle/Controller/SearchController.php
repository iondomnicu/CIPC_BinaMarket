<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
/**
 * @Template()
 */
class SearchController extends Controller
{
    /**
     *@Route("/search/", name="search")
     */
    public function indexAction(Request $request)
    {
        
        if ($request->getMEthod() == 'POST') {
            $title = $request->get('search');
            //echo "<div class=\"searchText\">Search Results</div><hr/>";
            $connect = $this->get('database_connection');
            
            $Search_terms = explode(' ', $title); //splits search terms at spaces
            $query = "SELECT * FROM companies WHERE ";
            $query1 = "SELECT * FROM items WHERE ";
            foreach ($Search_terms as $each) {
                // echo $each."<br/>";
                $i = 0;
                $i++;
                if ($i == 1){
                    $query .= "Nm LIKE '%$each%' ";
                    $query1 .= "Nm LIKE '%$each%' ";
                } 
                else
                    $query .= "OR Nm LIKE '%$each%' ";
                    $query1 .= "OR Nm LIKE '%$each%' ";
            }
            $searsh['result'] = $connect->fetchAll($query);
            $search['result'] = $connect->fetchAll($query1);
         
    
    $menuRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('AppBundle:Menu');
        $menu['result'] = $menuRepository->showAction();
    $data =[
        'menu'=>$menu['result'],
        'shearch' => $searsh['result'],
        'search' => $search['result'],
    ];
 return $this->render('AppBundle:Default:index2.html.twig',compact('data'));
}}
}