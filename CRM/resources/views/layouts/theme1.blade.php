<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="">
        <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
        <meta name="author" content="ThemeSelect">
        <title>
        @yield('title')| PromoWeb1's
        </title>
        <link rel="apple-touch-icon" href="app-assets/images/favicon/apple-touch-icon-152x152.png">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/favicon/favicon-32x32.png">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- BEGIN: VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/animate-css/animate.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/chartist-js/chartist.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/chartist-js/chartist-plugin-tooltip.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/flag-icon/css/flag-icon.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/dropify/css/dropify.min.css">
        <!-- END: VENDOR CSS-->
        <!-- BEGIN: Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-modern-menu-template/materialize.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-modern-menu-template/style.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-modern.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/pages/intro.css">
        <!-- END: Page Level CSS-->
        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/custom/custom.css">
        <!-- END: Custom CSS-->
    </head>
    <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns  " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">
        @yield('content')
        
    </body>
</html>

