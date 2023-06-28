<form wire:submit.prevent="forgot">
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text"><i class="fa-regular fa-user-tie"></i></span>
            <input type="text" class="form-control" placeholder="Логин или Email" wire:model.defer="login" @if($errors->has('login')) is-invalid @endif>
        </div>

        @error('login')
        <div class="ms-2 mt-2 small text-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <!-- Item -->
    <div class="mb-3">
        <div class="input-group input-group-mobile">
            <div class="input-group-text">
                <img src="https://smoservice.media/bitrix/tools/captcha.php?captcha_sid=0aa7ae29ac8e0a94e936c9c55b10936c" class="img-fluid" alt="CAPTCHA">
            </div>
            <input type="text" class="form-control" name="captcha_word" maxlength="50" value="" autocomplete="off" placeholder="Введите слово на картинке" >
            <div class="input-group-text">
                <a href="#!" title="Обновить картинку"><i class="fa-solid fa-arrows-rotate"></i></a>
            </div>
        </div>
    </div>
    <!-- Button -->

    @if ($showCodeInput)
        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text"><i class="fa-regular fa-user-secret"></i></span>
                <input type="text" class="form-control" placeholder="Код из письма" wire:model.defer="code" @if($errors->has('code')) is-invalid @endif>
            </div>

            @error('code')
            <div class="ms-2 mt-2 small text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
    @endif

    <div class="mb-3">
        @if (session()->has('message'))
            <div class="ms-2 mt-2 small alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="text-center mt-5">
        <button type="submit" class="btn btn-primary">Сбросить пароль</button>
    </div>
</form>
