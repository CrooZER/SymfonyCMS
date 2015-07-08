<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use BackBundle\Entity\Page;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository('BackBundle:Page');
        $home_page = $rep->findOneByAlias('home');
        return $this->render(':default:index.html.twig', array(
        'page' => $home_page

        ));
    }
}
