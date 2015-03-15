<?php

namespace FriendsTimelineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FriendsTimelineBundle:Default:index.html.twig', array('name' => $name));
    }
}
