<?php

namespace FriendsProfileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;


class ProfileHandlerController extends Controller {

    public function profileHandleAction($email) {
//load image

        $em = $this->getDoctrine()->getManager();

        $repo = $em->getRepository('FriendsLoginBundle:Profile');
        $profile = $repo->findOneBy(array('email' => $email));
        
        if ($profile) {
            return $this->render('FriendsProfileBundle:Profile:profile.html.twig', array('profile' => $profile            
            ));
        } else {
            return new Response('Error');
        }
    }
    
    public function imageAction($email){
        
        $em = $this->getDoctrine()->getManager();

        $repo = $em->getRepository('FriendsLoginBundle:Profile');
        $profile = $repo->findOneBy(array('email' => $email));
        $image=$profile->getImage();
        
        $response = new StreamedResponse(function () use ($image) {
            echo stream_get_contents($image);
        });
        
        $response->headers->set('Content-Type', 'image/jpeg');
        return $response;
    }

}
