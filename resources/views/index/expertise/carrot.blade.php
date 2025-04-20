@extends('layouts.front')
@section('inside_head_tag')
    <style>
        .company_title {
            width: 100%;
            padding: 5em 0 5em;
            text-align: center;
            background: url('{{ url('/') }}/around/images/main_after.png') no-repeat 60% 60%;
        }

        .video-wrapper {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
            /* 16:9 aspect ratio */
            height: 0;
        }

        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
@endsection
@section('content')
    <section class="mb-5 pt-5 pb-4" style="background-color:#ff7234">
        <div class="container">
            <div class="row my-5">
                <div class="col-12 mb-3">
                    <h5 style="font-weight: 900;color:white">
                        Daangn Advertising - 무료
                    </h5>
                    <h1 class="display-4" style="font-weight: 900;color:white">당근마켓 광고</h1>
                </div>
                <div class="col-xl-6 mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/dg_main.png" alt="당근마켓 Main Image">
                </div>
                <div class="col-xl-5 offset-xl-1 mb-3">
                    <div class="mt-5">
                        <h5 class="text-white fw-bold">
                            01 전 국민의 3명 중 1명이 이용하고 있어요
                        </h5>
                        <p class="text-white ms-4">* 누적 가입자 수 3,900만 / 월 이용자 수(MAU) 약 1,900만</p>
                    </div>
                    <div>
                        <h5 class="text-white fw-bold">
                            02 대한민국 모든 동네의 정보가 모여있어요
                        </h5>
                        <p class="text-white ms-4">* 커뮤니티 / 중고거래 / 동네가게 / 부동산 / 알바 등</p>
                    </div>
                    <div>
                        <h5 class="text-white fw-bold">
                            03 유저들의 충성도 및 선호도가 높아요
                        </h5>
                        <p class="text-white ms-4">* 주간 방문 빈도 1.92일 / 1인당 월 평균 64회 이용</p>
                    </div>
                    <div class="mt-5 d-flex">
                        <p class="text-white ms-auto mt-5">* 2024년 6월 당근 내부 데이터 기준</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="h2" style="font-weight: 900">핵심 소비층을 대상으로 광고 노출 가능</h2>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-6 mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/dg_graph1.png" alt="당근마켓 연령대별 비율">
                </div>
                <div class="col-xl-6 mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/dg_graph2.png" alt="당근마켓 성별 비율">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-5" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h2 class="h2" style="font-weight: 900">구매 의도를 가진 유저들의 적극적인 액션</h2>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-6 mb-3 text-center mt-5">
                    <img src="{{ url('/') }}/around/images/new/dg_graph3.png" alt="구매 의도를 가진 유저들의 적극적인 액션">
                </div>
                <div class="col-xl-6 mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/dg_graph4.png" alt="구매 의도를 가진 유저들의 적극적인 액션">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">Daangn Professional Mode</h5>
                    <h1 class="display-4" style="font-weight: 900">당근 전문가 모드</h1>
                    <p>전문가 모드는 셀프 서빙 광고 플랫폼으로 목표 달성을 위해 필요한 다양한 타겟팅과 정교한 관리 기능을 제공합니다.</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12 d-none d-lg-block mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/dg_professional.png" alt="당근마켓 전문가 모드">
                </div>
                <div class="col-xl-6 d-block d-lg-none mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/m_dg_professional.png" alt="당근마켓 전문가 모드">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-5" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row mt-4">
                <div class="col-xl-6 mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/dg_ad1.png" alt="당근마켓 네이티브 피드 광고">
                </div>
                <div class="col-xl-6 mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/dg_ad2.png" alt="당근마켓 카달로그 상품광고">
                </div>
            </div>
        </div>
    </section>
    <section class="pb-5 my-5">
        <div class="container">
            <div class="row mt-5">
                <div class="row mt-4">
                    <div class="col-xl-12 mb-3 text-center">
                        <h2 class="h2" style="font-weight: 900">전문가 모드 활용 업체</h2>
                    </div>
                    <div class="col-xl-12 mb-3 text-center">
                        <div class="position-relative">

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
                                    "slidesPerView": 2
                                    }
                                }
                                }'>
                                <div class="swiper-wrapper">
                                    <!-- Item -->
                                    <div class="swiper-slide">
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <img src="{{ url('/') }}/around/images/new/dg_slide1.png"
                                                    alt="당근마켓 광고 슬라이드" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div class="swiper-slide">
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <img src="{{ url('/') }}/around/images/new/dg_slide2.png"
                                                    alt="당근마켓 광고 슬라이드" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div class="swiper-slide">
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <img src="{{ url('/') }}/around/images/new/dg_slide3.png"
                                                    alt="당근마켓 광고 슬라이드" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div class="swiper-slide">
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <img src="{{ url('/') }}/around/images/new/dg_slide4.png"
                                                    alt="당근마켓 광고 슬라이드" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div class="swiper-slide">
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <img src="{{ url('/') }}/around/images/new/dg_slide5.png"
                                                    alt="당근마켓 광고 슬라이드" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div class="swiper-slide">
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <img src="{{ url('/') }}/around/images/new/dg_slide6.png"
                                                    alt="당근마켓 광고 슬라이드" />
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
        </div>
    </section>
@endsection
@section('javascript_just_before_body')
@endsection
