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
        $query = "SELECT * FROM {$this->getTableName()} WHERE id = :id";
        $statement = $this->database->request($query, [':id' => $id]);
        return $statement->fetch();
    }

    public function createBlog(array $data)
    {

        $query = "INSERT INTO {$this->getTableName()}(title, url_image, chapo, content, last_update, author, user_id_User) VALUES (
         :title,
         :url_image,
         :chapo,
         :content,
         :last_update,
         :author,
         :user_id_User)";

        $statement = $this->database->request($query,    
        [
            ':title' => $data['title-blog'],
            ':url_image' => $_FILES['file_input_name']['name'],
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
         author = :author, 
         user_id_User = :user_id_User,
         WHERE id = :id ;";

        $statement = $this->database->request($query,
        [
            ':title' => $datasSubmitted['title-blog'],
            ':url_image' => $_FILES['file_input_name']['name'],
            ':chapo' => $datasSubmitted['inputChapo'],
            ':content' => $datasSubmitted['content'],
            ':content' => $datasSubmitted['author'],
            ':user_id_User' => 1,
            ':id' => $id
        ]);
    }

    public function deleteBlog(int $id)
    {
        $query = "DELETE FROM {$this->getTableName()} WHERE id= :id";
        $this->database->request($query, [':id' => $id]);

    }

}