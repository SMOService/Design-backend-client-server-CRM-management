<div class="container">
    <div class="d-flex align-items-center mb-4">
        <a href="{{ route('subcategory', ['category'=>$this->category[0]['slug'], 'subcategory'=>$this->category[1]['slug'] ]) }}" class="py-2 px-3 rounding bg-light border"><i
                class="fa-regular fa-angle-left me-2"></i>{{ $this->category[0]['name'] }} {{ $this->category[1]['name'] }}</a>
    </div>
    <div class="row form-checked">
        <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="ucard d-flex flex-column p-4 mb-4">
                <div class="d-flex align-items-center mb-4">
                    <h1 class="fs-24 fw-bold mb-0">Оформление заказа</h1>
{{--                    <a href="#!" class="ms-auto fs-18">--}}
{{--                        <i class="fa-regular fa-pen-to-square"></i>--}}
{{--                    </a>--}}
                </div>

                <div class="bg-light rounding p-4">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-6 d-flex align-items-center mb-4 mb-lg-0">
                            <div class="social-icon me-0"
                                 style="background: url({{ Vite::asset('resources/assets/img/social-icons/'.$category[0]['slug'].'.png')}}) no-repeat center center / contain">
                            </div>
                            <div class="ms-3">
                                <div class="fs-16 fw-medium">{{ $this->category[0]['name'] }} {{ $this->category[1]['name'] }}</div>
                                <div class="text-muted">Тариф: {{ $this->product['name'] }}</div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 text-start text-lg-end">
                            <div class="fw-medium">Количество</div>
                            <div class="text-muted">{{$this->count * $this->product['multiplicity']}} шт.</div>
                        </div>
                        <div class="col-6 col-lg-3 text-start text-lg-end">
                            <div class="fw-medium">Стоимость</div>
                            <div class="text-muted">{{$this->price}} ₽</div>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="bg-light border rounding d-flex flex-column p-4 mb-4">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12 mb-4">--}}
{{--                        <div class="fs-24 fw-bold">Подписка</div>--}}
{{--                        <p class="mb-0 text-muted">--}}
{{--                            Вы можете оформить подписку--}}
{{--                            <span class="mt-1 text-muted ms-1" data-bs-toggle="tooltip"--}}
{{--                                  data-bs-title="Заказ будет автоматически повторяться через выбранный период времени">--}}
{{--                              <i class="fa-regular fa-circle-info"></i>--}}
{{--                           </span>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-md-6 mb-4">--}}
{{--                        <div class="ucard shadow--unhover p-3 h-100">--}}
{{--                            <input type="radio" class="service__label-check-input form-check-input" name="serviceNumId"--}}
{{--                                   value="0" id="num_0" checked />--}}
{{--                            <div class="service__item-save service__item-save__right">Save 0%</div>--}}
{{--                            <div class="fw-medium fs-16 mb-1">Единоразавый заказ</div>--}}
{{--                            <p class="text-muted small mb-0">--}}
{{--                                Заказ выполняеться один раз, скидки не предусмотрены.--}}
{{--                            </p>--}}
{{--                            <label class="service__label form-check-label" for="num_0"></label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-md-6 mb-4">--}}
{{--                        <div class="ucard shadow--unhover p-3 h-100">--}}
{{--                            <input type="radio" class="service__label-check-input form-check-input" name="serviceNumId"--}}
{{--                                   value="1" id="num_1">--}}
{{--                            <div class="service__item-save service__item-save__right">Save 10%</div>--}}
{{--                            <div class="fw-medium fs-16 mb-1">Каждые 7 дней</div>--}}
{{--                            <p class="text-muted small mb-0">--}}
{{--                                Повторное оформление заказа с бонусом +10% каждые 7 дней--}}
{{--                            </p>--}}
{{--                            <label class="service__label form-check-label" for="num_1"></label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-md-6 mb-4 mb-md-0">--}}
{{--                        <div class="ucard shadow--unhover p-3 h-100">--}}
{{--                            <input type="radio" class="service__label-check-input form-check-input" name="serviceNumId"--}}
{{--                                   value="2" id="num_2">--}}
{{--                            <div class="service__item-save service__item-save__right">Save 12%</div>--}}
{{--                            <div class="fw-medium fs-16 mb-1">Каждые 14 дней</div>--}}
{{--                            <p class="text-muted small mb-0">--}}
{{--                                Повторное оформление заказа с бонусом +12% каждые 14 дней--}}
{{--                            </p>--}}
{{--                            <label class="service__label form-check-label" for="num_2"></label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-md-6 mb-4 mb-md-0">--}}
{{--                        <div class="ucard shadow--unhover p-3 h-100">--}}
{{--                            <input type="radio" class="service__label-check-input form-check-input" name="serviceNumId"--}}
{{--                                   value="3" id="num_3">--}}
{{--                            <div class="service__item-save service__item-save__right">Save 15%</div>--}}
{{--                            <div class="fw-medium fs-16 mb-1">Каждые 30 дней</div>--}}
{{--                            <p class="text-muted small mb-0">--}}
{{--                                Повторное оформление заказа с бонусом +15% каждые 30 дней--}}
{{--                            </p>--}}
{{--                            <label class="service__label form-check-label" for="num_3"></label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="ucard d-flex flex-column p-4">
                <h2 class="fs-24 fw-bold mb-4">Способ оплаты</h2>
{{--                <ul class="row nav nav-pills nav-fill mb-4" id="pills-tab" role="tablist">--}}
{{--                    <li class="nav-item col-12 col-sm-6 col-md-4" role="presentation">--}}
{{--                        <button class="nav-link fw-medium fs-16 active" id="pills-cards-tab" data-bs-toggle="pill"--}}
{{--                                data-bs-target="#pills-cards" type="button" role="tab" aria-controls="pills-cards"--}}
{{--                                aria-selected="true"><i class="fa-regular fa-credit-card me-2"></i>Карты</button>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item col-12 col-sm-6 col-md-4 mt-3 mt-sm-0" role="presentation">--}}
{{--                        <button class="nav-link fw-medium fs-16" id="pills-ewallets-tab" data-bs-toggle="pill"--}}
{{--                                data-bs-target="#pills-ewallets" type="button" role="tab" aria-controls="pills-ewallets"--}}
{{--                                aria-selected="false"><i class="fa-brands fa-paypal me-2"></i>Е-кошельки</button>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item col-12 col-md-4 mt-3 mt-md-0" role="presentation">--}}
{{--                        <button class="nav-link fw-medium fs-16" id="pills-crypto-tab" data-bs-toggle="pill"--}}
{{--                                data-bs-target="#pills-crypto" type="button" role="tab" aria-controls="pills-crypto"--}}
{{--                                aria-selected="false"><i class="fa-solid fa-bitcoin-sign me-2"></i>Криптовалюты</button>--}}
{{--                    </li>--}}
{{--                </ul>--}}
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-cards" role="tabpanel"
                         aria-labelledby="pills-cards-tab" tabindex="0">
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
                    <div class="tab-pane fade" id="pills-ewallets" role="tabpanel" aria-labelledby="pills-ewallets-tab"
                         tabindex="0">
                        <div class="row payment-method">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-crypto" role="tabpanel" aria-labelledby="pills-crypto-tab"
                         tabindex="0">
                        <div class="row payment-method">
                        </div>
                    </div>
                </div>
                <div class="bg-light rounding p-3 d-flex align-items-center mt-auto">
                    <div class="bg-green text-white rounding fs-20 d-flex align-items-center justify-content-center"
                         style="width: 32px; height: 32px;">
                        <i class="fa-regular fa-shield-alt"></i>
                    </div>
                    <p class="mb-0 ms-4 text-muted">
                        Данные защищены по стандарту PCI DSS. <br> Мы не передаем данные Вашей карты третьим лицам.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="sticky-top" style="top: 100px;">
                <div class="ucard">
                    <div class="bg-light px-4 py-3 fs-18 fw-medium">
                        <i class="fa-regular fa-bags-shopping me-2"></i>
                        Итого
                    </div>
                    <div class="ucard__body p-4">

                        <div class="d-flex w-100 mb-3">
                            <div class="text-muted">{{ $this->category[0]['name'] }} {{ $this->category[1]['name'] }}:</div>
                            <div class="ms-auto fw-medium">{{$this->count * $this->product['multiplicity']}} шт.</div>
                        </div>

                        <div class="d-flex w-100 mb-3">
                            <div class="text-muted">Тариф {{ $this->product['name'] }}:</div>
                            <div class="ms-auto fw-medium">{{ round($this->product['prices']['price'] / $this->product['multiplicity'], 2) }}₽ / 1 шт.</div>
                        </div>

                        <div class="d-flex w-100 mb-4">
                            <div class="text-muted">Общая стоимость:</div>
                            <div class="ms-auto fw-medium">{{$this->price}}₽ / {{$this->count * $this->product['multiplicity']}} шт.</div>
                        </div>

                        <div class="bg-light p-3 rounding mb-2">
                            <div class="mb-2 fw-medium">Промокод</div>
                            <div class="input-group mb-2">
                                <span class="input-group-text"><i class="fa-regular fa-percent"></i></span>
                                <input type="text" class="form-control" wire:model.debounce.500ms="code" placeholder="Введите промокод">
                            </div>
                            @error('code')
                            <div class="rounding px-3 py-2 small bg-soft-red">
                                Промокод не найден
                            </div>
                            @enderror
                        </div>

                        <div class="bg-light p-3 rounding mb-2">
                            <div class="mb-2 fw-medium">Email</div>
                            <div class="input-group mb-2">
                                <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                                <input type="text" class="form-control" wire:model.debounce.500ms="email" placeholder="Введите email">
                            </div>
                            @error('email')
                            <div class="rounding px-3 py-2 small bg-soft-red">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

{{--                        <div class="d-flex rounding p-3 bg-soft-green my-2">--}}
{{--                            <div class="fw-medium">Скидка по промокоду:</div>--}}
{{--                            <div class="ms-auto fw-bold">-20% (118 ₽)</div>--}}
{{--                        </div>--}}

                        <div class="d-flex align-items-center p-3 bg-light rounding">
                            <div class="me-auto">
                                К оплате
                                <p class="text-muted small mb-0">С учетом скидки</p>
                            </div>
                            <span class="fw-medium fs-20">{{$this->price}} ₽</span>
                        </div>

                        @if (session()->has('error'))

                            <div class="d-flex align-items-center p-3 bg-light rounding">
                                {{ session('error') }}
                            </div>

                        @endif
                        <buttom class="btn btn-primary d-block mt-3" wire:click="create">
                            Заказ подтверждаю
                        </buttom>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
