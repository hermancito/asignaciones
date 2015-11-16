<?php

namespace herman\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use herman\UserBundle\Entity\User;
use herman\UserBundle\Form\UserType;


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
    
    public function addAction(){
        
        $user=new User();
        $form=$this->createCreateForm($user);
        
        return $this->render('hermanUserBundle:User:add.html.twig', array('form'=>$form->createView()));
    }
    
    private function createCreateForm(User $entity){
        $form=$this->createForm(new UserType(), $entity, array(
                'action'=>$this->generateUrl('herman_user_create'),
                'method'=>'POST'
            ));
            
        return $form;
    }
    
    public function createAction(Request $request){
        
        $user=new User();
        $form=$this->createCreateForm($user);
        $form->handleRequest($request);
        
        if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            
            return $this->redirectToRoute('herman_user_index');
        }
        
        return $this->render('hermanUserBundle:User:add.html.twig', array('form'=>$form->createView()));
    }
}
