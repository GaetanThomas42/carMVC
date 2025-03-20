<?php

namespace App\Model;

/** 
 * Réprésentation de la table User en objet PHP 
 */
class User{

    private ?int $id;
    private string $username;
    private string $password;
    
    public function __construct(int|null $id, string $username, string $password)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }
    
    public function getId()
    {
        return $this->id;
    }


    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}