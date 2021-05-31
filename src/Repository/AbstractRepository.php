<?php

namespace Application\Repository;

use Application\Application\Database\PDODatabase;

class AbstractRepository
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
}