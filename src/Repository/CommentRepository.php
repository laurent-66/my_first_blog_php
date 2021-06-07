<?php

namespace Application\Repository;

use Application\Repository\AbstractRepository;

class BlogRepository extends AbstractRepository
{
    protected function getTableName(): string
    {
        return 'comment';
    }

    public function getAllComment()
    {
        $query = "SELECT * FROM {$this->getTableName()}";
        $statement = $this->database->query($query);
        return $statement;

    }

    public function findByCommentId(int $id)
    {
        $query = "SELECT * FROM {$this->getTableName()} WHERE $id";
        $statement = $this->database->query($query);
        return $statement->fetch();
    }


}