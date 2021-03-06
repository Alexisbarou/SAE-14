<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Sae14Controller extends AbstractController
{
    /**
     * @Route("/sae14", name="sae14")
     */
    public function index()
    {
        return $this->render('sae14/index.html.twig', [
            'controller_name' => 'Sae14Controller',
        ]);
    }
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('sae14/home.html.twig');
    }

    /**
     * @Route("/moncv", name="moncv")
     */
    public function cv ()
    {
        return $this->render('sae14/cv.html.twig');
    }

    /**
     * @Route("/moneportfolio", name="moneportfolio")
     */
    public function portfolio ()
    {
        return $this->render('sae14/portfolio.html.twig');
    }

    /**
     * @Route("/moneportfoliocca", name="moneportfoliocca")
     */
    public function portfoliocca ()
    {
        return $this->render('sae14/portfoliocca.html.twig');
    }

    /**
     * @Route("/moneportfolioccb", name="moneportfolioccb")
     */
    public function portfolioccb ()
    {
        return $this->render('sae14/portfolioccb.html.twig');
    }

    /**
     * @Route("/moneportfolioccc", name="moneportfolio/ccc")
     */
    public function portfolioccc ()
    {
        return $this->render('sae14/portfolioccc.html.twig');
    }
    
    /**
     * @Route("/quisuisje", name="quisuisje")
     */
    public function quisuisje ()
    {
        return $this->render('sae14/quisuisje.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact ()
    {
        return $this->render('sae14/contact.html.twig');
    }
}