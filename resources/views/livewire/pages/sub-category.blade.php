<div class="ucard h-100">
    <div class="bg-light px-4 py-3 d-flex align-items-center fs-16 fw-medium">
        <i class="fa-regular fa-users me-3 text-center mt-1"></i>
        {{ $currentProduct['attributes']['multiplicity_description']['value'] }} в {{ $currentCategory['parentCategory']['name'] ?? $currentCategory['name'] }}
    </div>
    <div class="ucard-body p-4">
        <div class="row">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <div class="dropdown mb-3">
                    <div class="mb-2 fw-medium">Выберите тариф</div>
                    <button
                        class="btn btn-sm border fw-normal py-2 w-100 text-start d-flex align-items-center"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false" wire:model="currentProduct.name">
                        {{ $currentProduct['name'] }}
                        <i class="fa-solid fa-angle-down ms-auto"></i>
                    </button>
                    <ul class="dropdown-menu w-100 p-2">
                        @foreach($products as $product)
                            <li>
                                <a href="javascript://" class="dropdown-item" wire:click="selectProduct({{$product['id']}})">{{ $product['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="mb-4">
                    <div class="mb-2 fw-medium">Укажите ссылку</div>
                    <div class="input-group mb-2">
                        <span class="input-group-text"><i class="fa-solid fa-link-simple"></i></span>
                        <input type="text" class="form-control @if($errors->has('url')) is-invalid @endif " wire:model.lazy="url"
                               placeholder="{{$product['attributes']['cart_link_description']['value'] ?? 'Url'}}">
                    </div>
                    @error('url')
                    <div class="rounding px-3 py-2 small bg-soft-red">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3 border p-3 rounding">
                    <div class="mb-2 fw-medium">Количество {{ $currentProduct['attributes']['multiplicity_description']['value'] }}</div>
                    <div class="input-group">
                        <a href="javascript://" class="input-group-text border-0" wire:click="clickCount('minus')">
                            <i class="fa-solid fa-minus"></i>
                        </a>
                        <input type="text" class="form-control fs-16 fw-medium text-center" wire:model.debounce.500ms="count"
                               placeholder="{{ $this->count }}" value="{{ $this->count }}">
                        <span class="input-group-text fs-14 text-muted px-3">{{ $currentProduct['attributes']['multiplicity_description']['value'] }}</span>
                        <a href="javascript://" class="input-group-text border-0" wire:click="clickCount('plus')">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="d-flex align-items-center fs-16 rounding bg-light mb-4 p-3">
                                 <span class="text-muted">
                                    Цена: {{ $currentProduct['prices']['price'] / $this->currentProduct['multiplicity'] }}₽ / 1 шт.
                                 </span>
                    <span class="ms-auto fw-medium">{{ $price }}₽</span>
                </div>
                <button class="btn btn-lg btn-primary w-100" wire:click="submit">Оформить заказ</button>
            </div>
            <div class="col-lg-5 h-100">
                <div class="p-3 bg-light rounding position-sticky">
                    <div class="ucard-body mb-4">
                        <div class="fs-16 fw-medium mb-2">
                            Описание тарифа
                        </div>
                        <p class="text-muted mb-0">
                            Офферные подписчики со всего мира. Быстрый старт. Аккаунт должен быть открыт. Без
                            гарантии
                            от списаний!
                        </p>
                    </div>
                    <ul class="ucard-body mb-4">
                        <li class="d-flex align-items-center mb-3">
                            <div class="fw-medium">Качество:</div>
                            <div class="ms-auto color-grey">
                                <i class="fa-solid fa-star color-yellow"></i>
                                <i class="fa-solid fa-star color-yellow"></i>
                                <i class="fa-solid fa-star color-yellow"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="fw-medium">Скорость:</div>
                            <div class="ms-auto color-grey">
                                <i class="fa-solid fa-star color-yellow"></i>
                                <i class="fa-solid fa-star color-yellow"></i>
                                <i class="fa-solid fa-star color-yellow"></i>
                                <i class="fa-solid fa-star color-yellow"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </li>
                    </ul>
                    <ul class="ucard-body mb-0">
                        <li class="d-flex mb-3">
                            <div
                                class="icon-40 d-flex align-items-center justify-content-center border rounded-circle"
                                style="min-width: 40px; height: 40px;">
                                <i class="fa-solid fa-bolt color-orange fs-16"></i>
                            </div>
                            <div class="__body ms-3">
                                <div class="fw-medium mb-1">Мгновенный старт</div>
                                <div class="text-muted">Выполнение начнётся моментально после оплаты.</div>
                            </div>
                        </li>
                        <li class="d-flex mb-3">
                            <div
                                class="icon-40 d-flex align-items-center justify-content-center border rounded-circle"
                                style="min-width: 40px; height: 40px;">
                                <i class="fa-solid fa-shield-halved color-orange fs-16"></i>
                            </div>
                            <div class="__body ms-3">
                                <div class="fw-medium mb-1">Конфиденциальность</div>
                                <div class="text-muted">Мы не храним данные о клиентах после выполнения заказа.
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-3">
                            <div
                                class="icon-40 d-flex align-items-center justify-content-center border rounded-circle"
                                style="min-width: 40px; height: 40px;">
                                <i class="fa-solid fa-badge-percent color-orange fs-16"></i>
                            </div>
                            <div class="__body ms-3">
                                <div class="fw-medium mb-1">100% гарантия</div>
                                <div class="text-muted">Вернем деньги, если заказ будет выполняться более 24
                                    часов.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

