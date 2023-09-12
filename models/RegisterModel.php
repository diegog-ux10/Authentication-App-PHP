<?php

namespace models;

require_once(__DIR__ . "/../core/Model.php");

use core\Model;

class RegisterModel extends Model
{
    public string $name;
    public string $bio;
    public string $phone;
    public string $email;
    public string $password;
    public string $passwordConfirm;

    public function register() 
    {
        echo "creating new user";
    }

    public function rules(): array {
        return [
            
        ];
    }
}