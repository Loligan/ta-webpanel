<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Project controller.
 *
 * @Route("/")
 */
class DefaultController extends Controller
{
    /**
     * Lists all project entities.
     *
     * @Route("/", name="default_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig', array(

        ));
    }
}
