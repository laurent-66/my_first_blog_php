<?php

namespace Application\Repository;

use Application\Repository\AbstractRepository;

class BlogRepository extends AbstractRepository
{
    protected function getTableName(): string
    {
        return 'blog_post';
    }

    public function getAllBlog()
    {
        $query = "SELECT * FROM {$this->getTableName()}";
        $statement = $this->database->request($query);
        return $statement->fetchAll();

    }

    public function findByBlogId(int $id)
    {
        $query = "SELECT * FROM {$this->getTableName()} WHERE id_blog_post= :id";
        $statement = $this->database->request($query, [':id' => $id]);
        return $statement->fetch();
    }

    public function createBlog()
    {

        $title = '';
        $chapo = '';
        $content = '';
        $last_update = '';

        $query = "INSERT INTO {$this->getTableName()}VALUES(
         :title,
         :chapo,
         :content,
         :last_update)";

        $this->database->request($query,
        [
            ':title' => $title,
            ':chapo' => $chapo,
            ':content' => $content,
            ':last_update' => $last_update  
        ]);

    }

    public function updateBlog(int $id)
    {
        $title = '';
        $chapo = '';
        $content = '';
        $last_update = '';

        $query = "UPDATE {$this->getTableName()}SET

         `title`= :title,
         `chapo`= :chapo,
         `content`= :content,
         `last_update`= :last_update 
         WHERE id_blog_post= :id";

        $this->database->request($query,
        [
            ':title' => $title,
            ':chapo' => $chapo,
            ':content' => $content,
            ':last_update' => $last_update,
            ':id' => $id
        ]);
    }

    public function deleteBlog(int $id)
    {
        $query = "DELETE FROM {$this->getTableName()} WHERE id_blog_post= :id";
        $this->database->request($query, [':id' => $id]);

    }

}