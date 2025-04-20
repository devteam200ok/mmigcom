@extends('layouts.front')
@section('inside_head_tag')
@endsection
@section('content')
<section class="container py-5 my-5">
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <h2 class="h3 mb-4 mt-3"><i class="ai-quotes"></i> 홈페이지 이용약관</h2>
                <p class="fs-sm">{!! App\Models\Setting::first()->terms !!}</p>
            </div>
        </div>
    </div>
</section>
@endsection
@section('javascript_just_before_body')
@endsection
