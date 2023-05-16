<?php

namespace App\Actions\Auth\Login;

use App\Services\Auth\LoginRateLimiter;
use App\Services\Client\Dto\LoginUserRequestClientDto;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Fortify;

class AttemptToAuthenticate {

    protected StatefulGuard $guard;

    protected LoginRateLimiter $limiter;

    public function __construct(StatefulGuard $guard, LoginRateLimiter $limiter) {
        $this->guard = $guard;
        $this->limiter = $limiter;
    }

    public function handle(LoginUserRequestClientDto $dto, $next) {

        $loginType = filter_var($dto->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        $credentials = [
            $loginType => $dto->login,
            'password' => $dto->password,
        ];

        if ($this->guard->attempt($credentials, $dto->remember)
        ) {
            return $next($dto);
        }

        $this->throwFailedAuthenticationException($dto);
    }

    protected function throwFailedAuthenticationException(LoginUserRequestClientDto $dto) {
        $this->limiter->increment($dto);
    }

}
