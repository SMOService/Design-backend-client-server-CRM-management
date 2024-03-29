<?php

namespace App\Services\Client\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class LoginUserRequestClientDto extends DataTransferObject
{

    public string $login;

    public string $password;

    public string $ip;

    public ?bool $remember;

}

