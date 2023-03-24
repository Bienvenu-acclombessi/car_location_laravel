<!DOCTYPE html>
<html lang="en">

<head>
    <title>Benin Auto |admin</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
    <meta name="keywords"
        content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes">
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('/assets_admin/assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets_admin/assets/css/bootstrap/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets_admin/assets/icon/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets_admin/assets/icon/font-awesome/css/font-awesome.min.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets_admin/assets/icon/icofont/css/icofont.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets_admin/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets_admin/assets/css/jquery.mCustomScrollbar.css')}}">
</head>

<body>

    <body>
        
        <!-- Pre-loader start -->
        <div class="theme-loader">
            <div class="loader-track">
                <div class="loader-bar"></div>
            </div>
        </div>
        <!-- Pre-loader end -->
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                {{-- navbar --}}
                @include('admin.component.nav')
                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        {{-- sidebar --}}
                        @include('admin.component.sidebar')
                        <div class="pcoded-content">
                            <div class="pcoded-inner-content">
                                <div class="main-body">
                                    <div class="page-wrapper">
                                        @yield('page_body')

                                        <div id="styleSelector">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Warning Section Starts -->
            <!-- Older IE warning message -->
            <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
            <!-- Warning Section Ends -->
            <!-- Required Jquery -->
            <script type="text/javascript" src="{{asset('/assets_admin/assets/js/jquery/jquery.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('/assets_admin/assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('/assets_admin/assets/js/popper.js/popper.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('/assets_admin/assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
            <!-- jquery slimscroll js -->
            <script type="text/javascript" src="{{asset('/assets_admin/assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
            <!-- modernizr js -->
            <script type="text/javascript" src="{{asset('/assets_admin/assets/js/modernizr/modernizr.js')}}"></script>
            <!-- am chart -->
            <script src="{{asset('/assets_admin/assets/pages/widget/amchart/amcharts.min.js')}}"></script>
            <script src="{{asset('/assets_admin/assets/pages/widget/amchart/serial.min.js')}}"></script>
            <!-- Chart js -->
            <script type="text/javascript" src="{{asset('/assets_admin/assets/js/chart.js/Chart.js')}}"></script>
            <!-- Todo js -->
            <script type="text/javascript " src="{{asset('/assets_admin/assets/pages/todo/todo.js')}} "></script>
            <!-- Custom js -->
            <script type="text/javascript" src="{{asset('/assets_admin/assets/pages/dashboard/custom-dashboard.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('/assets_admin/assets/js/script.js')}}"></script>
            <script type="text/javascript " src="{{asset('/assets_admin/assets/js/SmoothScroll.js')}}"></script>
            <script src="{{asset('/assets_admin/assets/js/pcoded.min.js')}}"></script>
            <script src="{{asset('/assets_admin/assets/js/vartical-demo.js')}}"></script>
            <script src="{{asset('/assets_admin/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    </body>

</html>
