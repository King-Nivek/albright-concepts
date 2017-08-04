<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class DddModelingController extends Controller
{
    /**
    * @Route("/3d/resume", name="3dModelingResume")
    */
    public function dddResumeAction(Request $request)
    {
        return $this->render('fragments/_resume.html.twig', [
            'list' => array(
                array('address' => $this->generateUrl('home'), 'name' => 'Home'),
                array('address' => '#', 'name' => '3d'),
                array('address' => $this->generateUrl('3dModelingResume'), 'name' => 'Resume')
            ),
            'resumeText' => 'media/kmAlbright_Resume.pdf',
            'resumePDF' => $this->generateUrl('3dModelingResumePDF')
        ]);
    }

    /**
    * @Route("/3d/resume-pdf", name="3dModelingResumePDF")
    */
    public function dddResumePdfAction(Request $request)
    {
        $file = new File('media/kmAlbright_Resume.pdf');
        return $this->file($file);
    }

    /**
    * @Route("/3d/demoreel", name="3dModelingDemoReel")
    */
    public function demoReelAction(Request $request)
    {
        return $this->render('fragments/_demoReel.html.twig', [
            'list' => array(
                array('address' => $this->generateUrl('home'), 'name' => 'Home'),
                array('address' => '#', 'name' => '3d'),
                array('address' => $this->generateUrl('3dModelingDemoReel'), 'name' => 'Demo Reel')
            )
        ]);
    }

    /**
    * @Route("/3d/demoreel-download", name="3dModelingDemoReelDownload")
    */
    public function dddDemoReelDownloadAction(Request $request)
    {
        $file = new File('media/Albright_Kev_Final_Lo_HB.mp4');
        return $this->file($file);
    }

    /**
    * @Route("/3d/breakdown", name="3dModelingBreakdownPDF")
    */
    public function dddBreakdownPdfAction(Request $request)
    {
        $file = new File('media/kmAlbright_ Nov2007_DemoReel_BreakdownSheet.pdf');
        return $this->file($file);
    }

    /**
    * @Route("/3d/projects", name="3dModelingProjectList")
    */
    public function dddProjectsAction(Request $request)
    {
        return $this->render('fragments/_imageGallery.html.twig', [
            'list' => array(
                array('address' => $this->generateUrl('home'), 'name' => 'Home'),
                array('address' => '#', 'name' => '3d'),
                array('address' => $this->generateUrl('3dModelingProjectList'), 'name' => 'Projects')
            )
        ]);
    }
}