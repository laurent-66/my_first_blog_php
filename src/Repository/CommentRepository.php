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
        $query = "SELECT * FROM {$this->getTableName()} WHERE blog_post_id_blog_post = :id AND commentValidate = null" ;
        $statement = $this->database->request($query, [':id' => $id]);
        return $statement->fetchAll();
    }


    public function findAllcommentsNotValidate(){
        $query = "SELECT * FROM {$this->getTableName()} WHERE commentValidate IS NULL" ;
        $statement = $this->database->request($query);
        return $statement->fetchAll();
    }
    

    public function createComment(array $data, $id){

        $query = "INSERT INTO {$this->getTableName()}(commentContent,user_id_User,blog_post_id_blog_post) VALUES (
         :commentContent,
        --  :comment_validate,
        --  :comment_published,
        --  :comment_signaled,
         :user_id_User,
         :blog_post_id_blog_post
         )";



        $statement = $this->database->request($query,    
        [
            ':commentContent' => $data['commentContent'],
            // ':comment_validate' => $data['comment_validate'],
            // ':comment_published' => $data['comment_published'],
            // ':comment_signaled' => $data['comment_signaled'],
            ':user_id_User' => 1,
            ':blog_post_id_blog_post' => $id
        ]);

    }


    public function approveComment(int $id)
    {

        $query = "UPDATE {$this->getTableName()} SET

         `commentValidate`= :commentValidate WHERE id= :id";

        $this->database->request($query,
        [
            ':id' => $id,
            ':commentValidate' => true
        ]);

    }


    public function commentPublished(int $id)
    {
        // $query = "DELETE FROM {$this->getTableName()} WHERE id= :id";
        // $this->database->request($query, [':id' => $id]);
    }


    public function deleteComment(int $id)
    {
        $query = "DELETE FROM {$this->getTableName()} WHERE id= :id";
        $this->database->request($query, [':id' => $id]);
    }


}