@section('meta_title', 'SMM продвижение в социальных сетях – Система раскрутки SMOService')
@section('meta_keywords', 'смосервис, накрутка, раскрутка, продвижение, смм, сервис, сайт, система, онлайн, соцсети, услуги, просмотры, подписчики, лайки, зрители, комментарии, реклама, топ, тренды')
@section('meta_description', 'Онлайн сервис продвижения и раскрутки социальных сетей. Подписчики, просмотры, комментарии и лайки в социальных сетях по низким ценам.')

<x-app-layout>

    <main class="main d-flex flex-column">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="ucard h-100">
                        <div class="sticky-top z-index-1">
                            <div class="bg-light p-3 f-accordion-btn d-flex align-items-center fs-16 fw-medium" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"  aria-controls="sidebarMenu">
                                <i class="fa-solid fa-ellipsis-vertical me-2 d-none d-lg-block"></i> Навигация
                                <i class="fa-regular fa-angle-down d-block d-lg-none ms-auto"></i>
                            </div>
                            <div class="ucard__body p-3 accordion-collapse collapse collapse-mobile" id="sidebarMenu" data-bs-parent="#sidebarMenu">
                                <ul class="navbar-nav m-0 p-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#!"><i class="fa-solid fa-angle-right me-3"></i>Вконтакте</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-active" href="#!"><i class="fa-solid fa-angle-right me-3"></i>Инстаграм</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#!"><i class="fa-solid fa-angle-right me-3"></i>Одноклассники</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#!"><i class="fa-solid fa-angle-right me-3"></i>Твиттер</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#!"><i class="fa-solid fa-angle-right me-3"></i>Фейсбук</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#!"><i class="fa-solid fa-angle-right me-3"></i>Ютуб</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#!"><i class="fa-solid fa-angle-right me-3"></i>Технический</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#!"><i class="fa-solid fa-angle-right me-3"></i>Платежи</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#!"><i class="fa-solid fa-angle-right me-3"></i>Информационный</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#!"><i class="fa-solid fa-angle-right me-3"></i>Вики</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#!"><i class="fa-solid fa-angle-right me-3"></i>Партнёрская программа</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#!"><i class="fa-solid fa-angle-right me-3"></i>Api</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mx-auto">
                    <div class="ucard">
                        <div class="ucard__body">
                            <div class="px-4 py-3 border-bottom border-0 d-block d-md-flex align-items-center">
                                <nav class="me-auto fs-16">
                                    <a href="#!" class="me-3 me-sm-4 text-muted">62 Cтатьи:</a>
                                    <a href="#!" class="flex-align-center fw-medium me-3 me-sm-4 link-active">Новые</a>
                                    <a href="#!" class="flex-align-center fw-medium">Популярные</a>
                                </nav>
                                <div class="d-flex align-items-center mt-4 mt-md-0 ms-0 ms-md-auto">
                                    <form action="" class="flex-fill">
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="Поиск в базе">
                                            <button class="input-group-text border-0"><i class="fa-regular fa-magnifying-glass"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="faq__list">
                                <!--item-->
                                <a href="{{ route('faq.item') }}" class="faq__item d-block d-md-flex p-4 border-bottom">
                                    <div class="me-auto">
                                        <div class="fs-18 fw-medium mb-2">Как запустить в работу заказ, на трансляцию в Инстаграм?</div>
                                        <p class="mb-xl-0 fs-14 text-muted" style="max-width: 500px;">Начать оформление заказа, необходимо после того, как пользователь вышел в прямой эфир Инстаграм. Либо всего за 5 секунд до того, как вы выйдите в прямой эфир к своим подписчикам в Инстаграме.</p>
                                    </div>
                                    <div class="text-muted small">20.10.22 in 22:41 PM</div>
                                </a>
                                <!--item-->
                                <a href="{{ route('faq.item') }}" class="faq__item d-block d-md-flex p-4 border-bottom">
                                    <div class="me-auto">
                                        <div class="fs-18 fw-medium mb-2">Как можно на 100% защититься от списания или от бана за накрутку?</div>
                                        <p class="mb-xl-0 fs-14 text-muted" style="max-width: 500px;">Накрутка запрещена правилами. Защититься от бана на 100% или восстановить списанных подписчиков нельзя. Вы можете лишь использовать более качественные методы раскрутки и продвижения своих профилей в Инстаграм.</p>
                                    </div>
                                    <div class="text-muted small">20.10.22 in 22:41 PM</div>
                                </a>
                                <!--item-->
                                <a href="{{ route('faq.item') }}" class="faq__item d-block d-md-flex p-4 border-bottom">
                                    <div class="me-auto">
                                        <div class="fs-18 fw-medium mb-2">С какой базой вы работаете?</div>
                                        <p class="mb-xl-0 fs-14 text-muted" style="max-width: 500px;">У нас свой источник подписчиков и пользователей для выполнения задания и выполнения различных оплачиваемых действий, а так же источники с рекламных сетей, сеть сообществ с активными пользователями социальных сетей.</p>
                                    </div>
                                    <div class="text-muted small">20.10.22 in 22:41 PM</div>
                                </a>
                                <!--item-->
                                <a href="{{ route('faq.item') }}" class="faq__item d-block d-md-flex p-4 border-bottom">
                                    <div class="me-auto">
                                        <div class="fs-18 fw-medium mb-2">Как быстро выполняется заказ по Инстаграм?</div>
                                        <p class="mb-xl-0 fs-14 text-muted" style="max-width: 500px;">Заказ по увеличение числа подписчиков выполняется от пары часов до 2 дней, в зависимости от количества. Добавление лайков, сох ранений, комментариев и просмотров в Instagram выполняются обычно от нескольких минут до пары часов.</p>
                                    </div>
                                    <div class="text-muted small">20.10.22 in 22:41 PM</div>
                                </a>
                                <!--item-->
                                <a href="{{ route('faq.item') }}" class="faq__item d-block d-md-flex p-4 border-bottom">
                                    <div class="me-auto">
                                        <div class="fs-18 fw-medium mb-2">Какой средний срок выполнения заказов?</div>
                                        <p class="mb-xl-0 fs-14 text-muted" style="max-width: 500px;">Сроки выполнения заказов для каждой услуги индивидуальны, и могут варьироваться до нескольких месяцев, в зависимости от выбранного объема. В среднем заказы выполняются от 5 минут до 48 часов, в зависимости от объема заказа и выбранной услуги. Так же в редких случаях возможны задержки до 72 часов.</p>
                                    </div>
                                    <div class="text-muted small">20.10.22 in 22:41 PM</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-app-layout>
