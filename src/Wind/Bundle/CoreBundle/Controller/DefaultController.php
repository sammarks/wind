<?php

namespace Wind\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WindCoreBundle:Default:index.html.twig');
    }
}
