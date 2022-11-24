<?php

namespace App\Controller;

use App\Taxes\Calculator;
use App\Taxes\Detector;
use Cocur\Slugify\Slugify;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class HelloController
{
    protected $calculator;
    protected $detector;

    public function __construct(Calculator $calculator, Detector $detector)
    {
        $this->calculator = $calculator;
        $this->detector = $detector;
    }


    public function hello($prenom, Environment $twig)
    {
        $html = $twig->render('hello.html.twig', [
            'prenom'=>$prenom,
            'ages'=>[
                12,
                18,
                29,
                15
            ]
        ]);
        return new Response($html);
    }
}
