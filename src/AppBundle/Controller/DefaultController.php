<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'list' => array(
                array('address' => $this->generateUrl('home'), 'name' => 'Home')
            )
        ]);
    }

    /**
    * @Route("/about", name="about")
    */
    public function aboutAction(Request $request)
    {
        return $this->render('fragments/_about.html.twig', [
            'list' => array(
                array('address' => $this->generateUrl('home'), 'name' => 'Home'),
                array('address' => $this->generateUrl('about'), 'name' => 'About')
            )
        ]);
    }
}
