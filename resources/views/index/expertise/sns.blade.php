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
    <section class="py-5 my-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">SNS마케팅</h5>
                    <h1 class="display-4" style="font-weight: 900">SNS 마케팅이란?</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12 text-center mb-3">
                    <img src="{{ url('/') }}/around/images/sns/snsmarketing_main.png" alt="SNS 마케팅">
                </div>
                <div class="col-xl-8 offset-xl-2 text-center mt-3">
                    <h5 style="font-weight: 900;">페이스북/인스타그램, 유튜브, 당근마켓 등에 노출되는 콘텐츠형 광고
                        SNS를 이용하는 유저들에게 퍼포먼스 및 브랜드 인지도를 함께 높일 수 있는 광고매체</h5>
                    <p>* CPM방식을 통한 낮은비용으로 높은 노출 및 도달을 달성할 수 있는 효과적인 광고</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 my-5" style="background-color:#edfbff">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">Facebook advertising
                    </h5>
                    <h1 class="display-4" style="font-weight: 900"><span style="color:#2b55bf">메타(Meta)</span> 광고</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12">
                    <p>페이스북/인스타그램에 노출되는 콘텐츠형 광고로 SNS를 이용하는 유저들에게
                        퍼포먼스 및 브랜드 인지도를 함께 높일 수 있는 광고매체. CPM 방식을 통한 낮은 비용으로 높은 노출 및 도달을 달성할 수 있는 효과적인 광고</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 my-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">Marketing Part</h5>
                    <h1 class="display-4" style="font-weight: 900">페이스북 마케팅 Part</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12">
                    <p>페이스북은 전 세계적으로 가장 많은 사용자를 보유한 실명 기반의 SNS이며, 인터넷 사용자가 가장 많은 시간을 보내는 SNS입니다. 페이스북을 이용하여 고객과 빠르게 커뮤니케이션을
                        해줌으로써 브랜드 홍보 지원을 할 수 있도록 활성화 시켜주는 것이 중요합니다. 글로벌 엠아이지는 페이스북에 게재되는 담벼락 글수, 친구, 좋아요 수치를 설정하여 체계적으로
                        관리합니다.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 my-5" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca">Advantages</h5>
                    <h1 class="display-4" style="font-weight: 900">페이스북 광고의 장점</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center mb-3 d-none d-lg-block">
                    <img src="{{ url('/') }}/around/images/sns/fb_advantages.png" alt="페이스북 광고의 장점">
                </div>
                <div class="col-12 text-center mb-3 d-block d-lg-none">
                    <img src="{{ url('/') }}/around/images/sns/fb_advantages_mo.png" alt="페이스북 광고의 장점">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 my-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">Reason</h5>
                    <h1 class="display-5" style="font-weight: 900">페이스북 마케팅이 필요한 이유</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12">
                    <p>페이스북이 마케팅이 필요한 이유는 통계자료부터 트렌드, 광고효과까지 다양합니다. 아래 내용을 확인하신 뒤 글로벌 엠아이지와 함께 페이스북 광고를 시작해보세요.<br>
                        다양하고 깊은 경험으로 광고효과를 극대화 해드리겠습니다.</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center mb-3">
                    <img src="{{ url('/') }}/around/images/sns/fb_reason.png" alt="페이스북 마케팅이 필요한 이유">
                </div>
                <div class="col-12 text-center">
                    <h4 class="display-7" style="font-weight: 900">페이스북 광고 노출위치</h4>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mt-5" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">Targeting</h5>
                    <h1 class="display-4" style="font-weight: 900">페이스북 타겟팅 유형</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12">
                    <p>페이스북 유저 데이터 기반으로 쿠키/IP기반의 타겟팅보다 정확도가 높은 편이며, 다양한 타겟 그룹을 원하는 조합으로 세팅 이 가능하다는 장점이 있음.</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center mb-3 d-none d-lg-block">
                    <img src="{{ url('/') }}/around/images/sns/fb_targeting_category.png" alt="페이스북 타겟팅 유형">
                </div>
                <div class="col-12 text-center mb-3 d-block d-lg-none">
                    <img src="{{ url('/') }}/around/images/sns/fb_targeting_category_mo.png" alt="페이스북 타겟팅 유형">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca">Sponser AD</h5>
                    <h1 class="display-6" style="font-weight: 900">가장 트렌디한 소셜미디어 플랫폼<br>
                        페이스북&인스타그램 스폰서 광고</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12">
                    <p>연령/지역/관심사 등 가입자의 정보를 바탕으로 한 타겟팅 등 정밀한 타겟팅 가능 뉴스피드 내 콘텐츠와 같은 형태로 노출되는 NativeAD로 광고 거부감 낮고 사용자 반응 (댓글,
                        좋아요 등) 유도 용이
                        (*페이스북 국내 이용자수 : 약 1,700만명 | 인스타그램 국내 이용자 수 : 약 1,100만명)</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center mb-3">
                    <img src="{{ url('/') }}/around/images/sns/fb_sponser_graph1.png" alt="가장 트렌디한 소셜미디어 플랫폼">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-4 offset-xl-2 mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/sns/fb_sponser_graph2.png" alt="가장 트렌디한 소셜미디어 플랫폼">
                </div>
                <div class="col-xl-4 mb-3">
                    <h4 class="display-7 mb-3 mt-5" style="font-weight: 900">SNS 스폰서 광고 특징</h4>
                    <p>
                        <i class="ai-like me-2"></i>로그인 방식의 사람(소비자) 중심 플랫폼<br>
                        <i class="ai-like me-2"></i>정교한 타겟팅 기능(옵션) 매체 유일<br>
                        <i class="ai-like me-2"></i>비즈니스 목표에 따른 자동화된 최적화 솔루션<br>
                        <i class="ai-like me-2"></i>목표에 적합한 지표 및 분석툴 제공
                    </p>
                    <h4 class="display-7 mb-3 mt-5" style="font-weight: 900">타겟팅 항목</h4>
                    <span class="badge bg-info fs-sm">#지역</span>
                    <span class="badge bg-info fs-sm">#성/연령</span>
                    <span class="badge bg-info fs-sm">#직장</span>
                    <span class="badge bg-info fs-sm">#관심사</span>
                    <span class="badge bg-info fs-sm">#리타겟팅</span>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 my-5" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca">AD Type</h5>
                    <h1 class="display-4" style="font-weight: 900">링크와 슬라이드광고</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12">
                    <p>페이스북광고는 링크광고와 슬라이드 광고 중 원하시는 유형을 선택하여 진행할 수 있습니다. 하시고자 하는 광고 목적에 맞는 유형을 선택해주세요.</p>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-xl-6 mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/sns/fb_ad_slide.png" alt="링크와 슬라이드광고">
                </div>
                <div class="col-xl-6 mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/sns/fb_ad_link.png" alt="링크와 슬라이드광고">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca">Pixel Data</h5>
                    <h1 class="display-4" style="font-weight: 900">픽셀은 제대로 된 페이스북 광고의 필수요소!</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12">
                    <p>웹사이트에 설치하여 페이스북 광고 캠페인의 직접적인 효과를 측정하는 프로그램 코드 타겟 유입을 유도해 전환으로 이어지는 행동 패턴을 기대할 때 꼭 필요한 요소</p>
                </div>
            </div>

            <div class="row mt-4">
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
                                "slidesPerView": 3
                                }
                            }
                            }'>
                            <div class="swiper-wrapper">
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/sns/fb_pixel_slide1_mo.png"
                                                alt="픽셀의 활용" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/sns/fb_pixel_slide2_mo1.png"
                                                alt="픽셀로 수집할 수 있는 DATA의 종류" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/sns/fb_pixel_slide2_mo2.png"
                                                alt="픽셀로 수집할 수 있는 DATA의 종류" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ url('/') }}/around/images/sns/fb_pixel_slide2_mo3.png"
                                                alt="픽셀로 수집할 수 있는 DATA의 종류" />
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
                    <h5 style="font-weight: 900;color:#079aca">Process</h5>
                    <h1 class="display-4" style="font-weight: 900">광고집행 프로세스</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-2 offset-xl-1 col-lg-4 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body px-3 py-4">
                            <h1 style="font-weight: 900;color:#079aca">01</h1>
                            <h5 style="font-weight: 900;">현황분석</h5>
                            <p>Before 캠페인 분석 업종 · 채널 · 시장분석 서비스 · 사이트 · 솔루션체크</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body px-3 py-4">
                            <h1 style="font-weight: 900;color:#079aca">02</h1>
                            <h5 style="font-weight: 900;">전략수립</h5>
                            <p>목표 KPI설정 목표 · 타겟 · 전략 설정 목표별 콘텐츠 기획</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body px-3 py-4">
                            <h1 style="font-weight: 900;color:#079aca">03</h1>
                            <h5 style="font-weight: 900;">광고운영</h5>
                            <p>픽셀 설치 광고 셋팅 소재제작</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body px-3 py-4">
                            <h1 style="font-weight: 900;color:#079aca">04</h1>
                            <h5 style="font-weight: 900;">효율분석/성과측정</h5>
                            <p>타겟별, 소재별 광고효율 측정 광고 성과 보고</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body px-3 py-4">
                            <h1 style="font-weight: 900;color:#079aca">05</h1>
                            <h5 style="font-weight: 900;">인사이트 도출</h5>
                            <p>캠페인 경과 분석 인사이트 도출 향후 전략 수립</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-5" style="background-color:#edfbff">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">Youtube advertising - 무료
                    </h5>
                    <h1 class="display-4" style="font-weight: 900"><span style="color:#ff0f0f">유튜브</span> 광고</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12">
                    <p>전세계 시청자들의 동영상 시청 플랫폼. 글로벌 동영상 플랫폼에 지금 광고하세요.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 my-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">Youtube marketing - 무료
                    </h5>
                    <h1 class="display-4" style="font-weight: 900"><span style="color:#ff0f0f">Youtube</span> 마케팅</h1>
                </div>
                <div class="col-xl-12">
                    <p>잠재고객이 YouTube에서 동영상을 시청하거나 검색할 때 광고를 게재하고<br>
                        잠재고객이 관심을 보일 때만 비용을 지불하면 되는 광고</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12 text-center mb-3 d-none d-lg-block">
                    <img src="{{ url('/') }}/around/images/sns/yt_main.png" alt="Youtube marketing">
                </div>
                <div class="col-xl-12 text-center mb-3 d-block d-lg-none">
                    <img src="{{ url('/') }}/around/images/sns/yt_main_mo1.png" alt="Youtube marketing">
                    <img src="{{ url('/') }}/around/images/sns/yt_main_mo2.png" alt="Youtube marketing">
                    <img src="{{ url('/') }}/around/images/sns/yt_main_mo3.png" alt="Youtube marketing">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 my-5" style="background-color:#edfbff">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">Daangn Market advertising - 무료
                    </h5>
                    <h1 class="display-4" style="font-weight: 900"><span style="color:#ff7710">당근마켓</span> 광고</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12 text-center mb-3 d-none d-lg-block">
                    <img src="{{ url('/') }}/around/images/sns/dg_main.png" alt="Daangn Market advertising">
                </div>
                <div class="col-xl-12 text-center mb-3 d-block d-lg-none">
                    <img src="{{ url('/') }}/around/images/sns/dg_main_mo1.png" alt="Daangn Market advertising">
                    <img src="{{ url('/') }}/around/images/sns/dg_main_mo2.png" alt="Daangn Market advertising">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 my-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">Advantages
                    </h5>
                    <h1 class="display-4" style="font-weight: 900"><span style="color:#ff7710">당근마켓</span> 광고의 장점</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12 text-center mb-3 d-none d-lg-block">
                    <img src="{{ url('/') }}/around/images/sns/dg_advatage.png" alt="Daangn Market Advantages">
                </div>
                <div class="col-xl-12 text-center mb-3 d-block d-lg-none">
                    <img src="{{ url('/') }}/around/images/sns/dg_advatage_mo1.png" alt="Daangn Market Advantages">
                    <img src="{{ url('/') }}/around/images/sns/dg_advatage_mo2.png" alt="Daangn Market Advantages">
                </div>
            </div>
        </div>
    </section>
@endsection
@section('javascript_just_before_body')
@endsection
