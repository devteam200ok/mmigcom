<section class="py-5 my-5">
    <div class="container">
        @php
            $portfolio_list = DB::connection('mysql2')->table('portfolio_lists')->where('id', $list_id)->first();
        @endphp
        <div class="row">
            <div class="col-xl-12 d-flex">
                <div class="mx-auto text-center company_title">
                    <h5 style="font-weight: 900;color:#079aca;">{{ $portfolio_list->text_sub }}</h5>
                    <h1 class="display-4 px-5" style="font-weight: 900">{{ $portfolio_list->text_main }}</h1>
                    <p>{{ $portfolio_list->text_desc }}</p>
                </div>
            </div>
        </div>
        @php
            $categories = DB::connection('mysql2')
                ->table('portfolio_categories')
                ->where('list_id', $list_id)
                ->orderBy('order', 'asc')
                ->get();

            $sub_categories = DB::connection('mysql2')
                ->table('portfolio_sub_categories')
                ->where('list_id', $list_id)
                ->where('category_id', 0)
                ->orderBy('order', 'asc')
                ->get();

            $sub_sub_categories = DB::connection('mysql2')
                ->table('portfolio_sub_categories')
                ->where('list_id', $list_id)
                ->where('category_id', '!=', 0)
                ->where('category_id', $sub_category_id)
                ->orderBy('order', 'asc')
                ->get();
        @endphp
        <div class="row mt-3 mb-5">
            <div class="col-xl-12 d-none d-xl-block mb-2">
                <div class="d-flex flex-wrap align-items-center justify-content-center">
                    <!-- 버튼 그룹 -->
                    <div class="btn-group mx-2 my-2" role="group" aria-label="Category Button Group">
                        <!-- 'All' 버튼 -->
                        <button wire:click="selectCategory(0)"
                            class="btn btn-category {{ $category_id == 0 ? 'active' : 'inactive' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-grid" viewBox="0 0 16 16">
                                <path
                                    d="M2 2h2v2H2V2zm5 0h2v2H7V2zm5 0h2v2h-2V2zM2 7h2v2H2V7zm5 0h2v2H7V7zm5 0h2v2h-2V7zM2 12h2v2H2v-2zm5 0h2v2H7v-2zm5 0h2v2h-2v-2z" />
                            </svg>
                            All
                        </button>

                        <!-- 카테고리 버튼들 -->
                        @foreach ($categories as $category)
                            <button wire:click="selectCategory({{ $category->id }})"
                                class="btn btn-category {{ $category->id == $category_id ? 'active' : 'inactive' }}">

                                @if (stripos($category->title, 'Homepage') !== false)
                                    <!-- 데스크톱 모니터 아이콘 -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
                                        <path
                                            d="M0 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-4v1h2.5a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1H6v-1H2a2 2 0 0 1-2-2V3zm14 0H2v8h12V3z" />
                                    </svg>
                                @elseif (stripos($category->title, 'Application') !== false)
                                    <!-- 휴대폰 아이콘 -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                                        <path
                                            d="M11 1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                        <path
                                            d="M8 12.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm3 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                    </svg>
                                @elseif (stripos($category->title, 'Program') !== false)
                                    <!-- 윈도우 창 아이콘 -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-windows" viewBox="0 0 16 16">
                                        <path
                                            d="M6.555 2H2v4.555h4.555V2zm7.445 0H7.445v4.555h6.555V2zM2 7.445V12h4.555V7.445H2zm5.445 0V12h6.555V7.445H7.445z" />
                                    </svg>
                                @else
                                    <!-- 톱니바퀴 아이콘 (기본) -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                        <path
                                            d="M8 1a7 7 0 1 1 0 14A7 7 0 0 1 8 1zm1 5h-2v2H5v2h2v2h2v-2h2V8H9V6zm-.5 4a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1z" />
                                    </svg>
                                @endif

                                {{ $category->title }}
                            </button>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-xl-12 d-block d-xl-none mb-2">
                <div class="d-flex flex-wrap align-items-center justify-content-center">
                    <!-- 'All' 버튼 -->
                    <button wire:click="selectCategory(0)"
                        class="btn btn-category mx-2 mb-2 {{ $category_id == 0 ? 'active' : 'inactive' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-grid" viewBox="0 0 16 16">
                            <path
                                d="M2 2h2v2H2V2zm5 0h2v2H7V2zm5 0h2v2h-2V2zM2 7h2v2H2V7zm5 0h2v2H7V7zm5 0h2v2h-2V7zM2 12h2v2H2v-2zm5 0h2v2H7v-2zm5 0h2v2h-2v-2z" />
                        </svg>
                        All
                    </button>

                    <!-- 카테고리 버튼들 -->
                    @foreach ($categories as $category)
                        <button wire:click="selectCategory({{ $category->id }})"
                            class="btn btn-category mx-2 mb-2 {{ $category->id == $category_id ? 'active' : 'inactive' }}">
                            @if (stripos($category->title, 'Homepage') !== false)
                                <!-- 데스크톱 모니터 아이콘 -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
                                    <path
                                        d="M0 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-4v1h2.5a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1H6v-1H2a2 2 0 0 1-2-2V3zm14 0H2v8h12V3z" />
                                </svg>
                            @elseif (stripos($category->title, 'Application') !== false)
                                <!-- 휴대폰 아이콘 -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                                    <path
                                        d="M11 1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                    <path
                                        d="M8 12.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm3 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                </svg>
                            @elseif (stripos($category->title, 'Program') !== false)
                                <!-- 윈도우 창 아이콘 -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-windows" viewBox="0 0 16 16">
                                    <path
                                        d="M6.555 2H2v4.555h4.555V2zm7.445 0H7.445v4.555h6.555V2zM2 7.445V12h4.555V7.445H2zm5.445 0V12h6.555V7.445H7.445z" />
                                </svg>
                            @else
                                <!-- 톱니바퀴 아이콘 (기본) -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                    <path
                                        d="M8 1a7 7 0 1 1 0 14A7 7 0 0 1 8 1zm1 5h-2v2H5v2h2v2h2v-2h2V8H9V6zm-.5 4a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1z" />
                                </svg>
                            @endif
                            {{ $category->title }}
                        </button>
                    @endforeach
                </div>
            </div>
            <div class="col-xl-12 d-flex">
                <!-- 중분류 & 소분류 선택 -->
                <div class="d-flex ms-auto my-2">
                    <select wire:model.change="sub_category_id" class="form-select category-select me-2">
                        <option value="0">분야별(중분류)</option>
                        @foreach ($sub_categories as $sub_category)
                            <option value="{{ $sub_category->id }}">{{ $sub_category->title }}</option>
                        @endforeach
                    </select>
                    @if(count($sub_sub_categories)>0)
                        <select wire:model.change="sub_sub_category_id" class="form-select category-select me-2">
                            <option value="0">분야별(소분류)</option>
                            @foreach ($sub_sub_categories as $sub_category)
                                <option value="{{ $sub_category->id }}">{{ $sub_category->title }}</option>
                            @endforeach
                        </select>
                    @endif
                </div>
            </div>
        </div>

        @php
            $customsQuery = DB::connection('mysql2')
                ->table('portfolio_customs')
                ->where('list_id', $list_id)
                ->where('status', '공개');

            if ($category_id != 0) {
                $customsQuery->where('filter', 'like', '%' . $category_title . '%');
            }

            if ($sub_category_id != 0) {
                $customsQuery->where('filter', 'like', '%' . $sub_category_title . '%');
            }

            if ($sub_sub_category_id != 0) {
                $customsQuery->where('filter', 'like', '%' . $sub_sub_category_title . '%');
            }

            $total = $customsQuery->count();
            $customs = $customsQuery->orderby('order', 'asc')->limit($limit)->get();
        @endphp
        @if (count($customs) > 0)
            <div class="row mt-3">
                @foreach ($customs as $custom)
                    @php
                        if ($custom) {
                            $filters = explode(',', $custom->filter);
                        } else {
                            $filters = [];
                        }
                    @endphp
                    @if ($custom->type == '링크')
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                            <a href="{{ $custom->url }}" target="_blank" style="text-decoration:none">
                                <div class="card" style="min-height:400px; border-radius:0px">
                                    <img class="card-img-top" style="border-radius: 0px"
                                        src="https://mig-groupware.com/storage/portfolio-homepage/logo_path/400/{{ $custom->logo_path }}"
                                        alt="{{ $custom->title }} web-img" />
                                    <div class="card-body pt-3 pb-0 px-1 pb-2" style="border-radius: 0px">
                                        <div class="d-flex">
                                            <h6 class="ms-2">{{ $custom->title }}</h6>
                                            <h6 class="ms-auto">
                                                View<i class="ai-arrow-right ms-2 me-2"></i>
                                            </h6>
                                        </div>
                                        <div class="text-start px-2">
                                            @foreach ($filters as $filter)
                                                @if ($filter != '' && $filter != ' ' && $filter != null)
                                                    <span class="fs-sm mb-1 me-1 px-2 py-1"
                                                        style="background-color:#efefef">{{ $filter }}</span>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                    @if ($custom->type == '콘텐츠')
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3 select_display"
                            data-id="{{ $custom->id }}" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                            aria-controls="offcanvasRight" style="cursor: pointer">
                            <div class="card" style="min-height:400px;border-radius: 0px">
                                <img class="card-img-top" style="border-radius: 0px"
                                    src="https://mig-groupware.com/storage/portfolio-display/logo_path/400/{{ $custom->logo_path }}"
                                    alt="{{ $custom->title }} web-img" />
                                <div class="card-body pt-3 pb-0 px-1 pb-2" style="border-radius: 0px">
                                    <div class="d-flex">
                                        <h6 class="ms-2">{{ $custom->title }}</h6>
                                        <h6 class="ms-auto">
                                            View<i class="ai-arrow-right ms-2 me-2"></i>
                                        </h6>
                                    </div>
                                    <div class="text-start px-2">
                                        @foreach ($filters as $filter)
                                            @if ($filter != '' && $filter != ' ' && $filter != null)
                                                <span class="fs-sm mb-1 me-1 px-2 py-1"
                                                    style="background-color:#efefef">{{ $filter }}</span>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($custom->type == '상세페이지')
                        @php
                            $pages = DB::connection('mysql2')
                                ->table('portfolio_custom_pages')
                                ->where('portfolio_custom_id', $custom->id)
                                ->orderby('id', 'asc')
                                ->get();
                        @endphp
                        @if (count($pages) > 0)
                            <div class="col-xl-12 my-3">
                                @foreach ($pages as $page)
                                    <img src="https://mig-groupware.com/storage/portfolio/page/1280/{{ $page->page }}"
                                        alt="{{ $custom->title }} 상세페이지 이미지" style="width:1280px">
                                @endforeach
                            </div>
                        @endif
                    @endif
                    @if ($custom->type == '슬라이드')
                        @php
                            $slides = DB::connection('mysql2')
                                ->table('portfolio_custom_slides')
                                ->where('portfolio_custom_id', $custom->id)
                                ->orderby('id', 'asc')
                                ->get();
                        @endphp
                        @if (count($slides) > 0)
                            <div class="col-12">
                                <div class="swiper swiper-nav-onhover"
                                    data-swiper-options='{
                                        "spaceBetween": 20,
                                        "loop": true,
                                        "pagination": {
                                        "el": ".swiper-pagination",
                                        "clickable": true
                                        },
                                        "navigation": {
                                        "prevEl": ".btn-prev",
                                        "nextEl": ".btn-next"
                                        }
                                    }'>
                                    <div class="swiper-wrapper">
                                        @foreach ($slides as $slide)
                                            <div class="swiper-slide">
                                                <div class="ratio ratio-16x9 bg-white">
                                                    <div
                                                        class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">
                                                        <img src="https://mig-groupware.com/storage/portfolio/slide/1280/{{ $slide->slide }}"
                                                            alt="{{ $custom->title }} 슬라이드 이미지">
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                    <button type="button"
                                        class="btn btn-prev btn-icon btn-sm btn-outline-info rounded-circle"
                                        aria-label="Prev">
                                        <i class="ai-arrow-left"></i>
                                    </button>

                                    <button type="button"
                                        class="btn btn-next btn-icon btn-sm btn-outline-info rounded-circle"
                                        aria-label="Next">
                                        <i class="ai-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
        @endif
        @if ($total > $limit)
            <div class="row mt-5">
                <div class="col-xl-12 d-flex">
                    <div class="mx-auto">
                        <button wire:loading.attr="disabled" wire:click="increaseLimit" class="btn btn-outline-info">
                            <div wire:loading class="spinner-border me-2" role="status"
                                style="width:1rem;height:1rem">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            더 보기
                        </button>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
