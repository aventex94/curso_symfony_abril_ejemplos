<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use App\Entity\Usuario;

/**
 * @Route("/users")
 */

class UserController extends AbstractController{

    /**
     * @Route("/alta",name="alta_user")
     */
    public function altaUser(Request $request){

        $em = $this->getDoctrine()->getManager();
        $usuarios = $em->getRepository(Usuario::class)->findAll();

        dump($usuarios);
        die;
        
        $roles = ["ADMINISTRADOR", "OPERADOR", "CARGA_USUARIOS"];
        
        
        return $this->render('user/alta_user.hml.twig',["roles" => $roles, "valor" => 1 ]);
    }

}