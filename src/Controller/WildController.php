<?php
// src/Controller/WildController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/wild", name="wild_index")
 */

class WildController extends AbstractController
{

    public function index() :Response
    {
            return $this->render('wild/index.html.twig', ['website' => 'Wild Séries']);
    }

    /**
     * @Route("/show/{slug}", requirements={"slug"="[a-z0-9-]+"}, defaults={"slug"="#"}, name="wild_show")
     * @param string $slug
     * @return Response
     */
    public function show(string $slug) :Response
    {
        if($slug === '#'){
            $finalSlug = 'Aucune série sélectionnée, veuillez choisir une série';
        } else {
            $lowerSlug = str_replace('-', ' ', $slug);
            $finalSlug = ucwords($lowerSlug);
        }
        return $this->render('wild/show.html.twig', ['slug' => $finalSlug]);
    }
}