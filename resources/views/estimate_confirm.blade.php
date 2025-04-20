@extends('layouts.front')
@section('inside_head_tag')
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row my-5">
                <div class="col-xl-10 offset-xl-1">
                    <div class="alert alert-info pt-5" role="alert">
                        <h3>
                            상담신청이 성공적으로 완료되었습니다.
                        </h3>
                        <p>
                            <span id="second">5</span>초 후에 <a href="{{ url('/') }}" class="alert-link">메인
                                페이지</a>로 이동합니다.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('javascript_just_before_body')
<script>
    $(function() {
        setTimeout(function() {
            location.href = '/';
        }, 5000);
        var second = 5;
        setInterval(function() {
            if(second != 0){
                second--;
                $("#second").text(second);
            }
        }, 1000);
    });
</script>
@endsection
