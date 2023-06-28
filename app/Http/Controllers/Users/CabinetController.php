<?php

namespace App\Http\Controllers\Users;

use App\Services\Auth\UsersService;
use App\Services\Client\Dto\RegisterUserRequestClientDto;

class CabinetController
{

    public function orders()
    {
        return view('pages.cabinet.personal.orders');
    }

    public function balance()
    {
        return view('pages.cabinet.personal.balance');
    }

    /**
     * @throws \Throwable
     */
    public function store(RegisterUserRequestClientDto $dto)
    {
        (new UsersService())->registerUser($dto);
    }

}
