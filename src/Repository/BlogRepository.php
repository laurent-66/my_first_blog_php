<?php

namespace Application\Repository;

use Application\Repository\AbstractRepository;

use DateTime;

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
        // $query = "SELECT * FROM {$this->getTableName()} WHERE id = :id";
        // $statement = $this->database->request($query, [':id' => $id]);

        $query = "SELECT * FROM {$this->getTableName()} LEFT JOIN user ON {$this->getTableName()}.user_id_user = user.id WHERE {$this->getTableName()}.id = :id";

        $statement = $this->database->request($query, [':id' => $id]);

        return $statement->fetch();
    }

    public function createBlog(array $data)
    {

        $query = "INSERT INTO {$this->getTableName()}(title, url_image, chapo, content, last_update, user_id_User) VALUES (

         :title,
         :url_image,
         :chapo,
         :content,
         :last_update,
         :user_id_User)";

        $statement = $this->database->request($query,    
        [
            ':title' => $data['title-blog'],

            ':url_image' => $data['file_input_name'],

            ':chapo' => $data['inputChapo'],
            ':content' => $data['content'],
            ':last_update' => new DateTime(),
            ':author' => $data['author'],
            ':user_id_User' => 1
        ]);   
    }

    public function updateBlog(array $datasSubmitted, int $id)
    {
        $query = "UPDATE {$this->getTableName()} SET

         title = :title,
         url_image = :url_image,
         chapo = :chapo,
         content = :content,
         last_update = NOW(),
         user_id_User = :user_id_User
         WHERE id = :id ;";

        $statement = $this->database->request($query,
        [
            ':title' => $datasSubmitted['title-blog'],
            ':url_image' => $datasSubmitted['file_input_name'],
            ':chapo' => $datasSubmitted['inputChapo'],
            ':content' => $datasSubmitted['content'],

            ':user_id_User' => (int) $_SESSION['user']['id'],
            ':id' => $id
        ]);
    }

    public function deleteBlog(int $id)
    {
        $query = "DELETE FROM {$this->getTableName()} WHERE id= :id";
        $this->database->request($query, [':id' => $id]);

    }

}