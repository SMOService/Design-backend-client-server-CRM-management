<?php

namespace App\Http\Livewire\Auth;

use App\Http\Controllers\Users\RegisterController;
use App\Rules\PhoneNumber;
use App\Services\Auth\UsersService;
use App\Services\Client\Dto\RegisterUserRequestClientDto;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Fortify;
use Livewire\Component;

class Register extends Component {

    public $login;
    public $name;
    public $surname;
    public $phone;
    public $captcha;
    public $email;
    public $password;
    public $password_confirmation;

    public function rules() {
        return [
            'email'    => [
                'required',
                'string',
                'email:strict',
                'max:255',
                'unique:users',
            ],
            'login'    => [
                'required',
                'string',
                'max:255',
                'unique:users,name',
            ],
            'name'     => [
                'sometimes',
                'nullable',
                'string',
                'min:3',
                'max:50',
            ],
            'surname'  => [
                'sometimes',
                'nullable',
                'string',
                'min:3',
                'max:50',
            ],
            'phone'    => [
                'sometimes',
                'nullable',
                new PhoneNumber(),
            ],
            'password' => 'required|confirmed|string|min:8',
        ];
    }

    public function render() {
        return view('livewire.auth.register');
    }

    public function register() {
        $this->validate();

        $dto = (new RegisterUserRequestClientDto([
            'name'   => $this->login,
            'email'    => $this->email,
            'password' => $this->password,
            'profile'  => [
                'name'    => $this->name,
                'surname' => $this->surname,
                'phone'   => $this->phone,
            ],
        ]));

        try {
            app(UsersService::class)->registerUser($dto);
        } catch (\Throwable $e) {
            throw ValidationException::withMessages([
                Fortify::username() => [$e->getMessage()],
            ]);
        }

        $this->redirect(route('login'));

    }
}
