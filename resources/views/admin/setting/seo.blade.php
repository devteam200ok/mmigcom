@extends('layouts.admin')
@section('inside_head_tag')
@endsection
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">환경설정 / SEO 및 OG 설정</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="seo_code" class="form-label">헤더에 삽입할 Javascript Code</label>
                            <textarea class="form-control" id="seo_code" cols="30" rows="10">{{$setting->seo_code}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="seo_title" class="form-label">SEO - Title</label>
                            <input type="text" id="seo_title" class="form-control" value="{{$setting->seo_title}}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="seo_description" class="form-label">SEO - Description</label>
                            <input type="text" id="seo_description" class="form-control" value="{{$setting->seo_description}}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="seo_keywords" class="form-label">SEO - Keywords</label>
                            <input type="text" id="seo_keywords" class="form-control" value="{{$setting->seo_keywords}}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="seo_author" class="form-label">SEO - Author</label>
                            <input type="text" id="seo_author" class="form-control" value="{{$setting->seo_author}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="og_url" class="form-label">OG - URL</label>
                            <input type="text" id="og_url" class="form-control" value="{{$setting->og_url}}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="og_type" class="form-label">OG - Type</label>
                            <input type="text" id="og_type" class="form-control" value="{{$setting->og_type}}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="og_title" class="form-label">OG - Title</label>
                            <input type="text" id="og_title" class="form-control" value="{{$setting->og_title}}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="og_description" class="form-label">OG - Description</label>
                            <input type="text" id="og_description" class="form-control" value="{{$setting->og_description}}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="og_image" class="form-label">OG - Image <small class="text-info">* jpg, 1408px x 704px</small></label>
                            <input type="file" id="og_image" class="form-control mb-3"
                                accept="image/png, image/jpeg, image/jpg">
                            @if($setting->og_image != null)
                            <img src="{{url('/')}}/storage/setting/og_image/{{$setting->og_image}}" style="width:200px">
                            @endif
                        </div>
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
    <script>
        $(function() {
            $("#button_save_loading").hide();

            $("body").on("click", "#button_save", function(e) {
                e.preventDefault();
                
                $("#button_save").hide();
                $("#button_save_loading").show();

                var seo_code = $("#seo_code").val();
                var seo_title = $("#seo_title").val();
                var seo_description = $("#seo_description").val();
                var seo_keywords = $("#seo_keywords").val();
                var seo_author = $("#seo_author").val();

                var og_url = $("#og_url").val();
                var og_type = $("#og_type").val();
                var og_title = $("#og_title").val();
                var og_description = $("#og_description").val();

                var formData = new FormData();
                formData.append('_token', CSRF_TOKEN);

                formData.append('seo_code', seo_code);
                formData.append('seo_title', seo_title);
                formData.append('seo_description', seo_description);
                formData.append('seo_keywords', seo_keywords);
                formData.append('seo_author', seo_author);

                formData.append('og_url', og_url);
                formData.append('og_type', og_type);
                formData.append('og_title', og_title);
                formData.append('og_description', og_description);

                formData.append('og_image', $('input[id=og_image]')[0].files[0]);

                $.ajax({
                    type: "POST",
                    url: "/admin/setting/seo/update",
                    data: formData,
                    contentType: false,
                    processData: false,
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
