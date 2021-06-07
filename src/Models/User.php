<?php

namespace Application\Models;

class User
{
    protected $id_User;

    protected $name = '';

    protected $firstname = '';

    protected $email = '';

    protected $login ='';

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


    // method name

    public function getname(): ?string
    {
        return $this->name;
    }


    public function setname(?string $name): void
    {
        $this->name = $name;
    }


    // method firstname

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): void
    {
        $this->firstname = $firstname;
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

    // method login

    public function getlogin(): ?string
    {
        return $this->login;
    }


    public function setlogin(?string $login): void
    {
        $this->name = $login;
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

    public function getadmin(): ? bool
    {
        return $this->admin;
    }
    
    
    public function setadmin(?bool $admin): void
    {
        $this->admin = $admin;
    }


}