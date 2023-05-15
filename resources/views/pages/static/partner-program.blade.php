@section('meta_title', 'SMM продвижение в социальных сетях – Система раскрутки SMOService')
@section('meta_keywords', 'смосервис, накрутка, раскрутка, продвижение, смм, сервис, сайт, система, онлайн, соцсети, услуги, просмотры, подписчики, лайки, зрители, комментарии, реклама, топ, тренды')
@section('meta_description', 'Онлайн сервис продвижения и раскрутки социальных сетей. Подписчики, просмотры, комментарии и лайки в социальных сетях по низким ценам.')

<x-app-layout>

    <main class="main d-flex flex-column pt-0">
        <section class="usection uhero pt-5">
            <div class="container">
                <div class="ucard px-3 px-sm-5 py-5">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="fs-16 color-orange mb-1">
                                Зарабатывай с нами!
                            </div>
                            <h1 class="uhero-title mb-3">
                                Партнерская программа  <span class="d-block">Заработок – SMOService</span>
                            </h1>
                            <p>
                                Получайте до 30% со всех транзакций приведенных клиентов в систему. Скопируй ссылку, отправь друзьям или поделись в социальных сетях, получай процент от их заказов. Многоуровневая партнерская программа. Зарегистрируйся или войди в аккаунт, чтобы воспользоваться начать.
                            </p>
                            <p class="mb-4 pb-2">
                                Хотите идти в ногу со временем и сотрудничать с компанией, которая может предлагать новации в сфере продвижения услуг, товаров, брендов, информации и много другого в сети? Предлагаем зарабатывать вместе!
                            </p>
                            <div class="d-block d-sm-flex">
                                <a href="{{ route('static.ways-of-earning') }}" class="btn btn-lg btn-primary d-block me-0 me-sm-3">
                                    Способы заработка
                                </a>
                                <a href="#!" class="btn btn-lg btn-dark d-block mt-2 mt-sm-0">
                                    Узнать подробнее
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 uhero-image d-none d-lg-block">
                            <picture>
                                <source srcset="{{ Vite::asset('resources/assets/img/partner-program.webp')}}" type="image/webp">
                                <img alt="SMM продвижение в соцсетях" class="img-fluid" loading="lazy" src="{{ Vite::asset('resources/assets/img/partner-program.webp')}}" width="540" height="400">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="usection mt--50  mb-3 mb-sm-5">
            <div class="container">
                <div class="ucard px-3 px-sm-5 py-5">
                    <div class="row">
                        <div class="col-lg-6 text-center mb-4 mb-lg-0">
                            <picture>
                                <source srcset="{{ Vite::asset('resources/assets/img/partn-2.webp')}}" type="image/webp">
                                <img alt="Партнёрская программа" class="img-fluid usection-img mb-3 mb-lg-0" loading="lazy" src="{{ Vite::asset('resources/assets/img/partn-2.png')}}" width="396" height="418">
                            </picture>
                        </div>
                        <div class="col-lg-6">
                            <h2 class="usection-title mb-3">
                                В чем суть заработка?
                            </h2>
                            <p>
                                Самые высокие ставки, удобная, детальная и подробная статистика по каждому действию, гибкие условия сотрудничества. Если вы зарегистрированы в нашей системе, для вас доступно получение реферальной ссылки, которую вы сможете размещать в социальных сетях, просто в интернете, отправлять личными сообщениями.
                            </p>
                            <p class="mb-4">
                                Выводите деньги на банковскую карту или QIWI кошелёк в течение 5 минут. Мы не берем комиссию за вывод средств и делимся секретами, как зарабатывать больше. Самые активные партнёры получают от нас дополнительные бонусы и повышенные ставки.
                            </p>
                            <div class="d-flex flex-column flex-sm-row">
                                <a href="{{ route('static.promo-banners') }}" class="btn btn-primary mt-3">
                                    Как начать зарабтывать?
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div class="border rounding shadow--hover p-4 h-100">
                                <div class="fs-16 color-orange mb-1">
                                    Какие
                                </div>
                                <h3 class="usection-title mb-4">
                                    Преимущества
                                </h3>
                                <ul class="list-unstyled">
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="fa-solid fa-check color-orange me-3"></i>
                                        Начисления каждый день
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="fa-solid fa-check color-orange me-3"></i>
                                        Нет ограничений по выводу средств
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="fa-solid fa-check color-orange me-3"></i>
                                        Возможность вывода на WMZ-кошелек
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="fa-solid fa-check color-orange me-3"></i>
                                        Прозрачная статистика доходов
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="fa-solid fa-check color-orange me-3"></i>
                                        Абсолютная пассивность дохода
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="fa-solid fa-check color-orange me-3"></i>
                                        Широкий выбор рекламных материалов
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="border rounding shadow--hover p-4 h-100">
                                <div class="fs-16 color-orange mb-1">
                                    Кому
                                </div>
                                <h3 class="usection-title mb-4">
                                    Подходит
                                </h3>
                                <ul class="list-unstyled">
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="fa-solid fa-check color-orange me-3"></i>
                                        Владельцам сайтов и блогов в тематике интернет-маркетинга
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="fa-solid fa-check color-orange me-3"></i>
                                        SMM специалистам и интернет предпринимателям
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="fa-solid fa-check color-orange me-3"></i>
                                        Активным участникам форумов и тематических сообществ
                                    </li>
                                </ul>
                                <div class="d-flex bg-light rounding p-3 mt-4">
                                    <i class="fa-light fa-circle-info fs-30 color-orange me-4"></i>
                                    <div class="mb-0">
                                        <h6 class="fs-16 fw-medium mb-2">Давайте зарабатывать вместе!</h6>
                                        <span class="d-block text-muted">Будь у Вас только личная страница в соц.сетях <br> или крупный тематический портал, мы будем <br> полезны друг другу!</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="usection mb-3 mb-sm-5">
            <div class="container">
                <div class="ucard py-5">
                    <h2 class="usection-title usection-title__line text-center px-3 px-sm-5 mb-5">
                        Сколько можно заработать
                    </h2>
                    <table class="u-table c-table text-center">
                        <thead>
                        <tr>
                            <th scope="col">Количество рефералов</th>
                            <th scope="col"></th>
                            <th scope="col">Месячный расход, руб.</th>
                            <th scope="col"></th>
                            <th scope="col">Ваш доход, руб.</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td class="d-none d-sm-block"><i class="fa-solid fa-angle-right color-orange fs-16"></i></td>
                            <td>20 000</td>
                            <td class="d-none d-sm-block"><i class="fa-solid fa-angle-right color-orange fs-16"></i></td>
                            <td>4000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="d-none d-sm-block"><i class="fa-solid fa-angle-right color-orange fs-16"></i></td>
                            <td>40 000</td>
                            <td class="d-none d-sm-block"><i class="fa-solid fa-angle-right color-orange fs-16"></i></td>
                            <td>8000</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="d-none d-sm-block"><i class="fa-solid fa-angle-right color-orange fs-16"></i></td>
                            <td>100 000</td>
                            <td class="d-none d-sm-block"><i class="fa-solid fa-angle-right color-orange fs-16"></i></td>
                            <td>20000</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td class="d-none d-sm-block"><i class="fa-solid fa-angle-right color-orange fs-16"></i></td>
                            <td>200 000</td>
                            <td class="d-none d-sm-block"><i class="fa-solid fa-angle-right color-orange fs-16"></i></td>
                            <td>40 000</td>
                        </tr>
                        <tr>
                            <td>50</td>
                            <td class="d-none d-sm-block"><i class="fa-solid fa-angle-right color-orange fs-16"></i></td>
                            <td>1 000 000</td>
                            <td class="d-none d-sm-block"><i class="fa-solid fa-angle-right color-orange fs-16"></i></td>
                            <td>20000</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="mt-5 text-center">
                        <a href="{{ route('static.promo-banners') }}" class="btn btn-primary">
                            Реферальная платформа
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="usection mb-3 mb-sm-5">
            <div class="container">
                <div class="ucard px-3 px-sm-5 py-5">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-2 order-lg-1  pe-0 pe-lg-5">
                            <h2 class="usection-title mb-3">
                                С чего начать <span class="d-block">привлечение рефералов?</span>
                            </h2>
                            <p>
                                Приводите активных пользователей на сайт и пожизненно получайте процент от суммы потраченных ими средств! Заработок заинтересует владельцев сайтов, пабликов и каналов, связанных с интернет-маркетингом, а также активных участников форумов и сообществ. В нашей системе реализован полный автопилот продвижения в социальных сетях.
                            </p>
                            <p class="mb-4">
                                Привлечение рефералов – это основа, с которой вы начинаете свою деятельность. На ней базируется вся работа, которая в последующем может на протяжении долгого времени приносить пассивный доход. Чем больше клиентов вы найдете, которые перейдут по вашей реферальной ссылке и зарегистрируются, а затем будут покупать услуги, тем выше уровень заработка. Все зависит от вас!
                            </p>
                            <div class="d-flex flex-column flex-sm-row">
                                <a href="{{ route('login') }}" class="btn btn-primary mt-3">
                                    Войти в аккаунт
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center mb-4 mb-lg-0">
                            <picture>
                                <source srcset="{{ Vite::asset('resources/assets/img/where-to-begin.webp')}}" type="image/webp">
                                <img alt="Партнёрская программа" class="img-fluid usection-img rounded" loading="lazy" src="{{ Vite::asset('resources/assets/img/where-to-begin.png')}}" width="396" height="418">
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
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <picture>
                                <source srcset="{{ Vite::asset('resources/assets/img/img12.webp')}}" type="image/webp">
                                <img alt="Партнёрская программа" class="img-fluid usection-img rounded" loading="lazy" src="{{ Vite::asset('resources/assets/img/img12.png')}}" width="396" height="418">
                            </picture>
                        </div>
                        <div class="col-lg-6 ps-0 ps-lg-5">
                            <h2 class="usection-title mb-3">
                                Четырех уровневая <span class="d-block">реферальная система</span>
                            </h2>
                            <p>
                                Поделитесь ссылкой на профессиональные инструменты для владельцев страниц в социальных сетях, отправь ссылку блогерам, привлеките клиента и получите процент от его расходов. У нас многоуровневая партнерская программа, если ваш партнер пригласит своего друга, вы также заработаете с этого свою комиссию. Создавайте свою команду, распространяйте партнерскую ссылку, зарабатывайте постоянно. Партнерская программа работает на всех услугах и функциях сервиса.
                            </p>
                            <p class="mb-4">
                                Каждый пользователь, который был приведён в систему, тоже получает свою реферальную ссылку. Ваш доход формируется не только в зависимости от суммы заказов по первой линии. Учитывается четыре поколения рефералов. Подходит такой вид заработка всем, кто хочет получать дополнительный или основной доход без ограничений.
                            </p>
                            <div class="d-flex flex-column flex-sm-row">
                                <a href="{{ route('register') }}" class="btn btn-primary mt-3">
                                    Зарегистрироваться
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
                        <div class="col-lg-6 order-2 order-lg-1  pe-0 pe-lg-5">
                            <h2 class="usection-title mb-3">
                                Как выводить заработанные средства?
                            </h2>
                            <p>
                                Вывод средств возможен в криптовалюте SMOCoin для SMMщиков, на внутренний баланс на сайте SMOService, на вашу российскую банковскую карту, QIWI кошелек или счет в системе Яндекс Деньги.
                            </p>
                            <p class="mb-4">
                                Мы предлагаем несколько способов вывода денег на выбор, которые используются не только в России, но и других странах СНГ.
                            </p>
                            <div class="d-flex flex-column flex-sm-row">
                                <a href="{{ route('static.affiliate-program') }}" class="btn btn-primary mt-3">
                                    Партнёрская программа
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center mb-4 mb-lg-0">
                            <picture>
                                <source srcset="{{ Vite::asset('resources/assets/img/img13.webp')}}" type="image/webp">
                                <img alt="Партнёрская программа" class="img-fluid usection-img rounded" loading="lazy" src="{{ Vite::asset('resources/assets/img/img13.png')}}" width="396" height="418">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-app-layout>
