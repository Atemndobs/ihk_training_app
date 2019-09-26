<?php


namespace AppController;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/home")
     */
    public function index(){

        $name = 'Atem';
        return $this->render('view/home.html.twig', [
            'name'=> $name
        ]);
    }


}