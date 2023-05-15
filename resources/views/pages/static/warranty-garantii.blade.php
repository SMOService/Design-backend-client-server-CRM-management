@section('meta_title', 'SMM продвижение в социальных сетях – Система раскрутки SMOService')
@section('meta_keywords', 'смосервис, накрутка, раскрутка, продвижение, смм, сервис, сайт, система, онлайн, соцсети, услуги, просмотры, подписчики, лайки, зрители, комментарии, реклама, топ, тренды')
@section('meta_description', 'Онлайн сервис продвижения и раскрутки социальных сетей. Подписчики, просмотры, комментарии и лайки в социальных сетях по низким ценам.')

<x-app-layout>

    <main class="main d-flex flex-column">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="ucard mb-4">
                        <div class="heading fs-16 fw-medium">
                            <i class="fa-regular fa-bullhorn me-2"></i> Предложение
                        </div>
                        <div class="ucard__body p-3">
                            <a href="{{ route('static.partner-program') }}">
                                <img alt="Партнёрская программа - многоуровневая. Зарабатывай с нами!" title="Партнёрская программа - многоуровневая. Зарабатывай с нами!" src="{{ Vite::asset('resources/assets/img/partner-program-card.png')}}" class="img-fluid" width="244" height="318">
                            </a>
                        </div>
                    </div>
                    <div class="ucard mb-4">
                        <div class="heading fs-16 fw-medium">
                            <i class="fa-regular fa-calendar me-2"></i> Подписка
                        </div>
                        <div class="ucard__body p-3">
                            <a href="/subscription.php">
                                <img alt="Оформи подписку ВК, получай всё сразу для ВКонтакте и экономь!" title="Оформи подписку ВК, получай всё сразу для ВКонтакте и экономь!" src="{{ Vite::asset('resources/assets/img/subscription-card.png')}}" class="img-fluid" width="244" height="318">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mx-auto">
                    <div class="d-flex align-items-center mb-4">
                        <a href="{{ route('static.garantsite') }}" class="py-2 px-3 rounding bg-light border"><i class="fa-regular fa-angle-left me-2"></i>Основные гарантии</a>
                    </div>
                    <div class="ucard">
                        <div class="ucard__body p-4">
                            <h1 class="fs-24 fw-bold text-center py-4 mb-5">
                                Наши платёжные гарантии
                                <span class="d-block fw-normal fs-18 mt-2 text-muted">Сертификация и депозит системы</span>
                            </h1>
                            <div class="row">
                                <div class="col-xl-6 mb-4">
                                    <div class="fs-18 pb-3 px-2 mb-3 border-bottom">Идентификация</div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4 mb-md-0">
                                            <div class="border rounding py-4 px-2 text-center shadow--hover h-100">
                                                <img src="{{ Vite::asset('resources/assets/img/payments/wm.svg')}}" alt="WebMoney" width="56" height="56">
                                                <div class="fw-medium fs-16 mt-3 mb-2">WebMoney</div>
                                                <p class="text-muted small mb-0"><i class="fa-solid fa-check color-green me-1" aria-hidden="true"></i> Аттестат продавца</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="border rounding py-4 px-2 text-center shadow--hover h-100">
                                                <img src="{{ Vite::asset('resources/assets/img/payments/ym.svg')}}" alt="WebMoney" width="56" height="56">
                                                <div class="fw-medium fs-16 mt-3 mb-2">Яндекс Деньги</div>
                                                <p class="text-muted small mb-0"><i class="fa-solid fa-check color-green me-1" aria-hidden="true"></i> Идентифицирован</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 mb-4">
                                    <div class="d-flex flex-column h-100">
                                        <div class="fs-18 pb-3 px-2 mb-3 border-bottom">Способы оплаты</div>
                                        <p class="my-auto pb-4 pb-xl-0">
                                            Возможна оплата с помощью большинства доступных методов. Оплата для юридических и физических лиц. Оплата электронными системами и через банки.
                                        </p>
                                        <a href="/pages/oplata/" class="btn btn-sm btn-primary">Все способы оплаты</a>
                                    </div>
                                </div>
                            </div>
                            <div class="content-styled">
                                <ul class="py-4 border-top border-bottom">
                                    <li>Работаем с 2013 года и отлично зарекомендовали себя в сфере рекламы.</li>
                                    <li>Аттестат Продавца с высоким BL, Аттестат Продавца в системе Z-Payment.</li>
                                    <li>Идентифицирован счет в системах QIWI и ЯндексДеньги.</li>
                                    <li>Бизнес счет в международной системе платежей PayPal.</li>
                                    <li>Наша компания имеет физический адрес, офис в Москве.</li>
                                    <li>Более миллиона выполненных заказов. Десятки тысяч отзывов.</li>
                                </ul>
                                <ul class="pb-4 mb-0">
                                    <li>Подробно составленный <a href="{{ route('faq') }}" class="link">FAQ</a>, где есть ответы на все ваши вопросы.</li>
                                    <li>Гарантируем конфиденциальность вашего заказа.</li>
                                    <li>Владельцем сервиса является российское юридическое лицо.</li>
                                    <li>Платежи производятся на предпринимательский счет.</li>
                                    <li>Мы работаем согласно <a href="{{ route('static.public-offer') }}" class="link">пользовательскому соглашению</a>.</li>
                                    <li>Гарантируем полное выполнение каждого оформленного заказа.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-app-layout>
