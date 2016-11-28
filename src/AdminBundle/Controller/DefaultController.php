<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AdminBundle:Default:index.html.twig', array('name' => $name));
    }

    public function dashboardAction()
    {
        return $this->render('AdminBundle:Default:dashboard.html.twig');
    }

    public function layoutAction()
    {
        return $this->render('AdminBundle::layout.html.twig');
    }

    public function grapheAction()
    {
        return $this->render('AdminBundle:Templates:graphe.html.twig');
    }
}
