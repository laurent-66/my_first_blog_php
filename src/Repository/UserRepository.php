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

    public function registerUser(string $email, string $password)
    {
        $passwordHash = password_hash($password,PASSWORD_DEFAULT);

        $query = "INSERT INTO {$this->getTableName()}(
            email,
            password
            )
            VALUES(
            email = :email,
            password = :password
            )";

            $statement = $this->database->request($query,[':email'=> $email, ':password' => $passwordHash]);

        return $statement;

    }


    public function disconnect(string $email)
    {
        $query = "SELECT * FROM {$this->getTableName()} WHERE email = :email";
        $statement = $this->database->request($query, [':email' => $email]);
        return $statement->fetch();
    }







}