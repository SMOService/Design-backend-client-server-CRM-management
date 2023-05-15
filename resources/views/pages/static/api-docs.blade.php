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
                            <div class="heading fs-16 fw-medium">
                                <i class="fa-regular fa-code me-2"></i> Список методов
                            </div>
                            <div class="ucard__body p-3">
                                <ul class="navbar-nav m-0 p-0" id="myDIV">
                                    <li class="nav-item">
                                        <a class="nav-link link-scroll" href="#balance"><i class="fa-solid fa-angle-right me-3"></i>Баланс</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-scroll" href="#ListOfServices"><i class="fa-solid fa-angle-right me-3"></i>Список услуг</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-scroll" href="#CreateAnOrder"><i class="fa-solid fa-angle-right me-3"></i>Создание заказа</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-scroll" href="#OrderVerification"><i class="fa-solid fa-angle-right me-3"></i>Проверка заказа</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mx-auto">
                    <div class="d-flex align-items-center mb-4">
                        <a href="javascript://" onclick="history.back();" class="py-2 px-3 rounding bg-light border"><i class="fa-regular fa-angle-left me-2"></i>Назад</a>
                        <a href="{{ route('static.ways-of-earning') }}" class="py-2 px-3 rounding bg-light border ms-auto">Способы сотрудничества<i class="fa-regular fa-angle-right ms-2"></i></a>
                    </div>
                    <div class="ucard">
                        <div class="ucard__body p-4">
                            <h1 class="fs-24 fw-bold text-center pt-4 mb-5">
                                Документация API
                                <span class="d-block fw-normal fs-18 mt-2 text-muted">Руководство для веб-сервисов</span>
                            </h1>
                            <div class="d-flex align-items-center bg-light rounding text-muted mb-5 p-4">
                                <i class="fa-light fa-circle-info fs-30 color-orange me-4"></i>
                                <p class="mb-0">
                                    Получить API ключ вы можете в <a href="/personal/private/" class="link">личном кабинете</a>. <br>
                                    Все запросы отправляются как <b>Form data</b> методом <b>POST</b> на адрес - <b>https://smoservice.media/api/</b>
                                </p>
                            </div>
                            <!--box-->
                            <div class="pb-2 mb-5">
                                <h3 class="fs-18 fw-bold mb-4">Пример запроса для CURL:</h3>
                                <div class="p-3 rounding bg-light text-muted">
                                    curl --location --request POST 'https://smoservice.media/api/' \<br>
                                    --form 'action=balance' \<br>
                                    --form 'user_id=123' \<br>
                                    --form 'api_key=123123123xx123123123'
                                </div>
                            </div>
                            <!--box-->
                            <div class="__box mb-5" id="balance">
                                <h3 class="fs-18 fw-bold mb-4">Получение баланса:</h3>
                                <div class="p-3 border rounding mb-4">
                                    <h3 class="fs-16 fw-medium mb-4">Запрос:</h3>
                                    <ul class="list-unstyled text-muted">
                                        <li class="d-flex border-bottom pb-3 mb-3">
                                            <span class="fw-medium" style="min-width: 60px">user_id</span>
                                            <span class="ms-4 ms-md-5">10322</span>
                                        </li>
                                        <li class="d-flex border-bottom pb-3 mb-3">
                                            <span class="fw-medium" style="min-width: 60px">api_key</span>
                                            <span class="ms-4 ms-md-5">805BF62A4E857D8389E79386873BEE8F</span>
                                        </li>
                                        <li class="d-flex">
                                            <span class="fw-medium" style="min-width: 60px">action</span>
                                            <span class="ms-4 ms-md-5">balance</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-3 rounding bg-light">
                                    <h3 class="fs-16 fw-medium mb-4">Ответ:</h3>
                                    <p class="text-muted mb-0">
                                        curl --location --request POST 'https://smoservice.media/api/' \<br>
                                        --form 'action=balance' \<br>
                                        --form 'user_id=123' \<br>
                                        --form 'api_key=123123123xx123123123'
                                    </p>
                                </div>
                            </div>
                            <!--box-->
                            <div class="__box mb-5" id="ListOfServices">
                                <h3 class="fs-18 fw-bold mb-4">Список услуг:</h3>
                                <div class="p-3 border rounding mb-4">
                                    <h3 class="fs-16 fw-medium mb-4">Запрос:</h3>
                                    <ul class="list-unstyled text-muted">
                                        <li class="d-flex border-bottom pb-3 mb-3">
                                            <span class="fw-medium" style="min-width: 60px">user_id</span>
                                            <span class="ms-4 ms-md-5">10322</span>
                                        </li>
                                        <li class="d-flex border-bottom pb-3 mb-3">
                                            <span class="fw-medium" style="min-width: 60px">api_key</span>
                                            <span class="ms-4 ms-md-5">805BF62A4E857D8389E79386873BEE8F</span>
                                        </li>
                                        <li class="d-flex">
                                            <span class="fw-medium" style="min-width: 60px">action</span>
                                            <span class="ms-4 ms-md-5">services</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-3 rounding bg-light">
                                    <h3 class="fs-16 fw-medium mb-4">Ответ:</h3>
                                    <p class="text-muted mb-0">
                                        {<br>
                                        "type": "success",<br>
                                        "desc": "Service list",<br>
                                        "data": [<br>
                                        {<br>
                                        "id": "805",<br>
                                        "name": "Просмотры на видео (стандартные с удержанием)",<br>
                                        "min": "1000",<br>
                                        "max": "10000000",<br>
                                        "price": "0.35",<br>
                                        "code": "yt-views-retention"<br>
                                        },<br>
                                        {<br>
                                        "id": "807",<br>
                                        "name": "Просмотры на видео (стандартные)",<br>
                                        "min": "1000",<br>
                                        "max": "1000000",<br>
                                        "price": "0.33",<br>
                                        "code": "yt-views-standart"<br>
                                        }<br>
                                        ]<br>
                                        } <br>
                                    </p>
                                </div>
                            </div>
                            <!--box-->
                            <div class="__box mb-5" id="CreateAnOrder">
                                <h3 class="fs-18 fw-bold mb-4">Создание заказа:</h3>
                                <div class="p-3 border rounding mb-4">
                                    <h3 class="fs-16 fw-medium mb-4">Запрос:</h3>
                                    <ul class="list-unstyled text-muted">
                                        <li class="d-flex border-bottom pb-3 mb-3">
                                            <span class="fw-medium" style="min-width: 60px">user_id</span>
                                            <span class="ms-4 ms-md-5">10322</span>
                                        </li>
                                        <li class="d-flex border-bottom pb-3 mb-3">
                                            <span class="fw-medium" style="min-width: 60px">api_key</span>
                                            <span class="ms-4 ms-md-5">805BF62A4E857D8389E79386873BEE8F</span>
                                        </li>
                                        <li class="d-flex border-bottom pb-3 mb-3">
                                            <span class="fw-medium" style="min-width: 60px">action</span>
                                            <span class="ms-4 ms-md-5">create_order</span>
                                        </li>
                                        <li class="d-flex border-bottom pb-3 mb-3">
                                            <span class="fw-medium" style="min-width: 60px">service_id</span>
                                            <span class="ms-4 ms-md-5">807</span>
                                            <span class="ms-auto">	ID услуги</span>
                                        </li>
                                        <li class="d-flex border-bottom pb-3 mb-3">
                                            <span class="fw-medium" style="min-width: 60px">count</span>
                                            <span class="ms-4 ms-md-5">3500</span>
                                            <span class="ms-auto">Количество</span>
                                        </li>
                                        <li class="d-flex">
                                            <span class="fw-medium" style="min-width: 60px">url</span>
                                            <span class="ms-4 ms-md-5">https://www.youtube.com/user/smoserviceru</span>
                                            <span class="ms-auto">URL заказа</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-3 rounding bg-light">
                                    <h3 class="fs-16 fw-medium mb-4">Ответ:</h3>
                                    <p class="text-muted mb-0">
                                        {<br>
                                        "type": "success",<br>
                                        "desc": "Order info",<br>
                                        "data": {<br>
                                        "order_id": "17",<br>
                                        "price": "45.33"<br>
                                        }<br>
                                        }
                                    </p>
                                </div>
                            </div>
                            <!--box-->
                            <div class="__box mb-5" id="OrderVerification">
                                <h3 class="fs-18 fw-bold mb-4">Проверка заказа:</h3>
                                <div class="p-3 border rounding mb-4">
                                    <h3 class="fs-16 fw-medium mb-4">Запрос:</h3>
                                    <ul class="list-unstyled text-muted">
                                        <li class="d-flex border-bottom pb-3 mb-3">
                                            <span class="fw-medium" style="min-width: 60px">user_id</span>
                                            <span class="ms-4 ms-md-5">10322</span>
                                        </li>
                                        <li class="d-flex border-bottom pb-3 mb-3">
                                            <span class="fw-medium" style="min-width: 60px">api_key</span>
                                            <span class="ms-4 ms-md-5">805BF62A4E857D8389E79386873BEE8F</span>
                                        </li>
                                        <li class="d-flex border-bottom pb-3 mb-3">
                                            <span class="fw-medium" style="min-width: 60px">action</span>
                                            <span class="ms-4 ms-md-5">check_order</span>
                                        </li>
                                        <li class="d-flex border-bottom pb-3 mb-3">
                                            <span class="fw-medium" style="min-width: 60px">order_id</span>
                                            <span class="ms-4 ms-md-5">17</span>
                                            <span class="ms-auto">	ID услуги</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-3 rounding bg-light">
                                    <h3 class="fs-16 fw-medium mb-4">Ответ:</h3>
                                    <p class="text-muted mb-0">
                                        {<br>
                                        "type": "success",<br>
                                        "desc": "Order status",<br>
                                        "data": {<br>
                                        "order_id": "17",<br>
                                        "status": "completed"<br>
                                        }<br>
                                        }
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-app-layout>
