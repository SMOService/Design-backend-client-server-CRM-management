<form wire:submit.prevent="auth">
    <!--item-->
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text"><i class="fa-regular fa-user-tie"></i></span>
            <input type="text" class="form-control  @if($errors->has('login')) is-invalid @endif" placeholder="Логин или Email" wire:model.defer="login">
        </div>
        @error('login')
        <div class="ms-2 mt-2 small text-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <!--item-->
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text"><i class="fa-regular fa-unlock"></i></span>
            <input type="password" class="form-control @if($errors->has('password')) is-invalid @endif" placeholder="Пароль" wire:model.defer="password">
        </div>
        @error('password')
        <div class="ms-2 mt-2 small text-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="d-flex align-items-center">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe" wire:model="remember">
            <label class="form-check-label" for="rememberMe">Запомнить меня</label>
        </div>
        <a href="#" class="ms-auto"><u>Забыли пароль?</u></a>
    </div>
    <!-- Button -->
    <div class="text-center mt-5">
        <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">Войти на сайт</button>
    </div>
</form>
