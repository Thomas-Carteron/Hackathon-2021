<?php

namespace App\Controller;

class HistoryController extends AbstractController
{
    public function history()
    {
        return $this->twig->render('Components/history.html.twig');
    }
}