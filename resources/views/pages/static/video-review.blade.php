@section('meta_title', 'SMM продвижение в социальных сетях – Система раскрутки SMOService')
@section('meta_keywords', 'смосервис, накрутка, раскрутка, продвижение, смм, сервис, сайт, система, онлайн, соцсети, услуги, просмотры, подписчики, лайки, зрители, комментарии, реклама, топ, тренды')
@section('meta_description', 'Онлайн сервис продвижения и раскрутки социальных сетей. Подписчики, просмотры, комментарии и лайки в социальных сетях по низким ценам.')

<x-app-layout>

    <main class="main d-flex flex-column pt-0">
        <section class="usection uhero pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto text-center">
                        <div class="d-flex align-items-center mb-4">
                            <a href="{{ route('gb') }}" class="py-2 px-3 rounding bg-light border"><i class="fa-regular fa-angle-left me-2"></i>Отзывы</a>
                            <a href="{{ route('static.bloggers') }}" class="py-2 px-3 rounding bg-light border ms-auto">Блогеры<i class="fa-regular fa-angle-right ms-2"></i></a>
                        </div>
                        <h1 class="fw-bolder fs-32 mb-3">
                            <span class="d-block">Видео отзывы</span>
                            Про систему СМОСервис
                        </h1>
                        <p class="fs-18 mb-2">Первый сервис по продвижению в социальных сетях!</p>
                        <p class="mb-4">На данной странице представлены видео отзывы <br> от людей пользующихся нашим сайтом.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#SendVideoReview">
                            Поделиться своим видео отзывом
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="usection z-index-1 mt--50 mb-3 mb-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-mg-6 col-lg-4 mb-4">
                        <a href="#!" class="ucard ucard-video d-block" data-src="https://www.youtube.com/embed/iU4YerXVmuA" data-bs-toggle="modal" data-bs-target="#videoModal">
                            <div class="p-4 fw-medium text-center text-uppercase">Блогер</div>
                            <img src="https://img.youtube.com/vi/iU4YerXVmuA/maxresdefault.jpg" alt="" class="ucard-video__image img-fluid">
                        </a>
                    </div>
                    <div class="col-mg-6 col-lg-4 mb-4">
                        <a href="#!" class="ucard ucard-video d-block" data-src="https://www.youtube.com/embed/oiGUKIQFvgQ" data-bs-toggle="modal" data-bs-target="#videoModal">
                            <div class="p-4 fw-medium text-center text-uppercase">Предприниматель</div>
                            <img src="https://img.youtube.com/vi/oiGUKIQFvgQ/maxresdefault.jpg" alt="" class="ucard-video__image img-fluid">
                        </a>
                    </div>
                    <div class="col-mg-6 col-lg-4 mb-4">
                        <a href="#!" class="ucard ucard-video d-block" data-src="https://www.youtube.com/embed/s15pq0WnffA" data-bs-toggle="modal" data-bs-target="#videoModal">
                            <div class="p-4 fw-medium text-center text-uppercase">Предприниматель</div>
                            <img src="https://img.youtube.com/vi/s15pq0WnffA/maxresdefault.jpg" alt="" class="ucard-video__image img-fluid">
                        </a>
                    </div>
                    <div class="col-mg-6 col-lg-4 mb-4">
                        <a href="#!" class="ucard ucard-video d-block" data-src="https://www.youtube.com/embed/LNq8gEEfFqI" data-bs-toggle="modal" data-bs-target="#videoModal">
                            <div class="p-4 fw-medium text-center text-uppercase">Клиент</div>
                            <img src="https://img.youtube.com/vi/LNq8gEEfFqI/maxresdefault.jpg" alt="" class="ucard-video__image img-fluid">
                        </a>
                    </div>
                    <div class="col-mg-6 col-lg-4 mb-4">
                        <a href="#!" class="ucard ucard-video d-block" data-src="https://www.youtube.com/embed/Uj9GSlcOpOU" data-bs-toggle="modal" data-bs-target="#videoModal">
                            <div class="p-4 fw-medium text-center text-uppercase">Блогер</div>
                            <img src="https://img.youtube.com/vi/Uj9GSlcOpOU/maxresdefault.jpg" alt="" class="ucard-video__image img-fluid">
                        </a>
                    </div>
                    <div class="col-mg-6 col-lg-4 mb-4">
                        <a href="#!" class="ucard ucard-video d-block" data-src="https://www.youtube.com/embed/ByNs85DSU-g" data-bs-toggle="modal" data-bs-target="#videoModal">
                            <div class="p-4 fw-medium text-center text-uppercase">Музыкант</div>
                            <img src="https://img.youtube.com/vi/ByNs85DSU-g/maxresdefault.jpg" alt="" class="ucard-video__image img-fluid">
                        </a>
                    </div>
                    <div class="col-mg-6 col-lg-4 mb-4">
                        <a href="#!" class="ucard ucard-video d-block" data-src="https://www.youtube.com/embed/fj745UFA-J8" data-bs-toggle="modal" data-bs-target="#videoModal">
                            <div class="p-4 fw-medium text-center text-uppercase">Клиент</div>
                            <img src="https://img.youtube.com/vi/fj745UFA-J8/maxresdefault.jpg" alt="" class="ucard-video__image img-fluid">
                        </a>
                    </div>
                    <div class="col-mg-6 col-lg-4 mb-4">
                        <a href="#!" class="ucard ucard-video d-block" data-src="https://www.youtube.com/embed/EOgOgjFrY0o" data-bs-toggle="modal" data-bs-target="#videoModal">
                            <div class="p-4 fw-medium text-center text-uppercase">Пользователь</div>
                            <img src="https://img.youtube.com/vi/EOgOgjFrY0o/maxresdefault.jpg" alt="" class="ucard-video__image img-fluid">
                        </a>
                    </div>
                    <div class="col-mg-6 col-lg-4 mb-4">
                        <a href="#!" class="ucard ucard-video d-block" data-src="https://www.youtube.com/embed/Q6Nm83DOu_4" data-bs-toggle="modal" data-bs-target="#videoModal">
                            <div class="p-4 fw-medium text-center text-uppercase">Блогер</div>
                            <img src="https://img.youtube.com/vi/Q6Nm83DOu_4/maxresdefault.jpg" alt="" class="ucard-video__image img-fluid">
                        </a>
                    </div>
                    <div class="col-mg-6 col-lg-4 mb-4">
                        <a href="#!" class="ucard ucard-video d-block" data-src="https://www.youtube.com/embed/_wZkwIH-Gec" data-bs-toggle="modal" data-bs-target="#videoModal">
                            <div class="p-4 fw-medium text-center text-uppercase">Шоумен</div>
                            <img src="https://img.youtube.com/vi/_wZkwIH-Gec/maxresdefault.jpg" alt="" class="ucard-video__image img-fluid">
                        </a>
                    </div>
                    <div class="col-mg-6 col-lg-4 mb-4">
                        <a href="#!" class="ucard ucard-video d-block" data-src="https://www.youtube.com/embed/S_i_Sl0JuBU" data-bs-toggle="modal" data-bs-target="#videoModal">
                            <div class="p-4 fw-medium text-center text-uppercase">Партнёр</div>
                            <img src="https://img.youtube.com/vi/S_i_Sl0JuBU/maxresdefault.jpg" alt="" class="ucard-video__image img-fluid">
                        </a>
                    </div>
                    <div class="col-mg-6 col-lg-4 mb-4">
                        <a href="#!" class="ucard ucard-video d-block" data-src="https://www.youtube.com/embed/ZIg9RSNrN3Q" data-bs-toggle="modal" data-bs-target="#videoModal">
                            <div class="p-4 fw-medium text-center text-uppercase">Блогер</div>
                            <img src="https://img.youtube.com/vi/ZIg9RSNrN3Q/maxresdefault.jpg" alt="" class="ucard-video__image img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="usection mb-3 mb-sm-5">
            <div class="container">
                <div class="ucard px-3 px-sm-5 py-5">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-2 order-lg-1">
                            <div class="fs-16 color-orange mb-1">Текстовые отзывы</div>
                            <h2 class="usection-title mb-3">Комментарии клиентов</h2>
                            <p class="uhero-text fs-18 mb-4">Мы ценим мнение каждого пользователя!</p>
                            <p class="mb-5">
                                Вы можете ознакомиться с комментариями от реальных пользователей платформы и специалистов в области СММ, которые использовали наш сайт для продвижения своих проектов. Ниже перечислены несколько крупных источников с мнениями о деятельности нашей компании:
                            </p>
                            <a href="https://web-ratings.ru/site/smoservice.media" rel="nofollow" class="me-4" target="_blank">
                                <i class="fa-light fa-link me-2"></i>Web-Ratings.ru
                            </a>
                            <a href="https://sites.reviews/otzyvy/site/smoservice.media/?id=749981" rel="nofollow" target="_blank">
                                <i class="fa-light fa-link me-2"></i>Sites.Reviews
                            </a>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center mb-5 mb-lg-0">
                            <picture>
                                <source srcset="/assets/img/feedback.webp" type="image/webp">
                                <img alt="Раскрутка в соцсетях под ключ" class="img-fluid usection-img" loading="lazy" src="/assets/img/feedback.png" width="394" height="298">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-app-layout>
