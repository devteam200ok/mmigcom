@extends('layouts.front')
@section('inside_head_tag')
    <style>
        .company_title {
            width: 100%;
            padding: 5em 0 5em;
            text-align: center;
            background: url('{{ url('/') }}/around/images/main_after.png') no-repeat 60% 60%;
        }

        .scroll-container {
            position: relative;
            height: 100%;
            /* Adjust height as needed */
            overflow: hidden;
        }

        .scroll-content {
            position: absolute;
            width: 100%;
            top: -50px;
            /* Adjust based on your image height */
            animation: scrollUp 60s linear infinite;
        }

        .scroll-item {
            text-align: center;
            height: 60px;
            /* Each image container's height */
        }

        .scroll-container img {
            max-width: 150px;
            max-height: 30px;
        }

        @keyframes scrollUp {
            0% {
                transform: translateY(0%);
            }

            100% {
                transform: translateY(-100%);
            }
        }

        /* Default style for larger screens */
        .wide-offcanvas {
            min-width: 40% !important;
        }

        /* Media query for mobile devices */
        @media (max-width: 767px) {

            /* Adjust the max-width as needed for your specific breakpoint */
            .wide-offcanvas {
                min-width: 100% !important;
            }
        }
    </style>
@endsection
@section('content')
    <section class="py-5 my-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 d-flex">
                    <div class="mx-auto text-center company_title">
                        <h5 style="font-weight: 900;color:#079aca">Advertiser Data</h5>
                        <h1 class="display-4 px-5" style="font-weight: 900">Company Portfolio</h1>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xl-3 d-none d-xl-block">
                    @php
                        $scrolls = DB::connection('mysql2')
                            ->table('portfolio_scrolls')
                            ->where('status', '공개')
                            ->orderBy('order', 'asc')
                            ->get();
                    @endphp
                    @if (count($scrolls) > 0)
                        <div class="scroll-container">
                            <div class="scroll-content">
                                @foreach ($scrolls as $scroll)
                                    <div class="scroll-item">
                                        <img
                                            src="https://mig-groupware.com/storage/portfolio-scroll/logo_path/150/{{ $scroll->logo_path }}" />
                                    </div>
                                @endforeach
                                <!-- Duplicate the first image for smooth looping -->
                                <div class="scroll-item">
                                    <img
                                        src="https://mig-groupware.com/storage/portfolio-scroll/logo_path/150/{{ $scrolls[0]->logo_path }}" />
                                </div>
                            </div>
                        </div>
                    @endif


                </div>
                <div class="col-xl-9">
                    @php
                        $portfolios = DB::connection('mysql2')
                            ->table('portfolio_data')
                            ->where('status', '공개')
                            ->orderBy('order', 'asc')
                            ->get();
                    @endphp
                    @if (count($portfolios) > 0)
                        <div class="row">
                            @foreach ($portfolios as $portfolio)
                                <div class="col-xxl-3 col-xl-4 col-6 mb-3 select_portfolio" data-id="{{ $portfolio->id }}"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                    aria-controls="offcanvasRight" style="cursor: pointer">
                                    <div class="card">
                                        <img class="card-img-top"
                                            src="https://mig-groupware.com/storage/portfolio-data/logo_path/400/{{ $portfolio->logo_path }}"
                                            alt="{{ $portfolio->title }} Image" />
                                        {{-- <div class="card-body">
                                            <div class="pf_txt">
                                                <h5 class="text-center">{{ $portfolio->title }}</h5>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <div class="offcanvas offcanvas-end wide-offcanvas" id="offcanvasRight" tabindex="-1"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel"></h5><button class="btn-close text-reset" type="button"
                data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" id="content_area">

        </div>
    </div>
@endsection
@section('javascript_just_before_body')
    <script>
        $(function() {
            $("body").on("click", ".select_portfolio", function(e) {
                $("#content_area").html('');
                var id = $(this).data('id');
                $.ajax({
                    type: "POST",
                    url: "/portfolio/portfolio_select",
                    data: {
                        _token: CSRF_TOKEN,
                        id: id
                    },
                    dataType: 'JSON',
                    success: function success(data) {
                        $("#content_area").html(data.html);
                    },
                    error: function(response) {
                        console.log(response);
                    }
                });
            });
        });
    </script>
@endsection
