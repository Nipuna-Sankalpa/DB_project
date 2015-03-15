<?php

namespace FriendsLoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FriendsTestBundle\Entity\Login;
use FriendsTestBundle\Entity\UserMobile;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render("FriendsLoginBundle:Login:login.html.twig",array(
            'msg'=>FALSE,
            'content'=>null
        ));
    }

}
