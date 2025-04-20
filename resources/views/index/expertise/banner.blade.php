@extends('layouts.front')
@section('inside_head_tag')
@endsection
@section('content')
    <section class="mb-5 pt-5 pb-4" style="background-color:#4a4a4a">
        <div class="container">
            <div class="row my-5">
                <div class="col-xl-12">
                    <h1 class="display-4" style="font-weight: 900;color:white">Display AD 배너 광고</h1>
                    <br>
                    <p class="fw-bold text-white">
                        각종 포털사이트를 비롯한 제휴 되어 있는 다양한 언론 매체사의 지정된 영역에 <strong>정해진 시간과 예산설정에 의해 광고를 독점</strong>하여 높은 노출 수와 유입 수를
                        얻을 수 있으며, <strong>정교화된
                            타게팅으로 전환매출까지 기대</strong>할 수 있는 노출형 디스플레이 광고
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 pt-3 pb-4">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-4 mb-3">
                    <h5 style="font-weight: 900;color:#079aca">NAVER Display advertising - 무료
                    </h5>
                    <h1 class="display-4" style="font-weight: 900">네이버 DA</h1>
                    <p class="fw-bold">
                        단순 게재지면 노출이 아닌, 최적의 오디언스가 있는
                        게재지면을 찾아 그에 맞는 광고를 노출합니다.
                        게재지면 선택 할 고민 없이 가능한 게재지면
                        모두에 최적화된 노출이 가능합니다.
                    </p>
                </div>
                <div class="col-xl-4 mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/banner/nd_content1.png" alt="네이버 보장형 디스플레이 광고">
                </div>
                <div class="col-xl-4 mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/banner/nd_content2.png" alt="네이버 성과형 디스플레이 광고">
                </div>
            </div>
        </div>
    </section>
    <div class="text-center">
        <img class="d-none d-lg-block" src="{{ url('/') }}/around/images/banner/naver_per_title_bg.png"
            alt="네이버 성과형 디스플레이 광고 유형">
        <img class="d-block d-lg-none" src="{{ url('/') }}/around/images/banner/m_naver_per_title_bg.png"
            alt="네이버 성과형 디스플레이 광고 유형">
        <div class="my-5">
            <img class="" src="{{ url('/') }}/around/images/banner/naver_per_main.png" alt="네이버 성과형 디스플레이 광고 유형">
        </div>
    </div>
    <div class="container my-4">
        <div class="row">
            <div class="col-xl-12 mt-4 text-center">
                <div class="position-relative px-5">

                    <!-- External slider prev/next buttons -->
                    <button type="button" id="prev"
                        class="btn btn-prev btn-icon btn-sm btn-outline-info rounded-circle position-absolute top-50 start-0 translate-middle-y mt-n3"
                        aria-label="Prev">
                        <i class="ai-arrow-left"></i>
                    </button>
                    <button type="button" id="next"
                        class="btn btn-next btn-icon btn-sm btn-outline-info rounded-circle position-absolute top-50 end-0 translate-middle-y mt-n3"
                        aria-label="Next">
                        <i class="ai-arrow-right"></i>
                    </button>

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
                            "600": {
                            "slidesPerView": 2
                            },
                            "1000": {
                            "slidesPerView": 3
                            }
                        }
                        }'>
                        <div class="swiper-wrapper">
                            <!-- Item -->
                            <div class="swiper-slide">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <img src="{{ url('/') }}/around/images/banner/naver_per_slide (1).png"
                                            alt="밴드/카페피드 네이티브 이미지" />
                                    </div>
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="swiper-slide">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <img src="{{ url('/') }}/around/images/banner/naver_per_slide (2).png"
                                            alt="네이버 모바일 메인 네이티브 이미지" />
                                    </div>
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="swiper-slide">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <img src="{{ url('/') }}/around/images/banner/naver_per_slide (3).png"
                                            alt="네이버 모바일 메인 이미지 배너" />
                                    </div>
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="swiper-slide">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <img src="{{ url('/') }}/around/images/banner/naver_per_slide (4).png"
                                            alt="네이버 모바일 서브 네이티브 이미지" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pagination (Bullets) -->
                        <div class="swiper-pagination position-relative bottom-0 mt-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="mt-5 pt-3 pb-4" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-4 mb-3">
                    <h5 style="font-weight: 900;color:#079aca">Kakao moment Display advertising - 무료
                    </h5>
                    <h1 class="display-4" style="font-weight: 900">카카오모먼트</h1>
                    <p class="fw-bold">
                        다음 웹 초기화면과 앱 탑 화면과 카카오톡을 비롯한 주요 서비스에 노출 시킬 수 있는
                        목적형 광고 형태.
                    </p>
                </div>
                <div class="col-xl-8 mb-3 text-center">
                    <div class="position-relative px-5">

                        <!-- External slider prev/next buttons -->
                        <button type="button" id="prev"
                            class="btn btn-prev btn-icon btn-sm btn-outline-info rounded-circle position-absolute top-50 start-0 translate-middle-y mt-n3"
                            aria-label="Prev">
                            <i class="ai-arrow-left"></i>
                        </button>
                        <button type="button" id="next"
                            class="btn btn-next btn-icon btn-sm btn-outline-info rounded-circle position-absolute top-50 end-0 translate-middle-y mt-n3"
                            aria-label="Next">
                            <i class="ai-arrow-right"></i>
                        </button>

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
                                "600": {
                                "slidesPerView": 2
                                },
                                "1000": {
                                "slidesPerView": 3
                                }
                            }
                            }'>
                            <div class="swiper-wrapper">
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/banner/kakao_slide_mo1.png"
                                                alt="디스플레이 - 동영상형" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/banner/kakao_slide_mo2.png"
                                                alt="디스플레이 - 배너형" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/banner/kakao_slide_mo3.png"
                                                alt="디스플레이 - 네이티브형" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/banner/kakao_slide_mo4.png"
                                                alt="메시지광고 - 와이드 이미지형" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/banner/kakao_slide_mo5.png"
                                                alt="메시지광고 - 와이드 리스트형" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pagination (Bullets) -->
                            <div class="swiper-pagination position-relative bottom-0 mt-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 pt-3 pb-4">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 mb-3 text-center">
                    <h1 class="display-4" style="font-weight: 900">카카오모먼트 광고 유형</h1>
                </div>
                <div class="col-12 text-center">
                    <img class="d-none d-lg-block" src="{{ url('/') }}/around/images/banner/kakao_content.png"
                        alt="카카오모먼트 광고 유형">
                    <img class="d-block d-lg-none" src="{{ url('/') }}/around/images/banner/kakao_content_mo.png"
                        alt="카카오모먼트 광고 유형">
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 pt-3 pb-4" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12 mb-3">
                    <h5 style="font-weight: 900;color:#079aca">Display Banner - 무료
                    </h5>
                    <h1 class="display-4" style="font-weight: 900">네트워크 디스플레이 배너</h1>
                    <p class="fw-bold">
                        국내 메인언론사 및 뉴스기사 또는 제휴되어있는<br>
                        사이트 내 다양한 방식으로 사이즈별 네트워크 배너 노출
                    </p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-xl-3 col-md-6 mb-3 text-center">
                    <img src="{{url('/')}}/around/images/banner/google_main_ (1).png" alt="GDN">
                </div>
                <div class="col-xl-3 col-md-6 mb-3 text-center">
                    <img src="{{url('/')}}/around/images/banner/google_main_ (2).png" alt="모비온">
                </div>
                <div class="col-xl-3 col-md-6 mb-3 text-center">
                    <img src="{{url('/')}}/around/images/banner/google_main_ (3).png" alt="KAKAO MOMENT">
                </div>
                <div class="col-xl-3 col-md-6 mb-3 text-center">
                    <img src="{{url('/')}}/around/images/banner/google_main_ (4).png" alt="타겟팅게이츠">
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 pt-3 pb-4">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 mb-3">
                    <h5 style="font-weight: 900;color:#079aca">Cooperating Company
                    </h5>
                    <h1 class="display-4" style="font-weight: 900">배너광고 제휴업체</h1>
                </div>
            </div>
            <div class="row mt-3 text-center">
                <img src="{{url('/')}}/around/images/banner/image 20.png" alt="배너광고 제휴업체">
                
            </div>
        </div>
    </section>
    <section class="mt-5 pt-3 pb-4" style="background-color: #f1f1f1">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12 mb-3">
                    <h5 style="font-weight: 900;color:#079aca">Targeting
                    </h5>
                    <h1 class="display-4" style="font-weight: 900">배너광고의 특징 및 타겟팅</h1>
                </div>
            </div>
            <div class="row mt-3 text-center">
                <img class="d-none d-md-block" src="{{url('/')}}/around/images/banner/google_targeting.png" alt="배너광고의 특징 및 타겟팅">
                <img class="d-block d-md-none" src="{{url('/')}}/around/images/banner/google_targeting_mo.png" alt="배너광고의 특징 및 타겟팅">
                
            </div>
        </div>
    </section>
@endsection
@section('javascript_just_before_body')
@endsection
