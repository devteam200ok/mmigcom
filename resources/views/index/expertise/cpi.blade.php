@extends('layouts.front')
@section('inside_head_tag')
    <style>
        .company_title {
            width: 100%;
            padding: 5em 0 5em;
            text-align: center;
            background: url('{{ url('/') }}/around/images/main_after.png') no-repeat 60% 60%;
        }
    </style>
@endsection
@section('content')
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca">앱 마케팅</h5>
                    <h1 class="display-4" style="font-weight: 900">앱 마케팅이란?</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 d-none d-md-block text-center">
                    <img src="{{ url('/') }}/around/images/cpi/app_marketing_main.png" alt="구글 검색광고">
                </div>
                <div class="col-12 d-block d-md-none text-center">
                    <img src="{{ url('/') }}/around/images/cpi/app_marketing_main_mo.png" alt="구글 검색광고">
                </div>
                <div class="col-12 text-center mt-3">
                    <h5 class="mb-3" style="font-weight: 900;">앱 출시 후 어플의 카테고리에 맞는 타겟팅에게 앱 설치를 유도하는 마케팅 전략
                    </h5>
                    <p>어플 설치 유도 광고를 노출하여 앱 설치 수를 극대화하는 목적형 광고</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 my-5" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca">Introduce app marketing</h5>
                    <h1 class="display-5" style="font-weight: 900">UAC/Apple Search AD<br>
                        광고단가 및 진행내용소개</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center mb-3 d-none d-lg-block">
                    <img src="{{ url('/') }}/around/images/cpi/uac_intro.png" alt="UAC/Apple Search AD">
                </div>
                <div class="col-12 text-center mb-3 d-block d-lg-none">
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
                                            <img src="{{ url('/') }}/around/images/cpi/uac_intro_mo1.png"
                                                alt="광고진행전략" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/cpi/uac_intro_mo2.png"
                                                alt="노출방식" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/cpi/uac_intro_mo3.png"
                                                alt="설치단가" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/cpi/uac_intro_mo4.png"
                                                alt="운영키워드쿼리정보 활용" />
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
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca">UAC AD 상세소개</h5>
                    <h1 class="display-4" style="font-weight: 900">UAC (Universal App Campaign)</h1>
                    <p>
                        구글 매체를 활용한 가장 대표적인 앱설치 광고<br>
                        모든 구글 네트워크(구글플레이스토어, 구글, AdMob, mGDN, 유튜브 등) 및 IOS에 노출 유저들의 다양한 사용패턴에 따라 자동화된 머신러닝 기반의 통합 앱 캠페인
                        광고<br>
                        가장 넓은 커버리지를 보유, 캠페인 최적화 기간이 있으므로 장기적으로 진행 시 효과적인 매체
                    </p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center mb-3">
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
                                            <img src="{{ url('/') }}/around/images/cpi/uac_slide(1).png"
                                                alt="밴드/카페피드 네이티브 이미지" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/cpi/uac_slide(2).png"
                                                alt="네이버 모바일 메인 네이티브 이미지" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/cpi/uac_slide(3).png"
                                                alt="네이버 모바일 메인 이미지 배너" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/cpi/uac_slide(4).png"
                                                alt="네이버 모바일 서브 네이티브 이미지" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/cpi/uac_slide(5).png"
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
    </section>
    <section class="py-5" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca">앱 마케팅</h5>
                    <h1 class="display-4" style="font-weight: 900">Apple Search AD 상세소개</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 d-none d-md-block text-center">
                    <img src="{{ url('/') }}/around/images/cpi/apple_main.png" alt="앱 마케팅">
                </div>
                <div class="col-12 d-block d-md-none text-center">
                    <img src="{{ url('/') }}/around/images/cpi/apple_main_mo.png" alt="앱 마케팅">
                </div>
                <div class="col-12 text-center mt-3">
                    <h5 class="mb-3" style="font-weight: 900;">
                        IOS 앱스토어 내 등록한 키워드 검색 시 노출되는 광고상품<br>
                        앱설치 최종단계 사용자를 타겟팅하므로 높은 전환율이 강점

                    </h5>
                    <p>브랜드키워드, 경쟁사키워드 등 앱 관련 키워드를 등록하여 입찰가를 걸어두는 형태<br>
                        고객유형(모든 사용자, 새로운 사용자) 및 기본적인 인구통계정보(성별, 연령대) 선택하여 타겟팅 가능</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-5" style="background-color:#4a4a4a">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:white;">앱 마케팅</h5>
                    <h1 class="display-4" style="font-weight: 900;color:white">보상형광고 CPI</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 d-none d-md-block text-center">
                    <img src="{{ url('/') }}/around/images/cpi/app_cpi_main.png" alt="보상형광고 CPI란?">
                </div>
                <div class="col-12 d-block d-md-none text-center">
                    <img src="{{ url('/') }}/around/images/cpi/app_cpi_main_mo.png" alt="보상형광고 CPI란?">
                </div>
                <div class="col-12 text-center mt-3">
                    <h5 class="mb-3" style="font-weight: 900;color:white">앱 설치 시 이용자에게 적립금, 포인트 등 보상을 제공하는 광고상품, 리워드형광고
                    </h5>
                    <p class="text-white">저렴한 설치당 단가로 단시간 내 폭발적인 다운로드수를 얻을 수 있음 설치 시(CPI), 설치 후 실행 시(CPE), 설치 후 회원가입 및 구매(CPA) 당 과금 선택 가능 ex)
                        캐시슬라이드, 네이버쿠키오븐, 버즈빌</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca">Reward detail</h5>
                    <h1 class="display-4" style="font-weight: 900">Reward 상세광고유형</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-2 offset-xl-1 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body text-center px-3 py-4">
                            <h4 class="mt-3" style="font-weight: 900;">제목<br>설치형</h4>
                            <p>
                                100% 실제유저 국내 최저가, 뱃지 적용과 설치 수 및 인기 무료 순위 상승
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body text-center px-3 py-4">
                            <h4 class="mt-3" style="font-weight: 900;">키워드선택<br>
                                설치형</h4>
                            <p>
                                키워드 검색순위를 높이기 위한 설치
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body text-center px-3 py-4">
                            <h4 class="mt-3" style="font-weight: 900;">논리워드<br>
                                설치형</h4>
                            <p>리워드 없이 설치를 유도하는 마케팅 , 수천 개의 제휴회사 동시 광고 배포</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body text-center px-3 py-4">
                            <h4 class="mt-3" style="font-weight: 900;">악성리뷰<br>
                                내리기</h4>
                            <p>최 상단 악성리뷰 끌어내리기 , 국내단독기술보유기업</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-12 mb-3">
                    <div class="text-center d-none d-xl-block">
                        <h5 class="mb-2" style="font-weight: 900;">실행형</h5>
                        <h5 class="mb-2" style="font-weight: 900;">리뷰형</h5>
                        <h5 class="mb-2" style="font-weight: 900;">회원가입형</h5>
                        <h5 class="mb-2" style="font-weight: 900;">원스토어설치형</h5>
                        <h5 class="mb-2" style="font-weight: 900;">ios설치형</h5>
                    </div>
                    <div class="d-flex justify-content-between d-block d-xl-none">
                        <h6 class="mb-2" style="font-weight: 900;">실행형</h6>
                        <h6 class="mb-2" style="font-weight: 900;">리뷰형</h6>
                        <h6 class="mb-2" style="font-weight: 900;">회원가입형</h6>
                        <h6 class="mb-2" style="font-weight: 900;">원스토어설치형</h6>
                        <h6 class="mb-2" style="font-weight: 900;">ios설치형</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mt-5" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 class="" style="font-weight: 900;color:#079aca;">Reward 추천 진행방식설명</h5>
                    <h1 class="display-4" style="font-weight: 900">키워드선택설치형</h1>
                    <p>어느 정도 순위 인입 시 키워드 선택설치 진행추천</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center mt-3">
                    <h5 class="mb-3" style="font-weight: 900;">[ 선택설치는 2,000개 정도 넣어놓으면 순위상승을 확인 할 수 있고<br>
                        한번에 높은 순위를 올리려면 1만건 씩 진행하면 좋다 ]<br>
                        최소집행 1천건, 5천 건 이상 설치집행 시 할인가 적용.
                    </h5>
                    <h5 style="font-weight: 900;">모든 기준은 스토어 내 동종경쟁<br>
                        상위 어플리케이션 설치 수 / 평점 / 리뷰를 토대로 진행 건수를 대행사와 광고주 측 협의결정
                    </h5>

                </div>
            </div>
        </div>
    </section>
    <section class="py-5" style="background-color:#1676f3">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:white;">앱 마케팅</h5>
                    <h1 class="display-4" style="font-weight: 900;color:white">페이스북/인스타그램 SNS 스폰서광고</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 d-none d-md-block text-center">
                    <img src="{{ url('/') }}/around/images/cpi/sns_sponser_main.png" alt="페이스북/인스타그램 SNS 스폰서광고">
                </div>
                <div class="col-12 d-block d-md-none text-center">
                    <img src="{{ url('/') }}/around/images/cpi/sns_sponser_main_mo.png" alt="페이스북/인스타그램 SNS 스폰서광고">
                </div>
                <div class="col-12 text-center mt-3">
                    <h5 class="mb-3" style="font-weight: 900;color:white">페이스북/인스타그램에 노출되는 앱설치광고 앱설치와 함께<br>
                        앱에 대한 댓글, 공유, 좋아요 등 인지도와 참여도를 높일 수 있는 광고매체
                    </h5>
                    <p class="text-white">CPI(앱설치당 과금)선택 가능하여 낮은 비용으로 높은 도달율을 얻을 수 있는 캠페인</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">앱 마케팅</h5>
                    <h1 class="display-4" style="font-weight: 900">디스플레이 광고 DA</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 d-none d-md-block text-center">
                    <img src="{{ url('/') }}/around/images/cpi/da_main.png" alt="디스플레이 광고 DA란">
                </div>
                <div class="col-12 d-block d-md-none text-center">
                    <img src="{{ url('/') }}/around/images/cpi/da_main_mo.png" alt="디스플레이 광고 DA란">
                </div>
                <div class="col-12 text-center mt-3">
                    <h5 class="mb-3" style="font-weight: 900;">웹사이트, 앱 내에 노출되는 이미지(배너)를 통해 앱광고를 노출하는 광고형태
                    </h5>
                    <p>여러 매체사가 있으며 매체사의 독점지면과 독점데이터를 활용하여 앱설치를 유도</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row mt-4">
                <div class="col-12 text-center mb-3 d-block d-lg-none">
                    <img class="my-3" src="{{ url('/') }}/around/images/cpi/mo_da_slide (1).png" alt="카카오모먼트">
                    <img class="my-3" src="{{ url('/') }}/around/images/cpi/mo_da_slide (2).png" alt="에이스트레이터">
                </div>
                <div class="col-12 text-center mb-3 d-none d-lg-block">
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
                            "slidesPerView": 1
                            },
                            "1000": {
                            "slidesPerView": 1
                            }
                        }
                        }'>
                            <div class="swiper-wrapper">
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/cpi/da_slide (1).png"
                                                alt="카카오모먼트 이미지" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/cpi/da_slide (2).png"
                                                alt="에이스트레이터 이미지" />
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
@endsection
@section('javascript_just_before_body')
@endsection
