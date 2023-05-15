@section('meta_title', 'SMM продвижение в социальных сетях – Система раскрутки SMOService')
@section('meta_keywords', 'смосервис, накрутка, раскрутка, продвижение, смм, сервис, сайт, система, онлайн, соцсети, услуги, просмотры, подписчики, лайки, зрители, комментарии, реклама, топ, тренды')
@section('meta_description', 'Онлайн сервис продвижения и раскрутки социальных сетей. Подписчики, просмотры, комментарии и лайки в социальных сетях по низким ценам.')

<x-app-layout>

    <main class="main d-flex flex-column pt-0">
        <section class="usection uhero pt-4">
            <div class="container">
                <div class="d-flex align-items-center mb-4">
                    <a href="{{ route('static.tools.index') }}" class="py-2 px-3 rounding bg-light border"><i class="fa-regular fa-angle-left me-2"></i>СММ инструменты</a>
                </div>
                <div class="ucard px-3 px-sm-5 py-5">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h1 class="fs-42 fw-bolder mb-3">
                                Предложить идею
                            </h1>
                            <p class="uhero-text fs-18 fw-medium mb-2">
                                Сделаем платформу лучше вместе!
                            </p>
                            <p class="mb-4 pb-2">
                                Предложи идею, уже сегодня! Авторам самых крутых идей, подробно расписанных мы вознаградим финансово. Предложи свою самую интересную идею, и если замысел нам понравится, мы воплотим эту идею в жизнь!
                            </p>
                            <div class="alert alert-danger mb-0" style="display: block;">Авторизуйтесь, чтобы добавить идею</div>
                            <!--div class="d-block d-lg-flex">
                               <a href="/ways-of-earning.php" class="btn btn-lg btn-primary d-block me-0 me-lg-3">
                               Способы заработка
                               </a>
                               </div-->
                        </div>
                        <div class="col-lg-6 uhero-image d-none d-lg-block">
                            <picture>
                                <source srcset="{{ Vite::asset('resources/assets/img/idea1.webp')}}" type="image/webp">
                                <img alt="SMM продвижение в соцсетях" class="img-fluid usection-img p-4" loading="lazy" src="{{ Vite::asset('resources/assets/img/idea1.webp')}}" width="540" height="400">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="usection mt--30 mb-3 mb-sm-4">
            <div class="container">
                <div class="ucard idea-nav d-flex flex-wrap justify-content-center fs-16">
                    <a href="#!" class="fw-medium p-2 p-md-3 d-block link-active">
                        Новые
                    </a>
                    <a href="#!" class="fw-medium p-2 p-md-3 d-block">
                        Популярные
                    </a>
                    <a href="#!" class="fw-medium p-2 p-md-3 d-block">
                        Реализованные
                    </a>
                    <div class="p-2 p-md-3 ms-auto d-none d-md-block">
                        <i class="fa-light fa-lightbulb-on fs-24"></i>
                    </div>
                </div>
            </div>
        </section>
        <section class="usection">
            <div class="container">

                <!-- Idea Card -->
                <div class="ucard shadow--unhover p-3 p-md-4 mb-4">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="d-flex flex-wrap align-items-center mb-4">
                                <div class="d-flex align-items-center justify-content-center bg-light image-60x60 rounded me-3">
                                    <i class="fal fa-user fs-30"></i>
                                </div>
                                <h4 class="fs-20 fw-medium mb-0">Uliya S</h4>
                                <time class="ms-auto text-muted">09.09.2022 04:02</time>
                            </div>
                            <h5 class="fs-18 mb-2">Несколько доработок</h5>
                            <p class="mb-0 pe-0 pe-lg-5">
                                Во-первых, чтобы не было споров об оформлении, на мой взгляд можно добавить возможность переключения тем. Мне например по душе темная тема,
                                а кому-то светлая. Второй момент, после регистрации не хватает тура по сайту с подсказками, хотя бы для первичного ознакомления.
                            </p>
                        </div>
                        <div class="col-md-3 col-lg-2 d-flex d-md-block ms-sm-auto idea-vote text-center mt-4 mt-md-0">
                            <a href="#!" class="d-block vote_idea d-block" data-type="1" data-id="2899221">
                                <i class="fa-light fa-thumbs-up fs-30 mb-3"></i>
                                <p class="mb-2">Хорошая идея</p>
                                <div class="idea-vote__num fs-20 fw-medium">1</div>
                            </a>
                            <hr class="d-none d-md-block">
                            <a href="#!" class="d-block vote_idea d-block ms-auto"  data-type="0" data-id="2899221">
                                <i class="fa-light fa-thumbs-down fs-30 mb-3"></i>
                                <p class="mb-2">Плохая идея</p>
                                <div class="idea-vote__num fs-20 fw-medium">0</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Idea Card -->
                <div class="ucard shadow--unhover p-3 p-md-4 mb-4">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="d-flex flex-wrap align-items-center mb-4">
                                <div class="d-flex align-items-center justify-content-center bg-light image-60x60 rounded me-3">
                                    <i class="fal fa-user fs-30"></i>
                                </div>
                                <h4 class="fs-20 fw-medium mb-0">Uliya S</h4>
                                <time class="ms-auto text-muted">09.09.2022 04:02</time>
                            </div>
                            <h5 class="fs-18 mb-2">Несколько доработок</h5>
                            <p class="mb-0 pe-0 pe-lg-5">
                                Во-первых, чтобы не было споров об оформлении, на мой взгляд можно добавить возможность переключения тем. Мне например по душе темная тема,
                                а кому-то светлая. Второй момент, после регистрации не хватает тура по сайту с подсказками, хотя бы для первичного ознакомления.
                            </p>
                        </div>
                        <div class="col-md-3 col-lg-2 d-flex d-md-block ms-sm-auto idea-vote text-center mt-4 mt-md-0">
                            <a href="#!" class="d-block vote_idea d-block" data-type="1" data-id="2899221">
                                <i class="fa-light fa-thumbs-up fs-30 mb-3"></i>
                                <p class="mb-2">Хорошая идея</p>
                                <div class="idea-vote__num fs-20 fw-medium">1</div>
                            </a>
                            <hr class="d-none d-md-block">
                            <a href="#!" class="d-block vote_idea d-block ms-auto"  data-type="0" data-id="2899221">
                                <i class="fa-light fa-thumbs-down fs-30 mb-3"></i>
                                <p class="mb-2">Плохая идея</p>
                                <div class="idea-vote__num fs-20 fw-medium">0</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Idea Card -->
                <div class="ucard shadow--unhover p-3 p-md-4 mb-4">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="d-flex flex-wrap align-items-center mb-4">
                                <div class="d-flex align-items-center justify-content-center bg-light image-60x60 rounded me-3">
                                    <i class="fal fa-user fs-30"></i>
                                </div>
                                <h4 class="fs-20 fw-medium mb-0">Uliya S</h4>
                                <time class="ms-auto text-muted">09.09.2022 04:02</time>
                            </div>
                            <h5 class="fs-18 mb-2">Несколько доработок</h5>
                            <p class="mb-0 pe-0 pe-lg-5">
                                Во-первых, чтобы не было споров об оформлении, на мой взгляд можно добавить возможность переключения тем. Мне например по душе темная тема,
                                а кому-то светлая. Второй момент, после регистрации не хватает тура по сайту с подсказками, хотя бы для первичного ознакомления.
                            </p>
                        </div>
                        <div class="col-md-3 col-lg-2 d-flex d-md-block ms-sm-auto idea-vote text-center mt-4 mt-md-0">
                            <a href="#!" class="d-block vote_idea d-block" data-type="1" data-id="2899221">
                                <i class="fa-light fa-thumbs-up fs-30 mb-3"></i>
                                <p class="mb-2">Хорошая идея</p>
                                <div class="idea-vote__num fs-20 fw-medium">1</div>
                            </a>
                            <hr class="d-none d-md-block">
                            <a href="#!" class="d-block vote_idea d-block ms-auto"  data-type="0" data-id="2899221">
                                <i class="fa-light fa-thumbs-down fs-30 mb-3"></i>
                                <p class="mb-2">Плохая идея</p>
                                <div class="idea-vote__num fs-20 fw-medium">0</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Idea Card -->
                <div class="ucard shadow--unhover p-3 p-md-4 mb-4">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="d-flex flex-wrap align-items-center mb-4">
                                <div class="d-flex align-items-center justify-content-center bg-light image-60x60 rounded me-3">
                                    <i class="fal fa-user fs-30"></i>
                                </div>
                                <h4 class="fs-20 fw-medium mb-0">Uliya S</h4>
                                <time class="ms-auto text-muted">09.09.2022 04:02</time>
                            </div>
                            <h5 class="fs-18 mb-2">Несколько доработок</h5>
                            <p class="mb-0 pe-0 pe-lg-5">
                                Во-первых, чтобы не было споров об оформлении, на мой взгляд можно добавить возможность переключения тем. Мне например по душе темная тема,
                                а кому-то светлая. Второй момент, после регистрации не хватает тура по сайту с подсказками, хотя бы для первичного ознакомления.
                            </p>
                        </div>
                        <div class="col-md-3 col-lg-2 d-flex d-md-block ms-sm-auto idea-vote text-center mt-4 mt-md-0">
                            <a href="#!" class="d-block vote_idea d-block" data-type="1" data-id="2899221">
                                <i class="fa-light fa-thumbs-up fs-30 mb-3"></i>
                                <p class="mb-2">Хорошая идея</p>
                                <div class="idea-vote__num fs-20 fw-medium">1</div>
                            </a>
                            <hr class="d-none d-md-block">
                            <a href="#!" class="d-block vote_idea d-block ms-auto"  data-type="0" data-id="2899221">
                                <i class="fa-light fa-thumbs-down fs-30 mb-3"></i>
                                <p class="mb-2">Плохая идея</p>
                                <div class="idea-vote__num fs-20 fw-medium">0</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Idea Card -->
                <div class="ucard shadow--unhover p-3 p-md-4 mb-4">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="d-flex flex-wrap align-items-center mb-4">
                                <div class="d-flex align-items-center justify-content-center bg-light image-60x60 rounded me-3">
                                    <i class="fal fa-user fs-30"></i>
                                </div>
                                <h4 class="fs-20 fw-medium mb-0">Uliya S</h4>
                                <time class="ms-auto text-muted">09.09.2022 04:02</time>
                            </div>
                            <h5 class="fs-18 mb-2">Несколько доработок</h5>
                            <p class="mb-0 pe-0 pe-lg-5">
                                Во-первых, чтобы не было споров об оформлении, на мой взгляд можно добавить возможность переключения тем. Мне например по душе темная тема,
                                а кому-то светлая. Второй момент, после регистрации не хватает тура по сайту с подсказками, хотя бы для первичного ознакомления.
                            </p>
                        </div>
                        <div class="col-md-3 col-lg-2 d-flex d-md-block ms-sm-auto idea-vote text-center mt-4 mt-md-0">
                            <a href="#!" class="d-block vote_idea d-block" data-type="1" data-id="2899221">
                                <i class="fa-light fa-thumbs-up fs-30 mb-3"></i>
                                <p class="mb-2">Хорошая идея</p>
                                <div class="idea-vote__num fs-20 fw-medium">1</div>
                            </a>
                            <hr class="d-none d-md-block">
                            <a href="#!" class="d-block vote_idea d-block ms-auto"  data-type="0" data-id="2899221">
                                <i class="fa-light fa-thumbs-down fs-30 mb-3"></i>
                                <p class="mb-2">Плохая идея</p>
                                <div class="idea-vote__num fs-20 fw-medium">0</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <a href="#!" class="btn btn-lg btn-dark">Показать ещё</a>
                </div>
            </div>
        </section>
    </main>

</x-app-layout>
