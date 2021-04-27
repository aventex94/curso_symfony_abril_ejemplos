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
        
        
        $roles = ["ADMINISTRADOR", "OPERADOR", "CARGA_USUARIOS"];
        
        
        return $this->render('user/alta_user.hml.twig',["roles" => $roles, "valor" => 1 ]);



       
    }
    /**
     * @Route("/list",name="list_user")
     */
    public function listUser(Request $request){

        $em = $this->getDoctrine()->getManager();
        
        
        $listaUsuarios = $em->getRepository(Usuario::class)->findAll(); //Me traigo todos los usuarios
        $usuario = $em->getRepository(Usuario::class)->findByNombre('Carlin'); //Me traigo al usuario con nombre Carlin
        
        return $this->render('user/list_user.html.twig',["users" => $listaUsuarios, "usuariologueado" => $usuario[0]]);


        
    }

    //
    /**
     * @Route("/habilitar/{user}", name="user_habilitar")
     */
    /*
    public function habilitar(Request $request, Usuario $user){
        //Habilitamos al usuario;
        $user->habilitar();
        return $user;
    }*/

}