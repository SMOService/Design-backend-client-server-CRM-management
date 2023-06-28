@section('meta_title', 'Sign in. Libgram - Automated promotion system')

<x-app-layout>
    <main class="main d-flex flex-column">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="ucard">
                        <div class="heading fs-16 fw-medium px-4">Восстановление пароля</div>
                        <div class="p-4">


                            @livewire('auth.reset', ['token' => $token, 'email'=>$email])

                            <div class="d-flex align-items-center justify-content-center mt-4">
                                <a href="{{ route('login') }}"><i class="fa-regular fa-angle-left me-2"></i>Авторизация</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
