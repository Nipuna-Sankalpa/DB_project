<?php

namespace FriendsProfileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfileHandlerController extends Controller {

    public function profileHandleAction() {
//load image
        $imgURL = $this->getRequest()->getUriForPath('/img/proPic.jpg');

        return $this->render('FriendsProfileBundle:Default:index.html.twig', array('name' => "Nipuna"));
    }

}
