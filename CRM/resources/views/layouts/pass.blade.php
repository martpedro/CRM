<!DOCTYPE html>
<html class="loading" data-textdirection="ltr" lang="en">
    <!-- BEGIN: Head-->
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" name="viewport">
        <meta content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google." name="description">
        <meta content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard" name="keywords">
        <meta content="ThemeSelect" name="author">
        <title>
        @yield('title')| PromoWeb1's
        </title>
        <link href="@yield('locationfiles')app-assets/images/favicon/apple-touch-icon-152x152.png" rel="apple-touch-icon">
        <link href="@yield('locationfiles')app-assets/images/favicon/favicon-32x32.png" rel="shortcut icon" type="image/x-icon">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- BEGIN: VENDOR CSS-->
        <link href="@yield('locationfiles')app-assets/vendors/vendors.min.css" rel="stylesheet" type="text/css">
        <!-- END: VENDOR CSS-->
        <!-- BEGIN: Page Level CSS-->
        <link href="@yield('locationfiles')app-assets/css/themes/vertical-modern-menu-template/materialize.css" rel="stylesheet" type="text/css">
        <link href="@yield('locationfiles')app-assets/css/themes/vertical-modern-menu-template/style.css" rel="stylesheet" type="text/css">
        <link href="@yield('locationfiles')app-assets/css/pages/@yield('tipocss')" rel="stylesheet" type="text/css">
        <!-- END: Page Level CSS-->
        <!-- BEGIN: Custom CSS-->
        <link href="@yield('locationfiles')app-assets/css/custom/custom.css" rel="stylesheet" type="text/css">
            <!-- END: Custom CSS-->
                                                            
    </head>
    <!-- END: Head-->
   
    <body class="@yield('classbody')" data-col="1-column" data-menu="vertical-modern-menu" data-open="click">
        @yield('content')
        <!-- BEGIN VENDOR JS-->
        <script src="@yield('locationfiles')app-assets/js/vendors.min.js" type="text/javascript">
        </script>
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN THEME  JS-->
        <script src="@yield('locationfiles')app-assets/js/plugins.js" type="text/javascript">
        </script>
        <script src="@yield('locationfiles')app-assets/js/custom/custom-script.js" type="text/javascript">
        </script>
        <!-- END THEME  JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <!-- END PAGE LEVEL JS-->
    </body>
</html>