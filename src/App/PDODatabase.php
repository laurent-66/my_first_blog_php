<?php
namespace Application\App;

class PDODatabase extends \PDO
{
    public function __construct(string $dsn, string $username, string $password, array $options = [])
    {
        parent::__construct($dsn, $username, $password, $options );
        parent::setAttribute($dsn, );
    }
}