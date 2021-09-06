<?php

namespace Application\Repository;

use Application\Repository\AbstractRepository;


class CommentRepository extends AbstractRepository

{
    protected function getTableName(): string
    {
        return 'comment';
    }


    public function findCommentsByBlogId(int $id)
    {
        // $query = "SELECT * FROM {$this->getTableName()} WHERE blog_post_id_blog_post = :id AND commentValidate = null" ;
        $query = "SELECT * FROM {$this->getTableName()} WHERE blog_post_id_blog_post = :id AND commentValidate = 1" ;
        $statement = $this->database->request($query, [':id' => $id]);
        return $statement->fetchAll();
    }


    public function findAllcommentsNotValidate(){
        $query = "SELECT * FROM {$this->getTableName()} WHERE commentValidate IS NULL" ;
        $statement = $this->database->request($query);
        return $statement->fetchAll();
    }

    public function findAllcommentsValidate(){
        $query = "SELECT * FROM {$this->getTableName()} WHERE commentValidate = 1" ;
        $statement = $this->database->request($query);
        return $statement->fetchAll();
    } 
    

    public function submitComment(array $data, $id){

        $query = "INSERT INTO {$this->getTableName()}(commentContent,commentValidate, commentPublished,commentSignaled,user_id_User,blog_post_id_blog_post) VALUES (
         :commentContent,
         :commentValidate,
         :commentPublished,
         :commentSignaled,
         :user_id_User,
         :blog_post_id_blog_post
         )";


        $statement = $this->database->request($query,    
        [
            ':commentContent' => $data['commentContent'],
            ':commentValidate' => NULL,
            ':commentPublished' => 0,
            ':commentSignaled' => 0,
            ':user_id_User' => $_SESSION['user']['id'],
            ':blog_post_id_blog_post' => $id,
        ]);

    }

    public function approveComment(int $id)
    {

        $query = "UPDATE {$this->getTableName()} SET

         `commentValidate`= :commentValidate,

          WHERE id= :id";

        $this->database->request($query,
        [
            ':id' => $id,
            ':commentValidate' => 1,

        ]);

    }


    public function commentPublished(int $id)
    {
        $query = "UPDATE {$this->getTableName()} SET

         `commentPublished`= :commentPublished
         
          WHERE id= :id";

        $this->database->request($query,
        [
            ':id' => $id,
            ':commentPublished'=> 1
        ]);
    }



    public function deleteComment(int $id)
    {
        $query = "DELETE FROM {$this->getTableName()} WHERE id= :id";
        $this->database->request($query, [':id' => $id]);
    }


}