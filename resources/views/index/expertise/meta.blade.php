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
    <section class="mb-5 pt-5 pb-4" style="background-color:#1676f3">
        <div class="container">
            <div class="row my-5">
                <div class="col-12 mb-3">
                    <h5 style="font-weight: 900;color:white">
                        Meta Advertising
                    </h5>
                    <h1 class="display-4" style="font-weight: 900;color:white">Meta(메타) 광고</h1>
                    <p class="text-white">
                        페이스북/인스타그램에 노출되는 콘텐츠형 광고로 SNS를 이용하는 유저들에게 퍼포먼스 및 브랜드 인지도를 함께 높일 수 있는 광고 매체입니다.
                        CPM 방식을 통한 낮은 비용으로 높은 노출 및 도달을 달성할 수 있는 효과적인 광고입니다.
                    </p>
                </div>
                <div class="col-xl-12 d-none d-lg-block mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/meta_main.png"
                        alt="Facebook Main Image">
                </div>
                <div class="col-xl-12 d-block d-lg-none mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/meta_main.png"
                        alt="Facebook Main Image">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 my-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">Meta Invoice</h5>
                    <h1 class="display-4" style="font-weight: 900">Meta 인보이스, 광고 최적화</h1>
                    <p>컨소시엄을 통한 기술파트너 자격이 있어 메타에서 공개하지 않는 숨겨진 API들도 공유 받아 광고주에게 서비스할 수 있는 권한이 있습니다. 그리고 저희가 Meta에서 임대하거나
                        광고대행에 사용하는 계정들은 인보이스가 가능한 티어2로, 최적화 우대를 받을 수 있는 계정을 제공(일반 광고주분들이 사용하는 계정 티어는 저단계 기본티어1)</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 style="font-weight: 900">전문가 지원</h5>
                            <p class="mb-0">메타 프로팀 출신 업무 지원</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 style="font-weight: 900">리스크 해결</h5>
                            <p class="mb-0">결제, 검수/집행 문제 발생 시 즉각적 care</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 style="font-weight: 900">인보이스</h5>
                            <p class="mb-0">카드 수수료, 환차로 최소 10% ~ 최대 20% 이상
                                절감 가능</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 style="font-weight: 900">광고 최적화</h5>
                            <p class="mb-0">메타 프로모션 및 최신 기술 우선 활요 가능하여 최
                                적화 선점이 가능. 그에 따른 광고단가 최소 1.1~
                                최대 1.5배 이상 차이 발생</p>
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
                    <h5 style="font-weight: 900;color:#079aca;">티어2 계정의 장점 - 인보이스</h5>
                    <h1 class="display-4" style="font-weight: 900">티어2 계정 인보이스를 통한 DCC 절감</h1>
                    <p>1년 10억 신용카드 결제가 아닌 계정 인보이스 진행 예시(체크카드는 오히려 신용카드 해외결제 수수료보다 0.2% 더 비쌉니다.)</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12 d-none d-lg-block mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/invoice.png"
                        alt="Facebook Invoice Image">
                </div>
                <div class="col-xl-12 d-block d-lg-none mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/m_invoice.png"
                        alt="Facebook Invoice Image">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12 d-none d-lg-block mb-3 text-center py-3 px-3" style="background-color:white">
                    <img src="{{ url('/') }}/around/images/new/invoice2.jpg"
                        alt="Facebook Invoice Image">
                </div>
                <div class="col-xl-12 d-block d-lg-none mb-3 text-center py-3 px-3" style="background-color:white">
                    <img src="{{ url('/') }}/around/images/new/invoice2.jpg"
                        alt="Facebook Invoice Image">
                </div>
            </div>
            <div>
                <span class="fw-bold">* 카드수수료: </span>
                <span>3.8% ~ 6% 절감 (Visa, Master + 국내카드)</span>
            </div>
            <div>
                <span class="fw-bold">* 송금 환율: </span>
                <span>원화로 계정 쓸 때 달러로 시스템에서 전환되는 차액 3.8% ~ 추가절감(송금 환율 1.75% ~ *이외 전산 매도율(미환산달러))</span>
            </div>
            <div>
                <span class="fw-bold">* 환차: </span>
                <span>환차익처럼 인보이스로 환율 쌀 때 미리 추가 충전해서 광고비를 아낄 수 있다.(ex 환율이 1,400원이 넘어가는 시점에 1,300원 초반 때 많이 충전해놓고 광고 집행시 7%
                    추가 절감 가능)</span>
            </div>
        </div>
    </section>
    <section class="py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">Meta AD Signature</h5>
                    <h1 class="display-4" style="font-weight: 900">Meta 광고의 특징</h1>
                    <p>페이스북/인스타그램은 전 세계적으로 가장 많은 사용자를 보유한 실명 기반의 SNS이며, 인터넷 사용자가 가장 많은 시간을 보내는 SNS입니다.
                        이를 이용하여 고객과 빠르게 커뮤니케이션을 해줌으로써 브랜드 홍보 지원을 할 수 있도록 활성화 시켜주는 것이 중요합니다.</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12 d-none d-lg-block mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/meta_sig.png"
                        alt="Meta 광고의 특징">
                </div>
                <div class="col-xl-12 d-block d-lg-none mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/m_meta_sig.png"
                        alt="Meta 광고의 특징">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-5" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">Meta AD Benefits</h5>
                    <h1 class="display-4" style="font-weight: 900">Meta 광고의 장점</h1>
                    <p>페이스북/인스타그램은 통계 자료부터 트렌드, 광고 효과까지 다양합니다.<br>
                        글로벌엠아이지는 페이스북에 게재되는 담벼락 글 수, 친구 수, 좋아요 수치를 설정하여 체계적으로 관리합니다.</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12 d-none d-lg-block mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/meta_benef.png"
                        alt="Meta 광고의 장점">
                </div>
                <div class="col-xl-12 d-block d-lg-none mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/m_meta_benef.png"
                        alt="Meta 광고의 장점">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">Meta AD Targeting</h5>
                    <h1 class="display-4" style="font-weight: 900">타겟팅 유형</h1>
                    <p>연령, 지역, 관심사 등 가입자의 정보를 바탕으로 한 타겟팅 등 정밀한 타겟팅이 가능하며, 다양한 타겟 그룹을 원하는 조합으로 세팅이 가능하다는 장점이 있습니다.</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12 d-none d-lg-block mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/meta_target.png"
                        alt="Meta 광고의 타겟팅 유형">
                </div>
                <div class="col-xl-12 d-block d-lg-none mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/m_meta_target.png"
                        alt="Meta 광고의 타겟팅 유형">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-0" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">Meta AD Campaign</h5>
                    <h1 class="display-4" style="font-weight: 900">캠페인</h1>
                    <p>캠페인은 광고를 게재하여 달성하고나 하는 비즈니스 목표입니다. 광고 세팅 단계에서 내 업체에 맞는 캠페인 목표를 설정하여 광고를 집행할 수 있습니다.</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-4 col-lg-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <img src="{{ url('/') }}/around/images/new/meta_campaign1.png"
                            alt="Meta 광고의 캠페인 특징">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <img src="{{ url('/') }}/around/images/new/meta_campaign2.png"
                            alt="Meta 광고의 캠페인 특징">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <img src="{{ url('/') }}/around/images/new/meta_campaign3.png"
                            alt="Meta 광고의 캠페인 특징">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <img src="{{ url('/') }}/around/images/new/meta_campaign4.png"
                            alt="Meta 광고의 캠페인 특징">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <img src="{{ url('/') }}/around/images/new/meta_campaign5.png"
                            alt="Meta 광고의 캠페인 특징">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <img src="{{ url('/') }}/around/images/new/meta_campaign6.png"
                            alt="Meta 광고의 캠페인 특징">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-0" style="background-color:#edfbff">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">Meta Process</h5>
                    <h1 class="display-4" style="font-weight: 900">프로세스</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12 d-none d-lg-block mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/meta_process.png"
                        alt="Meta 광고의 프로세스">
                </div>
                <div class="col-xl-12 d-block d-lg-none mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/m_meta_process.png"
                        alt="Meta 광고의 프로세스">
                </div>
            </div>
        </div>
    </section>
    <section class="mb-5 pt-5 pb-4" style="background-color:#ff0169">
        <div class="container">
            <div class="row my-5">
                <div class="col-12 mb-3">
                    <h5 style="font-weight: 900;color:white">
                        Instagram Advertising
                    </h5>
                    <h1 class="display-4" style="font-weight: 900;color:white">인스타그램 광고</h1>
                    <p class="text-white">
                        인스타그램은 메타에서 운영하는 이미지 중심의 소셜 네트워크 서비스입니다. 스토리, 게시물, 라이브, 릴스 등 다양한 콘텐츠를 활용하여 광고를 노출시킬 수 있습니다.
                    </p>
                </div>
                <div class="col-xl-12 d-none d-lg-block mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/insta_main.png"
                        alt="Instagram Main Image">
                </div>
                <div class="col-xl-12 d-block d-lg-none mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/m_insta_main.png"
                        alt="Instagram Main Image">
                </div>
            </div>
        </div>
    </section>
    <section class="pb-5 my-5">
        <div class="container">
            <div class="row mt-5">
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
                                                <img src="{{ url('/') }}/around/images/new/insta_slide1.png"
                                                    alt="인스타그램 광고 슬라이드" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div class="swiper-slide">
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <img src="{{ url('/') }}/around/images/new/insta_slide2.png"
                                                    alt="인스타그램 광고 슬라이드" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div class="swiper-slide">
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <img src="{{ url('/') }}/around/images/new/insta_slide3.png"
                                                    alt="인스타그램 광고 슬라이드" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div class="swiper-slide">
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <img src="{{ url('/') }}/around/images/new/insta_slide4.png"
                                                    alt="인스타그램 광고 슬라이드" />
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
    <section class="mb-5 pt-5 pb-4" style="background-color:#1676f3">
        <div class="container">
            <div class="row my-5">
                <div class="col-12 mb-3">
                    <h5 style="font-weight: 900;color:white">
                        Facebook Advertising
                    </h5>
                    <h1 class="display-4" style="font-weight: 900;color:white">페이스북 광고</h1>
                    <p class="text-white">
                        페이스북은 세계적으로 매우 넓은 사용자 베이스를 갖고 있습니다. 30~50대가 주 이용자이며, 다양한 고객층에게 광고를 전달할 수 있는 플랫폼을 제공합니다.
                    </p>
                </div>
                <div class="col-xl-12 d-none d-lg-block mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/fb_main.png"
                        alt="Instagram Main Image">
                </div>
                <div class="col-xl-12 d-block d-lg-none mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/m_fb_main.png"
                        alt="Instagram Main Image">
                </div>
            </div>
        </div>
    </section>
    <section class="pb-5 my-5">
        <div class="container">
            <div class="row mt-5">
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
                                                <img src="{{ url('/') }}/around/images/new/fb_slide1.png"
                                                    alt="페이스북 광고 슬라이드" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div class="swiper-slide">
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <img src="{{ url('/') }}/around/images/new/fb_slide2.png"
                                                    alt="페이스북 광고 슬라이드" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div class="swiper-slide">
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <img src="{{ url('/') }}/around/images/new/fb_slide3.png"
                                                    alt="페이스북 광고 슬라이드" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div class="swiper-slide">
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <img src="{{ url('/') }}/around/images/new/fb_slide4.png"
                                                    alt="페이스북 광고 슬라이드" />
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
