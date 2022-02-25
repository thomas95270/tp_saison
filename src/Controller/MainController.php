<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    //Route ACCUEIL
    #[Route('/', name: 'accueil')]
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    //Route SAISON
    #[Route('/{saison}', name: 'saison')]
    public function saison($saison): Response
    {
        if($saison=='Printemps'){
            $message=$saison;
            $image= 'images/printemps.jpg';
            $comment='Au printemps, les fleurs s\'ouvrent et l\'herbe redevient verte';

        }else if($saison=='Ete'){
            $message=$saison;
            $image='images/ete.jpg';
            $comment='L\'été, il fait souvent chaud et beau';

        }else if($saison=='Automne'){
            $message=$saison;
            $image='images/automne.jpg';
            $comment='En automne, les feuiles des arbres tombent';

        }else if($saison=='Hiver'){
            $message=$saison;
            $image='images/hiver.jpg';
            $comment='En hiver, il neige parfois, et il fait souvent froid';
            
        }else{
            $saison='Hiver';
            $message='Oops, cette saison n\'existe pas';
            $image='';
            $comment='';
        }
        return $this->render('saison.html.twig', [
            'saison' => $saison,
            'message' => $message,
            'image' => $image,
            'comment' => $comment
        ]);
    }
}
