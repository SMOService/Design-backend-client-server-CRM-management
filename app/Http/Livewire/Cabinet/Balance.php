<?php

namespace App\Http\Livewire\Cabinet;

use App\Http\Controllers\Users\RegisterController;
use App\Models\User;
use App\Services\Auth\UsersService;
use App\Services\Client\Dto\LoginUserRequestClientDto;
use App\Services\Client\Dto\RegisterUserRequestClientDto;
use App\Services\Server\Dto\Requests\BalanceOrderRequestDto;
use App\Services\Server\Dto\Requests\CreateOrderRequestDto;
use App\Services\Server\Dto\Requests\ListOrdersRequestDto;
use App\Services\Server\OrderService;
use App\Services\Server\PaymentSystemService;
use App\Services\Server\ProductService;
use Auth;
use Illuminate\Session\SessionManager;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Fortify;
use Livewire\Component;

class Balance extends Component {

    public $search;
    public $status;
    public $categoryId;
    public $orders;

    public $amount;
    public $paymentSystems;
    public $paymentSystem;

    public $paymentForm;

    protected $rules = [
        'amount'        => 'required|numeric',
        'paymentSystem' => 'required|numeric',
    ];


    public function mount() {
        $this->amount = 1000;

        $allPaymentSystems = app(PaymentSystemService::class)->list();

        foreach ($allPaymentSystems as $paymentSystem) {
            if ($paymentSystem['can_update_balance'] === 1) {
                $this->paymentSystems[] = $paymentSystem;
            }
        }

        $this->paymentSystem = $this->paymentSystems[0]['id'];

    }

    public function render() {
        return view('livewire.cabinet.balance');
    }

    public function updateAmount($value) {
        $this->amount = $value;
    }

    public function submit() {

        $this->validate();

        try {

            $orderDto = new BalanceOrderRequestDto([
                'amount'               => $this->amount,
                'payment_system_id' => $this->paymentSystem,
                'user'              => Auth::user(),
            ]);

            $order = (new OrderService())->createBalanceOrder($orderDto);
        } catch (\Throwable $e) {
            session()->flash('error', $e->getMessage());

            return false;
        }

        if ($order->paymentForm ?? null) {
            $this->paymentForm = $order->paymentForm;

            return true;
        }

        session()->flash('message', 'ok');
        return true;
    }

}
