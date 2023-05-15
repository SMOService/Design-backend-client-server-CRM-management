@section('meta_title', 'SMM продвижение в социальных сетях – Система раскрутки SMOService')
@section('meta_keywords', 'смосервис, накрутка, раскрутка, продвижение, смм, сервис, сайт, система, онлайн, соцсети, услуги, просмотры, подписчики, лайки, зрители, комментарии, реклама, топ, тренды')
@section('meta_description', 'Онлайн сервис продвижения и раскрутки социальных сетей. Подписчики, просмотры, комментарии и лайки в социальных сетях по низким ценам.')

<x-app-layout>

    <main class="main d-flex flex-column">
        <section class="usection mb-3 mb-sm-5">
            <div class="container">
                <div class="active ucard px-3 px-sm-5 py-5">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="fs-16 color-orange mb-1">
                                Как заработать с нами?
                            </div>
                            <h1 class="uhero-title mb-3">
                                Способы заработка <span class="d-block">Методы для каждого!</span>
                            </h1>
                            <p class="uhero-text">
                                Наша платформа предоставляет несколько возможностей для заработка денег, и совместного сотрудничества для каждого пользователя
                                и партнера. Хотите получить дополнительный доход, размер которого зависит только от вашей вовлеченности и активности?
                                Предлагаем зарабатывать вместе.
                            </p>
                            <p class="uhero-text mb-4 pb-2">
                                Чтобы получить дополнительный доход, воспользуйтесь одним из предложенных вариантов привлечения клиентов на сайт.
                                За это компания начислит на ваш счет средства, отталкиваясь от суммы, на которую сделают заказы приглашенные вами пользователи.
                            </p>
                            <div class="d-block d-lg-flex">
                                <a href="{{ route('static.affiliate-program') }}" class="btn btn-primary d-block me-0 me-lg-3">
                                    Программа зароботка
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 uhero-image d-none d-lg-block">
                            <picture>
                                <source srcset="{{ Vite::asset('resources/assets/img/uhero/uhero-one.webp')}}" type="image/webp">
                                <img alt="SMM продвижение в соцсетях" class="img-fluid" loading="lazy" src="{{ Vite::asset('resources/assets/img/uhero/uhero-one.png')}}" width="540" height="400">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="usection mb-3 mb-sm-5">
            <div class="container">
                <div class="ucard px-3 px-sm-5 py-5">
                    <div class="row align-items-center">
                        <div class="col-lg-5 text-center">
                            <picture>
                                <source srcset="{{ Vite::asset('resources/assets/img/uhero-two.webp')}}" type="image/webp">
                                <img alt="Партнёрская программа" class="img-fluid usection-img mb-3 mb-lg-0" loading="lazy" src="{{ Vite::asset('resources/assets/img/uhero-two.png')}}" width="396" height="418">
                            </picture>
                        </div>
                        <div class="col-lg-6 ms-auto">
                            <div class="fs-16 color-orange mb-1">
                                Партнерство
                            </div>
                            <h2 class="usection-title mb-3">
                                Реферальная система
                            </h2>
                            <p class="mb-4">
                                Приглашайте пользователей по своей реферальной ссылке, по нашей партнерской программе. Для этого наша команда подготовила программу «Реферальный профит», в рамках которой вы можете привлекать на сервис других людей, кого интересуют услуги продвижения в интернете. Ими могут быть друзья, родственники, коллеги или просто владельцы страниц в социальных сетях, которых вы не знаете лично.
                            </p>
                            <div class="d-flex flex-column flex-sm-row">
                                <a href="{{ route('static.promo-banners') }}" class="btn btn-primary mt-3">
                                    Подробнее про партнерку
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="usection mb-3 mb-sm-5">
            <div class="container">
                <div class="ucard px-3 px-sm-5 py-5">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-2 order-lg-1">
                            <div class="fs-16 color-orange mb-1">
                                Прямые продажи
                            </div>
                            <h2 class="usection-title mb-3">
                                Перепродажа услуг
                            </h2>
                            <p class="mb-4">
                                Перепродавайте услуги нашей SMM компании своим клиентам. Регулируйте уровень своего дохода на ваше усмотрение, продавая услуги компании привлеченным пользователям. Мы предлагаем грамотное и продуктивное продвижение, поэтому вы сможете гарантировать надежность и эффективность своим клиентам.
                            </p>
                            <div class="d-flex flex-column flex-sm-row">
                                <a href="{{ route('static.partner-program') }}" class="btn btn-primary mt-3">
                                    Подробнее про услуги
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 order-1 order-lg-2 text-center ms-auto mb-4 mb-lg-0">
                            <picture>
                                <source srcset="{{ Vite::asset('resources/assets/img/reseller.webp')}}" type="image/webp">
                                <img alt="Партнёрская программа" class="img-fluid usection-img mb-3 mb-lg-0" loading="lazy" src="{{ Vite::asset('resources/assets/img/reseller.png')}}" width="396" height="418">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="usection mb-3 mb-sm-5">
            <div class="container">
                <div class="ucard px-3 px-sm-5 py-5">
                    <div class="row align-items-center">
                        <div class="col-lg-5 text-center">
                            <picture>
                                <source srcset="{{ Vite::asset('resources/assets/img/adsmm.webp')}}" type="image/webp">
                                <img alt="Партнёрская программа" class="img-fluid usection-img mb-3 mb-lg-0" loading="lazy" src="{{ Vite::asset('resources/assets/img/adsmm.png')}}" width="396" height="418">
                            </picture>
                        </div>
                        <div class="col-lg-6 ms-auto">
                            <div class="fs-16 color-orange mb-1">
                                Подключение API
                            </div>
                            <h2 class="usection-title mb-3">
                                Владельцам SMM сервиса
                            </h2>
                            <p>
                                Подключите магазин к нашей системе API, и зарабатывайте автоматически на заказах. Чтобы воспользоваться API программой, перейдите в личный кабинет и получите собственный ключ. Ее можно использовать для создания ботов, приложений и сайтов, на своих собственных платформах – где-угодно.
                            </p>
                            <p class="mb-4">
                                Мы не ставим ограничения на методы перепродажи услуг через API нашей компании. Чтобы вы получили деньги за перепродажу услуг по API, вы должны установить в своём магазине цену выше нашей, или продавать с такой же ценой и зарабатывать разницу за счет систем бонусов и дисконтных скидок. С каждой продажи, которое будет сделана, вы заработаете.
                            </p>
                            <div class="d-flex flex-column flex-sm-row">
                                <a href="{{ route('static.promo-banners') }}" class="btn btn-primary mt-3">
                                    Подробнее про API
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-app-layout>
