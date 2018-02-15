<?php

namespace Bu\BuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BuBuBundle:Default:index.html.twig');
    }
}
