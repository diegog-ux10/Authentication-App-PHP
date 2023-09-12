<?php

namespace models;

use core\Model;

class RegisterModel extends Model
{
    public string $email = '';
    public string $password = '';
    public string $passwordConfirm = '';

    public function register() 
    {
        echo "creating new user";
    }

    public function rules(): array {
        return [
            "email" => [self::RULE_REQUIRED, self::RULE_EMAIL],
            "password" => [self::RULE_REQUIRED, [self::RULE_MIN, "min" => 6], [self::RULE_MAX, "max" => 24]],
            "passwordConfirm" => [self::RULE_REQUIRED, [self::RULE_MATCH, "matchAttribute"]],
        ];
    }
}