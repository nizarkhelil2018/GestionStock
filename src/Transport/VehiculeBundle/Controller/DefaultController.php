<?php

namespace Transport\VehiculeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TransportVehiculeBundle:Default:index.html.twig');
    }
}
