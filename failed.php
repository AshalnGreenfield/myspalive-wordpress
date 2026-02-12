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
            Margin: 7% auto 0% auto; 
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
           margin-top: 30px;
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
                <div class="content">                                
                <br><br>
                <!-- START CENTERED WHITE CONTAINER -->
                <div role="presentation" class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 10px;">
                    <!-- START MAIN CONTENT AREA -->
                    <!-- Text Download  & QR -->
                    <div class="dwnapp">
                        <img style="max-width: 120px;" src="https://myspalive.com/wp-content/uploads/2023/01/qr-code.png">
                        <p style="color:white">Download our app</p>
                    </div>
                    <div style="text-align:center; padding: 40px;">
                        <h1 class="text-dark mb-3">Account Info</h1>
                        
                        <div class="text-gray-400 fw-bold fs-4">
                            Sorry, we have problems creating your account link. Please try again.
                        </div><br><br>
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
</html>