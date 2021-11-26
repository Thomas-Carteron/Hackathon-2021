<?php

namespace App\Model;

class ApiManager extends AbstractManager
{
    public const TABLE = 'user';

    public function insertNgrokInBdd(string $name, int $time)
    {
        $statement = $this->pdo->prepare("
        INSERT INTO user (name, best_time)
        VALUES (:name, :best_time)");
        $statement->bindValue(':name', $name, \PDO::PARAM_STR);
        $statement->bindValue(':time', $time, \PDO::PARAM_INT);
        $statement->execute();
    }
    public function insertNgrokInBdd2(string $name, int $time)
    {
        $statement = $this->pdo->prepare("
        INSERT INTO user (name, best_time)
        VALUES (:name, :best_time)");
        $statement->bindValue(':name', $name, \PDO::PARAM_STR);
        $statement->bindValue(':time', $time, \PDO::PARAM_INT);
        $statement->execute();
    }
}
