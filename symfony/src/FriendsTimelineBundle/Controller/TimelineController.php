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
use FriendsEntityBundle\Entity\Posts;

class TimelineController extends Controller {

    public function indexAction(Request $request) {
        $post = new Posts();
        $tmp = $_GET['email'];
        
        /*         * **aquiring logged email****** */
        if (filter_var($tmp, FILTER_VALIDATE_EMAIL)) {

            $userMail = $tmp;
        } else {
            // decide where you want to go
        }


        /*         * **aquiring logged email****** */


        $form = $this->createFormBuilder($post)
                ->add('content', 'textarea')
                ->add('post', 'submit', array('label' => 'POST'))
                ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            return $this->redirect($this->generateUrl("post_success"));
        }

        return $this->render('FriendsTimelineBundle:Timeline:timeline.html.twig', array(
                    'form' => $form->createView(),
                    'email' => $userMail,
        ));
    }

    public function newAction(Request $request) {
        // create a post and give it some dummy data for this example
        $post = new Posts();

        $form = $this->createFormBuilder($post)
                ->add('post', 'text')
                ->add('Post', 'submit', array('label' => 'Create Post'))
                ->getForm();

        return $this->render('FriendsTimelineBundle:Timeline:timeline.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

}
