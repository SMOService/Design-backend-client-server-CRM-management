<?php

namespace App\Http\Controllers\Users;

use App\Services\Auth\UsersService;
use App\Services\Client\Dto\LoginUserRequestClientDto;
use Illuminate\Http\Request;

class AuthController
{

    public function create()
    {
        return view('pages.auth.login');
    }

    public function store(LoginUserRequestClientDto $dto)
    {
        (new UsersService())->auth($dto);
    }

    public function forgot()
    {
        return view('pages.auth.forgot');
    }

    public function resetPassword(Request $request, string $token)
    {
        return view('pages.auth.reset', ['token'=>$token, 'email'=>$request->get('email')]);
    }

}
