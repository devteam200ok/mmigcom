@extends('layouts.front')
@section('inside_head_tag')
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="row">
                        <h3 class="mb-3 fw-bold">
                            Global! 마케팅 전문 기업, MIG! 성공적인 디지털 마케팅을 함께하세요.
                        </h3>
                        <p>
                            브랜드 슬로건, 아이덴티티, 페르소나, 내러티브, 스토리텔링 통한<br>
                            브랜딩(브랜드가치 극대화)과 광고크리에이티브 전략실현<br>
                            데이터 기반 광고 최적화, 퍼포먼스 마케팅
                        </p>
                    </div>
                    <hr>
                    <div class="row mt-4">
                        <div class="col-xl-6 mb-3">
                            <p>
                                어떤 서비스를 원하십니까? <span style="color:#079aca">(다중선택가능, <span class="text-decoration-underline">필수
                                        선택사항은 아닙니다</span>)</span>
                            </p>
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="requestVisitCheckbox">
                                <label class="form-check-label" for="requestVisitCheckbox"
                                    style="font-size:1rem;margin-top:2px">방문상담을 원하는 경우 체크해 주세요.</label>
                            </div>
                            <div style="display: none;" id="requestVisit">
                                <label class="form-label fw-bold">방문일시 (날짜와 시간을 작성하도록 부탁드립니다)</label>
                                <div class="input-group mb-3">
                                    <input class="form-control py-1" type="date" id="visit_date"
                                        value="{{ \Carbon\Carbon::now()->next('Monday')->format('Y-m-d') }}">
                                    <select id="visit_time" class="form-select py-1">
                                        @for ($i = 9; $i <= 17; $i++)
                                            <option value="{{ $i }}:00">{{ $i }}:00</option>
                                            <option value="{{ $i }}:30">{{ $i }}:30</option>
                                        @endfor
                                    </select>
                                </div>
                                <label class="form-label fw-bold">방문장소</label>
                                <input class="form-control mb-3" type="text" id="visit_location">
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold">예산</label>
                                <select id="budget" class="form-select">
                                    <option value="">예산을 선택하세요</option>
                                    <option value="500만원 미만">500만원 미만</option>
                                    <option value="500~1000만원">500~1000만원</option>
                                    <option value="1000~2000만원">1000~2000만원</option>
                                    <option value="2000~3000만원">2000~3000만원</option>
                                    <option value="3000~5000만원">3000~5000만원</option>
                                    <option value="5000~7000만원">5000~7000만원</option>
                                    <option value="7000만원~1억">7000만원~1억</option>
                                    <option value="1억~2억">1억~2억</option>
                                    <option value="2억 이상">2억 이상</option>
                                </select>
                            </div>
                            @php
                                $standard_templates = DB::connection('mysql2')
                                    ->table('crm_templates')
                                    ->where('type', '일반')
                                    ->orderBy('order', 'asc')
                                    ->get();
                            @endphp
                            @foreach ($standard_templates as $standard_template)
                                @php
                                    $sub_templates = DB::connection('mysql2')
                                        ->table('crm_templates')
                                        ->where('template_id', $standard_template->id)
                                        ->orderBy('order', 'asc')
                                        ->get();
                                @endphp
                                @if (count($sub_templates) > 0)
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">
                                            {{ $standard_template->title }}</label>
                                        <div>
                                            @foreach ($sub_templates as $sub_template)
                                                <button
                                                    class="service_button btn btn-outline-secondary py-2 px-3 mb-2 me-2">{{ $sub_template->title }}</button>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-xl-6 mb-3">
                            <div class="mb-3">
                                <label for="company" class="form-label fw-bold">
                                    회사명</label>
                                <input class="form-control" type="text" id="company">
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="url" class="form-label fw-bold">
                                        홈페이지 주소</label>
                                    <input class="form-control" type="text" id="url">
                                </div>
                            </div>
                            {{-- <div class="mb-3">
                                <label for="position" class="form-label fw-bold">
                                    직책</label>
                                <input class="form-control" type="text" id="position">
                            </div> --}}
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">담당자 성함 직급<span class="ms-1"
                                        style="color:#079aca">(필수)</span></label>
                                <input class="form-control" type="text" id="name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold">
                                    이메일</label>
                                <input class="form-control" type="text" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label fw-bold">
                                    전화번호</label>
                                <input class="form-control" type="text" id="phone">
                            </div>
                            <div class="mb-3">
                                <label for="mobile" class="form-label fw-bold">휴대폰번호<span class="ms-1"
                                        style="color:#079aca">(필수)</span></label>
                                <input class="form-control" type="text" id="mobile">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    벤치마킹 회사명이나 홈페이지 주소
                                </label>
                                <div id="benchmark_area">
                                    <div class="input-group mb-3">
                                        <input class="form-control benchmark py-1" type="text">
                                        <button class="btn btn-outline-secondary btn-sm py-0 px-4" id="add_benchmark" type="button">
                                            <span style="font-size:1.2rem;font-weight:900;margin-top:3px">+</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    첨부파일
                                </label>
                                <div id="file_area">
                                    <div class="input-group mb-3">
                                        <input class="form-control file py-1" type="file">
                                        <button class="btn btn-outline-secondary btn-sm py-0 px-4" id="add_file" type="button">
                                            <span style="font-size:1.2rem;font-weight:900;margin-top:3px">+</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="mb-3">
                                <label for="file1" class="form-label fw-bold">
                                    첨부파일1</label>
                                <input class="form-control" type="file" id="file1">
                            </div>
                            <div class="mb-3">
                                <label for="file2" class="form-label fw-bold">
                                    첨부파일2</label>
                                <input class="form-control" type="file" id="file2">
                            </div>
                            <div class="mb-3">
                                <label for="file3" class="form-label fw-bold">
                                    첨부파일3</label>
                                <input class="form-control" type="file" id="file3">
                            </div>
                            <div class="mb-3">
                                <label for="file4" class="form-label fw-bold">
                                    첨부파일4</label>
                                <input class="form-control" type="file" id="file4">
                            </div>
                            <div class="mb-3">
                                <label for="file5" class="form-label fw-bold">
                                    첨부파일5</label>
                                <input class="form-control" type="file" id="file5">
                            </div> --}}
                            <div class="mb-3">
                                <label for="description" class="form-label fw-bold">
                                    문의 상세내용</label>
                                <textarea class="form-control" id="description" rows="5"></textarea>
                            </div>
                            <div class="d-flex mb-3">
                                <div>
                                    <div>
                                        <a href="{{ url('/') }}/privacy" target="_blank"
                                            style="text-decoration: none;color:#576071;">개인정보처리방침<span class="ms-1"
                                            style="color:#079aca">(필수)</span></a>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="agreement">
                                        <label class="form-check-label" for="agreement">개인정보처리방침에 동의합니다. </label>
                                    </div>
                                </div>
                                <div class="ms-auto">
                                    <button id="submit_contact" class="btn btn-info">문의하기</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('javascript_just_before_body')
    <script>
        $(function() {

            /* $("body").on("click", ".marketer_type", function(e) {
                var marketer_type = $('input[name="marketer_type"]:checked').val();

                if ($(this).val() == '지정') {
                    $("#marketer").css("display", "block");
                } else {
                    $("#marketer").css("display", "none");
                }
            }); */

            $("body").on("change", "#requestVisitCheckbox", function(e) {
                if ($(this).is(":checked")) {
                    $("#requestVisit").css("display", "block");
                } else {
                    $("#requestVisit").css("display", "none");
                }
            });

            $("body").on("click", "#add_benchmark", function(e) {
                // check .benchmark count and if it is over 5, do not add
                if ($(".benchmark").length >= 5) {
                    alert('벤치마킹 회사명은 최대 5개까지 등록 가능합니다.');
                    return false;
                }
                $("#benchmark_area").append(`
                    <div class="input-group mb-3">
                        <input class="form-control benchmark py-1" type="text">
                        <button class="btn btn-outline-secondary btn-sm py-0 px-4 remove_benchmark" type="button">
                            <span style="font-size:1.2rem;font-weight:900;margin-top:3px">-</span>
                        </button>
                    </div>
                `);
            });

            $("body").on("click", ".remove_benchmark", function(e) {
                $(this).parent().remove();
            });

            $("body").on("click", "#add_file", function(e) {
                // check .benchmark count and if it is over 5, do not add
                if ($(".file").length >= 5) {
                    alert('첨부파일은 최대 5개까지 등록 가능합니다.');
                    return false;
                }
                $("#file_area").append(`
                    <div class="input-group mb-3">
                        <input class="form-control file py-1" type="file">
                        <button class="btn btn-outline-secondary btn-sm py-0 px-4 remove_file" type="button">
                            <span style="font-size:1.2rem;font-weight:900;margin-top:3px">-</span>
                        </button>
                    </div>
                `);
            });

            $("body").on("click", ".remove_file", function(e) {
                $(this).parent().remove();
            });

            $("body").on("click", ".service_button", function(e) {
                // check if the button is already selected
                if ($(this).hasClass("btn-info")) {
                    $(this).removeClass("btn-info");
                    $(this).addClass("btn-outline-secondary");
                } else {
                    $(this).removeClass("btn-outline-secondary");
                    $(this).addClass("btn-info");
                }
            });

            $("body").on("click", "#submit_contact", function(e) {
                e.preventDefault();

                var company = $("#company").val();
                //var position = $("#position").val();
                var name = $("#name").val();
                var phone = $("#phone").val();
                var email = $("#email").val();
                var mobile = $("#mobile").val();
                var url = $("#url").val();
                var benchmark = '';
                $(".benchmark").each(function() {
                    if ($(this).val() != '') {
                        benchmark += $(this).val() + ', ';
                    }
                });
                benchmark = benchmark.slice(0, -2);

                if ($("#requestVisitCheckbox").is(":checked")) {
                    var visit_date = $("#visit_date").val();
                    var visit_time = $("#visit_time").val();
                    var visit_location = $("#visit_location").val();
                } else {
                    var visit_date = '';
                    var visit_time = '';
                    var visit_location = '';
                }
                var budget = $("#budget").val();

                // get selected services
                var service = '';
                $(".service_button").each(function() {
                    if ($(this).hasClass("btn-info")) {
                        service += $(this).text() + ', ';
                    }
                });
                service = service.slice(0, -2);

                var description = $("#description").val();
                var marketer = '';

                // check file size is not over 2mb

                $(".file").each(function() {
                    if ($(this)[0].files[0] != undefined) {
                        if ($(this)[0].files[0].size > 2097152) {
                            alert('첨부파일의 크기는 2MB 이하로 등록해 주세요.');
                            return false;
                        }
                    }
                });

                var file1 = '';
                var file2 = '';
                var file3 = '';
                var file4 = '';
                var file5 = '';

                $(".file").each(function(index) {
                    if (index == 0) {
                        file1 = $(this)[0].files[0];
                    } else if (index == 1) {
                        file2 = $(this)[0].files[0];
                    } else if (index == 2) {
                        file3 = $(this)[0].files[0];
                    } else if (index == 3) {
                        file4 = $(this)[0].files[0];
                    } else if (index == 4) {
                        file5 = $(this)[0].files[0];
                    }
                });

                var agreement = $("#agreement").is(":checked");

                if (name == '') {
                    alert('담당자 성함 직급은 필수 입력사항입니다.');
                    return false;
                }

                if (mobile == '') {
                    alert('휴대폰번호는 필수 입력사항입니다.');
                    return false;
                }

                if (!agreement) {
                    alert('개인정보처리방침에 동의하셔야 문의가 접수됩니다.');
                    return false;
                }

                var formData = new FormData();
                formData.append('_token', CSRF_TOKEN);
                formData.append('visit_date', visit_date);
                formData.append('visit_time', visit_time);
                formData.append('visit_location', visit_location);
                formData.append('company', company);
                //formData.append('position', position);
                formData.append('name', name);
                formData.append('phone', phone);
                formData.append('email', email);
                formData.append('mobile', mobile);
                formData.append('url', url);
                formData.append('benchmark', benchmark);
                formData.append('budget', budget);
                formData.append('service', service);
                formData.append('description', description);
                formData.append('marketer', marketer);
                formData.append('file1', file1);
                formData.append('file2', file2);
                formData.append('file3', file3);
                formData.append('file4', file4);
                formData.append('file5', file5);

                $.ajax({
                    type: "POST",
                    url: "/contact/submit",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function success(data) {
                        if (data.result == 'success') {
                            window.location.href = "/estimate/confirm";
                        } else {
                            alert('상담신청에 오류가 발생했습니다. 다시 시도해 주세요.');
                        }
                    },
                    error: function(response) {
                        console.log(response);
                    }
                });
            });
        });
    </script>
@endsection
