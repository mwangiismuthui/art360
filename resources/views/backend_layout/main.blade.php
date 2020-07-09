<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Art360</title>
    <link rel="apple-touch-icon" href="/images/logo2.png">
    <link rel="shortcut icon" type="image/x-icon" href="/images/logo2.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMuli:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="/backend/app-assets/css/vendors.css">{{--
    <link rel="stylesheet" type="text/css" href="/backend/app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="/backend/app-assets/vendors/css/forms/icheck/custom.css">
    <link rel="stylesheet" type="text/css" href="/backend/app-assets/vendors/css/extensions/unslider.css">--}}
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="/backend/app-assets/css/app.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="/backend/app-assets/css/core/menu/menu-types/vertical-compact-menu.css">
      <link rel="stylesheet" type="text/css" href="/backend/app-assets/css/plugins/forms/wizard.css">
{{--
      <link rel="stylesheet" type="text/css" href="/backend/app-assets/css/core/colors/palette-gradient.css">
--}}
{{--
    <link rel="stylesheet" type="text/css" href="/backend/app-assets/css/core/colors/palette-climacon.css">
--}}
{{--
    <link rel="stylesheet" type="text/css" href="/backend/app-assets/css/pages/users.css">
--}}
{{--
    <link rel="stylesheet" type="text/css" href="/backend/app-assets/css/core/menu/menu-types/vertical-compact-menu.css">
--}}
{{--    <link rel="stylesheet" type="text/css" href="/backend/app-assets/css/core/colors/palette-gradient.css">--}}
{{--
    <link rel="stylesheet" type="text/css" href="/backend/app-assets/css/plugins/animate/animate.css">
--}}
    {{--<link rel="stylesheet" type="text/css" href="/backend/app-assets/css/plugins/pickers/daterange/daterange.css">--}}
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/backend/assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-compact-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">


   @include('backend_layout.nav')

    <!-- ////////////////////////////////////////////////////////////////////////////-->


  @include('backend_layout.sidenav')


    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!--fitness stats-->

            @include('partials.alerts')
            @yield('content')

        </div>






      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

@include('backend_layout.footer')

    <!-- BEGIN VENDOR JS-->
    <script src="/backend/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->{{--
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBDkKetQwosod2SZ7ZGCpxuJdxY3kxo5Po"></script>
    <script src="/backend/app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
    <script src="/backend/app-assets/vendors/js/extensions/jquery.knob.min.js"></script>
    <script src="/backend/app-assets/vendors/js/extensions/unslider-min.js"></script>--}}

    <script src="/backend/app-assets/vendors/js/extensions/jquery.steps.min.js"></script>{{--
    <script src="/backend/app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js"></script>
    <script src="/backend/app-assets/vendors/js/pickers/daterange/daterangepicker.js"></script>
    <script src="/backend/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>--}}
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="/backend/app-assets/js/core/app-menu.js"></script>
    <script src="/backend/app-assets/js/core/app.js"></script>

    {{--<script src="/backend/app-assets/js/scripts/forms/select/form-select2.js"></script>--}}
    <script src="/backend/app-assets/js/scripts/modal/components-modal.js"></script>

    {{--<script src="/backend/app-assets/vendors/js/forms/select/select2.full.min.js"></script>--}}
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->

    <script src="/backend/app-assets/js/scripts/forms/wizard-steps.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
