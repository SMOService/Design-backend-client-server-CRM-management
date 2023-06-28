<?php

namespace App\Services\Server\Dto\Requests;

use App\Models\User;
use Spatie\DataTransferObject\DataTransferObject;

class BalanceOrderRequestDto extends DataTransferObject {

    public float $amount;
    public int $payment_system_id;
    public User $user;

}

