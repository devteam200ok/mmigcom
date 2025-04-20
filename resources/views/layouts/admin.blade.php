<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8" />
    <title>MIG.KR - 관리 시스템</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="MIG.KR 관리자 페이지입니다." name="description" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ url('/') }}/hyper/images/favicon.ico">
    <script src="{{ url('/') }}/hyper/js/hyper-config.js"></script>
    <link href="{{ url('/') }}/hyper/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />
    <link href="{{ url('/') }}/hyper/css/icons.min.css" rel="stylesheet" type="text/css" />
    <livewire:styles />
    @yield('inside_head_tag')
</head>

<body>
    <div class="wrapper">
        @include('inc.admin_navbar')
        @include('inc.admin_sidebar')
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include('inc.admin_footer')
        </div>
    </div>
    <script src="{{ url('/') }}/hyper/js/vendor.min.js"></script>
    <script src="{{ url('/') }}/hyper/js/app.min.js"></script>
    <script src="{{ url('/') }}/around/Perfection_is_in_the_details.js"></script>
    <livewire:scripts />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
        const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    </script>
    @yield('javascript_just_before_body')
</body>

</html>
