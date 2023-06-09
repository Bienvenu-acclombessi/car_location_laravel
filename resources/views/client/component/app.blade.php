<!DOCTYPE html>
<html lang="fr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Auto | Accueil</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="telephone=no" name="format-detection">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="{{asset('assets/css/master.css')}}">

    <link rel="icon" type="image/x-icon" href="favicon.ico">
    {{-- <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '463e7cf0ea98e27eef632a594f59e79890be4d47';
        window.smartsupp || (function(d) {
            var s, c, o = smartsupp = function() {
                o._.push(arguments)
            };
            o._ = [];
            s = d.getElementsByTagName('script')[0];
            c = d.createElement('script');
            c.type = 'text/javascript';
            c.charset = 'utf-8';
            c.async = true;
            c.src = '../www.smartsuppchat.com/loaderd41d.js?';
            s.parentNode.insertBefore(c, s);
        })(document);
    </script> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="page">
    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->
    @include('client.component.nav')
    <div class="l-theme animated-css" data-header="sticky" data-header-top="200" data-canvas="container">
       
        @yield('content')
        @include('client.component.footer')
    </div>
    <!-- end layout-theme-->


    <!-- ++++++++++++-->
    <!-- MAIN SCRIPTS-->
    <!-- ++++++++++++-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <!---->
    <!-- Color scheme-->
    <script src="{{asset('assets/plugins/switcher/js/dmss.js')}}"></script>
    <!-- Select customization & Color scheme-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.5/js/bootstrap-select.min.js"></script>
    <!-- Pop-up window-->
    <script src="{{asset('assets/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <!-- Headers scripts-->
    <script src="{{asset('assets/plugins/headers/slidebar.js')}}"></script>
    <script src="{{asset('assets/plugins/headers/header.js')}}"></script>
    <!-- Mail scripts-->
    {{-- <script src="{{asset('assets/plugins/jqBootstrapValidation.js')}}"></script> --}}
    <script src="{{asset('assets/plugins/contact_me.js')}}"></script>
    <!-- Filter and sorting images-->
    <script src="{{asset('assets/plugins/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/plugins/isotope/imagesLoaded.js')}}"></script>
    <!-- Progress numbers-->
    <script src="{{asset('assets/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('assets/plugins/rendro-easy-pie-chart/jquery.waypoints.min.js')}}"></script>
    <!-- Animations-->
    <script src="{{asset('assets/plugins/scrollreveal/scrollreveal.min.js')}}"></script>
    <!-- Scale images-->
    <script src="{{asset('assets/plugins/ofi.min.js')}}"></script>
    <!-- Main slider-->
    <script src="{{asset('assets/plugins/slider-pro/jquery.sliderPro.min.js')}}"></script>
    <!-- Sliders-->
    <script src="{{asset('assets/plugins/slick/slick.js')}}"></script>
    <!-- Slider number-->
    <script src="{{asset('assets/plugins/noUiSlider/wNumb.js')}}"></script>
    <script src="{{asset('assets/plugins/noUiSlider/nouislider.min.js')}}"></script>
    <!-- User customization-->
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <!-- Main slider-->
    <script src="{{asset('assets/plugins/slider-pro/jquery.sliderPro.min.js')}}"></script>
    <!-- Sliders-->
    <script src="{{asset('assets/plugins/slick/slick.js')}}"></script>
    <!-- Slider number-->
    <script src="{{asset('assets/plugins/noUiSlider/wNumb.js')}}"></script>
    <script src="{{asset('assets/plugins/noUiSlider/nouislider.min.js')}}"></script>
</body>

</html>
