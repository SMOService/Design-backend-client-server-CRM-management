@section('meta_title', 'SMM продвижение в социальных сетях – Система раскрутки SMOService')
@section('meta_keywords', 'смосервис, накрутка, раскрутка, продвижение, смм, сервис, сайт, система, онлайн, соцсети, услуги, просмотры, подписчики, лайки, зрители, комментарии, реклама, топ, тренды')
@section('meta_description', 'Онлайн сервис продвижения и раскрутки социальных сетей. Подписчики, просмотры, комментарии и лайки в социальных сетях по низким ценам.')

<x-app-layout>
    <main class="main d-flex flex-column">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 d-none d-xl-block">
                    <div class="ucard mb-4">
                        <div class="heading fs-16 fw-medium">
                            <i class="fa-regular fa-bullhorn me-2"></i> Предложение
                        </div>
                        <div class="ucard__body p-3">
                            <a href="/partner-program.php">
                                <img alt="Партнёрская программа - многоуровневая. Зарабатывай с нами!" title="Партнёрская программа - многоуровневая. Зарабатывай с нами!" src="/assets/img/partner-program-card.png" class="img-fluid" width="244" height="318">
                            </a>
                        </div>
                    </div>
                    <div class="ucard position-sticky" style="top: 24px">
                        <div class="heading fs-16 fw-medium">
                            <i class="fa-regular fa-calendar me-2"></i> Подписка
                        </div>
                        <div class="ucard__body p-3">
                            <a href="/subscription.php">
                                <img alt="Оформи подписку ВК, получай всё сразу для ВКонтакте и экономь!" title="Оформи подписку ВК, получай всё сразу для ВКонтакте и экономь!" src="/assets/img/subscription-card.png" class="img-fluid" width="244" height="318">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-9 mx-auto">
                    <div class="ucard">
                        <div class="d-flex align-items-center p-4 bg-light border-bottom">
                            <div class="comments__author--icon rounded-circle" style="width: 50px; height: 50px;">K</div>
                            <div class="ms-4">
                                <div class="fs-20 fw-medium mb-0">{{ Auth::user()->name }}</div>
                                <div class="d-flex align-items-center --left-34 color-orange">
                                    <div class="me-2 fa-icon-circle--small">
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    Стандарт
                                </div>
                            </div>
                            <div class="ms-auto">
                                <a href="{{ route('personal.balance') }}" class="btn btn-sm btn-dark fs-16" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Пополнить баланс">
                                    <span class="ms-2 me-3">{{ Auth::user()->userInfo->balance }} RUB</span>
                                    <i class="fa-regular fa-circle-plus d-none d-sm-inline"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ucard-body p-4">
{{--                            <div class="progress-box mb-4">--}}
{{--                                <div class="d-block d-md-flex align-items-center mb-4">--}}
{{--                                    <span class="d-block fw-medium mb-2 mb-md-0">Текущий кешбэк: 0%</span>--}}
{{--                                    <span class="d-block ms-auto text-muted">--}}
{{--                     Осталось заказать на 1000 <i class="fal fa-ruble-sign"></i>, чтобы получить кешбэк - 1%--}}
{{--                     <a href="/discounts.php" class="ms-2" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Подробнее о скидочной системе">--}}
{{--                     <i class="fa-regular fa-question-circle"></i>--}}
{{--                     </a>--}}
{{--                     </span>--}}
{{--                                </div>--}}
{{--                                <div class="progress bg-light rounding" style="height: 24px">--}}
{{--                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" aria-label="Warning striped example" style="width: 10%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="row">
                                <!-- Item -->
                                <div class="col-sm-6 col-lg-4 mb-4">
                                    <div class="border rounding shadow--hover px-3 py-4 text-center h-100">
                                        <div class="color-orange fs-40 mb-4">
                                            <i class="fa-regular fa-list-ol"></i>
                                        </div>
                                        <h4 class="fs-16 fw-medium">Текущие заказы</h4>
                                        <p class="text-muted mb-4">Активные ещё выполняющиеся заказы в текущий момент.</p>
                                        <a href="{{ route('personal.orders') }}" class="btn btn-sm btn-light">Перейти</a>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="col-sm-6 col-lg-4 mb-4">
                                    <div class="border rounding shadow--hover px-3 py-4 text-center h-100">
                                        <div class="color-orange fs-40 mb-4">
                                            <i class="fa-light fa-heart"></i>
                                        </div>
                                        <h4 class="fs-16 fw-medium">Избранные заказы</h4>
                                        <p class="text-muted mb-4">Услуги и заказы в избранном для повторного запуска.</p>
                                        <a href="{{ route('personal.orders') }}" class="btn btn-sm btn-light">Перейти</a>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="col-sm-6 col-lg-4 mb-4">
                                    <div class="border rounding shadow--hover px-3 py-4 text-center h-100">
                                        <div class="color-orange fs-40 mb-4">
                                            <i class="fa-light fa-coin-front"></i>
                                        </div>
                                        <h4 class="fs-16 fw-medium">ICO и SMOCoin</h4>
                                        <p class="text-muted mb-4">Инвестиции в наш токен и разработку нейронной сети.</p>
                                        <a href="#!" class="btn btn-sm btn-light">Перейти</a>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="col-sm-6 col-lg-4 mb-4">
                                    <div class="border rounding shadow--hover px-3 py-4 text-center h-100">
                                        <div class="color-orange fs-40 mb-4">
                                            <i class="fa-light fa-sliders-h"></i>
                                        </div>
                                        <h4 class="fs-16 fw-medium">Управление подпиской</h4>
                                        <p class="text-muted mb-4">Просмотр активных подписок на автоматический заказ.</p>
                                        <a href="#!" class="btn btn-sm btn-light">Перейти</a>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="col-sm-6 col-lg-4 mb-4">
                                    <div class="border rounding shadow--hover px-3 py-4 text-center h-100">
                                        <div class="color-orange fs-40 mb-4">
                                            <i class="fa-light fa-coin-front"></i>
                                        </div>
                                        <h4 class="fs-16 fw-medium">История заказов</h4>
                                        <p class="text-muted mb-4">Список всех ранее оформленных заказов на сайте.</p>
                                        <a href="{{ route('personal.orders') }}" class="btn btn-sm btn-light">Перейти</a>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="col-sm-6 col-lg-4 mb-4">
                                    <div class="border rounding shadow--hover px-3 py-4 text-center h-100">
                                        <div class="color-orange fs-40 mb-4">
                                            <i class="fa-light fa-ruble-sign"></i>
                                        </div>
                                        <h4 class="fs-16 fw-medium">Личный счёт</h4>
                                        <p class="text-muted mb-4">Пополнение баланса на сайте с дополнительным бонусом.</p>
                                        <a href="{{ route('personal.balance') }}" class="btn btn-sm btn-light">Перейти</a>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="col-sm-6 col-lg-4 mb-4">
                                    <div class="border rounding shadow--hover px-3 py-4 text-center h-100">
                                        <div class="color-orange fs-40 mb-4">
                                            <i class="fa-light fa-handshake"></i>
                                        </div>
                                        <h4 class="fs-16 fw-medium">Партнерская программа</h4>
                                        <p class="text-muted mb-4">Реферальная программа, приглашай и зарабатывай.</p>
                                        <a href="{{ route('static.partner-program') }}" class="btn btn-sm btn-light">Перейти</a>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="col-sm-6 col-lg-4 mb-4">
                                    <div class="border rounding shadow--hover px-3 py-4 text-center h-100">
                                        <div class="color-orange fs-40 mb-4">
                                            <i class="fa-light fa-images"></i>
                                        </div>
                                        <h4 class="fs-16 fw-medium">Промо материалы</h4>
                                        <p class="text-muted mb-4">Рекламные материалы для привлечения партнёров.</p>
                                        <a href="#!" class="btn btn-sm btn-light">Перейти</a>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="col-sm-6 col-lg-4 mb-4">
                                    <div class="border rounding shadow--hover px-3 py-4 text-center h-100">
                                        <div class="color-orange fs-40 mb-4">
                                            <i class="fa-light fa-pen-to-square"></i>
                                        </div>
                                        <h4 class="fs-16 fw-medium">Личные данные</h4>
                                        <p class="text-muted mb-4">Редактирование ваших персональных данных.</p>
                                        <a href="{{ route('personal.profile') }}" class="btn btn-sm btn-light">Перейти</a>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="col-sm-6 col-lg-4 mb-4">
                                    <div class="border rounding shadow--hover px-3 py-4 text-center h-100">
                                        <div class="color-orange fs-40 mb-4">
                                            <i class="fa-light fa-headset"></i>
                                        </div>
                                        <h4 class="fs-16 fw-medium">Техническая поддержка</h4>
                                        <p class="text-muted mb-4">Если у вас возникли вопросы, свяжитесь с техподдержкой.</p>
                                        <a href="{{ route('support') }}" class="btn btn-sm btn-light">Перейти</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
