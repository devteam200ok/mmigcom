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
    <section class="mb-5 pt-5 pb-4" style="background-color:#f70303">
        <div class="container">
            <div class="row my-5">
                <div class="col-12 mb-3">
                    <h5 style="font-weight: 900;color:white">
                        Youtube Advertising - 무료
                    </h5>
                    <h1 class="display-4" style="font-weight: 900;color:white">유튜브 광고</h1>
                    <p class="text-white">
                        유튜브 광고는 유튜브에서 검색 시, 유튜브 검색 결과 최상단에 노출됩니다.<br>유튜브도 구글 검색 파트너 사이트이므로, 검색 캠페인에서 구글 검색 파트너 포함 시 유튜브에 광고
                        노출이 가능합니다.
                    </p>
                </div>
                <div class="col-xl-12 d-none d-lg-block mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/yt_main.png" alt="Youtube Main Image">
                </div>
                <div class="col-xl-12 d-block d-lg-none mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/yt_main.png" alt="Youtube Main Image">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 my-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">Video Advertising Campaign</h5>
                    <h1 class="display-4" style="font-weight: 900">동영상 광고 캠페인</h1>
                    <p>동영상 광고 캠페인은 유튜브에 노출되는 광고입니다.<br>동영상 광고 캠페인은 여러 종류가 있으므로 인지도 증가나 판매 증가 등 목표에 따라 광고 유형을 선택하는 것이 중요합니다.</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12 mb-3">
                    <img src="{{url('/')}}/around/images/new/yt_videoad_main.png" alt="유튜브 동영상 광고 캠페인">
                    {{-- <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/e4_ttBqP2N0" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 my-5" style="background-color:#f1f1f1">
        <div class="container">
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
                                    <div class="card shadow" style="height:680px">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-8 offset-xl-2 mb-4">
                                                    <h5 class="text-center" style="font-weight: 900;color:#079aca;">
                                                        범퍼애드
                                                    </h5>
                                                    <p class="text-center">범퍼애드는 6초 이하의 스킵이 불가능한 광고입니다.<br>
                                                        짧고 기억하기 쉬운 메시지를 사용하여 더 많은 고객에게 도달하고 브랜드의 인지도를 높일 수 있습니다.</p>
                                                </div>
                                                <div class="col-xl-8 mb-2">
                                                    <img src="{{ url('/') }}/around/images/new/yt_video1.gif"
                                                        alt="Youtube 슬라이드" style="max-height:450px" />
                                                </div>
                                                <div class="col-xl-3 mb-2 d-none d-xl-block">
                                                    <img src="{{ url('/') }}/around/images/new/yt_img1.png"
                                                        alt="Youtube 슬라이드" style="max-height:450px" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow" style="height:680px">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-8 offset-xl-2 mb-4">
                                                    <h5 class="text-center" style="font-weight: 900;color:#079aca;">
                                                        건너뛸 수 있는 인스트림

                                                    </h5>
                                                    <p class="text-center">건너뛸 수 있는 인스트림 광고는 노출 확대를 위해 캠페인을 최적화하는 스킵 가능한
                                                        광고입니다.<br>
                                                        소재 길이에는 제한이 없으나 효율적인 도달과 인지도 증대를 위해 40초~60초의 광고를 권장합니다. 인지도와 고려도
                                                        증대, 영상 시청 유도가 목표일 시 적합한 유형입니다.
                                                    </p>
                                                </div>
                                                <div class="col-xl-8 mb-2">
                                                    <img src="{{ url('/') }}/around/images/new/yt_video2.gif"
                                                        alt="Youtube 슬라이드" style="max-height:450px" />
                                                </div>
                                                <div class="col-xl-3 mb-2 d-none d-xl-block">
                                                    <img src="{{ url('/') }}/around/images/new/yt_img2.png"
                                                        alt="Youtube 슬라이드" style="max-height:450px" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow" style="height:680px">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-8 offset-xl-2 mb-4">
                                                    <h5 class="text-center" style="font-weight: 900;color:#079aca;">
                                                        건너뛸 수 없는 인스트림
                                                    </h5>
                                                    <p class="text-center">
                                                        건너뛸 수 없는 인스트림 광고는 스킵이 불가능한 15초 이내 광고입니다.<br>
                                                        6초로 제한되는 범퍼애드보다 더 긴 시간 동안 광고를 할 수 있으며, 인지도 증대가 목표일 시 적합합니다.
                                                    </p>
                                                </div>
                                                <div class="col-xl-12 mb-2">
                                                    <img src="{{ url('/') }}/around/images/new/yt_video3.gif"
                                                        alt="Youtube 슬라이드" style="max-height:450px" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow" style="height:680px">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-8 offset-xl-2 mb-4">
                                                    <h5 class="text-center" style="font-weight: 900;color:#079aca;">
                                                        인피드 동영상 광고
                                                    </h5>
                                                    <p class="text-center">
                                                        인피드 동영상 광고는 유튜브의 홈, 검색 결과에 썸네일 형태로 광고가 노출됩니다.<br>
                                                        사용자가 미리보기 이미지를 클릭하면 유튜브 보기 페이지나 채널 페이지에서 동영상이 재생됩니다. 인피드 동영상 광고는
                                                        고려도 증대에 적합합니다.
                                                    </p>
                                                </div>
                                                <div class="col-xl-12 mb-2">
                                                    <img src="{{ url('/') }}/around/images/new/yt_video4.png"
                                                        alt="Youtube 슬라이드" style="max-height:450px" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow" style="height:680px">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-8 offset-xl-2 mb-4">
                                                    <h5 class="text-center" style="font-weight: 900;color:#079aca;">
                                                        동영상 액션 캠페인
                                                    </h5>
                                                    <p class="text-center">
                                                        동영상 액션 캠페인은 전환 가능성이 큰 사용자를 대상으로 하는 퍼포먼스형 동영상 캠페인입니다.<br>
                                                        광고 종료 후에 보이는 앤드 카드나 CTA 버튼이 포함된 문구를 노출합니다. 홈페이지 방문과 같은 사용자의 행동을
                                                        유도하므로 전환이 목표일 시 적합한 유형입니다.
                                                    </p>
                                                </div>
                                                <div class="col-xl-12 mb-2">
                                                    <img src="{{ url('/') }}/around/images/new/yt_video5.png"
                                                        alt="Youtube 슬라이드" style="max-height:450px" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow" style="height:680px">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-8 offset-xl-2 mb-4">
                                                    <h5 class="text-center" style="font-weight: 900;color:#079aca;">
                                                        아웃스트림
                                                    </h5>
                                                    <p class="text-center">
                                                        아웃스트림 광고는 파트너 사이트에 노출되는 형식입니다.<br>
                                                        모바일 및 태블릿 행동에 맞춰진 광고로, 유튜브를 사용하지 않는 고객에게도 광고를 노출할 수 있습니다.
                                                    </p>
                                                </div>
                                                <div class="col-xl-12 mb-2">
                                                    <img src="{{ url('/') }}/around/images/new/yt_video6.png"
                                                        alt="Youtube 슬라이드" style="max-height:450px" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow" style="height:680px">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-8 offset-xl-2 mb-4">
                                                    <h5 class="text-center" style="font-weight: 900;color:#079aca;">
                                                        쇼츠 광고
                                                    </h5>
                                                    <p class="text-center">
                                                        쇼츠 광고는 유튜브의 쇼츠 피드에서 보여지는 광고입니다.<br>
                                                        사용자가 쇼츠를 넘겨 볼 때 쇼츠 동영상 사이에 무작위로 표시되며, 모바일에 최적화된 환경에서 참여도가 높은 많은
                                                        시청자에게 도달할 수 있습니다.
                                                    </p>
                                                </div>
                                                <div class="col-xl-12 mb-2">
                                                    <img src="{{ url('/') }}/around/images/new/yt_video8.png"
                                                        alt="Youtube 슬라이드" style="max-height:350px" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="card shadow" style="height:680px">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-8 offset-xl-2 mb-4">
                                                    <h5 class="text-center" style="font-weight: 900;color:#079aca;">
                                                        마스트헤드
                                                    </h5>
                                                    <p class="text-center">
                                                        아웃스트림 광고는 파트너 사이트에 노출되는 형식입니다.<br>
                                                        모바일 및 태블릿 행동에 맞춰진 광고로, 유튜브를 사용하지 않는 고객에게도 광고를 노출할 수 있습니다.
                                                    </p>
                                                </div>
                                                <div class="col-xl-12 mb-2">
                                                    <img src="{{ url('/') }}/around/images/new/yt_video7.png"
                                                        alt="Youtube 슬라이드" style="max-height:450px" />
                                                </div>
                                            </div>

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
    <section class="py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">Demand Gen Campaign</h5>
                    <h1 class="display-4" style="font-weight: 900">디멘드젠 캠페인</h1>
                    <p>디멘드젠 캠페인은 구 디스커서빌 캠페인으로, Google 디스커버 영역, 유튜브 홈 피드 등 탐색 탭에 노출됩니다. 구글 피드에서 최대 30억 명의 고객에게 도달 가능하며, 캠페인
                        하나로도 이상적인 고객에게 대규모로 도달할 수 있습니다. 구글 애즈에서 전환이 구현되어 있어야 집행이 가능한 광고이며 광고 제목, 이미지, 로고 등을 제공하면 관심도 높은
                        고객에게 광고를 게재합니다.</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-6 mb-3 text-center d-flex">
                    <div class="video-wrapper my-auto">
                        <iframe src="https://www.youtube.com/embed/i4En8xHB8rA" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-xl-6 mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/yt_demandgen-main.png" alt="Youtube 디멘드젠 캠페인">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-0" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h4 class="text-center" style="font-weight: 900">디멘드젠 광고</h4>
                    <p class="text-center">디멘드젠(구 디스커버리 광고)는 단일 이미지 광고입니다.<br>
                        반응형 디스플레이 광고와 비슷한 형태로 노출됩니다.</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12 d-none d-lg-block mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/demandgen1.jpg" alt="Youtube 디멘드젠 광고">
                </div>
                <div class="col-xl-12 d-block d-lg-none mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/m_demandgen1.jpg" alt="Youtube 디멘드젠 광고">
                </div>
                <div class="col-xl-12 d-none d-lg-block mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/demandgen2-.jpg" alt="Youtube 디멘드젠 광고">
                </div>
                <div class="col-xl-12 d-block d-lg-none mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/m_demandgen2-.jpg" alt="Youtube 디멘드젠 광고">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h4 class="text-center" style="font-weight: 900">디스커버리 캐러셀 광고</h4>
                    <p class="text-center">디스커버리 캐러셀 광고는 여러 이미지 캐러셀 광고입니다.<br>
                        디스커러비 광고와 달리 광고에서 여러 개의 이미지를 넘겨볼 수 있습니다.</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12 d-none d-lg-block mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/yt_carousel.jpg" alt="Youtube 디멘드젠 광고">
                </div>
                <div class="col-xl-12 d-block d-lg-none mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/m_yt_carousel.jpg" alt="Youtube 디멘드젠 광고">
                </div>
            </div>
        </div>
    </section>
@endsection
@section('javascript_just_before_body')
@endsection
