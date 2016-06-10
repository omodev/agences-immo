<?php

namespace AGPlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AGPlatformBundle:Default:index.html.twig');
    }
}
