<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- StyleSheets -->
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/green.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">

    @stack('css')
    <style>
        .toast {
            opacity: 1 !important;
        }
    </style>
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        
        /* The Modal (background) */
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          padding-top: 100px; /* Location of the box */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
        
        /* Modal Content */
        .modal-content {
          position: relative;
          background-color: #fefefe;
          margin: auto;
          padding: 0;
          border: 1px solid #888;
          width: 80%;
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
          -webkit-animation-name: animatetop;
          -webkit-animation-duration: 0.4s;
          animation-name: animatetop;
          animation-duration: 0.4s
        }
        
        /* Add Animation */
        @-webkit-keyframes animatetop {
          from {top:-300px; opacity:0} 
          to {top:0; opacity:1}
        }
        
        @keyframes animatetop {
          from {top:-300px; opacity:0}
          to {top:0; opacity:1}
        }
        
        /* The Close Button */
        .close {
          color: white;
          float: right;
          font-size: 28px;
          font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
          color: #000;
          text-decoration: none;
          cursor: pointer;
        }
        
        .modal-header {
          padding: 2px 16px;
          background-color: #5cb85c;
          color: white;
        }
        
        .modal-body {padding: 2px 16px;}
        
        .modal-footer {
          padding: 2px 16px;
          background-color: #5cb85c;
          color: white;
        }
        </style>

    <link rel="icon" href="{{ URL::to('favicon.ico') }}" type="image/gif" sizes="16x16">
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth dashboard-header not-sticky">

    <!-- Header -->
    <div id="header">
        <div class="container">

            <!-- Left Side Content -->
            <div class="left-side">

                <!-- Logo -->
                <div id="logo">
                    <br><a href="#"><h2>AppPAY</h2></a>
                </div>

            </div>
            <!-- Left Side Content / End -->


            <!-- Right Side Content / End -->
            <div class="right-side">

                <!--  User Notifications -->
                <div class="header-widget">

                    {{date("y-m-d h:i")}}
                    <!-- Notifications -->
                    <div class="header-notifications">

                        <!-- Trigger -->
                        <div class="header-notifications-trigger">
                            <a href="#"><i class="icon-material-outline-reorder"></i></a>
                        </div>

                        <!-- Dropdown -->
                        <div class="header-notifications-dropdown">

                            <div class="header-notifications-content">
                                <div class="header-notifications-scroll" data-simplebar>
                                    <ul>

                                        <!-- Notification -->
                                        <li class="notifications-not-read">
                                            <a href="" target="_blank">
                                                <span class="notification-text">
                                                    <strong>Settings</strong>
                                                </span>
                                            </a>
                                        </li>

                                        <!-- Notification -->
                                        <li class="notifications-not-read">
                                            <a href="/">
                                                <span class="notification-text">
                                                    <strong>Logout</strong>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <!--  User Notifications / End -->

                

        </div>
    </div>
    <!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard Container -->
<div class="dashboard-container">

    <!-- Dashboard Sidebar
================================================== -->
    <div class="dashboard-sidebar">
        <div class="dashboard-sidebar-inner" data-simplebar>
            <div class="dashboard-nav-container">

                <!-- Responsive Navigation Trigger -->
                <a href="#" class="dashboard-responsive-nav-trigger">
                    <span class="hamburger hamburger--collapse">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </span>
                    <span class="trigger-title">Dashboard Navigation</span>
                </a>

                <!-- Navigation -->
                <div class="dashboard-nav">
                    <div class="dashboard-nav-inner">

                        <ul data-submenu-title="">
                            <li class=""><a href="/dashboard"><i class="icon-material-outline-account-balance"></i> Dashboard</a></li>
                            <li class=""><a href="/deposit"><i class="icon-feather-layers"></i> Deposits</a></li>
                        </ul>

                    </div>
                </div>
                <!-- Navigation / End -->

            </div>
        </div>
    </div>
    <!-- Dashboard Sidebar / End -->


    @yield('content')

</div>
<!-- Dashboard Container / End -->

</div>

<!-- Scripts -->
<script src="{{ URL::to('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ URL::to('assets/js/jquery-migrate-3.0.0.min.js') }}"></script>
<script src="{{ URL::to('assets/js/mmenu.min.js') }}"></script>
<script src="{{ URL::to('assets/js/tippy.all.min.js') }}"></script>
<script src="{{ URL::to('assets/js/simplebar.min.js') }}"></script>
<script src="{{ URL::to('assets/js/bootstrap-slider.min.js') }}"></script>
<script src="{{ URL::to('assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ URL::to('assets/js/snackbar.js') }}"></script>
<script src="{{ URL::to('assets/js/clipboard.min.js') }}"></script>
<script src="{{ URL::to('assets/js/counterup.min.js') }}"></script>
<script src="{{ URL::to('assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ URL::to('assets/js/slick.min.js') }}"></script>
<script src="{{ URL::to('assets/js/custom.js') }}"></script>
@stack('scripts')

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
    // Snackbar for user status switcher
    $('#snackbar-user-status label').click(function() {
        Snackbar.show({
            text: 'Your status has been changed!',
            pos: 'bottom-center',
            showAction: false,
            actionText: "Dismiss",
            duration: 3000,
            textColor: '#fff',
            backgroundColor: '#383838'
        });
    });
</script>

<!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
<script src="{{ URL::to('assets/js/chart.min.js') }}"></script>
    
</body>
</html>