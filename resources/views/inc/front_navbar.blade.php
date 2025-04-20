<!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page-->
<div class="bg-dark">
    <div class="container py-2">
        @php
            $setting = DB::connection('mysql2')
                ->table('settings')
                ->first();
        @endphp
        <div class="d-flex">
            <div class="ms-auto">
                <a class="text-white text-decoration-none" href="tel:{{ $setting->migkr_phone }}">
                    <i class="ai-phone fs-sm fw-bold"></i>
                    <span class="fw-bold fs-xs">{{ $setting->migkr_phone }}</span>
                </a>
            </div>
            <div class="ms-3">
                <a class="text-white text-decoration-none" href="mailto:{{ $setting->migkr_email }}">
                    <i class="ai-mail fs-sm fw-bold"></i>
                    <span class="fw-bold fs-xs">{{ $setting->migkr_email }}</span>
                </a>
            </div>
            <div class="ms-3 me-3">
                <a class="text-white text-decoration-none" href="javascript:void(0)">
                    <i class="ai-message fs-sm fw-bold"></i>
                    <span class="fw-bold fs-xs">카카오톡 문의</span>
                </a>
            </div>
        </div>
    </div>
</div>
<header class="navbar navbar-expand-lg navbar-ignore-dark-mode ignore-dark-mode pt-2 pb-2 bg-white shadow"
    style="position: -webkit-sticky;position: sticky; top:0; z-index:1000;">
    <div class="container">
        <a class="navbar-brand pe-sm-3" href="{{ url('/') }}">
            <span class="text-primary flex-shrink-0 me-2">
                <img src="{{ url('/') }}/hyper/images/mig-logo.svg" width="160px" alt="logo">
            </span>
        </a>
        <button class="navbar-toggler ms-sm-3 me-4" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <nav class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav navbar-nav-scroll ms-auto" style="--ar-scroll-height: 520px;">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold" href="javascript:void(0)" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-expanded="false">COMPANY</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ url('/') }}/company">경영철학과 목표</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/') }}/company#history">회사연혁</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/') }}/company#team">조직도</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/') }}/company#cto">About CTO</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/') }}/company#business">사업내용 소개</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold" href="javascript:void(0)" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-expanded="false">SOLUTION</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ url('/') }}/solution">경쟁업체분석</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/') }}/solution#database">데이타베이스</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/') }}/solution#conversion">전환 최적화</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/') }}/solution#log">로그분석</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/') }}/solution#sentimental">센티멘탈</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/') }}/solution#social">소셜통합</a>
                        </li>
                        {{-- <li>
                            <a class="dropdown-item" href="{{url('/')}}/solution#programming">무료 프로그래밍</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{url('/')}}/solution#appsilon">컨소시엄</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{url('/')}}/solution#mobile">모바일 최적화</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{url('/')}}/solution#auto">자동입찰</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{url('/')}}/solution#schedule">스케쥴 관리</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{url('/')}}/solution#realtime">실시간상담 SMS</a>
                        </li> --}}
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold" href="javascript:void(0)" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-expanded="false">전문분야</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ url('/') }}/expertise/overseas">해외 광고 대행</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/') }}/expertise/search">SEARCH</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/') }}/expertise/banner">BANNER</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                SNS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('/') }}/expertise/meta">Meta</a></li>
                                <li><a class="dropdown-item" href="{{ url('/') }}/expertise/youtube">Youtube</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('/') }}/expertise/carrot">당근마켓</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/') }}/expertise/mcn">MCN</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/') }}/expertise/cpi">CPI</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/') }}/expertise/appsilon">APPSILON
                                DSP/DMP</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold" href="javascript:void(0)" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-expanded="false">PORTFOLIO</a>
                    <ul class="dropdown-menu">
                        @php
                            $portfolio_lists = DB::connection('mysql2')
                                ->table('portfolio_lists')
                                ->where('status', 1)
                                ->orderby('order', 'asc')
                                ->get();
                        @endphp
                        @foreach ($portfolio_lists as $portfolio_list)
                            <li>
                                <a class="dropdown-item"
                                    href="{{ url('/') }}/portfolio/{{ $portfolio_list->id }}/list">{{ $portfolio_list->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold" href="javascript:void(0)" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-expanded="false">무료대행</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ url('/') }}/service">무료광고대행이유</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link fw-bold" href="{{url('/')}}/estimate">문의하기</a>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ url('/') }}/#">COMPANY</a>
                </li> --}}
                {{-- <hr class="mb-3">
                @guest
                    <li class="nav-item d-block d-md-none">
                        <a class="btn btn-warning text-dark btn-sm rounded-pill fs-sm d-inline-flex"
                            href="{{ route('kakao.login') }}">
                            <i class="ai-hangouts fs-xl me-2 ms-n1"></i> 카카오 로그인
                        </a>
                    </li>
                @else
                <li class="nav-item d-block d-md-none">
                    <button class="btn btn-warning text-dark btn-sm rounded-pill fs-sm d-inline-flex user_logout">
                        <i class="ai-logout fs-xl me-2 ms-n1"></i> 로그아웃
                    </button>
                </li>
                @endguest --}}
            </ul>
        </nav>
    </div>
</header>
<!-- Page content-->
