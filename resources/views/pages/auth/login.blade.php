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
                            <form method="post" action="">
                                <!--item-->
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa-regular fa-user-tie"></i></span>
                                        <input type="text" class="form-control" placeholder="Логин или Email">
                                    </div>
                                </div>
                                <!--item-->
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa-regular fa-unlock"></i></span>
                                        <input type="password" class="form-control" placeholder="Пароль">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Запомнить меня</label>
                                    </div>
                                    <a href="/forgot-password.php" class="ms-auto"><u>Забыли пароль?</u></a>
                                </div>
                                <!-- Button -->
                                <div class="text-center mt-5">
                                    <button type="submit" class="btn btn-primary">Войти на сайт</button>
                                </div>
                            </form>
                            <div class="d-flex align-items-center justify-content-center mt-4">
                                <span class="text-muted">Ещё нет аккаунта?</span>
                                <a href="/register.php" class="ms-2">Зарегистрируйтесь</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
