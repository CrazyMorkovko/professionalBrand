<?php
namespace App\Entities;

class User
{
    public $name;
    public $id;
    public $email;
    public $password;
    public $role;

    public function isAdmin()
    {
        return $this->role === 10;
    }
}
