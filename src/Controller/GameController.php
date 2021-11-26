<?php

namespace App\Controller;

class GameController extends AbstractController
{
    public function showGame()
    {
        return $this->twig->render('Components/_game.html.twig');
    }
}
