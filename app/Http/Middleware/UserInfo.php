<?php

namespace App\Http\Middleware;

use App\Services\Server\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserInfo
{

    public function handle(Request $request, \Closure $next)
    {


        if ($user = Auth::user()) {
            $serverInfo = app(UserService::class)->me($user);
            Auth::user()->userInfo = $serverInfo;
        }

//        dd('aa');

        return $next($request);
    }
}
