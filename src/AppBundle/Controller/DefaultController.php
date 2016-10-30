<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Default:index.html.twig');
    }

    /**
     * @Route("/display", name="display")
     * @Method("GET")
     */
    public function displayAction()
    {
        $persons = $this->getDoctrine()->getRepository('AppBundle:Person')->findAll();
        $persons = $this->get('serializer')->serialize($persons, 'json');
        $resp = new Response($persons);
        $resp->headers->set('Content-Type','application/json');
        return $resp;
    }
}
