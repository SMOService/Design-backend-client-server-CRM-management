<?php

namespace App\Services\Client\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class RegisterUserRequestClientDto extends DataTransferObject
{
    public string $name;
    public string $email;
    public string $password;
    public array $profile;
}

