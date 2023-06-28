<form class="account__form" wire:submit.prevent="submit">
    <div class="border rounding p-3 p-sm-4 mb-5">
        <label class="fw-medium mb-3">Сумма пополнения</label>
        <div class="input-group mb-1">
            <span class="input-group-text"><i class="fa-regular fa-ruble-sign"></i></span>
            <input type="text" class="form-control account__form_input @if($errors->has('amount')) is-invalid @endif" placeholder="Введите сумму для пополнения" required wire:model.defer="amount">
            {{--                                    <div class="input-group-text">Бонусы: <span class="fw-medium ms-1">0</span></div>--}}
        </div>
        @error('amount')
        <div class="ms-2 mt-2 small text-danger">
            {{ $message }}
        </div>
        @enderror
        <div class="fixed-pay d-flex flex-wrap">
            @foreach([2500, 5000, 10000, 15000, 25000, 50000, 100000] as $amount)
                <a href="javascript:" class="fixed-pay__link btn btn-sm btn-light m-1 flex-fill" wire:click="updateAmount({{$amount}})">{{ number_format($amount, 0, '.', ' ') }} р.</a>
            @endforeach
        </div>
    </div>

    <h2 class="fs-20 fw-bold mb-4">Способ оплаты</h2>
    <ul class="row nav nav-pills nav-fill mb-4" id="pills-tab" role="tablist">
        {{--                                <li class="nav-item col-12 col-sm-6 col-md-4" role="presentation">--}}
        {{--                                    <button class="nav-link fw-medium fs-16 active" id="pills-cards-tab" data-bs-toggle="pill" data-bs-target="#pills-cards" type="button" role="tab" aria-controls="pills-cards" aria-selected="true"><i class="fa-regular fa-credit-card me-2"></i>Карты</button>--}}
        {{--                                </li>--}}
        {{--                                <li class="nav-item col-12 col-sm-6 col-md-4 mt-3 mt-sm-0" role="presentation">--}}
        {{--                                    <button class="nav-link fw-medium fs-16" id="pills-ewallets-tab" data-bs-toggle="pill" data-bs-target="#pills-ewallets" type="button" role="tab" aria-controls="pills-ewallets" aria-selected="false"><i class="fa-brands fa-paypal me-2"></i>Е-кошельки</button>--}}
        {{--                                </li>--}}
        {{--                                <li class="nav-item col-12 col-md-4 mt-3 mt-md-0" role="presentation">--}}
        {{--                                    <button class="nav-link fw-medium fs-16" id="pills-crypto-tab" data-bs-toggle="pill" data-bs-target="#pills-crypto" type="button" role="tab" aria-controls="pills-crypto" aria-selected="false"><i class="fa-solid fa-bitcoin-sign me-2"></i>Криптовалюты</button>--}}
        {{--                                </li>--}}
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-cards" role="tabpanel" aria-labelledby="pills-cards-tab" tabindex="0">
            <div class="row payment-method">
                @foreach($paymentSystems as $paymentSystem)
                    <div class="col-6 col-md-4 mb-4" data-id="79">
                        <div class="payment-method__item rounding shadow--hover p-3 text-center h-100">
                            <input type="radio" class="form-check-input" wire:model="paymentSystem" value="{{$paymentSystem['id']}}" id="ps_{{$paymentSystem['id']}}">
                            <img class="payment-method__image"
                                 src="/assets/img/payment-method/payment-method-1.png">
                            <div class="fw-medium mt-3">
                                {{$paymentSystem['name']}}
                            </div>
                            <label class="payment-method__label form-check-label" for="ps_{{$paymentSystem['id']}}"></label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade" id="pills-ewallets" role="tabpanel" aria-labelledby="pills-ewallets-tab" tabindex="0">
            <div class="row payment-method">
                <div class="col-6 col-md-4 mb-4" data-id="32">
                    <div class="payment-method__item rounding shadow--hover p-3 text-center h-100">
                        <input type="radio" class="form-check-input" name="paySystemId" value="32" id="ps_32">
                        <img class="payment-method__image" src="/assets/img/payment-method/payment-method-4.png">
                        <div class="fw-medium mt-3">
                            Payeer
                        </div>
                        <label class="payment-method__label form-check-label" for="ps_32"></label>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4" data-id="75">
                    <div class="payment-method__item rounding shadow--hover p-3 text-center h-100">
                        <input type="radio" class="form-check-input" name="paySystemId" value="75" id="ps_75">
                        <img class="payment-method__image" src="/assets/img/payment-method/payment-method-9.png">
                        <div class="fw-medium mt-3">
                            ЮMoney
                        </div>
                        <label class="payment-method__label form-check-label" for="ps_75"></label>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4" data-id="69">
                    <div class="payment-method__item rounding shadow--hover p-3 text-center h-100">
                        <input type="radio" class="form-check-input" name="paySystemId" value="69" id="ps_69">
                        <img class="payment-method__image" src="/assets/img/payment-method/payment-method-6.png">
                        <div class="fw-medium mt-3">
                            QIWI
                        </div>
                        <label class="payment-method__label form-check-label" for="ps_69"></label>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-crypto" role="tabpanel" aria-labelledby="pills-crypto-tab" tabindex="0">
            <div class="row payment-method">
                <div class="col-6 col-md-4 mb-4" data-id="36">
                    <div class="payment-method__item rounding shadow--hover p-3 text-center h-100">
                        <input type="radio" class="form-check-input" name="paySystemId" value="36" id="ps_36">
                        <img class="payment-method__image" src="/assets/img/payment-method/payment-method-5.png">
                        <div class="fw-medium mt-3">
                            Coinpayments
                        </div>
                        <label class="payment-method__label form-check-label" for="ps_36"></label>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4" data-id="73">
                    <div class="payment-method__item rounding shadow--hover p-3 text-center h-100">
                        <input type="radio" class="form-check-input" name="paySystemId" value="73" id="ps_73">
                        <img class="payment-method__image" src="/assets/img/payment-method/payment-method-7.png">
                        <div class="fw-medium mt-3">
                            Binance Pay
                        </div>
                        <label class="payment-method__label form-check-label" for="ps_73"></label>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4" data-id="74">
                    <div class="payment-method__item rounding shadow--hover p-3 text-center h-100">
                        <input type="radio" class="form-check-input" name="paySystemId" value="74" id="ps_74">
                        <img class="payment-method__image" src="/assets/img/payment-method/payment-method-8.png">
                        <div class="fw-medium mt-3">
                            USDT
                        </div>
                        <label class="payment-method__label form-check-label" for="ps_74"></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light rounding p-3 d-flex align-items-center mt-auto">
        <div class="bg-green text-white rounding fs-20 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
            <i class="fa-regular fa-shield-alt"></i>
        </div>
        <p class="mb-0 ms-4 text-muted">
            Данные защищены по стандарту PCI DSS. <br> Мы не передаем данные Вашей карты третьим лицам.
        </p>
    </div>

    <div class="mb-3">
        @if (session()->has('message'))
            <div class="ms-2 mt-2 small alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="text-center mt-4">
        @if ($this->paymentForm)
            {!! $this->paymentForm !!}
        @else
            <button type="submit" class="btn btn-block btn-primary">
                Пополнить баланс
            </button>
        @endif
    </div>
</form>
