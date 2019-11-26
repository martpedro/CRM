@extends('layouts.theme1')

@section('title','Marks ')

@section('css')
	<!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
     <link rel="stylesheet" type="text/css" href="app-assets/vendors/dropify/css/dropify.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-modern-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-modern-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-sidebar.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-contacts.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
@endsection

@section('content')
  	<!-- BEGIN: Header-->
  	@include('header.header')
  	<!-- END: Header-->
  	<!-- BEGIN: SideNav-->
  	@include('aside.aside')
  	<!-- END: SideNav-->
	<!-- BEGIN: Page Main-->
	<div id="app">
		<list-marks-component>
  		
  	</list-marks-component>
	</div>
  		
@endsection

@section('js')
	<!-- BEGIN VENDOR JS-->
    <script src="app-assets/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/data-tables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/dropify/js/dropify.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="app-assets/js/plugins.js" type="text/javascript"></script>
    <script src="app-assets/js/custom/custom-script.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
    <script src="app-assets/js/plugins.js" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/app-contacts.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/form-layouts.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/form-file-uploads.js"></script>
    <!-- END PAGE LEVEL JS-->

    <script src="./js/app.js"></script>
@endsection

