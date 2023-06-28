@section('meta_title', 'SMM продвижение в социальных сетях – Система раскрутки SMOService')
@section('meta_keywords', 'смосервис, накрутка, раскрутка, продвижение, смм, сервис, сайт, система, онлайн, соцсети, услуги, просмотры, подписчики, лайки, зрители, комментарии, реклама, топ, тренды')
@section('meta_description', 'Онлайн сервис продвижения и раскрутки социальных сетей. Подписчики, просмотры, комментарии и лайки в социальных сетях по низким ценам.')

<x-app-layout>
    <main class="main d-flex flex-column">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <div class="d-flex align-items-center mb-4">
                        <a href="{{ route('personal.index') }}" class="py-2 px-3 rounding bg-light border"><i class="fa-regular fa-angle-left me-2"></i>Личный кабинет</a>
                    </div>
                    <div class="ucard p-4">
                        <div class="d-block d-sm-flex align-items-center mb-4">
                            <h1 class="fs-24 fw-bold m-0">Пополнение баланса</h1>
                            <div class="ms-auto px-3 py-2 border rounding mt-3 mt-sm-0">
                                На вашем счету: <span class="fw-bold">{{ Auth::user()->userInfo->balance }} руб.</span>
                            </div>
                        </div>
{{--                        <div class="alert bg-light rounding p-3 p-sm-4 mb-4">--}}
{{--                            <h2 class="fs-18 fw-medium mb-2">Получай больше</h2>--}}
{{--                            <p class="mb-0 text-muted">Пополни баланс на сумму <span class="fw-medium">от 5 000 рублей</span> и получи отличный бонус <span class="fw-medium">от 5% до 15%</span> от Smoservice.</p>--}}
{{--                            <button type="button" class="btn-close end-0 p-3" data-bs-dismiss="alert" aria-label="Close"></button>--}}
{{--                        </div>--}}

                        @livewire('cabinet.balance')
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
