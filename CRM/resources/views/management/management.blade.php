@extends('layouts.theme1')
@section('title','Home ')
@section('css')
  <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
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
   <div id="main">
    <div class="row">
      <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
      <div class="col s12">
        <div class="container">
          <!-- Add new contact popup -->
          <div style="bottom: 54px; right: 19px;" class="fixed-action-btn direction-top">
            <a class="btn-floating btn-large primary-text gradient-shadow modal-trigger" href="#modal1">
              <i class="material-icons">person_add</i>
            </a>
          </div>
          <!-- Add new contact popup Ends-->

          <!-- Modal Structure -->
          <div id="modal1" class="modal border-radius-6">
            <div class="modal-content">
              <h5 class="mt-0">Create new contact</h5>
              <hr>
              <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col m6 s12">
                      <i class="material-icons prefix"> perm_identity </i>
                      <input id="first_name" type="text" class="validate">
                      <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col m6 s12">
                      <i class="material-icons prefix"> perm_identity </i>
                      <input id="last_name" type="text" class="validate">
                      <label for="last_name">Last Name</label>
                    </div>
                    <div class="input-field col m6 s12">
                      <i class="material-icons prefix"> business </i>
                      <input id="company" type="text" class="validate">
                      <label for="company">Company</label>
                    </div>
                    <div class="input-field col m6 s12">
                      <i class="material-icons prefix"> business_center </i>
                      <input id="business" type="text" class="validate">
                      <label for="business">Job Title</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix"> email </i>
                      <input id="email" type="email" class="validate">
                      <label for="email">Email</label>
                    </div>
                    <div class="input-field col s12">
                      <i class="material-icons prefix"> call </i>
                      <input id="phone" type="number" class="validate">
                      <label for="phone">Phone</label>
                    </div>
                    <div class="input-field col s12">
                      <i class="material-icons prefix"> note </i>
                      <input id="notes" type="text" class="validate">
                      <label for="notes">Notes</label>
                    </div>
                  </div>

                </form>
              </div>
            </div>
            <div class="modal-footer">
              <a class="btn modal-close waves-effect waves-light mr-2">Add Contact</a>
            </div>
          </div>
          <!-- Modal Structure Ends -->

          <!-- Sidebar Area Starts -->
          <div class="sidebar-left sidebar-fixed">
            <div class="sidebar">
              <div class="sidebar-content">
                <div class="sidebar-header">
                  <div class="sidebar-details">
                    <h5 class="m-0 sidebar-title"><i class="material-icons app-header-icon text-top">perm_identity</i> Contacts
                    </h5>
                    <div class="mt-10 pt-2">
                      <p class="m-0 subtitle font-weight-700">Total number of contacts</p>
                      <p class="m-0 text-muted">1457 Contacts</p>
                    </div>
                  </div>
                </div>
                <div id="sidebar-list" class="sidebar-menu list-group position-relative animate fadeLeft delay-1">
                  <div class="sidebar-list-padding app-sidebar sidenav" id="contact-sidenav">
                    <ul class="contact-list display-grid">
                      <li class="sidebar-title">Filters</li>
                      <li class="active"><a href="#!" class="text-sub"><i class="material-icons mr-2"> perm_identity </i> All
                        Contact</a></li>
                      <li><a href="#!" class="text-sub"><i class="material-icons mr-2"> history </i> Frequent</a></li>
                      <li><a href="#!" class="text-sub"><i class="material-icons mr-2"> star_border </i> Starred Contacts</a></li>
                      <li class="sidebar-title">Options</li>
                      <li><a href="#!" class="text-sub"><i class="material-icons mr-2"> keyboard_arrow_down </i> Import</a></li>
                      <li><a href="#!" class="text-sub"><i class="material-icons mr-2"> keyboard_arrow_up </i> Export</a></li>
                      <li><a href="#!" class="text-sub"><i class="material-icons mr-2"> print </i> Print</a></li>
                      <li class="sidebar-title">Department</li>
                      <li><a href="#!" class="text-sub"><i class="purple-text material-icons small-icons mr-2">
                        fiber_manual_record </i> Engineering</a></li>
                      <li><a href="#!" class="text-sub"><i class="amber-text material-icons small-icons mr-2">
                        fiber_manual_record </i> Sales</a></li>
                      <li><a href="#!" class="text-sub"><i class="light-green-text material-icons small-icons mr-2">
                        fiber_manual_record </i> Support</a></li>
                    </ul>
                  </div>
                </div>
                <a href="#" data-target="contact-sidenav" class="sidenav-trigger hide-on-large-only"><i
                                                                                                        class="material-icons">menu</i></a>
              </div>
            </div>
          </div>
          <!-- Sidebar Area Ends -->

          <!-- Content Area Starts -->
          <div class="content-area content-right">
            <div class="app-wrapper">
              <div class="datatable-search">
                <i class="material-icons mr-2 search-icon">search</i>
                <input type="text" placeholder="Search Contact" class="app-filter" id="global_filter">
              </div>
              <div id="button-trigger" class="card card card-default scrollspy border-radius-6 fixed-width">
                <div class="card-content p-0">
                  <table id="data-table-contact" class="display" style="width:100%">
                    <thead>
                      <tr>
                        <th class="background-image-none center-align">
                          <label>
                            <input type="checkbox" onClick="toggle(this)" />
                            <span></span>
                          </label>
                        </th>
                        <th>User</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Favorite</th>
                        <th>Delete</th>
                        <!-- <th class="background-image-none"><i class="material-icons">star_border</i></th>
                              <th class="background-image-none"><i class="material-icons">delete_outline</i></th> -->
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-1.png"
                                                                            alt="avatar"></span></td>
                        <td>John</td>
                        <td>john@domain.com</td>
                        <td>202-555-0119</td>
                        <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-2.png"
                                                                            alt="avatar"></span></td>
                        <td>Rodolfo</td>
                        <td>rodo@domain.com</td>
                        <td>202-555-0125</td>
                        <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-3.png"
                                                                            alt="avatar"></span></td>
                        <td>Marco</td>
                        <td>marco@domain.com</td>
                        <td>202-555-0177</td>
                        <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-4.png"
                                                                            alt="avatar"></span></td>
                        <td>Joshua</td>
                        <td>jos@domain.com</td>
                        <td>202-555-0126</td>
                        <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-4.png"
                                                                            alt="avatar"></span></td>
                        <td>Gene</td>
                        <td>gene@domain.com</td>
                        <td>202-555-0130</td>
                        <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-5.png"
                                                                            alt="avatar"></span></td>
                        <td>Oscar</td>
                        <td>oscar@domain.com</td>
                        <td>+1-202-555-0119</td>
                        <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-6.png"
                                                                            alt="avatar"></span></td>
                        <td>William</td>
                        <td>will@domain.com</td>
                        <td>+1-202-555-0125</td>
                        <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-7.png"
                                                                            alt="avatar"></span></td>
                        <td>Dorian</td>
                        <td>dori@domain.com</td>
                        <td>202-555-0112</td>
                        <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-8.png"
                                                                            alt="avatar"></span></td>
                        <td>Lester</td>
                        <td>les@domain.com</td>
                        <td>+1-202-555-0177</td>
                        <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-9.png"
                                                                            alt="avatar"></span></td>
                        <td>Charles</td>
                        <td>name@domain.com</td>
                        <td>+1-202-555-0126</td>
                        <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-1.png"
                                                                            alt="avatar"></span></td>
                        <td>William</td>
                        <td>name@domain.com</td>
                        <td>+1-202-555-0130</td>
                        <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-11.png"
                                                                            alt="avatar"></span></td>
                        <td>John</td>
                        <td>name@domain.com</td>
                        <td>+1-202-555-0112</td>
                        <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-12.png"
                                                                            alt="avatar"></span></td>
                        <td>John</td>
                        <td>name@domain.com</td>
                        <td>+1-202-555-0112</td>
                        <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-13.png"
                                                                            alt="avatar"></span></td>
                        <td>John</td>
                        <td>name@domain.com</td>
                        <td>+1-202-555-0112</td>
                        <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-14.png"
                                                                            alt="avatar"></span></td>
                        <td>Jake</td>
                        <td>name@domain.com</td>
                        <td>+1-202-555-0112</td>
                        <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-15.png"
                                                                            alt="avatar"></span></td>
                        <td>Jake</td>
                        <td>name@domain.com</td>
                        <td>+1-202-555-0112</td>
                        <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-16.png"
                                                                            alt="avatar"></span></td>
                        <td>Heather</td>
                        <td>name@domain.com</td>
                        <td>+1-202-555-0112</td>
                        <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-17.png"
                                                                            alt="avatar"></span></td>
                        <td>Joanna</td>
                        <td>name@domain.com</td>
                        <td>+1-202-555-0112</td>
                        <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                          <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-1.png"
                                                                              alt="avatar"></span></td>
                        <td>Joanna</td>
                        <td>name@domain.com</td>
                        <td>+1-202-555-0112</td>
                        <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-2.png"
                                                                            alt="avatar"></span></td>
                        <td>Cassandra</td>
                        <td>name@domain.com</td>
                        <td>+1-202-555-0112</td>
                        <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-3.png"
                                                                            alt="avatar"></span></td>
                        <td>Dolores</td>
                        <td>name@domain.com</td>
                        <td>+1-202-555-0112</td>
                        <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-4.png"
                                                                            alt="avatar"></span></td>
                        <td>Susan</td>
                        <td>name@domain.com</td>
                        <td>+1-202-555-0112</td>
                        <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-5.png"
                                                                            alt="avatar"></span></td>
                        <td>Susan</td>
                        <td>name@domain.com</td>
                        <td>+1-202-555-0112</td>
                        <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-6.png"
                                                                            alt="avatar"></span></td>
                        <td>Kathleen</td>
                        <td>name@domain.com</td>
                        <td>+1-202-555-0112</td>
                        <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-7.png"
                                                                            alt="avatar"></span></td>
                        <td>Chief</td>
                        <td>name@domain.com</td>
                        <td>+1-202-555-0112</td>
                        <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-8.png"
                                                                            alt="avatar"></span></td>
                        <td>Walter</td>
                        <td>name@domain.com</td>
                        <td>+1-202-555-0112</td>
                        <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-9.png"
                                                                            alt="avatar"></span></td>
                        <td>Walter</td>
                        <td>name@domain.com</td>
                        <td>+1-202-555-0112</td>
                        <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-10.png"
                                                                            alt="avatar"></span></td>
                        <td>Kathleen</td>
                        <td>name@domain.com</td>
                        <td>+1-202-555-0112</td>
                        <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                      <tr>
                        <td class="center-align">
                          <label>
                            <input type="checkbox" name="foo" />
                            <span></span>
                          </label>
                        </td>
                        <td><span class="avatar-contact avatar-online"><img src="app-assets/images/avatar/avatar-11.png"
                                                                            alt="avatar"></span></td>
                        <td>Terry</td>
                        <td>name@domain.com</td>
                        <td>+1-202-555-0112</td>
                        <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
                        <td><i class="material-icons delete">delete_outline</i></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Content Area Ends -->
          <!-- START RIGHT SIDEBAR NAV -->
          <aside id="right-sidebar-nav">
            <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
              <div class="row">
                <div class="slide-out-right-title">
                  <div class="col s12 border-bottom-1 pb-0 pt-1">
                    <div class="row">
                      <div class="col s2 pr-0 center">
                        <i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
                      </div>
                      <div class="col s10 pl-0">
                        <ul class="tabs">
                          <li class="tab col s4 p-0">
                            <a href="#messages" class="active">
                              <span>Messages</span>
                            </a>
                          </li>
                          <li class="tab col s4 p-0">
                            <a href="#settings">
                              <span>Settings</span>
                            </a>
                          </li>
                          <li class="tab col s4 p-0">
                            <a href="#activity">
                              <span>Activity</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="slide-out-right-body">
                  <div id="messages" class="col s12">
                    <div class="collection border-none">
                      <input class="header-search-input mt-4 mb-2" type="text" name="Search" placeholder="Search Messages" />
                      <ul class="collection p-0">
                        <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-online avatar-50"><img src="app-assets/images/avatar/avatar-7.png" alt="avatar" />
                            <i></i>
                          </span>
                          <div class="user-content">
                            <h6 class="line-height-0">Elizabeth Elliott</h6>
                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                          </div>
                          <span class="secondary-content medium-small">5.00 AM</span>
                        </li>
                        <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-online avatar-50"><img src="app-assets/images/avatar/avatar-1.png" alt="avatar" />
                            <i></i>
                          </span>
                          <div class="user-content">
                            <h6 class="line-height-0">Mary Adams</h6>
                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                          </div>
                          <span class="secondary-content medium-small">4.14 AM</span>
                        </li>
                        <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-off avatar-50"><img src="app-assets/images/avatar/avatar-2.png" alt="avatar" />
                            <i></i>
                          </span>
                          <div class="user-content">
                            <h6 class="line-height-0">Caleb Richards</h6>
                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                          </div>
                          <span class="secondary-content medium-small">4.14 AM</span>
                        </li>
                        <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-online avatar-50"><img src="app-assets/images/avatar/avatar-3.png" alt="avatar" />
                            <i></i>
                          </span>
                          <div class="user-content">
                            <h6 class="line-height-0">Caleb Richards</h6>
                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Keny !</p>
                          </div>
                          <span class="secondary-content medium-small">9.00 PM</span>
                        </li>
                        <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-online avatar-50"><img src="app-assets/images/avatar/avatar-4.png" alt="avatar" />
                            <i></i>
                          </span>
                          <div class="user-content">
                            <h6 class="line-height-0">June Lane</h6>
                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Ohh God</p>
                          </div>
                          <span class="secondary-content medium-small">4.14 AM</span>
                        </li>
                        <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-off avatar-50"><img src="app-assets/images/avatar/avatar-5.png" alt="avatar" />
                            <i></i>
                          </span>
                          <div class="user-content">
                            <h6 class="line-height-0">Edward Fletcher</h6>
                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Love you</p>
                          </div>
                          <span class="secondary-content medium-small">5.15 PM</span>
                        </li>
                        <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-online avatar-50"><img src="app-assets/images/avatar/avatar-6.png" alt="avatar" />
                            <i></i>
                          </span>
                          <div class="user-content">
                            <h6 class="line-height-0">Crystal Bates</h6>
                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can we</p>
                          </div>
                          <span class="secondary-content medium-small">8.00 AM</span>
                        </li>
                        <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-off avatar-50"><img src="app-assets/images/avatar/avatar-7.png" alt="avatar" />
                            <i></i>
                          </span>
                          <div class="user-content">
                            <h6 class="line-height-0">Nathan Watts</h6>
                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Great!</p>
                          </div>
                          <span class="secondary-content medium-small">9.53 PM</span>
                        </li>
                        <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-off avatar-50"><img src="app-assets/images/avatar/avatar-8.png" alt="avatar" />
                            <i></i>
                          </span>
                          <div class="user-content">
                            <h6 class="line-height-0">Willard Wood</h6>
                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Do it</p>
                          </div>
                          <span class="secondary-content medium-small">4.20 AM</span>
                        </li>
                        <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-online avatar-50"><img src="app-assets/images/avatar/avatar-1.png" alt="avatar" />
                            <i></i>
                          </span>
                          <div class="user-content">
                            <h6 class="line-height-0">Ronnie Ellis</h6>
                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Got that</p>
                          </div>
                          <span class="secondary-content medium-small">5.20 AM</span>
                        </li>
                        <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-online avatar-50"><img src="app-assets/images/avatar/avatar-9.png" alt="avatar" />
                            <i></i>
                          </span>
                          <div class="user-content">
                            <h6 class="line-height-0">Daniel Russell</h6>
                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                          </div>
                          <span class="secondary-content medium-small">12.00 AM</span>
                        </li>
                        <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-off avatar-50"><img src="app-assets/images/avatar/avatar-10.png" alt="avatar" />
                            <i></i>
                          </span>
                          <div class="user-content">
                            <h6 class="line-height-0">Sarah Graves</h6>
                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Okay you</p>
                          </div>
                          <span class="secondary-content medium-small">11.14 PM</span>
                        </li>
                        <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-off avatar-50"><img src="app-assets/images/avatar/avatar-11.png" alt="avatar" />
                            <i></i>
                          </span>
                          <div class="user-content">
                            <h6 class="line-height-0">Andrew Hoffman</h6>
                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can do</p>
                          </div>
                          <span class="secondary-content medium-small">7.30 PM</span>
                        </li>
                        <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                          <span class="avatar-status avatar-online avatar-50"><img src="app-assets/images/avatar/avatar-12.png" alt="avatar" />
                            <i></i>
                          </span>
                          <div class="user-content">
                            <h6 class="line-height-0">Camila Lynch</h6>
                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Leave it</p>
                          </div>
                          <span class="secondary-content medium-small">2.00 PM</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div id="settings" class="col s12">
                    <p class="mt-8 mb-0 ml-5 font-weight-900">GENERAL SETTINGS</p>
                    <ul class="collection border-none">
                      <li class="collection-item border-none mt-3">
                        <div class="m-0">
                          <span>Notifications</span>
                          <div class="switch right">
                            <label>
                              <input checked type="checkbox" />
                              <span class="lever"></span>
                            </label>
                          </div>
                        </div>
                      </li>
                      <li class="collection-item border-none mt-3">
                        <div class="m-0">
                          <span>Show recent activity</span>
                          <div class="switch right">
                            <label>
                              <input type="checkbox" />
                              <span class="lever"></span>
                            </label>
                          </div>
                        </div>
                      </li>
                      <li class="collection-item border-none mt-3">
                        <div class="m-0">
                          <span>Show recent activity</span>
                          <div class="switch right">
                            <label>
                              <input type="checkbox" />
                              <span class="lever"></span>
                            </label>
                          </div>
                        </div>
                      </li>
                      <li class="collection-item border-none mt-3">
                        <div class="m-0">
                          <span>Show Task statistics</span>
                          <div class="switch right">
                            <label>
                              <input type="checkbox" />
                              <span class="lever"></span>
                            </label>
                          </div>
                        </div>
                      </li>
                      <li class="collection-item border-none mt-3">
                        <div class="m-0">
                          <span>Show your emails</span>
                          <div class="switch right">
                            <label>
                              <input type="checkbox" />
                              <span class="lever"></span>
                            </label>
                          </div>
                        </div>
                      </li>
                      <li class="collection-item border-none mt-3">
                        <div class="m-0">
                          <span>Email Notifications</span>
                          <div class="switch right">
                            <label>
                              <input checked type="checkbox" />
                              <span class="lever"></span>
                            </label>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <p class="mt-8 mb-0 ml-5 font-weight-900">SYSTEM SETTINGS</p>
                    <ul class="collection border-none">
                      <li class="collection-item border-none mt-3">
                        <div class="m-0">
                          <span>System Logs</span>
                          <div class="switch right">
                            <label>
                              <input type="checkbox" />
                              <span class="lever"></span>
                            </label>
                          </div>
                        </div>
                      </li>
                      <li class="collection-item border-none mt-3">
                        <div class="m-0">
                          <span>Error Reporting</span>
                          <div class="switch right">
                            <label>
                              <input type="checkbox" />
                              <span class="lever"></span>
                            </label>
                          </div>
                        </div>
                      </li>
                      <li class="collection-item border-none mt-3">
                        <div class="m-0">
                          <span>Applications Logs</span>
                          <div class="switch right">
                            <label>
                              <input checked type="checkbox" />
                              <span class="lever"></span>
                            </label>
                          </div>
                        </div>
                      </li>
                      <li class="collection-item border-none mt-3">
                        <div class="m-0">
                          <span>Backup Servers</span>
                          <div class="switch right">
                            <label>
                              <input type="checkbox" />
                              <span class="lever"></span>
                            </label>
                          </div>
                        </div>
                      </li>
                      <li class="collection-item border-none mt-3">
                        <div class="m-0">
                          <span>Audit Logs</span>
                          <div class="switch right">
                            <label>
                              <input type="checkbox" />
                              <span class="lever"></span>
                            </label>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div id="activity" class="col s12">
                    <div class="activity">
                      <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
                      <ul class="collection with-header">
                        <li class="collection-item">
                          <div class="font-weight-900">
                            Homepage mockup design <span class="secondary-content">Just now</span>
                          </div>
                          <p class="mt-0 mb-2">Melissa liked your activity.</p>
                          <span class="new badge amber" data-badge-caption="Important"> </span>
                        </li>
                        <li class="collection-item">
                          <div class="font-weight-900">
                            Melissa liked your activity Drinks. <span class="secondary-content">10 mins</span>
                          </div>
                          <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                          <span class="new badge light-green" data-badge-caption="Resolved"></span>
                        </li>
                        <li class="collection-item">
                          <div class="font-weight-900">
                            12 new users registered <span class="secondary-content">30 mins</span>
                          </div>
                          <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                        </li>
                        <li class="collection-item">
                          <div class="font-weight-900">
                            Tina is attending your activity <span class="secondary-content">2 hrs</span>
                          </div>
                          <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                        </li>
                        <li class="collection-item">
                          <div class="font-weight-900">
                            Josh is now following you <span class="secondary-content">5 hrs</span>
                          </div>
                          <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                          <span class="new badge red" data-badge-caption="Pending"></span>
                        </li>
                      </ul>
                      <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
                      <ul class="collection with-header">
                        <li class="collection-item">
                          <div class="font-weight-900">
                            New order received urgent <span class="secondary-content">Just now</span>
                          </div>
                          <p class="mt-0 mb-2">Melissa liked your activity.</p>
                        </li>
                        <li class="collection-item">
                          <div class="font-weight-900">System shutdown. <span class="secondary-content">5 min</span></div>
                          <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                          <span class="new badge blue" data-badge-caption="Urgent"> </span>
                        </li>
                        <li class="collection-item">
                          <div class="font-weight-900">
                            Database overloaded 89% <span class="secondary-content">20 min</span>
                          </div>
                          <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                        </li>
                      </ul>
                      <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
                      <ul class="collection with-header">
                        <li class="collection-item">
                          <div class="font-weight-900">System error <span class="secondary-content">10 min</span></div>
                          <p class="mt-0 mb-2">Melissa liked your activity.</p>
                        </li>
                        <li class="collection-item">
                          <div class="font-weight-900">
                            Production server down. <span class="secondary-content">1 hrs</span>
                          </div>
                          <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                          <span class="new badge blue" data-badge-caption="Urgent"></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide Out Chat -->
            <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
              <li class="center-align pt-2 pb-2 sidenav-close chat-head">
                <a href="#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth Elliott</a>
              </li>
              <li class="chat-body">
                <ul class="collection">
                  <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                    <span class="avatar-status avatar-online avatar-50"><img src="app-assets/images/avatar/avatar-7.png" alt="avatar" />
                    </span>
                    <div class="user-content speech-bubble">
                      <p class="medium-small">hello!</p>
                    </div>
                  </li>
                  <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                    <div class="user-content speech-bubble-right">
                      <p class="medium-small">How can we help? We're here for you!</p>
                    </div>
                  </li>
                  <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                    <span class="avatar-status avatar-online avatar-50"><img src="app-assets/images/avatar/avatar-7.png" alt="avatar" />
                    </span>
                    <div class="user-content speech-bubble">
                      <p class="medium-small">I am looking for the best admin template.?</p>
                    </div>
                  </li>
                  <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                    <div class="user-content speech-bubble-right">
                      <p class="medium-small">Materialize admin is the responsive materializecss admin template.</p>
                    </div>
                  </li>

                  <li class="collection-item display-grid width-100 center-align">
                    <p>8:20 a.m.</p>
                  </li>

                  <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                    <span class="avatar-status avatar-online avatar-50"><img src="app-assets/images/avatar/avatar-7.png" alt="avatar" />
                    </span>
                    <div class="user-content speech-bubble">
                      <p class="medium-small">Ohh! very nice</p>
                    </div>
                  </li>
                  <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                    <div class="user-content speech-bubble-right">
                      <p class="medium-small">Thank you.</p>
                    </div>
                  </li>
                  <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                    <span class="avatar-status avatar-online avatar-50"><img src="app-assets/images/avatar/avatar-7.png" alt="avatar" />
                    </span>
                    <div class="user-content speech-bubble">
                      <p class="medium-small">How can I purchase it?</p>
                    </div>
                  </li>

                  <li class="collection-item display-grid width-100 center-align">
                    <p>9:00 a.m.</p>
                  </li>

                  <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                    <div class="user-content speech-bubble-right">
                      <p class="medium-small">From ThemeForest.</p>
                    </div>
                  </li>
                  <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                    <div class="user-content speech-bubble-right">
                      <p class="medium-small">Only $24</p>
                    </div>
                  </li>
                  <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                    <span class="avatar-status avatar-online avatar-50"><img src="app-assets/images/avatar/avatar-7.png" alt="avatar" />
                    </span>
                    <div class="user-content speech-bubble">
                      <p class="medium-small">Ohh! Thank you.</p>
                    </div>
                  </li>
                  <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                    <span class="avatar-status avatar-online avatar-50"><img src="app-assets/images/avatar/avatar-7.png" alt="avatar" />
                    </span>
                    <div class="user-content speech-bubble">
                      <p class="medium-small">I will purchase it for sure.</p>
                    </div>
                  </li>
                  <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                    <div class="user-content speech-bubble-right">
                      <p class="medium-small">Great, Feel free to get in touch on</p>
                    </div>
                  </li>
                  <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                    <div class="user-content speech-bubble-right">
                      <p class="medium-small">https://pixinvent.ticksy.com/</p>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="center-align chat-footer">
                <form class="col s12" onsubmit="slide_out_chat()" action="javascript:void(0);">
                  <div class="input-field">
                    <input id="icon_prefix" type="text" class="search" />
                    <label for="icon_prefix">Type here..</label>
                    <a onclick="slide_out_chat()"><i class="material-icons prefix">send</i></a>
                  </div>
                </form>
              </li>
            </ul>
          </aside>
          <!-- END RIGHT SIDEBAR NAV -->

        </div>
      </div>
    </div>
  </div>
  <!-- END: Page Main-->
  <!-- BEGIN: Footer-->
  {{-- @include('footer.footer') --}}
  <!-- END: Footer-->

  <!-- END: Footer-->
@endsection
@section('js')
  <!-- BEGIN VENDOR JS-->
    <script src="app-assets/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/data-tables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="app-assets/js/plugins.js" type="text/javascript"></script>
    <script src="app-assets/js/custom/custom-script.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/app-contacts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
@endsection