<?php

namespace Abloqov\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AbloqovUtilisateurBundle:Default:index.html.twig');
    }
}
