@section('meta_title', 'Sign up. Libgram - Automated promotion system')

<x-app-layout>
    <main class="main d-flex flex-column">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="ucard">
                        <div class="heading fs-16 fw-medium px-4">Регистрация</div>
                        <div class="p-4">
                            <ul class="list-unstyled d-flex align-items-center justify-content-center m-0">
                                <li class="social-list__item">
                                    <a href="javascript:void(0)" class="social-icon social-icon_google" id="bx_socserv_icon_GoogleOAuth" onclick="BX.util.popup('https://accounts.google.com/o/oauth2/auth?client_id=204217360105-o1svg58v37u2tnie95ulnck7qf5oglr4.apps.googleusercontent.com&amp;redirect_uri=https%3A%2F%2Fsmoservice.media%2Fbitrix%2Ftools%2Foauth%2Fgoogle.php&amp;scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile&amp;response_type=code&amp;access_type=offline&amp;state=provider%3DGoogleOAuth%26site_id%3Ds1%26backurl%3D%252Flogin%252F%253Fcheck_key%253D351d443b4227040df14e1f1cb9b9274d%26mode%3Dopener%26redirect_url%3D%252Flogin%252F', 580, 400)" title="Google">
                                        <i class="fab fa-google"></i>
                                    </a>
                                </li>
                                <li class="social-list__item">
                                    <a href="javascript:void(0)" class="social-icon social-icon_ok" id="bx_socserv_icon_Odnoklassniki" onclick="BX.util.popup('http://www.odnoklassniki.ru/oauth/authorize?client_id=1278414592&amp;redirect_uri=https%3A%2F%2Fsmoservice.media%2Fbitrix%2Ftools%2Foauth%2Fodnoklassniki.php&amp;response_type=code&amp;state=site_id%3Ds1%26backurl%3D%252Flogin%252F%253Fcheck_key%253D351d443b4227040df14e1f1cb9b9274d%26redirect_url%3D%252Flogin%252F%26mode%3Dopener', 580, 400)" title="Одноклассники">
                                        <i class="fab fa-odnoklassniki"></i>
                                    </a>
                                </li>
                                <li class="social-list__item">
                                    <a href="javascript:void(0)" class="social-icon social-icon_yandex" id="bx_socserv_icon_YandexOAuth" onclick="BX.util.popup('https://oauth.yandex.ru/authorize?response_type=code&amp;client_id=096499e0a56948d1b7b0e148d03961b9&amp;display=popup&amp;redirect_uri=https%3A%2F%2Fsmoservice.media%2Fbitrix%2Ftools%2Foauth%2Fyandex.php&amp;state=site_id%3Ds1%26backurl%3D%252Flogin%252F%253Fcheck_key%253D351d443b4227040df14e1f1cb9b9274d%26mode%3Dopener%26redirect_url%3D%252Flogin%252F', 680, 600)" title="Яндекс">
                                        <i class="fab fa-yandex"></i>
                                    </a>
                                </li>
                                <li class="social-list__item">
                                    <a href="javascript:void(0)" class="social-icon social-icon_vk" id="bx_socserv_icon_VKontakte" onclick="BX.util.popup('https://oauth.vk.com/authorize?client_id=5400720&amp;redirect_uri=https%3A%2F%2Fsmoservice.media%2Fbitrix%2Ftools%2Foauth%2Fvkontakte.php&amp;scope=friends,offline,email&amp;response_type=code&amp;state=site_id%3Ds1%26backurl%3D%252Flogin%252F%253Fcheck_key%253D351d443b4227040df14e1f1cb9b9274d%26redirect_url%3D%252Flogin%252F', 660, 425)" title="ВКонтакте">
                                        <i class="fab fa-vk"></i>
                                    </a>
                                </li>
                                <li class="social-list__item">
                                    <a href="javascript:void(0)" class="social-icon social-icon_twitter" id="bx_socserv_icon_Twitter" onclick="BX.util.popup('/bitrix/tools/oauth/twitter.php?check_key=351d443b4227040df14e1f1cb9b9274d&amp;backurl=%252Flogin%252F', 800, 450)" title="Twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="py-4 text-center">
                                <hr>
                                <span class="line-text">или</span>
                            </div>
                            <form method="post" action="">
                                <!-- Item -->
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa-regular fa-user-alt"></i></span>
                                        <input type="text" class="form-control" placeholder="Логин (минимум 3 символа)" required="" name="USER_LOGIN" maxlength="255" value="">
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa-regular fa-user-tie"></i></span>
                                        <input type="text" class="form-control" placeholder="Имя" name="USER_NAME" maxlength="255" value="">
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa-regular fa-file-alt"></i></span>
                                        <input type="text" class="form-control" placeholder="Фамилия" name="USER_LAST_NAME" maxlength="255" value="">
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa-regular fa-phone-volume"></i></span>
                                        <input type="tel" name="phone" class="form-control" placeholder="Ваш телефон">
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa-regular fa-at"></i></span>
                                        <input type="email" name="USER_EMAIL" maxlength="255" value="" class="form-control" placeholder="E-Mail" required="">
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="mb-3">
                                    <div class="input-group input-group-mobile">
                                        <div class="input-group-text">
                                            <img src="https://smoservice.media/bitrix/tools/captcha.php?captcha_sid=0aa7ae29ac8e0a94e936c9c55b10936c" class="img-fluid" alt="CAPTCHA">
                                        </div>
                                        <input type="text" class="form-control" name="captcha_word" maxlength="50" value="" autocomplete="off" placeholder="Введите слово на картинке" required="">
                                        <div class="input-group-text">
                                            <a href="#!" title="Обновить картинку"><i class="fa-solid fa-arrows-rotate"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="mb-3">
                                    <div class="input-group mb-2">
                                        <span class="input-group-text"><i class="fa-regular fa-unlock-alt"></i></span>
                                        <input type="password" name="USER_PASSWORD" maxlength="255" value="" autocomplete="off" class="form-control" placeholder="Пароль" required="">
                                    </div>
                                    <small id="passwordHelp" class="form-text text-muted">
                                        Пароль дожен иметь не менее 6 символов.
                                    </small>
                                </div>
                                <!-- Item -->
                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa-regular fa-lock-alt"></i></span>
                                        <input type="password" name="USER_CONFIRM_PASSWORD" maxlength="255" value="" autocomplete="off" class="form-control" placeholder="Подтверждение пароля" required="">
                                    </div>
                                </div>
                                <!-- Information Alert -->
                                <div class="bg-light rounding p-4">
                                    Регистрируясь, вы принимаете <a href="/public-offer.php" target="_blank"><u>пользовательское соглашение</u></a> и соглашаетесь
                                    с <a href="/rules.php" target="_blank"><u>правилами</u></a>.
                                </div>
                                <!-- Button -->
                                <div class="mt-5 text-center">
                                    <button type="submit" class="btn btn-primary mr-3">Зарегистрироваться</button>
                                </div>
                            </form>
                            <div class="d-flex align-items-center justify-content-center mt-4">
                                <span class="text-muted">Есть аккаунт?</span>
                                <a href="/login.php" class="ms-2">Авторизируйтесь</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
