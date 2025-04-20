@extends('layouts.front')
@section('inside_head_tag')
    <style>

    </style>
@endsection
@section('content')
    <section class="py-5 mb-5" style="background-color:#06cc80">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="company_title mt-5">
                        <h5 style="font-weight: 900;color:white;">검색마케팅 - 무료</h5>
                        <h1 class="display-4" style="font-weight: 900;color:white">NAVER 사이트 검색광고란?</h1>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 d-none d-md-block">
                    <img src="{{ url('/') }}/around/images/search/naversite_main.png" alt="NAVER 사이트 검색광고">
                </div>
                <div class="col-12 d-block d-md-none">
                    <img src="{{ url('/') }}/around/images/search/naversite_main_mo.png" alt="NAVER 사이트 검색광고">
                </div>
                <div class="col-12 text-center mt-3">
                    <h5 style="font-weight: 900;color:white">네이버 통합검색 및 네이버 내/외부 페이지의 검색 결과에 노출되는 네이버 대표 검색광고 상품</h5>
                    <p class="text-white">고객이 광고를 클릭하고 사이트에 방문한 경우에만 광고비를 지불하는 종량제 방식의 상품</p>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 style="font-weight: 900;color:#079aca;">Search AD</h5>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-xl-12">
                    <h1 class="display-4" style="font-weight: 900">사이트 검색광고</h1>
                    <br>
                    <p class="fw-bold">
                        광고는 제목과 설명문구, 사이트 URL이 함께 노출됩니다. 사이트검색광고는 로그분석을 통해 철저한 데이터 분석이 가능합니다.<br>
                        광고 효과 및 전략에 따라 언제든지 광고를 노출/중단할 수 있습니다. 광고주가 키워드에 적용한 입찰가와 광고 진행 중 얻은 품질지수에 의해 광고 순위가 결정되고 노출됩니다.
                    </p>
                </div>
                <div class="col-xl-12 mt-4">
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
                                            <img src="{{ url('/') }}/around/images/search/naversite_slide_biz.png"
                                                alt="비즈사이트">
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/search/naversite_slide_mobile.png"
                                                alt="모바일 검색">
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/search/naversite_slide_plus.png"
                                                alt="광고 더 보기">
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/search/naversite_slide_power.png"
                                                alt="파워링크">
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/search/naversite_slide_shopping.png"
                                                alt="네이버 쇼핑">
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/search/naversite_slide_tab.png"
                                                alt="검색 탭">
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
    <section class="py-5 my-5" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">검색마케팅</h5>
                    <h1 class="display-4" style="font-weight: 900">쇼핑검색광고란?</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-6 mb-3">
                    <img src="{{ url('/') }}/around/images/search/searchad_main-1.png" alt="NAVER 사이트 검색광고">
                </div>
                <div class="col-xl-6 mb-3">
                    <img src="{{ url('/') }}/around/images/search/searchad_main-2.png" alt="NAVER 사이트 검색광고">
                </div>
                <div class="col-12 text-center mt-3">
                    <h5 style="font-weight: 900;">광고 노출 영역을 네이버 쇼핑으로 확장하고, 구매자에게는 추가 혜택을 제공하는 상품 단위의 이미지형 검색광고</h5>
                    <p>광고비를 지불하는 종량제 방식의 상품</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 my-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">Shopping Search AD
                    </h5>
                    <h1 class="display-4" style="font-weight: 900">네이버 쇼핑 검색광고</h1>
                    <p class="mt-4">
                        쇼핑검색광고는 상품을 구매하고자 검색하는 이용자에게 네이버 쇼핑검색 결과 페이지에 효과적으로 노출하고, 모바일 콘텐츠 지면에서도 함께 만날 수 있는 이미지형 검색광고
                        상품입니다.<br>
                        광고 노출 영역을 네이버 쇼핑과 다양한 모바일 콘텐츠 매체로 확장하여 네이버 쇼핑의 수많은 상품 중 자신의 상품을 쉽고 빠르게 홍보할 수 있습니다.
                    </p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-6 mb-3">
                    <img src="{{ url('/') }}/around/images/search/searchad_combine.png" alt="통합형 PC / MOBILE 화면">
                    <div class="d-flex">
                        <div class="mx-auto text-center rounded d-flex" style="background-color:#edfbff">
                            <h6 class="mx-auto my-auto py-3 px-4" style="font-weight:900">통합형 PC / MOBILE 화면</h6>
                        </div>
                    </div>
                    <div class="text-center">
                        <p class="fw-bold text-dark mt-3">네이버 통합검색 (PC/모바일) 결과 ‘네이버쇼핑’ 영역 상단에 2개가 기본으로 노출</p>
                    </div>
                </div>
                <div class="col-xl-6 mb-3">
                    <img src="{{ url('/') }}/around/images/search/searchad_shoppingsearch.png"
                        alt="쇼핑검색 PC / MOBILE 화면">
                    <div class="d-flex">
                        <div class="mx-auto text-center rounded d-flex" style="background-color:#edfbff">
                            <h6 class="mx-auto my-auto py-3 px-4" style="font-weight:900">쇼핑검색 PC / MOBILE 화면</h6>
                        </div>
                    </div>
                    <div class="text-center">
                        <p class="fw-bold text-dark mt-3">네이버 쇼핑검색 (PC/모바일) 결과 페이지의 ‘상품리스트’ 영역 상단 및 중간에 광고가 3개씩 기본으로 노출</p>
                    </div>
                </div>
                <div class="col-12 text-center mt-3 d-none d-lg-block">
                    <img src="{{ url('/') }}/around/images/search/searchad_slide1.png" alt="콘텐츠 매체 노출">
                </div>
                <div class="col-12 text-center mt-3 d-none d-lg-block">
                    <img src="{{ url('/') }}/around/images/search/searchad_slide2.png" alt="카탈로그형 광고 클릭시 화면">
                </div>
                <div class="col-12 text-center mt-3 d-block d-lg-none">
                    <img src="{{ url('/') }}/around/images/search/searchad_slide2_mo.png" alt="콘텐츠 매체 노출">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 my-5" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">검색마케팅</h5>
                    <h1 class="display-4" style="font-weight: 900">콘텐츠 검색광고란?</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <img src="{{ url('/') }}/around/images/search/powercontents_main.png" alt="콘텐츠 검색광고란">
                </div>
                <div class="col-12 text-center mt-3">
                    <h5 style="font-weight: 900;">이용자에게는 신뢰성 있는 정보를 제공하고,<br>
                        광고주에게는 효과적인 브랜딩 기회와 전환 성과를 제공하는 네이버의 콘텐츠 마케팅 상품</h5>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5 py-5">
        <div class="container">
            <div class="row my-3">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca">Contents Search AD</h5>
                    <h1 class="display-4" style="font-weight: 900">네이버 콘텐츠 검색광고 (파워 콘텐츠)</h1>
                    <br>
                    <p class="fw-bold">
                        사용자의 정보 탐색 의도가 깊은 키워드에 대해 해당 분야의 전문가인 광고주가 블로그, 포스트, 카페 등의 콘텐츠를 이용해보다 정확하고 신뢰성 있는 정보를 제공하는
                        광고상품입니다.<br>
                        네이버 PC/모바일 통합검색 결과 페이지의 VIEW 영역 및 모바일 콘텐츠 지면에 제목, 설명 등의 정보와 썸네일 이미지가 함께 노출 됩니다.
                    </p>
                </div>
            </div>
            <div class="row mt-4 text-center">
                <div class="col-xl-4 mb-3">
                    <img src="{{ url('/') }}/around/images/search/powercontents_pc.png" alt="파워콘텐츠(pc)">
                </div>
                <div class="col-xl-4 mb-3">
                    <img src="{{ url('/') }}/around/images/search/powercontents_mobile.png" alt="파워콘텐츠(모바일)">
                </div>
                <div class="col-xl-4 mb-3">
                    <img src="{{ url('/') }}/around/images/search/powercontents_plus.png" alt="파워콘텐츠(더보기)">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 my-5" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">검색마케팅</h5>
                    <h1 class="display-4" style="font-weight: 900">브랜드 검색광고란?</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center d-none d-lg-block">
                    <img src="{{ url('/') }}/around/images/search/brand_main.png" alt="브랜드 검색광고">
                </div>
                <div class="col-12 text-center d-block d-lg-none">
                    <img src="{{ url('/') }}/around/images/search/brand_main_mo.png" alt="브랜드 검색광고">
                </div>
                <div class="col-12 text-center mt-3">
                    <h5 style="font-weight: 900;">브랜드 키워드 또는 브랜드와 연관성이 높은 키워드를 검색할 경우,<br>
                        해당 브랜드의 내용을 다양한 이미지와 함께 통합검색결과 최상단에 노출하는 콘텐츠 검색형 광고 상품</h5>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5 py-5">
        <div class="container">
            <div class="row my-3">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca">브랜드 검색광고</h5>
                    <h1 class="display-4" style="font-weight: 900">네이버 콘텐츠 검색광고 (파워 콘텐츠)</h1>
                    <br>
                    <p class="fw-bold">
                        사용자가 브랜드 키워드 검색 시, 통합검색 결과 상단에 브랜드와 관련된 최신 콘텐츠를 텍스트, 이미지, 동영상 등을 이용하여 노출하는 상품입니다.<br>
                        네이버의 비즈니스 플랫폼을 이용하여, 최신 브랜드 콘텐츠로 이용자와 소통하고 브랜딩 효과를 높일 수 있습니다.
                    </p>
                </div>
            </div>
            <div class="row mt-4 text-center d-none d-lg-block">
                <div class="col-xl-12 mb-3 text-center">
                    <h4 class="mb-3" style="font-weight: 900;">PC 브랜드 검색</h4>
                    <img src="{{ url('/') }}/around/images/search/brand_pc.png" alt="PC 브랜드 검색">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 mt-4 text-center">
                    <h4 class="mb-3" style="font-weight: 900;">MOBILE 브랜드 검색</h4>
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
                                            <img src="{{ url('/') }}/around/images/search/brand_mobile_slide (1).png"
                                                alt="라이트형 일반 - 이미지 좌측">
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/search/brand_mobile_slide (6).png"
                                                alt="라이트형 일반 - 이미지 우측">
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/search/brand_mobile_slide (2).png"
                                                alt="썸네일">
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/search/brand_mobile_slide (3).png"
                                                alt="프리미엄 - 와이드 썸네일">
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/search/brand_mobile_slide (4).png"
                                                alt="프리미엄 - 와이드 메뉴">
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/search/brand_mobile_slide (5).png"
                                                alt="프리미엄 - 오토플레이 메뉴">
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
    <section class="mt-5 py-5" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca">Brand Search AD
                    </h5>
                    <h1 class="display-4" style="font-weight: 900">노출방식</h1>
                    <br>
                    <p class="fw-bold">
                        네이버 통합검색 페이지 상단 영역에, 광고주가 구매한 브랜드 키워드에 대해 1개 광고가 단독 노출됩니다. 단, 상단 영역 노출은 보장되지 않으며, 사용자의 검색의도가 달라졌을 경우
                        브랜드검색 상단에 언제든지 콘텐츠검색이 노출될 수 있습니다.
                    </p>
                </div>
                <div class="col-xl-8 text-center">
                    <img src="{{ url('/') }}/around/images/search/brand_show.png" alt="노출방식">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">검색마케팅</h5>
                    <h1 class="display-4" style="font-weight: 900">신제품 검색광고란?</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <img src="{{ url('/') }}/around/images/search/click_main.png" alt="신제품 검색광고">
                </div>
                <div class="col-12 text-center mt-3">
                    <h5 style="font-weight: 900;">사이트가 아닌 상품 단위로 광고 상품 정보를 전달하기에 최적화된<br>
                        UI와 기능들을 제공하여 PC와 모바일을 통합검색 결과페이지에 노출</h5>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="py-5 mt-5" style="background-color:#edfbff">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">kakao Search advertising - 무료</h5>
                    <h1 class="display-4" style="font-weight: 900"><span style="color:#d5c700">카카오</span> 검색광고</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center mt-3">
                    <h5 style="font-weight: 900;">다음 카카오 검색 사용자에게 사이트와 상품 정보를 제공하는 카카오의 대표적인 마케팅.<br>
                        Daum, 카카오톡, 제휴 매체 등 다양한 지면에 검색 결과 또는 텍스트형 배너 형태로 노출</h5>
                </div>
                <div class="col-12 d-none d-md-block">
                    <img src="{{ url('/') }}/around/images/search/kakao.png" alt="카카오 검색광고">
                </div>
                <div class="col-12 d-block d-md-none">
                    <img src="{{ url('/') }}/around/images/search/kakao_mo.png" alt="카카오 검색광고">
                </div>
            </div>
        </div>
    </section> --}}
    <section class="py-5 mt-5" style="background-color:#FEE500">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#000000;">카카오 키워드 검색 광고 - 무료</h5>
                    <h1 class="display-4" style="font-weight: 900"><span style="color:#191919">카카오</span> 검색광고</h1>
                </div>
                <div class="col-12 text-start mt-3">
                    <h6 style="font-weight: 600;">주요 포털의 통합 검색 영역에 동시 노출되며
                        검색한 키워드와 연관성 있는 광고가 Daum, 카카오톡, 제휴 매체 등
                        다양한 지면에 검색 결과 또는 텍스트형 배너 형태로 노출되는 광고입니다.
                    </h6>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xl-6 mb-3">
                    <h4 class="mb-3 text-center" style="font-weight: 900;">Daum 및 검색 포털</h4>
                    <p class="text-center text-dark">Daum, 카카오톡, Nate 등 주요 포털 사이트에 노출되며 통합 검색 영역에 광고를 노출합니다.</p>
                    <div class="d-none d-md-block">
                        <img src="{{ url('/') }}/around/images/search_new/kakao_portal.png" alt="카카오 검색광고">
                    </div>
                    <div class="d-block d-md-none">
                        <img src="{{ url('/') }}/around/images/search_new/kakao_portal_mobile.png" alt="카카오 검색광고">
                    </div>
                </div>
                <div class="col-xl-6 mb-3">
                    <h4 class="mb-3 text-center" style="font-weight: 900;">콘텐츠
                        매체
                    </h4>
                    <p class="text-center text-dark">Daum PC 서비스(뉴스, 카페 등), Daum 모바일 앱/웹과 제휴 매체의 PC/모바일 지면에 컨텐츠의 연관도에 따라
                        노출됩니다.</p>
                    <div class="d-none d-md-block">
                        <img src="{{ url('/') }}/around/images/search_new/kakao_content.png" alt="카카오 검색광고">
                    </div>
                    <div class="d-block d-md-none">
                        <img src="{{ url('/') }}/around/images/search_new/kakao_content_mobile.png" alt="카카오 검색광고">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="" style="border-color:#191919">
    <section class="py-5" style="background-color:#FEE500">
        <div class="container">
            <div class="row my-3">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#000000;">카카오 키워드 검색 광고 - 무료</h5>
                    <h1 class="display-4" style="font-weight: 900"><span style="color:#191919">카카오</span> 검색광고(확장 소재)
                    </h1>
                </div>
                <div class="col-12 text-start mt-3">
                    <h6 style="font-weight: 600;">다양한 형태로 추가 정보를 전달하는 새로운 광고 소재로, 키워드 광고의
                        기본 소재에 이미지, 가격 등을 추가로 노출합니다. 여러 확장 소재가 함께
                        노출되는 확장 소재 믹스 타입으로도 사용자의 이목을 끌 수 있습니다.
                        Daum 모바일 앱/웹, PC 검색 결과 등에 노출됩니다. 풍부한 정보를
                        주목도 높게 보여주는 확장 소재를 통해 광고 효과 상승을 기대할 수 있습니다.
                    </h6>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 mt-4 text-center">
                    <h4 class="mb-3" style="font-weight: 900;">Daum 통합 검색</h4>
                    <p class="text-center text-dark">
                        Daum 모바일 앱/웹, PC 검색 결과 등 다양한 곳에 노출됩니다.
                    </p>
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
                                            <div class="text-center">
                                                <h4 style="color:#191919">추가 제목형</h4>
                                            </div>
                                            <img
                                                src="{{ url('/') }}/around/images/search_new/kakao_search_slide1.png">
                                            <p class="text-start" style="color:#191919">
                                                제목 문구 아래 설명 형태로 부가적인 마케팅 메시지를 전달할 수 있습니다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <h4 style="color:#191919">부가 링크형
                                                </h4>
                                            </div>
                                            <img
                                                src="{{ url('/') }}/around/images/search_new/kakao_search_slide2.png">
                                            <p class="text-start" style="color:#191919">
                                                주요 상품 또는 핵심 페이지 경로를 부가 링크
                                                형태로 제공해 잠재 고객의 즉각적 유입을
                                                유도할 수 있습니다.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <h4 style="color:#191919">가격 테이블형
                                                </h4>
                                            </div>
                                            <img
                                                src="{{ url('/') }}/around/images/search_new/kakao_search_slide3.png">
                                            <p class="text-start" style="color:#191919">
                                                사이트 진입 전 주요 상품의 가격 정보를 제시해
                                                구매 가능성이 있는 사용자의 유입을 높일 수
                                                있습니다.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <h4 style="color:#191919">썸네일 이미지형
                                                </h4>
                                            </div>
                                            <img
                                                src="{{ url('/') }}/around/images/search_new/kakao_search_slide4.png">
                                            <p class="text-start" style="color:#191919">
                                                이미지 형태의 소재를 추가로 노출해 시각적
                                                주목도를 높이고, 클릭률 향상을 기대할 수
                                                있습니다.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <h4 style="color:#191919">멀티 썸네일형
                                                </h4>
                                            </div>
                                            <img
                                                src="{{ url('/') }}/around/images/search_new/kakao_search_slide5.png">
                                            <p class="text-start" style="color:#191919">
                                                3개의 이미지를 노출해 상품과 정보를
                                                시각적으로 더욱 풍부하게 전달할 수 있습니다.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <h4 style="color:#191919">말머리형</h4>
                                            </div>
                                            <img
                                                src="{{ url('/') }}/around/images/search_new/kakao_search_slide6.png">
                                            <p class="text-start" style="color:#191919">
                                                할인, 이벤트 등 말머리 형태의 소재로 차별화된
                                                브랜드 정보를 제공할 수 있습니다.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <h4 style="color:#191919">계산하기형</h4>
                                            </div>
                                            <img
                                                src="{{ url('/') }}/around/images/search_new/kakao_search_slide7.png">
                                            <p class="text-start" style="color:#191919">
                                                보험/대출 업종에 한해 계산하기 버튼을 제공해
                                                주는 형태로 보험료/한도/이자 등을 바로
                                                확인할 수 있는 페이지로 연결시킵니다.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <h4 style="color:#191919">전화번호형</h4>
                                            </div>
                                            <img
                                                src="{{ url('/') }}/around/images/search_new/kakao_search_slide8.png">
                                            <p class="text-start" style="color:#191919">
                                                전화번호 아이콘 클릭 시 설정한 연락처로 바로
                                                연결할 수 있습니다.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <h4 style="color:#191919">톡 채널형</h4>
                                            </div>
                                            <img
                                                src="{{ url('/') }}/around/images/search_new/kakao_search_slide9.png">
                                            <p class="text-start" style="color:#191919">
                                                카카오톡 채널 연결 시 사용자에게 지속적인
                                                마케팅 메시지를 제공할 수 있는 채널 구독을
                                                유도할 수 있습니다.

                                            </p>
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
    {{-- <section class="py-5" style="background-color:#edfbff">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">google Search advertising</h5>
                    <h1 class="display-4" style="font-weight: 900"><span style="color:#f35f36">구글</span> 검색광고</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center mt-3">
                    <h5 class="mb-3" style="font-weight: 900;">구글 검색광고는 사용자의 나이, 위치 등을 모두 고려하여 사용자가 입력한 검색어와 가장 연관성이 높은
                        광고를 노출시킵니다.
                    </h5>
                    <h5 style="font-weight: 900;color:#079aca">확장검색 ㅣ 변형 확장 검색 ㅣ 구문검색 ㅣ 일치검색
                    </h5>
                </div>
                <div class="col-12 d-none d-md-block text-center">
                    <img src="{{ url('/') }}/around/images/search/google.png" alt="구글 검색광고">
                </div>
                <div class="col-12 d-block d-md-none text-center">
                    <img src="{{ url('/') }}/around/images/search/google_mo.png" alt="구글 검색광고">
                </div>
            </div>
        </div>
    </section> --}}
    <section class="py-5" style="background-color:#4285F4">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#ffffff;">시작은 쉽고 편리하게, 광고 효율은 더 높게!</h5>
                    <h1 class="display-4 text-white" style="font-weight: 900">구글 검색 광고</h1>
                </div>
                <div class="col-12 text-start mt-3">
                    <h6 class="text-white" style="font-weight: 600;">
                        구글의 검색 광고 캠페인은 Google, 유튜브 검색 시 노출됩니다. 광고 단가는 높은 편이지만 전화, 이메일 문의, 양식 제출 등 전환률이
                        가장 높습니다. 검색 캠페인은 내가 광고하는 제품이나 서비스를 적극적으로 검색하는 고객에게 광고할 수 있으므로 구체적인 타겟팅이
                        가능합니다. 검색 캠페인은 광고 확장을 추가하여 업체 위치나 전화번호, 서브 링크 등 비즈니스 정보를 추가로 제공할 수도 있습니다.
                    </h6>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xl-12 text-center mb-3">
                    <img src="{{ url('/') }}/around/images/search_new/google.svg">
                </div>
            </div>
        </div>
    </section>
    <hr class="" style="border-color:#ffffff">
    <section class="py-5" style="background-color:#4285F4">
        <div class="container">
            <div class="row my-3">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#ffffff;">구글 검색 광고</h5>
                    <h1 class="display-4 text-white" style="font-weight: 900">구글 통합 검색</h1>
                </div>
                <div class="col-12 text-start mt-3">
                    <h6 style="font-weight: 600;color:#ffffff">
                        구글 통합 검색에 노출되는 텍스트 광고는 3개의 광고 제목과 2개의
                        설명을 입력하면 입력한 내용이 그대로 노출되는 광고 형식입니다.
                        설명은 제품이나 서비스에 대한 세부 정보를 강조하는 부분이므로
                        고객의 액션을 유도할 수 있도록 [지금 구매하기, 무료 상담]과 같은
                        ‘클릭 유도 문안‘을 사용하는 것이 좋습니다.
                    </h6>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xl-6 mb-3 text-center">
                    <h4 class="mb-3 text-center text-white" style="font-weight: 900;">검색 결과 상단</h4>
                    <img src="{{ url('/') }}/around/images/search_new/google_search_top.svg" alt="구글 검색 결과 상단">
                </div>
                <div class="col-xl-6 mb-3 text-center">
                    <h4 class="mb-3 text-center text-white" style="font-weight: 900;">검색 결과 하단</h4>
                    <img src="{{ url('/') }}/around/images/search_new/google_search_bottom.svg" alt="구글 검색 결과 하단">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xl-12 text-center mb-4 mt-5">
                    <span class="rounded bg-white text-dark py-2 px-3 fw-bold">실제 노출 예시</span>
                </div>
                <div class="col-xl-6 mb-3 text-center">
                    <h4 class="mb-3 text-center text-white" style="font-weight: 900;">PC 검색 결과 상단</h4>
                    <img src="{{ url('/') }}/around/images/search_new/google_search_pc_top.png"
                        alt="구글 PC 검색 결과 상단">
                </div>
                <div class="col-xl-6 mb-3 text-center">
                    <h4 class="mb-3 text-center text-white" style="font-weight: 900;">PC 검색 결과 하단</h4>
                    <img src="{{ url('/') }}/around/images/search_new/google_search_pc_bottom.png"
                        alt="구글 PC 검색 결과 하단">
                </div>
                <div class="col-xl-6 mb-3 text-center">
                    <h4 class="mb-3 text-center text-white" style="font-weight: 900;">모바일 검색 결과 상단</h4>
                    <img src="{{ url('/') }}/around/images/search_new/google_search_mobile_top.png"
                        alt="구글 모바일 검색 결과 상단">
                </div>
                <div class="col-xl-6 mb-3 text-center">
                    <h4 class="mb-3 text-center text-white" style="font-weight: 900;">모바일 검색 결과 하단</h4>
                    <img src="{{ url('/') }}/around/images/search_new/google_search_mobile_bottom.png"
                        alt="구글 모바일 검색 결과 하단">
                </div>
            </div>
        </div>
    </section>
    <hr class="" style="border-color:#ffffff">
    <section class="py-5" style="background-color:#4285F4">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#ffffff;">구글 검색 광고</h5>
                    <h1 class="display-4 text-white" style="font-weight: 900">유튜브 검색 광고</h1>
                </div>
                <div class="col-12 text-start mt-3">
                    <h6 class="text-white" style="font-weight: 600;">
                        유튜브도 구글 검색 파트너 사이트이므로, 검색 캠페인에서 구글 검색
                        파트너 포함 시 유튜브에 광고 노출이 가능합니다.
                        <br>
                        유튜브 검색 광고는 유튜브에서 검색 시, 유튜브 검색 결과 최상단에 노출됩니다.
                    </h6>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xl-8 offset-xl-2 text-center mb-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ url('/') }}/around/images/search_new/google_youtube.svg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xl-12 text-center mb-4 mt-5">
                    <span class="rounded bg-white text-dark py-2 px-3 fw-bold">실제 노출 예시</span>
                </div>
                <div class="col-xl-6 mb-3 text-center">
                    <h4 class="mb-3 text-center text-white" style="font-weight: 900;">PC</h4>
                    <img src="{{ url('/') }}/around/images/search_new/google_youtube_pc.png" alt="구글 Youtube PC">
                </div>
                <div class="col-xl-6 mb-3 text-center">
                    <h4 class="mb-3 text-center text-white" style="font-weight: 900;">모바일</h4>
                    <img src="{{ url('/') }}/around/images/search_new/google_youtube_mobile.png"
                        alt="구글 Youtube 모바일" style="max-height:600px">
                </div>
            </div>
        </div>
        </div>
    </section>
    <hr class="" style="border-color:#ffffff">
    <section class="py-5" style="background-color:#4285F4">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#ffffff;">구글 검색 광고</h5>
                    <h1 class="display-4 text-white" style="font-weight: 900">반응형 검색 광고</h1>
                </div>
                <div class="col-12 text-start mt-3">
                    <h6 class="text-white" style="font-weight: 600;">
                        반응형 검색 광고(RSA, Responsive Search Ads)는 15개의 광고
                        제목과 4개의 설명을 입력하면, 머신 러닝이 여러 조합을 테스트하여
                        실적이 좋은 조합을 노출시키는 광고입니다. RSA는 고객의 검색어에
                        가장 관련성 높은 조합으로 광고를 조정하여 캠페인의 실적을
                        향상시킵니다.
                    </h6>
                    <h6 class="text-white" style="font-weight: 600;">
                        반응형 검색 광고(RSA, Responsive Search Ads)는 구글 검색 캠페인 시작 시 기본 광고 유형이 되어,
                        검색 캠페인 초기 세팅 시 RSA 광고 작성 화면이 노출됩니다. 세팅된 광고는 Google 통합 검색의 검색 결과에 노출됩니다.
                    </h6>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xl-12 text-center mb-4 mt-2">
                    <h5 class="text-white fw-bold">반응형 검색 광고 설정</h5>
                </div>
                <div class="col-xl-8 offset-xl-2 text-center mb-3">
                    <div class="col-xl-12 text-center mb-3" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; background: #000;">
                        <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" width="560" height="315" src="https://www.youtube.com/embed/mxdelKnGybM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('javascript_just_before_body')
@endsection
