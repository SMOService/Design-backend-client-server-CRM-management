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
                    <div class="ucard">
                        <div class="heading fs-16 fw-medium">
                            <i class="fa-regular fa-newspaper me-2"></i> Последние новости
                        </div>
                        <div class="ucard__body p-4">
                            <!--Item-->
                            <div class="news-item d-block d-md-flex pb-4 mb-4 border-bottom">
                                <img loading="lazy" src="{{ Vite::asset('resources/assets/img/news/news-1.jpeg')}}" alt="Объявляем о запуске более удобной формы оплаты для наших клиентов" title="Объявляем о запуске более удобной формы оплаты для наших клиентов" class="img-fluid news-item__image">
                                <div class="news-item__body ms-0 ms-md-4 mt-3 mt-md-0">
                                    <h4 class="fs-18 mb-3">
                                        Объявляем о запуске более удобной формы оплаты для наших клиентов
                                    </h4>
                                    <p>
                                        Оплачивайте услуги быстрее и удобнее с новым эквайрингом. Отныне оплата проходит максимально быстро, а пользователь не сталкивается со сложностями на нашем сайте
                                    </p>
                                    <div class="text-end">
                                        <a href="{{ route('news.item') }}" class="fw-medium color-orange">
                                            Читать далее <i class="fal fa-angle-right ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--Item-->
                            <div class="news-item d-block d-md-flex pb-4 mb-4 border-bottom">
                                <img loading="lazy" src="{{ Vite::asset('resources/assets/img/news/news-2.jpeg')}}" alt="Объявляем о запуске более удобной формы оплаты для наших клиентов" title="Объявляем о запуске более удобной формы оплаты для наших клиентов" class="img-fluid news-item__image">
                                <div class="news-item__body ms-0 ms-md-4 mt-3 mt-md-0">
                                    <h4 class="fs-18 mb-3">
                                        Новогоднее обновление в 2020 году. SMM инструменты и SEO услуги
                                    </h4>
                                    <p>
                                        В преддверии Нового года команда СМОСЕРВИС готова презентовать новинки, которые мы подготовили для наших клиентов. Благодаря их внедрению функционал сервиса, набор инструментов для продвижения в социальных сетях и на других площадках усовершенствовался.
                                    </p>
                                    <div class="text-end">
                                        <a href="{{ route('news.item') }}" class="fw-medium color-orange">
                                            Читать далее <i class="fal fa-angle-right ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--Item-->
                            <div class="news-item d-block d-md-flex pb-4 mb-4 border-bottom">
                                <img loading="lazy" src="{{ Vite::asset('resources/assets/img/news/news-3.jpeg')}}" alt="Объявляем о запуске более удобной формы оплаты для наших клиентов" title="Объявляем о запуске более удобной формы оплаты для наших клиентов" class="img-fluid news-item__image">
                                <div class="news-item__body ms-0 ms-md-4 mt-3 mt-md-0">
                                    <h4 class="fs-18 mb-3">
                                        Продвижение бизнеса в соцсетях используя искусственную нейронную сеть
                                    </h4>
                                    <p>
                                        Сегодня мы хотим анонсировать официальный сбор средств в ICO, с названием SMO Coin. Почему SMO Token и как мы влияем на продвижение
                                        в социальных сетях, и как мы планируем изменить рынок продвижения в социальных сетях с помощью искусственного интеллекта.
                                    </p>
                                    <div class="text-end">
                                        <a href="{{ route('news.item') }}" class="fw-medium color-orange">
                                            Читать далее <i class="fal fa-angle-right ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--Item-->
                            <div class="news-item d-block d-md-flex pb-4 mb-4 border-bottom">
                                <img loading="lazy" src="{{ Vite::asset('resources/assets/img/news/news-4.jpeg')}}" alt="Объявляем о запуске более удобной формы оплаты для наших клиентов" title="Объявляем о запуске более удобной формы оплаты для наших клиентов" class="img-fluid news-item__image">
                                <div class="news-item__body ms-0 ms-md-4 mt-3 mt-md-0">
                                    <h4 class="fs-18 mb-3">
                                        Предновогодние услуги, новые модули системы и пользовательские разделы
                                    </h4>
                                    <p>
                                        Новая категория услуг ТикТок сохранения и вывод в ТОП 50 iTunes. Обновлены правила и пользовательское соглашение. Новые разделы: форум,
                                        вики, социальная сеть и персональные блоги. API для всех аккаунтов. Портфолио брендов и блогеров, модуль подписок.
                                    </p>
                                    <div class="text-end">
                                        <a href="{{ route('news.item') }}" class="fw-medium color-orange">
                                            Читать далее <i class="fal fa-angle-right ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--Item-->
                            <div class="news-item d-block d-md-flex pb-4 mb-4 border-bottom">
                                <img loading="lazy" src="{{ Vite::asset('resources/assets/img/news/news-5.png')}}" alt="Объявляем о запуске более удобной формы оплаты для наших клиентов" title="Объявляем о запуске более удобной формы оплаты для наших клиентов" class="img-fluid news-item__image">
                                <div class="news-item__body ms-0 ms-md-4 mt-3 mt-md-0">
                                    <h4 class="fs-18 mb-3">
                                        Самое большое обновление в своей истории Инстаграм
                                    </h4>
                                    <p>
                                        Крупнейшее обновление Инстаграм, напрямую влияющие на лайки. Изменение скорости, изменение расценок. Обновление услуг подписки на лайки.
                                        Новые услуги по массовому просмотру чужих историй Instagram. Верификация профиля и статья в Википедии.
                                    </p>
                                    <div class="text-end">
                                        <a href="{{ route('news.item') }}" class="fw-medium color-orange">
                                            Читать далее <i class="fal fa-angle-right ms-2"></i>
                                        </a>
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
