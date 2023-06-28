<?php

namespace App\Services\Server\Dto\Responses;

use Spatie\DataTransferObject\DataTransferObject;

class BalanceOrderResponseDto extends DataTransferObject
{

    public int    $id;
    public ?string $paymentForm;

}

