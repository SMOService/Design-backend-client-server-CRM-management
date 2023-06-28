<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('meta_title', 'SMM продвижение в социальных сетях – Система раскрутки SMOService')</title>
    <meta name="keywords"
          content="@yield('meta_keywords',  'смосервис, накрутка, раскрутка, продвижение, смм, сервис, сайт, система, онлайн, соцсети, услуги, просмотры, подписчики, лайки, зрители, комментарии, реклама, топ, тренды')"/>
    <meta name="description"
          content="@yield('meta_description', 'Онлайн сервис продвижения и раскрутки социальных сетей. Подписчики, просмотры, комментарии и лайки в социальных сетях по низким ценам.')"/>
    <!-- Favicon -->
    <link rel="icon" href="{{ Vite::asset('resources/assets/img/footer-logo.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ Vite::asset('resources/assets/img/footer-logo.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ Vite::asset('resources/assets/img/apple-touch-icon-192x192.png')}}">
    <!-- OG Tags -->
    <meta property="og:title" content="@yield('meta_title', 'Libgram - Automated promotion system')">
    <meta property="og:description"
          content="@yield('meta_description', 'Online service for the promotion and promotion of social networks. Subscribers, views, comments and likes on social networks at low prices.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ config('app.url') }}"/>
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="robots" content="index, follow"/>
    <meta name="color-scheme" content="dark light">
    <!-- Favicon -->
    <link rel="canonical" href=""/>
    <!-- OG Tags -->
    <meta property="og:title" content="SMM продвижение в социальных сетях – Система раскрутки SMOService">
    <meta property="og:description"
          content="Онлайн сервис продвижения и раскрутки социальных сетей. Подписчики, просмотры, комментарии и лайки в социальных сетях по низким ценам.">
    <meta property="og:image" content="https://smoservice.media/assets/img/ogimgwebsite.jpeg">
    <meta name="trustpilot-one-time-domain-verification-id" content="8d6d6bcf-323a-4ea7-b3fc-ee7f4973f8c3"/>
    <meta name="p:domain_verify" content="a2c85e125bb83b85810700b406e4f7b6"/>


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

</head>

<body class="light-mode">
<div class="wrapper">
    <!-- Start of Header section
       ============================================= -->
    <div class="bg-rainbow-7 color-white text-center py-2">
        Наблюдаются ошибки в работе сайта, мы уже занимаемся устранением проблемы. 👷
    </div>
    <div class="nav-top d-none d-lg-block">
        <div class="container">
            <ul class="nav-top__menu d-flex list-unstyled m-0">
                <li><a href="#!" class="nav-top__link border-0"><i class="fa-light fa-sitemap me-2"></i>Карта сайта</a>
                </li>
                <li class="ms-auto"><a href="#!" class="nav-top__link">Телеграм бот</a></li>
                <li><a href="#!" class="nav-top__link">Андроид приложение</a></li>
                <li><a href="{{ route('static.loyalty-referral') }}" class="nav-top__link">Партнерская программа</a></li>
                <li><a href="{{ route('faq') }}" class="nav-top__link"><i class="fa-regular fa-circle-info me-2"></i>Помощь</a>
                </li>
            </ul>
        </div>
    </div>
    <header class="header">
        <div class="container">
            <div class="header-middle">
                <nav class="navbar navbar-expand-lg p-0">
                    <a class="navbar-brand d-none d-lg-block" href="/" title="На главную">
                        <span class="header-logo"></span>
                    </a>
                    <div class="d-flex d-lg-none align-items-center  w-100">
                        <a class="navbar-brand" href="/">
                            <span class="header-logo"></span>
                        </a>
                        <form role="search" class="header-search d-block d-lg-none mx-2">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Что будем продвигать?">
                                <button type="button" class="btn input-group-text"><i
                                        class="fa-regular fa-magnifying-glass"></i></button>
                            </div>
                        </form>

                        @if (\Auth::user())
                            <div class="dropdown ms-auto">
                                <a class="btn border d-flex align-items-center" href="#!" data-bs-toggle="dropdown"><i
                                        class="fa-regular fa-circle-user fs-24"></i></a>
                                <div class="dropdown-menu" style="margin-top: 14px; left: -120px">
                                    <a href="{{ route('personal.index') }}" class="dropdown-item"><i
                                            class="fa-regular fa-user-tie me-3"></i>Личный
                                        кабинет</a>
                                    <a href="{{ route('personal.balance') }}" class="dropdown-item"><i
                                            class="fa-regular fa-wallet me-3"></i>Пополнить
                                        баланс</a>
                                    <a href="{{ route('personal.orders') }}" class="dropdown-item"><i class="fa-solid fa-list-check me-3"></i>Мои
                                        заказы</a>
                                    <a href="{{ route('support') }}" class="dropdown-item"><i class="fa-regular fa-headset me-3"></i>Служба
                                        поддержки</a>
                                    <a href="{{ route('logout') }}" class="dropdown-item"><i
                                            class="fa-regular fa-right-from-bracket me-3"></i>Выйти</a>
                                </div>
                            </div>

                        @else
                            <a href=" {{ route('login') }}" class="btn btn-light ms-auto me-2">
                                <i class="fa-regular fa-right-to-bracket fs-24"></i>
                            </a>
                        @endif

                        <button class="btn btn-light navbar-toggler ms-2" id="hamburger_menu_button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarHeaderContent"
                                aria-controls="navbarHeaderContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar top-bar"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarHeaderContent">
                        <div class="dropdown-heading d-flex d-lg-none align-items-center">
                            <span class="fs-18">Каталог</span>
                            <!--Theme Mode Mobile Toggler-->
                            <button class="btn border navbar-toggler ms-auto" id="hamburger_menu_button" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#navbarHeaderContent"
                                    aria-controls="navbarHeaderContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar top-bar"></span>
                                <span class="icon-bar middle-bar"></span>
                                <span class="icon-bar bottom-bar"></span>
                            </button>
                        </div>
                        <div class="has-megamenu dropdown">
                            <button class="btn btn-primary d-none d-lg-flex align-items-center ms-3" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="me-2">
                                    <span class="icon-bar top-bar"></span>
                                    <span class="icon-bar middle-bar"></span>
                                    <span class="icon-bar bottom-bar"></span>
                                </div>
                                Каталог
                            </button>

                            @include('includes.catalog_menu')


                        </div>

                        @include('includes.search_menu')


                        @if (\Auth::user())
                            <ul class="d-none d-lg-flex align-items-center fs-16">
                                <li class="me-2">
                                    <a href="{{ route('personal.balance') }}" class="btn d-flex align-items-center"><i
                                            class="fa-regular fa-wallet fs-18 me-2"></i>{{ Auth::user()->userInfo->balance }} руб.</a>
                                </li>
                                <li class="dropdown">
                                    <a class="btn border dropdown-toggle d-flex align-items-center" href="#!"
                                       data-bs-toggle="dropdown">
                                        <i class="far fa-user-circle fs-18 me-2"></i>{{ \Auth::user()->name ?? \Auth::user()->email }}
                                    </a>
                                    <div class="dropdown-menu animate slideIn mt-3 p-2">
                                        <a href="{{ route('personal.index') }}" class="dropdown-item"><i
                                                class="fa-regular fa-user-tie me-3"></i>Личный кабинет</a>
                                        <a href="{{ route('personal.balance') }}" class="dropdown-item"><i
                                                class="fa-regular fa-wallet me-3"></i>Пополнить баланс</a>
                                        <a href="{{ route('personal.orders') }}" class="dropdown-item"><i class="fa-solid fa-list-check me-3"></i>Мои
                                            заказы</a>
                                        <a href="{{ route('support') }}" class="dropdown-item"><i
                                                class="fa-regular fa-headset me-3"></i>Служба
                                            поддержки</a>
                                        <a href="{{ route('logout') }}" class="dropdown-item"><i
                                                class="fa-regular fa-right-from-bracket me-3"></i>Выйти</a>
                                    </div>
                                </li>
                            </ul>
                        @else
                            <div class="dropdown d-none d-lg-block ms-auto">
                                <button class="btn btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Войти <i class="fa-regular fa-angle-down ms-2"></i>
                                </button>
                                <ul class="dropdown-menu animate slideIn mt-3 p-2">
                                    <li><a class="dropdown-item" href="{{ route('login') }}"><i
                                                class="fa-regular fa-address-card me-2"></i>Авторизация</a></li>
                                    <li><a class="dropdown-item" href="{{ route('register') }}"><i
                                                class="fa-regular fa-right-to-bracket me-2"></i>Регистрация</a></li>
                                </ul>
                            </div>
                        @endif

                        <!--Theme Mode Mobile Toggler-->
                        <button class="btn btn-light btn-change-theme ms-2 mt-4 mt-lg-0"
                                style="min-width: 46px; height: 46px;">
                            <div class="dark-mode-icon"><i class="fa-solid fa-moon fs-18"
                                                           style="transform: rotate(210deg)"></i></div>
                            <div class="light-mode-icon"><i class="fa-solid fa-sun-bright fs-18"></i></div>
                        </button>
                    </div>
                </nav>
            </div>
            <!--ul class="nav-menu list-unstyled d-none d-lg-flex align-items-center w-100 m-0 border-top">
               <li><a href="#!" class="nav-menu__link">Дешевые услуги</a></li>
               <li>
                  <a href="#!" class="nav-menu__link">
                  Выбор пользователей
                  </a>
                  <sup>быстрый старт</sup>
               </li>
               <li><a href="#!" class="nav-menu__link">SMM для бизнеса</a></li>
               <li><a href="#!" class="nav-menu__link">Крупным брендам</a></li>
               <li class="ms-auto"><a href="/social-subscription.php" class="btn btn-outline-primary">Подписка на лайки</a></li>
               </ul-->
        </div>
    </header>
    <!-- End of Header section
       ============================================= -->

    {{$slot}}

    <!-- Start of Footer section
    ============================================= -->
    <footer class="footer">
        <div class="container">
            <div class="row justify-content-center accordionFooter">
                <div class="col-md-3 text-ce mb-2 mb-md-0nter mb-5 mb-lg-0 text-center">
                    <div class="footer-logo"></div>
                    <p class="text-uppercase text-secondary mt-4 mb-3">СМОСЕРВИС © 2013-2022</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img alt="Защита информации SSL" class="me-2" src="{{ Vite::asset('resources/assets/img/secured.png')}}"
                             title="Защита информации SSL">
                        <img alt="Установлен SSL сертификат" src="{{ Vite::asset('resources/assets/img/comodo-secure.png')}}"
                             title="Установлен SSL сертификат">
                    </div>
                </div>
                <div class="col-md-3 mx-auto mb-2 mb-md-0">
                    <div class="f-accordion-btn d-flex align-items-center text-uppercase fw-medium mb-3"
                         data-bs-toggle="collapse" data-bs-target="#FooterMenu1" aria-controls="FooterMenu1">
                        Пользователям
                        <i class="fa-regular fa-angle-down d-block d-lg-none ms-auto"></i>
                    </div>
                    <ul class="list-unstyled accordion-collapse collapse mt-4 mt-lg-0" id="FooterMenu1"
                        data-bs-parent="#accordionFooter">
                        <li class="mb-2"><a href="{{ route('news') }}" class="py-2">Новости и обновления</a></li>
                        <li class="mb-2"><a href="{{ route('static.garantsite') }}" class="py-2">Наши гарантии</a></li>
                        <li class="mb-2"><a href="{{ route('gb') }}" class="py-2">Отзывы о сервисе</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mx-auto mb-2 mb-md-0">
                    <div class="f-accordion-btn d-flex align-items-center text-uppercase fw-medium mb-3"
                         data-bs-toggle="collapse" data-bs-target="#FooterMenu2" aria-controls="FooterMenu2">
                        Партнёрам
                        <i class="fa-regular fa-angle-down d-block d-lg-none ms-auto"></i>
                    </div>
                    <ul class="list-unstyled accordion-collapse collapse mt-4 mt-lg-0" id="FooterMenu2"
                        data-bs-parent="#accordionFooter">
                        <li class="mb-2"><a href="{{ route('static.api-docs') }}" class="py-2">API разработчикам</a></li>
                        <li class="mb-2"><a href="#!" class="py-2">Прайс-лист на услуги</a></li>
                        <li class="mb-2"><a href="{{ route('static.tools.index') }}" class="py-2">Инструменты SMM</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mx-auto mb-2 mb-md-0">
                    <div class="f-accordion-btn d-flex align-items-center text-uppercase fw-medium mb-3"
                         data-bs-toggle="collapse" data-bs-target="#FooterMenu3" aria-controls="FooterMenu3">
                        Сообщество
                        <i class="fa-regular fa-angle-down d-block d-lg-none ms-auto"></i>
                    </div>
                    <ul class="list-unstyled accordion-collapse collapse mt-4 mt-lg-0" id="FooterMenu3"
                        data-bs-parent="#accordionFooter">
                        <li class="mb-2"><a href="{{ route('support') }}" class="py-2">Написать в поддержку</a></li>
                        <li class="mb-2"><a href="{{ route('static.contacts') }}" class="py-2">Наши контакты</a></li>
                        <li class="mb-2"><a href="{{ route('static.rules') }}" class="py-2">Правила сервиса</a></li>
                        <li class="mb-2"><a href="{{ route('static.public-offer') }}" class="py-2">Публичная оферта</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-payment border-top mt-5 d-none d-md-block">
            <div class="container">
                <div class="row aline-items-center">
                    <div class="col-3 text-center">
                        Принимаем к оплате
                    </div>
                    <div class="col-6 mx-auto">
                        <div class="d-flex justify-content-between">
                            <div class="f-payment__icon f-payment__icon_master-card"></div>
                            <div class="f-payment__icon f-payment__icon_visa"></div>
                            <div class="f-payment__icon f-payment__icon_alpha"></div>
                            <div class="f-payment__icon f-payment__icon_sberbank"></div>
                            <div class="f-payment__icon f-payment__icon_webmoney"></div>
                            <div class="f-payment__icon f-payment__icon_yandex"></div>
                            <div class="f-payment__icon f-payment__icon_qiwi"></div>
                            <div class="f-payment__icon f-payment__icon_paypal"></div>
                            <div class="f-payment__icon f-payment__icon_privat"></div>
                        </div>
                    </div>
                    <div class="col-3">
                        <a href="{{ route('static.oplata') }}">Все способы оплаты</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- End of Footer section
    ============================================= -->
<!--UTM MODAL-->
<div class="modal fade modal-utm_source" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fs-18">Обязательные параметры</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <ul class="list-unstyled mb-4">
                    <li class="mb-3 fs-16"><span class="fw-medium">utm_source</span> — название рекламной площадки</li>
                    <li class="bg-light rounding p-3"><span class="fw-medium">Зачем нужен:</span> Чтобы указать название
                        источника трафика
                    </li>
                </ul>
                <div class="fs-16 fw-medium mb-3">Примеры:</div>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                        <i class="fa-solid fa-angle-right color-orange me-2"></i>
                        <span class="fw-medium">utm_source=google</span> – контекстная реклама в Google Adwords
                    </li>
                    <li class="mb-2">
                        <i class="fa-solid fa-angle-right color-orange me-2"></i>
                        <span class="fw-medium">utm_source=yandex</span> — контекстная реклама в Яндекс.Директ
                    </li>
                    <li class="mb-2">
                        <i class="fa-solid fa-angle-right color-orange me-2"></i>
                        <span class="fw-medium">utm_source=facebook</span> — контекстная реклама в Facebook
                    </li>
                    <li class="">
                        <i class="fa-solid fa-angle-right color-orange me-2"></i>
                        <span class="fw-medium">utm_source=vk</span> — контекстная реклама в Вконтакте
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--UTM MODAL-->
<div class="modal fade modal-utm_medium" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fs-18">Обязательные параметры</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3 fs-16">
                                <strong>utm_medium</strong> — тип рекламы
                            </div>
                            <div class="bg-light rounding p-3 mb-4">
                                <p>
                                    В этом параметре рекомендуется использовать устоявшиеся значения, например: cpc
                                    (cost per click) — это контекстная реклама, display — баннерная реклама с оплатой за
                                    показы, social_cpc — реклама в соцсетях с оплатой за клик.
                                </p>
                                <p class="mb-0">
                                    <strong>Зачем нужен:</strong> Чтобы определить типа кампании или рекламы
                                </p>
                            </div>
                            <div class="fs-16 fw-medium mb-3">Примеры:</div>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2">
                                    <i class="fa-solid fa-angle-right color-orange me-2"></i>
                                    <span class="fw-medium">utm_medium=organic</span> – бесплатный переход
                                </li>
                                <li class="mb-2">
                                    <i class="fa-solid fa-angle-right color-orange me-2"></i>
                                    <span class="fw-medium">utm_medium=cpc</span> — контекстная реклама (cost per click,
                                    плата за клик)
                                </li>
                                <li class="mb-2">
                                    <i class="fa-solid fa-angle-right color-orange me-2"></i>
                                    <span class="fw-medium">utm_medium=email</span> — рассылка
                                </li>
                                <li class="mb-2">
                                    <i class="fa-solid fa-angle-right color-orange me-2"></i>
                                    <span class="fw-medium">utm_medium=social</span> — социальные сети
                                </li>
                                <li class="mb-2">
                                    <i class="fa-solid fa-angle-right color-orange me-2"></i>
                                    <span class="fw-medium">utm_medium=banner</span> — медийная реклама
                                </li>
                                <li>
                                    <i class="fa-solid fa-angle-right color-orange me-2"></i>
                                    <span class="fw-medium">utm_medium=cpa</span> — другая реклама (cost per action,
                                    плата за действие)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Modal-->
<div class="modal fade modal-utm_campaign" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fs-18">Обязательные параметры</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="mb-3 fs-16">
                    <strong>utm_campaign</strong> — название кампании
                </div>
                <div class="bg-light rounding p-3 mb-4">
                    <p>
                        Этот обязательный параметр можно задать произвольно
                    </p>
                    <p class="mb-0">
                        <strong class="mb-3">Зачем нужен:</strong> Позволит вам отличить одну рекламную кампанию от
                        другой в статистике
                    </p>
                </div>
                <div class="fs-16 fw-medium mb-3">Примеры:</div>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                        <i class="fa-solid fa-angle-right color-orange me-2"></i>
                        <span class="fw-medium">utm_campaign=mebel_dlya_doma</span> – рекламная кампания мебели для дома
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--UTM MODAL-->
<div class="modal fade modal-utm_term" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fs-18">Необязательные параметры</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="mb-3 fs-16">
                    <strong>utm_term</strong> — ключевое слово, с которого начался показ объявления
                </div>
                <div class="bg-light rounding p-3 mb-4">
                    <p>Этот обязательный параметр можно задать произвольно</p>
                    <p class="mb-0">
                        <strong>Зачем нужен:</strong> Позволит вам отличить одну рекламную кампанию от другой в
                        статистике
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--UTM MODAL-->
<div class="modal fade modal-utm_content" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fs-18">Необязательные параметры</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="mb-3 fs-16">
                    <strong>utm_content</strong> — дополнительная информация, которую можно отслеживать, если совпадают
                    другие параметры
                </div>
                <div class="bg-light rounding p-3 mb-4">
                    <strong class="mb-3">Зачем нужен:</strong>
                    <p>Часто используется как пометка для объявления внутри рекламной кампании. Название можно задать
                        произвольно, удобнее всего использовать важные характеристики объявления — подкатегория товара
                        или услуги, тип самого объявления и т. п.</p>
                </div>
                <div class="fs-16 fw-medium mb-3">Примеры:</div>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                        <i class="fa-solid fa-angle-right color-orange me-2"></i>
                        <span class="fw-medium">utm_content=zero_block240×60</span> – баннер 240 на 60 про Zero блок на
                        Тильде
                    </li>
                    <li>
                        <i class="fa-solid fa-angle-right color-orange me-2"></i>
                        <span class="fw-medium">utm_content=zero_block_text</span> – текстовое объявление про Zero блок
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--END UTM MODALS-->
<!-- Pay Order Modal -->
<div class="modal fade" id="payOrderModal" tabindex="-1" aria-labelledby="payOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-18" id="exampleModalLabel">Оплатить заказ</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" class="account__form">
                <div class="modal-body p-4">
                    <div class="bg-light d-block d-md-flex rounding p-4 mb-5">
                        <div class="d-flex mb-4 mb-md-0">
                            <div class="fs-20 me-3">
                                <i class="fa-regular fa-eye"></i>
                            </div>
                            <div class="__body">
                                <div class="fs-16 fw-medium">Просмотры на видео (ТикТок эконом+)</div>
                                <a href="#!" target="_blank" class="mt-1 text-muted" data-bs-toggle="tooltip"
                                   data-bs-title="Перейти в профиль ТикТок">
                                    ТикТок <i class="fa-regular fa-arrow-up-right-from-square ms-2"></i>
                                </a>
                            </div>
                        </div>
                        <div class="fs-16 fw-medium text-center text-md-start ms-auto">1000 likes</div>
                    </div>
                    <ul class="row nav nav-pills nav-fill mb-4" id="pills-tab" role="tablist">
                        <li class="nav-item col-12 col-sm-6 col-md-4" role="presentation">
                            <button class="nav-link fw-medium fs-16 active" id="pills-cards-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-cards" type="button" role="tab" aria-controls="pills-cards"
                                    aria-selected="true"><i class="fa-regular fa-credit-card me-2"></i>Карты
                            </button>
                        </li>
                        <li class="nav-item col-12 col-sm-6 col-md-4 mt-3 mt-sm-0" role="presentation">
                            <button class="nav-link fw-medium fs-16" id="pills-ewallets-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-ewallets" type="button" role="tab" aria-controls="pills-ewallets"
                                    aria-selected="false"><i class="fa-brands fa-paypal me-2"></i>Е-кошельки
                            </button>
                        </li>
                        <li class="nav-item col-12 col-md-4 mt-3 mt-md-0" role="presentation">
                            <button class="nav-link fw-medium fs-16" id="pills-crypto-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-crypto" type="button" role="tab" aria-controls="pills-crypto"
                                    aria-selected="false"><i class="fa-solid fa-bitcoin-sign me-2"></i>Криптовалюты
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-cards" role="tabpanel"
                             aria-labelledby="pills-cards-tab" tabindex="0">
                            <div class="row payment-method">
                                <div class="col-6 col-md-4 mb-4" data-id="79">
                                    <div class="payment-method__item rounding shadow--hover p-3 text-center h-100">
                                        <input type="radio" class="form-check-input" name="paySystemId" value="79"
                                               id="ps_79" checked="">
                                        <img class="payment-method__image"
                                             src="{{ Vite::asset('resources/assets/img/payment-method/payment-method-1.png')}}">
                                        <div class="fw-medium mt-3">
                                            Все карты (рубли)
                                        </div>
                                        <label class="payment-method__label form-check-label" for="ps_79"></label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 mb-4" data-id="78">
                                    <div class="payment-method__item rounding shadow--hover p-3 text-center h-100">
                                        <input type="radio" class="form-check-input" name="paySystemId" value="78"
                                               id="ps_78">
                                        <img class="payment-method__image"
                                             src="{{ Vite::asset('resources/assets/img/payment-method/payment-method-2.png')}}">
                                        <div class="fw-medium mt-3">
                                            Карта (доллары)
                                        </div>
                                        <label class="payment-method__label form-check-label" for="ps_78"></label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 mb-4" data-id="71">
                                    <div class="payment-method__item rounding shadow--hover p-3 text-center h-100">
                                        <input type="radio" class="form-check-input" name="paySystemId" value="71"
                                               id="ps_71">
                                        <img class="payment-method__image"
                                             src="{{ Vite::asset('resources/assets/img/payment-method/payment-method-3.png')}}">
                                        <div class="fw-medium mt-3">
                                            Карты РФ (рубли)
                                        </div>
                                        <label class="payment-method__label form-check-label" for="ps_71"></label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 mb-4" data-id="80">
                                    <div class="payment-method__item rounding shadow--hover p-3 text-center h-100">
                                        <input type="radio" class="form-check-input" name="paySystemId" value="80"
                                               id="ps_80">
                                        <img class="payment-method__image"
                                             src="{{ Vite::asset('resources/assets/img/payment-method/payment-method-10.png')}}">
                                        <div class="fw-medium mt-3">
                                            СБП (карты РФ)
                                        </div>
                                        <label class="payment-method__label form-check-label" for="ps_80"></label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 mb-4" data-id="42">
                                    <div class="payment-method__item rounding shadow--hover p-3 text-center h-100">
                                        <input type="radio" class="form-check-input" name="paySystemId" value="42"
                                               id="ps_42">
                                        <img class="payment-method__image"
                                             src="{{ Vite::asset('resources/assets/img/payment-method/payment-method-11.png')}}">
                                        <div class="fw-medium mt-3">
                                            Сбербанк
                                        </div>
                                        <label class="payment-method__label form-check-label" for="ps_42"></label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 mb-4" data-id="51">
                                    <div class="payment-method__item rounding shadow--hover p-3 text-center h-100">
                                        <input type="radio" class="form-check-input" name="paySystemId" value="51"
                                               id="ps_51">
                                        <img class="payment-method__image"
                                             src="{{ Vite::asset('resources/assets/img/payment-method/payment-method-12.png')}}">
                                        <div class="fw-medium mt-3">
                                            Карта МИР
                                        </div>
                                        <label class="payment-method__label form-check-label" for="ps_51"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-ewallets" role="tabpanel"
                             aria-labelledby="pills-ewallets-tab" tabindex="0">
                            <div class="row payment-method">
                                <div class="col-6 col-md-4 mb-4" data-id="32">
                                    <div class="payment-method__item rounding shadow--hover p-3 text-center h-100">
                                        <input type="radio" class="form-check-input" name="paySystemId" value="32"
                                               id="ps_32">
                                        <img class="payment-method__image"
                                             src="{{ Vite::asset('resources/assets/img/payment-method/payment-method-4.png')}}">
                                        <div class="fw-medium mt-3">
                                            Payeer
                                        </div>
                                        <label class="payment-method__label form-check-label" for="ps_32"></label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 mb-4" data-id="75">
                                    <div class="payment-method__item rounding shadow--hover p-3 text-center h-100">
                                        <input type="radio" class="form-check-input" name="paySystemId" value="75"
                                               id="ps_75">
                                        <img class="payment-method__image"
                                             src="{{ Vite::asset('resources/assets/img/payment-method/payment-method-9.png')}}">
                                        <div class="fw-medium mt-3">
                                            ЮMoney
                                        </div>
                                        <label class="payment-method__label form-check-label" for="ps_75"></label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 mb-4" data-id="69">
                                    <div class="payment-method__item rounding shadow--hover p-3 text-center h-100">
                                        <input type="radio" class="form-check-input" name="paySystemId" value="69"
                                               id="ps_69">
                                        <img class="payment-method__image"
                                             src="{{ Vite::asset('resources/assets/img/payment-method/payment-method-6.png')}}">
                                        <div class="fw-medium mt-3">
                                            QIWI
                                        </div>
                                        <label class="payment-method__label form-check-label" for="ps_69"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-crypto" role="tabpanel" aria-labelledby="pills-crypto-tab"
                             tabindex="0">
                            <div class="row payment-method">
                                <div class="col-6 col-md-4 mb-4" data-id="36">
                                    <div class="payment-method__item rounding shadow--hover p-3 text-center h-100">
                                        <input type="radio" class="form-check-input" name="paySystemId" value="36"
                                               id="ps_36">
                                        <img class="payment-method__image"
                                             src="{{ Vite::asset('resources/assets/img/payment-method/payment-method-5.png')}}">
                                        <div class="fw-medium mt-3">
                                            Coinpayments
                                        </div>
                                        <label class="payment-method__label form-check-label" for="ps_36"></label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 mb-4" data-id="73">
                                    <div class="payment-method__item rounding shadow--hover p-3 text-center h-100">
                                        <input type="radio" class="form-check-input" name="paySystemId" value="73"
                                               id="ps_73">
                                        <img class="payment-method__image"
                                             src="{{ Vite::asset('resources/assets/img/payment-method/payment-method-7.png')}}">
                                        <div class="fw-medium mt-3">
                                            Binance Pay
                                        </div>
                                        <label class="payment-method__label form-check-label" for="ps_73"></label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 mb-4" data-id="74">
                                    <div class="payment-method__item rounding shadow--hover p-3 text-center h-100">
                                        <input type="radio" class="form-check-input" name="paySystemId" value="74"
                                               id="ps_74">
                                        <img class="payment-method__image"
                                             src="{{ Vite::asset('resources/assets/img/payment-method/payment-method-8.png')}}">
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
                        <div class="bg-green text-white rounding fs-20 d-flex align-items-center justify-content-center"
                             style="width: 32px; height: 32px;">
                            <i class="fa-regular fa-shield-alt"></i>
                        </div>
                        <p class="mb-0 ms-4 text-muted">
                            Данные защищены по стандарту PCI DSS. <br> Мы не передаем данные Вашей карты третьим лицам.
                        </p>
                    </div>
                </div>
                <div
                    class="modal-footer border-top bg-light d-block d-sm-flex align-items-center text-center text-sm-start sticky-bottom">
                    <div class="fs-16 fw-medium mb-3 mb-sm-0">К оплате: 3325 руб.</div>
                    <button type="button" class="btn btn-primary ms-auto">Оплатить заказ</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--Modal Send Video Review-->
<div class="modal fade" id="SendVideoReview" tabindex="-1" aria-labelledby="SendVideoReviewLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fs-18">Ссылка на ваш отзыв</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form action="">
                    <div class="input-group">
                        <input type="url" class="form-control" placeholder="https://www.youtube.com/watch?v=DHycFrbvJe4"
                               aria-label="Url">
                        <button type="submit" class="input-group-text btn btn-outline">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded">
            <div class="p-2">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive">
                    <iframe class="ratio-16x9 w-100 rounded" height="400" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Modal Referal-->
<div class="modal fade" id="referralModal" tabindex="-1" aria-labelledby="referralModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fs-18">Последние события</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <ul class="list-unstyled mb-4">
                    <li class="px-1 py-2 border-bottom">
                        <div class="fw-medium mb-1 text-muted small">12 ноября</div>
                        <div class="d-flex align-items-center">
                            <div>Оплатил заказ <span>(n****m)</span></div>
                            <div class="ms-auto fw-medium">250 RUB</div>
                        </div>
                    </li>
                    <li class="px-1 py-2 border-bottom">
                        <div class="fw-medium mb-1 text-muted small">11 ноября</div>
                        <div class="d-flex align-items-center">
                            <div>Оплатил заказ <span>(n****m)</span></div>
                            <div class="ms-auto fw-medium">120 RUB</div>
                        </div>
                    </li>
                    <li class="px-1 py-2 border-bottom">
                        <div class="fw-medium mb-1 text-muted small">24 октября</div>
                        <div class="d-flex align-items-center">
                            <div>Оплатил заказ <span>(n****m)</span></div>
                            <div class="ms-auto fw-medium">1340 RUB</div>
                        </div>
                    </li>
                    <li class="px-1 py-2 border-bottom">
                        <div class="fw-medium mb-1 text-muted small">16 октября</div>
                        <div class="d-flex align-items-center">
                            <div>Оплатил заказ <span>(n****m)</span></div>
                            <div class="ms-auto fw-medium">1800 RUB</div>
                        </div>
                    </li>
                    <li class="px-1 py-2">
                        <div class="fw-medium mb-1 text-muted small">06 октября</div>
                        <div class="d-flex align-items-center">
                            <div>Оплатил заказ <span>(n****m)</span></div>
                            <div class="ms-auto fw-medium">450 RUB</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@livewireScripts

</body>
</html>
