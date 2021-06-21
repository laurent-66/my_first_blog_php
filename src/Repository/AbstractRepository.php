<?php

namespace Application\Repository;

use Application\Application\Database\PDODatabase;

abstract class AbstractRepository
{
    protected $database;

    public function __construct()
    {
        try {
            $this->database = new PDODatabase(
                'mysql:host=localhost:3306;dbname=myblogphp;charset=utf8',
                'root',
                ''
            );
        } catch (\Exception $e) {
            dump($e);
        }
    }

    abstract protected function getTableName(): string;

    public function getAll()
    {
        $query = "SELECT * FROM {$this->getTableName()}";
        $statement = $this->database->request($query);
        return $statement->fetchAll();
    }


    public function findById(int $id)
    {
        $query = "SELECT * FROM {$this->getTableName()} WHERE id = :id";
        $statement = $this->database->request($query, [':id' => $id]);
        return $statement->fetch();
    }


    public function delete(int $id)
    {
        $query = "DELETE FROM {$this->getTableName()} WHERE id= :id";
        $this->database->request($query, [':id' => $id]);

    }

}