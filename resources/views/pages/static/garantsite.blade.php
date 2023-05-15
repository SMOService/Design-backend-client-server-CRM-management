@section('meta_title', 'SMM продвижение в социальных сетях – Система раскрутки SMOService')
@section('meta_keywords', 'смосервис, накрутка, раскрутка, продвижение, смм, сервис, сайт, система, онлайн, соцсети, услуги, просмотры, подписчики, лайки, зрители, комментарии, реклама, топ, тренды')
@section('meta_description', 'Онлайн сервис продвижения и раскрутки социальных сетей. Подписчики, просмотры, комментарии и лайки в социальных сетях по низким ценам.')

<x-app-layout>

    <main class="main d-flex flex-column">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block">
                    @include('includes.left_banners')
                </div>
                <div class="col-lg-9 mx-auto">
                    <div class="d-flex align-items-center mb-4">
                        <a href="javascript://" onclick="history.back();" class="py-2 px-3 rounding bg-light border"><i class="fa-regular fa-angle-left me-2"></i>Назад</a>
                        <a href="{{ route('static.warranty-garantii') }}" class="py-2 px-3 rounding bg-light border ms-auto">Платёжные гарантии<i class="fa-regular fa-angle-right ms-2"></i></a>
                    </div>
                    <div class="ucard">
                        <div class="ucard__body p-4">
                            <h1 class="fs-24 fw-bold text-center pt-4 mb-5">
                                Основные гарантии качества
                                <span class="d-block fw-normal fs-18 mt-2 text-muted">сервиса «Smoservice.media»</span>
                            </h1>
                            <div class="bg-light rounding text-muted mb-4 p-4">
                                <p class="mb-0">
                                    Наш сервис работает с 2013 года. Мы являемся зарегистрированной компанией ООО, в Российской федерации. Наши счета и электронные кошельки верифицированы, сервис имеет множество положительных отзывов от наших клиентов. Вот лишь — <a href="{{ route('static.warranty-garantii') }}" class="link">основной список</a> гарантий нашего сервиса.
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="d-flex border rounding p-4 shadow--hover h-100">
                                        <i class="fa-light fa-comment-dots fs-30 color-orange"></i>
                                        <div class="ms-4">
                                            <div class="ucard-title fs-16 fw-medium mb-2">Отзывы</div>
                                            <p class="mb-0">
                                                Наш сайт имеет тысячи отзывов, которые вы можете просмотреть на нашем сайте. Мы работаем более 4 лет и отлично зарекомендовали себя
                                                в сфере раскрутки и продвижения проектов в социальных сетях.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="d-flex border rounding p-4 shadow--hover h-100">
                                        <i class="fa-light fa-badge-check fs-30 color-orange"></i>
                                        <div class="ms-4">
                                            <div class="ucard-title fs-16 fw-medium mb-2">Верификация</div>
                                            <p class="mb-0">
                                                Наша компания имеет верифицированный профиль на сайтах фриланс с отзывами. Подтвержденные социальные профили и собственные группы в социальных сетях которым не один год.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="d-flex border rounding p-4 shadow--hover h-100">
                                        <i class="fa-light fa-money-check-alt fs-30 color-orange"></i>
                                        <div class="ms-4">
                                            <div class="ucard-title fs-16 fw-medium mb-2">Финансовые показатели</div>
                                            <p class="mb-0">
                                                Наш основной WMID WebMoney имеет показатель BL более 500+. У нас верифицированный QIWI кошелек, профессиональный счет Яндекс
                                                Деньги, бизнес аккаунт Payeer и PayPal.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="d-flex border rounding p-4 shadow--hover h-100">
                                        <i class="fa-light fa-calendar-week fs-30 color-orange"></i>
                                        <div class="ms-4">
                                            <div class="ucard-title fs-16 fw-medium mb-2">Гарантия времени</div>
                                            <p class="mb-0">
                                                Сайт успешно работает несколько лет. Мы знаем что вам нужно, и как это нужно делать. Гарантируем конфиденциальность ваших заказов
                                                и защиту личной информации.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="d-flex border rounding p-4 shadow--hover h-100">
                                        <i class="fa-light fa-trophy-alt fs-30 color-orange"></i>
                                        <div class="ms-4">
                                            <div class="ucard-title fs-16 fw-medium mb-2">Первый сервис</div>
                                            <p class="mb-0">
                                                Наш сервис один из первых автоматических сайтов. Мы запустили свой ресурс — когда услуги в социальных сетях предоставляли лишь
                                                по средствам прямых заказов через чаты и почты. Все ваши заказы обрабатываются мгновенно!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="d-flex border rounding p-4 shadow--hover h-100">
                                        <i class="fa-light fa-user-shield fs-30 color-orange"></i>
                                        <div class="ms-4">
                                            <div class="ucard-title fs-16 fw-medium mb-2">Проверен гарантами</div>
                                            <p class="mb-0">
                                                Мы проводили множество сделок с помощью гарантов, в том числе и наши официальные форум темы проверены и застрахованы гарантами
                                                крупных площадок. Домен сайта проверен международной системой Comodo
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-warning d-flex align-items-center">
                                <i class="fal fa-info-circle fs-16 me-2"></i>
                                <p class="m-0">
                                    Остались вопросы? — Напишите в нашу <a href="/support/" rel="nofollow" class="link">службу поддержки</a> клиентов!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-app-layout>
