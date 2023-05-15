@section('meta_title', 'SMM продвижение в социальных сетях – Система раскрутки SMOService')
@section('meta_keywords', 'смосервис, накрутка, раскрутка, продвижение, смм, сервис, сайт, система, онлайн, соцсети, услуги, просмотры, подписчики, лайки, зрители, комментарии, реклама, топ, тренды')
@section('meta_description', 'Онлайн сервис продвижения и раскрутки социальных сетей. Подписчики, просмотры, комментарии и лайки в социальных сетях по низким ценам.')

<x-app-layout>

    <main class="main d-flex flex-column">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block">
                    @include('includes.left_banners')
                </div>
                <div class="col-lg-9 mx-auto">
                    <div class="d-flex align-items-center mb-4">
                        <a href="{{ route('static.tools.index') }}" class="py-2 px-3 rounding bg-light border"><i class="fa-regular fa-angle-left me-2"></i>СММ инструменты</a>
                        <a href="{{ route('static.tools.ideas') }}" class="py-2 px-3 rounding bg-light border ms-auto">Предложить идею<i class="fa-regular fa-angle-right ms-2"></i></a>
                    </div>
                    <div class="ucard">
                        <div class="ucard__body p-4">
                            <div class="pt-4 mb-5 text-center">
                                <h1 class="fs-24 fw-bold">
                                    Генератор UTM меток
                                </h1>
                                <div class="fw-normal fs-18 mt-2 text-muted">Создать ссылку с микроразметкой <span class="d-block">для рекламной кампании</span></div>
                            </div>
                            <div class="bg-light rounding p-4 mb-4">
                                <h3 class="fs-18 fw-medium mb-3">Когда стоит использовать UTM-метки?</h3>
                                <ul class="list-unstyled">
                                    <li class="d-flex mb-3">
                                        <span class="me-2">01.</span>
                                        <span>
                           Вы ведете рекламную кампанию в Гугл, Яндексе или социальных сетях и хотите узнать, откуда приходят ваши пользователи, клиенты либо рекламодатели.
                           </span>
                                    </li>
                                    <li class="d-flex mb-3">
                                        <span class="me-2">02.</span>
                                        <span>
                           Вы используете иные методы привлечения пользователей и потенциальных клиентов и хотите узнать больше о том, откуда они приходят на ваш сайт или страничку в социальной сети.
                           </span>
                                    </li>
                                    <li class="d-flex mb-3">
                                        <span class="me-2">03.</span>
                                        <span>
                           Вы создаете массовую рассылку по списку ваших подписчиков с помощью различных сервисов и хотите узнать, насколько эффективна та или иная ваша рассылка.
                           </span>
                                    </li>
                                    <li class="d-flex mb-3">
                                        <span class="me-2">04.</span>
                                        <span>
                           Вы покупаете рекламу у блогеров, и хотите знать насколько эффективной была реклама у блогера или с какой группы пришло больше подписчиков для блога или клиентов для вашего бизнеса.
                           </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="border rounding p-4 mb-4 url-block">
                                <h2 class="fs-18 fw-medium mb-3">
                                    Адрес вашей страницы
                                </h2>
                                <div class="input-group">
                        <span class="input-group-text">
                        <i class="fa-regular fa-link"></i>
                        </span>
                                    <input type="text" class="url form-control" placeholder="https://smoservice.media/">
                                </div>
                            </div>
                            <div class="border rounding p-4 mb-4">
                                <h3 class="fs-18 fw-medium mb-3">
                                    Источник трафика
                                </h3>
                                <div class="row targets">
                                    <div class="col-6 col-sm-4 mb-3">
                                        <div class="form-check">
                                            <input type="radio" id="yourToggle" name="customRadio" class="form-check-input" data-id="default" checked>
                                            <label class="custom-control-label" for="yourToggle">Свои значения</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 mb-3">
                                        <div class="form-check">
                                            <input type="radio" id="googleToggle" name="customRadio" class="form-check-input" data-id="google">
                                            <label class="custom-control-label" for="googleToggle">Google Adwords</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 mb-3">
                                        <div class="form-check">
                                            <input type="radio" id="yandexToggle" name="customRadio" class="form-check-input" data-id="yandex">
                                            <label class="custom-control-label" for="yandexToggle">Яндекс.Директ</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 mb-3 mb-sm-0">
                                        <div class="form-check">
                                            <input type="radio" id="vkToggle" name="customRadio" class="form-check-input" data-id="vk">
                                            <label class="custom-control-label" for="vkToggle">Вконтакте</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 mb-3 mb-sm-0">
                                        <div class="form-check">
                                            <input type="radio" id="mailruToggle" name="customRadio" class="form-check-input" data-id="mailru">
                                            <label class="custom-control-label" for="mailruToggle">Таргет@Mail.ru</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 mb-3 mb-sm-0">
                                        <div class="form-check">
                                            <input type="radio" id="fbToggle" name="customRadio" class="form-check-input" data-id="facebook">
                                            <label class="custom-control-label" for="fbToggle">Facebook</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border rounding p-4 mb-4">
                                <h4 class="fs-18 fw-medium mb-3">
                                    Обязательные параметры
                                </h4>
                                <div class="mb-3">
                                    <label for="" class="mb-2">
                                        Источник кампании
                                    </label>
                                    <div class="input-group mb-3">
                           <span class="input-group-text bg-light">
                           utm_source
                           </span>
                                        <input for="utm" name="utm_source" type="text" class="form-control" placeholder="google, yandex, vk, facebook">
                                        <a href="#!" class="input-group-text" data-bs-toggle="modal" data-bs-target=".modal-utm_source">
                                            <i class="fa-regular fa-question m-0"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="mb-2">
                                        Тип трафика
                                    </label>
                                    <div class="input-group mb-3">
                           <span class="input-group-text bg-light">
                           utm_medium
                           </span>
                                        <input for="utm" name="utm_medium" type="text" class="form-control" placeholder="cpc, email, banner, article">
                                        <a href="#!" class="input-group-text" data-bs-toggle="modal" data-bs-target=".modal-utm_medium">
                                            <i class="fa-regular fa-question m-0"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="mb-2">
                                        Название компании
                                    </label>
                                    <div class="input-group mb-3">
                           <span class="input-group-text bg-light">
                           utm_campaign
                           </span>
                                        <input for="utm" name="utm_campaign" type="text" class="form-control" placeholder="promo, discount, sale">
                                        <a href="#!" class="input-group-text" data-bs-toggle="modal" data-bs-target=".modal-utm_campaign">
                                            <i class="fa-regular fa-question m-0"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="border rounding p-4 mb-4">
                                <h4 class="fs-18 fw-medium mb-3">
                                    Необязательные параметры
                                </h4>
                                <div class="mb-3">
                                    <label for="" class="mb-2">
                                        Идентификатор объявления
                                    </label>
                                    <div class="input-group mb-3">
                           <span class="input-group-text bg-light">
                           utm_content
                           </span>
                                        <input for="utm" name="utm_content" type="text" class="form-control" placeholder="link, landing page">
                                        <a href="#!" class="input-group-text" data-bs-toggle="modal" data-bs-target=".modal-utm_content">
                                            <i class="fa-regular fa-question m-0"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="mb-2">
                                        Ключевое слово
                                    </label>
                                    <div class="input-group mb-3">
                           <span class="input-group-text bg-light">
                           utm_term
                           </span>
                                        <input for="utm" name="utm_term" type="text" class="form-control" placeholder="free, -30%, registration">
                                        <a href="#!" class="input-group-text" data-bs-toggle="modal" data-bs-target=".modal-utm_term">
                                            <i class="fa-regular fa-question m-0"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-light rounding p-4 mb-4">
                                <h4 class="fs-18 fw-medium mb-3">
                                    Результат
                                </h4>
                                <div class="mb-3">
                                    <div class="input-group mb-3">
                                        <input id="inputResult" type="text" class="form-control" placeholder="Здесь появится ссылка с UTM разметкой" readonly="">
                                        <div class="input-group-text">
                                            <a href="#!" class="btn btn-sm btn-dark" data-clipboard-target="#inputResult" onclick="copyToClipboard('inputResult', true)">
                                                Копировать
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border rounding p-4 mb-4">
                                <h4 class="fs-18 fw-medium mb-4">
                                    Динамические переменные, и как их использовать
                                </h4>
                                <ul class="nav nav-pills flex-column flex-sm-row mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item flex-sm-fill m-1">
                                        <a class="btn btn-tabs w-100 text-center active" id="pills-tab1-tab" data-bs-toggle="pill" href="#pills-tab1" role="tab" aria-controls="pills-tab1" aria-selected="true">Что это такое?</a>
                                    </li>
                                    <li class="nav-item flex-sm-fill m-1">
                                        <a class="btn btn-tabs w-100 text-center" id="pills-tab2-tab" data-bs-toggle="pill" href="#pills-tab2" role="tab" aria-controls="pills-tab2" aria-selected="false">Google Adwords</a>
                                    </li>
                                    <li class="nav-item flex-sm-fill m-1">
                                        <a class="btn btn-tabs w-100 text-center" id="pills-tab3-tab" data-bs-toggle="pill" href="#pills-tab3" role="tab" aria-controls="pills-tab3" aria-selected="false">Яндекс.Директ</a>
                                    </li>
                                    <li class="nav-item flex-sm-fill m-1">
                                        <a class="btn btn-tabs w-100 text-center" id="pills-tab4-tab" data-bs-toggle="pill" href="#pills-tab4" role="tab" aria-controls="pills-tab4" aria-selected="false">Target My.com</a>
                                    </li>
                                </ul>
                                <div class="tab-content py-4" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-tab1" role="tabpanel" aria-labelledby="pills-tab1-tab">
                                        <p>Динамические переменные позволяют подставлять в контекстную рекламу дополнительную информацию, чтобы узнать, например, с какого устройства поступил клик — с мобильного или с компьютера.</p>
                                        <p>Они называются динамическими, потому что могут менять свое значение. Например, если использовать метку
                                            <mark>utm_term={keyword}</mark>
                                            , то Яндекс Директ автоматически заменит
                                            <mark>{keyword}</mark>
                                            на ключевую фразу, по которой произошел показ.
                                        </p>
                                        <p>Чаще всего динамические переменные используются в параметре
                                            <mark>utm_content</mark>
                                            , но можно задать динамические переменные и для других меток.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="pills-tab2" role="tabpanel" aria-labelledby="pills-tab2-tab">
                                        <h4 class="fs-18 fw-medium text-center mb-4">
                                            Основные параметры динамической вставки: Google Adwords
                                        </h4>
                                        <div class="table-responsive">
                                            <table class="u-table u-table-2cols">
                                                <thead>
                                                <tr>
                                                    <th>Параметр</th>
                                                    <th>Что подставится вместо {параметра}</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">{adgroupid}</th>
                                                    <td>Идентификатор группы объявлений. Используйте его, если вы настроили данные отслеживания на уровне аккаунта или кампании и хотите узнать, объявление из какой группы было показано</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{adposition}</th>
                                                    <td>Позиция объявления на странице. Например, значение 1t2 расшифровывается так: страница 1, показ над результатами поиска (top), позиция 2</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{campaignid}</th>
                                                    <td>Идентификатор кампании. Используйте его, если вы настроили данные отслеживания на уровне аккаунта и хотите узнать, объявление из какой кампании было показано</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{creative}</th>
                                                    <td>Уникальный идентификатор объявления</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{device}</th>
                                                    <td>Тип устройства, с которого поступил клик</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{feeditemid}</th>
                                                    <td>Идентификатор расширения, на которое нажал пользователь</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{keyword}</th>
                                                    <td>Ключевое слово, по которому было показано объявление в поисковой сети, или наиболее близкое ключевое слово при показе в контекстно-медийной сети</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{loc_interest_ms}</th>
                                                    <td>Идентификатор местоположения, указанного в поисковом запросе пользователя</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{loc_physical_ms}</th>
                                                    <td>Идентификатор географического местоположения, откуда был получен клик</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{lpurl}</th>
                                                    <td>Конечный URL. Шифруется, если только вы не указали {lpurl} в начале шаблона отслеживания. Если параметр {lpurl} указан не в самом начале шаблона отслеживания, пробел и символы ?, =, ", #, \t, ' и (пробел) заменяются
                                                        escape-кодами
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{matchtype}</th>
                                                    <td>Тип соответствия ключевого слова, по которому было показано объявление</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{merchant_id}</th>
                                                    <td>Идентификатор аккаунта Google Merchant Center, к которому относится товарное объявление.</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{placement}</th>
                                                    <td>Сайт, где объявление получило клик. Он соответствует заданным вами ключевым словам или условиям таргетинга на места размещения (в зависимости от настроек таргетинга в кампании)</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{product_channel}</th>
                                                    <td>Тип канала продаж, через который реализуется товар, рекламируемый в объявлении</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{product_country}</th>
                                                    <td>Страна, в которой продается товар, рекламируемый в объявлении</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{product_id}</th>
                                                    <td>Идентификатор товара, рекламируемого в объявлении (из фида данных Merchant Center)</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{product_language}</th>
                                                    <td>Язык, на котором приведена информация о товаре (согласно фиду данных Merchant Center)</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{product_partition_id}</th>
                                                    <td>Уникальный идентификатор группы товаров, к которой относится объявление</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{store_code}</th>
                                                    <td>Для кампаний, использующих локальный канал продаж, здесь отображается уникальный код магазина</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">{targetid}</th>
                                                    <td>Идентификатор ключевого слова (kwd), динамического поискового объявления (dsa) или цели списка ремаркетинга (aud). Например, если вы добавите в группу объявлений список ремаркетинга с идентификатором критерия 456 и настроите
                                                        таргетинг на ключевое слово с идентификатором 123, параметр {targetid} будет заменен на kwd-123:aud-456
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-tab3" role="tabpanel" aria-labelledby="pills-tab3-tab">
                                        <h4 class="fs-18 fw-medium text-center mb-4">
                                            Основные параметры динамической вставки: Яндекс.Директ
                                        </h4>
                                        <table class="u-table u-table-2cols">
                                            <thead>
                                            <tr>
                                                <th>Параметр</th>
                                                <th>Что подставится вместо {параметра}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">
                                                    {ad_id}, {banner_id}
                                                </th>
                                                <td>Идентификатор объявления</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    {addphrases}
                                                </th>
                                                <td>
                                                    Инициирован ли этот показ дополнительными релевантными фразами
                                                    <ul>
                                                        <li>yes — показ по дополнительной релевантной фразе</li>
                                                        <li>no — показ по одной из исходных фраз</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    {addphrasestext}
                                                </th>
                                                <td>
                                                    Текст дополнительной релевантной фразы
                                                    <ul>
                                                        <li>текст фразы — при показе по дополнительной релевантной фразе</li>
                                                        <li>none — показ не был инициирован дополнительной релевантной фразой</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    {campaign_type}
                                                </th>
                                                <td>
                                                    Тип кампании
                                                    <ul>
                                                        <li>type1 — текстово-графические объявления</li>
                                                        <li>type2 — реклама мобильных приложений</li>
                                                        <li>type3 — динамические объявления</li>
                                                        <li>type4 — смарт-баннеры</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    {campaign_id}
                                                </th>
                                                <td>Идентификатор рекламной кампании</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    {creative_id}
                                                </th>
                                                <td>Идентификатор креатива из конструктора</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    {device_type}
                                                </th>
                                                <td>
                                                    Тип устройства, на котором произведен показ
                                                    <ul>
                                                        <li>desktop</li>
                                                        <li>mobile</li>
                                                        <li>tablet</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    {gbid}
                                                </th>
                                                <td>Идентификатор группы</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    {keyword}
                                                </th>
                                                <td>Ключевая фраза, по которой было показано объявление (текстово-графическое или реклама мобильных приложений) (без минус-слов)</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    {phrase_id}
                                                </th>
                                                <td>Идентификатор ключевой фразы для текстово-графических объявлений или рекламы мобильных приложений</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    {retargeting_id}
                                                </th>
                                                <td>Идентификатор условия нацеливания на аудиторию, связывающего группу объявлений с условиями подбора аудитории или интересами к мобильным приложениям</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    {coef_goal_context_id}
                                                </th>
                                                <td>Идентификатор корректировки ставок для условия подбора аудитории</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    {interest_id}
                                                </th>
                                                <td>Идентификатор интереса к мобильным приложениям</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    {adtarget_name}
                                                </th>
                                                <td>Условие нацеливания динамического объявления</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    {adtarget_id}
                                                </th>
                                                <td>Идентификатор условия нацеливания динамического объявления</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    {position}
                                                </th>
                                                <td>
                                                    Точная позиция объявления в блоке. Передает только номер позиции, по которому невозможно определить тип блока, где показано объявление (используйте вместе с {position_type})
                                                    <ul>
                                                        <li>номер позиции в блоке (например, 1)</li>
                                                        <li>0 — объявление было показано в сетях (РСЯ или внешние сети)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    {position_type}
                                                </th>
                                                <td>
                                                    Тип блока, если показ произошел на странице с результатами поиска Яндекса
                                                    <ul>
                                                        <li>premium — спецразмещение</li>
                                                        <li>other — блок справа или блок внизу</li>
                                                        <li>none — объявление было показано в сетях (РСЯ или внешние сети)</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    {source}
                                                </th>
                                                <td>
                                                    Место показа
                                                    <ul>
                                                        <li>домен площадки (например, tilda.cc) — при показе в сетях (РСЯ или внешние сети)</li>
                                                        <li>none — при показе в поиске Яндекса</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    {source_type}
                                                </th>
                                                <td>
                                                    Тип площадки, на которой произведен показ объявления
                                                    <ul>
                                                        <li>search — поиск</li>
                                                        <li>context — сети</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    {region_name}
                                                </th>
                                                <td>Регион, в котором было показано объявление</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    {region_id}
                                                </th>
                                                <td>Идентификатор региона, в котором было показано объявление</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="pills-tab4" role="tabpanel" aria-labelledby="pills-tab4-tab">
                                        <h4 class="fs-18 fw-medium text-center mb-4">
                                            Основные параметры динамической вставки: Target My.com
                                        </h4>
                                        <table class="u-table u-table-2cols">
                                            <thead>
                                            <tr>
                                                <th>Параметр</th>
                                                <th>Что подставится вместо {параметра}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">advertiser_id</th>
                                                <td>id рекламодателя</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">campaign_id</th>
                                                <td>id рекламной кампании</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">campaign_name</th>
                                                <td>название рекламной кампании</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">banner_id</th>
                                                <td>id баннера</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">geo</th>
                                                <td>id региона по геодереву myTarget, из которого был сделан переход</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">gender</th>
                                                <td>пол пользователя, который сделал переход</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">age</th>
                                                <td>возраст пользователя, который сделал переход</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">random</th>
                                                <td>случайное число. Часто используется в ссылках (аудит-пикселях) для более точного подсчета показов</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">impression_weekday</th>
                                                <td>передает день недели (например, mon), в который произошел показ баннера. Используется в метке ссылки</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">impression_hour</th>
                                                <td>передает час (например, 23), в который произошел показ по Московскому времени в 24-часовом формате</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">user_timezone</th>
                                                <td>передает временную зону пользователя (например, +3), в котором был сделан показ</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="border rounding p-4 mb-4">
                                <h4 class="fs-18 fw-medium mb-3">
                                    Исправление ошибок при генерации UTM-меток
                                </h4>
                                <ul class="list-style">
                                    <li class="mb-3">
                                        UTM-метка будет содержать в себе только один знак
                                        <mark>?</mark>.
                                    </li>
                                    <li class="mb-3">
                                        Каждый параметр метки начинается с одного амперсанда
                                        <mark>&amp;</mark>.
                                    </li>
                                    <li class="mb-3">
                                        Автоматическая замена символов мешающих аналитике
                                        <mark>#</mark>,
                                        <mark>&amp;</mark>,
                                        <mark>=</mark>.
                                    </li>
                                    <li class="mb-3">
                                        Автоматическое удаление повторяющихся
                                        <mark>http</mark>,
                                        <mark>https</mark>.
                                    </li>
                                    <li class="mb-3">
                                        Перевод в нижний регистр.
                                    </li>
                                    <li class="mb-3">
                                        Escape-последовательности или транслитерация кириллицы по выбору.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-app-layout>
