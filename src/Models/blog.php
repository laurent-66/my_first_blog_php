<?php

namespace Application\Models;

class blog
{
    protected $id_blog_post;

    protected $title = '';

    protected $chapo = '';

    protected $content = '';

    protected $last_update ='';


 
    //method id

    public function getId(): int
    {
        return $this->id;
    }


    public function setId(int $id): void
    {
        $this->id = $id;
    }


    // method title

    public function getTitle(): ?string
    {
        return $this->title;
    }


    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }


    // method chapo

    public function getChapo(): ?string
    {
        return $this->chapo;
    }


    public function setChapo(?string $chapo): void
    {
        $this->chapo = $chapo;
    }

    // method content

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): void
    {
        $this->content = $content;
    }


    // method last_update

    public function getLastUpdate(): ?string
    {
        return $this->last_update;
    }
    
    
    public function setLastUpdate(?string $last_update): void
    {
        $this->last_update = $last_update;
    }
    
}