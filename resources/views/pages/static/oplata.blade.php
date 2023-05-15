@section('meta_title', 'SMM продвижение в социальных сетях – Система раскрутки SMOService')
@section('meta_keywords', 'смосервис, накрутка, раскрутка, продвижение, смм, сервис, сайт, система, онлайн, соцсети, услуги, просмотры, подписчики, лайки, зрители, комментарии, реклама, топ, тренды')
@section('meta_description', 'Онлайн сервис продвижения и раскрутки социальных сетей. Подписчики, просмотры, комментарии и лайки в социальных сетях по низким ценам.')

<x-app-layout>

    <main class="main d-flex flex-column">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="ucard mb-4 h-100">
                        <div class="sticky-top z-index-1">
                            <div class="heading fs-14 fw-medium">
                                <i class="fa-solid fa-ellipsis-vertical me-2"></i> Методы оплаты
                            </div>
                            <div class="ucard__body p-3">
                                <ul class="navbar-nav m-0 p-0">
                                    <li class="nav-item">
                                        <a class="nav-link link-scroll" href="#esystem"><i class="fa-solid fa-angle-right me-3"></i>Электронные системы</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-scroll" href="#internetBanks"><i class="fa-solid fa-angle-right me-3"></i>Интернет банки</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-scroll" href="#alternative"><i class="fa-solid fa-angle-right me-3"></i>Альтернативные способы</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-scroll" href="#proccess"><i class="fa-solid fa-angle-right me-3"></i>Процесс передачи данных</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mx-auto">
                    <div class="ucard">
                        <div class="ucard__body p-4">
                            <h1 class="fs-24 fw-bold text-center pt-4 mb-5">
                                Способы оплаты
                                <span class="d-block fw-normal fs-18 mt-2 text-muted">
                     Заказов и пополнения баланса
                     </span>
                            </h1>
                            <div class="row text-center" id="esystem">
                                <div class="col-12 text-start">
                                    <h2 class="fs-18 fw-medium mb-4">Электронные системы:</h2>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/webmoney.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">WebMoney</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/yandex-money.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">Яндекс.Деньги</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/qiwi.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">QIWI</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/e-kassa.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">
                                            Единый Кошелёк
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/paypal.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">PayPal</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/perfectmoney.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">Perfect Money</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/liqpay.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">LiqPay</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5 text-center" id="internetBanks">
                                <div class="col-12 text-start">
                                    <h2 class="fs-18 fw-medium mb-4">
                                        Интернет банки:
                                    </h2>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/alfa-bank.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">
                                            Альфа Клик
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/sberbank-online.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">
                                            Сбербанк Онлайн
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/lig-pay.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">
                                            Приват24
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/tinkoff-bank.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">
                                            Тинькофф Банк
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/promsviaz.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">
                                            Промсвязьбанк
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/vtb.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">
                                            ВТБ
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/applepay.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">
                                            Apple Pay
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/svyaznoy.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">
                                            Связной Банк
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5 text-center" id="alternative">
                                <div class="col-12 text-start">
                                    <h2 class="fs-18 fw-medium mb-4">
                                        Альтернативные способы:
                                    </h2>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/visamaster.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">VISA / MasterCard</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/maestro.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">Maestro</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/yandex-kassa.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">Яндекс Касса</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/robokassa.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">Робо Касса</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/z-payment.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">Z-Payment</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/WesternUnion.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">Western Union</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/dengi_mail.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">Деньги@Mail</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/free-kassa.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">Free-Kassa</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/paymaster.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">PayMaster</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/easypay.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">EasyPay</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/mts.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">МТС (Россия)</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/megafon.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">Мегафон (Россия)</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/unitpay.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">UnitPay</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                                    <div class="border rounding shadow--hover p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/pay-cards/i-bank.png')}}" class="object-fit" width="100" height="56" alt="">
                                        <div class="fs-14 fw-medium mt-4">Оплата для юр. лиц</div>
                                    </div>
                                </div>
                            </div>
                            <div class="border rounding p-4 my-4" id="proccess">
                                <h2 class="fs-18 fw-medium mb-3">Описание процесса передачи данных:</h2>
                                <p>
                                    Для оплаты (ввода реквизитов Вашей карты) Вы будете перенаправлены на платёжный шлюз ПАО СБЕРБАНК. Соединение с платёжным шлюзом и передача информации осуществляется в защищённом режиме с использованием протокола шифрования SSL. В случае если Ваш банк поддерживает технологию безопасного проведения интернет-платежей Verified By Visa, MasterCard SecureCode, MIR Accept, J-Secure для проведения платежа также может потребоваться ввод специального пароля.
                                </p>
                                <p class="mb-0">
                                    Настоящий сайт поддерживает 256-битное шифрование. Конфиденциальность сообщаемой персональной информации обеспечивается ПАО СБЕРБАНК. Введённая информация не будет предоставлена третьим лицам за исключением случаев, предусмотренных законодательством РФ. Проведение платежей по банковским картам осуществляется в строгом соответствии с требованиями платёжных систем МИР, Visa Int., MasterCard Europe Sprl, JCB.
                                </p>
                            </div>
                            <div class="border rounding p-4 my-4">
                                <h2 class="fs-18 fw-medium mb-3"><i class="fa-light fa-mobile me-2"></i>Возможность оплаты по Р/С</h2>
                                <ul class="list-unstyled">
                                    <li class="d-flex align-items-center mb-3">
                                        <img src="{{ Vite::asset('resources/assets/img/flag-ru.png')}}" alt="" class="me-2">
                                        Расчетный счет и реквизиты ПАО СБЕРБАНК
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="{{ Vite::asset('resources/assets/img/flag-ru.png')}}" alt="" class="me-2">
                                        Расчетный счет и реквизиты АО ТИНЬКОФФ БАНК
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-app-layout>
