@extends('layouts.admin')
@section('inside_head_tag')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">환경설정 / 개인정보 처리방침</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">

            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <div class="summernote" id="privacy">{!! $setting->privacy !!}</div>
                    </div>
                </div>
            </div>

            <div class="text-end mb-4">
                <button id="button_save" class="btn btn-info text-white mt-2"><i class="mdi mdi-content-save"></i>
                    업데이트</button>
                <button id="button_save_loading" class="btn btn-info text-white mt-2" type="button" disabled>
                    <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
                    Loading...
                </button>
            </div>
        </div>
    </div>
@endsection
@section('javascript_just_before_body')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(function() {
            $("#button_save_loading").hide();
            $('.summernote').summernote({
                placeholder: '에디터를 이용해서 글을 작성하세요.',
                tabsize: 2,
                height: 500,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                ]
            });

            $("body").on("click", "#button_save", function(e) {
                e.preventDefault();
                var privacy = $("#privacy").next().find('.note-editable').html();

                $.ajax({
                    type: "POST",
                    url: "/admin/setting/privacy/update",
                    data: {
                        _token: CSRF_TOKEN,
                        privacy: privacy
                    },
                    dataType: 'JSON',
                    success: function success(data) {
                        window.location.reload();
                    },
                    error: function(response) {
                        console.log(response);
                    }
                });
            });
        });
    </script>
@endsection
