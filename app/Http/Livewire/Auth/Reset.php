<?php

namespace App\Http\Livewire\Auth;

use App\Http\Controllers\Users\AuthController;
use App\Models\User;
use App\Services\Auth\UsersService;
use App\Services\Client\Dto\LoginUserRequestClientDto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;
use Livewire\Component;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class Reset extends Component {

    public $token;
    public $email;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'password' => 'required|confirmed|string|min:8',
    ];


    public function render() {
        return view('livewire.auth.reset');
    }

    public function submit() {

        $this->validate();

        $status = Password::reset(
            [
                'email'                 => $this->email,
                'password'              => $this->password,
                'password_confirmation' => $this->password_confirmation,
                'token'                 => $this->token,
            ],

            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                ])->setRememberToken(Str::random(60));

                $user->save();

            }
        );

        if ($status === Password::PASSWORD_RESET) {
            session()->flash('message', __($status));
        } else {
            $this->addError('password_confirmation', __($status));

            return false;
        }

        $user = User::where('name', $this->login)->orWhere('email', $this->login)->first();

        if (!$user) {
            $this->addError('login', __('auth.failed'));

            return false;
        }

        $status = Password::sendResetLink(['email' => $user->email]);

        if ($status === Password::RESET_LINK_SENT) {
            $this->showCodeInput = true;
            session()->flash('message', __($status));
        } else {
            $this->addError('login', __($status));

            return false;
        }

        return true;


    }
}
