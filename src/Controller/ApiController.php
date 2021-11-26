<?php

namespace App\Controller;

use App\Model\ApiManager;

class ApiController
{
 //   public function __construct()
   // {
    //    header('Content-Type: application/json');
     //   header("Access-Control-Allow-Origin: *");
      //  header("Access-Control-Allow-Methods: POST,GET,PUT,DELETE, OPTIONS");
       // header("Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Content-Type, Accept");
    //}

    public function index()
    {
        $name = $_GET['name'];
        $time = $_GET['time'];
        $apiManager = new ApiManager();
        $apiManager->insertNgrokInBdd($name, $time);
        header('Location:/classement');
    }
}
