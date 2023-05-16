<?php

namespace App\Http\Livewire\Auth;

use App\Http\Controllers\Users\AuthController;
use App\Services\Client\Dto\LoginUserRequestClientDto;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class Login extends Component
{

    public $login;
    public $password;
    public $remember;

    protected $rules = [
        'login'    => 'required|min:3',
        'password' => 'required',
        'remember' => 'sometimes|nullable',
    ];

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function auth()
    {

        $this->validate();

        try {
            $dto = (new LoginUserRequestClientDto([
                'login'    => $this->login,
                'password' => $this->password,
                'remember' => $this->remember,
                'ip'       => request()->server('REMOTE_ADDR'),
            ]));
        } catch (UnknownProperties $e) {
            return false;
        }

        app(AuthController::class)->store($dto);

        if (Auth::user() === null) {
            $this->addError('login', __('auth.failed'));
            return false;
        }

        $this->redirect(route('index'));

    }
}
