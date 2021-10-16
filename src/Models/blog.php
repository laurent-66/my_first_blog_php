<?php

namespace Application\Models;

class Blog
{
    protected $id;

    protected $title = '';

    protected $url_image = '';

    protected $chapo = '';

    protected $content = '';

    protected $last_update = '';

    protected $author = '';

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

    // method url_image

    public function getUrlImage(): ?string
    {
        return $this->url_image;
    }


    public function setUrlImage(?string $url_image): void
    {
        $this->url_image = $url_image;
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

    // method author

    public function getAuthor(): ?string
    {
        return $this->author;
    }


    public function setAuthor(?string $author): void
    {
        $this->last_update = $author;
    }
}
