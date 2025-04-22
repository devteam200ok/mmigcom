@php
    // get current url
    $url = url()->current();
    // check if $url has 'estimate' string in it
    $stEimate = strpos($url, 'estimate');
@endphp
@if (!$stEimate)
    <section class="py-5 border-top" style="background-color: #ffffff;">
        <div class="container">
            <h3 class="mb-3 fw-bold">
                Global! 마케팅 전문 기업, MIG! 성공적인 디지털 마케팅을 함께하세요.
            </h3>
            <p>
                브랜드 슬로건, 아이덴티티, 페르소나, 내러티브, 스토리텔링 통한<br>
                브랜딩(브랜드가치 극대화)과 광고크리에이티브 전략실현<br>
                데이터 기반 광고 최적화, 퍼포먼스 마케팅
            </p>
            <p>
                CRM, ERP, Groupware 구축, 각종 데이터 연동, 각종 시스템 연동 등<br>
                최신 마케팅 트렌드와 기술을 접목하여 비즈니스 성장을 지원, 실질적 성과를 만들어갑니다.
            </p>
            <p class="fw-bold">
                전문가가 직접 컨설팅해 드립니다.<br>
                지금 문의하세요!
            </p>
            <a href="{{ url('/') }}/estimate" class="btn btn-info">
                <strong><i class="ai-pen me-2"></i></strong>문의하기<i class="ai-arrow-right ms-2"></i>
            </a>
    </section>
@endif
<footer class="footer bg-dark text-muted py-3">
    <div class="container pt-1 pt-sm-2 pt-md-3 pt-lg-4 pt-xl-5">
        <div class="d-none d-lg-block">
            <div class="d-flex align-items-center justify-content-between pb-4">
                <a href="{{ url('/') }}/company" class="text-muted fs-5" style="text-decoration: none">회사소개</a>
                <a href="{{ url('/') }}/terms" class="text-muted fs-5" style="text-decoration: none">홈페이지 이용약관</a>
                <a href="{{ url('/') }}/privacy" class="text-muted fs-5" style="text-decoration: none">개인정보처리방침</a>
                <a href="{{ url('/') }}/email" class="text-muted fs-5" style="text-decoration: none">이메일수집거부</a>
                <a href="{{ url('/') }}/#location" class="text-muted fs-5" style="text-decoration: none">오시는 길</a>
                {{-- <a class="btn btn-info fs-6"
                    href="https://mig.kr/global_mig_2024.pdf"
                    target="_blank">
                    회사소개서 다운로드 <span class="ms-2 uil ai-download"></span>
                </a> --}}
            </div>
        </div>
        <div class="d-block d-lg-none">
            <div class="row pb-3 px-4">
                <div class="col-4 text-center">
                    <a href="{{ url('/') }}/company" class="text-muted fs-6" style="text-decoration: none">회사소개</a>
                </div>
                <div class="col-4 text-center">
                    <a href="{{ url('/') }}/#location" class="text-muted fs-6" style="text-decoration: none">오시는
                        길</a>
                </div>
                <div class="col-4 text-center">
                    <a href="{{ url('/') }}/terms" class="text-muted fs-6" style="text-decoration: none">이용약관</a>
                </div>
            </div>
            <div class="row pb-3 px-4">
                <div class="col-6 text-center">
                    <a href="{{ url('/') }}/privacy" class="text-muted fs-6"
                        style="text-decoration: none">개인정보처리방침</a>
                </div>
                <div class="col-6 text-center">
                    <a href="{{ url('/') }}/email" class="text-muted fs-6"
                        style="text-decoration: none">이메일수집거부</a>
                </div>
            </div>
            {{-- <div class="row pb-3 px-4">
                <div class="col-12">
                    <div class="d-grid gap-2">
                        <a class="btn btn-info fs-6"
                            href="https://mig.kr/global_mig_2024.pdf"
                            target="_blank">
                            회사소개서 다운로드 <span class="ms-2 uil ai-download"></span>
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
        @php
            $setting = App\Models\Setting::first();
        @endphp
        <hr class="mb-5" style="border-color:#666">
        <div class="d-none d-xl-block">
            <p class="mb-0">회사명 : {{ $setting->company }} / 사업자등록번호 : {{ $setting->company_registration_number }} /
                대표: {{ $setting->company_ceo }} / Email:
                <a href="mailto:{{ $setting->company_email }}" target="_blank"
                    style="text-decoration: none;color:#999"><strong>{{ $setting->company_email }}</strong></a>
                @if ($setting->company_telemarketing_number != null && $setting->company_telemarketing_number != '')
                    / 통신판매업신고번호 : {{ $setting->company_telemarketing_number }}
                @endif
            </p>
            <p class="mb-0">서울본점 : {{ $setting->company_hr }}</p>
            <p class="mb-0">전주지점 : {{ $setting->company_jeonju }}</p>
            <p class="mb-0">가산지점 : {{ $setting->company_gasan }}</p>
            <p class="mb-0">고객센터 : <a href="tel:{{ $setting->company_phone }}" target="_blank"
                    style="text-decoration: none;color:#999"><strong>{{ $setting->company_phone }}</strong></a>
                {{ $setting->company_workhour }}
            </p>
        </div>
        <div class="d-block d-xl-none px-3 fs-sm">
            <p class="mb-0">회사명 : {{ $setting->company }}</p>
            <p class="mb-0">대표: {{ $setting->company_ceo }}</p>
            <p class="mb-0">사업자등록번호 : {{ $setting->company_registration_number }}</p>
            <p class="mb-0">Email: <a href="mailto:{{ $setting->company_email }}" target="_blank"
                    style="text-decoration: none;color:#999"><strong>{{ $setting->company_email }}</strong></a></p>
            @if ($setting->company_telemarketing_number != null && $setting->company_telemarketing_number != '')
                <p class="mb-0">통신판매업신고번호 : {{ $setting->company_telemarketing_number }}</p>
            @endif
            <p class="mb-0">서울본점 : {{ $setting->company_hr }}</p>
            <p class="mb-0">전주지점 : {{ $setting->company_jeonju }}</p>
            <p class="mb-0">가산지점 : {{ $setting->company_gasan }}</p>
            <p class="mb-0">고객센터 : <a href="tel:{{ $setting->company_phone }}" target="_blank"
                    style="text-decoration: none;color:#999"><strong>{{ $setting->company_phone }}</strong></a>
                <br />{{ $setting->company_workhour }}
            </p>
        </div>
        <div class="d-sm-flex align-items-center justify-content-between pt-4 mt-2 mt-sm-0">
            <p class="fs-sm order-sm-1 text-center mb-2 mb-sm-0">
                <span class="opacity-70">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    {{ $setting->footer }}
                </span>
            </p>
            <div class="d-flex justify-content-center order-sm-2 mb-0">
                <span class="opacity-70">
                    @auth
                        <form method="POST" action="{{ route('logout') }}" class="order-lg-3">
                            @if (auth()->user()->role == 'admin')
                                <a href="{{ url('/') }}/admin" class="fs-sm me-2 d-inline-flex text-muted"
                                    style="text-decoration:none">
                                    관리자 페이지
                                </a>
                            @endif
                            <a class="fs-sm order-lg-3 d-inline-flex text-muted" id="logout_button" :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();"
                                style="cursor: pointer; text-decoration:none">
                                @csrf
                                로그아웃
                            </a>
                        </form>
                    @else
                        <a class="fs-sm order-lg-3 d-inline-flex text-muted" href="#sign" data-bs-toggle="modal"
                            style="text-decoration:none">
                            관리자 로그인
                        </a>
                    @endauth
                </span>
            </div>
        </div>
    </div>
</footer>
