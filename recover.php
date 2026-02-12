<!doctype html>
    <html>
        <head>
            <meta name="viewport" content="width=device-width">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>MySpaLive Message</title>
            <style>
                .box-succes {
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                    width: 50%;
                }

                .text-dark {
                    color: #181c32!important;
                }

                .content{
                    box-sizing: border-box; 
                    display: block; 
                    Margin: 0% auto 0% auto; 
                    max-width: 580px; 
                    padding: 50px;
                }
                
                .logo {
                    margin-right: 70%;
                    width: 164px;
                }

                .body-info{
                    /* background-image: url(https://app-dev.myspalive.com/assets/media/bg/img_background.png) !important; */
                    background-color: #1D6782 !important; 
                    background-position: 50% !important;
                    background-repeat: no-repeat !important;
                    background-size: cover !important;
                }

                body {
                    display: flex;
                    flex-direction: column;
                    color: #181c32;
                }

                .text-gray-400 {
                    color: #b5b5c3!important;
                }

                .fw-bold {
                    font-weight: 500!important;
                }

                .fs-4 {
                    font-size: 1.25rem!important;
                }

                .dwnapp {
                    right: calc(50% - 400px);
                position: absolute;
                margin-top: 200px;
                }

                .text-dark {
                    color: #181c32!important;
                }

                .fw-bolder {
                    font-weight: 600!important;
                }

                .fs-6 {
                    font-size: 1.075rem!important;
                }

                .mb-3 {
                    margin: 0.75rem 0 !important;
                }

                .text-muted {
                    color: #a1a5b7!important;
                    margin-bottom: 30px;
                }

                .position-relative {
                    position: relative!important;
                }

                .form-control.form-control-solid {
                    background-color: #f5f8fa;
                    border-color: #f5f8fa;
                    color: #5e6278;
                    transition: color .2s ease,background-color .2s ease;
                }

                .form-control {
                    box-shadow: none!important;
                }

                .form-control-lg {
                    min-height: calc(1.5em + 1.65rem + 2px);
                    padding: 0.825rem 1.5rem;
                    font-size: 1.15rem;
                    border-radius: 0.475rem;
                }

                .form-control {
                    display: block;
                    width: 100%;
                    padding: 0.75rem 1rem;
                    font-size: 1.1rem;
                    font-weight: 500;
                    line-height: 1.5;
                    color: #181c32;
                    background-color: #fff;
                    background-clip: padding-box;
                    border: 1px solid #e4e6ef;
                    appearance: none;
                    border-radius: 0.475rem;
                    box-shadow: inset 0 1px 2px rgb(0 0 0 / 8%);
                    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
                }

                .btn.btn-icon:not(.btn-outline):not(.btn-dashed):not(.border-hover):not(.border-active):not(.btn-flush) {
                    border: 0;
                }

                .btn:not(.btn-shadow):not(.shadow):not(.shadow-sm):not(.shadow-lg) {
                    box-shadow: none!important;
                }

                .btn.btn-icon {
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    padding: 0;
                    height: calc(1.5em + 1.5rem + 2px);
                    width: calc(1.5em + 1.5rem + 2px);
                }

                .btn {
                    outline: 0!important;
                }

                .btn-group-sm>.btn.btn-icon, .btn.btn-icon.btn-sm {
                    height: calc(1.5em + 1.1rem + 2px);
                    width: calc(1.5em + 1.1rem + 2px);
                }

                .me-n2 {
                    margin-right: -0.5rem!important;
                }

                .translate-middle {
                    transform: translate(-50%,-50%)!important;
                }

                .end-0 {
                    right: 0!important;
                }

                .top-50 {
                    top: 50%!important;
                }

                .position-absolute {
                    position: absolute!important;
                }

                .btn {
                    display: inline-block;
                    font-weight: 500;
                    line-height: 1.5;
                    color: #181c32;
                    text-align: center;
                    vertical-align: middle;
                    cursor: pointer;
                    user-select: none;
                    background-color: transparent;
                    border: 1px solid transparent;
                    padding: 0.75rem 1.5rem;
                    font-size: 1.1rem;
                    border-radius: 0.475rem;
                    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
                }

                .btn-group-sm>.btn, .btn-sm {
                    padding: 0.55rem 1.25rem;
                    font-size: .925rem;
                    border-radius: 0.475rem;
                }

                .btn.btn-icon .svg-icon, .btn.btn-icon i {
                    padding: 0;
                    margin: 0;
                    line-height: 1;
                }

                .btn i {
                    display: inline-flex;
                    font-size: 1rem;
                    padding-right: 0.35rem;
                    vertical-align: middle;
                    line-height: 0;
                }

                .bi-eye-slash::before {
                    content: "";
                }

                .fw-bolder {
                    font-weight: 600!important;
                }

                .text-center {
                    text-align: center!important;
                }

                .btn-group-lg>.btn:not(.btn-outline):not(.btn-dashed):not(.border-hover):not(.border-active):not(.btn-flush):not(.btn-icon), .btn:not(.btn-outline):not(.btn-dashed):not(.border-hover):not(.border-active):not(.btn-flush):not(.btn-icon).btn-lg {
                    padding: calc(0.825rem + 1px) calc(1.75rem + 1px);
                }

                .btn:not(.btn-outline):not(.btn-dashed):not(.border-hover):not(.border-active):not(.btn-flush):not(.btn-icon) {
                    border: 0;
                    padding: calc(0.75rem + 1px) calc(1.5rem + 1px);
                }

                .btn:not(.btn-shadow):not(.shadow):not(.shadow-sm):not(.shadow-lg) {
                    box-shadow: none!important;
                }

                .btn.btn-primary {
                    color: #fff;
                    border-color: #009ef7;
                    background-color: #009ef7;
                }

                [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
                    cursor: pointer;
                }

                .fw-bolder {
                    font-weight: 600!important;
                }

                button, select {
                    text-transform: none;
                }

                .indicator-progress {
                    display: none;
                }

                *, ::after, ::before {
                    box-sizing: border-box;
                }

                .btn.btn-primary {
                    color: #fff;
                    border-color: #009ef7;
                    background-color: #009ef7;
                }

                .ms-2 {
                    margin-left: 0.5rem!important;
                }

                .align-middle {
                    vertical-align: middle!important;
                }

                .spinner-border-sm {
                    width: 1rem;
                    height: 1rem;
                    border-width: 0.145em;
                }

                .spinner-border {
                    display: inline-block;
                    width: 2rem;
                    height: 2rem;
                    vertical-align: -0.125em;
                    border: 0.185em solid currentColor;
                    border-right-color: transparent;
                    border-radius: 50%;
                    animation: .65s linear infinite spinner-border;
                }

                [class*=" bi-"]::before, [class^=bi-]::before {
                    display: inline-block;
                    font-family: bootstrap-icons!important;
                    font-style: normal;
                    font-weight: 400!important;
                    font-variant: normal;
                    text-transform: none;
                    line-height: 1;
                    vertical-align: -0.125em;
                    -webkit-font-smoothing: antialiased;
                    -moz-osx-font-smoothing: grayscale;
                }

                .btn.btn-icon .svg-icon, .btn.btn-icon i {
                    padding: 0;
                    margin: 0;
                    line-height: 1;
                }

                .box{
                margin-top:60px;
                display:flex;
                justify-content:space-around;
                flex-wrap:wrap;
                }

                .alert{
                margin-top:25px;
                background-color:#fff;
                font-size:25px;
                font-family:sans-serif;
                text-align:center;
                width:300px;
                height:100px;
                padding-top: 150px;
                position:relative;
                }

                .alert::before{
                width:100px;
                height:100px;
                position:absolute;
                border-radius: 100%;
                inset: 20px 0px 0px 100px;
                font-size: 60px;
                line-height: 100px;
                border : 5px solid gray;
                animation-name: reveal;
                animation-duration: 1.5s;
                animation-timing-function: ease-in-out;
                }

                .alert>.alert-body{
                opacity:0;
                animation-name: reveal-message;
                animation-duration:1s;
                animation-timing-function: ease-out;
                animation-delay:1.5s;
                animation-fill-mode:forwards;
                }

                @keyframes reveal-message{
                from{
                    opacity:0;
                }
                to{
                    opacity:1;
                }
                }

                .success{
                color:#58D68D;
                }

                .success::before{
                    content: "✓";
                border : 5px solid #58D68D;
                }

                .error{
                color: #E74C3C;
                }

                .error::before{
                content: "✗";
                border : 5px solid #E74C3C;
                }

                @keyframes reveal {
                0%{
                    border: 5px solid transparent;
                    color: transparent;
                    box-shadow: 0px 0px 12px 7px rgba(255,250,250,0.8) inset;
                    transform: rotate(1000deg);
                }
                25% {
                    border-top:5px solid gray;
                    color: transparent;
                    box-shadow: 0px 0px 17px 10px rgba(255,250,250,0.8) inset;
                    }
                50%{
                    border-right: 5px solid gray;
                    border-left : 5px solid gray;
                    color:transparent;
                    box-shadow: 0px 0px 17px 10px rgba(200,200,200,0.8) inset;
                }
                75% {
                    border-bottom: 5px solid gray;
                    color:gray;
                    box-shadow: 0px 0px 12px 7px rgba(200,200,200,0.8) inset;
                    }
                100%{
                    border: 5px solid gray;
                    box-shadow: 0px 0px 12px 7px rgba(200,200,200,0.8) inset;
                }
                }
                @media only screen and (max-width: 620px) {
                    table[class=body] h1 {
                    font-size: 28px !important;
                    margin-bottom: 10px !important;
                    }

                    .dwnapp{
                        display:none;
                    }

                    .content{
                        box-sizing: border-box; 
                        display: block; 
                        Margin: 7% auto 0% auto; 
                        max-width: 580px; 
                        padding: 12px;
                    }

                    table[class=body] p,
                        table[class=body] ul,
                        table[class=body] ol,
                        table[class=body] td,
                        table[class=body] span,
                        table[class=body] a {
                    font-size: 16px !important;
                    }
                    table[class=body] .wrapper,
                        table[class=body] .article {
                    padding: 10px !important;
                    }
                    table[class=body] .content {
                    padding: 0 !important;
                    }
                    table[class=body] .container {
                    padding: 0 !important;
                    width: 100% !important;
                    }
                    table[class=body] .main {
                    border-left-width: 0 !important;
                    border-radius: 0 !important;
                    border-right-width: 0 !important;
                    }
                    table[class=body] .btn table {
                    width: 100% !important;
                    }
                    table[class=body] .btn a {
                    width: 100% !important;
                    }
                    table[class=body] .img-responsive {
                    height: auto !important;
                    max-width: 100% !important;
                    width: auto !important;
                    }
                }

                @media (min-width: 1200px){
                    .h1, h1 {
                        font-size: 1.75rem;
                    }
                }

                @media (max-width: 1200px){
                    /* .body-info{
                        height: 1040px;
                    } */
                }
                
                /* -------------------------------------
                    PRESERVE THESE STYLES IN THE HEAD
                ------------------------------------- */
                @media all {
                    .ExternalClass {
                    width: 100%;
                    }
                    .ExternalClass,
                        .ExternalClass p,
                        .ExternalClass span,
                        .ExternalClass font,
                        .ExternalClass td,
                        .ExternalClass div {
                    line-height: 100%;
                    }
                    .apple-link a {
                    color: inherit !important;
                    font-family: inherit !important;
                    font-size: inherit !important;
                    font-weight: inherit !important;
                    line-height: inherit !important;
                    text-decoration: none !important;
                    }
                    #MessageViewBody a {
                    color: inherit;
                    text-decoration: none;
                    font-size: inherit;
                    font-family: inherit;
                    font-weight: inherit;
                    line-height: inherit;
                    }
                    .btn-primary table td:hover {
                    background-color: #34495e !important;
                    }
                    .btn-primary a:hover {
                    background-color: #34495e !important;
                    border-color: #34495e !important;
                    }
                }
            </style>
        </head>
        <body class="body-info" style="">
            <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">MySpaLive Message.</span>
            <div role="presentation" border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                <div>
                <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
                <td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;">
                    <div class="content" >                                
                        <br><br>
                        <!-- START CENTERED WHITE CONTAINER -->
                        <div role="presentation" class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 10px;">
                            <!-- START MAIN CONTENT AREA -->
                            <!-- Text Download  & QR -->
                            <div class="dwnapp">
                                <img style="max-width: 120px;" src="https://myspalive.com/wp-content/uploads/2023/01/qr-code.png">
                                <p style="color:white">Download our app</p>
                            </div>
                            <div style="padding: 40px;" id="restorePassword">
                                <h1 class="text-dark mb-3" style="text-align:center;">Set your new password</h1>
                                
                                <div class="text-gray-400 fw-bold fs-4" style="text-align:center;">
                                    You request password recovery by MYSPALIVE, please create your new password.
                                </div><br><br>
                            
                            

                                <div class="mb-10 fv-row" data-kt-password-meter="true">
                                    <!--begin::Wrapper-->
                                    <div class="mb-1">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bolder text-dark fs-6">New Password</label>
                                        <!--end::Label-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative mb-3">
                                            <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                                                id="password" autocomplete="off" minlength="3" maxlength="12" />
                                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                data-kt-password-meter-control="visibility" id="eye" onclick="togglePasswordVisibility()">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                                                <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/>
                                                <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/>
                                                <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"/>
                                                </svg>
                                                <i class="bi bi-eye fs-2 d-none"></i>
                                            </span>
                                        </div>
                                        <!--end::Input wrapper-->

                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Hint-->
                                    <div class="text-muted">Use 4 numbers.</div>
                                    <!--end::Hint-->
                                </div>

                                <div class="fv-row mb-10" data-kt-password-meter="true">
                                    <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
                                    <div class="position-relative mb-3">
                                        <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                                        id="confirm_password" autocomplete="off" minlength="3" maxlength="12" />
                                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                        data-kt-password-meter-control="visibility" id="eyeConfirm" onclick="togglePasswordVisibilityConfirm()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash"
                                            viewBox="0 0 16 16">
                                            <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/>
                                            <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/>
                                            <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"/>
                                        </svg>
                                        <i class="bi bi-eye fs-2 d-none"></i>
                                        </span>
                                    </div>
                                </div>
                                <!--end::Input group=-->
                                <!--begin::Action-->
                                
                                <div class="text-center" style="margin-top: 30px;">
                                    <button class="btn btn-lg btn-primary fw-bolder" onclick="onSubmit()">Submit</button>
                                </div>
                            </div>


                        </div><br>
                        <div style="text-align: center;">
                            <a style="background-color: transparent !important; color: white; text-decoration: underline; font-size: 16;" href="https://app.myspalive.com/redirect">Download our app</a>
                        </div>

                        <!-- END CENTERED WHITE CONTAINER -->
                        </div>
                    </td>
                    <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
                </div>
            </div>
        </body>

    <script src="https://myspalive.com/jquery-1.11.3.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>

        const urlParams = new URLSearchParams(window.location.search);
        const k1 = urlParams.get('key1');
        const k2 = urlParams.get('key2');
        console.log('k1', k1); // Output: "value"
        console.log('k2', k2); // Output: "value"

        
        function onSubmit() {

            if($("#password").val() === $("#confirm_password").val()){
                $.ajax({
                    url: "https://api.myspalive.com/",
                    // url: "http://127.0.0.1/apispalive/",
                    method: "POST",
                    data: {
                        action: "restore_password",
                        key: '225sadfgasd123fgkhijjdsadfg16578g12gg3gh',
                        k1: k1,
                        k2: k2,
                        password: $("#password").val(),
                        confirm_password: $("#confirm_password").val(),
                        
                    },
                    success: function(data) {

                        if (data.success) {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Password recovered successfully',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            window.location.href = "https://myspalive.com/redirect.php";
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'You have already used this link.',
                            });
                        }
                        // window.location.href = "https://myspalive.com/";
                    },
                    error: function (data) {

                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'There has been an error. Check your internet connection and try again.',
                        });
                        // callback(xhr.status, data);
                    },
                });
            }else{
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'The password must be the same in both fields.',
                });
            }
        }

        function togglePasswordVisibility() {
            var passwordInput = document.getElementById('password');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }

        function togglePasswordVisibilityConfirm() {
            var passwordInput = document.getElementById('confirm_password');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }


    </script>

</html>