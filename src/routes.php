<?php

return [
    '' => ['HomeController', 'index',],
    'user' => ['UserController', 'profil', ['id']],
    'user/connect' => ['UserController', 'connect',],
    'user/create' => ['UserController', 'register',],
    'classement' => ['LeaderboardController', 'index'],
    'easterEgg'                   => ['EastereggController', 'message',],
    'gameOver'                   => ['GameoverController', 'gameOver',],
];
