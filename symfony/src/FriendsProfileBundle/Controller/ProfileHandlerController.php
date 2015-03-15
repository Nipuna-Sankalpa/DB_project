<?php

namespace FriendsProfileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ProfileHandlerController extends Controller {

    public function profileHandleAction($email) {
//load image
        $imgURL = $this->getRequest()->getUriForPath('/img/proPic.jpg');
        $em=$this->getDoctrine()->getManager();
        
        $repo=$em->getRepository('FriendsLoginBundle:Profile');
        $profile=$repo->findOneBy(array('email'=>$email));
        
        if ($profile) {
            return $this->render('FriendsProfileBundle:Profile:profile.html.twig', array('profile' => $profile,
                'imgPath'=>$imgURL
                ));
        }
        else{
            return new Response('Error');
        }

        
        
    }

}
