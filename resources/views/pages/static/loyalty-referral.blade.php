@section('meta_title', 'SMM продвижение в социальных сетях – Система раскрутки SMOService')
@section('meta_keywords', 'смосервис, накрутка, раскрутка, продвижение, смм, сервис, сайт, система, онлайн, соцсети, услуги, просмотры, подписчики, лайки, зрители, комментарии, реклама, топ, тренды')
@section('meta_description', 'Онлайн сервис продвижения и раскрутки социальных сетей. Подписчики, просмотры, комментарии и лайки в социальных сетях по низким ценам.')

<x-app-layout>

    <main class="main d-flex flex-column">
        <div class="container">
            <div class="ucard p-4">
                <div class="d-block d-sm-flex align-items-center mb-4">
                    <h1 class="fs-24 fw-bold m-0">Партнёрам</h1>
                    <a href="#!" class="btn btn-sm btn-light mt-3 mt-sm-0 ms-auto">Правила партнерской программы</a>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <!--BOX-->
                        <div class="bg-light rounding p-4 mb-4">
                            <div class="fs-18 fw-medium mb-2">Ваш доход</div>
                            <div class="d-flex align-items-center text-muted mb-2">
                                Доступно к выводу
                                <a href="#!" class="ms-2" data-bs-toggle="tooltip" data-bs-title="Средства зачисляются на партнерский баланс через 10 дней после оплаты заказа рефералом. После этого их можно вывести на основной баланс (и использовать для оплаты наших услуг) или на системы электронных платежей (Webmoney, Paypal, Bitcoin, Tether-USDT)."><i class="fa-solid fa-circle-info"></i></a>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="fs-18 fw-bold me-auto">1256 RUB</div>
                                <a href="#!" class="btn btn-primary">Вывести средства</a>
                            </div>
                        </div>
                        <!--BOX-->
                        <div class="border rounding p-4 mb-4">
                            <div class="fs-18 fw-medium mb-2">Последние события</div>
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
                            <a href="#!" class="btn btn-sm btn-light d-block" data-bs-toggle="modal" data-bs-target="#referralModal">Смотреть все</a>
                        </div>
                        <!--BOX-->
                        <div class="border rounding">
                            <div class="p-4">
                                <div class="fs-18 fw-medium mb-2">Рефералы и процент отчислений</div>
                                <p class="mb-4">Клиент, который пришел по вашей рекомендации, навсегда закрепляется за вами. Процент отчислений зависит от количества активных заказов рефералов.</p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="border rounding p-4 text-center">
                                            <i class="fa-light fa-users fs-40 color-orange mb-4"></i>
                                            <div class="fs-16 fw-medium mb-2">Активных рефералов</div>
                                            <div class="fs-18"><span class="fw-bold">4</span> <span class="text-muted fs-14">из 16</span></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="border rounding p-4 text-center">
                                            <i class="fa-light fa-percent fs-40 color-orange mb-4"></i>
                                            <div class="fs-16 fw-medium mb-2">Процент отчислений</div>
                                            <div class="fs-18 fw-bold">10.5%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-light rounding p-2">
                                <canvas id="referralChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sticky-top" style="top: 24px;">
                            <!--BOX-->
                            <div class="border rounding p-4 mb-4">
                                <div class="fs-18 fw-medium mb-2">Реферальная ссылка</div>
                                <p>Это специальная ссылка, содержащая вашу идентификационную информацию, предназначенная для привязки рефералов к вашему аккаунту на сайте и получения вознаграждения с них.</p>
                                <div class="input-group">
                                    <input type="text" class="form-control" value="https://smoservice.media/?bonus=411518">
                                    <button type="button" class="input-group-text btn-clipboard" data-clipboard-text="https://smoservice.media/?bonus=411518" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Копировать" data-bs-original-title="Копировать"><i class="fa-regular fa-copy ms-2"></i></button>
                                </div>
                            </div>
                            <!--BOX-->
                            <div class="border rounding p-4 mb-4">
                                <div class="fs-18 fw-medium mb-2">Скидочные купоны</div>
                                <p>Это специальные купоны, содержащие вашу идентификационную информацию, предназначенные для привязки рефералов к вашему аккаунту на сайте и получения вознаграждения с них. Также купоны предоставляют выгоду покупателю в виде скидки, что дополнительно мотивирует его совершить покупку.</p>
                                <div class="input-group">
                                    <input type="text" class="form-control" value="PCBIDK_411518">
                                    <button type="button" class="input-group-text btn-clipboard" data-clipboard-text="PCBIDK_411518" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Копировать" data-bs-original-title="Копировать"><i class="fa-regular fa-copy ms-2"></i></button>
                                </div>
                            </div>
                            <!--BOX-->
                            <div class="border rounding p-4">
                                <div class="fs-18 fw-medium mb-2">Реферальный сайт</div>
                                <p>Зарегистрируйте свой сайт как реферальный и при любом переходе с него на smoservice.media будет использоваться ваш партнерский код.</p>
                                <a class="btn btn-sm btn-primary add_site" href="javascript:void(0);"><i class="far fa-plus-circle mr-2"></i> Добавить сайт</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>

</x-app-layout>
