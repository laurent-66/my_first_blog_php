<?php

namespace Application\Repository;

use Application\Application\Database\PDODatabase;

class UserRepository
{
    protected $database;

    public function __construct()
    {
        try {
            $this->database = new PDODatabase(
                'mysql:host=127.0.0.1;dbname=myblogphp;charset=utf8',
                'root',
                '',
            );
        } catch (\Exception $e) {
            dump($e);
        }
    }

    public function findByEmail(string $email)
    {
        $query = 'SELECT * FROM user WHERE email = :email';
        $statement = $this->database->request($query, [':email' => $email]);;
        return $statement->fetch;
    }

}