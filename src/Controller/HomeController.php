<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class HomeController extends AbstractController{
    /**
     * @Route("/prueba", name="prueba")
     */
    public function HomeAction(Request $request){
        return $this->render('base.html.twig');
    }
}