<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title> @yield('title', 'PekHub')</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- Flaticon -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-5.14.0.min.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/toastr/toastr.min.css') }}">

    @stack('styles')
</head>
<body>
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader">
        <div class="custom-loader"></div>
    </div>

    <!-- main header -->
    @include('includes.header')
    <!--Form Back Drop-->
    <div class="form-back-drop"></div>

    @yield('content')

    <!-- footer area start -->
    @include('includes.footer')
    <!-- footer area end -->

    <!-- Scroll Top Button -->
    <button class="scroll-top scroll-to-target" data-target="html"><span class="fas fa-angle-double-up"></span></button>

</div>
<!--End pagewrapper-->


<!-- Jquery -->
<script async data-cfasync="false"
        src="https://demo.webtend.net/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<!-- Bootstrap -->
<script src=" {{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Appear Js -->
<script src=" {{ asset('assets/js/appear.min.js') }}"></script>
<!-- Slick -->
<script src=" {{ asset('assets/js/slick.min.js') }}"></script>
<!-- Magnific Popup -->
<script src=" {{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Nice Select -->
<script src=" {{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<!-- Image Loader -->
<script src=" {{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- Circle Progress -->
<script src=" {{ asset('assets/js/circle-progress.min.js') }}"></script>
<!-- Isotope -->
<script src=" {{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<!--  WOW Animation -->
<script src=" {{ asset('assets/js/wow.min.js') }}"></script>
<!-- Custom script -->
<script src=" {{ asset('assets/js/script.js') }}"></script>
<!-- Toastr script -->
<script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>
@include('includes.flashMessages')
<script>
    $(document).ready(function () {
        $('a').on('click', function (event) {
            if (this.hash !== '') {
                event.preventDefault();

                const hash = this.hash;

                $('html, body').animate(
                    {
                        scrollTop: $(hash).offset().top
                    },
                    800,
                );
            }
        });
    });
</script>

@stack('scripts')
</body>
</html>
