<?php

namespace WCS\FlyAroundBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WCSFlyAroundBundle:Default:index.html.twig');
    }
}
