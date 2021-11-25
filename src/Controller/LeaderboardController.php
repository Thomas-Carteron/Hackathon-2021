<?php

namespace App\Controller;

use App\Model\LeaderboardManager;

class LeaderboardController extends AbstractController
{
    public function index()
    {
        $leaderboardManager = new LeaderboardManager();
        $userScore = $leaderboardManager->selectUserByScore();
        return $this->twig->render('Leaderboard/leaderboard.html.twig', [
            'users' => $userScore,
        ]);
    }
}
