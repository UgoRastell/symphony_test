<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HelloController extends AbstractController
{

    public function hello($prenom)
    {
        return $this->render('hello.html.twig', [
            "prenom"=> $prenom
        ]);
    }

    public function example(){

        return $this->render('example.html.twig', [
            "age"=> 33
        ]);
    }
}
