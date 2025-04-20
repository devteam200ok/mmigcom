@extends('layouts.admin')
@section('inside_head_tag')
@endsection
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">환경설정 / 회사정보 및 라이선스</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2 mb-3">
                            <label for="company" class="form-label">회사명</label>
                            <input type="text" id="company" class="form-control" value="{{$setting->company}}">
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="company_registration_number" class="form-label">사업자등록번호</label>
                            <input type="text" id="company_registration_number" class="form-control" value="{{$setting->company_registration_number}}">
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="company_ceo" class="form-label">대표자</label>
                            <input type="text" id="company_ceo" class="form-control" value="{{$setting->company_ceo}}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="company_email" class="form-label">회사 이메일</label>
                            <input type="text" id="company_email" class="form-control" value="{{$setting->company_email}}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="company_telemarketing_number" class="form-label">통신판매업 신고번호</label>
                            <input type="text" id="company_telemarketing_number" class="form-control" value="{{$setting->company_telemarketing_number}}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="company_hr" class="form-label">서울본점 주소</label>
                            <input type="text" id="company_hr" class="form-control" value="{{$setting->company_hr}}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="company_jeonju" class="form-label">전주지점 주소</label>
                            <input type="text" id="company_jeonju" class="form-control" value="{{$setting->company_jeonju}}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="company_gasan" class="form-label">가산지점 주소</label>
                            <input type="text" id="company_gasan" class="form-control" value="{{$setting->company_gasan}}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="company_phone" class="form-label">고객센터</label>
                            <input type="text" id="company_phone" class="form-control" value="{{$setting->company_phone}}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="company_workhour" class="form-label">업무시간</label>
                            <input type="text" id="company_workhour" class="form-control" value="{{$setting->company_workhour}}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="footer" class="form-label">라이선스 정보</label>
                            <input type="text" id="footer" class="form-control" value="{{$setting->footer}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end mb-4">
                <button id="button_save" class="btn btn-info text-white text-dark mt-2"><i class="mdi mdi-content-save"></i>
                    업데이트</button>
                <button id="button_save_loading" class="btn btn-info text-white text-dark mt-2" type="button" disabled>
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

                var company = $("#company").val();
                var company_registration_number = $("#company_registration_number").val();
                var company_ceo = $("#company_ceo").val();
                var company_email = $("#company_email").val();
                var company_telemarketing_number = $("#company_telemarketing_number").val();
                var company_hr = $("#company_hr").val();
                var company_jeonju = $("#company_jeonju").val();
                var company_gasan = $("#company_gasan").val();
                var company_phone = $("#company_phone").val();
                var company_workhour = $("#company_workhour").val();
                var footer = $("#footer").val();

                var formData = new FormData();
                formData.append('_token', CSRF_TOKEN);
                formData.append('company', company);
                formData.append('company_registration_number', company_registration_number);
                formData.append('company_ceo', company_ceo);
                formData.append('company_email', company_email);
                formData.append('company_telemarketing_number', company_telemarketing_number);
                formData.append('company_hr', company_hr);
                formData.append('company_jeonju', company_jeonju);
                formData.append('company_gasan', company_gasan);
                formData.append('company_phone', company_phone);
                formData.append('company_workhour', company_workhour);
                formData.append('footer', footer);

                $.ajax({
                    type: "POST",
                    url: "/admin/setting/footer/update",
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
