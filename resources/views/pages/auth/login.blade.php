@section('meta_title', 'Sign in. Libgram - Automated promotion system')

<x-app-layout>
    <main class="main d-flex flex-column">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="ucard">
                        <div class="heading fs-16 fw-medium px-4">Авторизация на сайте</div>
                        <div class="p-4">
                            <ul class="list-unstyled d-flex align-items-center justify-content-center m-0">
                                <li class="social-list__item">
                                    <a href="javascript:void(0)" class="social-icon social-icon_google" title="Google"><i class="fab fa-google"></i></a>
                                </li>
                                <li class="social-list__item">
                                    <a href="javascript:void(0)" class="social-icon social-icon_ok" title="Одноклассники"><i class="fab fa-odnoklassniki"></i></a>
                                </li>
                                <li class="social-list__item">
                                    <a href="javascript:void(0)" class="social-icon social-icon_yandex" title="Яндекс"><i class="fab fa-yandex"></i></a>
                                </li>
                                <li class="social-list__item">
                                    <a href="javascript:void(0)" class="social-icon social-icon_vk" title="ВКонтакте"><i class="fab fa-vk"></i></a>
                                </li>
                                <li class="social-list__item">
                                    <a href="javascript:void(0)" class="social-icon social-icon_twitter" title="Twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                            </ul>
                            <div class="py-4 text-center">
                                <hr>
                                <span class="line-text">или</span>
                            </div>

                            @livewire('auth.login')

                            <div class="d-flex align-items-center justify-content-center mt-4">
                                <span class="text-muted">Ещё нет аккаунта?</span>
                                <a href="{{ route('register') }}" class="ms-2">Зарегистрируйтесь</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
