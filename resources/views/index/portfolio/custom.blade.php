@extends('layouts.front')
@section('inside_head_tag')
    <style>
        .company_title {
            width: 100%;
            padding: 5em 0 5em;
            text-align: center;
            background: url('{{ url('/') }}/around/images/main_after.png') no-repeat 60% 60%;
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
    @livewire('portfolio-custom')
    <div class="offcanvas offcanvas-end wide-offcanvas" id="offcanvasRight" tabindex="-1"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel"></h5><button class="btn-close text-reset" type="button" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" id="content_area">

        </div>
    </div>
@endsection
@section('javascript_just_before_body')
    <script>
        $(function() {
            $("body").on("click", ".select_display", function(e) {
                $("#content_area").html('');
                var id = $(this).data('id');
                $.ajax({
                    type: "POST",
                    url: "/portfolio/display_select",
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
