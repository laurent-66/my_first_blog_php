<?php

namespace Application\Models;

class comment
{
    protected $id_comment;

    protected $comment_content = '';

    protected $comment_validate = false;

    protected $comment_published = false;

    protected $comment_signaled = false;


 
    //method id

    public function getId(): int
    {
        return $this->id;
    }


    public function setId(int $id): void
    {
        $this->id = $id;
    }


    // method content

    public function getContent(): ?string
    {
        return $this->comment_content;
    }


    public function setContent(?string $comment_content): void
    {
        $this->title = $comment_content;
    }


    // method validate

    public function getValidate(): ?bool
    {
        return $this->validate;
    }


    public function setValidate(?bool $validate): void
    {
        $this->validate = $validate;
    }

    // method published

    public function getPublished(): ?bool
    {
        return $this->comment_published;
    }

    public function setPublished(?bool $comment_published): void
    {
        $this->comment_published = $comment_published;
    }


    // method signaled

    public function getSignaled(): ?bool
    {
        return $this->comment_signaled;
    }
    
    
    public function setSignaled(?bool $comment_signaled): void
    {
        $this->comment_signaled = $comment_signaled;
    }
    
}