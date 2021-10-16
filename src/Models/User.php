<?php

namespace Application\Models;

class User
{
    protected $id;

    protected $pseudo = '';

    protected $email = '';

    protected $password = '';

    protected $admin = '';


    //method id

    public function getId(): int
    {
        return $this->id;
    }


    public function setId(int $id): void
    {
        $this->id = $id;
    }


    // method pseudo

    public function getpseudo(): ?string
    {
        return $this->name;
    }


    public function setpseudo(?string $name): void
    {
        $this->name = $name;
    }


    // method email

    public function getemail(): ?string
    {
        return $this->email;
    }


    public function setemail(?string $email): void
    {
        $this->name = $email;
    }

    // method password

    public function getpassword(): ?string
    {
        return $this->password;
    }


    public function setpassword(?string $password): void
    {
        $this->name = $password;
    }

    // method admin

    public function getadmin(): ?bool
    {
        return $this->admin;
    }


    public function setadmin(?bool $admin): void
    {
        $this->admin = $admin;
    }
}
