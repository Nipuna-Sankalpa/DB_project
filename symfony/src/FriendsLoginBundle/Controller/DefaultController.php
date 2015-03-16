<?php

namespace FriendsLoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FriendsTestBundle\Entity\Login;
use FriendsTestBundle\Entity\UserMobile;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render("FriendsLoginBundle:Login:login.html.twig",array(
            'msg'=>FALSE,
            'content'=>null
        ));
    }
    /**
    * @Route("/admin")
    */
    public function adminAction()
    {
        return new Response('Admin page!'.$this->getUser()->eraseCredentials());
    }
}
