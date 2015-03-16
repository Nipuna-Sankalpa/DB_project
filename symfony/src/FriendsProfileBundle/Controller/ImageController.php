<?php

namespace FriendsProfileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ImageController extends Controller
{
    public function imageAction($image){
        
        $response = new StreamedResponse(function () use ($image) {
            echo stream_get_contents($image);
        });
        
        $response->headers->set('Content-Type', 'image/png');
        return $response;
    }
}
