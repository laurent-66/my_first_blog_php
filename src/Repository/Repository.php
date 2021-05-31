<?php
namespace Application\Repository;


class Repository
{

    protected $database;


    public function __construct()
    {
        $this->database = new \PDO();
    }
}