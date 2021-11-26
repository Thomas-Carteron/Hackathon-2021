<?php

namespace App\Model;

class ApiManager extends AbstractManager
{
    public const TABLE = 'leader_board';

    public function insertNgrokInBdd(string $name, int $time)
    {
        $statement = $this->pdo->prepare("
        INSERT INTO leader_board (name, best_time)
        VALUES (:name, :best_time)");
        $statement->bindValue(':name', $name, \PDO::PARAM_STR);
        $statement->bindValue(':best_time', $time, \PDO::PARAM_INT);
        $statement->execute();
    }
}
