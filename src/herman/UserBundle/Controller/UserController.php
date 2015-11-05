<?php

namespace herman\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
        //accedemos a Doctrine
        $em=$this->getDoctrine()->getManager();
        //apuntamos al repositorio que queremos
        $users=$em->getRepository('hermanUserBundle:User')->findAll();
        
        /*
        $res='Lista de usuarios: <br/>';
        
        foreach($users as $user){
            $res .='Usuario: '. $user->getUsername() . ' - Email: ' . $user->getEmail() . '<br/>';
        }
        
        return new Response($res);
        */
        
        //RENDERIZAMOS NUESTRA ACCION HACIA LAS PLANTILLAS TWIG
        return $this->render('hermanUserBundle:User:index.html.twig', array('users'=>$users));
        
        
    }
    
    public function viewAction($id){
        
       $repository=$this->getDoctrine()->getRepository('hermanUserBundle:User');
       
       $user=$repository->find($id);
       
       //return new Response('Usuario: '. $user->getUsername(). ' con email: '. $user->getEmail());
       return $this->render('hermanUserBundle:User:view.html.twig', array('user'=>$user));
    }
    
}
