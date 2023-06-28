<?php

namespace App\Http\Livewire\Auth;

use App\Http\Controllers\Users\AuthController;
use App\Models\User;
use App\Services\Auth\UsersService;
use App\Services\Client\Dto\LoginUserRequestClientDto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;
use Livewire\Component;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class Forgot extends Component {

    public $login;
    public $reCaptcha;

    public $code;

    public $showCodeInput = false;

    protected $rules = [
        'login' => 'required|min:3',
        //        'recaptcha' => '',
    ];

    public function render() {
        return view('livewire.auth.forgot');
    }

    public function forgot() {

        $this->validate();

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
