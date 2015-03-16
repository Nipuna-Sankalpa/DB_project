<?php

namespace FriendsLoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FriendsLoginBundle\Entity\Profile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class SignUpController extends Controller {

    public function signupAction(Request $req) {
        $profile = new Profile();

        if ($req->getMethod() == 'POST') {

            try {
                $profile->setEmail($req->get('email'));
            } catch (Exception $exc) {
                return $this->render('FriendsLoginBundle:Login:login.html.twig', array('msg' => TRUE,
                            'content' => "e-mail.It is already exist"
                ));
            }

            $profile->setFirstName($req->get('first_name'));
            $profile->setLastName($req->get('last_name'));
            $profile->setPassword(sha1($req->get('password')));

            $em = $this->getDoctrine()->getManager();
            $em->persist($profile);
            $em->flush();

            return $this->redirect($this->generateUrl("profile_edit",array('email'=>$req->get('email'))));
        } else {
            return $this->render('FriendsLoginBundle:Login:login.html.twig', array('msg' => TRUE,
                        'content' => "SignUp"
            ));
        }
    }

}
