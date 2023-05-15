@section('meta_title', 'SMM продвижение в социальных сетях – Система раскрутки SMOService')
@section('meta_keywords', 'смосервис, накрутка, раскрутка, продвижение, смм, сервис, сайт, система, онлайн, соцсети, услуги, просмотры, подписчики, лайки, зрители, комментарии, реклама, топ, тренды')
@section('meta_description', 'Онлайн сервис продвижения и раскрутки социальных сетей. Подписчики, просмотры, комментарии и лайки в социальных сетях по низким ценам.')

<x-app-layout>

    <main class="main d-flex flex-column overflow-hidden">
        <section class="usection mb-3 mb-sm-5">
            <div class="container">
                <div class="active ucard px-3 px-sm-5 py-5">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <h1 class="uhero-title mb-3">
                                Приглашение партнёров <span class="d-block">Компания SMOService</span>
                            </h1>
                            <p class="uhero-text fs-18 fw-medium mb-2">
                                Сервис №1 по продвижению в соцсетях
                            </p>
                            <p class="mb-4 pb-2">
                                Привлекайте клиентов с помощью реферальной системы <span class="d-inline d-md-block">и получайте постоянный пассивный доход!</span>
                            </p>
                            <div class="d-block d-sm-flex">
                                <a href="#!" class="btn btn-lg btn-primary d-block me-0 me-sm-3">
                                    Стать партнером
                                </a>
                                <a href="#!" class="btn btn-lg btn-dark d-block mt-2 mt-sm-0">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 d-none d-lg-block">
                            <picture>
                                <source srcset="{{ Vite::asset('resources/assets/img/partners.webp')}}" type="image/webp">
                                <img alt="SMM продвижение в соцсетях" class="img-fluid" loading="lazy" src="{{ Vite::asset('resources/assets/img/partners.png')}}" width="540" height="400">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="usection mb-3 mb-sm-5">
            <div class="container">
                <div class="ucard px-3 px-lg-5 py-5">
                    <div class="usection-title__line text-center mb-5">
                        <h2 class="usection-title mb-2">Как зарабатывать вместе с SMOService</h2>
                        <p>
                            Самые высокие комиссионные, удобная, детальная и детальная статистика <span class="d-inline d-md-block">по каждому
                действию, гибкие условия сотрудничества для партнёров.</span>
                        </p>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-lg-4 mb-4 mb-sm-0">
                            <div class="d-flex d-sm-block d-md-flex border rounding shadow--hover h-100 p-3 mb-4">
                                <div class="ucard__icon color-orange fs-30 me-4" style="width:30px;">
                                    <i class="fa-light fa-key"></i>
                                </div>
                                <div class="ucard__body">
                                    <div class="ucard-title fs-16 fw-medium mb-2">
                                        Регистрация
                                    </div>
                                    <p class="mb-0">
                                        Вы регистрируете в системе свой личный аккаунт.
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex d-sm-block d-md-flex border rounding shadow--hover h-100 p-3 mb-4 ms--25px">
                                <div class="ucard__icon color-orange fs-30 me-4" style="width:30px;">
                                    <i class="fa-light fa-handshake"></i>
                                </div>
                                <div class="ucard__body">
                                    <div class="ucard-title fs-16 fw-medium mb-2">
                                        Партнёрка
                                    </div>
                                    <p class="mb-0">
                                        При регистрации принимаете условия соглашения.
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex d-sm-block d-md-flex border rounding shadow--hover h-100 p-3">
                                <div class="ucard__icon color-orange fs-30 me-4" style="width:30px;">
                                    <i class="fa-light fa-link"></i>
                                </div>
                                <div class="ucard__body">
                                    <div class="ucard-title fs-16 fw-medium mb-2">
                                        Ваша ссылка
                                    </div>
                                    <p class="mb-0">
                                        Получаете уникальную ссылку для привлечения клиентов.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-none d-lg-block">
                            <picture>
                                <source srcset="{{ Vite::asset('resources/assets/img/mobile-stat.png')}}" type="image/webp">
                                <img alt="Как зарабатывать вместе" class="img-fluid" loading="lazy" src="{{ Vite::asset('resources/assets/img/mobile-stat.png')}}" width="344" height="530">
                            </picture>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="d-flex d-sm-block d-md-flex border rounding shadow--hover h-100 p-3 mb-4">
                                <div class="ucard__icon color-orange fs-30 me-4" style="width:30px;">
                                    <i class="fa-light fa-rectangle-ad"></i>
                                </div>
                                <div class="ucard__body">
                                    <div class="ucard-title fs-16 fw-medium mb-2">
                                        Реклама
                                    </div>
                                    <p class="mb-0">
                                        Делитесь своей ссылкой на любых площадках в интернете.
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex d-sm-block d-md-flex border rounding shadow--hover h-100 p-3 mb-4 me--25px">
                                <div class="ucard__icon color-orange fs-30 me-4" style="width:30px;">
                                    <i class="fa-light fa-chart-mixed"></i>
                                </div>
                                <div class="ucard__body">
                                    <div class="ucard-title fs-16 fw-medium mb-2">
                                        Статистика
                                    </div>
                                    <p class="mb-0">
                                        Наши партнёры уже заработали с нами более <strong>5.480.283 руб.</strong>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex d-sm-block d-md-flex border rounding shadow--hover h-100 p-3">
                                <div class="ucard__icon color-orange fs-30 me-4" style="width:30px;">
                                    <i class="fa-light fa-hands-holding-dollar"></i>
                                </div>
                                <div class="ucard__body">
                                    <div class="ucard-title fs-16 fw-medium mb-2">
                                        Пассивный доход
                                    </div>
                                    <p class="mb-0">
                                        Зарабатываете с каждого клиента и с каждого продления.
                                    </p>
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
                    <h2 class="usection-title usection-title__line text-center mb-5">Мы точно сработаемся</h2>
                    <div class="row mb-5">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="border rounding shadow--hover h-100 p-3">
                                <div class="ucard__icon mb-4 fs-30" style="height:30px;">
                                    <i class="fa-light fa-rocket-launch"></i>
                                </div>
                                <div class="ucard-title fs-16 fw-medium mb-2">
                                    <span class="color-orange">Быстрые</span> выплаты
                                </div>
                                <p class="mb-0">
                                    Выводите деньги на банковскую карту или QIWI кошелёк в течение 5 минут.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="border rounding shadow--hover h-100 p-3">
                                <div class="ucard__icon mb-4 fs-30" style="height:30px;">
                                    <i class="fa-light fa-ballot-check"></i>
                                </div>
                                <div class="ucard-title fs-16 fw-medium mb-2">
                                    <span class="color-orange">Честное</span> сотрудничество
                                </div>
                                <p class="mb-0">
                                    Мы не берем комиссию за вывод средств с партнерского счета на SMOCoin.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="border rounding shadow--hover h-100 p-3">
                                <div class="ucard__icon mb-4 fs-30" style="height:30px;">
                                    <i class="fa-light fa-file-signature"></i>
                                </div>
                                <div class="ucard-title fs-16 fw-medium mb-2">
                                    <span class="color-orange">Индивидуальные</span> условия
                                </div>
                                <p class="mb-0">
                                    Выводите деньги на банковскую карту или QIWI кошелёк в течение 5 минут.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="#!" class="btn btn-lg btn-primary">Стать партнёром</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="usection mb-3 mb-sm-5">
            <div class="container">
                <div class="ucard px-3 px-sm-5 py-5">
                    <h2 class="usection-title usection-title__line text-center mb-5">Заработок для вебмастера и блогера</h2>
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <div class="d-flex h-100 p-3 mb-4">
                                <div class="ucard__icon fs-30 me-4" style="width:30px;">
                                    <i class="fa-light fa-handshake"></i>
                                </div>
                                <div class="ucard__body">
                                    <div class="ucard-title fs-18 mb-2">
                                        <span class="color-orange">Станьте</span> партнером SMOService Media
                                    </div>
                                    <p class="mb-0">
                                        SMOService - это сервис №1 в России и СНГ по автоматическому продвижению в социальных сетях.
                                        Мы помогаем в продвижении бизнесменам, предпринимателям, блогерам, SMM-менеджерам и всем желающим
                                        стать известными в социальных сетях. На сегодняшний день в СмоСервис Медиа было выполнено более 10,000,000 заказов.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100 p-3 mb-4">
                                <div class="ucard__icon fs-30 me-4" style="width:30px;">
                                    <i class="fa-light fa-link"></i>
                                </div>
                                <div class="ucard__body">
                                    <div class="ucard-title fs-18 fw-medium mb-2">
                                        <span class="color-orange">Персональная</span> партнерская программа
                                    </div>
                                    <p>
                                        Мы работаем с системой партнерской программой по реферальным ссылкам. Каждый клиент нашего сайта, получает уникальную партнерскую (реферальную) ссылку, благодаря которой он имеет возможность привлекать новых клиентов и партнеров зарабатывая
                                        при этом 20% с каждого их платежа.
                                    </p>
                                    <p class="mb-0 small">Средства с бонусного счета можно перевести на внутренний счет <br> или вывести деньги с баланса.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4 mb-4">
                            <div class="border rounding shadow--hover h-100 p-3 p-md-5 text-center">
                                <i class="fa-light fa-smile-beam mb-4 color-orange fs-40"></i>
                                <p class="fs-16 fw-medium mb-0">
                                    Лучшие условия
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4 mb-4">
                            <div class="border rounding shadow--hover h-100 p-3 p-md-5 text-center">
                                <i class="fa-light fa-chart-line mb-4 color-orange fs-40"></i>
                                <p class="fs-16 fw-medium mb-0">
                                    Высокая конверсия
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4 mb-4">
                            <div class="border rounding shadow--hover h-100 p-3 p-md-5 text-center">
                                <i class="fa-light fa-hands-helping mb-4 color-orange fs-40"></i>
                                <p class="fs-16 fw-medium mb-0">
                                    Помощь партнёрам
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4 mb-4">
                            <div class="border rounding shadow--hover h-100 p-3 p-md-5 text-center">
                                <i class="fa-light fa-badge-percent mb-4 color-orange fs-40"></i>
                                <p class="fs-16 fw-medium mb-0">
                                    Мгновенные отчисления
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4 mb-4">
                            <div class="border rounding shadow--hover h-100 p-3 p-md-5 text-center">
                                <i class="fa-light fa-chart-pie-alt mb-4 color-orange fs-40"></i>
                                <p class="fs-16 fw-medium mb-0">
                                    Статистика платежей
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4 mb-4">
                            <div class="border rounding shadow--hover h-100 p-3 p-md-5 text-center">
                                <i class="fa-light fa-ad mb-4 color-orange fs-40"></i>
                                <p class="fs-16 fw-medium mb-0">
                                    Рекламные материалы
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light rounding p-4">
                        <p>Получить партнерскую ссылку вы можете в личном кабинете, как и <a href="{{ route('static.promo-banners') }}" class="link">промо материалы</a></p>
                        <p class="mb-0">
                            Для этого необходим <a href="{{ route('login') }}"><u>авторизоваться</u></a>, в личном кабинете и перейти в раздел <a href="{{ route('static.partner-program') }}" class="link">партнерская программа</a>, <br> где вы и получите свою персональную ссылку, а так же промо
                            материалы.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="usection mb-3 mb-sm-5">
            <div class="container">
                <div class="ucard px-3 px-sm-5 py-5">
                    <h2 class="usection-title usection-title__line text-center mb-5">Зарабатывайте больше <span class="d-block">приглашая рефералов</span></h2>
                    <div class="row align-items-center">
                        <!--item-->
                        <div class="col-md-6 col-lg-5 mb-4">
                            <div class="d-flex align-items-center border rounded shadow--hover p-3">
                                <img src="{{ Vite::asset('resources/assets/img/user-1.jpg')}}" alt="" width="60" height="60" class="image-60x60 rounded">
                                <div class="fs-16 ms-4">Это Вы</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2 text-center d-none d-lg-block mb-4">
                            <i class="fa-light fa-arrows-turn-to-dots fa-2x"></i>
                        </div>
                        <div class="col-md-6 col-lg-5 mb-4">
                            <div class="d-flex align-items-center border rounded shadow--hover bg-light p-3">
                                <img src="{{ Vite::asset('resources/assets/img/user-2.jpg')}}" alt="" width="60" height="60" class="image-60x60 rounded">
                                <div class="fs-16 ms-4">А это Юля, ваш реферал.</div>
                            </div>
                        </div>
                        <!--item-->
                        <div class="col-md-6 col-lg-5 mb-4">
                            <div class="d-flex align-items-center border rounded shadow--hover p-3">
                                <img src="{{ Vite::asset('resources/assets/img/user-1.jpg')}}" alt="" width="60" height="60" class="image-60x60 rounded">
                                <div class="fs-16 ms-4">Вы пригласили Юлю по своей реф. ссылке</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2 text-center d-none d-lg-block mb-4">
                            <i class="fa-light fa-arrows-turn-to-dots fa-2x"></i>
                        </div>
                        <div class="col-md-6 col-lg-5 mb-4">
                            <div class="d-flex align-items-center border rounded shadow--hover bg-light p-3">
                                <img src="{{ Vite::asset('resources/assets/img/user-2.jpg')}}" alt="" width="60" height="60" class="image-60x60 rounded">
                                <div class="fs-16 ms-4">Юля сделала заказ и оформила подписку</div>
                            </div>
                        </div>
                        <!--item-->
                        <div class="col-md-6 col-lg-5 mb-4">
                            <div class="d-flex align-items-center border rounded shadow--hover p-3">
                                <img src="{{ Vite::asset('resources/assets/img/user-1.jpg')}}" alt="" width="60" height="60" class="image-60x60 rounded">
                                <div class="fs-16 ms-4">Вы получили <strong>20%</strong> от оплаченного заказа</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2 text-center d-none d-lg-block mb-4">
                            <i class="fa-light fa-arrows-turn-to-dots fa-2x"></i>
                        </div>
                        <div class="col-md-6 col-lg-5 mb-4">
                            <div class="d-flex align-items-center border rounded shadow--hover bg-light p-3">
                                <img src="{{ Vite::asset('resources/assets/img/user-2.jpg')}}" alt="" width="60" height="60" class="image-60x60 rounded">
                                <div class="fs-16 ms-4">Юля оплатила второй месяц подписки</div>
                            </div>
                        </div>
                        <!--item-->
                        <div class="col-md-6 col-lg-5 mb-4">
                            <div class="d-flex align-items-center border rounded shadow--hover p-3">
                                <img src="{{ Vite::asset('resources/assets/img/user-1.jpg')}}" alt="" width="60" height="60" class="image-60x60 rounded">
                                <div class="fs-16 ms-4">Вы получили <strong>25%</strong> от оплаченного заказа</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2 text-center d-none d-lg-block mb-4">
                            <i class="fa-light fa-arrows-turn-to-dots fa-2x"></i>
                        </div>
                        <div class="col-md-6 col-lg-5 mb-4">
                            <div class="d-flex align-items-center border rounded shadow--hover bg-light p-3">
                                <img src="{{ Vite::asset('resources/assets/img/user-2.jpg')}}" alt="" width="60" height="60" class="image-60x60 rounded">
                                <div class="fs-16 ms-4">Юля хочет работать только с Smoservice</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="usection mb-3 mb-sm-5">
            <div class="container">
                <div class="ucard px-3 px-sm-5 pt-5 pb-2">
                    <h2 class="usection-title usection-title__line text-center">
                        Мы собрали отзывы наших партнёров, <span class="d-block">чтобы помочь Вам решиться</span>
                    </h2>
                    <div id="carouselRev" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner py-5">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-6 col-xl-4 mb-4 mb-lg-0">
                                        <div class="d-flex border rounded shadow--hover p-3">
                                            <img src="{{ Vite::asset('resources/assets/img/user-4.jpg')}}" alt="" width="60" height="60" class="image-60x60 rounded">
                                            <div class="__body ms-3">
                                                <div class="d-flex align-items-center fs-16 fw-medium">
                                                    Анастасия
                                                    <i class="fa-brands fa-instagram ms-auto"></i>
                                                </div>
                                                <p class="text-muted mb-2">Блогер</p>
                                                <p class="mb-0">Сотрудничаю с данным смм сервисом уже почти три года, нет задержек по выплатам, всё на высоком уровне!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4 mb-4 mb-lg-0">
                                        <div class="d-flex border rounded shadow--hover p-3">
                                            <img src="{{ Vite::asset('resources/assets/img/user-3.jpg')}}" alt="" width="60" height="60" class="image-60x60 rounded">
                                            <div class="__body ms-3">
                                                <div class="d-flex align-items-center fs-16 fw-medium">
                                                    Виктор
                                                    <i class="fa-brands fa-instagram ms-auto"></i>
                                                </div>
                                                <p class="text-muted mb-2">Предприниматель</p>
                                                <p class="mb-0">Шикарно! Возможность получить отличную комиссию за продажу галочки Инстаграм или тренды Ютуб.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4 d-block d-md-none d-xl-block">
                                        <div class="d-flex border rounded shadow--hover p-3">
                                            <img src="{{ Vite::asset('resources/assets/img/user-6.jpg')}}" alt="" width="60" height="60" class="image-60x60 rounded">
                                            <div class="__body ms-3">
                                                <div class="d-flex align-items-center fs-16 fw-medium">
                                                    Вероника
                                                    <i class="fa-brands fa-instagram ms-auto"></i>
                                                </div>
                                                <p class="text-muted mb-2">Блогер</p>
                                                <p class="mb-0">Легко набрать команду, просто приглашая клиентов по реферальной ссылке через свой Телеграм.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-6 col-xl-4 mb-4 mb-lg-0">
                                        <div class="d-flex border rounded shadow--hover p-3">
                                            <img src="{{ Vite::asset('resources/assets/img/user-5.jpg')}}" alt="" width="60" height="60" class="image-60x60 rounded">
                                            <div class="__body ms-3">
                                                <div class="d-flex align-items-center fs-16 fw-medium">
                                                    Генадий
                                                    <i class="fa-brands fa-instagram ms-auto"></i>
                                                </div>
                                                <p class="text-muted mb-2">Блогер</p>
                                                <p class="mb-0">Сотрудничаю с данным смм сервисом уже почти три года, нет задержек по выплатам, всё на высоком уровне!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4 mb-4 mb-lg-0">
                                        <div class="d-flex border rounded shadow--hover p-3">
                                            <img src="{{ Vite::asset('resources/assets/img/user-8.jpg')}}" alt="" width="60" height="60" class="image-60x60 rounded">
                                            <div class="__body ms-3">
                                                <div class="d-flex align-items-center fs-16 fw-medium">
                                                    Анастасия
                                                    <i class="fa-brands fa-instagram ms-auto"></i>
                                                </div>
                                                <p class="text-muted mb-2">Предприниматель</p>
                                                <p class="mb-0">Прекрасный сервис для бизнеса. Использую его для продвижения своих проектов в социальных сетях.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4 d-block d-md-none d-xl-block">
                                        <div class="d-flex border rounded shadow--hover p-3">
                                            <img src="{{ Vite::asset('resources/assets/img/user-7.jpg')}}" alt="" width="60" height="60" class="image-60x60 rounded">
                                            <div class="__body ms-3">
                                                <div class="d-flex align-items-center fs-16 fw-medium">
                                                    Митя
                                                    <i class="fa-brands fa-instagram ms-auto"></i>
                                                </div>
                                                <p class="text-muted mb-2">Блогер</p>
                                                <p class="mb-0">Проблем по сей день не возникало. Вся структура понятна. Удобные выплаты. Рекомендую попробовать!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselRev" data-bs-slide="prev">
                            <i class="fa-solid fa-angle-left"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselRev" data-bs-slide="next">
                            <i class="fa-solid fa-angle-right"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-app-layout>
