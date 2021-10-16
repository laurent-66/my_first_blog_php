<?php

namespace Application\Repository;

use Application\Repository\AbstractRepository;

class UserRepository extends AbstractRepository
{
    protected function getTableName(): string
    {
        return 'user';
    }

    public function findByEmail(string $email)
    {
        $query = "SELECT * FROM {$this->getTableName()} WHERE email = :email";
        $statement = $this->database->request($query, [':email' => $email]);
        return $statement->fetch();
    }

    public function registerUser(string $pseudo, string $email, string $password)
    {
        $query = "INSERT INTO {$this->getTableName()} (
            pseudo,
            email,
            password
            )
            VALUES(
            :pseudo,    
            :email,
            :password
            )";

            $statement = $this->database->request($query, [
            ':pseudo' => $pseudo,
            ':email' => $email,
            ':password' => $password

            ]);

        return $statement;
    }
}
