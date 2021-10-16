<?php

namespace Application\Models;

class Comment
{
    protected $id;

    protected $commentContent = '';

    protected $commentValidate = false;

    protected $commentSignaled = false;


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

        return $this->commentContent;
    }


    public function setContent(?string $commentContent): void
    {
        $this->title = $commentContent;
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


    // method signaled

    public function getSignaled(): ?bool
    {

        return $this->commentSignaled;
    }


    public function setSignaled(?bool $commentSignaled): void
    {
        $this->commentSignaled = $commentSignaled;
    }
}
