<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController
{
    /**
    * @Route("/", name="app_homepage")
     */
    public function homepage(Environment $twigEnvironment)
    {
        /* Correspond à :
        $html = $twigEnvironment->render('question/homepage.html.twig');
        return new Response($html);
        */
        
        return $this->render('question/homepage.html.twig');
    }

    /**
    * @Route("/questions/{slug}", name="app_question_show")
     */
    public function show($slug)
    {

        $answers = [
            'Make sure your cat is sitting purrrfecty still',
            'Honestly, I like furry shoes better than MY cat',
            'Maybe...try saying the spell backwards?',
        ];

        dump($this);

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers,
        ]);

        /*return new Response(sprintf(
        'Future page to show a question "%s"!',
        ucwords(str_replace('-', ' ', $slug))
        ));*/
    }
}
