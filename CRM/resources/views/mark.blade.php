@extends('layouts.theme1')

@section('title','Marks ')

@section('content')
	
	@include('header.header')

	@include('aside.aside')

	<div id="main">
		<div class="row">
			<div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="col s12">
            	<div class="container">
            		<div class="seaction">
            			<div style="margin-top: 80px" class="card" >
                            <div class="card-content">
                                <h1 class="card-title">Registra tu Marca</h1>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Form with icon prefixes -->
                            <div class="col s12 m6 l6">
                                <div id="prefixes" class="card card card-default scrollspy">
                                    <div style="" class="card-content">
                                        <!-- <h4 class="card-title">Form with icon prefixes</h4> -->
                                        <form class="col s12" enctype="multipart/form-data" method="post" action="/mark">
                                            @csrf
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="material-icons prefix">business</i>
                                                    <input id="marca" name="marca" type="text">
                                                    <label for="marca">Marca</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="material-icons prefix">web</i>
                                                    <input id="url" name="url" type="text">
                                                    <label for="url">Sitio Web</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="material-icons prefix">location_on</i>
                                                    <input id="direccion" name="direccion" type="text">
                                                    <label for="direccion">Dirección</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="material-icons prefix">phone</i>
                                                    <input id="telefono" name="telefono" type="tel">
                                                    <label for="telefono">Teléfono</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div id="file-upload" class="section">
                                                    <div class="row section">
                                                        <div class="col s12 m4 l3">
                                                            <p>Imagen</p>
                                                        </div>
                                                        <div class="col s12 m8 l9">
                                                            <input type="file" id="input-file-now" name="logo" class="dropify" data-default-file="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <button class="btn cyan waves-effect waves-light right" type="submit">Submit
                                                        <i class="material-icons right">send</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
            		</div>
            	</div>
            </div>
		</div>
	</div>

 	@include('footer.footer')

	<!-- BEGIN VENDOR JS-->
    <script src="app-assets/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/chartjs/chart.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/chartist-js/chartist.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/chartist-js/chartist-plugin-tooltip.js" type="text/javascript"></script>
    <script src="app-assets/vendors/chartist-js/chartist-plugin-fill-donut.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="app-assets/js/plugins.js" type="text/javascript"></script>
    <script src="app-assets/js/custom/custom-script.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/dashboard-modern.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/intro.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/dropify/js/dropify.min.js"></script>
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/form-file-uploads.js"></script>
    <!-- END PAGE LEVEL JS-->
@endsection