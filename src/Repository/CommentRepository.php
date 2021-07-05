<?php

namespace Application\Repository;

use Application\Repository\AbstractRepository;

class CommentRepository extends AbstractRepository
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


    public function findCommentsByBlogId(int $id)
    {
        $query = "SELECT * FROM {$this->getTableName()} WHERE $id";
        $statement = $this->database->query($query);
        return $statement->fetch();
    }

    
    public function updateComment(int $id)
    {
        $comment = '';

        $query = "UPDATE {$this->getTableName()}SET

         `comment`= :comment";

        $this->database->request($query,
        [
            ':comment' => $comment
        ]);
    }

    public function deleteComment(int $id)
    {
        $query = "DELETE FROM {$this->getTableName()} WHERE id= :id";
        $this->database->request($query, [':id' => $id]);
    }








}