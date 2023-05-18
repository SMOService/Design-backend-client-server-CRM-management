<form role="search" class="header-search dropdown d-none d-lg-block mx-3">
    <div class="input-group" data-bs-toggle="dropdown">
        <input type="search" class="form-control" placeholder="Что будем продвигать?">
        <button type="button" class="btn input-group-text"><i
                class="fa-regular fa-magnifying-glass"></i></button>
    </div>
    <div class="dropdown-menu w-100 p-2 overflow-auto shadow-md animate slideIn" style="max-height: 60vh">

        @foreach($categories as $category)
            @if ($category['parent'] !== null)
                @continue
            @endif
            @php
                $subCategories[$category['id']] = $categories->filter(function ($collection) use ($category) {
                    return $collection['parent'] === $category['id'];
                })->values();
            @endphp

                <a href="/category-new.php" class="dropdown-item d-flex align-items-center py-3 fw-medium">
                    <div class="social-icon"
                         style="background: url({{ Vite::asset('resources/assets/img/social-icons/'.$category['slug'].'.png')}}) no-repeat center center / contain">
                    </div>
                    {{ $category['name'] }}
                    <i class="fa-solid fa-angle-right text-secondary ms-auto"></i>
                </a>

        @endforeach

    </div>
</form>
