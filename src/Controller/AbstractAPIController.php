<?php

namespace App\Controller;

use App\Model\ApiManager;

class AbstractAPIController
{
    public function __construct()
    {
        header('Content-Type: application/json');
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: POST,GET,PUT,DELETE, OPTIONS");
        header("Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Content-Type, Accept");
    }

    public function index(string $name, int $time)
    {
        $apiManager = new ApiManager();
        $apiManager->insertNgrokInBdd($name, $time);
        header('Location:/ngrok.html.twig');
    }

    public function insert(string $name, int $time)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $apiManager = new ApiManager();
            $apiManager->insertNgrokInBdd2($name, $time);
            header('Location:/ngrok.html.twig');
        }
    }
}
