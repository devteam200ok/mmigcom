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
            <div class="row">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca;">바이럴마케팅 - 부분무료</h5>
                    <h1 class="display-4" style="font-weight: 900">바이럴 마케팅이란?</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <img src="{{ url('/') }}/around/images/mcn/viral_main.png" alt="바이럴마케팅">
                </div>
                <div class="col-12 text-center mt-3">
                    <h5 style="font-weight: 900;">소셜미디어를 통해 소비자들에게 바이러스처럼 빠르게 확산되는 파급력을 가진 입소문마케팅</h5>
                    <p>소비자들이 가장 쉽게 접하고 이용하는 매체에 기업 또는 제품에 관련된 정보를 흘려주면,<br>
                        소비자들의 자발적이고도 적극적인 정보공유와 입소문을 통해 자연스럽게 퍼지기 때문에 저렴한 비용으로 큰 광고효과를 기대할 수 있다.</p>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="mt-5 pt-3 pb-4">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-7 mb-3">
                    <h5 style="font-weight: 900;color:#079aca">Introduction
                    </h5>
                    <h1 class="display-4" style="font-weight: 900">바이럴 마케팅 소개</h1>
                    <p class="fw-bold">
                        블로그나 카페, 지식인, 언론사 등의 지면을 이용하여 소비자들에게 자연스럽게 정보를 제공하여 기업의 신뢰도 및 인지도를 상승시키고 구매욕구를 자극시키는 마케팅 기법.
                    </p>
                </div>
                <div class="col-xl-5 mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/mcn/viral_intro_bg.png" alt="바이럴 마케팅">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-4">
                <div class="col-xl-7 mb-3 text-right order-xl-2">
                    <h5 style="font-weight: 900;color:#079aca">Reason
                    </h5>
                    <h1 class="display-4" style="font-weight: 900">왜 바이럴 마케팅 일까?</h1>
                    <p class="fw-bold">
                        소비자들이 쉽게 상품정보와 후기를 접하고 구매에 대한 확신을 가질 수 있는 바이럴 마케팅!
                        소비자들의 자발적이고도 적극적인 정보공유와 입소문을 통해 브랜드를 소비자들에게
                        자연스럽게 노출시키기 때문에, 공감과 참여가 가능하며, 빠른 파급력을 기대 할 수 있습니다.
                    </p>
                </div>
                <div class="col-xl-5 mb-3 text-center order-xl-1">
                    <img src="{{ url('/') }}/around/images/mcn/viral_why.png" alt="바이럴 마케팅">
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 pt-5 pb-4" style="background-color:#4a4a4a">
        <div class="container">
            <div class="row my-5">
                <div class="col-xl-7 mb-3">
                    <h5 style="font-weight: 900;color:white">Blog Posting Advertising

                    </h5>
                    <h1 class="display-4" style="font-weight: 900;color:white">블로그 배포형 광고</h1>
                    <p class="fw-bold text-white">
                        블로그를 운영하는 블로거들에게 직접 포스팅을 의뢰하여 자사의 브랜드 또는 상품을 홍보하는 방식. 일일 방문자 상관없이 무작위로 배포하는 일반블로그 배포와 일일 방문자를 원하는
                        숫자로 지정하여 일명 준파워블로거에게 포스팅을 의뢰하는 배포 방식으로 나뉜다.
                    </p>
                </div>
                <div class="col-xl-5 mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/mcn/blog_bg.png" alt="Blog Posting Advertising">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-5">
        <div class="container">
            <div class="row my-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca">AD Type</h5>
                    <h1 class="display-4" style="font-weight: 900">체험단? 기자단?</h1>
                    <div class="col-xl-12 mt-3">
                        <p>바이럴 마케팅의 종류에는 체험단 또는 기자단 형식이 있습니다.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-6 mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/mcn/ad_reporter.png" alt="체험단? 기자단?">
                </div>
                <div class="col-xl-6 mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/mcn/ad_experience.png" alt="체험단? 기자단?">
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 pt-3 pb-4" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12 mb-3">
                    <h5 style="font-weight: 900;color:#079aca">Advantages

                    </h5>
                    <h1 class="display-5" style="font-weight: 900">왜 체험단, 기자단이 필요한가요?</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 mb-3 text-center d-none d-lg-block">
                    <img src="{{ url('/') }}/around/images/mcn/ad_why.png" alt="Advantages">
                </div>
                <div class="col-xl-12 mb-3 text-center d-block d-lg-none">
                    <img src="{{ url('/') }}/around/images/mcn/ad_why_mo.png" alt="Advantages">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:#079aca">Process</h5>
                    <h1 class="display-4" style="font-weight: 900">체험단, 기자단 프로세스</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-2 offset-xl-2 col-lg-4 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body px-3 py-4">
                            <h1 style="font-weight: 900;color:#079aca">01</h1>
                            <h5 style="font-weight: 900;">현황분석</h5>
                            <p>기자단/체험단 모집 플랫폼 활용 일방문자 수가 양질의 블로거에게 직접 문의</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body px-3 py-4">
                            <h1 style="font-weight: 900;color:#079aca">02</h1>
                            <h5 style="font-weight: 900;">제품 체험</h5>
                            <p>기자단/체험단 직접 제품 체험</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body px-3 py-4">
                            <h1 style="font-weight: 900;color:#079aca">03</h1>
                            <h5 style="font-weight: 900;">포스팅 작성</h5>
                            <p>업체에서 전달한 특이사항이나, 제한 사항이 있을시 참고하여 작성하되 솔직한 제품 체험 리뷰를 작성</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body px-3 py-4">
                            <h1 style="font-weight: 900;color:#079aca">04</h1>
                            <h5 style="font-weight: 900;">결과 보고</h5>
                            <p>해당 포스팅 일 방문자, 진행 이후 자사 구매, 회원가입 변화량 확인하여 보고&리포팅</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" style="background-color:#4a4a4a">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:white">Influencer</h5>
                    <h1 class="display-4" style="font-weight: 900;color:white">인플루언서</h1>
                </div>
                <div class="col-xl-12 mt-3 text-white">
                    <p>타인에게 영향력을 끼치는 사람(Influence + er)이라는 뜻의 신조어로, 주로 SNS상에서 영향력이 큰 사람<br>
                        최근 소비 트렌드로 떠오른 인플루언서들의 영향이 날로 커지고 있기때문에 인플루언서 마케팅의 예산도 증가</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-6 mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/mcn/inf_process.png" alt="Influencer">
                </div>
                <div class="col-xl-6 mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/mcn/inf_why.png" alt="Influencer">
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <hr>
        </div>
    </section>
    <section class="py-5" style="background-color:#4a4a4a">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 ">
                    <h5 style="font-weight: 900;color:white">Media Reports
                    </h5>
                    <h1 class="display-4" style="font-weight: 900;color:white">언론보도</h1>
                    <div class="col-xl-12 mt-3 text-white">
                        <p>언론 매체별 기사송출을 통해 기업의 인지도 상승과 신제품 홍보 효과를 얻을 수 있는 매체 다른 바이럴보다 <strong>공신력 있는 언론사를 통해 진행</strong>하기
                            때문에<br>
                            정확성과 신뢰성을 강조하는 브랜드나 초기 브랜딩 단계에서 많이 진행하는 마케팅 방법</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12 mb-3 text-center d-none d-lg-block">
                    <img src="{{ url('/') }}/around/images/mcn/article_bg.png" alt="언론보도">
                </div>
                <div class="col-xl-12 mb-3 text-center d-block d-lg-none">
                    <img src="{{ url('/') }}/around/images/mcn/article_bg_mo.png" alt="언론보도">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-4 mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/mcn/article_why.png" alt="왜 언론보도가 필요할까요?">
                </div>
                <div class="col-xl-4 mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/mcn/article_stength.png" alt="언론보도 마케팅의 장점">
                </div>
                <div class="col-xl-4 mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/mcn/article_data.png" alt="언론 홍보 집행 데이터">
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <hr>
        </div>
    </section>
    <section class="py-5" style="background-color:#4a4a4a">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:white;">LIVE N SHOPPING</h5>
                    <h1 class="display-4" style="font-weight: 900;color:white">라이브 <span style="color:#06cc80">N</span> 쇼핑</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="row mt-4">
                    <div class="col-xl-12 mb-3 text-center d-none d-lg-block">
                        <img src="{{ url('/') }}/around/images/mcn/live_shopping_main.png" alt="라이브 N 쇼핑">
                    </div>
                    <div class="col-xl-12 mb-3 text-center d-block d-lg-none">
                        <img src="{{ url('/') }}/around/images/mcn/live_shopping_main_mo.png" alt="라이브 N 쇼핑">
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <hr>
        </div>
    </section>
    <section class="py-5" style="background-color:#4a4a4a">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h5 style="font-weight: 900;color:white">Live commerce</h5>
                    <h1 class="display-4" style="font-weight: 900;color:white">라이브 커머스 기획부터 영상까지 한번에</h1>
                </div>
                <div class="col-xl-12 mt-3 text-white">
                    <p>촬영에서 끝이 아닌, 사전 기획부터 판매분석 그리고 영상제공과 마케팅까지!<br>
                        전문 쇼호스트까지 가능한 풀마케팅 전략</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-3 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body text-center px-3 py-4">
                            <h2 class="mt-3" style="font-weight: 900;">상품 기획</h2>
                            <p>
                                메인/서브상품 선정<br>
                                장소 및 쇼호스트 섭외<br>
                                프롬프터자료 판넬 및 소품제작
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body text-center px-3 py-4">
                            <h2 class="mt-3" style="font-weight: 900;">영상 라이브</h2>
                            <p>
                                전문 촬영장비 및<br>
                                전문 촬영기사 진행
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body text-center px-3 py-4">
                            <h2 class="mt-3" style="font-weight: 900;">영상 제공</h2>
                            <p>전문프로그램을 통해<br>멀티플랫폼 다중 송출가능</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body text-center px-3 py-4">
                            <h2 class="mt-3" style="font-weight: 900;">상품 기획</h2>
                            <p>쇼핑검색광고, 추가 광고마케팅 진행<br> 및 제안 연결</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('javascript_just_before_body')
@endsection
