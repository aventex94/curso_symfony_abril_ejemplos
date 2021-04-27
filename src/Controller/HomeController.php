<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


class HomeController extends AbstractController{
    
    /**
     * @Route("/home", name="home")
     */
    public function HomeAction(Request $request){
        
        return $this->render('base.html.twig');

    }
    /**
     * @Route("/login",name="login")
     */
    public function loginAction(Request $request){
        
        return $this->render('login.html.twig');
    }

    

    
}