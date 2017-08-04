<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class ProgrammingController extends Controller
{
    /**
    * @Route("/code/resume", name="ProgrammingResume")
    */
    public function codeResumeAction(Request $request)
    {
        return $this->render('fragments/_resume.html.twig', [
            'list' => array(
                array('address' => $this->generateUrl('home'), 'name' => 'Home'),
                array('address' => '#', 'name' => 'Code'),
                array('address' => $this->generateUrl('ProgrammingResume'), 'name' => 'Resume')
            ),
            'resumeText' => 'media/Albright Kevin M - Resume.pdf',
            'resumePDF' => $this->generateUrl('ProgrammingResumePDF')
        ]);
    }

    /**
    * @Route("/code/resume-pdf", name="ProgrammingResumePDF")
    */
    public function dddResumePdfAction(Request $request)
    {
        $file = new File('media/Albright Kevin M - Resume.pdf');
        return $this->file($file);
    }

    /**
    * @Route("/code/projects", name="ProgrammingProjects")
    */
    public function codeProjectsAction(Request $request)
    {
        return $this->render('default/index.html.twig', [
            'list' => array(
                array('address' => $this->generateUrl('home'), 'name' => 'Home'),
                array('address' => '#', 'name' => 'Code'),
                array('address' => $this->generateUrl('ProgrammingProjects'), 'name' => 'Projects')
            )
        ]);
    }
}