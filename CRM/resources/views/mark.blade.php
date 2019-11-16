@extends('layouts.theme1')

@section('title','Marks ')

@section('content')
	
	@include('header.header')

	@include('aside.aside')

	<div id="main">
		<div class="row">
			<div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
			<div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s10 m6 l6">
                            
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Form</a>
                                </li>
                                <li class="breadcrumb-item active">Form Layouts
                                </li>
                            </ol>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col s12">
            	<div class="container">
            		<div class="seaction">
            			<div class="card">
                            <div class="card-content">
                                <p class="caption mb-0">Includes predefined classes for easy form layout options.</p>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Form with icon prefixes -->
                            <div class="col s12 m6 l6">
                                <div id="prefixes" class="card card card-default scrollspy">
                                    <div class="card-content">
                                        <h4 class="card-title">Form with icon prefixes</h4>
                                        <form class="col s12">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <input id="name3" type="text">
                                                    <label for="name3">Name</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="material-icons prefix">email</i>
                                                    <input id="email3" type="email">
                                                    <label for="email3">Email</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="material-icons prefix">lock_outline</i>
                                                    <input id="password3" type="password">
                                                    <label for="password3">Password</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="material-icons prefix">question_answer</i>
                                                    <textarea id="message3" class="materialize-textarea"></textarea>
                                                    <label for="message3">Message</label>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                                            <i class="material-icons right">send</i>
                                                        </button>
                                                    </div>
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
	<!-- <div id="main">
		
		<div class="row">
			<div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
			<div class="col s12 m6 l6">
				<div id="prefixes" class="card card card-default scrollspy">
					<div class="card-content">
						<h4 class="card-title">Form with icon prefixes</h4>
						<form class="col s12">
			            <div class="row">
			              <div class="input-field col s12">
			                <i class="material-icons prefix">account_circle</i>
			                <input id="name3" type="text">
			                <label for="name3">Name</label>
			              </div>
			            </div>
			            <div class="row">
			              <div class="input-field col s12">
			                <i class="material-icons prefix">email</i>
			                <input id="email3" type="email">
			                <label for="email3">Email</label>
			              </div>
			            </div>
			            <div class="row">
			              <div class="input-field col s12">
			                <i class="material-icons prefix">lock_outline</i>
			                <input id="password3" type="password">
			                <label for="password3">Password</label>
			              </div>
			            </div>
			            <div class="row">
			              <div class="input-field col s12">
			                <i class="material-icons prefix">question_answer</i>
			                <textarea id="message3" class="materialize-textarea"></textarea>
			                <label for="message3">Message</label>
			              </div>
			              <div class="row">
			                <div class="input-field col s12">
			                  <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
			                    <i class="material-icons right">send</i>
			                  </button>
			                </div>
			              </div>
			            </div>
			          </form>
					</div>
						
				</div>
			</div>
		</div>
		
	</div> -->

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
@endsection