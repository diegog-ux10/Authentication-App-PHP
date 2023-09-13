<?php

namespace models;

use core\DbModel;

class User extends DbModel
{

    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_DELETE = 2;

    public string $email = '';
    public string $password = '';
    public string $passwordConfirm = '';
    public string $name = '';
    public string $bio = '';
    public string $phone = '';
    public string $photo = '';
    public int $status = self::STATUS_INACTIVE;
    
    public function tableName(): string {
        return "users";
    }

    public function save() 
    {
        $this->status = self::STATUS_INACTIVE;
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return parent::save();
    }

    public function rules(): array {
        return [
            "email" => [self::RULE_REQUIRED, self::RULE_EMAIL],
            "password" => [self::RULE_REQUIRED, [self::RULE_MIN, "min" => 6], [self::RULE_MAX, "max" => 24]],
            "passwordConfirm" => [self::RULE_REQUIRED, [self::RULE_MATCH, "matchAttribute"]],
        ];
    }

    public function attributes(): array {
        return ["email", "password", "name", "bio", "phone", "photo", "status"];
    }
}