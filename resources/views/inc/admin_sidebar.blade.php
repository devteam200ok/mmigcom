<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu" style="background-color:black">

    <!-- Brand Logo Light -->
    <a href="{{ url('/') }}/admin" class="logo logo-light p-2">
        <span class="logo-lg">
            <img src="{{ url('/') }}/hyper/images/logo_white.svg" alt="logo" style="height:46px">
        </span>
        <span class="logo-sm">
            <img src="{{ url('/') }}/hyper/images/logo_white_512.svg" alt="small logo" style="width:40px;height:40px">
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </div>

    <!-- Full Sidebar Menu Close Button -->
    <div class="button-close-fullsidebar">
        <i class="ri-close-fill align-middle"></i>
    </div>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        @php
            $current_url = url()->current();
        @endphp
        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-item mt-2">
                <a href="{{ url('/') }}/admin" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> 대쉬보드 </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarAdminSetting" aria-expanded="false" aria-controls="sidebarAdminSetting" class="side-nav-link">
                    <i class="uil-brightness-empty"></i>
                    <span> 환경설정 </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarAdminSetting">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{url('/')}}/admin/setting/seo" class="{{ str_contains($current_url, 'admin/setting/seo') ? 'text-white' : 'text-muted' }}">SEO 및 OG 설정</a>
                            <a href="{{url('/')}}/admin/setting/footer" class="{{ str_contains($current_url, 'admin/setting/footer') ? 'text-white' : 'text-muted' }}">회사정보 및 라이선스</a>
                            <a href="{{url('/')}}/admin/setting/terms" class="{{ str_contains($current_url, 'admin/setting/terms') ? 'text-white' : 'text-muted' }}">서비스 이용약관</a>
                            <a href="{{url('/')}}/admin/setting/privacy" class="{{ str_contains($current_url, 'admin/setting/privacy') ? 'text-white' : 'text-muted' }}">개인정보 처리방침</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item mt-4">
                <a href="{{ url('/') }}" class="side-nav-link" target="_blank">
                    <i class="uil-globe"></i>
                    <span> 사용자 페이지 </span>
                </a>
            </li>
        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
<!-- ========== Left Sidebar End ========== -->
