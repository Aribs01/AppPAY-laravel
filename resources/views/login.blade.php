<!doctype html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>AppPAY</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/green.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    <link rel="icon" href="{{ URL::to('favicon.ico') }}" type="image/gif" sizes="16x16">
    <style>
        .toast {
            opacity: 1 !important;
        }
    </style>

</head>
<body>

<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1>AppPAY</h1>

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs" class="dark">
                    <ul>
                        <li><a href="mailto:abiolaaribisala@gmail.com">Contact Us</a></li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</div>

<!-- Page Content
================================================== -->
<div class="container">
    <div class="row">
        <div class="col-xl-5 offset-xl-3">


            <div class="login-register-page">
                
                <script>
                    @if( Session::has('error'))
                    toastr.error("{{ Session::get('error') }}");
                    @endif
                </script>
                <!-- Form -->
                <form action="/" method="post" id="login-form">
                    <div class="input-with-icon-left">
                        <input type="text" class="input-text with-border" name="emailaddress" id="emailaddress" placeholder="Enter Your Email" required/>
                    </div>

                    <div class="input-with-icon-left">
                        <input type="password" class="input-text with-border" name="password" id="password" placeholder="Password" required/>
                    </div>
                </form>

                <!-- Button -->
                {{-- <button class="button  " type="submit" form="login-form">login</button> --}}
                <a href="/dashboard">
                    <button class="button">login</button>
                </a>


            </div>

        </div>
    </div>
</div>

<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->

</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<script src="{{ URL::to('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ URL::to('assets/js/jquery-migrate-3.0.0.min.js') }}"></script>
<script src="{{ URL::to('assets/js/mmenu.min.js') }}"></script>
<script src="{{ URL::to('assets/js/tippy.all.min.j') }}s"></script>
<script src="{{ URL::to('assets/js/simplebar.min.js') }}"></script>
<script src="{{ URL::to('assets/js/bootstrap-slider.min.js') }}"></script>
<script src="{{ URL::to('assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ URL::to('assets/js/snackbar.js') }}"></script>
<script src="{{ URL::to('assets/js/clipboard.min.js') }}"></script>
<script src="{{ URL::to('assets/js/counterup.min.js') }}"></script>
<script src="{{ URL::to('assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ URL::to('assets/js/slick.min.js') }}"></script>
<script src="{{ URL::to('assets/js/custom.js') }}"></script>

</body>
</html>
