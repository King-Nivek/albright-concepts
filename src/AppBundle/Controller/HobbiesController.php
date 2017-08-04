<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HobbiesController extends Controller
{
    /**
    * @Route("/hobbies/lego-designs", name="HobbiesLegoDesigns")
    */
    public function hobbyLegoDesignsAction(Request $request)
    {
        return $this->render('fragments/_imageGallery.html.twig', [
            'list' => array(
                array('address' => $this->generateUrl('home'), 'name' => 'Home'),
                array('address' => '#', 'name' => 'Hobbies'),
                array('address' => $this->generateUrl('HobbiesLegoDesigns'), 'name' => 'Lego Designs')
            )
        ]);
    }
}