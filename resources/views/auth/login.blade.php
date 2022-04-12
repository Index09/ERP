<!doctype html>
<html lang="ar" dir="rtl">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

 <!-- FAVICON -->
 <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />

 <!-- TITLE -->
 <title>تسجيل الدخول  - تقسيط</title>

 <!-- BOOTSTRAP CSS -->
 <link id="style" href="{{asset(('/plugins/bootstrap/css/bootstrap.min.css'))}}" rel="stylesheet" />

 <!-- STYLE CSS -->
 <link href="{{asset('css/style.css')}}" rel="stylesheet" />
 <link href="{{asset('css/transparent-style.css')}}" rel="stylesheet">
 <link href="{{asset('css/skin-modes.css')}}" rel="stylesheet" />

 <link href="{{asset('css/customcss.css')}}" rel="stylesheet" />

 <!--- FONT-ICONS CSS -->
 <link href="{{asset('css/icons.css')}}" rel="stylesheet" />

 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Roboto:wght@300&display=swap" rel="stylesheet">

 <!-- COLOR SKIN CSS -->
 <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('colors/color1.css')}}" />

<body class="app sidebar-mini rtl">

    <!-- BACKGROUND-IMAGE -->
    <div class="login-img">

        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="{{asset('/images/loader.svg')}}" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">

                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto mt-7">
                    <div class="text-center">
                         <img class='logo' src="{{asset('images/brand/logo-white.png')}}" class="header-brand-img" alt="">
                    </div>
                </div>

                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <form action="/login" method="POST" class="login100-form validate-form">
                            @csrf
                            <span class="login100-form-title pb-5">
                                        تسجيل الدخول
                            </span>
                            <div class="panel panel-primary">
                                <div class="tab-menu-heading">
                                    <div class="tabs-menu1">
                                        <!-- Tabs -->
                                    </div>
                                </div>
                               
                            
                                <div class="panel-body tabs-menu-body p-0 pt-5">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="fe fe-mail text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input name='email' class="input100 border-start-0 form-control ms-0" type="email" placeholder="البريد الاليكترونى">
                                               
                                            </div>
                                         
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="mdi mdi-account-key text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input name="password" class="input100 border-start-0 form-control ms-0" type="password" placeholder="كلمه المرور">
                                            </div>
                                            @error('email')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror  
                                            <div class="text-center pt-4">
                                                <p class="mb-0"><a href="forgot-password.html" class=" text-center text-primary ms-1 text-center">نسيت كلمه المرور ؟</a></p>
                                            </div>
                                            <div class="container-login100-form-btn">
                                                <input value='تسجيل الدخول' type='submit'  class="login100-form-btn btn-primary">                                               
                                            </div>
                                            <div class="text-center pt-3">
                                                <p class="text-dark mb-0">لست مشترك<a href="register.html" class="text-primary ms-1">اشتراك الان</a></p>
                                   
                                            </div>    
                                                                           
                                        </div>
                                       
                                        <div class="tab-pane" id="tab6">
                                            <div id="mobile-num" class="wrap-input100 validate-input input-group mb-4">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <span>+91</span>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0">
                                            </div>
                                            <div id="login-otp" class="justify-content-around mb-5">
                                                <input class="form-control text-center w-15" id="txt1" maxlength="1">
                                                <input class="form-control text-center w-15" id="txt2" maxlength="1">
                                                <input class="form-control text-center w-15" id="txt3" maxlength="1">
                                                <input class="form-control text-center w-15" id="txt4" maxlength="1">
                                            </div>
                                            <span>Note : Login with registered mobile number to generate OTP.</span>
                                            <div class="container-login100-form-btn ">
                                                <a href="javascript:void(0)" class="login100-form-btn btn-primary" id="generate-otp">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->
    
    <!-- JQUERY JS -->
    <script src="{{asset('/js/jquery.min.js')}}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{asset('/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="{{asset('/js/show-password.min.js')}}"></script>
    <!-- GENERATE OTP JS -->
    <script src="{{asset('/js/generate-otp.js')}}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{asset('/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
    <!-- Color Theme js -->
    <script src="{{asset('/js/themeColors.js')}}"></script>

    <!-- CUSTOM JS -->
    <script src="{{asset('/js/custom.js')}}"></script>

</body>

</html>