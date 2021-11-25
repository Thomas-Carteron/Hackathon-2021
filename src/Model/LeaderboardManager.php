<?php

namespace App\Model;

class LeaderboardManager extends AbstractManager
{
    public const TABLE = 'user';

    public function selectUserByScore(): array
    {
        $statement = $this->pdo->prepare("
        SELECT *
        FROM user 
        ORDER BY high_score DESC");
        $statement->execute();
        return $statement->fetchAll();
    }
}
