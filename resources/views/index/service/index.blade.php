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
    <section class="py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 mt-3">
                    <div class="text-start">
                        <h1 class="display-4" style="font-weight: 900">Company Free</h1>
                        <h5 style="font-weight: 900;color:#079aca">광고대행사 안내</h5>
                        <p class="fw-bold">
                            NAVER 등 매체사들과 정식으로 협약을 맺은 digital marketing전문업체가<br>무료광고대행을 해주는 부분은 각 매체사 사이트나 고객센터에서도 확인이
                            가능합니다.
                        </p>
                        <h4 class="mt-3 mb-2" style="text-decoration: none;color:#079aca">
                            &#9654; 피해 사례 자세히 보기
                        </h4>
                        <a class="fw-bold" href="https://saedu.naver.com/help/faq/ncc/view.naver?faqSeq=170" target="_blank"
                            style="color:blue">
                            https://saedu.naver.com/help/faq/ncc/view.naver?faqSeq=170
                        </a>
                        <p class="fw-bold mt-3">
                            비등록 대행사에 광고관리를 맡기는 경우 피해를 입을 수도 있으니, 주의하시기 바랍니다.
                        </p>
                    </div>

                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 mb-3">
                    <div class="card">
                        <div class="card-body py-2 px-3 text-center shadow">
                            <div class="row">
                                <div class="col-xl-2 d-flex align-items-center">
                                    <img style="width:100px;height:100px" class="mt-4 mb-3 mx-auto"
                                        src="{{ url('/') }}/around/images/free_2.png" alt="대행배정">
                                </div>
                                <div class="col-xl-10 d-flex">
                                    <div class="my-auto text-start">
                                        <h4 class="mt-3">대행배정</h4>
                                        <p>
                                            매체사에서 협약된 담당업무가 신규광고집행, 광고운영이 잘 안 되는 곳을 모니터링하고 대행배정 하여 무료로 관리해 드리는 것이 업무이자 의무이기
                                            때문에 신규광고주 튜토리얼 및 광고가 잘 안되는 부분을 지속효율개선하며 KPI제안, ROAS성장, ROI관리 등을 해드립니다.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="card">
                        <div class="card-body py-2 px-3 text-center shadow">
                            <div class="row">
                                <div class="col-xl-2 d-flex align-items-center">
                                    <img style="width:100px;height:100px" class="mt-4 mb-3 mx-auto"
                                        src="{{ url('/') }}/around/images/free_1.png" alt="무료관리">
                                </div>
                                <div class="col-xl-10 d-flex">
                                    <div class="my-auto text-start">
                                        <h4 class="mt-3">무료관리</h4>
                                        <p>
                                            광고주님께서 광고로 매출 효과를 못 보시면 광고를 그만두시게 됩니다. 그러면 NAVER, KAKAO, GOOGLE 등의 입장에서는 손실이
                                            발생하기에 지속적으로 광고를 그만두는 여론이 발생하지 않고 원활하게 광고의 대한 공신력을 인정받기 위하여 저희 같은 digital
                                            marketing 전문업체와 협약을 맺어 무료로 관리를 도와주도록 하는 시스템이므로 광고주님의 관리비용
                                            은 매체사 측에서 저희에게 부담하는 것 입니다.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mt-5" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="display-3" style="font-weight: 900">Company Free</h1>
                    <h5 style="font-weight: 900;color:#079aca">
                        제작, 개발, 광고대행을 맡긴 Client분들에게<br>
                        아래 혜택을 무료로 드립니다.
                    </h5>
                    <p class="fw-bold">
                        꼭 필요한 항목들로 구성된 무료 혜택을 받아보세요.
                    </p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-3 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body text-center py-3 px-3">
                            <img style="width:60px;height:60px" class="mt-4 mb-3 mx-auto"
                                src="{{ url('/') }}/around/images/free_ad.png" alt="무료광고대행">
                            <h5 class="mt-3">무료광고대행</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body text-center py-3 px-3">
                            <img style="width:60px;height:60px" class="mt-4 mb-3 mx-auto"
                                src="{{ url('/') }}/around/images/free_program.png" alt="검색광고 경쟁사분석">
                            <h5 class="mt-3">
                                <a href="{{ url('/') }}/solution" class="text-decoration-underline" style="color:blue">
                                    검색광고 경쟁사분석
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body text-center py-3 px-3">
                            <img style="width:60px;height:60px" class="mt-4 mb-3 mx-auto"
                                src="{{ url('/') }}/around/images/free_hosting.png" alt="로그분석 프로그램">
                                <h5 class="mt-3">
                                    <a href="{{ url('/') }}/solution#log" class="text-decoration-underline" style="color:blue">
                                        로그분석 프로그램
                                    </a>
                                </h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body text-center py-3 px-3">
                            <img style="width:60px;height:60px" class="mt-4 mb-3 mx-auto"
                                src="{{ url('/') }}/around/images/free_inter.png" alt="검색광고 자동입찰">
                            <h5 class="mt-3">검색광고 자동입찰</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body text-center py-3 px-3">
                            <img style="width:60px;height:60px" class="mt-4 mb-3 mx-auto"
                                src="{{ url('/') }}/around/images/free_potal.png" alt="상담 프로그램">
                            <h5 class="mt-3">상담 프로그램</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body text-center py-3 px-3">
                            <img style="width:60px;height:60px" class="mt-4 mb-3 mx-auto"
                                src="{{ url('/') }}/around/images/free_popup.png" alt="팝업 관리기능">
                            <h5 class="mt-3">팝업 관리기능</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body text-center py-3 px-3">
                            <img style="width:60px;height:60px" class="mt-4 mb-3 mx-auto"
                                src="{{ url('/') }}/around/images/free_admin.png" alt="호스팅, 표준호환">
                            <h5 class="mt-3">호스팅, 표준호환</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body text-center py-3 px-3">
                            <img style="width:60px;height:60px" class="mt-4 mb-3 mx-auto"
                                src="{{ url('/') }}/around/images/free_map.png" alt="관리자, 포털등록">
                            <h5 class="mt-3">관리자, 포털등록</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('javascript_just_before_body')
@endsection
