<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends AbstractController
{
    /**
 * @Route("/product", name="app_product")
 */
     public function index() :Response
     {
        $title ="products List";
        $product = array ('id'=>1 ,'name'=>'phone' , 'price'=>1000);
        $products= array(
            array('id'=>1 ,'name'=>'phone' , 'price'=>3000),
            array('id'=>2 ,'name'=>'tv' , 'price'=>1000),
            array('id'=>3 ,'name'=>'pc' , 'price'=>2000)
        );
        return $this->render('product/index.html.twig',[
            'title'=> $title,
            'productObject'=>$product,
            'productsArray' =>$products
            
        ]);
     }
}
  
