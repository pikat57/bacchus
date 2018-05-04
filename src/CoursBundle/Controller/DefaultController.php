<?php

namespace CoursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //$attributes= "atributes:'ROLE_USER'";
        //$this->denyAccessUnlessGranted($attributes);
        return $this->render('CoursBundle:Default:index.html.twig');
    }
}
