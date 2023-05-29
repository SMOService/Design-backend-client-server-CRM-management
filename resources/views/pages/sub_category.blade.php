@section('meta_title', $currentCategory['attributes']['meta_title']['value'] ?? null)
@section('meta_keywords', $currentCategory['attributes']['meta_keywords']['value'] ?? null)
@section('meta_description', $currentCategory['attributes']['meta_description']['value'] ?? null)

<x-app-layout>

    <main class="main d-flex flex-column pt-0">
        <section class="usection uhero pt-0 pt-md-5">
            <div class="container position-relative">
                <div class="row py-5 d-none d-md-block">
                    <div class="col-lg-6">
                        <h1 class="fw-bolder fs-40 mb-3">
                            Купить {{ $products[0]['attributes']['multiplicity_description']['value'] }}
                            <span class="d-block color-orange">в {{ $currentCategory['parentCategory']['name'] ?? $currentCategory['name'] }}</span>
                        </h1>
                        <p class="mb-0 fs-16 text-muted">
                            На SmoService вы можете купить {{ $products[0]['attributes']['multiplicity_description']['value'] }} в {{ $currentCategory['parentCategory']['name'] ?? $currentCategory['name'] }}
                            <span class="d-block">быстро, безопасно, и легко. Сделав всего несколько кликов.</span>
                        </p>
                    </div>
                </div>
                <div class="uhero-order-image d-none d-lg-block"></div>
            </div>
        </section>
        <section class="usection mt--50 mb-3 mb-sm-5">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-3 mb-4 mb-lg-0">
                        <div class="ucard">
                            <div class="bg-light p-3 f-accordion-btn d-flex align-items-center fs-16 fw-medium">
                                <i class="fa-solid fa-ellipsis-vertical me-2 d-none d-lg-block"></i> Инстаграм услуги
                                <i class="fa-regular fa-angle-down d-block d-lg-none ms-auto"></i>
                            </div>
                            <ul class="m-1 p-1 d-flex flex-row flex-lg-column overflow-auto" style="max-height: 524px">
                                <!-- item -->
                                <li class="m-1">
                                    <a href="#!" class="dropdown-item">
                                        <i class="fa-regular fa-play me-2 text-center" style="width:16px;"></i> IGTV
                                    </a>
                                </li>
                                <!-- item -->
                                <li class="m-1">
                        <span class="current_page dropdown-item">
                           <i class="fa-regular fa-users me-2 text-center" style="width:16px;"></i>
                           Подписчики
                        </span>
                                </li>
                                <!-- item -->
                                <li class="m-1">
                                    <a href="#!" class="dropdown-item">
                                        <i class="fa-regular fa-thumbs-up me-2 text-center" style="width:16px;"></i>
                                        Лайки
                                        <div class="ms-1 u-badge">hot</div>
                                    </a>
                                </li>
                                <!-- item -->
                                <li class="m-1">
                                    <a href="#!" class="dropdown-item">
                                        <i class="fa-regular fa-eye me-2 text-center" style="width:16px;"></i> Просмотры</a>
                                </li>
                                <!-- item -->
                                <li class="m-1">
                                    <a href="#!" class="dropdown-item">
                                        <i class="fa-regular fa-bullhorn me-2 text-center" style="width:16px;"></i> Трансляции
                                    </a>
                                </li>
                                <!-- item -->
                                <li class="m-1">
                                    <a href="#!" class="dropdown-item">
                                        <i class="fa-regular fa-history me-2 text-center" style="width:16px;"></i> Истории
                                    </a>
                                </li>
                                <!-- item -->
                                <li class="m-1">
                                    <a href="#!" class="dropdown-item">
                                        <i class="fa-regular fa-comments-alt me-2 text-center" style="width:16px;"></i>
                                        Комментарии
                                    </a>
                                </li>
                                <!-- item -->
                                <li class="m-1">
                                    <a href="#!" class="dropdown-item">
                                        <i class="fa-regular fa-star me-2 text-center" style="width:16px;"></i> Сохранения
                                    </a>
                                </li>
                                <!-- item -->
                                <li class="m-1">
                                    <a href="#!" class="dropdown-item">
                                        <i class="fa-regular fa-share-alt me-2 text-center" style="width:16px;"></i>
                                        Охват и показы
                                    </a>
                                </li>
                                <!-- item -->
                                <li class="m-1">
                                    <a href="#!" class="dropdown-item">
                                        <i class="fa-regular fa-flag me-2 text-center" style="width:16px;"></i> Жалобы</a>
                                </li>
                                <!-- item -->
                                <li class="m-1">
                                    <a href="#!" class="dropdown-item">
                                        <i class="fa-regular fa-ad me-2 text-center" style="width:16px;"></i>
                                        Реклама</a>
                                </li>
                                <!-- item -->
                                <li class="m-1">
                                    <a href="#!" class="dropdown-item">
                                        <i class="fa-regular fa-badge-check me-2 text-center" style="width:16px;"></i> Верификация
                                        <div class="ms-1 u-badge">new</div>
                                    </a>
                                </li>
                                <!-- item -->
                                <li class="m-1">
                                    <a href="#!" class="dropdown-item">
                                        <i class="fa-regular fa-key me-2 text-center" style="width:16px;"></i> VIP раскрутка</a>
                                </li>
                                <!-- item -->
                                <li class="m-1">
                                    <a href="#!" class="dropdown-item">
                                        <i class="fa-regular fa-box-full me-2 text-center" style="width:16px;"></i> Наборы</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                            @livewire('pages.sub-category', ['category'=>$currentCategory])
                    </div>
                </div>
            </div>
        </section>
        <section class="usection mb-3 mb-sm-5">
            <div class="container">
                <div class="text-center mb-5">
                    <div class="fs-16 color-orange mb-1">Продвижение в Instagram</div>
                    <h2 class="usection-title__line fs-32 fw-bolder mb-0">
                        Как это <span class="color-orange">работает</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="ucard shadow--unhover rounding px-3 py-4 text-center">
                            <i class="fa-light fa-id-badge fs-40 color-orange mb-4"></i>
                            <div class="ms-4">
                                <div class="ucard-title fs-16 fw-medium mb-2">Ссылка на ваш профиль</div>
                                <p class="mb-0">Просто укажите ссылку для вашего профиля в инстаграм, без каких либо личных
                                    данных.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="ucard shadow--unhover rounding px-3 py-4 text-center">
                            <i class="fa-light fa-chart-mixed fs-40 color-orange mb-4"></i>
                            <div class="ms-4">
                                <div class="ucard-title fs-16 fw-medium mb-2">Коль-во подписчиков</div>
                                <p class="mb-0">Укажите желаемое количество подписчиков для вашего профиля в Instagram</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="ucard shadow--unhover rounding px-3 py-4 text-center">
                            <i class="fa-light fa-rocket-launch fs-40 color-orange mb-4"></i>
                            <div class="ms-4">
                                <div class="ucard-title fs-16 fw-medium mb-2">Мгновенное выполнение</div>
                                <p class="mb-0">Вы начнёте получать фолловеров уже через несколько минут после оформления
                                    заказа.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="usection mb-3 mb-sm-5">
            <div class="container">
                <div class="text-center mb-5">
                    <div class="fs-16 color-orange mb-1">Преимущества платформы</div>
                    <h2 class="usection-title__line fs-32 fw-bolder mb-0">
                        Почему выбирают <span class="color-orange">SMO</span>Service?
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="ucard d-flex rounding px-3 py-4 shadow--unhover">
                            <i class="fa-light fa-hands-holding-heart fs-30 color-orange"></i>
                            <div class="ms-4">
                                <div class="ucard-title fs-16 fw-medium mb-2">Гарантия выполнения</div>
                                <p class="mb-0">Если ваш заказ не будет выполнен, мы произведем возврат средств в полном объеме.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="ucard d-flex rounding px-3 py-4 shadow--unhover">
                            <i class="fa-light fa-cart-shopping-fast fs-30 color-orange"></i>
                            <div class="ms-4">
                                <div class="ucard-title fs-16 fw-medium mb-2">Быстрое выполнение</div>
                                <p class="mb-0">Все заказы на сайте обрабатываются системой в кратчайшие сроки после оплаты.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="ucard d-flex rounding px-3 py-4 shadow--unhover">
                            <i class="fa-light fa-handshake-simple fs-30 color-orange"></i>
                            <div class="ms-4">
                                <div class="ucard-title fs-16 fw-medium mb-2">Реферальная программа</div>
                                <p class="mb-0">Приглашайте пользователей по своей реферальной ссылке, получая комиссию от
                                    заказов.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="ucard d-flex rounding px-3 py-4 shadow--unhover">
                            <i class="fa-light fa-chart-line fs-30 color-orange"></i>
                            <div class="ms-4">
                                <div class="ucard-title fs-16 fw-medium mb-2">Система скидок</div>
                                <p class="mb-0">Дисконтная система скидок для заказчиков, бонусы за пополнение баланса и кешбэк
                                    система.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="ucard d-flex rounding px-3 py-4 shadow--unhover">
                            <i class="fa-light fa-percent fs-30 color-orange"></i>
                            <div class="ms-4">
                                <div class="ucard-title fs-16 fw-medium mb-2">Система подписки</div>
                                <p class="mb-0">Разовое оформление заказа подписки, гарантирует продвижение страницы в тренды.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="ucard d-flex rounding px-3 py-4 shadow--unhover">
                            <i class="fa-light fa-user-friends fs-30 color-orange"></i>
                            <div class="ms-4">
                                <div class="ucard-title fs-16 fw-medium mb-2">Безопасные услуги</div>
                                <p class="mb-0">Исключительно безопасные методы раскрутки и привлечения целевой аудитории.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('includes.cart_faq')
        @include('includes.cart_reviews')
        @include('includes.catalog_seo')
    </main>


    <main class="d-flex flex-column">
        <section class="section hero pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-xxl-5 me-auto">
                        <h2 class="mb-4">
                            {{ $currentCategory['name'] }}
                            {!! $currentCategory['attributes']['category_title_description']['value'] ?? null !!}
                        </h2>
                        <p class="text-second fs-18 mb-56px">
                            {!! $currentCategory['attributes']['category_description']['value'] ?? null !!}
                        </p>
                    </div>
                    <div class="col-lg-5 d-none d-md-flex">
                        <div class="hero-image mx-auto"></div>
                    </div>
                </div>
                <nav class="nav nav-pills nav-pills-category flex-column flex-sm-row align-items-center bg-grey-200">
                    @foreach($products as $product)
                        <a class="flex-sm-fill text-sm-center nav-link @if ($loop->first) active @endif" href="#!"
                           id="nav-{{$product['slug']}}-tab" data-bs-toggle="tab"
                           data-bs-target="#nav-{{$product['slug']}}" role="tab"
                           aria-controls="nav-{{$product['slug']}}" aria-selected="true">{{$product['name']}}</a>
                    @endforeach
                    <a href="#!" id="DropQuestion" class="position-absolute ms-3" data-bs-toggle="dropdown"
                       aria-expanded="false" style="right: -48px">
                        <div class="icon-colour icon-32 bg-soft-red">
                            <i class="fa-solid fa-circle-question"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu p-3" aria-labelledby="DropQuestion" style="max-width: 250px;">
                        @foreach($products as $product)
                            <div class="mb-3">
                                <span class="d-block text-dark fw-medium mb-2">{{$product['name']}}</span>
                                <p class="fs-14 mb-0">{{$product['short_description']}}</p>
                            </div>
                        @endforeach
                    </div>
                </nav>
            </div>
        </section>
        <!-- Start of Category Slider section
           ============================================= -->
        <section class="section bg-grey-200 section-blur section-blur--sizing pt-5">
            <div class="container">
                <div class="tab-content" id="nav-tabContent">

                    @foreach($products as $product)
                        {{--                        {!! dd($product) !!}--}}
                        <div class="tab-pane m-0 fade @if ($loop->first) active @endif show" id="nav-{{$product['slug']}}" role="tabpanel"
                             aria-labelledby="nav-{{$product['slug']}}-tab">
                            <!--Slider-->
                            <div class="category-slider">
                                @foreach($product['discounts'] as $discount)
                                    @php
                                        $default_price = ($product['prices']['price'] * $discount['count'])-($product['prices']['price'] * $discount['count']*$discount['discount']/100);
                                        $discount_price = $product['prices']['price'] * $discount['count'];
                                    @endphp
                                    <div class="card product-card shadow-m py-4 text-center" data-id="{{$product['id']}}" data-price="{{$default_price}}" data-discount_price="{{$discount_price}}" data-count="{{$discount['count']}}">
                                        <input class="product-card-input" type="radio" name="productRadios" id="discount-{{$discount['id']}}"
                                               @if ($loop->first) checked @endif>
                                        <label class="product-card__label" for="discount-{{$discount['id']}}"></label>
                                        <div class="product-card__discount">Save {{$discount['discount']}}%</div>
                                        <div class="product-card__amount">{{$discount['count'] * $product['multiplicity']}}</div>
                                        <div class="product-card__name">{{$product['attributes']['multiplicity_description']['value']}}</div>
                                        <hr>
                                        <div class="product-card__price d-flex align-items-center">
                                            <span class="me-auto"><s>${{$discount_price}}</s></span>
                                            <span class="fs-24 fw-bold color-orange">${{$default_price}}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="bg-soft-white shadow-m p-4 rounding">
                                <div class="row align-items-center">
                                    <div class="col-md-6 col-xxl-3 mb-3 mb-xxl-0">
                                        <div class="d-flex align-items-center">
                                            <div class="icon-colour icon-32 bg-soft-orange me-3">
                                                <i class="fa-solid fa-solid fa-badge-check"></i>
                                            </div>
                                            <sapn class="fs-14">Guaranteed Instant Delivery</sapn>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xxl-3 mb-3 mb-xxl-0">
                                        <div class="d-flex align-items-center">
                                            <div class="icon-colour icon-32 bg-soft-purple me-3">
                                                <i class="fa-solid fa-users"></i>
                                            </div>
                                            <sapn class="fs-14">Real follows from real people</sapn>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xxl-3 mb-3 mb-xxl-0">
                                        <div class="d-flex align-items-center">
                                            <div class="icon-colour icon-32 bg-soft-red me-3">
                                                <i class="fa-solid fa-bolt"></i>
                                            </div>
                                            <sapn class="fs-14">Fast delivery (gradual or instant)</sapn>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xxl-3 mb-3 mb-xxl-0">
                                        <div class="d-flex align-items-center">
                                            <div class="icon-colour icon-32 bg-soft-sky me-3">
                                                <i class="fa-regular fa-fingerprint"></i>
                                            </div>
                                            <sapn class="fs-14">No password required</sapn>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End of Category Slider section
           ============================================= -->
        <section class="section">
            <div class="container">
                <h2 class="text-center mb-56px">
                    Just a Few Steps <span class="d-block">to Popularity!</span>
                </h2>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card bg-purple-100 p-5">
                            <div class="card__icon bg-purple-500 mb-32px">
                                <img src="{{ Vite::asset('resources/assets/img/icon-3d/finger-icon.svg') }}"
                                     class="card__icon-img" alt="Pick a package" width="80" height="80">
                            </div>
                            <div class="card__title fs-20 mb-2">Pick a package</div>
                            <p class="mb-0">
                                Choose the Instagram likes, Likes, <br> or views package that you're interested in. Feel
                                free to get in touch if you have <br> an inquiry about a bulk order.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card bg-sky-100 p-5">
                            <div class="card__icon bg-sky-500 mb-32px">
                                <img src="{{ Vite::asset('resources/assets/img/icon-3d/text-icon.svg') }}"
                                     class="card__icon-img" alt="Fill the info" width="80" height="80">
                            </div>
                            <div class="card__title fs-20 mb-2">Fill the info</div>
                            <p class="mb-0">
                                We will never ask you for sensitive details such as your password. All you have to do is
                                provide us with your username and leave the rest to us!
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                        <div class="card bg-powder-100 p-5">
                            <div class="card__icon bg-powder-500 mb-32px">
                                <img src="{{ Vite::asset('resources/assets/img/icon-3d/heart-icon.svg') }}"
                                     class="card__icon-img" alt="See the growth" width="80" height="80">
                            </div>
                            <div class="card__title fs-20 mb-2">See the growth</div>
                            <p class="mb-0">
                                All orders start within a few minutes, <br> so you'll see growth in your account very
                                quickly. We've made the process super easy.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('includes.faq')

        @include('includes.customers')

    </main>
</x-app-layout>
