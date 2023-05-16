
<form wire:submit.prevent="register">
    <!-- Item -->
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text"><i class="fa-regular fa-user-alt"></i></span>
            <input type="text" class="form-control @if($errors->has('login')) is-invalid @endif" placeholder="Логин (минимум 3 символа)" required="" maxlength="255" wire:model="login">
        </div>
        @error('login')
        <div class="ms-2 mt-2 small text-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <!-- Item -->
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text"><i class="fa-regular fa-user-tie"></i></span>
            <input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" placeholder="Имя" maxlength="255" wire:model="name" >
        </div>
        @error('name')
        <div class="ms-2 mt-2 small text-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <!-- Item -->
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text"><i class="fa-regular fa-file-alt"></i></span>
            <input type="text" class="form-control @if($errors->has('surname')) is-invalid @endif" placeholder="Фамилия" maxlength="255" wire:model="surname" >
        </div>
        @error('surname')
        <div class="ms-2 mt-2 small text-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <!-- Item -->
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text"><i class="fa-regular fa-phone-volume"></i></span>
            <input type="tel" name="phone" class="form-control @if($errors->has('phone')) is-invalid @endif" placeholder="Ваш телефон" wire:model="phone">
        </div>
        @error('phone')
        <div class="ms-2 mt-2 small text-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <!-- Item -->
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text"><i class="fa-regular fa-at"></i></span>
            <input type="email" maxlength="255" class="form-control @if($errors->has('email')) is-invalid @endif" placeholder="E-Mail" required="" wire:model="email">
        </div>
        @error('email')
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
            <input type="text" class="form-control @if($errors->has('captcha')) is-invalid @endif" maxlength="50" autocomplete="off" placeholder="Введите слово на картинке" required="" wire:model="captcha">
            <div class="input-group-text">
                <a href="#!" title="Обновить картинку"><i class="fa-solid fa-arrows-rotate"></i></a>
            </div>
        </div>
        @error('captcha')
        <div class="ms-2 mt-2 small text-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <!-- Item -->
    <div class="mb-3">
        <div class="input-group mb-2">
            <span class="input-group-text"><i class="fa-regular fa-unlock-alt"></i></span>
            <input type="password" maxlength="255" autocomplete="off" class="form-control @if($errors->has('password')) is-invalid @endif" placeholder="Пароль" required="" wire:model="password">
        </div>
        <small id="passwordHelp" class="form-text text-muted">
            Пароль должен иметь не менее 8 символов.
        </small>
        @error('password')
        <div class="ms-2 mt-2 small text-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <!-- Item -->
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text"><i class="fa-regular fa-lock-alt"></i></span>
            <input type="password" maxlength="255" autocomplete="off" class="form-control @if($errors->has('password_confirmation')) is-invalid @endif" placeholder="Подтверждение пароля" required="" wire:model="password_confirmation">
        </div>
        @error('password_confirmation')
        <div class="ms-2 mt-2 small text-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <!-- Information Alert -->
    <div class="bg-light rounding p-4">
        Регистрируясь, вы принимаете <a href="{{ route('static.public-offer') }}" target="_blank"><u>пользовательское соглашение</u></a> и соглашаетесь
        с <a href="{{ route('static.rules') }}" target="_blank"><u>правилами</u></a>.
    </div>
    <!-- Button -->
    <div class="mt-5 text-center">
        <button type="submit" class="btn btn-primary mr-3">Зарегистрироваться</button>
    </div>
</form>
