@section('meta_title', 'SMM продвижение в социальных сетях – Система раскрутки SMOService')
@section('meta_keywords', 'смосервис, накрутка, раскрутка, продвижение, смм, сервис, сайт, система, онлайн, соцсети, услуги, просмотры, подписчики, лайки, зрители, комментарии, реклама, топ, тренды')
@section('meta_description', 'Онлайн сервис продвижения и раскрутки социальных сетей. Подписчики, просмотры, комментарии и лайки в социальных сетях по низким ценам.')

<x-app-layout>

    <main class="main d-flex flex-column">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="d-flex align-items-center mb-4">
                        <a href="{{ route('support') }}p" class="py-2 px-3 rounding bg-light border"><i class="fa-regular fa-angle-left me-2"></i>Техподдержка</a>
                    </div>
                    <div class="ucard p-4">
                        <h1 class="fs-24 fw-bold mb-4">Новое обращение</h1>
                        <form action="">
                            <div class="mb-3">
                                <label for="" class="mb-2 fw-medium">Раздел</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Вопрос по действующему заказу</option>
                                    <option value="1">Пополнение внутренего баланса</option>
                                    <option value="2">Другое ...</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="" class="mb-2 fw-medium">Приоритет</label>
                                <select class="form-select mb-3" aria-label="Default select example">
                                    <option selected>Не срочно (до 36 часов)</option>
                                    <option value="9">Обычно (до 24 часов)</option>
                                    <option value="11">Важно (до 18 часов)</option>
                                    <option value="12">Срочно (до 12 часов)</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="mb-2 fw-medium">Тема</label>
                                <input type="text" class="form-control" placeholder="Тема обращения">
                            </div>
                            <div class="mb-4">
                                <label for="" class="mb-2 fw-medium">Текст обращения</label>
                                <textarea name="" id="" cols="30" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="d-block d-sm-flex align-items-center">
                                <div class="me-auto">
                                    <label for="formFile" class="btn btn-sm w-100"><i class="fa-regular fa-paperclip me-2"></i>Прикрепить файлы</label>
                                    <input class="form-control d-none" type="file" id="formFile">
                                </div>
                                <div class="mt-3 mt-sm-0">
                                    <button class="btn btn-primary w-100">Создать тикет</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-app-layout>
