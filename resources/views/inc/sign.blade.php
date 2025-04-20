<!-- Modal with tabs and forms -->
<div class="modal fade" id="sign" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="nav nav-tabs flex-nowrap text-nowrap mb-n2" role="tablist">
                    <li class="nav-item">
                        <a href="#signin" class="nav-link flex-column flex-sm-row px-3 px-sm-4 active"
                            data-bs-toggle="tab" role="tab" aria-selected="true">
                            <i class="ai-login me-sm-2 ms-sm-n1"></i>
                            <span class="d-none d-sm-inline">관리자 로그인</span>
                            <span class="fs-sm fw-medium d-sm-none pt-1">관리자 로그인</span>
                        </a>
                    </li>
                </ul>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body tab-content">
                <div class="tab-pane fade show active mt-n2" id="signin" autocomplete="off">
                    <div class="mb-3 mb-sm-4">
                        <label for="email1" class="form-label">이메일</label>
                        <input type="email" class="form-control" id="signin_email">
                    </div>
                    <div class="mb-3 mb-sm-4">
                        <label for="pass1" class="form-label">비밀번호</label>
                        <div class="password-toggle">
                            <input type="password" class="form-control" id="signin_password">
                            <label class="password-toggle-btn">
                                <input class="password-toggle-check" type="checkbox">
                                <span class="password-toggle-indicator"></span>
                            </label>
                        </div>
                    </div>
                    <div id="signin_feedback">

                    </div>
                    <button id="signin_button" class="btn btn-info text-light w-100">관리자 로그인</button>
                    <button id="signin_button_loading" class="btn btn-info text-light w-100" style="display: none">
                        <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
