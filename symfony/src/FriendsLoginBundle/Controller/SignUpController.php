<?php

namespace FriendsLoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FriendsLoginBundle\Entity\Profile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class SignUpController extends Controller {

    public function signupAction(Request $req) {
        $profile=new Profile();

        if ($req->getMethod()=='POST') {
            $profile->setEmail($req->get('email'));
            $profile->setFirstName($req->get('first_name'));
            $profile->setLastName($req->get('last_name'));
            $profile->setPassword(sha1($req->get('password')));
            
            $em=$this->getDoctrine()->getManager();
            $em->persist($profile);
            $em->flush();
            
            return new Response('sign up completed');
        }
        
        else{
            return new Response('sign up Error');
        }
        
    }

}
