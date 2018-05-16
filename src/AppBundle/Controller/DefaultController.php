<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/ejercicio-1", name="homepage")
     */
    public function ejercicioUnoAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/ejercicio_1.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/sesion-2", name="sesion_2")
     */
    public function sesionDosAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/sesion_2.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/sesion-2-1", name="sesion_2")
     */
    public function sesionDosUnoAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/sesion_2_1.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/sesion-2-2", name="sesion_2")
     */
    public function sesionDosDosAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/sesion_2_2.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/sesion-2-layout-theme", name="sesion_2_layout_theme")
     */
    public function sesionDosLayoutThemeAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/sesion_2_layout_theme.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/sesion-3", name="sesion_3")
     */
    public function sesionTresAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/sesion_3.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}