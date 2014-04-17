<?php

namespace Wolf\ScmCityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WolfScmCityBundle:Default:index.html.twig', array('name' => $name));
    }
}
