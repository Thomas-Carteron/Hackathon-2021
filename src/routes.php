<?php

return [
    ''             => ['HomeController', 'index',],
    'user'         => ['UserController', 'profil', ['id']],
    'user/connect' => ['UserController', 'connect',],
    'user/create'  => ['UserController', 'register',],
    'classement'   => ['LeaderboardController', 'index'],
    'history'      => ['HistoryController', 'history'],
    'easterEgg'    => ['EastereggController', 'message',],
    'gameOver'     => ['GameoverController', 'gameOver',],
    'ngrok'        => ['ApiController', 'index'],

];
