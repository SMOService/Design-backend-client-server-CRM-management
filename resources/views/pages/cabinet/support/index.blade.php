@section('meta_title', 'SMM продвижение в социальных сетях – Система раскрутки SMOService')
@section('meta_keywords', 'смосервис, накрутка, раскрутка, продвижение, смм, сервис, сайт, система, онлайн, соцсети, услуги, просмотры, подписчики, лайки, зрители, комментарии, реклама, топ, тренды')
@section('meta_description', 'Онлайн сервис продвижения и раскрутки социальных сетей. Подписчики, просмотры, комментарии и лайки в социальных сетях по низким ценам.')

<x-app-layout>

    <main class="main d-flex flex-column">
        <div class="container">
            <div class="d-flex align-items-center mb-4">
                <a href="{{ route('personal.index') }}" class="py-2 px-3 rounding bg-light border"><i class="fa-regular fa-angle-left me-2"></i>Личный кабинет</a>
            </div>
            <div class="ucard">
                <div class="ucard-body p-4 bg-light border-bottom">
                    <div class="d-block d-md-flex align-items-center">
                        <h1 class="fs-24 fw-bold mb-3 mb-md-0 me-0 me-md-auto">Техподдержка</h1>
                        <a href="{{ route('support.create') }}" class="btn btn-primary d-block d-md-inline">Создать тикет</a>
                    </div>

                </div>
                <div class="d-block d-lg-flex align-items-center px-4 py-3">
                    <nav class="nav fs-16">
                        <a href="#!" class="flex-fill btn btn-sm btn-dark border m-2">Все</a>
                        <a href="#!" class="flex-fill btn btn-sm btn-light border m-2">Активные</a>
                        <a href="#!" class="flex-fill btn btn-sm btn-light border m-2">Ожидает ответа</a>
                        <a href="#!" class="flex-fill btn btn-sm btn-light border m-2">Закрытые</a>
                    </nav>
                    <form action="" class="ms-auto mt-3 mt-lg-0" data-bs-toggle="tooltip" data-bs-title="Тикет ID, заголовок или текст сообщения">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Поиск по тикетам">
                            <button class="input-group-text border-0"><i class="fa-regular fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
                <div class="tick__list">
                    <!--item-->
                    <a href="{{ route('support.item') }}" class="tick__item">
                        <div class="fs-24 text-muted me-3"><i class="fa-regular fa-message-lines"></i></div>
                        <div class="tick__name me-auto">Не грузит страницу оплаты</div>
                        <div class="tick__date me-5 small text-muted">20.10.22 in 22:41 PM</div>
                        <div class="tick__status bg-light">Ожидает ответа</div>
                        <button class="btn btn-collapse p-0 ms-5"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    </a>
                    <!--item-->
                    <a href="{{ route('support.item') }}" class="tick__item">
                        <div class="fs-24 color-yellow me-3"><i class="fa-regular fa-message-lines"></i></div>
                        <div class="tick__name me-auto">Не могу оформить подписку</div>
                        <div class="tick__date me-5 small text-muted">20.10.22 in 22:41 PM</div>
                        <div class="tick__status bg-soft-yellow">Открыт</div>
                        <button class="btn btn-collapse p-0 ms-5"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    </a>
                    <!--item-->
                    <a href="{{ route('support.item') }}" class="tick__item">
                        <div class="fs-24 color-green me-3"><i class="fa-regular fa-message-check"></i></div>
                        <div class="tick__name me-auto">Не работает оплата картой Visa</div>
                        <div class="tick__date me-5 small text-muted">20.10.22 in 22:41 PM</div>
                        <div class="tick__status bg-soft-green">Закрыт</div>
                        <button class="btn btn-collapse p-0 ms-5"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    </a>
                    <!--item-->
                    <a href="{{ route('support.item') }}" class="tick__item">
                        <div class="fs-24 color-green me-3"><i class="fa-regular fa-message-check"></i></div>
                        <div class="tick__name me-auto">Не могу понять как оформить пописку</div>
                        <div class="tick__date me-5 small text-muted">20.10.22 in 22:41 PM</div>
                        <div class="tick__status bg-soft-green">Закрыт</div>
                        <button class="btn btn-collapse p-0 ms-5"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    </a>
                    <!--item-->
                    <a href="{{ route('support.item') }}" class="tick__item">
                        <div class="fs-24 color-green me-3"><i class="fa-regular fa-message-check"></i></div>
                        <div class="tick__name me-auto">Заказ завис со статусом "В обработке"</div>
                        <div class="tick__date me-5 small text-muted">20.10.22 in 22:41 PM</div>
                        <div class="tick__status bg-soft-green">Закрыт</div>
                        <button class="btn btn-collapse p-0 ms-5"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    </a>
                    <!--item-->
                    <a href="{{ route('support.item') }}" class="tick__item">
                        <div class="fs-24 color-green me-3"><i class="fa-regular fa-message-check"></i></div>
                        <div class="tick__name me-auto">Не грузит страницу оплаты</div>
                        <div class="tick__date me-5 small text-muted">20.10.22 in 22:41 PM</div>
                        <div class="tick__status bg-soft-green">Закрыт</div>
                        <button class="btn btn-collapse p-0 ms-5"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    </a>
                </div>
                <div class="navigation p-5">
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
    </main>

</x-app-layout>
