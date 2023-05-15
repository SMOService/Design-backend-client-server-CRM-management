@section('meta_title', 'SMM продвижение в социальных сетях – Система раскрутки SMOService')
@section('meta_keywords', 'смосервис, накрутка, раскрутка, продвижение, смм, сервис, сайт, система, онлайн, соцсети, услуги, просмотры, подписчики, лайки, зрители, комментарии, реклама, топ, тренды')
@section('meta_description', 'Онлайн сервис продвижения и раскрутки социальных сетей. Подписчики, просмотры, комментарии и лайки в социальных сетях по низким ценам.')

<x-app-layout>

    <main class="main d-flex flex-column pt-0">
        <section class="usection uhero pt-5">
            <div class="container">
                <div class="active ucard px-3 px-sm-5 py-5">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h1 class="uhero-title mb-3">
                                Реферальная система  <span class="d-block color-orange">Как заработать?</span>
                            </h1>
                            <p class="fs-18 fw-medium mb-2">
                                Сервис №1 по продвижению в социальных сетях!
                            </p>
                            <p class="mb-4 pb-2">
                                Наша партнерская программа предлагает вам высокую конверсию в оплаты, выплаты до 35% с каждой оплаты клиента, широкая целевая аудитория.
                                Копируй и отправляй реферальную ссылку друзьям. Ты получишь до 35% от каждого заказа пользователя, который зарегистрировался по твоей ссылке.

                            </p>
                            <div class="d-block d-lg-flex">
                                <a href="{{ route('static.affiliate-program') }}" class="btn btn-lg btn-primary d-block me-0 me-lg-3">
                                    Начать зарабатывать
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 uhero-image d-none d-lg-block">
                            <picture>
                                <source srcset="{{ Vite::asset('resources/assets/img/referral-program.webp')}}" type="image/webp">
                                <img alt="SMM продвижение в соцсетях" class="img-fluid  px-5" loading="lazy" src="{{ Vite::asset('resources/assets/img/referral-program.webp')}}" width="540" height="400">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="usection mt--50  mb-3 mb-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="ucard shadow--unhover p-4 text-center h-100">
                            <i class="fa-light fa-chart-line color-orange fs-40 mb-4"></i>
                            <p class="fs-16 fw-medium mb-0">Высокая конверсия оплаты <span class="d-block">на сайте для каждой услуги</span></p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="ucard shadow--unhover p-4 text-center h-100">
                            <i class="fa-light fa-piggy-bank color-orange fs-40 mb-4"></i>
                            <p class="fs-16 fw-medium mb-0">Выплаты до 35% <span class="d-block">с каждой оплаты прямого клиента</span></p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="ucard shadow--unhover p-4 text-center h-100">
                            <i class="fa-light fa-bullhorn color-orange fs-40 mb-4"></i>
                            <p class="fs-16 fw-medium mb-0">Широкая и безграничная <span class="d-block">целевая аудитория для рефералов</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="usection mb-3 mb-sm-5">
            <div class="container">
                <div class="ucard px-3 px-sm-5 py-5">
                    <h2 class="usection-title usection-title__line text-center mb-5">
                        Зарабатывайте легко
                    </h2>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-center border rounding shadow--hover h-100 p-4">
                                <i class="fa-light fa-rocket fs-30 color-orange"></i>
                                <div class="__body ms-4">
                                    <div class="fs-16 fw-medium mb-1">Моментальный старт</div>
                                    <p class="mb-0">От старта до заработка - 1 клик</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-center border rounding shadow--hover h-100 p-4">
                                <i class="fa-light fa-hand-holding-usd fs-30 color-orange"></i>
                                <div class="__body ms-4">
                                    <div class="fs-16 fw-medium mb-1">Еженедельные выплаты</div>
                                    <p class="mb-0">По программе лояльности для партнеров</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="d-flex align-items-center border rounding shadow--hover h-100 p-4">
                                <i class="fa-brands fa-yandex fs-30 color-orange"></i>
                                <div class="__body ms-4">
                                    <div class="fs-16 fw-medium mb-1">Вывод средств через Яндекс.Деньги</div>
                                    <p class="mb-0">Банковские карты и безналичный расчет</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-0 mb-md-0">
                            <div class="d-flex align-items-center border rounding shadow--hover h-100 p-4">
                                <i class="fa-light fa-headset fs-30 color-orange"></i>
                                <div class="__body ms-4">
                                    <div class="fs-16 fw-medium mb-1">Быстрое решение вопросов</div>
                                    <p class="mb-0">Техническая поддержка работает 24/7</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="usection mb-3 mb-sm-5">
            <div class="container">
                <div class="ucard px-3 px-sm-5 py-5 text-center">
                    <h2 class="usection-title text-center mb-2">Мы сами занимаемся удержанием клиентов</h2>
                    <p class="fs-18 mb-5">Вам остается их только пригласить</p>
                    <a href="{{ route('static.ways-of-earning') }}" class="btn btn-primary">Способы зароботка</a>
                </div>
            </div>
        </section>
        <section class="usection mb-3 mb-sm-5">
            <div class="container">
                <div class="ucard px-3 px-sm-5 py-5">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <h2 class="usection-title mb-3">
                                Кто наши пользователи?
                            </h2>
                            <p>
                                Каждый пользователь имеет страничку в социальной сети, а значит каждый пользователь хотел бы иметь больше лайков и подписчиков. Потенциальный
                                наш клиент, это каждый пользователь интернета.
                            </p>
                            <p class="mb-4">
                                Напиши статью про наш сайт в блоге, запусти продвижение своей ссылки через контекстную рекламу, размести ссылку на тематических ресурсах,
                                добавь проект в партнерскую сеть, поделись ссылкой в социальных сетях или просто перепродавай наши услуги, если ты являешься SMM-специалистом
                                или представляешь СММ агентство.
                            </p>
                            <div class="d-flex flex-column flex-sm-row">
                                <a href="{{ route('static.partner-program') }}" class="btn btn-primary mt-3">
                                    Партнёрская программа
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 ms-auto mt-4 mt-lg-0">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="border rounding shadow--hover p-4 text-center mb-4">
                                        <i class="fa-light fa-user-tie color-orange fs-30 mb-4"></i>
                                        <p class="fs-16 fw-medium mb-0">Предприниматели</p>
                                    </div>
                                    <div class="border rounding shadow--hover p-4 text-center mb-4 mb-md-0">
                                        <i class="fal fa-badge-dollar color-orange fs-30 mb-4"></i>
                                        <p class="fs-16 fw-medium mb-0">Малый бизнес</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="border rounding shadow--hover p-4 text-center mb-4">
                                        <i class="fal fa-users color-orange fs-30 mb-4"></i>
                                        <p class="fs-16 fw-medium mb-0">Блогеры</p>
                                    </div>
                                    <div class="border rounding shadow--hover p-4 text-center mb-4">
                                        <i class="fal fa-mind-share color-orange fs-30 mb-4"></i>
                                        <p class="fs-16 fw-medium mb-0">SMM-менеджеры</p>
                                    </div>
                                    <div class="border rounding shadow--hover p-4 text-center mb-4 mb-md-0">
                                        <i class="fal fa-retweet color-orange fs-30 mb-4"></i>
                                        <p class="fs-16 fw-medium mb-0">Арбитражники</p>
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
                <div class="ucard px-3 px-sm-5 py-5">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="border rounding shadow--hover p-4 text-center mb-4">
                                        <div class="color-orange fs-30 mb-2">
                                            1 100 <i class="fa-light fa-ruble-sign"></i>
                                        </div>
                                        <p class="fs-16 fw-medium mb-0">Средний чек пользователя</p>
                                    </div>
                                    <div class="border rounding shadow--hover p-4 text-center mb-4">
                                        <div class="color-orange fs-30 mb-2">
                                            9 <i class="fa-light fa-percent ml-2"></i>
                                        </div>
                                        <p class="fs-16 fw-medium mb-0">Конверсия в оплату</p>
                                    </div>
                                    <div class="border rounding shadow--hover p-4 text-center mb-4 mb-md-0">
                                        <div class="color-orange fs-30 mb-2">
                                            15 <i class="fa-light fa-calendar"></i>
                                        </div>
                                        <p class="fs-16 fw-medium mb-0">Месяцев средняя активность клиента</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="border rounding shadow--hover p-4 text-center mb-4">
                                        <div class="color-orange fs-30 mb-2">
                                            27 000 <i class="fa-light fa-ruble-sign"></i>
                                        </div>
                                        <p class="fs-16 fw-medium mb-0">Средний заработок партнера в месяц</p>
                                    </div>
                                    <div class="border rounding shadow--hover p-4 text-center mb-4 mb-md-0">
                                        <div class="color-orange fs-30 mb-2">
                                            1 810 000  <i class="fa-light fa-ruble-sign"></i>
                                        </div>
                                        <p class="fs-16 fw-medium mb-0">Заработок ТОП 20 партнеров в месяц</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 ms-auto mt-4 mt-lg-0">
                            <h2 class="usection-title mb-3">
                                Правила реферальной программы
                            </h2>
                            <p>
                                Категорически запрещается рассылать СПАМ (в личные сообщения социальных сетей, в группах и сообществах магазинов-партнеров, в email-рассылках и др.)
                                для привлечения пользователей.
                            </p>
                            <p>
                                Строго запрещается любое создание мобильных приложений, расширений и групп в социальных сетях от имени сервиса и с использованием фирменного
                                логотипа. Также это касается и подтягивания страниц с нашего сайта внутри приложений.
                            </p>
                            <p class="mb-4">
                                Строго запрещается использование названия бренда SMOService и магазинов-партнеров в доменных именах сайтов, созданных для привлечения трафика по ПП.
                            </p>
                            <div class="d-flex flex-column flex-sm-row">
                                <a href="{{ route('static.ways-of-earning') }}" class="btn btn-primary mt-3">
                                    Методы заработка
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="usection mb-3 mb-lg-5">
            <div class="container">
                <div class="ucard px-3 px-sm-5 py-5 text-center">
                    <h2 class="usection-title usection-title__line mb-5">
                        Сколько зарабатывают наши партнёры
                    </h2>
                    <div class="row ucalc text-center">
                        <div class="col-lg-4 mb-4">
                            <h4 class="fs-30 fw-bold mb-2">
                                1 100 р
                            </h4>
                            <p class="mb-0">
                                Средний чек
                            </p>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <h4 class="fs-30 fw-bold mb-2">
                                0.25
                            </h4>
                            <p class="mb-0">
                                25% с фактических оплат
                            </p>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <h4 class="fs-30 fw-bold mb-2">
                                12
                            </h4>
                            <p class="mb-0">
                                Месяцев с первой оплаты
                            </p>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <h4 class="fs-30 fw-bold mb-2">
                                3 300 р
                            </h4>
                            <p class="mb-0">
                                Это только с 1 клиента
                            </p>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <h4 class="fs-30 fw-bold mb-2">
                                684
                            </h4>
                            <p class="mb-0">
                                Клиентов привлеченных за год
                            </p>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <h4 class="fs-30 fw-bold color-orange mb-2">
                                2 257 200 р
                            </h4>
                            <p class="mb-0">
                                Прибыль партнера за год
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="usection">
            <div class="container">
                <div class="ucard px-3 px-sm-5 py-5">
                    <h2 class="usection-title usection-title__line mb-5">
                        SMOService - дешевый, простой <span class="d-block">и качественный сервис для СММ продвижения</span>
                    </h2>
                    <div class="row">
                        <div class="col-md-5 col-lg-4">
                            <div class="nav unav flex-md-column flex-lg-wrap nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="btn btn-tabs w-100 p-3 mb-3 active" id="v-pills-one-tab"
                                   ata-toggle="pill" href="#v-pills-one" data-bs-toggle="pill" data-bs-target="#v-pills-one" type="button" role="tab" aria-controls="v-pills-one" aria-selected="true">
                                    <span class="fw-bold mr-2">01.</span> Блоги
                                </a>
                                <a class="btn btn-tabs w-100 p-3 mb-2" id="v-pills-two-tab" data-bs-toggle="pill" href="#v-pills-two" role="tab" aria-controls="v-pills-two" aria-selected="false">
                                    <span class="fw-bold mr-2">02.</span> Контекстная реклама
                                </a>
                                <a class="btn btn-tabs w-100 p-3 mb-2" id="v-pills-three-tab" data-bs-toggle="pill" href="#v-pills-three" role="tab" aria-controls="v-pills-three" aria-selected="false">
                                    <span class="fw-bold mr-2">03.</span> Тематические ресурсы
                                </a>
                                <a class="btn btn-tabs w-100 p-3 mb-2" id="v-pills-four-tab" data-bs-toggle="pill" href="#v-pills-four" role="tab" aria-controls="v-pills-four" aria-selected="false">
                                    <span class="fw-bold mr-2">04.</span> Партнерские сети
                                </a>
                                <a class="btn btn-tabs w-100 p-3 mb-2" id="v-pills-five-tab" data-bs-toggle="pill" href="#v-pills-five" role="tab" aria-controls="v-pills-five" aria-selected="false">
                                    <span class="fw-bold mr-2">05.</span> Социальные сети
                                </a>
                                <a class="btn btn-tabs w-100 p-3" id="v-pills-six-tab" data-bs-toggle="pill" href="#v-pills-six" role="tab" aria-controls="v-pills-six" aria-selected="false">
                                    <span class="fw-bold mr-2">06.</span> SMM агентства
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-8 mt-4 mt-md-0">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade active show" id="v-pills-one" role="tabpanel" aria-labelledby="v-pills-one-tab">
                                    <ul class="list-unstyled border rounding p-4">
                                        <li class="d-flex align-items-center mb-3">
                                            <i class="fa-solid fa-angle-right color-orange me-3"></i>
                                            Пишите обзорные статьи Smoservice и размещайте их в своём блоге.
                                        </li>
                                        <li class="d-flex align-items-center mb-3">
                                            <i class="fa-solid fa-angle-right color-orange me-3"></i>
                                            Пишите тематические статьи про Instagram, Smm, Digital media и т.д. нативно встраивая в них информацию о сервисе с реферальной ссылкой на Smoservice.
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="fa-solid fa-angle-right color-orange me-3"></i>
                                            Нет собственного блога, но хорошо пишите статьи - размещайте их в бесплатных СМИ.
                                        </li>
                                    </ul>
                                    <div class="py-4">
                                        <h6 class="fw-bold">
                                            Результат:
                                        </h6>
                                        <p>
                                            1 раз создав статью - получайте постоянную прибыль с партнёрской программы.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-two" role="tabpanel" aria-labelledby="v-pills-two-tab">
                                    <ul class="list-unstyled border rounding p-4">
                                        <li class="d-flex align-items-center mb-3">
                                            <i class="fa-solid fa-angle-right color-orange me-3"></i>
                                            Создавайте и настраивайте рекламные компании используя Вашу реферальную ссылку.
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="fa-solid fa-angle-right color-orange me-3"></i>
                                            Отлично работает и медийная реклама, используйте готовые маркетинговые материалы в своих рекламных кампаниях и привлекайте клиентов.
                                        </li>
                                    </ul>
                                    <div class="py-4">
                                        <h6 class="fw-bold">
                                            Результат:
                                        </h6>
                                        <p>
                                            Хорошо настроенная РК будет приносить постоянных доход
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-three" role="tabpanel" aria-labelledby="v-pills-three-tab">
                                    <ul class="list-unstyled border rounding p-4">
                                        <li class="d-flex align-items-center mb-3">
                                            <i class="fa-solid fa-angle-right color-orange me-3"></i>
                                            У Вас есть сайт, страница в соцсети или просто личный блог посвящённый SMM или Instagram - продвигайте Smoservice в нём.
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="fa-solid fa-angle-right color-orange me-3"></i>
                                            Делайте Email рассылки по собственным базам.
                                        </li>
                                    </ul>
                                    <div class="py-4">
                                        <h6 class="fw-bold">
                                            Результат:
                                        </h6>
                                        <p>
                                            Генерируйте ещё больше дохода с Вашей аудитории!
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-four" role="tabpanel" aria-labelledby="v-pills-four-tab">
                                    <ul class="list-unstyled border rounding p-4">
                                        <li class="d-flex align-items-center mb-3">
                                            <i class="fa-solid fa-angle-right color-orange me-3"></i>
                                            У Вас собственный партнёрский ресурс - продвигайте Smiservice в нём.
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="fa-solid fa-angle-right color-orange me-3"></i>
                                            У Вас есть сайты партнёры - размещайте на них баннеры и получайте постоянный трафик, а мы предоставим готовые маркетинговые материалы.
                                        </li>
                                    </ul>
                                    <div class="py-4">
                                        <h6 class="fw-bold">
                                            Результат:
                                        </h6>
                                        <p>
                                            Получай ещё больше прибыли с трафика!
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-five" role="tabpanel" aria-labelledby="v-pills-five-tab">
                                    <ul class="list-unstyled border rounding p-4">
                                        <li class="d-flex align-items-center mb-3">
                                            <i class="fa-solid fa-angle-right color-orange me-3"></i>
                                            Ведите своих клиентов в Smoservice.
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="fa-solid fa-angle-right color-orange me-3"></i>
                                            Рекламируйте своим клиентам Smoservice.
                                        </li>
                                    </ul>
                                    <div class="py-4">
                                        <h6 class="fw-bold">
                                            Результат:
                                        </h6>
                                        <p>
                                            Ваши клиенты получат пользу, а Вы дополнительный доход.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-six" role="tabpanel" aria-labelledby="v-pills-six-tab">
                                    <ul class="list-unstyled border rounding p-4">
                                        <li class="d-flex align-items-center mb-3">
                                            <i class="fa-solid fa-angle-right color-orange me-3"></i>
                                            Делайте текствовые и видео обзоры, выкладывайте в соцсетях.
                                        </li>
                                        <li class="d-flex align-items-center mb-3">
                                            <i class="fa-solid fa-angle-right color-orange me-3"></i>
                                            Рекомендуйте сервис своим друзьям с реферальной ссылкой.
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="fa-solid fa-angle-right color-orange me-3"></i>
                                            Пишите отзывы и своё мнение о сервисе Smoservice на популярных отзовниках.
                                        </li>
                                    </ul>
                                    <div class="py-4">
                                        <h6 class="fw-bold">
                                            Результат:
                                        </h6>
                                        <p>
                                            Даже личные социальные сети могут дать отличный результат! <br>
                                            А популярные отзовники дадут ещё больший охват и прибыль!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('login') }}" class="btn btn-lg btn-primary d-block d-lg-inline">
                                Пройти авторизацию
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

</x-app-layout>
