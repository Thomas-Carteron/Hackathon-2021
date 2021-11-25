<?php

namespace App\Controller;

class EastereggController extends AbstractController
{
    public function message()
    {
        return $this->twig->render('EasterEgg/easterEgg.html.twig');
    }
}
