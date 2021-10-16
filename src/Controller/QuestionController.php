<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function homepage()
    {
        return new Response('Какой чарующий контроллер мы создали!');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            ucwords(str_replace('-', ' ', $slug)),
            $slug
        ));
    }
}