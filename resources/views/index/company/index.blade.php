@extends('layouts.front')

@section('inside_head_tag')
@endsection
@section('content')
    <div id="scollspy_bar" class="scollspy_bar">
        <!--스크롤바(navbar)-->
        <ul class="nav-menu">
            <li>
                <a id="philosophy_dot" href="#philosophy" class="dot active">
                    <span class="d-none d-md-block">경영철학과 목표</span>
                    <span class="d-block d-md-none" style="min-height:1rem"></span>
                </a>
            </li>
            <li>
                <a id="history_dot" href="#history" class="dot">
                    <span class="d-none d-md-block">회사연혁</span>
                    <span class="d-block d-md-none" style="min-height:1rem"></span>
                </a>
            </li>
            <li>
                <a id="team_dot" href="#team" class="dot">
                    <span class="d-none d-md-block">조직도</span>
                    <span class="d-block d-md-none" style="min-height:1rem"></span>
                </a>
            </li>
            <li>
                <a id="cto_dot" href="#cto" class="dot">
                    <span class="d-none d-md-block">About CTO</span>
                    <span class="d-block d-md-none" style="min-height:1rem"></span>
                </a>
            </li>
            <li>
                <a id="business_dot" href="#business" class="dot">
                    <span class="d-none d-md-block">사업내용소개</span>
                    <span class="d-block d-md-none" style="min-height:1rem"></span>
                </a>
            </li>
        </ul>
    </div>

    <section id="philosophy" class="mb-5 py-3">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    <h5 style="font-weight: 900;color:#079aca">경영철학과 목표</h5>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-xl-6">
                    <h1 class="display-4" style="font-weight: 900">Company Story</h1>
                    <br>
                    <p>
                        종합광고대행사, Digital marketing agency로 Client의 실질적인 KPI관리와 ROAS성장기여를 위해
                    </p>
                    <p>
                        Algorithm을 통한 Machine Learning Al, Bidding API, Groupware, Analytics 등 Software개발과
                    </p>
                    <p>
                        매체사 Platform Data mining 및 Simulation을 통한 매출산출과 실현 그로 인한 Big Data구성으로 Client에게 필요할 수 밖에 없는 대행사로
                        자리매김하여 광고주들의 점유율을 높일 것입니다.
                    </p>
                </div>
                <div class="col-xl-6 d-flex">
                    <img class="ms-auto" src="{{ url('/') }}/around/images/bg_company_story.png" alt="Company Story" />
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section id="history" class="py-3 my-5"
        style="background: url({{ url('/') }}/around/images/bg_history.png) no-repeat 0 100%;background-size: cover;background-position: bottom;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 style="font-weight: 900;color:#079aca">회사 연혁</h5>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <h1 class="display-4" style="font-weight: 900">Company History</h1>
                </div>
            </div>
            <div class="d-none d-md-block">
                <div class="steps steps-horizontal-md">
                    <!-- Active step -->
                    <div class="step active">
                        <div class="step-number">
                            <div class="step-number-inner">2024</div>
                        </div>
                        <div class="step-body">
                            <ul>
                                <li class="mb-2" style="font-size:12px;font-weight:600">
                                    Senior 입사 자격 조건 추가<br>
                                    - 글로벌 E-Commerce MD, Meta 미디어 바잉,
                                    미디어 플래닝, 마케팅 디벨로프 프로패셔널
                                </li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">컨소시엄을 통한 구글 본사, 메타 프로팀 출신 전문가 무료
                                    서포트</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Active step -->
                    <div class="step active">
                        <div class="step-number">
                            <div class="step-number-inner">2023</div>
                        </div>
                        <div class="step-body">
                            <ul>
                                <li class="mb-2" style="font-size:12px;font-weight:600">기존 정량분석환경에서 정성분석을 위한 기획, 개발, 업무
                                </li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">GAC, GAIQ, SNS광고마케터, 검색광고마케터 재직자
                                    50%이상 자격증취득완료</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">정확한 KPI산출과 광고효율개선 Service를 위한 사내
                                    Big Data분석가와 Performance marketer 양성</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">Customizing한 실시간 광고주 선대응 자사 Deep
                                    learning Groupware 자체개발</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">우아한형제들, 푸드테크 공식협력사</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">컨소시엄 해외매체 핀터레스트, 레딧, 트위터 X, 틱톡,
                                    라인, 큐텐</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Step -->
                    <div class="step active">
                        <div class="step-number">
                            <div class="step-number-inner">2022</div>
                        </div>
                        <div class="step-body">
                            <ul>
                                <li class="mb-2" style="font-size:12px;font-weight:600">혁신성장유형 벤처기업등록</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">
                                    System Mapping 기준<br>
                                    - 광고 대행 유지 Client 9,000개 돌파<br>
                                    - 광고 대행 전체 Client 15,000개 돌파
                                </li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">요기요 최우수 공식대행사 선정</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Step -->
                    <div class="step active">
                        <div class="step-number">
                            <div class="step-number-inner">2020</div>
                        </div>
                        <div class="step-body">
                            <ul>
                                <li class="mb-2" style="font-size:12px;font-weight:600">Delivery사업부 신설</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">요기요공식대행사 선정</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Step -->
                    <div class="step active">
                        <div class="step-number">
                            <div class="step-number-inner">2019</div>
                        </div>
                        <div class="step-body">
                            <ul>
                                <li class="mb-2" style="font-size:12px;font-weight:600">Python, Tensorflow, Brain.js 및
                                    Community를 통한 deep learning groupware 연구</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">Shopify를 통한 마켓플레이스 데이터 연동 진행과
                                    osCommerce, Prestashop, Woo
                                    Commerce 등 활용하여 해외 판매 스토어 개발서비스 및 운영</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="steps steps-horizontal-md mt-5">
                    <!-- Step -->
                    <div class="step active">
                        <div class="step-number">
                            <div class="step-number-inner">2018</div>
                        </div>
                        <div class="step-body">
                            <ul>
                                <li class="mb-2" style="font-size:12px;font-weight:600">자사 Analytics 개발 및 Service</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Step -->
                    <div class="step active">
                        <div class="step-number">
                            <div class="step-number-inner">2017</div>
                        </div>
                        <div class="step-body">
                            <ul>
                                <li class="mb-2" style="font-size:12px;font-weight:600">영상제작사업부 신설</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">광고대행 client 4,000업체돌파</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">Global business를 위한 바이두, Yandex,
                                    AoI, INMOBI, soopi, Haosou260, A8, 마이크로애드, 아메바 블로그, Vig Link contact 및 광고대행 service</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Step -->
                    <div class="step active">
                        <div class="step-number">
                            <div class="step-number-inner">2016</div>
                        </div>
                        <div class="step-body">
                            <ul>
                                <li class="mb-2" style="font-size:12px;font-weight:600">Multi Channel Network service
                                </li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">교통공사, 옥외광고 원창사 업무제휴</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">조선일보, 중아일보, 동아일보 외 25개 업체 언론사
                                    업무제휴</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">광고대행 client 1,000업체 돌파</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Step -->
                    <div class="step active">
                        <div class="step-number">
                            <div class="step-number-inner">2015</div>
                        </div>
                        <div class="step-body">
                            <ul>
                                <li class="mb-2" style="font-size:12px;font-weight:600">글로벌엠아이지 디지털마케팅 사업부 '법인사업자' 설립
                                </li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">Naver, Daum, Google 공식재대행사 선정
                                </li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">Criteo, Network Platform 광고대행
                                    Service</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">자체적인 Mobile NCPI service 개설</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">Cashilde 등 Reward platform
                                    system 제휴</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Step -->
                    <div class="step active">
                        <div class="step-number">
                            <div class="step-number-inner">2014</div>
                        </div>
                        <div class="step-body">
                            <ul>
                                <li class="mb-2" style="font-size:12px;font-weight:600">엠아이지 디지털마케팅 사업부 '개인사업자' 설립</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">NAVER, DAUM, Google 광고대행 service
                                </li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">Kakao, facebook business 광고대행
                                    service</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-block d-md-none">
                <div class="steps steps-horizontal-md">

                    <!-- Active step -->
                    <div class="step active">
                        <div class="step-number">
                            <div class="step-number-inner">2024</div>
                        </div>
                        <div class="step-body">
                            <ul>
                                <li class="mb-2" style="font-size:12px;font-weight:600">
                                    Senior 입사 자격 조건 추가<br>
                                    - 글로벌 E-Commerce MD, Meta 미디어 바잉,
                                    미디어 플래닝, 마케팅 디벨로프 프로패셔널
                                </li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">컨소시엄을 통한 구글 본사, 메타 프로팀 출신 전문가 무료
                                    서포트</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Active step -->
                    <div class="step active">
                        <div class="step-number">
                            <div class="step-number-inner">2023</div>
                        </div>
                        <div class="step-body">
                            <ul>
                                <li class="mb-2" style="font-size:12px;font-weight:600">기존 정량분석환경에서 정성분석을 위한 기획, 개발, 업무
                                </li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">GAC, GAIQ, SNS광고마케터, 검색광고마케터 재직자
                                    50%이상 자격증취득완료</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">정확한 KPI산출과 광고효율개선 Service를 위한 사내
                                    Big Data분석가와 Performance marketer 양성</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">Customizing한 실시간 광고주 선대응 자사 Deep
                                    learning Groupware 자체개발</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">우아한형제들, 푸드테크 공식협력사</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">컨소시엄 해외매체 핀터레스트, 레딧, 트위터 X, 틱톡,
                                    라인, 큐텐</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Step -->
                    <div class="step active">
                        <div class="step-number">
                            <div class="step-number-inner">2022</div>
                        </div>
                        <div class="step-body">
                            <ul>
                                <li class="mb-2" style="font-size:12px;font-weight:600">혁신성장유형 벤처기업등록</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">
                                    System Mapping 기준<br>
                                    - 광고 대행 유지 Client 9,000개 돌파<br>
                                    - 광고 대행 전체 Client 15,000개 돌파
                                </li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">요기요 최우수 공식대행사 선정</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Step -->
                    <div class="step active">
                        <div class="step-number">
                            <div class="step-number-inner">2020</div>
                        </div>
                        <div class="step-body">
                            <ul>
                                <li class="mb-2" style="font-size:12px;font-weight:600">Delivery사업부 신설</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">요기요공식대행사 선정</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Step -->
                    <div class="step active">
                        <div class="step-number">
                            <div class="step-number-inner">2019</div>
                        </div>
                        <div class="step-body">
                            <ul>
                                <li class="mb-2" style="font-size:12px;font-weight:600">Python, Tensorflow, Brain.js 및
                                    Community를 통한 deep learning groupware 연구</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">Shopify를 통한 마켓플레이스 데이터 연동 진행과
                                    osCommerce, Prestashop, Woo
                                    Commerce 등 활용하여 해외 판매 스토어 개발서비스 및 운영</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Step -->
                    <div class="step active">
                        <div class="step-number">
                            <div class="step-number-inner">2018</div>
                        </div>
                        <div class="step-body">
                            <ul>
                                <li class="mb-2" style="font-size:12px;font-weight:600">자사 Analytics 개발 및 Service</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Step -->
                    <div class="step active">
                        <div class="step-number">
                            <div class="step-number-inner">2017</div>
                        </div>
                        <div class="step-body">
                            <ul>
                                <li class="mb-2" style="font-size:12px;font-weight:600">영상제작사업부 신설</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">광고대행 client 4,000업체돌파</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">Global business를 위한 바이두, Yandex,
                                    AoI, INMOBI, soopi, Haosou260, A8, 마이크로애드, 아메바 블로그, Vig Link contact 및 광고대행 service</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Step -->
                    <div class="step active">
                        <div class="step-number">
                            <div class="step-number-inner">2016</div>
                        </div>
                        <div class="step-body">
                            <ul>
                                <li class="mb-2" style="font-size:12px;font-weight:600">Multi Channel Network service
                                </li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">교통공사, 옥외광고 원창사 업무제휴</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">조선일보, 중아일보, 동아일보 외 25개 업체 언론사
                                    업무제휴</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">광고대행 client 1,000업체 돌파</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Step -->
                    <div class="step active">
                        <div class="step-number">
                            <div class="step-number-inner">2015</div>
                        </div>
                        <div class="step-body">
                            <ul>
                                <li class="mb-2" style="font-size:12px;font-weight:600">글로벌엠아이지 디지털마케팅 사업부 '법인사업자' 설립
                                </li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">Naver, Daum, Google 공식재대행사 선정
                                </li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">Criteo, Network Platform 광고대행
                                    Service</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">자체적인 Mobile NCPI service 개설</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">Cashilde 등 Reward platform
                                    system 제휴</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Step -->
                    <div class="step active">
                        <div class="step-number">
                            <div class="step-number-inner">2014</div>
                        </div>
                        <div class="step-body">
                            <ul>
                                <li class="mb-2" style="font-size:12px;font-weight:600">엠아이지 디지털마케팅 사업부 '개인사업자' 설립</li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">NAVER, DAUM, Google 광고대행 service
                                </li>
                                <li class="mb-2" style="font-size:12px;font-weight:600">Kakao, facebook business 광고대행
                                    service</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section id="team" class="mt-3 mb-5 py-3">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    <h5 style="font-weight: 900;color:#079aca">조직도</h5>
                </div>
            </div>
            <div class="row mb-5 mb-3">
                <div class="col-xl-12">
                    <h1 class="display-4" style="font-weight: 900">Company<br>Organization</h1>
                </div>
            </div>
            <div class="row mb-5 d-none d-sm-block">
                <img class="ms-auto" src="{{ url('/') }}/around/images/new/organization.jpg"
                    alt="Company Organization" />
            </div>
            <div class="row mb-3 d-block d-sm-none">
                <img class="ms-auto" src="{{ url('/') }}/around/images/new/m_organization.jpg"
                    alt="Company Organization" />
            </div>
        </div>
    </section>

    <section id="cto" class="my-5 py-5" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    <h5 style="font-weight: 900;color:#079aca">About CTO</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="display-4" style="font-weight: 900">개발이사 소개</h1>
                </div>
                <div class="col-xl-12">
                    현재는 글로범엠아이지 가산 지점 또는 베트남 지점에 상주하며, Digital marketing관련 back-end 케피(Conversion API)연동작업, SEO 등을 서포트를 하고
                    있습니다. 광고 관련 솔루션 개발 이력으로, 해외 바이어와 국내 화장품 제조 업체를 연결하는 플랫폼 Crescent Seoul Co., Ltd.의 해외 마케팅 컨설팅 및 웹시스템 개발,
                    Dearcus Co., Ltd의 개인 브랜딩 마케팅 솔루션 개발 등을 통해서 기술과 마케팅의 융합을 통해서 외주 업체의 성장을 도왔습니다. 2023년도 11월 부터는 어떤 광고상품도
                    Customizing하여 실시간 광고주 선대응 기능이 있는 자사의 Deep learning Groupware를 자체적으로 개발, 완성 이를 통한 스마트한 광고주케어가 가능하도록 운영하고
                    있습니다.
                    <br><br>
                    사내개발이사주도하 osCommerce, Prestashop, Woo Commerce 등을 활용하여 해외 판매 스토어를 직접 개발하고 운영해 왔으며, 2019년부터는 Shopify를 통해
                    마켓플레이스 데이터 연동을 진행해왔습니다.
                    <br><br>
                    또한, 국내 기업들의 해외 마케팅을 지원하는 대행사로서의 역할도 수행하고 있습니다. 저희는 Shopify 플랫폼을 활용한 글로벌 셀링 전문성, Google, Meta 키워드 광고,
                    디스플레이 광고, SNS, SEO 등 다양한 퍼포먼스 마케팅 전략을 통해 고객사의 목표 달성을 돕고 있습니다.
                    <br><br>
                    -경험 및 전문성
                    사내개발이사는 10년 이상의 해외 플랫폼 스토어 및 광고 운영 경험을 보유한 전문가입니다. Etsy, Dawanda, eBay 등 다양한 글로벌 전자상거래 플랫폼에서 성공적인 스토어
                    운영과 광고 캠페인을 이끌어왔으며, 이를 통해 각 마켓플레이스의 광고 전략이해를 바탕으로 최적의 결과를 도출하면서. 글로벌 셀러로서의 강력한 입지를 구축했습니다.
                    <br><br>
                    특히 사내개발이사는 국내 역직구몰의 초기 단계였던 2009년부터 2011년까지, Etsy와 Dawanda에서 직접 운영하는 스토어를 통해 글로벌 셀러로서의 입지를 다졌습니다. 그 결과,
                    Etsy에서 글로벌 셀러 순위 10위, Dawanda에서는 4위에 오르는 성과를 거두었습니다. 이처럼 초기부터 해외 시장에서 성공적인 판매를 이끌어내며 쌓은 경험은 저희의 강력한 경쟁력이
                    되었습니다.
                    <br><br>
                    다양한 해외 경험과 IT 기술력을 바탕으로, 수출이 가능한 국내 브랜드를 발굴하고, 초기 단계부터 해외 결제 및 판매가 가능한 시스템을 구축해왔습니다. 이 과정에서 자사 역직구몰의 광고
                    전략 수립, 예산 계획, 콘텐츠 제작, 캠페인 설정, 데이터 분석을 통한 성과 최적화에 이르기까지 종합적인 경험을 쌓았으며, 이를 통해 다수의 성공적인 사례로 이어졌습니다.
                    <br><br>
                    그는 직접 개발하고 운영한 회사에서 초기 수출 100만 불을 달성하였으며, 이 성과로 수출 유망 중소기업으로 선정된 바 있습니다. 또한 미국, 호주, 일본, 베트남, 중국, 영국 등
                    6개국에서 총 26회에 걸쳐 해외 전시회에 참가하며 글로벌 시장에서의 입지를 더욱 강화했습니다.
                    <br><br>
                    사내개발이사는 MS 협업 프로젝트와 혁신성장패키지(기술개발사업) R&D에 참여하며 기술 개발과 프로젝트 관리를 성공적으로 수행해 왔습니다. 미주 법인 설립 및 운영 경험을 바탕으로,
                    베트남 지사화 사업 및 Kotra 연계를 통해 해외 지면 광고 대행과 비즈니스 파트너 발굴에도 많은 성과를 이루어냈습니다. 이외에도 해외 영업팀 및 마케팅 팀을 운영하며 다양한 글로벌
                    프로젝트를 성공적으로 이끌어왔습니다.
                </div>
            </div>
        </div>
    </section>

    <section id="overseas" class="my-5 py-3">
        <div class="container">
            <h5 style="font-weight: 900;color:#079aca">글로벌엠아이지 내부 및 컨소시엄을 이루는 전 직원이 2,3개 국어 유창하게 사용 가능</h5>
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="h2" style="font-weight: 900">필리핀 직원들은 영어는 물론,
                        그 외 프랑스어, 일본어 등도 구사 가능합니다.</h1>
                </div>
                <div class="col-xl-12">
                    글로벌적으로 봤을 때 광고비를 제일 많이 사용하는 핵심 시장이 중국 제외 미국, 한국, 그 다음에 독일, 영국, 일본입니다. 글로벌엠아이
                    지는 해당 국가들의 광고를 전부 원활하게 진행할 수 있으며, 프랑스 광고주도 상당히 많습니다.
                    <br><br>
                    특히 저희 필리핀 지사에서는 콘텐츠 제작팀이 따로 있으며, 약 30명의 인력을 보유하고 있습니다. 콘텐츠 소재는 2D, 3D 상관없이
                    전부 제작합니다.
                </div>
                <div class="col-xl-12 mt-5 text-center">
                    <img src="{{ url('/') }}/around/images/new/globe.png">
                </div>
            </div>
        </div>
    </section>
    <section id="overseas" class="mt-5 pt-3 pb-5" style="background-color:#f1f1f1">
        <div class="container">
            <h5 class="mt-5" style="font-weight: 900;color:#079aca">글로벌엠아이지 내부 및 컨소시엄을 이루고 있는 직원들의</h5>
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="h2" style="font-weight: 900">필리핀 지사나 한국 일부 직원분들도 메타 프로팀이 존재</h1>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-xl-8 offset-xl-2">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ url('/') }}/around/images/new/global1.png">
                        </div>
                        <div class="col-4">
                            <img src="{{ url('/') }}/around/images/new/global2.png">
                        </div>
                        <div class="col-4">
                            <img src="{{ url('/') }}/around/images/new/global3.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    메타에서 위 3가지를 획득한 직원을 자사에서 보유하고 있습니다. 또한 메타 제공 기술 프로그램 API를 가지고 구현한 프로그램 개수와
                    해당 프로그램들의 용도, 그 이후에 사용성 평가를 통과하면서 메타에서 기술 파트너 자격도 부여받았습니다.
                </div>
            </div>
        </div>
    </section>

    <section id="business" class="mt-0 py-5"
        style="background: url({{ url('/') }}/around/images/bg_process.png) no-repeat center center; background-size: cover;">
        <div class="container">
            <div class="row mb-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:white">Management Goals</h5>
                    <h1 class="display-4" style="font-weight: 900;color:white">회사의 앞으로의 방향</h1>
                </div>
                <div class="col-xl-12 text-white h5">
                    국내광고시장확대 및 점유율을 더욱 확보하기 위하여 S/W Analytics와 Groupware기능 등 기술경쟁력을 강화하고<br><br>
                    해외광고집행을 통한 Client해외진출을 도모하여 고품질의 광고대행 및 CRM을 이뤄내며<br><br>
                    대행사 > 미디어랩사로 자리매김을 목표하고 있습니다
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:white">사업내용 소개</h5>
                    <h1 class="display-4" style="font-weight: 900;color:white">Company Information</h1>
                </div>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 d-none d-lg-block">
                    <div class="card">
                        <div class="card-body text-start">
                            <img style="width:50%" src="{{ url('/') }}/around/images/information1.svg"
                                alt="광고 마케팅에 대한 api와 sdk 기반 소프트웨어와 클라이언트 맞춤형 독립적 소프트웨어 개발" />
                            <h4 class="fw-bold mt-3">Service 1</h4>
                            <p>Advertisement API, SDK기반 광고주 맞춤형 소프트웨어개발</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 d-none d-lg-block">
                    <div class="card">
                        <div class="card-body text-start">
                            <img style="width:50%" src="{{ url('/') }}/around/images/information2.svg"
                                alt="미디어플래닝 관리 및 운영 구글, 페이스북, 카카오 등 매체 전략 수립 및 마케팅 kpi 달성을 위한 최적화 관리" />
                            <h4 class="fw-bold mt-3">Service 2</h4>
                            <p>
                                Portal and SNS/MCN search, display, contents, event 등 국내외 지표활용,
                            </p>
                            <p>
                                Media planning, creative campaign 기획 및 전략수립 > 관리/운영과
                            </p>
                            <p>
                                KPI달성을 위한 CTR, ROAS 등 conversion optimization
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 d-none d-lg-block">
                    <div class="card">
                        <div class="card-body text-start">
                            <img style="width:50%" src="{{ url('/') }}/around/images/information3.svg"
                                alt="데이터 분석을 통한 다양한 가설 수립 및 진행" />
                            <h4 class="fw-bold mt-3">Service 3</h4>
                            <p>
                                데이터 성과분석을 통한 다양한 A/B Test 가설 수립 및 진행
                            </p>
                            <p>
                                lead nurturing data 수집/통계/활용
                            </p>
                            <p>
                                실행 - 측정 - 학습 - 개선cycle
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 d-none d-lg-block">
                    <div class="card">
                        <div class="card-body text-start">
                            <img style="width:50%" src="{{ url('/') }}/around/images/information6.svg"
                                alt="cpc 방식 광고 상품 진행 시, 부정 클릭 의심 IP 리스트 화 및 경고 차단을 하주는 프로그램" />
                            <h4 class="fw-bold mt-3">부정클릭 대응</h4>
                            <p>CPC방식 광고 상품 진행 시, 부정클릭 의심 IP 리스트화 및 경고/차단을 해주는 프로그램</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 d-none d-lg-block">
                    <div class="card">
                        <div class="card-body text-start">
                            <img style="width:50%" src="{{ url('/') }}/around/images/information7.svg"
                                alt="광고노출 형태가 지정된 광고 인벤토리에 입찰 방식" />
                            <h4 class="fw-bold mt-3">광고 자동 입찰</h4>
                            <p>광고 노출 형태가 지정된 광고 인벤토리에 입찰 방식(순위/게재) 노출인 경우, 원활한 입찰 설정을 도와주는 프로그램</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 d-none d-lg-block">
                    <div class="card">
                        <div class="card-body text-start">
                            <img style="width:50%" src="{{ url('/') }}/around/images/information4.svg"
                                alt="마케팅 데이터의 조직화 운영 등 사내 경쟁력 있는 마케터 육성이 이루어지도록 맞춤 업무지시 및 자료제공" />
                            <h4 class="fw-bold mt-3">Analytics</h4>
                            <p>
                                low data: 세분화, 마케팅, 방문 획득, 방문 형태, 전환
                            </p>
                            <p>
                                conversion Sequence: Referer/Parameter
                            </p>
                            <p>
                                데이터베이스 매출과정 분석을 통한 효율개선 작업으로 실질적 KPI관리와 ROAS성장기여
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 d-none d-lg-block">
                    <div class="card">
                        <div class="card-body text-start">
                            <img style="width:50%" src="{{ url('/') }}/around/images/information5.svg"
                                alt="클라이언트의 실질적인  kpi관리와 roas 성장 기여, 기조분석 기능" />
                            <h4 class="fw-bold mt-3">Groupware AI</h4>
                            <p>
                                광고와 마케팅 데이터의 조직화 운영, benefit in Agency big data(맞춤 인재, 개선안, 재선/성공적 사례 등)를
                            </p>
                            <p>
                                Algorithm을 통한 Machine Learning AI로 맞춤제공 및 광고주 문제점 선대응
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 d-block d-lg-none">
                    <div class="card">
                        <div class="card-body d-flex py-0 px-2">
                            <img class="me-3" style="width:15%"
                                src="{{ url('/') }}/around/images/information1.svg"
                                alt="광고 마케팅에 대한 api와 sdk 기반 소프트웨어와 클라이언트 맞춤형 독립적 소프트웨어 개발" />
                            <div>
                                <h4 class="fw-bold mt-3">Service 1</h4>
                                <p>Advertisement API, SDK기반 광고주 맞춤형 소프트웨어개발</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 d-block d-lg-none">
                    <div class="card">
                        <div class="card-body d-flex py-0 px-2">
                            <img class="me-3" style="width:15%"
                                src="{{ url('/') }}/around/images/information2.svg"
                                alt="미디어플래닝 관리 및 운영 구글, 페이스북, 카카오 등 매체 전략 수립 및 마케팅 kpi 달성을 위한 최적화 관리" />
                            <div>
                                <h4 class="fw-bold mt-3">Service 2</h4>
                                <p>
                                    Portal and SNS/MCN search, display, contents, event 등 국내외 지표활용,
                                </p>
                                <p>
                                    Media planning, creative campaign 기획 및 전략수립 > 관리/운영
                                </p>
                                <p>
                                    KPI달성을 위한 CTR, ROAS 등 conversion optimization
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 d-block d-lg-none">
                    <div class="card">
                        <div class="card-body d-flex py-0 px-2">
                            <img class="me-3" style="width:15%"
                                src="{{ url('/') }}/around/images/information3.svg"
                                alt="데이터 분석을 통한 다양한 가설 수립 및 진행" />
                            <div>
                                <h4 class="fw-bold mt-3">Service 3</h4>
                                <p>
                                    데이터 성과분석을 통한 다양한 A/B Test 가설 수립 및 진행
                                </p>
                                <p>
                                    lead nurturing data 수집/통계/활용
                                </p>
                                <p>
                                    실행 - 측정 - 학습 - 개선cycle
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 d-block d-lg-none">
                    <div class="card">
                        <div class="card-body d-flex py-0 px-2">
                            <img class="me-3" style="width:15%"
                                src="{{ url('/') }}/around/images/information6.svg"
                                alt="cpc 방식 광고 상품 진행 시, 부정 클릭 의심 IP 리스트 화 및 경고 차단을 하주는 프로그램" />
                            <div>
                                <h4 class="fw-bold mt-3">부정클릭 대응</h4>
                                <p>CPC방식 광고 상품 진행 시, 부정클릭 의심 IP 리스트화 및 경고/차단을 해주는 프로그램</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 d-block d-lg-none">
                    <div class="card">
                        <div class="card-body d-flex py-0 px-2">
                            <img class="me-3" style="width:15%"
                                src="{{ url('/') }}/around/images/information7.svg"
                                alt="광고노출 형태가 지정된 광고 인벤토리에 입찰 방식" />
                            <div>
                                <h4 class="fw-bold mt-3">광고 자동 입찰</h4>
                                <p>광고 노출 형태가 지정된 광고 인벤토리에 입찰 방식(순위/게재) 노출인 경우, 원활한 입찰 설정을 도와주는 프로그램</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 d-block d-lg-none">
                    <div class="card">
                        <div class="card-body d-flex py-0 px-2">
                            <img class="me-3" style="width:15%"
                                src="{{ url('/') }}/around/images/information4.svg"
                                alt="마케팅 데이터의 조직화 운영 등 사내 경쟁력 있는 마케터 육성이 이루어지도록 맞춤 업무지시 및 자료제공" />
                            <div>
                                <h4 class="fw-bold mt-3">Analytics</h4>
                                <p>
                                    low data: 세분화, 마케팅, 방문 획득, 방문 형태, 전환
                                </p>
                                <p>
                                    conversion Sequence: Referer/Parameter
                                </p>
                                <p>
                                    데이터베이스 매출과정 분석을 통한 효율개선 작업으로 실질적 KPI관리와 ROAS성장기여
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 d-block d-lg-none">
                    <div class="card">
                        <div class="card-body d-flex py-0 px-2">
                            <img class="me-3" style="width:15%"
                                src="{{ url('/') }}/around/images/information5.svg"
                                alt="클라이언트의 실질적인  kpi관리와 roas 성장 기여, 기조분석 기능" />
                            <div>
                                <h4 class="fw-bold mt-3">Groupware AI</h4>
                                <p>
                                    광고와 마케팅 데이터의 조직화 운영, benefit in Agency big data(맞춤 인재, 개선안, 재선/성공적 사례 등)를
                                </p>
                                <p>
                                    Algorithm을 통한 Machine Learning AI로 맞춤제공 및 광고주 문제점 선대응
                                </p>
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
