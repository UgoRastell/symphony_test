<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestController
{
    public function index (){
        dd("ok");
    }
    /**
     * @Route("/test/{age<\d+>?0}", name="test", methods={"GET", "POST}, schemes={"http", "https"})
     */


    public function test(Request $request, $age)
    {
        return new Response("Vous avez $age ans");
    }
}