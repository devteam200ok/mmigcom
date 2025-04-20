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
                    <h5 style="font-weight: 900;color:#079aca;">APPSILON CORP Consortium</h5>
                    <h1 class="display-4" style="font-weight: 900">APPSILON CORP Campaign</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-8 offset-lg-2">
                    <img src="{{ url('/') }}/around/images/new/consortium-main.png" alt="Appsilon Consortium">
                </div>
                <div class="col-12 text-center mt-3">
                    <p class="fw-bold">본 DSP/DMP/SNS Solution은 당사 컨소시엄 업체로 셀렉한 오디언스 데이터 활용 및 상위티어 계정으로 광고 송출하여
                        CPC/CPM이 저렴하게 집행 가능합니다.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 pt-5 pb-4" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row my-5">
                <div class="col-12 mb-3">
                    <h5 style="font-weight: 900;color:#079aca">APPSILON CORP Consortium - DSP

                    </h5>
                    <h1 class="display-4" style="font-weight: 900">APPSILON DSP</h1>
                    <p>
                        자체 타겟팅 데이터를 활용해서 다양한 매체로 광고송출이 가능하며, 해외 같은 경우 좀 유명한 DMP들에서도 추가 데이터마이닝을 통해 서비스가 가능합니다. 타겟 작동방식은 광
                        고주나 에이전시가 들어와 저희가 가지고 있는 오디언스 데이터를 설정 후 어느 지면에 어떻게, 어떤 관심사로 노출할 것인지 정하면 네트워크로 진행하는 것이 가능합니다.
                    </p>
                </div>
                <div class="col-xl-6 mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/consortium-dsp1.jpg"
                        alt="APPSILON CORP Consortium - DSP 1">
                </div>
                <div class="col-xl-6 mb-3 text-center">
                    <img src="{{ url('/') }}/around/images/new/consortium-dsp2.jpg"
                        alt="APPSILON CORP Consortium - DSP 2">
                </div>
                <div class="col-12 mb-3 mt-5">
                    <p>
                        위 업체들 중에서 3개 이상의 트래픽만을 사용하더라도 전세계 커버레이션이 80% 나오기에(특히 모바일쪽에서) 저희가 네트워크는 충분히 가지고 있으며, 지면 예시는 이미지나
                        영상의 형태로 진행합니다.<br><br>
                        글로벌 매체, 트래픽 전부 지원 가능하며, 같은 플랫폼사들끼리만 트래픽을 거래할 수 있는 체인지에서 저희 네트워크에 있는 매체 중 가장 큰 매체는 트위터 B2B와 구글 더블클릭
                        (구글의 B2B 광고거래 액세스)를 가지고 있어 이 2개만 사용해도 사실상 전세계 트래픽의 80% 정도 커버가 가능합니다.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-5 mb-5">
        <div class="container">
            <div class="row my-5">
                <div class="col-12 mb-3">
                    <h5 style="font-weight: 900;color:#079aca">APPSILON CORP Consortium - DMP</h5>
                    <h1 class="display-4" style="font-weight: 900">APPSILON DMP</h1>
                    <p>
                        국내에서는 SK플래닛이나 와이더플래닛이 저희 데이터 파트너이기 때문에 광고 대행을 맡기신다면, 앞서 말한 데이터들의 사용이 가능합니다. (* DMP유상비용 - 사용을 희망하실
                        경우, 유상이긴 하지만 필요 옵션과 같이 선택 사항으로 예산에 맞춰 언제든 진행 가능)
                    </p>
                </div>
                <h4 style="font-weight: 900;color:#079aca">데이터 타게팅 지원이 가능한 광고 매체</h4>
                <div class="col-xl-12 mb-3 text-center d-none d-lg-block">
                    <img src="{{ url('/') }}/around/images/new/consortium-dmp.png"
                        alt="APPSILON CORP Consortium - DMP">
                </div>
                <div class="col-xl-12 mb-3 text-center d-block d-lg-none">
                    <img src="{{ url('/') }}/around/images/new/m_consortium-dmp.png"
                        alt="APPSILON CORP Consortium - DMP">
                </div>
            </div>
        </div>
    </section>
    <section class="pt-3 pb-5 mb-0" style="background-color:#f1f1f1">
        <div class="container">
            <div class="row my-5">
                <h4 style="font-weight: 900;color:#079aca">타겟 설정 예시</h4>
                <div class="col-xl-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body py-2 px-2 d-flex align-items-center">
                            <img style="width:60px;height:60px" class="ms-3 me-5"
                                src="{{ url('/') }}/around/images/new/web_log_report3.svg"
                                alt="APPSILON CORP Consortium - DMP 타겟">
                            <div class="me-3">
                                <h4 class="mt-3">타겟</h4>
                                <p>
                                    국내 특정 오디언스 타게팅 데이터에서
                                    네이버 카페 사용자 중, 특정 키워드 검색
                                    자 대상으로만 메타로 추가 타겟 가능
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body py-2 px-2 d-flex align-items-center">
                            <img style="width:60px;height:60px" class="ms-3 me-5"
                                src="{{ url('/') }}/around/images/new/automatic1.svg"
                                alt="APPSILON CORP Consortium - DMP 오토메틱">
                            <div class="me-3">
                                <h4 class="mt-3">광고 집행</h4>
                                <p>
                                    해당 유상비용 통상적으로 <strong>매체 비용의
                                    10~15% 추가</strong>(예산에 따라 상이함)
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
