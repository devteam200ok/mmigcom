@extends('layouts.custom')
@section('inside_head_tag')
<style>
    #title_text {
        font-size: 50px;
        color: red;
        text-align: center;
        margin-top: 20px;
        font-weight: bold;
    }
</style>
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div id="title_text">
                        Hello World!
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('javascript_just_before_body')
<script>
    $(document).ready(function() {
        // Add any JavaScript code here that you want to run when the document is ready
        console.log("Document is ready!");
    });
</script>
@endsection
