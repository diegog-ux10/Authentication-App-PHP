<?php

namespace models;

use core\Application;
use core\Model;
use core\UserModel;

class Edit extends UserModel
{
    public string $email = '';
    public string $password = '';
    public string $name = '';
    public string $bio = '';
    public string $phone = '';
    public string $photo = '';
    
    public function tableName(): string {
        return "users";
    }

    public static function primaryKey(): string
    {
        return "id";
    }

    public function updated($id) 
    {
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return parent::updated($id);
    }

    public function rules(): array {
        return [
            // "email" => [self::RULE_EMAIL],
            // "password" => [[self::RULE_MIN, "min" => 6], [self::RULE_MAX, "max" => 24]],
        ];
    }

    public function attributes(): array {
        return ["email", "password", "name", "bio", "phone", "photo"];
    }

    public function getDisplayName(): string
    {
        return $this->name;
    }
}