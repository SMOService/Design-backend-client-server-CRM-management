<form wire:submit.prevent="submit">
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
