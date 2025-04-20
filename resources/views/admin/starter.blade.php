@extends('layouts.admin')
@section('inside_head_tag')
@endsection
@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Starter</h4>
        </div>
    </div>
</div>
<!-- end page title -->

@endsection
@section('javascript_just_before_body')
<script>
    $(function () {
        $("body").on("click", ".delete_button", function (e) {
            e.preventDefault();

            var id = $(this).parents('tr').find('.user_id').val();
            if (confirm("삭제하십니까?") == true) {
                $.ajax({
                    type: "POST",
                    url: "/admin/user/delete",
                    data: {
                        _token: CSRF_TOKEN,
                        id: id
                    },
                    dataType: 'JSON',
                    success: function success(data) {
                        console.log(data.result);
                        if(data.result == 'deleted'){
                            window.location.reload();
                        } else {
                            alert('진행 중인 견적 및 예약이 있어서 삭제할 수 없습니다.');
                        }
                    },
                    error: function (response) {
                        console.log(response);
                    }
                });
            }
        });
    });
</script>
@endsection