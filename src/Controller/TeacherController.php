<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class TeacherController extends AbstractController
{
   
/**
 * @Route("/teacher", name="app_teacher")
 */

        public function index(): Response{
     
            return new Response('Bonjour');

    }
    public function showTeacher($name,$id){
        return new Response ('Bonjour'.' '.$name.' '.$id);
    }
      
}
