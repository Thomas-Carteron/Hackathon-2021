<?php

namespace App\Model;

class LeaderboardManager extends AbstractManager
{
    public const TABLE = 'leader_board';

    public function selectUserByScore(): array
    {
        $statement = $this->pdo->prepare("
        SELECT *
        FROM leader_board 
        ORDER BY best_time ASC");
        $statement->execute();
        return $statement->fetchAll();
    }
}
