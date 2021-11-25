<?php

namespace App\Controller;

class GameoverController extends AbstractController
{
    public function gameOver()
    {
        return $this->twig->render('EasterEgg/gameOver.html.twig');
    }
}