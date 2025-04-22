<a class="position-fixed text-white fw-medium shadow text-decoration-none d-none d-lg-block" href="javascript:void(0)"
    style="left: 0; top: 50%; transform: translateY(-50%);
           padding: .5rem; font-size: calc(var(--ar-body-font-size) * .8125); 
           letter-spacing: .075rem; z-index: 1030;
           background-color: rgba(0, 0, 0, 0.7); /* 검정색에 70% 불투명도 */
           border-radius: 0px 20px 20px 0px;
           border: 2px solid #000;">

    @php
        $setting = DB::connection('mysql2')->table('settings')->first();
    @endphp
    <input type="hidden" id="migkr_phone" value="{{ $setting->migkr_phone }}">
    <input type="hidden" id="migkr_email" value="{{ $setting->migkr_email }}">
    <input type="hidden" id="migkr_kakao" value="{{ $setting->migkr_kakao }}">

    <div class="d-flex flex-column align-items-center">
        <!-- 전화문의 -->
        <div class="position-relative mb-3 text-center" style="cursor: pointer;">
            <div class="text-center" onclick="toggleBox('phoneInfo')">
                <i class="ai-phone fs-6 fw-bold mt-3"></i>
                <span class="mt-2 mb-3 fw-bold fs-xs d-block">전화문의</span>
            </div>

            <!-- 오른쪽에 표시될 박스 -->
            <div id="phoneInfo" class="info-box position-absolute top-50 start-100 translate-middle-y"
                style="display: none; background: #fff; color: #333; padding: 10px; 
                  border: 1px solid #666; border-radius: 5px; z-index: 9999; min-width: 180px;">
                <div class="d-flex mb-2">
                    <strong class="ms-auto" style="color:#079aca">고객센터</strong>
                </div>
                <div>
                    <strong style="font-size: 1rem;font-weight: 700;">
                        <i class="ai-phone"></i> {{ $setting->migkr_phone }}
                    </strong>
                </div>
                <div class="my-2">
                    평일 09:00~18:00
                    <br>
                    (주말,공휴일 휴무)
                </div>
            </div>
        </div>

        <!-- 메일문의 -->
        <div class="position-relative mb-3 text-center" style="cursor: pointer;">
            <div class="text-center" onclick="toggleBox('mailInfo')">
                <i class="ai-mail fs-6 fw-bold"></i>
                <span class="mt-2 mb-3 fw-bold fs-xs d-block">메일문의</span>
            </div>

            <div id="mailInfo" class="info-box position-absolute top-50 start-100 translate-middle-y"
                style="display: none; background: #fff; color: #333; padding: 10px; 
                  border: 1px solid #666; border-radius: 5px; z-index: 9999; min-width: 180px;">
                <div class="d-flex mb-2">
                    <strong class="ms-auto" style="color:#079aca">메일문의</strong>
                </div>
                <div>
                    <strong style="font-size: 1rem;font-weight: 700;">
                        <i class="ai-mail"></i> {{ $setting->migkr_email }}
                    </strong>
                </div>
            </div>
        </div>

        <!-- 카톡문의 -->
        <div class="position-relative mb-3 text-center" style="cursor: pointer;">
            <div class="text-center" onclick="toggleBox('kakaoInfo')">
                <i class="ai-message fs-6 fw-bold"></i>
                <span class="mt-2 mb-3 fw-bold fs-xs d-block">카톡문의</span>
            </div>

            <div id="kakaoInfo" class="info-box position-absolute top-50 start-100 translate-middle-y"
                style="display: none; background: #fff; color: #333; padding: 10px; 
                  border: 1px solid #666; border-radius: 5px; z-index: 9999; min-width: 180px;">
                <div class="d-flex mb-2">
                    <strong class="ms-auto" style="color:#079aca">카카오톡 문의</strong>
                </div>
                <div>
                    <strong style="font-size: 1rem;font-weight: 700;">
                        채널 ID:
                    </strong>
                </div>
            </div>
        </div>

        <!-- 문의하기 -->
        <div class="position-relative mb-3 text-center" style="cursor: pointer;">
            <div class="text-center" onclick="linkToContact()">
                <i class="ai-pencil fs-6 fw-bold"></i>
                <span class="mt-2 mb-3 fw-bold fs-xs d-block">문의하기</span>
            </div>

            {{-- <div id="estimateInfo" class="info-box position-absolute top-50 start-100 translate-middle-y"
                style="display: none; background: #fff; color: #333; padding: 10px; 
                  border: 1px solid #666; border-radius: 5px; z-index: 9999; min-width: 180px;">
                <strong>문의하기</strong><br>
                맞춤 견적서를 받아보세요!
            </div> --}}
        </div>
    </div>
</a>

{{-- <a class="position-fixed top-50 bg-light text-dark fw-medium border rounded-pill shadow text-decoration-none"
    href="#contact_sidebar" data-bs-toggle="offcanvas"
    style="right: -2.25rem; margin-top: -1rem; padding: .25rem .75rem; transform: rotate(-90deg); font-size: calc(var(--ar-body-font-size) * .8125); letter-spacing: .075rem; z-index: 1030;">
    <i class="ai-arrow-up text-primary fs-base me-1 ms-n1"></i> 광고전문가 상담하기
</a>

<!-- Contact offcanvas -->
<div class="offcanvas offcanvas-end" id="contact_sidebar" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1">
    <div class="offcanvas-header border-bottom bg-dark">
        <h4 class="offcanvas-title text-white">광고전문가 상담하기</h4>
        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="mb-3">
            <label for="sidebar_company" class="form-label fw-bold">업체명 <span class="ms-1"
                    style="color:#079aca">*</span></label>
            <input class="form-control" type="text" id="sidebar_company" placeholder="업체명을 입력하세요.">
        </div>

        <div class="mb-3">
            <label for="sidebar_name" class="form-label fw-bold">담당자명 <span class="ms-1"
                    style="color:#079aca">*</span></label>
            <input class="form-control" type="text" id="sidebar_name" placeholder="담당자 성함을 입력하세요.">
        </div>
        <div class="mb-3">
            <label for="sidebar_contact" class="form-label fw-bold">연락처 <span class="ms-1"
                    style="color:#079aca">*</span></label>
            <input class="form-control" type="text" id="sidebar_contact" placeholder="연락처를 입력하세요.">
        </div>
        <div class="mb-3">
            <label for="sidebar_url" class="form-label fw-bold">URL</label>
            <input class="form-control" type="text" id="sidebar_url" placeholder="URL을 입력하세요.">
        </div>
        <div class="mb-3">
            <label for="sidebar_budget" class="form-label fw-bold">월 예상 광고비</label>
            <select id="sidebar_budget" class="form-select">
                <option value="">월 예상 광고비를 선택해 주세요.</option>
                <option value="미지정">미지정</option>
                <option value="50만원 - 100만원">50만원 - 100만원</option>
                <option value="100만원 - 500만원">100만원 - 500만원</option>
                <option value="500만원 - 1,000만원">500만원 - 1,000만원</option>
                <option value="1,000만원 - 5,000만원">1,000만원 - 5,000만원</option>
                <option value="5,000만원 이상">5,000만원 이상</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">무료 광고대행</label>
            <br>
            @php
                $free_templates = DB::connection('mysql2')
                    ->table('crm_templates')
                    ->where('type', '무료')
                    ->orderBy('order', 'asc')
                    ->get();
            @endphp
            @foreach ($free_templates as $free_template)
                <span class="mb-2 badge border type_free unselected_type text-nav fs-sm"
                    style="cursor: pointer">{{ $free_template->title }}</span>
            @endforeach
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">일반 광고대행</label>
            <br>
            @php
                $standard_templates = DB::connection('mysql2')
                    ->table('crm_templates')
                    ->where('type', '일반')
                    ->orderBy('order', 'asc')
                    ->get();
            @endphp
            @foreach ($standard_templates as $standard_template)
                <span class="mb-2 badge border type_normal unselected_type text-nav fs-sm show_template"
                    data-id="{{ $standard_template->id }}"
                    style="cursor: pointer">{{ $standard_template->title }}</span>
            @endforeach
            <span class="mb-2 badge border type_normal unselected_type text-nav fs-sm" style="cursor: pointer"
                id="sidebar_etc">직접입력</span>
            <br>

            @foreach ($standard_templates as $template)
                @php
                    $sub_templates = DB::connection('mysql2')
                        ->table('crm_templates')
                        ->where('template_id', $template->id)
                        ->orderBy('order', 'asc')
                        ->get();
                @endphp
                @if (count($sub_templates) > 0)
                    <div class="mt-2 bg-secondary rounded ps-3 p-2" style="display:none"
                        id="show_template_{{ $template->id }}">
                        <div>
                            <small class="fw-bold mb-2">{{ $template->title }}</small>
                        </div>

                        @foreach ($sub_templates as $sub_template)
                            <span class="mb-2 badge border type_normal unselected_type text-nav fs-sm"
                                style="cursor: pointer">{{ $sub_template->title }}</span>
                        @endforeach
                    </div>
                @endif
            @endforeach

            <div class="mt-2 bg-secondary rounded ps-3 p-2" style="display:none" id="sidbar_etc_area">
                <label class="form-label">직접입력</label>
                <input id="type_custom" type="text" class="form-control bg-white">
            </div>
        </div>
        <div class="mb-3">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="sidebar_agreement">
                <label class="form-check-label" for="sidebar_agreement">개인정보처리방침에 동의합니다. </label>
            </div>
            <a href="{{ url('/') }}/privacy" target="_blank" style="text-decoration: none">
                <small>
                    [보러가기]
                </small>
            </a>

        </div>
        <div class="mb-3">
            <div class="d-grid gap-2">
                <a href="tel:02-435-0427" class="btn btn-dark fs-4">
                    <i class="ai-phone fs-lg me-2"></i> 02-435-0427
                </a>
            </div>
        </div>
        <div class="mb-3">
            <div class="d-grid gap-2">
                <button class="btn btn-lg btn-info fs-4" id="submit_sidbar">신청하기</button>
            </div>
        </div>
    </div>
</div> --}}
