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
                <div class="col-lg-9">
                    <div class="ucard">
                        <div class="heading fs-16 fw-medium px-4">Отзывы о сервисе</div>
                        <div class="p-4">
                            <div class="row mb-5">
                                <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
                                    <div class="d-flex flex-column border rounding shadow--hover p-4 p-sm-3 h-100">
                                        <div class="ucard__icon mb-4 fs-30" style="height:30px;">
                                            <i class="fa-light fa-users"></i>
                                        </div>
                                        <div class="ucard-title fs-16 fw-medium mb-2">
                                            <span class="color-orange d-block">Видео</span> отзывы о сервисе
                                        </div>
                                        <p class="mb-4">
                                            Видео отзывы о сервисе от наших постоянных пользователей
                                        </p>
                                        <a href="{{ route('static.video-review') }}" title="Видео отзывы пользователей" class="btn btn-sm btn-light">Смотреть отзывы</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
                                    <div class="d-flex flex-column border rounding shadow--hover p-4 p-sm-3 h-100">
                                        <div class="ucard__icon mb-4 fs-30" style="height:30px;">
                                            <i class="fa-light fa-stars"></i>
                                        </div>
                                        <div class="ucard-title fs-16 fw-medium mb-2">
                                            <span class="color-orange d-block">Блогеры</span> вместе с SmoService
                                        </div>
                                        <p class="mb-4">
                                            Блогеры с которыми мы тесно сотрудничаем.
                                        </p>
                                        <a href="{{ route('static.bloggers') }}" title="Видео отзывы пользователей" class="btn btn-sm btn-light mt-auto">Список блогеров</a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="d-flex flex-column border rounding shadow--hover p-4 p-sm-3 h-100">
                                        <div class="ucard__icon mb-4 fs-30" style="height:30px;">
                                            <i class="fa-light fa-comment-alt-lines"></i>
                                        </div>
                                        <div class="ucard-title fs-16 fw-medium mb-2">
                                            <span class="color-orange d-block">О нас пишут</span> Сайты отзывов
                                        </div>
                                        <p class="my-auto">
                                            <a href="https://web-ratings.ru/site/smoservice.media" rel="nofollow" class="d-block mb-2" target="_blank">
                                                <i class="fa-light fa-link me-2"></i>Web-Ratings.ru
                                            </a>
                                            <a href="https://sites.reviews/otzyvy/site/smoservice.media/?id=749981" rel="nofollow" target="_blank">
                                                <i class="fa-light fa-link me-2"></i>Sites.Reviews
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h1 class="fs-16 fw-medium pb-3 mb-4 border-bottom">Отзывы клиентов о проекте SMOService</h1>
                            <div class="alert alert-danger mb-4">Авторизуйтесь, чтобы оставить отзыв</div>
                            <div class="comments-list mb-4">
                                <!--item-->
                                <div class="comments__item d-flex py-4 border-bottom">
                                    <div class="comments__author--icon">
                                        K
                                    </div>
                                    <div class="comments__body ms-3 w-100"><div class="d-flex align-items-center mb-2">
                                            <div class="fs-16 fw-medium">Ксения Ляпина</div>
                                            <span class="ms-auto color-yellow">
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               				</span>
                                        </div>
                                        <p class="mb-0 pe-0 me-0 pe-md-5 me-md-5 ">
                                            Отличный сервис по продвижению социальных сетей, пользуюсь уже не первый раз, полностью довольна. Занималась раскруткой ютуба
                                            и инстаграма, приход подписчиков хороший. Быстро и цены приемлемые
                                        </p>
                                    </div>
                                </div>
                                <!--item-->
                                <div class="comments__item d-flex py-4 border-bottom">
                                    <div class="comments__author--icon">
                                        И
                                    </div>
                                    <div class="comments__body ms-3 w-100"><div class="d-flex align-items-center mb-2">
                                            <div class="fs-16 fw-medium">Ирина</div>
                                            <span class="ms-auto color-yellow">
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               				</span>
                                        </div>
                                        <p class="mb-0 pe-0 me-0 pe-md-5 me-md-5 ">
                                            Стоит задача раскрутить страницу. Пока все выполняется в соответствии с поставленной задачей.
                                        </p>
                                    </div>
                                </div>
                                <!--item-->
                                <div class="comments__item d-flex py-4 border-bottom">
                                    <div class="comments__author--icon">
                                        A
                                    </div>
                                    <div class="comments__body ms-3 w-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="fs-16 fw-medium">Aleksandrgalkin@Gmail.Com</div>
                                            <span class="ms-auto color-yellow">
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               				</span>
                                        </div>
                                        <p class="mb-0 pe-0 me-0 pe-md-5 me-md-5 ">
                                            Все четко по всем проектам. Рекомендую
                                        </p>
                                    </div>
                                </div>
                                <!--item-->
                                <div class="comments__item d-flex py-4 border-bottom">
                                    <div class="comments__author--icon">
                                        Е
                                    </div>
                                    <div class="comments__body ms-3 w-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="fs-16 fw-medium">Екатерина Залешина</div>
                                            <span class="ms-auto color-yellow">
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               				</span>
                                        </div>
                                        <p class="mb-0 pe-0 me-0 pe-md-5 me-md-5 ">
                                            Не все складывалось! Пришлось переписываться с тех поддержкой НО! такие ситуации показательны; можно действительно понять
                                            на сколько серьезный подход и уровень у компании. Вопрос решился! Однозначно буду пользоваться сервисом!
                                        </p>
                                    </div>
                                </div>
                                <!--item-->
                                <div class="comments__item d-flex py-4 border-bottom">
                                    <div class="comments__author--icon">
                                        Е
                                    </div>
                                    <div class="comments__body ms-3 w-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="fs-16 fw-medium">Егор Ковалёв</div>
                                            <span class="ms-auto color-yellow">
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               				</span>
                                        </div>
                                        <p class="mb-0 pe-0 me-0 pe-md-5 me-md-5 ">
                                            Классно и очень ркруто)) ВСЕ РАБОТАЕТ
                                        </p>
                                    </div>
                                </div>
                                <!--item-->
                                <div class="comments__item d-flex py-4 border-bottom">
                                    <div class="comments__author--icon">
                                        V
                                    </div>
                                    <div class="comments__body ms-3 w-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="fs-16 fw-medium">VALYA Grinevskaya</div>
                                            <span class="ms-auto color-yellow">
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               				</span>
                                        </div>
                                        <p class="mb-0 pe-0 me-0 pe-md-5 me-md-5 ">
                                            For a long time I was looking for a good service for promoting my pages. And cheers! Found this site! Everything went easily
                                            and quickly, most importantly, the prices are adequate. The service is convenient. Now, only I will contact you
                                        </p>
                                    </div>
                                </div>
                                <!--item-->
                                <div class="comments__item d-flex py-4 border-bottom">
                                    <div class="comments__author--icon">
                                        B
                                    </div>
                                    <div class="comments__body ms-3 w-100"><div class="d-flex align-items-center mb-2">
                                            <div class="fs-16 fw-medium">Bboymaxstg92</div>
                                            <span class="ms-auto color-yellow">
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               				</span>
                                        </div>
                                        <p class="mb-0 pe-0 me-0 pe-md-5 me-md-5 ">
                                            Заказал услугу для одноклассников "УЧАСТНИКИ В ГРУППУ (АКТИВНЫЕ - ОФФЕРЫ)". Подписчики вроде качественные. Раньше покупал услугу раскрутки
                                            на smmlaba но теперь думаю буду обращаться только к Вам. Служба поддержки более ответственная и адекватная и всегда решит проблему
                                            с заказом. Стоит всего лишь обратится)))
                                        </p>
                                    </div>
                                </div>
                                <!--item-->
                                <div class="comments__item d-flex py-4 border-bottom">
                                    <div class="comments__author--icon">
                                        Ж
                                    </div>
                                    <div class="comments__body ms-3 w-100"><div class="d-flex align-items-center mb-2">
                                            <div class="fs-16 fw-medium">Женя Владимиров</div>
                                            <span class="ms-auto color-yellow">
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               				</span>
                                        </div>
                                        <p class="mb-0 pe-0 me-0 pe-md-5 me-md-5 ">
                                            Thanks for the efficient work. Promotion looks natural, attracting real people, users actively like and comment. I will use again.
                                        </p>
                                    </div>
                                </div>
                                <!--item-->
                                <div class="comments__item d-flex py-4 border-bottom">
                                    <div class="comments__author--icon">
                                        P
                                    </div>
                                    <div class="comments__body ms-3 w-100"><div class="d-flex align-items-center mb-2">
                                            <div class="fs-16 fw-medium">Peri Raeva</div>
                                            <span class="ms-auto color-yellow">
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               				</span>
                                        </div>
                                        <p class="mb-0 pe-0 me-0 pe-md-5 me-md-5 ">
                                            Прекрасный и удобный сервис. Разработчики большие молодцы. Даже не хочется пробовать других сервисов.  Экономит очень много
                                            времени. Выполняют работы качественно и быстро. Пользуюсь уже больше года.Огромное спасибо Вам!
                                        </p>
                                    </div>
                                </div>
                                <!--item-->
                                <div class="comments__item d-flex py-4 border-bottom">
                                    <div class="comments__author--icon">
                                        О
                                    </div>
                                    <div class="comments__body ms-3 w-100"><div class="d-flex align-items-center mb-2">
                                            <div class="fs-16 fw-medium">Оксана Попова</div>
                                            <span class="ms-auto color-yellow">
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               					<i class="fas fa-star"></i>
               				</span>
                                        </div>
                                        <p class="mb-0 pe-0 me-0 pe-md-5 me-md-5 ">
                                            Пользуюсь данным SMM сервисом для продвижения своей странички в Инстаграмм, после подключения услуги быстро видна отдача
                                            (подписки, лайки, охват) и очень приятно, что для постоянных клиентов есть система лояльности.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="navigation">
                                <div class="navigation-pages">
                                    <span class="nav-current-page">1</span>
                                    <a href="#!">2</a>
                                    <a href="#!">3</a>
                                    <a href="#!">4</a>
                                    <a href="#!">5</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-app-layout>
