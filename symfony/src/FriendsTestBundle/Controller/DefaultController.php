<?php

namespace FriendsTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FriendsTestBundle\Entity\Login;
use FriendsTestBundle\Entity\Name;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FriendsTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
