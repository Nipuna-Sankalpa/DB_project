<?php

namespace FriendsLoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class LoginController extends Controller {

    public function loginAction(Request $req) {

        //store user name and password
        if ($req->getMethod() == "POST") {
            $user_mail = $req->get('mail');
            $user_pass = sha1($req->get('password'));

//derive entity manager
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('FriendsEntityBundle:Profile');
            $user = $repository->findOneBy(array('email' => $user_mail, 'password' => $user_pass));

            if ($user) {
                //if user exist redirect to profile
                return new Response('Login completed'.($this->getUser()->getUsername()));
            } else {
                //render sign up page with error message
                return new Response('Login Error');
            }
        }

        return $this -> render('FriendsLoginBundle:Login:login.html.twig');
    }

}
