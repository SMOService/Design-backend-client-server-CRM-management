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
                            <a href="{{ route('static.video-review') }}" class="py-2 px-3 rounding bg-light border ms-auto">Видео отзывы<i class="fa-regular fa-angle-right ms-2"></i></a>
                        </div>
                        <h1 class="fw-bolder fs-32 mb-3">
                            <span class="d-block">Блогеры</span>
                            Вместе с SmoService
                        </h1>
                        <p class="fs-18 mb-2">Сервис №1 по продвижению в соцсетях</p>
                        <p class="mb-0">На данной странице представлен список блогеров, с которыми <br> мы продолжительное время тесно сотрудничаем.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="usection z-index-1 mt--30 mb-3 mb-sm-5">
            <div class="container">
                <ul class="nav nav-pills nav-pills-bloggers row mb-5" id="pills-tab" role="tablist">
                    <li class="nav-item col-sm-6  text-center" role="presentation">
                        <button class="btn btn-xl w-100 shadow-md active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-youtube" type="button" role="tab" aria-controls="pills-youtube" aria-selected="true">Ютуб</button>
                    </li>
                    <li class="nav-item col-sm-6  text-center" role="presentation">
                        <button class="btn btn-xl w-100 shadow-md" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-instagram" type="button" role="tab" aria-controls="pills-instagram" aria-selected="false">Интсаграм</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-youtube" role="tabpanel" aria-labelledby="pills-youtube-tab" tabindex="0">
                        <div class="row mb-5">
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="ucard shadow--unhover d-block">
                                    <div class="p-4 fw-medium text-center text-uppercase">АЛЕКСЕЙ ЗЕМСКОВ</div>
                                    <img src="{{ Vite::asset('resources/assets/img/bloggers/zemkov.jpeg')}}" alt="АЛЕКСЕЙ ЗЕМСКОВ" class="ucard-video__image img-fluid" width="40" height="40">
                                    <div class="d-flex align-items-center justify-content-center p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/yotube-icon.svg')}}" alt="Ютуб" width="40" height="40">
                                        <div class="ms-3">
                                            <p class="mb-0 fs-16 fw-medium">1 000 000+</p>
                                            <p class="mb-0">подписчиков</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="ucard shadow--unhover d-block">
                                    <div class="p-4 fw-medium text-center text-uppercase">ТРАНСФОРМАТОР</div>
                                    <img src="{{ Vite::asset('resources/assets/img/bloggers/trans.png')}}" alt="ТРАНСФОРМАТОР" class="ucard-video__image img-fluid" width="40" height="40">
                                    <div class="d-flex align-items-center justify-content-center p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/yotube-icon.svg')}}" alt="Ютуб" width="40" height="40">
                                        <div class="ms-3">
                                            <p class="mb-0 fs-16 fw-medium">1 510 000+</p>
                                            <p class="mb-0">подписчиков</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="ucard shadow--unhover d-block">
                                    <div class="p-4 fw-medium text-center text-uppercase">KUPLINOV ► PLAY</div>
                                    <img src="{{ Vite::asset('resources/assets/img/bloggers/kuplinov.png')}}" alt="KUPLINOV ► PLAY" class="ucard-video__image img-fluid" width="40" height="40">
                                    <div class="d-flex align-items-center justify-content-center p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/yotube-icon.svg')}}" alt="Ютуб" width="40" height="40">
                                        <div class="ms-3">
                                            <p class="mb-0 fs-16 fw-medium">7 600 000+</p>
                                            <p class="mb-0">подписчиков</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="ucard shadow--unhover d-block">
                                    <div class="p-4 fw-medium text-center text-uppercase">MRLOLOLOSHKA</div>
                                    <img src="{{ Vite::asset('resources/assets/img/bloggers/mrlolo.png')}}" alt="MRLOLOLOSHKA" class="ucard-video__image img-fluid" width="40" height="40">
                                    <div class="d-flex align-items-center justify-content-center p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/yotube-icon.svg')}}" alt="Ютуб" width="40" height="40">
                                        <div class="ms-3">
                                            <p class="mb-0 fs-16 fw-medium">6 590 000+</p>
                                            <p class="mb-0">подписчиков</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="ucard shadow--unhover d-block">
                                    <div class="p-4 fw-medium text-center text-uppercase">HIMAN</div>
                                    <img src="{{ Vite::asset('resources/assets/img/bloggers/himan.png')}}" alt="HIMAN" class="ucard-video__image img-fluid" width="40" height="40">
                                    <div class="d-flex align-items-center justify-content-center p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/yotube-icon.svg')}}" alt="Ютуб" width="40" height="40">
                                        <div class="ms-3">
                                            <p class="mb-0 fs-16 fw-medium">11 000 000+</p>
                                            <p class="mb-0">подписчиков</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="ucard shadow--unhover d-block">
                                    <div class="p-4 fw-medium text-center text-uppercase">ГУСЕЙН ГАСАНОВ</div>
                                    <img src="{{ Vite::asset('resources/assets/img/bloggers/gusein.jpeg')}}" alt="ГУСЕЙН ГАСАНОВ" class="ucard-video__image img-fluid" width="40" height="40">
                                    <div class="d-flex align-items-center justify-content-center p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/yotube-icon.svg')}}" alt="Ютуб" width="40" height="40">
                                        <div class="ms-3">
                                            <p class="mb-0 fs-16 fw-medium">1 280 000+</p>
                                            <p class="mb-0">подписчиков</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="ucard shadow--unhover d-block">
                                    <div class="p-4 fw-medium text-center text-uppercase">LIZZZTV</div>
                                    <img src="{{ Vite::asset('resources/assets/img/bloggers/lizz.jpeg')}}" alt="LIZZZTV" class="ucard-video__image img-fluid" width="40" height="40">
                                    <div class="d-flex align-items-center justify-content-center p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/yotube-icon.svg')}}" alt="Ютуб" width="40" height="40">
                                        <div class="ms-3">
                                            <p class="mb-0 fs-16 fw-medium">2 670 000+</p>
                                            <p class="mb-0">подписчиков</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="ucard shadow--unhover d-block">
                                    <div class="p-4 fw-medium text-center text-uppercase">КОСТЯ ПАВЛОВ</div>
                                    <img src="{{ Vite::asset('resources/assets/img/bloggers/pavlov.jpeg')}}" alt="КОСТЯ ПАВЛОВ" class="ucard-video__image img-fluid" width="40" height="40">
                                    <div class="d-flex align-items-center justify-content-center p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/yotube-icon.svg')}}" alt="Ютуб" width="40" height="40">
                                        <div class="ms-3">
                                            <p class="mb-0 fs-16 fw-medium">1 960 000+</p>
                                            <p class="mb-0">подписчиков</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="ucard shadow--unhover d-block">
                                    <div class="p-4 fw-medium text-center text-uppercase">ДИМА МАСЛЕННИКОВ</div>
                                    <img src="{{ Vite::asset('resources/assets/img/bloggers/masl.jpeg')}}" alt="ДИМА МАСЛЕННИКОВ" class="ucard-video__image img-fluid" width="40" height="40">
                                    <div class="d-flex align-items-center justify-content-center p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/yotube-icon.svg')}}" alt="Ютуб" width="40" height="40">
                                        <div class="ms-3">
                                            <p class="mb-0 fs-16 fw-medium">6 400 000+</p>
                                            <p class="mb-0">подписчиков</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="ucard shadow--unhover d-block">
                                    <div class="p-4 fw-medium text-center text-uppercase">ЛИЗА АНОХИНА</div>
                                    <img src="{{ Vite::asset('resources/assets/img/bloggers/anihina.jpeg')}}" alt="ЛИЗА АНОХИНА" class="ucard-video__image img-fluid" width="40" height="40">
                                    <div class="d-flex align-items-center justify-content-center p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/yotube-icon.svg')}}" alt="Ютуб" width="40" height="40">
                                        <div class="ms-3">
                                            <p class="mb-0 fs-16 fw-medium">936 000+</p>
                                            <p class="mb-0">подписчиков</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-danger mx-auto text-center mb-5" style="max-width: 300px;">Больше нет записей</div>
                        <div class="mt-5 text-center show-more">
                            <button class="btn btn-dark"> Показать ещё </button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-instagram" role="tabpanel" aria-labelledby="pills-instagram-tab" tabindex="0">
                        <div class="row mb-5">
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="ucard shadow--unhover d-block">
                                    <div class="p-4 fw-medium text-center text-uppercase">АНДРЕЙ СКОРОМНЫЙ</div>
                                    <img src="{{ Vite::asset('resources/assets/img/bloggers/skromny.jpeg')}}" alt="АНДРЕЙ СКОРОМНЫЙ" class="ucard-video__image img-fluid" width="40" height="40">
                                    <div class="d-flex align-items-center justify-content-center p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/insta-icon.svg')}}" alt="Ютуб" width="40" height="40">
                                        <div class="ms-3">
                                            <p class="mb-0 fs-16 fw-medium">1 780 000+</p>
                                            <p class="mb-0">подписчиков</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="ucard shadow--unhover d-block">
                                    <div class="p-4 fw-medium text-center text-uppercase">АЛЕКСЕЙ ЗЕМСКОВ</div>
                                    <img src="{{ Vite::asset('resources/assets/img/bloggers/zemkov.jpeg')}}" alt="АЛЕКСЕЙ ЗЕМСКОВ" class="ucard-video__image img-fluid" width="40" height="40">
                                    <div class="d-flex align-items-center justify-content-center p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/insta-icon.svg')}}" alt="Ютуб" width="40" height="40">
                                        <div class="ms-3">
                                            <p class="mb-0 fs-16 fw-medium">1 000 000+</p>
                                            <p class="mb-0">подписчиков</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="ucard shadow--unhover d-block">
                                    <div class="p-4 fw-medium text-center text-uppercase">ДМИТРИЙ КУЛИКОВ</div>
                                    <img src="{{ Vite::asset('resources/assets/img/bloggers/kulikov.jpeg')}}" alt="ДМИТРИЙ КУЛИКОВ" class="ucard-video__image img-fluid" width="40" height="40">
                                    <div class="d-flex align-items-center justify-content-center p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/insta-icon.svg')}}" alt="Ютуб" width="40" height="40">
                                        <div class="ms-3">
                                            <p class="mb-0 fs-16 fw-medium">1 780 000+</p>
                                            <p class="mb-0">подписчиков</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="ucard shadow--unhover d-block">
                                    <div class="p-4 fw-medium text-center text-uppercase">LIZZZTV</div>
                                    <img src="{{ Vite::asset('resources/assets/img/bloggers/lizz.jpeg')}}" alt="LIZZZTV" class="ucard-video__image img-fluid" width="40" height="40">
                                    <div class="d-flex align-items-center justify-content-center p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/insta-icon.svg')}}" alt="Ютуб" width="40" height="40">
                                        <div class="ms-3">
                                            <p class="mb-0 fs-16 fw-medium">2 670 000+</p>
                                            <p class="mb-0">подписчиков</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="ucard shadow--unhover d-block">
                                    <div class="p-4 fw-medium text-center text-uppercase">КОСТЯ ПАВЛОВ</div>
                                    <img src="{{ Vite::asset('resources/assets/img/bloggers/pavlov.jpeg')}}" alt="КОСТЯ ПАВЛОВ" class="ucard-video__image img-fluid" width="40" height="40">
                                    <div class="d-flex align-items-center justify-content-center p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/insta-icon.svg')}}" alt="Ютуб" width="40" height="40">
                                        <div class="ms-3">
                                            <p class="mb-0 fs-16 fw-medium">1 960 000+</p>
                                            <p class="mb-0">подписчиков</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="ucard shadow--unhover d-block">
                                    <div class="p-4 fw-medium text-center text-uppercase">ДИМА МАСЛЕННИКОВ</div>
                                    <img src="{{ Vite::asset('resources/assets/img/bloggers/masl.jpeg')}}" alt="ДИМА МАСЛЕННИКОВ" class="ucard-video__image img-fluid" width="40" height="40">
                                    <div class="d-flex align-items-center justify-content-center p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/insta-icon.svg')}}" alt="Ютуб" width="40" height="40">
                                        <div class="ms-3">
                                            <p class="mb-0 fs-16 fw-medium">6 400 000+</p>
                                            <p class="mb-0">подписчиков</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="ucard shadow--unhover d-block">
                                    <div class="p-4 fw-medium text-center text-uppercase">ЛИЗА АНОХИНА</div>
                                    <img src="{{ Vite::asset('resources/assets/img/bloggers/anihina.jpeg')}}" alt="ЛИЗА АНОХИНА" class="ucard-video__image img-fluid" width="40" height="40">
                                    <div class="d-flex align-items-center justify-content-center p-4">
                                        <img src="{{ Vite::asset('resources/assets/img/insta-icon.svg')}}" alt="Ютуб" width="40" height="40">
                                        <div class="ms-3">
                                            <p class="mb-0 fs-16 fw-medium">936 000+</p>
                                            <p class="mb-0">подписчиков</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-danger mx-auto text-center mb-5" style="max-width: 300px;">Больше нет записей</div>
                        <div class="mt-5 text-center show-more">
                            <button class="btn btn-dark"> Показать ещё </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-app-layout>
