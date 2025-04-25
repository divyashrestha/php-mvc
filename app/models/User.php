<?php

namespace app\models;

use divyashrestha\Mvc\db\BaseModel;

class Contact extends BaseModel
{
    public int $id = 0;
    public string $name = '';
    public string $email = '';
    public static function tableName(): string
    {
        return 'users';
    }

    public function rules(): array
    {
        return [
            'name' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED],
        ];
    }

    public function labels(): array
    {
        return [
            'name' => 'Name',
            'email' => 'Email',
        ];
    }
}