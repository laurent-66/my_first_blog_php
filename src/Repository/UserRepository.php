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

    public function registerUser()
    {
        $query = "INSERT INTO {$this->getTableName()}(
            name,
            firstname,
            email,
            login,
            password,
            admin) 
            VALUES(
            name = :name,
            firstname = :firstname,
            email = :email,
            login = :login,
            password = :password,
            admin = :admin
            )";
        $statement = $this->database->request($query,[':name' => $name, ':firstname' => $firstname,
            ':email'=> $email,
            ':login' => $login,
            ':password' => $password,
            ':admin' => $admin
        ]);
        
        return $statement->fetch();
    }

}