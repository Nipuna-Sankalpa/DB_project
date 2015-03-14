<?php
/**
 * Created by PhpStorm.
 * User: Pubudu
 * Date: 3/15/2015
 * Time: 1:02 AM
 */

namespace FriendsTimelineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TimelineController extends Controller
{
    public function indexAction(Request $request)
    {
        $number = rand(1, 10000);

        return $this->render(
            'FriendsTimelineBundle:Timeline:timeline.html.twig',
            array('number' => $number)
        );
    }
}