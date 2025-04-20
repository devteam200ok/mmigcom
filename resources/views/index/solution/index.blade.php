@extends('layouts.front')
@section('inside_head_tag')
@endsection
@section('content')
    <div id="scollspy_bar" class="scollspy_bar">
        <!--스크롤바(navbar)-->
        <ul class="nav-menu">
            <li>
                <a id="competitor_dot" href="#competitor" class="dot active">
                    <span class="d-none d-md-block">경쟁업체분석</span>
                    <span class="d-block d-md-none" style="min-height:1rem"></span>
                </a>
            </li>
            <li>
                <a id="database_dot" href="#database" class="dot">
                    <span class="d-none d-md-block">데이터베이스</span>
                    <span class="d-block d-md-none" style="min-height:1rem"></span>
                </a>
            </li>
            <li>
                <a id="conversion_dot" href="#conversion" class="dot">
                    <span class="d-none d-md-block">전환 최적화</span>
                    <span class="d-block d-md-none" style="min-height:1rem"></span>
                </a>
            </li>
            <li>
                <a id="log_dot" href="#log" class="dot">
                    <span class="d-none d-md-block">로그 분석</span>
                    <span class="d-block d-md-none" style="min-height:1rem"></span>
                </a>
            </li>
            <li>
                <a id="sentimental_dot" href="#sentimental" class="dot">
                    <span class="d-none d-md-block">센티멘탈</span>
                    <span class="d-block d-md-none" style="min-height:1rem"></span>
                </a>
            </li>
            <li>
                <a id="social_dot" href="#social" class="dot">
                    <span class="d-none d-md-block">소셜통합</span>
                    <span class="d-block d-md-none" style="min-height:1rem"></span>
                </a>
            </li>
        </ul>
    </div>

    <section id="competitor" class="pt-5 pb-3 mt-0 mb-3"
        style="background-image: url({{ url('/') }}/around/images/title_solution_bg4.png);background-size:cover; background-position: right;">
        <div class="container">
            <h5 class="mt-3" style="font-weight: 900;color:#079aca">Global MIG Solution</h5>
            <div class="row">
                <div class="col-12">
                    <h1 class="display-4 text-white" style="font-weight: 900">01 경쟁업체분석</h1>
                    <p class="text-white">
                        경쟁사의 키워드를 모두 분석하여 더 효율적으로!<br>
                        정보를 기반으로 한 마케팅 의사 결정
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="mt-3 mb-3 pt-5 pb-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h3 class="fw-bold">1. 경쟁사 선정</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 mb-3 pt-2 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h3 class="fw-bold">2. 경쟁사 비즈니스 모델 파악</h3>
                    <h4 class="fw-bold" style="font-weight: 900;color:#079aca">경쟁사의 시장 점유율, 성장 전략 등을 이해</h4>
                    <p>경쟁사의 비즈니스 모델과 전략을 파악</p>
                    <div class="d-flex mt-3">
                        <div class="card shadow mx-auto">
                            <div class="card-body px-5">
                                <div class="h6">
                                    <span class="me-2" style="font-weight: 900;color:#079aca">2-1</span>
                                    <span style="font-weight: 900;">시장조사</span>
                                </div>
                                <div class="h6">
                                    <span class="me-2" style="font-weight: 900;color:#079aca">2-2</span>
                                    <span style="font-weight: 900;">SWOT 분석</span>
                                </div>
                                <div class="h6">
                                    <span class="me-2" style="font-weight: 900;color:#079aca">2-3</span>
                                    <span style="font-weight: 900;">고객 특성 분석</span>
                                </div>
                                <div class="h6 mb-0">
                                    <span class="me-2" style="font-weight: 900;color:#079aca">2-4</span>
                                    <span style="font-weight: 900;">산업 동향 파악</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 mb-3 py-5" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h3 class="fw-bold">3. 경쟁사 USP(Unique Selling Proposition)와 포지셔닝 이해</h3>
                    <h4 class="fw-bold" style="font-weight: 900;color:#079aca">차별화 포인트 이해</h4>
                    <p>경쟁사의 차별화 전략을 통해 시장에서 어떻게 경쟁 우위를 확보하고 있는지 분석</p>
                    <div class="d-flex mt-3">
                        <div class="card shadow mx-auto">
                            <div class="card-body px-5">
                                <div class="h6">
                                    <span class="me-2" style="font-weight: 900;color:#079aca">3-1</span>
                                    <span style="font-weight: 900;">시장 조사 보고서 활용</span>
                                    <p class="mt-2" style="margin-left:32px">업계 보고서와 시장 조사를 통해 경쟁사의 시장 내 위치와 타겟 고객층에 대한
                                        심층적인 정보 획득</p>
                                </div>
                                <div class="h6">
                                    <span class="me-2" style="font-weight: 900;color:#079aca">3-2</span>
                                    <span style="font-weight: 900;">타겟 고객 연구</span>
                                    <p class="mt-2" style="margin-left:32px">경쟁사의 타겟 고객층을 이해하기 위해 데모그래픽, 구매 행동, 고객 리뷰 등을
                                        조사</p>
                                </div>
                                <div class="h6">
                                    <span class="me-2" style="font-weight: 900;color:#079aca">3-3</span>
                                    <span style="font-weight: 900;">마케팅 전략 분석</span>
                                    <p class="mt-2" style="margin-left:32px">분석 도구를 활용하여 경쟁사의 마케팅 전략을 체계적으로 분석하고 자사의 전략을
                                        개선</p>
                                </div>
                                <div class="h6 mt-5">
                                    <span class="me-2" style="font-weight: 900;color:#079aca">Tool 1 :</span>
                                    <span>경쟁사 웹사이트의 트래픽과 사용자 행동을 분석</span>
                                </div>
                                <div class="h6 mt-5">
                                    <span class="me-2" style="font-weight: 900;color:#079aca">Tool 2 :</span>
                                    <span>경쟁사의 SEO 및 브랜드 인지도를 분석</span>
                                </div>
                                <div class="h6 mt-5">
                                    <span class="me-2" style="font-weight: 900;color:#079aca">Tool 3 :</span>
                                    <span>경쟁사의 콘텐츠 마케팅 전략과 가장 인기 있는 콘텐츠를 파악</span>
                                </div>
                                <div class="h6 mt-5">
                                    <span class="me-2" style="font-weight: 900;color:#079aca">Tool 4 :</span>
                                    <span>경쟁사의 SNS 콘텐츠 분석</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="fw-bold mt-5" style="font-weight: 900;color:#079aca">경쟁사의 포지셔닝 파악</h4>
                    <p>경쟁사의 고객과 자사의 고객을 분석하여 시장 내 우리의 위치를 재정의</p>
                    <div class="d-flex mt-3">
                        <div class="card shadow mx-auto">
                            <div class="card-body px-5">
                                <div class="h6">
                                    <span class="me-2" style="font-weight: 900;color:#079aca">3-4</span>
                                    <span style="font-weight: 900;">경쟁사 고객 세그멘테이션 분석</span>
                                    <p class="mt-2" style="margin-left:32px">대상 고객의 특성(인구 통계학적 데이터, 구매 행동, 선호도, 라이프스타일
                                        등)을 분석하여 비슷한 요구와 선호를 가진 그룹으로 나누어 분석</p>
                                </div>
                                <div class="h6">
                                    <span class="me-2" style="font-weight: 900;color:#079aca">3-5</span>
                                    <span style="font-weight: 900;">자사와 경쟁사의 타겟 고객 비교</span>
                                    <p class="mt-2" style="margin-left:32px">두 회사의 제품, 서비스, 마케팅 전략, 시장 점유율, 고객 만족도 등을
                                        분석하여 각각의 장점과 약점을 파악</p>
                                </div>
                                <div class="h6">
                                    <span class="me-2" style="font-weight: 900;color:#079aca">3-6</span>
                                    <span style="font-weight: 900;">고객 리뷰/피드백 분석</span>
                                    <p class="mt-2" style="margin-left:32px">소비자들이 어떤 점을 가장 만족하거나 선호하는지 분석</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 mb-3 py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h3 class="fw-bold">4. 경쟁사의 최신 소식 및 동향 파악</h3>
                    <h4 class="fw-bold" style="font-weight: 900;color:#079aca">시장 동향 및 최근 활동 분석</h4>
                    <p>경쟁사의 최신 소식과 동향을 모니터링하여 시장 변화에 민감하게 대응</p>
                    <div class="d-flex mt-3">
                        <div class="card shadow mx-auto">
                            <div class="card-body px-5">
                                <div class="h6">
                                    <span class="me-2" style="font-weight: 900;color:#079aca">4-1</span>
                                    <span style="font-weight: 900;color:#079aca">Google Alerts</span>
                                    <p class="mt-2" style="margin-left:32px">특정 키워드나 경쟁사 이름에 대한 뉴스 키워드 알림 설정</p>
                                </div>
                                <div class="h6">
                                    <span class="me-2" style="font-weight: 900;color:#079aca">4-2</span>
                                    <span style="font-weight: 900;color:#079aca">소셜 미디어 모니터링 툴 활용</span>
                                    <p class="mt-2" style="margin-left:32px">소셜 미디어 관리 도구를 사용해 경쟁사의 소셜 미디어 활동 추적</p>
                                </div>
                                <div class="h6">
                                    <span class="me-2" style="font-weight: 900;color:#079aca">4-3</span>
                                    <span style="font-weight: 900;">산업 뉴스 활용</span>
                                </div>
                                <div class="h6">
                                    <span class="me-2" style="font-weight: 900;color:#079aca">4-4</span>
                                    <span style="font-weight: 900;">산업 분석 보고서</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="database" class="pt-5 pb-3 mt-5 mb-3"
        style="background-image: url({{ url('/') }}/around/images/title_solution_bg5.png);background-size:cover; background-position: right;">
        <div class="container">
            <h5 class="mt-3" style="font-weight: 900;color:#079aca">Global MIG Solution</h5>
            <div class="row">
                <div class="col-12">
                    <h1 class="display-4 text-white" style="font-weight: 900">02 데이터베이스</h1>
                    <p class="text-white">
                        광고대행사는 Agency 역할을 담당하는 부분이 있어 데이터를 제공받거나 Data mining을 하는 부분이 자유롭습니다.<br>
                        이 부분을 활용하여 광고주님께 객관적인 광고 집행을 해드립니다.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 mb-3">
                    <div class="card shadow mt-3">
                        <div class="card-body py-3 px-4">
                            <div class="row">
                                <div class="col-xl-3 text-center d-flex">
                                    <img class="my-auto mx-auto" style="width:60px" class="mb-3"
                                        src="{{ url('/') }}/around/images/database1.svg" alt="Digital Marketing">
                                </div>
                                <div class="col-xl-9">
                                    <h4 class="mt-3">Digital Marketing</h4>
                                    <p>
                                        1. 로그 분석 자료<br>
                                        2. 매체 사용자 정보<br>
                                        3. 검색어별 쿼리 정보<br>
                                        4. 광고 플랫폼 예상 시뮬레이션
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 mb-3">
                    <div class="card shadow mt-3">
                        <div class="card-body py-3 px-4">
                            <div class="row">
                                <div class="col-xl-3 text-center d-flex">
                                    <img class="my-auto mx-auto" style="width:60px" class="mb-3"
                                        src="{{ url('/') }}/around/images/database2.svg" alt="ATL, BTL, Etc">
                                </div>
                                <div class="col-xl-9">
                                    <h4 class="mt-3">ATL, BTL, Etc</h4>
                                    <p>
                                        1. 방송 시청 %<br>
                                        2. 국가 통계 자료<br>
                                        3. 버스/지하철 역사 별 승/하차 인원<br>
                                        4. 스타필드, 이마트, 롯데마트, 롯데백화점, 신세계백화점 등 영수증 기준 방문객 자료
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="conversion" class="pt-5 pb-3 mt-5 mb-0"
        style="background-image: url({{ url('/') }}/around/images/title_solution_bg3.png);background-size:cover; background-position: right;">
        <div class="container">
            <h5 class="mt-3" style="font-weight: 900;color:#079aca">Global MIG Solution</h5>
            <div class="row">
                <div class="col-12">
                    <h1 class="display-4 text-white" style="font-weight: 900">03 전환 최적화</h1>
                    <p class="text-white">전환 최적화(Conversion API)를 활용하여 효과적인 타겟팅을 통한 효율적인 광고 진행</p>
                </div>
            </div>
        </div>
    </section>
    <div class="my-5 pt-4 pb-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="h3 text-dark" style="font-weight: 900">
                        Communication을 통한 문의(신청/예약/전화버튼/회원가입/기타)별 LTV로 전환값 환산
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 py-5" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 mb-3">
                    <div class="h3 text-dark mb-3" style="font-weight: 900">광고케피(AD conversion API) 최적화 및 script 타겟
                        설정 요약</div>
                    <p>Meta pixel 등 script 설치로 유저행동추적 등을 진행하여 AI가 최적화된 타겟모수를 설정하도록 또한 타겟 오디언스 중 성과미비 유저층을 분석하고 타겟제외
                        또는 픽셀로 데이터를 모아두고 그 사람들을 특정하여 제외(내 광고를 본 사람들 조금의 중복이라도 제거) 반대로 랜딩 등 페이지에 어떤 버튼(문의하기, 가입하기
                        등의 버튼)을 누르는 사람을 추적할 것인가 혹은 분석된 성과 유저층에 맞춰 광고 확장을 진행</p>
                </div>
                <div class="col-xl-12 mb-3 d-flex d-none d-lg-block">
                    <img class="my-auto mx-auto" src="{{ url('/') }}/around/images/new/capi-script.png"
                        alt="광고케피(AD conversion API) 최적화 및 script 타겟 설정 요약">
                </div>
                <div class="col-xl-12 mb-3 d-flex d-block d-lg-none">
                    <img class="my-auto mx-auto" src="{{ url('/') }}/around/images/new/m_capi-script.png"
                        alt="광고케피(AD conversion API) 최적화 및 script 타겟 설정 요약">
                </div>
            </div>
        </div>
    </div>

    <section id="log" class="pt-5 pb-3 mt-0 mb-3"
        style="background-image: url({{ url('/') }}/around/images/title_solution_bg2.png);background-size:cover; background-position: right;">
        <div class="container">
            <h5 class="mt-3" style="font-weight: 900;color:#079aca">Global MIG Solution</h5>
            <div class="row">
                <div class="col-12">
                    <h1 class="display-4 text-white" style="font-weight: 900">04 로그 분석</h1>
                    <p class="text-white">
                        웹 사이트 방문자에 대한 데이터를 수집하여 분석하고,<br>
                        이를 통해 웹 사이트 운영 목적을 달성해나가기 위한 일련의 프로세스입니다.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="section my-5 py-5">
        <div class="container">
            <div class="display-6 text-dark" style="font-weight: 900">로그분석 A4 프로세스</div>
            <p class="mt-3 h6">
                로그분석은 '목표 수립', '수집 리포팅', '데이터 분석', '결정 및 행동'의 4단계로 이루어집니다. <br>
                이 중 가장 중요한 것은 데이터의 구현을 위한 '목표 수립'단계이며, 이는 데이터를 분석하고 방문자를 프로파일링하여 실시간 마케팅전략을 수립하는 초석이 됩니다.
            </p>
            <div class="row mt-5">
                <div class="col-xl-3 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body text-center pb-2">
                            <img style="width:100px;height:100px" src="{{ url('/') }}/around/images/web_log1.svg"
                                alt="목표수립">
                            <h4 style="font-weight:900">01</h4>
                            <h5>
                                목표수립
                                <br>
                                (Aim)
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body text-center pb-2">
                            <img style="width:100px;height:100px" src="{{ url('/') }}/around/images/web_log2.svg"
                                alt="수집">
                            <h4 style="font-weight:900">02</h4>
                            <h5>
                                수집<br>(Acquisition)
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body text-center pb-2">
                            <img style="width:100px;height:100px" src="{{ url('/') }}/around/images/web_log3.svg"
                                alt="데이터 분석">
                            <h4 style="font-weight:900">03</h4>
                            <h5>
                                데이터 분석<br>(Analytics)
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body text-center pb-2">
                            <img style="width:100px;height:100px" src="{{ url('/') }}/around/images/web_log4.svg"
                                alt="결정 및 행동">
                            <h4 style="font-weight:900">04</h4>
                            <h5>
                                결정 및 행동<br>(Action)
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section my-5 py-5" style="background-color:#f1f1f1">
        <div class="container">
            <div class="display-6 text-dark my-5" style="font-weight: 900">로그 분석 기능1 - 데이터 수집</div>
            <div class="d-none d-lg-block text-center">
                <img src="{{ url('/') }}/around/images/web_log_content.png" alt="웹로그분석">
            </div>
            <div class="d-block d-lg-none text-center">
                <img src="{{ url('/') }}/around/images/web_log_content_mo2.png" alt="웹로그분석">
            </div>
        </div>
    </div>

    <div class="section my-5 py-5">
        <div class="container">
            <div class="display-6 text-dark" style="font-weight: 900">로그 분석 기능2 – 데이터 분석(히트맵 시각화)</div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="mt-3 h6">
                        색상으로 표현할 수 있는 다양한 정보를 일정한 이미지 위에 열 분포 형태의 비주얼한 그래픽으로 출력하는 분석 기법.
                        웹 페이지에서 발생하는 방문자의 마우스 클릭을 열 분포 형태의 이미지로 변환하여 사이트 이미지 위에 겹쳐서 보여줍니다.
                        클릭이 많이 발생하는 영역은 붉은색으로, 클릭이 적게 발생하는 영역은 푸른색으로 표현합니다.
                    </p>
                </div>
                {{-- <div class="col-xl-5 text-center">
                    <img src="{{ url('/') }}/around/images/web_log_hitmap.png" alt="히트맵 이미지">
                </div> --}}
            </div>

            <div class="row mt-5">
                <div class="col-12 mb-3">
                    <h5 style="font-weight: 900;color:#079aca">행동시각화</h5>
                    <p class="h6">
                        PC/Mobile 별 방문자의 동기 부여와 욕구를 나타내는 가장 강력한 지표인 클릭, 탭 및 스크롤 동작을 시각적으로 표현하여 사용자가 원하는 사이트에 대한 관심 및 행동을 파악합니다.
                    </p>
                </div>
                <div class="col-xl-4 mb-3">
                    <img src="{{ url('/') }}/around/images/web_log_clickevent.png" alt="클릭 이벤트">
                </div>
                <div class="col-xl-4 mb-3">
                    <img src="{{ url('/') }}/around/images/web_log_cursor.png" alt="커서 이동 히트맵">
                </div>
                <div class="col-xl-4 mb-3">
                    <img src="{{ url('/') }}/around/images/web_log_scroll.png" alt="스크롤 히트맵">
                </div>
                <div class="col-12 my-4"></div>
                <div class="col-xl-12 mb-3">
                    <h5 style="font-weight: 900;color:#079aca">방문자 기록</h5>
                    <p class="mt-3 h6">
                        - 실제 사이트 방문자의 세션을 재생(실제 사용자 움직임 재생)<br>
                        - 태그기록<br>
                        - 사용자 작업을 보고 메모 가능<br>
                        - 다른사람과 기록 공유<br><br>
                        방문자의 클릭, 탭, 마우스 움직임을 보고 사용 편의성 관련해 발생하는 문제를 식별 할 수 있습니다.
                    </p>
                </div>
                <div class="col-xl-12 mb-3 mt-4 d-none d-md-block">
                    <h5 style="font-weight: 900;color:#079aca">전환 유입 경로</h5>
                    <p class="mt-3 h6">
                        <span>- 무제한 단계 정의 가능</span>
                        <br>
                        <span class="ms-4">EX) 퍼널 타입 설계</span><br>
                        <span class="ms-4 my-2" style="font-weight: 900">E-commerce</span> : Homepage <span class="mx-1">></span> product <span class="mx-1">></span> Cart <span class="mx-1">></span> Checkout <span class="mx-1">></span> Thank you Page <br><br>
                        <span class="ms-4 my-2" style="font-weight: 900">News/blog</span> : Homepage <span class="mx-1">></span> Article Pages <span class="mx-1">></span> Subscribe Page <span class="mx-1">></span> Susccess Page<br><br>
                        <span class="ms-4 my-2" style="font-weight: 900">Web App</span> : Homepage <span class="mx-1">></span> Trial Signup Page <span class="mx-1">></span> interface <span class="mx-1">></span> Upgreade Page <span class="mx-1">></span> Thank you page<br><br>
                        <span class="ms-4 my-2" style="font-weight: 900">Lead generation</span> : Category pages <span class="mx-1">></span> Landing page with form <span class="mx-1">></span> Thank you page
                        <br><br>
                        <span>- 퍼널 과정 녹화 보기</span>
                        <br>
                        <span class="ms-4">대부분의 방문자가 사이트를 떠나는 페이지와 단계를 파악하여 개선 및 테스트의 가장 큰 기회를 찾을 수 있습니다.</span>
                    </p>
                </div>
                <div class="col-xl-12 mb-3 mt-4 d-block d-md-none">
                    <h5 style="font-weight: 900;color:#079aca">전환 유입 경로</h5>
                    <p class="mt-3 mb-0 h6">
                        <span style="font-weight:900">- 무제한 단계 정의 가능</span>
                        <br>
                        <span class="ms-4">EX) 퍼널 타입 설계</span><br>
                        <span class="ms-4 my-2" style="font-weight: 900">E-commerce</span> : <br><span class="ms-4">Homepage <span class="mx-1">></span> product <span class="mx-1">></span> Cart <span class="mx-1">></span> Checkout </span><br> <span class="ms-4">> Thank you Page</span><br><br>
                        <span class="ms-4 my-2" style="font-weight: 900">News/blog</span> : <br><span class="ms-4"> Homepage <span class="mx-1">></span> Article Pages <span class="mx-1">></span> Subscribe Page </span><br> <span class="ms-4">> Susccess Page</span><br><br>
                        <span class="ms-4 my-2" style="font-weight: 900">Web App</span> : <br><span class="ms-4">Homepage <span class="mx-1">></span> Trial Signup Page <span class="mx-1">></span> interface </span><br> <span class="ms-4">> Upgreade Page <span class="mx-1">></span> Thank you page</span><br><br>
                        <span class="ms-4 my-2" style="font-weight: 900">Lead generation</span> : <br><span class="ms-4">Category pages <span class="mx-1">></span> Landing page with form </span><br> <span class="ms-4">> Thank you page</span>
                        <br><br>
                        <span>- 퍼널 과정 녹화 보기</span>
                    </p>
                    <p class="ms-4 h6 mt-0">대부분의 방문자가 사이트를 떠나는 페이지와 단계를 파악하여 개선 및 테스트의 가장 큰 기회를 찾을 수 있습니다.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="section my-5 py-5" style="background-color:#f1f1f1">
        <div class="container">
            <div class="display-6 text-dark" style="font-weight: 900">부정클릭</div>
            <div class="row mb-4">
                <div class="col-xl-7">
                    <p class="mt-3 h6">
                        완벽 통계 분석 기술을 가진 CPC 키워드 광고에 최적화된 접속자 마케팅 프로그램.
                        IP 변경 쿠키 제거와 관계없이 100% 완벽하게 분석하여 부정클릭으로 접속한 컴퓨터를 실속차단해 드립니다.
                    </p>
                </div>
                <div class="col-xl-5 text-center">
                </div>
            </div>
            <div class="card shadow mt-3">
                <div class="card-body py-3 px-2">
                    <div class="row">
                        <div class="col-xl-3 text-center d-flex">
                            <div class="my-auto mx-auto">
                                <img style="width:60px" class="mb-3"
                                    src="{{ url('/') }}/around/images/web_log_click1.svg" alt="광고비절감효과">
                                <h4>광고비 절감 효과</h4>
                                <p>불필요한 광고비를 줄여<br class="pc">효율적인 마케팅</p>
                            </div>
                        </div>
                        <div class="col-xl-9">

                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mt-3">
                <div class="card-body py-3 px-4">
                    <div class="row">
                        <div class="col-xl-3 text-center d-flex">
                            <div class="my-auto mx-auto">
                                <img style="width:60px" class="mb-3"
                                    src="{{ url('/') }}/around/images/web_log_click2.svg" alt="부정클릭 접속자">
                                <h4>부정클릭 접속자</h4>
                                <p>불필요한 광고비를 줄여<br>효율적인 마케팅</p>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <h4 class="mt-3">공격적 부정클릭</h4>
                            <p>IP를 바꿔 접속하는, 공격적 부정클릭까지 완벽 검출. 회선 변경, 랜카드 변경 등 악성 부정클릭도 모두 찾아냅니다.</p>
                            <h4>접속자 위치</h4>
                            <p>IP를 바꿔 접속하는, 공격적 부정클릭까지 완벽 검출. 회선 변경, 랜카드 변경 등 악성 부정클릭도 모두 찾아냅니다.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mt-3">
                <div class="card-body py-3 px-4">
                    <div class="row">
                        <div class="col-xl-3 text-center d-flex">
                            <div class="my-auto mx-auto">
                                <img style="width:60px" class="mb-3"
                                    src="{{ url('/') }}/around/images/web_log_click3.svg" alt="경고창 출력">
                                <h4>경고창 출력</h4>
                                <p>1~3차 경고창을 띄워<br>즐겨찾기 유도</p>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <h4 class="mt-3">선택 옵션</h4>
                            <p>
                                무효클릭 접속자 경고창. 즐겨찾기 유도부터 법적 조치 경고까지 가능합니다.<br>
                                단계 : 1) 즐겨찾기 유도 2) 중복 접속 안내 3) 법적 조치 경고 &#10141; 경고 후에도 접속시 자동 차단 처리
                            </p>
                            <h4>기능 옵션</h4>
                            <p>사용 유무, 단계 설정, PC/모바일 노출 설정 등</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mt-3">
                <div class="card-body py-3 px-4">
                    <div class="row">
                        <div class="col-xl-3 text-center d-flex">
                            <div class="my-auto mx-auto">
                                <img style="width:60px" class="mb-3"
                                    src="{{ url('/') }}/around/images/web_log_click4.svg" alt="자동 관리/보고">
                                <h4>자동 관리/보고</h4>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <h4 class="mt-3">자동 관리</h4>
                            <p>로그 수집, 접속자 활동 분석, 부정 IP.<br>자동차단, 무과금 확인 등 모든 부정클릭 방지 업무를 100% 자동 관리합니다.</p>
                            <h4>자동 보고</h4>
                            <p>실시간 부정접속 보고, 접속 IP, 접속 위치, 단말기부터 접속자 활동까지 상세하게 기록하고 IP 차단부터 무과금 처리를 보고합니다.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="section mt-5 py-5" style="background-color:#f1f1f1">
        <div class="container my-5">
            <div class="row">
                <div class="col-xl-12">
                    <div class="display-6 text-dark" style="font-weight: 900">로그 분석 기능3 – 데이터 분석(리포트 최적화)
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-xl-6 mb-3">
                    <h5 style="font-weight: 900;color:#079aca">Low data Excel.csv</h5>

                    <h5 class="mt-5" style="font-weight: 900;color:#079aca">통계적 오류커버</h5>
                    <p class="mt-3 h6">
                        - 1PV, 10초 이내 체류 등 이탈자를 배제한 <span style="font-weight:900;color:#0755ca">활성사용자 통계</span><br>
                        - PC, Mobile 등 여러 기기로 <span style="font-weight:900;color:#0755ca">유입된 중복 사용자를 1명으로 통계</span><br>
                    </p>

                    <h5 class="mt-5" style="font-weight: 900;color:#079aca">전략적 분석 리포트</h5>
                    <p class="mt-3 h6">
                        <span style="font-weight:900;color:#0755ca">- 맞춤(변곡점, 잠재 고객, 잔여 성과 등)</span><br>
                        <span style="font-weight:900;color:#0755ca">- 경로 탐색 1(키워드, 리퍼러, 백링크)</span><br>
                        - 경로 탐색 2(광고 상품, 계정, 캠페인, 광고 그룹)<br>
                        <span style="font-weight:900;color:#0755ca">- 성과 예측(A/B 테스트)</span><br>
                        - 성과 요약(시간, 일일, 요일, 월별, 등)
                    </p>

                    <h5 class="mt-5" style="font-weight: 900;color:#079aca">정성적 분석 리포트</h5>
                    <p class="mt-3 h6">
                        다각도 유형별 보고서와 전문가 자문으로 <span style="font-weight:900;color:#0755ca">광고 집행상태에 대한 방향과 개선 그리고 효과를 판단</span>할 수 있습니다.
                    </p>
                </div>
                <div class="col-xl-6 mb-3 d-flex">
                    <img class="mt-auto ms-auto mb-3" src="{{ url('/') }}/around/images/web_log_report.png" alt="로그 분석 기능3 – 데이터 분석(리포트 최적화)">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xl-6">
                    <div class="card shadow mt-3">
                        <div class="card-body py-3 px-4">
                            <div class="row">
                                <div class="col-xl-3 text-center d-flex">
                                    <img class="my-auto mx-auto" style="width:60px" class="mb-3"
                                        src="{{ url('/') }}/around/images/web_log_report1.svg" alt="Live 대시보드">
                                </div>
                                <div class="col-xl-9">
                                    <h4 class="mt-3">Live 대시보드</h4>
                                    <p>최근 30분의 누적 데이터를 10초 간격으로 업데이트하여 방문자의 주요 분석 데이털르 실시간으로 제공합니다. 단시간에 집중적인 모니터링이 가능합니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card shadow mt-3">
                        <div class="card-body py-3 px-4">
                            <div class="row">
                                <div class="col-xl-3 text-center d-flex">
                                    <img class="my-auto mx-auto" style="width:60px" class="mb-3"
                                        src="{{ url('/') }}/around/images/web_log_report2.svg" alt="유입">
                                </div>
                                <div class="col-xl-9">
                                    <h4 class="mt-3">유입</h4>
                                    <p>사이트 전체 유입 출처 및 검색어를 제공합니다. 소핑몰 방문자의 유입 출처 상세 데이터를 조회하며, 마케팅별 효과를 트리맵으로 시각화하여 확인할 수
                                        있습니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card shadow mt-3">
                        <div class="card-body py-3 px-4">
                            <div class="row">
                                <div class="col-xl-3 text-center d-flex">
                                    <img class="my-auto mx-auto" style="width:60px" class="mb-3"
                                        src="{{ url('/') }}/around/images/web_log_report3.svg" alt="마케팅 / APP 마케팅">
                                </div>
                                <div class="col-xl-9">
                                    <h4 class="mt-3">마케팅 / APP 마케팅</h4>
                                    <p>광고사의 노출수, 클릭수, 광고비에 대해 API 연동 또는 데이터 업로드를 통해 광고 상품과 키워드에 대한 다양한 지표를 편리하게 확인할 수 있습니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card shadow mt-3">
                        <div class="card-body py-3 px-4">
                            <div class="row">
                                <div class="col-xl-3 text-center d-flex">
                                    <img class="my-auto mx-auto" style="width:60px" class="mb-3"
                                        src="{{ url('/') }}/around/images/web_log_report1.svg" alt="사용자">
                                </div>
                                <div class="col-xl-9">
                                    <h4 class="mt-3">사용자</h4>
                                    <p>페이지뷰, 방문수, 신규 방문수 등 기본 접속 현황을 한 눈에 확인할 수 있으며, 방문자에 대한 상세한 분석을 하실 수 있도록 다양한 리포트를
                                        제공합니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card shadow mt-3">
                        <div class="card-body py-3 px-4">
                            <div class="row">
                                <div class="col-xl-3 text-center d-flex">
                                    <img class="my-auto mx-auto" style="width:60px" class="mb-3"
                                        src="{{ url('/') }}/around/images/web_log_report1.svg" alt="전환">
                                </div>
                                <div class="col-xl-9">
                                    <h4 class="mt-3">전환</h4>
                                    <p>고객 선호 채널과 마케팅 접점 분석을 위한 다양한 전환 분석 리포트를 제공합니다. 멀티 채널 분석을 통해 유입이 발생한 순서에 가중치를 주어 직/간접
                                        전환을 상세하게 분석할 수 있습니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card shadow mt-3">
                        <div class="card-body py-3 px-4">
                            <div class="row">
                                <div class="col-xl-3 text-center d-flex">
                                    <img class="my-auto mx-auto" style="width:60px" class="mb-3"
                                        src="{{ url('/') }}/around/images/web_log_report1.svg" alt="커머스">
                                </div>
                                <div class="col-xl-9">
                                    <h4 class="mt-3">커머스</h4>
                                    <p>제품에 대한 기본 분석과 후기, 연관 제품, 잠재고객, 메인 페이지 영역별 분석까지 차별화된 오라인 쇼핑몰에 최적화된 커머스 분석 리포트를 제공합니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card shadow mt-3">
                        <div class="card-body py-3 px-4">
                            <div class="row">
                                <div class="col-xl-3 text-center d-flex">
                                    <img class="my-auto mx-auto" style="width:60px" class="mb-3"
                                        src="{{ url('/') }}/around/images/web_log_report1.svg" alt="콘텐츠">
                                </div>
                                <div class="col-xl-9">
                                    <h4 class="mt-3">콘텐츠</h4>
                                    <p>인기 페이지 및 내부 검색어, 이동 경로, 링크 분석 등 방문자의 활동 내역을 기반으로 콘텐츠 선호도를 분석하고 비즈니스 운영 및 개선에 활용할 수
                                        있습니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card shadow mt-3">
                        <div class="card-body py-3 px-4">
                            <div class="row">
                                <div class="col-xl-3 text-center d-flex">
                                    <img class="my-auto mx-auto" style="width:60px" class="mb-3"
                                        src="{{ url('/') }}/around/images/web_log_report1.svg" alt="인하우스 마케팅">
                                </div>
                                <div class="col-xl-9">
                                    <h4 class="mt-3">인하우스 마케팅</h4>
                                    <p>바이럴 마케팅에 대한 노출과 효율을 분석하며, 내부 고객에게 발송되는 이메일과 SMS, MMS, 카카오톡 등 마케팅별 성과를 측정하고 전략을 세울 수
                                        있습니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card shadow mt-3">
                        <div class="card-body py-3 px-4">
                            <div class="row">
                                <div class="col-xl-3 text-center d-flex">
                                    <img class="my-auto mx-auto" style="width:60px" class="mb-3"
                                        src="{{ url('/') }}/around/images/web_log_report1.svg" alt="KPI">
                                </div>
                                <div class="col-xl-9">
                                    <h4 class="mt-3">KPI</h4>
                                    <p>주요 데이터에 대해 직접 선택하여 기준 기간과 비교 기간의 수치와 변화율을 분석하고, 측정 기준에 따른 진단 결과를 보여드립니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="sentimental" class="pt-5 pb-3 mt-0 mb-3"
        style="background-image: url({{ url('/') }}/around/images/new/title_solution_bg8.png);background-size:cover; background-position: right;">
        <div class="container">
            <h5 class="mt-3" style="font-weight: 900;color:#079aca">Global MIG Solution</h5>
            <div class="row">
                <div class="col-12">
                    <h1 class="display-4 text-white" style="font-weight: 900">05 센티멘탈</h1>
                    <p class="text-white">유저들의 반응에 따른 센티멘탈 점수를 변환하여 지표로 제공합니다.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 mb-3">
                    <div class="display-6 text-dark mb-3" style="font-weight: 900">APPSILON Solution 1</div>
                    <p>오브라 센티먼트 유저 사용자들의 우리가 올렸던 광고, 혹은 포스트에 대한 반응이 어땠나, 감정적인 이모셔널 반응이 어땠는지, 긍정적이다 부정적이다, 아니면 유저들의 광고 반응을
                        ‘좋다, 나쁘다’뿐만 아니라 조금 더 세분화된 감정으로 분석이 가능합니다.</p>
                    <div class="card shadow">
                        <div class="card-body">
                            <p>EX) 흥미롭다, 자극적이다, 잔잔하다, 친근감이 느껴진다 등, 이러한 센티멘탈(사람의 감정과 관련된) 점수를 변환해서 보여줄 수가 있고
                                지난 달 대비 광고물을 올렸을 때 전체적으로 사용자 반응이 60% 긍정적으로 인식 개선이 되었다, 등을 지표로 제공
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 mb-3 d-flex d-none d-lg-block">
                    <img class="my-auto mx-auto" src="{{ url('/') }}/around/images/new/consortium-solution1.jpg"
                        alt="APPSILON Solution 1">
                </div>
                <div class="col-xl-12 mb-3 d-flex d-block d-lg-none">
                    <img class="my-auto mx-auto" src="{{ url('/') }}/around/images/new/m_consortium-solution1.jpg"
                        alt="APPSILON Solution 1">
                </div>
            </div>
        </div>
    </div>

    <section id="social" class="pt-5 pb-3 mt-5 mb-3"
        style="background-image: url({{ url('/') }}/around/images/title_solution_bg2.png);background-size:cover; background-position: right;">
        <div class="container">
            <h5 class="mt-3" style="font-weight: 900;color:#079aca">Global MIG Solution</h5>
            <div class="row">
                <div class="col-12">
                    <h1 class="display-4 text-white" style="font-weight: 900">06 소셜통합</h1>
                    <p class="text-white">한 번에 여러 소셜미디어의 광고를 집행하고, 성과를 비교할 수 있습니다.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 mb-3">
                    <div class="display-6 text-dark mb-3" style="font-weight: 900">APPSILON Solution 2</div>
                    <p>틱톡, 유튜브, 인스타그램, 페이스북 등 여러 가지 소셜미디어에 한 번에 광고를 올리고 각각의 성과도 한 번에 비교할 수 있는 통합 대시보드 제공합니다.
                    </p>
                </div>
                <div class="col-xl-12 mb-3 d-flex">
                    <img class="my-auto mx-auto" src="{{ url('/') }}/around/images/new/consortium-solution2.jpg"
                        alt="APPSILON Solution 1">
                </div>
            </div>
        </div>
    </div>

    {{-- <section id="mobile" class="pt-5 pb-3 mt-5 mb-3"
        style="background-image: url({{ url('/') }}/around/images/title_solution_bg1.png);background-size:cover; background-position: right;">
        <div class="container">
            <h5 class="mt-3" style="font-weight: 900;color:#079aca">Global MIG Solution</h5>
            <div class="row">
                <div class="col-12">
                    <h1 class="display-4 text-white" style="font-weight: 900">01 모바일 최적화</h1>
                    <p class="text-white">글로벌엠아이지가 제공하는 최상의 솔루션을 소개합니다.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt-5">
        <div class="row d-none d-lg-block">
            <div class="col-12 mb-3">
                <div class="card shadow">
                    <div class="card-body py-2 px-2 d-flex align-items-center">
                        <img style="width:60px;height:60px" class="ms-3 me-5"
                            src="{{ url('/') }}/around/images/optimization1.svg" alt="모바일 이미지 리사이징">
                        <div>
                            <h4 class="mt-3">모바일 이미지 리사이징</h4>
                            <p>
                                현재 모바일이 온라인보다 노출량 자체가 적게는 3.5배에서 많게는 20배까지 차이가 나는데,<br>
                                웹사이트 자체를 온라인으로만 맞추면 모바일에 대한 최대 20배 이상 되는 시장을 놓치게 되므로, 웹사이트의 모바일 리사이징은 필수입니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="card shadow">
                    <div class="card-body py-2 px-2 d-flex align-items-center">
                        <img style="width:60px;height:60px" class="ms-3 me-5"
                            src="{{ url('/') }}/around/images/optimization2.svg" alt="모바일 DB 연동창">
                        <div>
                            <h4 class="mt-3">모바일 DB 연동창</h4>
                            <p>
                                광고 목적이 문의인 업체들의 모바일 유저의 이탈률을 방지하고 목적 도달에 유리하도록 필수적으로 최적화해야 하는 웹 프로그래밍 기능
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="card shadow">
                    <div class="card-body py-2 px-2 d-flex align-items-center">
                        <img style="width:60px;height:60px" class="ms-3 me-5"
                            src="{{ url('/') }}/around/images/optimization3.svg" alt="통화 추적 기능">
                        <div>
                            <h4 class="mt-3">통화 추적 기능</h4>
                            <p>
                                정확히 어떤 경로, 어떤 광고 등으로 광고 목적인 전문의로 이루어졌는지 파악하는 방법이며,<br>
                                파악 후 목적 달성률이 높은 쪽으로 활성화를 한다면 더욱 효율적인 마케팅 운영이 가능합니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="card shadow">
                    <div class="card-body py-2 px-2 d-flex align-items-center">
                        <img style="width:60px;height:60px" class="ms-3 me-5"
                            src="{{ url('/') }}/around/images/optimization4.svg" alt="모바일 실시간 상담">
                        <div>
                            <h4 class="mt-3">모바일 실시간 상담</h4>
                            <p>
                                모바일 DB 연동창과 마찬가지로 광고 목적이 문의인 업체들의 모바일 유저의 이탈률을 방지하고<br>
                                문의 목적 도달에 유리하게 필수적으로 최적화 해야하는 웹 프로그래밍 기능
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="card shadow">
                    <div class="card-body py-2 px-2 d-flex align-items-center">
                        <img style="width:60px;height:60px" class="ms-3 me-5"
                            src="{{ url('/') }}/around/images/optimization5.svg" alt="SMS 연동 기능">
                        <div>
                            <h4 class="mt-3">SMS 연동 기능</h4>
                            <p>
                                광고를 통해 유입된 모바일 유저들은 온라인보다 매우 많은 이탈률과 목적 도달률이 낮은 편입니다.<br>
                                즉, 온라인보다 가벼운 유저 동향을 보이고 있는 것입니다. 그러나 가벼운 유저들을 실시간으로 당사 고객으로 발전시키기 위해서는 모바일상 조금이라도 목적 관련 액션이
                                나올 경우, 실시간 SMS로 파악하는 것이 중요합니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-block d-lg-none">
            <div class="col-12 mb-3">
                <div class="card shadow">
                    <div class="card-body py-2 px-3 text-center">
                        <img style="width:60px;height:60px" class="mt-4 mb-3"
                            src="{{ url('/') }}/around/images/optimization1.svg" alt="모바일 이미지 리사이징">
                        <div>
                            <h4 class="mt-3">모바일 이미지 리사이징</h4>
                            <p>
                                현재 모바일이 온라인보다 노출량 자체가 적게는 3.5배에서 많게는 20배까지 차이가 나는데,<br>
                                웹사이트 자체를 온라인으로만 맞추면 모바일에 대한 최대 20배 이상 되는 시장을 놓치게 되므로, 웹사이트의 모바일 리사이징은 필수입니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="card shadow">
                    <div class="card-body py-2 px-3 text-center">
                        <img style="width:60px;height:60px" class="mt-4 mb-3"
                            src="{{ url('/') }}/around/images/optimization2.svg" alt="모바일 DB 연동창">
                        <div>
                            <h4 class="mt-3">모바일 DB 연동창</h4>
                            <p>
                                광고 목적이 문의인 업체들의 모바일 유저의 이탈률을 방지하고 목적 도달에 유리하도록 필수적으로 최적화해야 하는 웹 프로그래밍 기능
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="card shadow">
                    <div class="card-body py-2 px-3 text-center">
                        <img style="width:60px;height:60px" class="mt-4 mb-3"
                            src="{{ url('/') }}/around/images/optimization3.svg" alt="통화 추적 기능">
                        <div>
                            <h4 class="mt-3">통화 추적 기능</h4>
                            <p>
                                정확히 어떤 경로, 어떤 광고 등으로 광고 목적인 전문의로 이루어졌는지 파악하는 방법이며,<br>
                                파악 후 목적 달성률이 높은 쪽으로 활성화를 한다면 더욱 효율적인 마케팅 운영이 가능합니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="card shadow">
                    <div class="card-body py-2 px-3 text-center">
                        <img style="width:60px;height:60px" class="mt-4 mb-3"
                            src="{{ url('/') }}/around/images/optimization4.svg" alt="모바일 실시간 상담">
                        <div>
                            <h4 class="mt-3">모바일 실시간 상담</h4>
                            <p>
                                모바일 DB 연동창과 마찬가지로 광고 목적이 문의인 업체들의 모바일 유저의 이탈률을 방지하고<br>
                                문의 목적 도달에 유리하게 필수적으로 최적화 해야하는 웹 프로그래밍 기능
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="card shadow">
                    <div class="card-body py-2 px-3 text-center">
                        <img style="width:60px;height:60px" class="mt-4 mb-3"
                            src="{{ url('/') }}/around/images/optimization5.svg" alt="SMS 연동 기능">
                        <div>
                            <h4 class="mt-3">SMS 연동 기능</h4>
                            <p>
                                광고를 통해 유입된 모바일 유저들은 온라인보다 매우 많은 이탈률과 목적 도달률이 낮은 편입니다.<br>
                                즉, 온라인보다 가벼운 유저 동향을 보이고 있는 것입니다. 그러나 가벼운 유저들을 실시간으로 당사 고객으로 발전시키기 위해서는 모바일상 조금이라도 목적 관련 액션이
                                나올 경우, 실시간 SMS로 파악하는 것이 중요합니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="auto" class="pt-5 pb-3 mt-5 mb-3"
        style="background-image: url({{ url('/') }}/around/images/title_solution_bg3.png);background-size:cover; background-position: right;">
        <div class="container">
            <h5 class="mt-3" style="font-weight: 900;color:#079aca">Global MIG Solution</h5>
            <div class="row">
                <div class="col-12">
                    <h1 class="display-4 text-white" style="font-weight: 900">05 자동 입찰</h1>
                    <p class="text-white">
                        스케줄링, 자동 입찰 기능의 자동화를 통해 키워드 광고 집행 및 관리에<br>
                        비효율적으로 낭비되어온 인력 및 리소스를 줄이고, 보다 창의적이며<br>
                        효율적인 광고 캠페인 및 영업에 집중할 수 있도록 도와드립니다.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="my-5 py-5">
        <div class="container">
            <h3 cllass="mb-3" style="font-weight: 900">자동입찰의 장점</h3>
            <div class="card shadow mt-3">
                <div class="card-body py-3 px-4">
                    <div class="row">
                        <div class="col-xl-3 text-center d-flex">
                            <div class="my-auto mx-auto">
                                <img style="width:60px" class="mb-3"
                                    src="{{ url('/') }}/around/images/automatic1.svg" alt="CPC 절감">
                                <h4>
                                    적은 비용<br>
                                    더욱 큰 효과1
                                </h4>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <h4 class="mt-3">CPC 절감</h4>
                            <p>목표 순위, 최대 입찰가 2가지만 설정하면 목표 달성을 위한 가장 낮은 CPC를 자동으로 찾아가 최저가로 목표 순위에 노출시켜 CPC 최대 15% 절감 효과를 볼 수
                                있습니다.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mt-3">
                <div class="card-body py-3 px-4">
                    <div class="row">
                        <div class="col-xl-3 text-center d-flex">
                            <div class="my-auto mx-auto">
                                <img style="width:60px" class="mb-3"
                                    src="{{ url('/') }}/around/images/automatic2.svg" alt="편리한 입찰 설정">
                                <h4>
                                    생산성 향상을<br>
                                    위한 RIA 환경
                                </h4>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <h4 class="mt-3">편리한 입찰 설정</h4>
                            <p>기존성과 참조 입찰 설정, 대량 입찰 설정, CSV 입찰 설정 등 편리한 입찰 설정을 지원 고매출 키워드, 고비용 키워드를 기준으로 입찰 설정 하거나, 일괄 입찰 설정
                                등 다양한 입찰 편의 기능을 지원합니다.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mt-3">
                <div class="card-body py-3 px-4">
                    <div class="row">
                        <div class="col-xl-3 text-center d-flex">
                            <div class="my-auto mx-auto">
                                <img style="width:60px" class="mb-3"
                                    src="{{ url('/') }}/around/images/automatic3.svg" alt="입찰 순위 정확도 97.9%">
                                <h4>
                                    적은 비용<br>
                                    더욱 큰 효과2
                                </h4>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <h4 class="mt-3">입찰 순위 정확도 97.9%</h4>
                            <p>원하는 CPC, 원하는 순위 노출 정확도 평균 97.9%이며, 자동 입찰 관리 페이지를 통해 실제 우리 광고가 얼마나 정확히 노출되는지 확인할 수 있습니다.</p>
                            <h4 class="mt-2">키워드 수</h4>
                            <p>입찰 관리 키워드 수 최대 무제한, 메인 키워드 150~600개 권장, 최대 2800개까지, 3가지 플랜. 경쟁이 심한 메인 키워드는 짧은 입찰 간격으로 집중
                                관리하고, 수 만개의 세부 키워드도 하루 3번 정기 입찰로 관리합니다.</p>
                            <h4 class="mt-2">다양한 전략</h4>
                            <p>원하는 시간별, 요일별, 세부 지역(강남구, 성남시 등), 디바이스(PC/모바일)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <h3 cllass="mb-3" style="font-weight: 900">자동입찰 내용</h3>
            <div class="row">
                <div class="col-xl-6 mb-3">
                    - 입찰 순위 정확도 평균 97.9%<br>
                    - 입찰 증감가 및 최대 입찰가 설정 지원<br>
                    - 시간, 요일, 지역, 디바이스 세분화 입찰 설정
                </div>
                <div class="col-xl-6 mb-3">
                    - 최저가로 목표 순위에 노출 CPC 절감 최대 15%<br>
                    - 상대순위, 절대순위, 노출 측정 지원<br>
                    - 최근 입찰 시도 결과 및 시간대별 입찰 추세 그래픽 제공
                </div>
            </div>
        </div>
    </div>

    <section id="schedule" class="pt-5 pb-3 mt-5 mb-3"
        style="background-image: url({{ url('/') }}/around/images/title_solution_bg6.png);background-size:cover; background-position: right;">
        <div class="container">
            <h5 class="mt-3" style="font-weight: 900;color:#079aca">Global MIG Solution</h5>
            <div class="row">
                <div class="col-12">
                    <h1 class="display-4 text-white" style="font-weight: 900">08 스케줄 관리</h1>
                    <p class="text-white">
                        글로벌엠아이지가 제공하는 최상의 솔루션을 소개합니다.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 mb-3">
                    <div class="display-6 text-dark mb-3" style="font-weight: 900">Smarter Bidding More Traffic</div>
                    <p>- BizSping GlobalMIG는 효율적이고 지능적인 키워드 광고 관리를 위한 솔루션입니다. 빠르고 저렴한 도입 비용, 인력/시간 리소스의 절약을 주된 목표로 개발되었습니다.
                        현재 ASP/SanS 형태의 서비스를 중점으로 하여 제공되고 있습니다.</p>
                </div>
                <div class="col-xl-5 mb-3 d-flex">
                    <img class="my-auto mx-auto" src="{{ url('/') }}/around/images/schedule_call.png"
                        alt="Smarter Bidding More Traffic">
                </div>
            </div>
            <div class="row mt-4">
                <div class="display-6 text-dark mb-3" style="font-weight: 900">BizSping GlobalMIG 개요</div>
                <p>- 스케줄링(Scheduling), 자동입찰(Auto Bidding) 기능의 자동화를 통해 키워드 광고 집행 및 관리에 비효율적으로 낭비되어온 인력 및 리소스를 줄이고, 보다 창의적이며
                    효율적인 광고 캠페인 및 영업에 집중할 수 있도록 도와드립니다.</p>
            </div>
            <div class="row mt-4">
                <div class="col-xl-4 mb-3">
                    <div class="card shadow">
                        <div class="card-body py-3 px-4">
                            <div class="text-center">
                                <img style="width:60px" class="mb-3"
                                    src="{{ url('/') }}/around/images/schedule1.svg" alt="빠르고 저렴한 도입 비용">
                                <h4>빠르고 저렴한 도입 비용</h4>
                                <p>SAAS(Software As A Service) 또는 ASP(Application Service Provider)라고 불리는 '소프트웨어 임대형 서비스' 및
                                    '설치형 솔루션'인 2가지 방법으로 제공됨에 따라, 이용에 원하는 시점으로부터 즉각적으로 실무에 활용하실 수 있습니다.
                                    또한, 임대형 서비스의 제공으로 인해 초기 도입 비용이 매우 낮은 장점이 있습니다. 이는 별도의 위험 부담 없이 업무 효율성의 개선을 위한 시도를 해볼 수
                                    있음을 의미합니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 mb-3">
                    <div class="card shadow">
                        <div class="card-body py-3 px-4">
                            <div class="text-center">
                                <img style="width:60px" class="mb-3"
                                    src="{{ url('/') }}/around/images/schedule2.svg"
                                    alt="적은 비용 더 큰 효과
                                    ">
                                <h4>적은 비용 더 큰 효과
                                </h4>
                                <p>키워드 광고 운영을 직접 관리하는 기업의 경우 및 키워드 광고 대행 업무를 진행하는 기업의 경우, 실제 광고 캠페인을 위한 분석과 전략보다 다양한 광고 채널과
                                    하위 캠페인 그룹, 그리고 수 많은 키워드를 관리하는 것에 많은 리소스를 소모하고 있는 것이 현실입니다.
                                    GlobalMIG는 이와 같은 작업들을 통합된 하나의 환경에서 간편하게 진행되게끔 지원함으로써 키워드 광고를 진행하는 실무 담당자가 더욱 본연의 임부를 충실할
                                    수 있도록 합니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 mb-3">
                    <div class="card shadow">
                        <div class="card-body py-3 px-4">
                            <div class="text-center">
                                <img style="width:60px" class="mb-3"
                                    src="{{ url('/') }}/around/images/schedule3.svg" alt="생산성 향상을 위한 RIA 환경">
                                <h4>생산성 향상을 위한 RIA 환경</h4>
                                <p>GlobalMIG SMS ADOBF FLEX를 이용한 RIA(Rich Internet Application) 환경으로써, 사용자가 별도의 프로그램 설치나 구동
                                    없이 웹 브라우저만으로 손쉽게 Desktop Application과 유사한 환경을 제공합니다.
                                    페이지 로딩 없이 즉각적으로 반응하는 UI를 통해 실제 온라인 광고의 관리 작업을 수행할 때 빠르고 편리하게 작업하실 수 있습니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-7 mb-3">
                    <div class="display-6 text-dark mb-3" style="font-weight: 900">주요기능</div>
                    <p>
                        사용자가 사전 설정한 일정에 따라 ON/OFF 스케쥴링/ 광고 효과 통합 보고서 / 자동입찰 및
                        순위 관리 광고 채널 통합/ 계정,캠페인,키워드 등의 통합관리/ROI에 의한 광고 캠페인 최적화
                    </p>
                    <p>
                        - 키워드 입찰 관리<br>
                        - 자동 입찰 지원 (절대순위/상대순위/노출측정지원)<br>
                        - 최소 5분 단위로 입찰 시도<br>
                        - 특정 기간 요일,시간대 입찰 예약 관리<br>
                        - 입찰 증감가 및 최대 입찰가 설정 지원<br>
                        - 최근 입찰시도 결과 및 시간대별 입찰 추세 그래픽 제공
                    </p>
                </div>
                <div class="col-xl-5 mb-3 d-flex">
                    <img class="my-auto mx-auto" src="{{ url('/') }}/around/images/schecule_content_bg.png"
                        alt="주요기능">
                </div>
            </div>
        </div>
    </div>

    <section id="realtime" class="pt-5 pb-3 mt-5 mb-3"
        style="background-image: url({{ url('/') }}/around/images/title_solution_bg7.png);background-size:cover; background-position: right;">
        <div class="container">
            <h5 class="mt-3" style="font-weight: 900;color:#079aca">Global MIG Solution</h5>
            <div class="row">
                <div class="col-12">
                    <h1 class="display-4 text-white" style="font-weight: 900">09 실시간 상담 SMS</h1>
                    <p class="text-white">
                        글로벌엠아이지가 제공하는 최상의 솔루션을 소개합니다.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="my-5 py-5">
        <div class="container mt-5">
            <h3 cllass="mb-3" style="font-weight: 900">실시간 상담 SMS 장점</h3>
            <div class="row">
                <div class="col-xl-6 mb-3">
                    - 복잡한 프로그램 설치 없이 사용 가능<br>
                    - 빠른 응대로 고객 불편을 바로 해소<br>
                    - 입찰 증감가 및 외대 입찰가 설정 지원
                </div>
                <div class="col-xl-6 mb-3">
                    - 고객의 관심을 파악하여 매출 증가 효과<br>
                    - 지식 톡과 연동으로 다양한 기능 추가
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-3 mb-3">
                    <div class="card shadow">
                        <div class="card-body py-3 px-4">
                            <div class="text-center">
                                <img style="width:60px" class="mb-3" src="{{ url('/') }}/around/images/sms1.svg"
                                    alt="모든 기기 상담">
                                <h4>모든 기기 상담</h4>
                                <p>
                                    광고비 소진 목적으로<br>
                                    같은 사이트를 여러번 클릭
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 mb-3">
                    <div class="card shadow">
                        <div class="card-body py-3 px-4">
                            <div class="text-center">
                                <img style="width:60px" class="mb-3" src="{{ url('/') }}/around/images/sms2.svg"
                                    alt="공격적 마케팅">
                                <h4>공격적 마케팅</h4>
                                <p>
                                    접속자에게 먼저 다가가는<br>
                                    공격적인 마케팅은 매출 상승
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 mb-3">
                    <div class="card shadow">
                        <div class="card-body py-3 px-4">
                            <div class="text-center">
                                <img style="width:60px" class="mb-3" src="{{ url('/') }}/around/images/sms3.svg"
                                    alt="부재시 알람 기능">
                                <h4>부재시 알람 기능</h4>
                                <p>
                                    일일 리포터, 부정 클릭<br>
                                    알람 등 부재시 메시지 받음
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 mb-3">
                    <div class="card shadow">
                        <div class="card-body py-3 px-4">
                            <div class="text-center">
                                <img style="width:60px" class="mb-3" src="{{ url('/') }}/around/images/sms4.svg"
                                    alt="상담 내용 5년 보존">
                                <h4>상담 내용 5년 보존</h4>
                                <p>
                                    상담했던 접속자를 구분하여 상담<br>
                                    내용 추적 후 상담 진행
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
@section('javascript_just_before_body')
@endsection
