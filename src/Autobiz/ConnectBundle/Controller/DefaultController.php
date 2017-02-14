<?php

namespace Autobiz\ConnectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AutobizConnectBundle:Default:index.html.twig');
    }
}
