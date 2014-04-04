<?php

namespace Wolf\ScmCityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('WolfScmCityBundle:main:index.html.twig');
    }
}
