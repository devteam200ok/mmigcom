@extends('layouts.front')
@section('inside_head_tag')
    <style>
        .company_title {
            width: 100%;
            padding: 5em 0 5em;
            text-align: center;
            background: url('{{ url('/') }}/around/images/main_after.png') no-repeat 60% 60%;
        }

        /* Default style for larger screens */
        .wide-offcanvas {
            min-width: 40% !important;
        }

        /* Media query for mobile devices */
        @media (max-width: 767px) {

            /* Adjust the max-width as needed for your specific breakpoint */
            .wide-offcanvas {
                min-width: 100% !important;
            }
        }
    </style>
@endsection
@section('content')
    <div id="scollspy_bar" class="scollspy_bar">
        <!--스크롤바(navbar)-->
        <ul class="nav-menu">
            <li>
                <a id="main_visual_dot" href="#main_visual" class="dot active">
                    <span class="d-none d-md-block">main!!!</span>
                    <span class="d-block d-md-none" style="min-height:1rem"></span>
                </a>
            </li>
            <li>
                <a id="portfolio_dot" href="#portfolio" class="dot">
                    <span class="d-none d-md-block">portfolio</span>
                    <span class="d-block d-md-none" style="min-height:1rem"></span>
                </a>
            </li>

            <li>
                <a id="expertise_dot" href="#expertise" class="dot">
                    <span class="d-none d-md-block">전문분야</span>
                    <span class="d-block d-md-none" style="min-height:1rem"></span>
                </a>
            </li>
            <li>
                <a id="solution_dot" href="#solution" class="dot">
                    <span class="d-none d-md-block">Solution</span>
                    <span class="d-block d-md-none" style="min-height:1rem"></span>
                </a>
            </li>
            <li>
                <a id="contact_dot" href="#contact" class="dot">
                    <span class="d-none d-md-block">무료상담</span>
                    <span class="d-block d-md-none" style="min-height:1rem"></span>
                </a>
            </li>
            <li>
                <a id="location_dot" href="#location" class="dot">
                    <span class="d-none d-md-block">Location</span>
                    <span class="d-block d-md-none" style="min-height:1rem"></span>
                </a>
            </li>
        </ul>
    </div>

    <section id="main_visual" class="main_visual box">
        <div class="container" style="height:100%">
            <div class="row">
                <div class="col-xl-6 col-lg-8 text-white">
                    <div class="d-none d-lg-block" style="margin-top:300px">
                        <h1 class="text-white display-3">
                            "무료"광고대행 및
                            <br />
                            매출데이터 제공
                        </h1>
                        <h5 class="text-white mb-2">
                            웹 로그분석 데이터 · 교통 역사 별 승하차 데이터 · 미디어 시청률 · 통계청 등
                        </h5>
                        <h5 class="text-white">
                            각종 리서치 데이터를 기반으로 전문적이고 체계적인 마케팅 운영 회사
                        </h5>
                        <a href="{{url('/')}}/estimate" class="btn btn-outline-secondary text-white mt-2">문의하기 <i class="ai-arrow-right"></i></a>
                    </div>
                    <div class="d-block d-lg-none ps-4 pe-5" style="margin-top:200px">
                        <h1 class="text-white display-3">
                            "무료"광고대행 및
                            <br />
                            매출데이터 제공
                        </h1>
                        <h5 class="text-white mb-2">
                            웹 로그분석 데이터 · 교통 역사 별 승하차 데이터 · 미디어 시청률 · 통계청 등
                        </h5>
                        <h5 class="text-white">
                            각종 리서치 데이터를 기반으로 전문적이고 체계적인 마케팅 운영 회사
                        </h5>
                        <a href="{{url('/')}}/estimate" class="btn btn-outline-secondary text-white mt-2">문의하기 <i class="ai-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="video_container pc">
            <video class="pc_video" autoplay loop muted playsinline>
                <source src="{{ url('/') }}/around/images/main_video.mp4" type="video/mp4" />
            </video>
        </div>
    </section>

    <section id="portfolio" class="mt-5 py-5">
        <div class="container">
            <h5 style="font-weight: 900;color:#079aca">Global MIG</h5>
            <div class="row">
                <div class="col-xl-6">
                    <h1 class="display-3" style="font-weight: 900">Company Portfolio</h1>
                </div>
                <div class="col-xl-6 d-flex align-items-center">
                    <a href="{{ url('/') }}/portfolio/list" class="btn btn-light ms-auto" style="color:#079aca">
                        포트폴리오 보기 <i class="ai-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <h6>
                        글로벌엠아이지는 온라인마케팅을 선두하는 기업으로 대표적인 검색광고를 시작으로
                        배너광고, SNS, 유튜브, 영상광고, 바이럴 등을 비롯한 다양한 광고의 경험을 가지고 있으며 여러 전문 마케터들을 통해 경험의 노하우로 효율적인 운영을 전개하고 있습니다.
                    </h6>
                </div>
            </div>
            <div class="row d-none d-lg-block">
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

                            <!-- Item -->
                            <div class="swiper-slide">
                                <div class="ratio ratio-16x9 bg-secondary">
                                    <div
                                        class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">
                                        <img src="{{ url('/') }}/around/images/portfolio_slide1.png"
                                            alt="포트폴리오 슬라이드 #1">
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide">
                                <div class="ratio ratio-16x9 bg-secondary">
                                    <div
                                        class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">

                                        <img src="{{ url('/') }}/around/images/portfolio_slide2.png"
                                            alt="포트폴리오 슬라이드 #2">
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide">
                                <div class="ratio ratio-16x9 bg-secondary">
                                    <div
                                        class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">
                                        <img src="{{ url('/') }}/around/images/portfolio_slide3.png"
                                            alt="포트폴리오 슬라이드 #3">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Prev button -->
                        <button type="button" class="btn btn-prev btn-icon btn-sm btn-outline-info rounded-circle"
                            aria-label="Prev">
                            <i class="ai-arrow-left"></i>
                        </button>

                        <!-- Next button -->
                        <button type="button" class="btn btn-next btn-icon btn-sm btn-outline-info rounded-circle"
                            aria-label="Next">
                            <i class="ai-arrow-right"></i>
                        </button>

                        <!-- Bullets -->
                        {{-- <div class="swiper-pagination"></div> --}}
                    </div>
                </div>
            </div>
            <div class="row d-block d-lg-none">
                <div class="col-12">
                    <img src="{{ url('/') }}/around/images/m_portfolio.png" alt="포트폴리오 슬라이드 #모바일">
                </div>
            </div>

            @php
                $customs = DB::connection('mysql2')
                    ->table('portfolio_customs')
                    ->where('landing', 1)
                    ->orderby('order', 'asc')
                    ->get();
            @endphp
            @if (count($customs) > 0)
                <div class="row mt-5">
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
                                    <div class="card" style="min-height:360px">
                                        <img class="card-img-top"
                                            src="https://mig-groupware.com/storage/portfolio-homepage/logo_path/450/{{ $custom->logo_path }}"
                                            alt="{{ $custom->title }} web-img" />
                                        <div class="card-body pt-3 pb-0 px-1 pb-2">
                                            <div class="text-center">
                                                @foreach ($filters as $filter)
                                                    <span class="badge bg-dark fs-sm mb-1 me-1"
                                                        style="cursor:pointer">{{ $filter }}</span>
                                                @endforeach
                                                <h6 class="mt-3">{{ $custom->title }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                        @if ($custom->type == '콘텐츠')
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-3 select_display"
                                data-id="{{ $custom->id }}" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="cursor: pointer">
                                <div class="card" style="min-height:360px">
                                    <img class="card-img-top"
                                        src="https://mig-groupware.com/storage/portfolio-display/logo_path/400/{{ $custom->logo_path }}"
                                        alt="{{ $custom->title }} web-img" />
                                    <div class="card-body pt-3 pb-0 px-1 pb-2">
                                        <div class="text-center">
                                            @foreach ($filters as $filter)
                                                <span class="badge bg-dark fs-sm mb-1 me-1"
                                                    style="cursor:pointer">{{ $filter }}</span>
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
                                            @foreach($slides as $slide)
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

        </div>
    </section>
    <section id="expertise" class="mt-0 py-5"
        style="background: url({{ url('/') }}/around/images/bg_specialization.png) no-repeat 0 0;">
        <div class="container">
            <h5 style="font-weight: 900;color:#ffffff">Global MIG</h5>
            <div class="row">
                <div class="col-xl-6">
                    <h1 class="display-3 text-white" style="font-weight: 900">전문분야</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <h6 class="text-white">
                        온라인마케팅 광고전문가 글로벌엠아이지입니다. 풍부한 경험과 노하우가 있는 전문가들이 이끌어드립니다.
                    </h6>
                </div>
            </div>
            <div class="row pb-5 my-5">
                <div class="col-xl-12 mt-4">
                    <div class="position-relative px-5">

                        <!-- External slider prev/next buttons -->
                        <i class="ai-chevron-left position-absolute top-50 start-0 translate-middle-y mt-n3"
                            id="prev" aria-label="Prev" style="color:white;font-size:80px;font-weigiht:900"></i>
                        <i class="ai-chevron-right position-absolute top-50 end-0 translate-middle-y mt-n3" id="next"
                            aria-label="Next" style="color:white;font-size:80px;font-weigiht:900"></i>
                        <!-- Slider -->
                        <div class="swiper"
                            data-swiper-options='{
                            "slidesPerView": 1,
                            "spaceBetween": 16,
                            "loop": true,
                            "pagination": {
                                "el": ".swiper-pagination",
                                "clickable": true
                            },
                            "navigation": {
                                "prevEl": "#prev",
                                "nextEl": "#next"
                            },
                            "breakpoints": {
                                "100": {
                                "slidesPerView": 2
                                },
                                "600": {
                                "slidesPerView": 3
                                },
                                "1000": {
                                "slidesPerView": 5
                                }
                            }
                            }'>
                            <div class="swiper-wrapper">
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="text-center">
                                        <img src="{{ url(url('/')) }}/around/images/new/sp_global.png" alt="해외 광고 대행" />
                                        <h4 class="mb-0 mt-3 text-white text-center">해외 광고 대행</h4>
                                        <p class="h5 text-center">
                                            <a class="text-white fs-sm" href="{{ url('/') }}/expertise/overseas">더
                                                알아보기 <i class="ai-arrow-right"></i></a>
                                        </p>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="text-center">
                                        <img src="{{ url(url('/')) }}/around/images/sp_search.png" alt="Search" />
                                        <h4 class="mb-0 mt-3 text-white text-center">Search</h4>
                                        <p class="h5 text-center">
                                            <a class="text-white fs-sm" href="{{ url('/') }}/expertise/search">더
                                                알아보기 <i class="ai-arrow-right"></i></a>
                                        </p>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="text-center">
                                        <img src="{{ url(url('/')) }}/around/images/sp_banner.png" alt="Banner" />
                                        <h4 class="mb-0 mt-3 text-white text-center">Banner</h4>
                                        <p class="h5 text-center">
                                            <a class="text-white fs-sm" href="{{ url('/') }}/expertise/banner">더
                                                알아보기 <i class="ai-arrow-right"></i></a>
                                        </p>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="text-center">
                                        <img src="{{ url(url('/')) }}/around/images/new/sp_meta.png" alt="SNS - Meta" />
                                        <h4 class="mb-0 mt-3 text-white text-center">SNS - Meta</h4>
                                        <p class="h5 text-center">
                                            <a class="text-white fs-sm" href="{{ url('/') }}/expertise/meta">더 알아보기
                                                <i class="ai-arrow-right"></i></a>
                                        </p>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="text-center">
                                        <img src="{{ url(url('/')) }}/around/images/new/sp_youtube.png"
                                            alt="SNS - Youtube" />
                                        <h4 class="mb-0 mt-3 text-white text-center">SNS - Youtube</h4>
                                        <p class="h5 text-center">
                                            <a class="text-white fs-sm" href="{{ url('/') }}/expertise/youtube">더
                                                알아보기 <i class="ai-arrow-right"></i></a>
                                        </p>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="text-center">
                                        <img src="{{ url(url('/')) }}/around/images/new/sp_daangn.png"
                                            alt="SNS - 당근마켓" />
                                        <h4 class="mb-0 mt-3 text-white text-center">SNS - 당근마켓</h4>
                                        <p class="h5 text-center">
                                            <a class="text-white fs-sm" href="{{ url('/') }}/expertise/carrot">더
                                                알아보기 <i class="ai-arrow-right"></i></a>
                                        </p>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="text-center">
                                        <img src="{{ url(url('/')) }}/around/images/sp_mcn.png" alt="MCN" />
                                        <h4 class="mb-0 mt-3 text-white text-center">MCN</h4>
                                        <p class="h5 text-center">
                                            <a class="text-white fs-sm" href="{{ url('/') }}/expertise/mcn">더 알아보기
                                                <i class="ai-arrow-right"></i></a>
                                        </p>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="text-center">
                                        <img src="{{ url(url('/')) }}/around/images/sp_cpi.png" alt="CPI" />
                                        <h4 class="mb-0 mt-3 text-white text-center">CPI</h4>
                                        <p class="h5 text-center">
                                            <a class="text-white fs-sm" href="{{ url('/') }}/expertise/cpi">더 알아보기
                                                <i class="ai-arrow-right"></i></a>
                                        </p>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="text-center">
                                        <img src="{{ url(url('/')) }}/around/images/new/sp_appsilon.png"
                                            alt="APPSILON" />
                                        <h4 class="mb-0 mt-3 text-white text-center">APPSILON</h4>
                                        <p class="h5 text-center">
                                            <a class="text-white fs-sm" href="{{ url('/') }}/expertise/appsilon">더
                                                알아보기 <i class="ai-arrow-right"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="solution" class="py-5 bg-dark">
        <div class="container">
            <h5 style="font-weight: 900;color:#079aca">Global MIG</h5>
            <div class="row">
                <div class="col-xl-6">
                    <h1 class="display-3 text-white" style="font-weight: 900">Solution</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <h6 class="text-white">
                        글로벌엠아이지가 제공하는 최상의 솔루션을 소개합니다.
                    </h6>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 offset-lg-4">
                    <div class="row">
                        <div class="col-6 col-xl-4 mb-4">
                            <a href="{{ url('/') }}/solution#competitor" style="text-decoration: none">
                                <div
                                    style="background-image: url({{ url('/') }}/around/images/new/bg_solution1.png); background-size: cover; background-position: center; border-radius: 10px;min-height:260px">
                                    <div class="py-5 px-3" style="padding-bottom: 100px">
                                        <p class="text-white fw-bold mb-0">01</p>
                                        <h3 class="text-white">경쟁업체분석</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-4 mb-4">
                            <a href="{{ url('/') }}/solution#database" style="text-decoration: none">
                                <div
                                    style="background-image: url({{ url('/') }}/around/images/new/bg_solution2.png); background-size: cover; background-position: center; border-radius: 10px;min-height:260px">
                                    <div class="py-5 px-3" style="padding-bottom: 100px">
                                        <p class="text-white fw-bold mb-0">02</p>
                                        <h3 class="text-white">데이터베이스</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-4 mb-4">
                            <a href="{{ url('/') }}/solution#conversion" style="text-decoration: none">
                                <div
                                    style="background-image: url({{ url('/') }}/around/images/new/bg_solution3.png); background-size: cover; background-position: center; border-radius: 10px;min-height:260px">
                                    <div class="py-5 px-3" style="padding-bottom: 100px">
                                        <p class="text-white fw-bold mb-0">03</p>
                                        <h3 class="text-white">전환 최적화</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-4 mb-4">
                            <a href="{{ url('/') }}/solution#log" style="text-decoration: none">
                                <div
                                    style="background-image: url({{ url('/') }}/around/images/new/bg_solution4.png); background-size: cover; background-position: center; border-radius: 10px;min-height:260px">
                                    <div class="py-5 px-3" style="padding-bottom: 100px">
                                        <p class="text-white fw-bold mb-0">04</p>
                                        <h3 class="text-white">로그분석</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-4 mb-4">
                            <a href="{{ url('/') }}/solution#sentimental" style="text-decoration: none">
                                <div
                                    style="background-image: url({{ url('/') }}/around/images/new/bg_solution5.png); background-size: cover; background-position: center; border-radius: 10px;min-height:260px">
                                    <div class="py-5 px-3" style="padding-bottom: 100px">
                                        <p class="text-white fw-bold mb-0">05</p>
                                        <h3 class="text-white">센티멘탈</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-4 mb-4">
                            <a href="{{ url('/') }}/solution#social" style="text-decoration: none">
                                <div
                                    style="background-image: url({{ url('/') }}/around/images/new/bg_solution6.png); background-size: cover; background-position: center; border-radius: 10px;min-height:260px">
                                    <div class="py-5 px-3" style="padding-bottom: 100px">
                                        <p class="text-white fw-bold mb-0">06</p>
                                        <h3 class="text-white">소셜통합</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="py-5"
        style="background-image:url({{ url('/') }}/around/images/free_title.png);background-size:cover;background-position:center">
        <div class="container">
            <h5 class="text-white mt-4 d-none d-xl-block">
                <span style="color:#079aca">항상 궁금한 내 광고, 오래 유지하고 있는 내 광고,</span> 진단이 필요하시다면<br />
                대행사/직접운영 상관 없이 무료로 광고 진단 리포트를 받아보세요.
            </h5>
            <h6 class="text-white mt-4 d-block d-xl-none">
                <div class="mb-2" style="color:#079aca">항상 궁금한 내 광고, 오래 유지하고 있는 내 광고,</div>진단이 필요하시다면<br />
                대행사/직접운영 상관 없이 <br />무료로 광고 진단 리포트를 받아보세요.
            </h6>
            <h1 class="display-4 text-white mt-3 d-none d-xl-block">네이버 광고 무료 진단 서비스</h1>
            <h1 class="display-4 text-white mt-3 d-block d-xl-none">네이버 광고<br>무료 진단 서비스</h1>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="mb-3">
                                <label for="company" class="form-label fw-bold">업체명</label>
                                <input class="form-control" type="text" id="company" placeholder="업체명을 입력하세요.">
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">담당자명 <span class="ms-1"
                                        style="color:#079aca">*</span></label>
                                <input class="form-control" type="text" id="name" placeholder="담당자 성함을 입력하세요.">
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="mb-3">
                                <label for="phone" class="form-label fw-bold">연락처 <span class="ms-1"
                                        style="color:#079aca">*</span></label>
                                <input class="form-control" type="text" id="phone" placeholder="연락처를 입력하세요.">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="url" class="form-label fw-bold">URL</label>
                                <input class="form-control" type="text" id="url" placeholder="URL을 입력하세요.">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="budget" class="form-label fw-bold">월 예상 광고비</label>
                                <select id="budget" class="form-select">
                                    <option value="">월 예상 광고비를 선택해 주세요.</option>
                                    <option value="미지정">미지정</option>
                                    <option value="50만원 - 100만원">50만원 - 100만원</option>
                                    <option value="100만원 - 500만원">100만원 - 500만원</option>
                                    <option value="500만원 - 1,000만원">500만원 - 1,000만원</option>
                                    <option value="1,000만원 - 5,000만원">1,000만원 - 5,000만원</option>
                                    <option value="5,000만원 이상">5,000만원 이상</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="type" class="form-label fw-bold">운영방식</label>
                                <select id="type" class="form-select">
                                    <option value="">직접운영/대행사운영 중 현재 상태를 선택하세요.</option>
                                    <option value="직접운영">직접운영</option>
                                    <option value="대행사운영">대행사운영</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="company" class="form-label fw-bold">답변을 요청할 지정 마케터가 있으신가요?</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input marketer_type" type="radio" id="marketer_no" value="미지정"
                                name="marketer_type" checked>
                            <label class="form-check-label marketer_type" for="marketer_no">미지정</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input marketer_type" type="radio" id="marketer_yes"
                                value="지정" name="marketer_type">
                            <label class="form-check-label marketer_type" for="marketer_yes">지정</label>
                        </div>
                        <input class="form-control" type="text" id="marketer" placeholder="지정 마케터 이름"
                            style="display:none">
                    </div>
                    <div class="d-flex">
                        <div class="ms-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="agreement">
                                <label class="form-check-label" for="agreement">개인정보처리방침에 동의합니다. </label>
                            </div>
                            <a href="{{ url('/') }}/privacy" target="_blank"
                                style="text-decoration: none">[보러가기]</a>
                        </div>
                    </div>
                    <div class="d-flex mt-3">
                        <div class="ms-auto">
                            <button id="submit_contact" class="btn btn-info">상담 후 무료진단서 받기</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 d-none d-xl-block">
                    <img src="{{ url('/') }}/around/images/free_sample.png" alt="견적 샘플" />
                </div>
            </div>
        </div>
    </section>
    <section id="location" class="py-5" style="background-color:#f1f1f1">
        <div class="container">
            <h5 style="font-weight: 900;color:#079aca">Global MIG</h5>
            <div class="row">
                <div class="col-xl-6">
                    <h1 class="display-3" style="font-weight: 900">Company Location</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <h4 class="mb-0" style="font-weight:900">서울본점</h4>
                    <hr class="text-dark mt-2 mb-2">
                    <div>
                        <span style="font-weight:700"><i class="ai-map-pin fw-bold" style="color:#079aca"></i> 주소</span>
                        <span>서울특별시 성동구 성수이로 65, 협성빌딩 6층 (04781)</span>
                    </div>
                    <div>
                        <span style="font-weight:700"><i class="ai-phone fw-bold" style="color:#079aca"></i> 연락처</span>
                        <span>02-435-0427</span>
                    </div>
                    <div>
                        <span style="font-weight:700"><i class="ai-map fw-bold" style="color:#079aca"></i> 교통</span>
                        <span>지하철 2호선 성수역 3번출구 / (마을) 성동13 한라시그마밸리 하차</span>
                    </div>

                    <h4 class="mb-0 mt-3" style="font-weight:900">전주지점</h4>
                    <hr class="text-dark mt-2 mb-2">
                    <div>
                        <span style="font-weight:700"><i class="ai-map-pin fw-bold" style="color:#079aca"></i> 주소</span>
                        <span>전북특별자치도 전주시 완산구 홍산남로 59, 윤선빌딩 5층 (54969)</span>
                    </div>
                    <div>
                        <span style="font-weight:700"><i class="ai-map fw-bold" style="color:#079aca"></i> 교통</span>
                        <span>(일반) 165, 355 신원아침도시.힐스테이트 하차</span>
                    </div>

                    <h4 class="mb-0 mt-3" style="font-weight:900">가산지점</h4>
                    <hr class="text-dark mt-2 mb-2">
                    <div>
                        <span style="font-weight:700"><i class="ai-map-pin fw-bold" style="color:#079aca"></i> 주소</span>
                        <span>서울특별시 금천구 가산디지털1로 226, 에이스하이엔드타워5차 1402호 (08502)</span>
                    </div>
                    <div class="mb-4">
                        <span style="font-weight:700"><i class="ai-map fw-bold" style="color:#079aca"></i> 교통</span>
                        <span>지하철 1, 7호선 가산디지털단지역 11번출구 / (일반) 75, 간선버스 652, 653, (지선) 5012, 5528 - 에이스하이엔드타워5차 하차</span>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div id="daumRoughmapContainer1707810306382" class="root_daum_roughmap root_daum_roughmap_landing"
                        style="width: 100%"></div>
                </div>
            </div>
        </div>
    </section>
    <div class="offcanvas offcanvas-end wide-offcanvas" id="offcanvasRight" tabindex="-1"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel"></h5><button class="btn-close text-reset" type="button"
                data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" id="content_area">

        </div>
    </div>
@endsection
@section('javascript_just_before_body')
    <script charset="UTF-8" class="daum_roughmap_loader_script"
        src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

    <script charset="UTF-8">
        new daum.roughmap.Lander({
            timestamp: "1707810306382",
            key: "2i46y",
        }).render();
    </script>

    <script>
        $(function() {

            $("body").on("click", ".marketer_type", function(e) {
                var marketer_type = $('input[name="marketer_type"]:checked').val();

                if ($(this).val() == '지정') {
                    $("#marketer").css("display", "block");
                } else {
                    $("#marketer").css("display", "none");
                }
            });

            $("body").on("click", "#submit_contact", function(e) {
                e.preventDefault();

                var company = $("#company").val();
                var position = null;
                var name = $("#name").val();
                var phone = $("#phone").val();
                var email = null;
                var mobile = null;
                var url = $("#url").val();
                var benchmark = null;
                var budget = $("#budget").val();
                var service = $("#type").val();
                var marketer = $("#marketer").val();
                var agreement = $("#agreement").is(":checked");

                if (name == '') {
                    alert('담당자명을 입력하세요.');
                    return false;
                }

                if (phone == '') {
                    alert('연락처를 입력하세요.');
                    return false;
                }

                if (!agreement) {
                    alert('개인정보처리방침에 동의하세요.');
                    return false;
                }

                $.ajax({
                    type: "POST",
                    url: "/contact/submit",
                    data: {
                        _token: CSRF_TOKEN,
                        company: company,
                        position: position,
                        name: name,
                        phone: phone,
                        email: email,
                        mobile: mobile,
                        url: url,
                        benchmark: benchmark,
                        budget: budget,
                        service: service,
                        marketer: marketer
                    },
                    dataType: 'JSON',
                    success: function success(data) {
                        if (data.result == 'success') {
                            window.location.href="/estimate/confirm";
                        } else {
                            alert('상담신청에 오류가 발생했습니다. 다시 시도해 주세요.');
                        }
                    },
                    error: function(response) {
                        console.log(response);
                    }
                });
            });
        });
    </script>

    <script>
        $(function() {
            $("body").on("click", ".select_display", function(e) {
                $("#content_area").html('');
                var id = $(this).data('id');
                $.ajax({
                    type: "POST",
                    url: "/portfolio/display_select",
                    data: {
                        _token: CSRF_TOKEN,
                        id: id
                    },
                    dataType: 'JSON',
                    success: function success(data) {
                        $("#content_area").html(data.html);
                    },
                    error: function(response) {
                        console.log(response);
                    }
                });
            });
        });
    </script>
@endsection
