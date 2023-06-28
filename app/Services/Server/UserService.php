<?php

namespace App\Services\Server;
use App\Models\User;
use App\Services\Server\Dto\Responses\UserInfoResponseDto;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class UserService
{
    function me(User $user): UserInfoResponseDto
    {
        $baseApi = new BaseApiService();
        $baseApi->setUser($user);

        return $baseApi->me();
    }
}
