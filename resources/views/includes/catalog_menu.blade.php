<div class="dropdown-menu megamenu animate slideIn p-0 border-0" style="margin-top: 15px;">
    <div class="row me-0">
        <div class="col-lg-3 pe-0 social-navigation" id="pills-tab" role="tablist">
            <div class="overflow-auto d-flex d-lg-block">
                @foreach($categories as $category)
                    @if ($category['parent'] !== null)
                        @continue
                    @endif
                    <a href="#!" class="dropdown-item d-flex align-items-center py-3 fw-medium @if ($loop->first) active  @endif" id="pills-{{ $category['slug'] }}-tab"
                       data-bs-toggle="pill" data-bs-target="#pills-{{ $category['slug'] }}" type="button" role="tab"
                       aria-controls="pills-{{ $category['slug'] }}" aria-selected="true">
                        <div class="social-icon"
                             style="background: url({{ Vite::asset('resources/assets/img/social-icons/'.$category['slug'].'.png')}}) no-repeat center center / contain">
                        </div>
                        {{ $category['name'] }}
                        <i class="fa-solid fa-angle-right text-secondary ms-auto"></i>
                    </a>
                @endforeach

            </div>
        </div>
        <div class="col-lg-9">
            <div class="tab-content" id="pills-tabContent">

                @foreach($categories as $category)
                    @if ($category['parent'] !== null)
                        @continue
                    @endif

                    <div class="tab-pane fade @if ($loop->first) active show @endif" id="pills-{{ $category['slug'] }}" role="tabpanel"
                         aria-labelledby="pills-{{ $category['slug'] }}-tab" tabindex="0">
                        <div class="row vh-100">
                            <div class="col-md-6 col-lg-8">
                                <div class="fs-18 fw-medium p-3">Услуги {{ $category['name'] }}:</div>
                                <ul class="row">
                                    @php
                                        $subCategories = $categories->filter(function ($collection) use ($category) {
                                            return $collection['parent'] === $category['id'];
                                        })->values();
                                    @endphp
                                    @for($i=0;$i<5;$i++)
                                        @if ($subCategories->get($i)['name'] ?? null)

                                            <li class="col-6">
                                                <a href="{{ route('subcategory', ['category'=>$category['slug'], 'subcategory'=>$subCategories->get($i)['slug']]) }}" class="">
                                                    <i class="fa-regular {{$subCategories->get($i)['attributes']['category_icon']['value'] ?? null}} me-2 text-center" style="width:16px;"></i>
                                                    {{$subCategories->get($i)['name']}}
                                                </a>
                                            </li>
                                        @endif
                                    @endfor
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
