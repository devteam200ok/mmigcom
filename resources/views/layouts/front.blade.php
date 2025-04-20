<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">

    @php
        $setting = App\Models\Setting::first();
    @endphp
    <!-- SEO Meta Tags-->
    <title>{{ $setting->seo_title }}</title>
    <meta name="description" content="{{ $setting->seo_description }}">
    <meta name="keywords" content="{{ $setting->seo_keywords }}">
    <meta content="{{ $setting->seo_author }}" name="author" />

    <meta property="og:url" content="{{ $setting->og_url }}" />
    <meta property="og:type" content="{{ $setting->og_type }}" />
    <meta property="og:title" content="{{ $setting->og_title }}" />
    <meta property="og:description" content="{{ $setting->og_description }}" />
    @if ($setting->og_image != null)
        <meta property='og:image' content='{{ url('/') }}/storage/setting/og_image/{{ $setting->og_image }}' />
        <meta property="og:image:width" content="1408" />
        <meta property="og:image:height" content="704" />
    @endif

    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/') }}/around/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('/') }}/around/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('/') }}/around/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{ url('/') }}/around/favicon/site.webmanifest">
    <link rel="mask-icon" color="#6366f1" href="{{ url('/') }}/around/favicon/safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="{{ url('/') }}/around/favicon/browserconfig.xml">
    <meta name="theme-color" content="white">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {!! App\Models\Setting::first()->seo_code !!}

    <!-- Theme mode-->
    <script>
        let mode = window.localStorage.getItem('mode'),
            root = document.getElementsByTagName('html')[0];
        if (mode !== undefined && mode === 'dark') {
            root.classList.add('dark-mode');
        } else {
            root.classList.remove('dark-mode');
        }
    </script>

    <!-- Import Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&display=swap" rel="stylesheet">
    <style>
        body,
        html {
            font-family: 'Nanum Gothic', sans-serif;
            overflow-x: hidden;
            /* Hide horizontal overflow */
        }

        /* Main visual container styling */
        .main_visual {
            position: relative;
            width: 100%;
            /* Use 100% instead of 100vw */
            height: 100vh;
            background: url({{ url('/') }}/around/images/mainvisual_frame.png) no-repeat center center;
            background-size: cover;
            overflow: hidden;
        }

        /* Video specific styling */
        .main_visual video {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
        }

        /* Styling for additional decorative elements */
        .main_visual:after {
            content: "";
            display: block;
            position: absolute;
            right: 10%;
            bottom: -20%;
            background: url({{ url('/') }}/around/images/main_after.png) no-repeat 0 0;
            background-size: contain;
            width: 300px;
            height: 300px;
            z-index: 2;
        }

        /* Hides the video on smaller screens or as per other media query conditions */
        .main_visual .mo_video {
            display: none;
        }

        /* Media query to hide the main_visual_frame background below 992px */
        @media (max-width: 992px) {
            .main_visual {
                background: none;
                /* Removes the background image */
            }
        }

        /*스크롤바*/
        .scollspy_bar {
            position: fixed;
            z-index: 999;
            top: 49%;
            left: 80px;
            transform: translateY(-50%);
        }

        /* Media query for mobile devices */
        @media (max-width: 768px) {
            .scollspy_bar {
                left: 30px;
                /* Reduced padding on the left for narrower screens */
            }
        }

        /* If you need even smaller padding for very narrow screens */
        @media (max-width: 480px) {
            .scollspy_bar {
                left: 20px;
                /* Further reduced for small mobile screens */
            }
        }

        .scollspy_bar .nav-menu {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        .scollspy_bar .nav-menu li {
            position: relative;
            min-width: auto;
            text-align: left;
        }

        .scollspy_bar .nav-menu li .dot {
            display: block;
            color: #c1c1c1;
            padding: 5px 0;
        }

        .scollspy_bar .nav-menu li .dot::before,
        .scollspy_bar .nav-menu li .dot::after {
            content: "";
            display: block;
            position: absolute;
            content: "";
            border-radius: 50%;
            top: 50%;
            transition: all 0.3s ease;
        }

        .scollspy_bar .nav-menu li .dot::before {
            content: "";
            width: 5px;
            height: 5px;
            left: 0;
            background-color: #fff;
            border: 2px solid #bdbdbd;
            z-index: 1;
            transform: translateY(-50%);
        }

        .scollspy_bar .nav-menu li .dot::after {
            content: "";
            width: 15px;
            height: 15px;
            border: 2px solid #00a1ff;
            left: -5px;
            transform: translateY(-50%) scale(0);
        }

        .scollspy_bar .nav-menu li .dot.active::after,
        .scollspy_bar .nav-menu li:hover .dot::after {
            content: "";
            transform: translateY(-50%) scale(1);
        }

        .scollspy_bar .nav-menu li .dot span {
            display: inline-block;
            opacity: 0;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: capitalize;
            padding: 10px 30px;
            border-radius: 3px;
            margin-right: 30px;
            transform: translateX(20px);
            transition: all 0.3s ease;
        }

        .scollspy_bar .nav-menu li .dot.active span,
        .scollspy_bar .nav-menu li:hover .dot span {
            transform: translateX(0px);
            opacity: 1;
        }

        .scollspy_bar .nav-menu li {
            position: relative;
            /* Needed for absolute positioning of pseudo-elements */
        }

        .scollspy_bar .nav-menu li:not(:last-child)::after {
            content: "";
            position: absolute;
            left: 2px;
            /* Center the line with respect to the dot */
            top: 50%;
            bottom: -50%;
            width: 1px;
            /* Line thickness */
            background-color: #bdbdbd;
            /* Line color */
            z-index: 0;
            /* Ensure it's not covering clickable areas */
        }
    </style>

    <!-- Vendor styles-->
    <link rel="stylesheet" media="screen" href="{{ url('/') }}/around/vendor/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" media="screen" href="{{ url('/') }}/around/vendor/aos/dist/aos.css" />

    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ url('/') }}/around/css/theme.min.css">
    <link rel="stylesheet" media="screen"
        href="{{ url('/') }}/around/vendor/lightgallery/css/lightgallery-bundle.min.css">
    <livewire:styles />
    @yield('inside_head_tag')

    <!-- Google tag manager -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-J6TW8FT2YB"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-J6TW8FT2YB");
    </script>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js"
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-KHBBV9NF");
    </script>

</head>
<!-- Body-->

<body>
    <!-- Page wrapper-->
    <main class="page-wrapper">
        @include('inc.front_navbar')
        @include('inc.sign')
        @yield('content')
    </main>

    @include('inc.front_footer')

    @include('inc.front_sidebar')

    <!-- Back to top button-->
    {{-- <a class="btn-scroll-top" href="#top" data-scroll>
        <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5"
                stroke-miterlimit="10"></circle>
        </svg><i class="ai-arrow-up"></i>
    </a> --}}

    <!-- Vendor scripts: js libraries and plugins-->
    <script src="{{ url('/') }}/around/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/around/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="{{ url('/') }}/around/vendor/jarallax/dist/jarallax.min.js"></script>
    <script src="{{ url('/') }}/around/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ url('/') }}/around/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="{{ url('/') }}/around/vendor/aos/dist/aos.js"></script>
    <script src="{{ url('/') }}/around/vendor/lightgallery/lightgallery.min.js"></script>
    <script src="{{ url('/') }}/around/vendor/lightgallery/plugins/fullscreen/lg-fullscreen.min.js"></script>
    <script src="{{ url('/') }}/around/vendor/lightgallery/plugins/zoom/lg-zoom.min.js"></script>
    <script src="{{ url('/') }}/around/vendor/lightgallery/plugins/thumbnail/lg-thumbnail.min.js"></script>
    <script src="{{ url('/') }}/around/vendor/shufflejs/dist/shuffle.min.js"></script>
    <script src="{{ url('/') }}/around/Perfection_is_in_the_details.js"></script>

    <!-- Main theme script-->
    <script src="{{ url('/') }}/around/js/theme.min.js"></script>

    <livewire:scripts />

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KHBBV9NF" height="0" width="0"
            style="display: none; visibility: hidden"></iframe>
    </noscript>
    {{-- <script type="text/javascript" src="//wsa.mig-log.com/wsalog.js"></script>
    <script type="text/javascript">
        wsa.inflow("mig.kr");
        wsa_do(wsa);
    </script> --}}

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
        const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    </script>
    @yield('javascript_just_before_body')

    <script>
        (function() {
            var w = window;
            if (w.ChannelIO) {
                return w.console.error("ChannelIO script included twice.");
            }
            var ch = function() {
                ch.c(arguments);
            };
            ch.q = [];
            ch.c = function(args) {
                ch.q.push(args);
            };
            w.ChannelIO = ch;

            function l() {
                if (w.ChannelIOInitialized) {
                    return;
                }
                w.ChannelIOInitialized = true;
                var s = document.createElement("script");
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://cdn.channel.io/plugin/ch-plugin-web.js";
                var x = document.getElementsByTagName("script")[0];
                if (x.parentNode) {
                    x.parentNode.insertBefore(s, x);
                }
            }
            if (document.readyState === "complete") {
                l();
            } else {
                w.addEventListener("DOMContentLoaded", l);
                w.addEventListener("load", l);
            }
        })();

        ChannelIO('boot', {
            "pluginKey": "6214ff30-1870-4156-ae11-0cfae3802fcf"
        });
    </script>
    <script>
        $(function() {

            $("body").on("click", "#signin_button", function(e) {
                e.preventDefault();
                $("#signin_button").css('display', 'none');
                $("#signin_button_loading").css('display', 'block');
                $("#signin_feedback").empty();
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                var signin_email = $("#signin_email").val();
                var signin_password = $("#signin_password").val();

                $.ajax({
                    type: "POST",
                    url: "/signin",
                    data: {
                        _token: CSRF_TOKEN,
                        signin_email: signin_email,
                        signin_password: signin_password
                    },
                    dataType: 'JSON',
                    success: function success(data) {
                        if (data.result == 'failed') {
                            $("#signin_feedback").append(`
                                <p class="text-danger fs-6">* 이메일과 비밀번호를 다시 확인하세요!</p>
                            `);
                            $("#signin_button").css('display', 'block');
                            $("#signin_button_loading").css('display', 'none');
                        } else {
                            window.location.href = '/admin';
                        }
                    },
                    error: function(response) {
                        console.log(response);
                    }
                });
            });

            $("body").on("keypress", "#signin_email", function(e) {
                if (e.which == 13) {
                    $('#signin_button').trigger('click');
                }
            });

            $("body").on("keypress", "#signin_password", function(e) {
                if (e.which == 13) {
                    $('#signin_button').trigger('click');
                }
            });

            $("body").on("click", ".unselected_type", function(e) {
                e.preventDefault();
                $(this).removeClass("unselected_type");
                $(this).removeClass("border");
                $(this).removeClass("text-nav");
                $(this).addClass("selected_type");
                $(this).addClass("bg-info");
            });

            $("body").on("click", ".selected_type", function(e) {
                e.preventDefault();
                $(this).removeClass("selected_type");
                $(this).removeClass("bg-info");
                $(this).addClass("unselected_type");
                $(this).addClass("border");
                $(this).addClass("text-nav");
            });

            $("body").on("click", ".show_template", function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                $("#show_template_" + id).toggle();
            });

            /* $("body").on("click", "#sidebar_mcn", function(e) {
                e.preventDefault();
                if($("#sidbar_mcn_area").css('display') == 'block'){
                    $("#sidbar_mcn_area").css('display', 'none');
                }else{
                    $("#sidbar_mcn_area").css('display', 'block');
                }
            });

            $("body").on("click", "#sidebar_cpi", function(e) {
                e.preventDefault();
                if($("#sidbar_cpi_area").css('display') == 'block'){
                    $("#sidbar_cpi_area").css('display', 'none');
                }else{
                    $("#sidbar_cpi_area").css('display', 'block');
                }
            });

            $("body").on("click", "#sidebar_content", function(e) {
                e.preventDefault();
                if($("#sidbar_content_area").css('display') == 'block'){
                    $("#sidbar_content_area").css('display', 'none');
                }else{
                    $("#sidbar_content_area").css('display', 'block');
                }
            }); */

            $("body").on("click", "#sidebar_etc", function(e) {
                e.preventDefault();
                if ($("#sidbar_etc_area").css('display') == 'block') {
                    $("#sidbar_etc_area").css('display', 'none');
                } else {
                    $("#sidbar_etc_area").css('display', 'block');
                }
            });

            $("body").on("click", "#submit_sidbar", function(e) {
                e.preventDefault();

                var company = $("#sidebar_company").val();
                var name = $("#sidebar_name").val();
                var phone = $("#sidebar_contact").val();
                var url = $("#sidebar_url").val();
                var budget = $("#sidebar_budget").val();
                var service = '';
                var type = '';
                var marketer = '';
                var agreement = $("#sidebar_agreement").is(":checked");

                if (company == '') {
                    alert('업체명을 입력하세요.');
                    return false;
                }

                if (name == '') {
                    alert('담당자명을 입력하세요.');
                    return false;
                }

                if (phone == '') {
                    alert('연락처를 입력하세요.');
                    return false;
                }

                // count the number of span which has 'selected_type' && 'type_free'
                var free_count = $(".type_free.selected_type").length;
                // count the number of span which has 'selected_type' && 'type_normal'
                var normal_count = $(".type_normal.selected_type").length;

                if (free_count > 0) {
                    service = service + '무료 광고대행, ';
                }

                if (normal_count > 0) {
                    service = service + '일반 광고대행, ';
                }

                if (service != '') {
                    service = service.slice(0, -2);
                }

                $(".selected_type").each(function() {
                    type = type + $(this).text() + ', ';
                });

                type = type + $("#type_custom").val() + ', ';

                if (type != '') {
                    type = type.slice(0, -2);
                }

                if (!agreement) {
                    alert('개인정보처리방침에 동의하세요.');
                    return false;
                }

                $.ajax({
                    type: "POST",
                    url: "/contact/submit",
                    data: {
                        _token: CSRF_TOKEN,
                        company: company,
                        name: name,
                        phone: phone,
                        url: url,
                        budget: budget,
                        service: service,
                        type: type,
                        marketer: marketer
                    },
                    dataType: 'JSON',
                    success: function success(data) {
                        if (data.result == 'success') {
                            window.location.href="/estimate/confirm";
                        } else {
                            alert('상담신청에 오류가 발생했습니다. 다시 시도해 주세요.');
                        }
                    },
                    error: function(response) {
                        console.log(response);
                    }
                });
            });

            $("body").on("click", ".dot", function(e) {
                $('.dot').removeClass("active");
                $(this).addClass("active");
            });

            $("body").on("scroll", function() {
                var sTop = $(window).scrollTop() + 500;
                $("section").each(function() {
                    var id = $(this).attr("id"),
                        offset = $(this).offset().top - 1,
                        height = $(this).height();

                    if (sTop >= offset && sTop < offset + height) {
                        $('.dot').removeClass("active");
                        $('#' + id + '_dot').addClass("active");
                    }
                });
            });
        });
    </script>
    <script>
        // 아이콘을 클릭하면, 나머지 박스들은 모두 닫고, 해당 박스만 열기/닫기
        function toggleBox(boxId) {
            const boxes = document.querySelectorAll('.info-box');
            boxes.forEach((box) => {
                if (box.id !== boxId) {
                    box.style.display = 'none'; // 다른 박스는 닫기
                }
            });

            const currentBox = document.getElementById(boxId);
            // 현재 박스가 열려 있으면 닫고, 닫혀 있으면 열기
            if (currentBox.style.display === 'block') {
                currentBox.style.display = 'none';
            } else {
                currentBox.style.display = 'block';
            }
        }

        function linkToContact() {
            window.location.href = '/estimate';
        }


        $("body").on("click", "#phoneInfo", function(e) {
            var migkr_phone = $("#migkr_phone").val();
            // tel this number
            window.location.href = "tel:" + migkr_phone;
        });

        $("body").on("click", "#mailInfo", function(e) {
            var migkr_email = $("#migkr_email").val();
            // send email to this address
            window.location.href = "mailto:" + migkr_email;
        });

        $("body").on("click", "#estimateInfo", function(e) {
            window.location.href = "/estimate";
        });
    </script>
</body>

</html>
