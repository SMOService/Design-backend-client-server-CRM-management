@section('meta_title', 'SMM продвижение в социальных сетях – Система раскрутки SMOService')
@section('meta_keywords', 'смосервис, накрутка, раскрутка, продвижение, смм, сервис, сайт, система, онлайн, соцсети, услуги, просмотры, подписчики, лайки, зрители, комментарии, реклама, топ, тренды')
@section('meta_description', 'Онлайн сервис продвижения и раскрутки социальных сетей. Подписчики, просмотры, комментарии и лайки в социальных сетях по низким ценам.')

<x-app-layout>

    <main class="main d-flex flex-column">
        <div class="container">
            <div class="d-flex align-items-center mb-4">
                <a href="{{ route('support') }}" class="py-2 px-3 rounding bg-light border"><i class="fa-regular fa-angle-left me-2"></i>Техподдержка</a>
            </div>
            <div class="ucard">
                <div class="ucard-body p-4 bg-light border-bottom">
                    <div class="d-block d-md-flex align-items-center">
                        <h1 class="fs-24 fw-bold mb-3 mb-md-0 me-0 me-md-auto text-truncate" style="max-width: 400px">Не работает оплата картой Visa</h1>
                        <a href="{{ route('support.create') }}" class="btn btn-primary d-block d-md-inline mt-3 mt-md-0">Открыть тикет</a>
                    </div>
                </div>
                <div class="d-block d-md-flex align-items-center border-bottom px-4 py-3">
                    <div class="me-auto fw-medium">
                        <span class="d-block fs-16">Ticket created:</span>
                        <span class="text-muted small">20.10.22 in 22:41 PM</span>
                    </div>
                    <div class="tick__status bg-soft-green ms-auto  mt-3 mt-md-0">Закрыт</div>
                </div>
                <div class="tick-chat">
                    <!--Item-->
                    <div class="tick-chat__item">
                        <div class="tick-chat__avatar">M</div>
                        <div class="tick-chat__body ms-3">
                            <div class="tick-chat__username">Madlen Curtis</div>
                            <div class="tick-chat__message">
                                <p>Могу ли я включить оплату в гривнах? Или хотя бы отображать в гривнах?</p>
                            </div>
                            <time class="tick-chat__date">20.10.22 in 22:41 PM</time>
                        </div>
                    </div>
                    <!--Item-->
                    <div class="tick-chat__item --moderate">
                        <div class="tick-chat__avatar --moderate">M</div>
                        <div class="tick-chat__body ms-3">
                            <div class="tick-chat__username --moderate">Jerad Oksim</div>
                            <div class="tick-chat__message">
                                <p><strong>Привет!</strong> 👋 </p>
                                <p>Вы можете оплатить в гривнах, платежная система проведет конвертацию самостоятельно.</p>
                            </div>
                            <time class="tick-chat__date">20.10.22 in 23:14 PM</time>
                        </div>
                    </div>
                    <!--Item-->
                    <div class="tick-chat__item">
                        <div class="tick-chat__avatar">M</div>
                        <div class="tick-chat__body ms-3">
                            <div class="tick-chat__username">Madlen Curtis</div>
                            <div class="tick-chat__message">
                                <p>Спасибо! 🙌</p>
                            </div>
                            <time class="tick-chat__date">20.10.22 in 23:16 PM</time>
                        </div>
                    </div>
                    <div class="p-4 p-lg-5">
                        <form action="">
                            <textarea name="" id="" cols="30" rows="5" class="form-control p-3" placeholder="Message"></textarea>
                            <div class="d-block d-sm-flex align-items-center mt-4">
                                <div class="me-auto">
                                    <label for="formFile" class="btn btn-grey w-100"><i class="fa-regular fa-paperclip me-2"></i>Attach files</label>
                                    <input class="form-control d-none" type="file" id="formFile">
                                </div>
                                <div class="mt-3 mt-sm-0">
                                    <button class="btn btn-primary w-100">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-app-layout>
