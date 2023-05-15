@section('meta_title', 'SMM продвижение в социальных сетях – Система раскрутки SMOService')
@section('meta_keywords', 'смосервис, накрутка, раскрутка, продвижение, смм, сервис, сайт, система, онлайн, соцсети, услуги, просмотры, подписчики, лайки, зрители, комментарии, реклама, топ, тренды')
@section('meta_description', 'Онлайн сервис продвижения и раскрутки социальных сетей. Подписчики, просмотры, комментарии и лайки в социальных сетях по низким ценам.')

<x-app-layout>

    <main class="main d-flex flex-column">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="ucard mb-4">
                        <div class="heading fs-16 fw-medium">
                            <i class="fa-regular fa-bullhorn me-2"></i> Предложение
                        </div>
                        <div class="ucard__body p-3">
                            <a href="{{ route('static.partner-program') }}">
                                <img alt="Партнёрская программа - многоуровневая. Зарабатывай с нами!" title="Партнёрская программа - многоуровневая. Зарабатывай с нами!" src="{{ Vite::asset('resources/assets/img/partner-program-card.png')}}" class="img-fluid" width="244" height="318">
                            </a>
                        </div>
                    </div>
                    <div class="ucard position-sticky" style="top: 24px">
                        <div class="heading fs-16 fw-medium">
                            <i class="fa-regular fa-calendar me-2"></i> Подписка
                        </div>
                        <div class="ucard__body p-3">
                            <a href="{{ route('static.social-subscription') }}">
                                <img alt="Оформи подписку ВК, получай всё сразу для ВКонтакте и экономь!" title="Оформи подписку ВК, получай всё сразу для ВКонтакте и экономь!" src="{{ Vite::asset('resources/assets/img/subscription-card.png')}}" class="img-fluid" width="244" height="318">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mx-auto">
                    <div class="d-flex align-items-center mb-4">
                        <a href="javascript://" onclick="history.back();" class="py-2 px-3 rounding bg-light border"><i class="fa-regular fa-angle-left me-2"></i>Назад</a>
                        <a href="{{ route('static.contacts') }}" class="py-2 px-3 rounding bg-light border ms-auto">Наши контакты<i class="fa-regular fa-angle-right ms-2"></i></a>
                    </div>
                    <div class="ucard p-4">
                        <h1 class="usection-title__line fs-24 fw-bold pt-4 mb-5 text-center">Информация и данные компании</h1>
                        <div class="border rounding mb-4">
                            <div class="fs-16 fw-medium p-4">
                                <i class="fa-light fa-location-dot me-3"></i> Мы находимся
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1861070.124508903!2d52.834712586963406!3d24.349885733746184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e48dfb1ab12bd%3A0x33d32f56c0080aa7!2z0J7QsdGK0LXQtNC40L3QtdC90L3Ri9C1INCQ0YDQsNCx0YHQutC40LUg0K3QvNC40YDQsNGC0Ys!5e0!3m2!1sru!2sua!4v1668331031043!5m2!1sru!2sua"
                                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="row text-center">
                            <div class="col-lg-4 mb-4">
                                <div class="border rounding shadow--hover p-4">
                                    <i class="fa-light fa-life-ring color-orange fs-30 mb-4"></i>
                                    <div class="fs-16 fw-medium mb-2">Тикеты</div>
                                    <p class="mb-4 text-muted">smoservice.media/support/</p>
                                    <a href="{{ route('static.contacts') }}" class="btn btn-sm btn-light">Служба поддержки</a>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="border rounding shadow--hover p-4">
                                    <i class="fa-brands fa-skype color-orange fs-30 mb-4"></i>
                                    <div class="fs-16 fw-medium mb-2">Skype</div>
                                    <p class="mb-4 text-muted">seller.smoservice</p>
                                    <a href="skype:seller.smoservice?chat" class="btn btn-sm btn-light">Сотрудничество</a>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="border rounding shadow--hover p-4">
                                    <i class="fa-light fa-paper-plane color-orange fs-30 mb-4"></i>
                                    <div class="fs-16 fw-medium mb-2">Telegram</div>
                                    <p class="mb-4 text-muted">@smmseller</p>
                                    <a href="https://t.me/smmseller" class="btn btn-sm btn-light">Сотрудничество</a>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-warning d-flex align-items-center mb-4">
                            <i class="fal fa-info-circle fs-18 me-3"></i> Перед тем как обратиться в службу поддержку по контактам, рекомендуем ознакомиться с разделами.
                        </div>
                        <div class="bg-light rounding p-4 mb-5">
                            <ul class="row list-unstyled">
                                <li class="col-md-6 col-lg-4 py-2">
                                    <a href="/pages/strict_rules_smm_service/">
                                        <i class="fa-solid fa-angle-right me-3"></i>Правила сайта
                                    </a>
                                </li>
                                <li class="col-md-6 col-lg-4 py-2">
                                    <a href="/pages/partner_program/">
                                        <i class="fa-solid fa-angle-right me-3"></i>Партнёрам проекта
                                    </a>
                                </li>
                                <li class="col-md-6 col-lg-4 py-2">
                                    <a href="/pages/garantsite/">
                                        <i class="fa-solid fa-angle-right me-3"></i>Гарантии сервиса
                                    </a>
                                </li>
                                <li class="col-md-6 col-lg-4 py-2">
                                    <a href="/pages/about/">
                                        <i class="fa-solid fa-angle-right me-3"></i>О компании
                                    </a>
                                </li>
                                <li class="col-md-6 col-lg-4 py-2">
                                    <a href="/pages/warranty_garantii/">
                                        <i class="fa-solid fa-angle-right me-3"></i>Идентификация
                                    </a>
                                </li>
                                <li class="col-md-6 col-lg-4 py-2">
                                    <a href="/pages/public_offer/">
                                        <i class="fa-solid fa-angle-right me-3"></i>Публичная офферта
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="border rounding p-4 mb-4">
                            <h3 class="fs-18 fw-medium mb-3">История становления лидерами рынка</h3>
                            <p>Smoservice.media — компания, функционирующая с 2013 года. За этот период сервис успел отлично зарекомендовать себя. Подтверждением данного факта являются многочисленные положительные отзывы от благодарных клиентов. Домен зарегистрирован
                                REGRU-RU. Время работы сервиса — лучшее доказательство его благонадежности.
                            </p>
                            <p>SMOservice представляет собой первую в мире площадку, позволяющую создать собственный бизнес без специальных знаний в области разработки сайтов и настройки хостингов. Не понадобится иметь дело с программной частью — сервис очень прост
                                и удобен в работе.
                            </p>
                            <p>Спектр услуг охватывает маркетинговое продвижение страниц в различных социальных сетях:</p>
                            <ul class="mb-3">
                                <li>«ВКонтакте»;</li>
                                <li>«Инстаграм»;</li>
                                <li>«Твиттер»;</li>
                                <li>«Телеграм» и пр.</li>
                            </ul>
                            <p>Платформа функционирует в круглосуточном режиме, без перерывов. Географических ограничений нет — сервис работает по всему миру, в любой стране.</p>
                            <p>Для заказа доступны любые виды социальных сигналов:</p>
                            <ul class="mb-3">
                                <li>лайки и дизлайки;</li>
                                <li>репосты;</li>
                                <li>голосования;</li>
                                <li>подписчики и зрители канала;</li>
                                <li>просмотры постов и пр.</li>
                            </ul>
                            <p class="mb-0">Удобство системы заключается в прозрачности работы. На сайте доступен для просмотра статус заказа. Клиент может увидеть, на какой стадии находится выполнение работы, и проконтролировать ход процесса.</p>
                        </div>
                        <div class="border rounding p-4 mb-4">
                            <h3 class="fs-18 fw-medium mb-3">Про автоматическую систему</h3>
                            <p>Сайт SMOservice знает принцип ранжирования аккаунтов в социальных сетях. Сервис позволяет раскрутить профили в «Твиттере», «Инстаграме», Facebook и пр. Площадка автоматизирует процесс перепродажи услуг в соцсетях, накрутки лайков,
                                комментариев, подписчиков и т. д.
                            </p>
                            <p>Специализированный сервис предоставляет широкий спектр услуг в сфере автоматического продвижения в соцмедиа. К работе привлекаются живые люди вместо ботов.</p>
                            <p>Воспользоваться сервисом просто. Предварительно нужно пройти процедуру регистрации на сайте и внести деньги на баланс. Со счета можно выполнять оплату услуг комплексного продвижения в социальных медиа, <a href="/smmpromotion.php"
                                                                                                                                                                                                                                            class="link">раскрутка в Москве</a> для клиентов премиум уровня. Списание средств с баланса проводится лишь по завершении выполнения заказа. Процесс занимает 1—2 дня. Конкретный срок выполнения заказа обусловлен масштабами проводимых
                                работ и составляет от 2 до 72 часов за 1000 единиц. Уточнить информацию можно у службы поддержки сайта. Выполнение работы осуществляется в день оформления заказа с 8 до 23 часов ежедневно и без выходных.
                            </p>
                            <p class="mb-0">Результатом использования сервиса становится получение реальной коммерческой пользы практически сразу после создания аккаунта. Эффективность функционирования площадки доказана многочисленными откликами клиентов.</p>
                        </div>
                        <div class="border rounding p-4 mb-4">
                            <h3 class="fs-18 fw-medium mb-3">Принципы работы сервиса</h3>
                            <p>SMOservice строго блюдет свою репутацию, качественное оказание услуг — главный принцип работы.</p>
                            <p>Администрация сервиса добросовестно подходит к исполнению обязанностей. Клиентам доступна возможность в любой момент обратиться за поддержкой. Квалифицированная консультация поможет разобраться в возникшем вопросе. Предложения и жалобы
                                рассматриваются через техническую поддержку на сайте. Пользователю достаточно оставить заявку онлайн, чтобы получить ответ в течение суток.
                            </p>
                            <p>Скорость работы — также преимущество площадки. Своевременное выполнение заказов достигается за счет автоматизации. Схема работы максимально проста и не вызывает проблем с освоением у пользователей любого уровня продвинутости. Техподдержка
                                готова ответить на любые вопросы клиента и помочь разобраться в функционале сервиса.
                            </p>
                            <p>Гибкие системы продвижения. Подбор характеристик осуществляется в соответствии с условиями конкретного проекта. Это позволяет достичь максимальной результативности реализуемых мероприятий.</p>
                            <p>Ответственность за результат — кредо компании. SMOservice гарантирует исполнение взятого заказа в оговоренные сроки, без задержек и проволочек.</p>
                            <p>Реферальная система. За привлечение новых клиентов пользователю предоставляются бонусы. Воспользоваться накопленными баллами можно в рамках системы продвижения SMOservice для оплаты услуг.</p>
                            <p>Лояльная ценовая политика. Стоимость услуг SMOservice вполне приемлема. Постоянные клиенты компании могут рассчитывать на скидку в размере 15 %. Условием предоставления дисконта является совершение заказов на общую сумму свыше 50
                                тысяч рублей. По достижении указанного лимита аккаунт в автоматическом режиме переносится в категорию постоянных клиентов.
                            </p>
                            <p>Оплата услуг проводится различными способами: ROBOKASSA, Webmoney Merchant. Сервис является официальным продавцом систем WebMoney Transfer, «Яндекс.Деньги».</p>
                        </div>
                        <div class="border rounding p-4 mb-4">
                            <h3 class="fs-18 fw-medium mb-3">Достижения компании</h3>
                            <p>SMOservice входит в топ-5 лучших сервисов по раскрутке в социальных медиа. Система ROBOKASSA включила площадку в пятерку наиболее надежных сайтов — накоплено свыше 1000 отзывов клиентов.</p>
                            <p>Спектр оказываемых услуг непрерывно расширяется и пополняется новыми позициями.</p>
                            <p class="mb-0">Meta Platforms Inc. (Facebook, Instagram) - признана экстремистской, ее деятельность запрещена на территории России; - в оферте/пользовательском соглашении прописать условие, что использование сайта не допускается с целью совершения
                                действий, нарушающих действующее законодательство РФ, включая, но не ограничиваясь, Уголовным кодексом РФ, Федеральным законом от 25 июля 2002 г. N 114-ФЗ "О противодействии экстремистской деятельности"
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-app-layout>
