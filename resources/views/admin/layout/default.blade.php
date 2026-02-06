<!DOCTYPE html>

<html lang="en">

   <head>

      <meta charset="utf-8" />

      <!-- CSRF Token -->

      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>@yield('pageTitle') | Profound Realtors</title>

      <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      <meta http-equiv="content-type" content="text/html; charset=utf-8 ;">

      <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />

      <meta name="author" content="Coderthemes"  />

      <meta http-equiv="X-UA-Compatible" content="IE=edge" />

      <!-- App favicon -->

      <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favPro.png') }}">

      <!--Morris Chart-->
      <link rel="icon" type="image/x-icon" href="{{url('frontend/assets/images/favPro.png')}}">

      <link rel="stylesheet" href="{{ asset('backend/assets/libs/morris-js/morris.css') }}" />



      

      <!-- third party css -->

      <link href="{{ asset('backend/assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />

      <link href="{{ asset('backend/assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />

      <link href="{{ asset('backend/assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />

      <link href="{{ asset('backend/assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />

      <!-- third party css end -->

      <!-- App css -->

      <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

      <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

      <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

      <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/select2.min.css') }}" >

      <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/toastr.min.css') }}" >

      <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet" type="text/css" />

      <link href="{{ asset('backend/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />

      <link href="{{ asset('backend/assets/css/jquery-ui.css' ) }}" rel="Stylesheet" type="text/css" />

      <link href="{{ asset('backend/assets/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css" />

      <link href="{{ asset('backend/assets/css/bootstrap-datepicker.standalone.min.css') }}" rel="stylesheet" type="text/css"  />

      <link href="{{ asset('backend/assets/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" >

      

      

      

      <script src="{{ asset('backend/js/jquery-3.2.1.min.js') }}" ></script>

      <script src="{{ asset('backend/ckeditor/ckeditor.js') }}" ></script>

      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/3.3.0/select2.css" rel="stylesheet" />

      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/3.3.0/select2.js"></script>

      <!--<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>-->





      <style type="text/css">

         div#ui-datepicker-div {

         top: 155px !important;

         }

         .ajax-loader {

         position: fixed;

         display: none;

         left: 0px;

         top: 0px;

         width: 100%;

         height: 100%;

         z-index: 9999;

         background: url({{ asset('backend/images/full_page_load.gif')  }}) 50% 50% no-repeat #f5f5f58c;

         }

         a.nav-link.property {

    text-decoration: none !important;

        }

        a.nav-link {

    color: #435966;

}

        a.nav-link:hover {

    color: #2890f6;

}





      </style>

      <style type="text/css">

         .red{

         color: red;

         }

      </style>

   </head>

   <body>

      <!--    <div class="ajax-loader" style="display:none"></div> -->

      <!-- Begin page -->

      <div id="wrapper">

         <!-- Topbar Start -->

         <div class="navbar-custom">

            <ul class="list-unstyled topnav-menu float-right mb-0">

               <li class="d-none d-sm-block">

                  <form class="app-search">

                     <div class="app-search-box">

                     </div>

                  </form>

               </li>

               <li class="dropdown notification-list">

                  <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">

                  <img src="{{ asset('backend/images/users/user.jpg') }}" alt="user-image" class="rounded-circle" />

                  <span class="pro-user-name ml-1"> {{ Auth::user()->first_name }} <i class="mdi mdi-chevron-down"></i> </span>

                  </a>

                  <div class="dropdown-menu dropdown-menu-right profile-dropdown">

                     <!-- item-->

                     <div class="dropdown-header noti-title">

                        <h6 class="text-overflow m-0">Welcome {{ Auth::user()->first_name }}</h6>

                     </div>

                     <div class="dropdown-divider"></div>

                     <!-- item-->

                     <a href="{{ url('admin/logout') }}" class="dropdown-item notify-item">

                     <i class="fe-log-out"></i>

                     <span>Logout</span>

                     </a>

                  </div>

               </li>

            </ul>

            <!-- LOGO -->

            <div class="logo-box siderbarlogo">

               <a href="{{ url('/admin/dashboard') }}" class="logo text-center">

                  <span class="logo-lg">

                     <img src="{{ asset('frontend/assets/images/profound-logo.png') }}" alt="" height="50" />

                     <!-- <span class="logo-lg-text-light">Xeria</span> -->

                  </span>

                  <span class="logo-sm">

                     <!-- <span class="logo-sm-text-dark">X</span> -->

                     <!-- <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="" height="24" /> -->

                  </span>

               </a>

            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">

               <li>

                  <button class="button-menu-mobile disable-btn waves-effect">

                  <i class="fe-menu"></i>

                  </button>

               </li>

               <li>

                  <h4 class="page-title-main">Dashboard</h4>

               </li>

            </ul>

         </div>

         <!-- end Topbar -->

         <!-- ========== Left Sidebar Start ========== -->

         <div class="left-side-menu">

            <div class="slimscroll-menu">

               <!-- User box -->

               <div class="user-box text-center">

                  <img src="{{ asset('backend/images/users/user.jpg') }}" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-lg" />

                  <div class="dropdown">

                     <a href="#" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a>

                     <div class="dropdown-menu user-pro-dropdown">

                        <!-- item-->

                        <a href="javascript:void(0);" class="dropdown-item notify-item">

                        <i class="fe-user mr-1"></i>

                        <span>My Account</span>

                        </a>

                        <!-- item-->

                        <a href="javascript:void(0);" class="dropdown-item notify-item">

                        <i class="fe-settings mr-1"></i>

                        <span>Settings</span>

                        </a>

                        <!-- item-->

                        <a href="javascript:void(0);" class="dropdown-item notify-item">

                        <i class="fe-lock mr-1"></i>

                        <span>Lock Screen</span>

                        </a>

                        <!-- item-->

                        <a href="{{ url('logout') }}" class="dropdown-item notify-item">

                        <i class="fe-log-out mr-1"></i>

                        <span>Logout</span>

                        </a>

                     </div>

                  </div>

                  <!--p class="text-muted">Admin Head</p-->

                  <ul class="list-inline">

                     <li class="list-inline-item">

                        <a href="{{ url('logout') }}" class="text-custom">

                        <i class="mdi mdi-power"></i>

                        </a>

                     </li>

                  </ul>

               </div>

               <!--- Sidemenu -->

               <div id="sidebar-menu">





                  <ul class="metismenu" id="side-menu">



                     <!--li class="menu-title">Navigation</li-->

                     <li>

                        <a href="{{ url('admin/dashboard') }}">

                        <i class="mdi mdi-view-dashboard"></i>

                        <span> Dashboard </span>

                        </a>

                     </li>

                     <!--<li>-->

                     <!--   <a href="{{ url('admin/customers') }}">-->

                     <!--   <i class="fa fa-users"></i>-->

                     <!--   <span> Users </span>-->

                     <!--   </a>-->

                     <!--</li>-->

                     <li>

                        <a class="property" href="#">

                           <i class="fa fa-cubes"></i>

                        <span> Properties </span>

                        <span class="menu-arrow"></span>

                     </a>

                        <ul class="submenu collapse">

                           <li>

                              <a class="nav-link" href="{{ route('admin.property') }}">

                                 <i class="fa fa-cubes"></i>

                                 <span> Properties list</span></a>

                           </li>

                           <li>

                              <a class="nav-link" href="{{ route('admin.accommodataion') }}">

                                 <i class="fa fa-cubes"></i>

                                 <span> Accommodataion </span></a>

                           </li>

                           <li>

                              <a class="nav-link" href="{{ route('admin.neighbourhoods') }}">

                                 <i class="fa fa-cubes"></i>

                                 <span> Neighbourhoods </span></a>

                           </li>

                           <li>

                              <a class="nav-link" href="{{ route('admin.amenities') }}">

                                 <i class="fa fa-cubes"></i>

                                 <span> Amenities </span></a>

                           </li>

                           <li>

                              <a class="nav-link" href="{{ route('admin.communities') }}">

                                 <i class="fa fa-cubes"></i>

                                 <span> Communities </span></a>

                           </li>

                           <li>

                              <a class="nav-link" href="{{ route('admin.developers') }}">

                                 <i class="fa fa-cubes"></i>

                                 <span> Developers </span></a>

                           </li>

                           <li>

                              <a class="nav-link" href="{{ route('admin.category') }}">

                                 <i class="mdi mdi-view-dashboard"></i>

                                 <span> Category </span></a>

                           </li>

                           <li>

                              <a class="nav-link" href="{{ route('admin.status') }}">

                                 <i class="fa fa-cubes"></i>

                                 <span> Status </span></a>

                           </li>

                           <li>

                                <a class="nav-link" href="{{ route('admin.specification') }}">

                                <i class="fa fa-cubes"></i>

                                <span> Specification </span></a>

                            </li>

                           <!-- <li><a class="nav-link" href="#">Submenu item 5 </a></li>

                           <li><a class="nav-link" href="#">Submenu item 6 </a></li>

                           <li><a class="nav-link" href="#">Submenu item 7 </a></li> -->

                        </ul>

                     </li>

                       <li>

                        <a href="{{ url('admin/agents') }}">

                          <i class="fa fa-users"></i>

                          <span> Agents </span>

                        </a>

                        </li>

                        

                     <li>

                        <a class="property" href="#">

                           <i class="fa fa-cubes"></i>

                        <span> Pages </span>

                        <span class="menu-arrow"></span>

                     </a>



                        <ul class="submenu collapse">

                           <li>

                              <a href="{{ url('admin/about') }}">

                              <i class="fa fa-cubes"></i>

                              <span> About </span>

                              </a>

                           </li>
                           <li>

                              <a href="{{ url('admin/service') }}">

                              <i class="fa fa-cubes"></i>

                              <span> Services </span>

                              </a>

                           </li>

                           <!-- <li><a class="nav-link" href="#">Submenu item 5 </a></li>

                           <li><a class="nav-link" href="#">Submenu item 6 </a></li>

                           <li><a class="nav-link" href="#">Submenu item 7 </a></li> -->

                        </ul>

                     </li>

                     

                     <!--<li>-->

                     <!--   <a href="{{ route('admin.accommodataion') }}">-->

                     <!--   <i class="fa fa-cubes"></i>-->

                     <!--   <span> Accommodataion </span>-->

                     <!--   </a>-->

                     <!--</li>-->

                     <!--<li>-->

                     <!--   <a href="{{ route('admin.neighbourhoods') }}">-->

                     <!--   <i class="fa fa-cubes"></i>-->

                     <!--   <span> Neighbourhoods </span>-->

                     <!--   </a>-->

                     <!--</li>-->

                     <!--<li>-->

                     <!--   <a href="{{ route('admin.amenities') }}">-->

                     <!--   <i class="fa fa-cubes"></i>-->

                     <!--   <span> Amenities </span>-->

                     <!--   </a>-->

                     <!--</li>-->

                     <!--<li>-->

                     <!--   <a href="{{ route('admin.communities') }}">-->

                     <!--   <i class="fa fa-cubes"></i>-->

                     <!--   <span> Communities </span>-->

                     <!--   </a>-->

                     <!--</li>-->

                     <!--<li>-->

                     <!--   <a href="{{ route('admin.specification') }}">-->

                     <!--   <i class="fa fa-cubes"></i>-->

                     <!--   <span> Specification </span>-->

                     <!--   </a>-->

                     <!--</li>-->

                     <!--<li>-->

                     <!--   <a href="{{ route('admin.property') }}">-->

                     <!--   <i class="fa fa-cubes"></i>-->

                     <!--   <span> Properties </span>-->

                     <!--   </a>-->

                     <!--</li>-->

                        

                    

                     <!--li>

                        <a href="{{ route('admin.partners') }}">

                        <i class="fa fa-cubes"></i>

                        <span> Partners </span>

                        </a>

                     </li-->

                        

                     <!--<li>-->

                     <!--   <a href="{{ route('admin.floorplans') }}">-->

                     <!--   <i class="fa fa-cubes"></i>-->

                     <!--   <span> Floorplans </span>-->

                     <!--   </a>-->

                     <!--</li>-->



                     <li>

                        <a href="{{ route('admin.clienttestimonials') }}">

                        <i class="fa fa-cubes"></i>

                        <span> Client Testimonials </span>

                        </a>

                     </li>

<li>
                            <a href="{{ url('admin/pagemetas') }}">
                            <i class="fa fa-cubes"></i>
                            <span> Page Metas </span>
                            </a>
                         </li>

                     <li>

                        <a href="{{ route('admin.news') }}">

                        <i class="fa fa-cubes"></i>

                        <span> News </span>

                        </a>

                     </li>

                     

                     <li>

                        <a href="{{ route('admin.careerslist') }}">

                        <i class="fa fa-cubes"></i>

                        <span> Careers List </span>

                        </a>

                     </li>

                     

                      <li>

                        <a href="{{ route('admin.contactlist') }}">

                        <i class="fa fa-cubes"></i>

                        <span> Contact List </span>

                        </a>

                     </li>

                     <li>

                        <a href="{{ url('admin/video-call-meetings') }}">

                          <i class="fa fa-users"></i>

                          <span>Video call-meetings</span>

                        </a>

                        </li>

                     

                     <li>

                        <a class="nav-link" href="{{ url('admin/user/edit/1') }}">

                            <i class="fa fa-users"></i>

                            <span>  Change Password </span>

                         </a>

                    </li>

                     

                      <!-- <li>

                        <a href="{{ url('admin/about/edit/1') }}">

                        <i class="fa fa-cubes"></i>

                        <span> About </span>

                        </a>

                     </li> -->

                     <!--<li>-->

                     <!--   <a href="{{ route('admin.developers') }}">-->

                     <!--   <i class="fa fa-cubes"></i>-->

                     <!--   <span> Developer </span>-->

                     <!--   </a>-->

                     <!--</li>-->

                     

                     <li>

                        <a href="{{ url('admin/generalSetting') }}">

                        <i class="fa fa-cogs"></i>

                        <span> Settings </span>

                        </a>

                     </li>

                     <!--<li>-->

                     <!--   <a href="{{ url('admin/category') }}">-->

                     <!--   <i class="mdi mdi-view-dashboard"></i>-->

                     <!--   <span> Category </span>-->

                     <!--   </a>-->

                     <!--</li>-->

                     <li>

                        <a href="{{ route('admin.sliders') }}">

                        <i class="fa fa-cubes"></i>

                        <span> Banners </span>

                        </a>

                     </li>

                     <!--<li>-->

                     <!--   <a href="{{ route('admin.status') }}">-->

                     <!--   <i class="fa fa-cubes"></i>-->

                     <!--   <span> Status </span>-->

                     <!--   </a>-->

                     <!--</li>-->

                     <!--li>

                        <a href="javascript: void(0);">

                          <i class="fab fa-product-hunt"></i>

                          <span> Sales </span>

                          <span class="menu-arrow"></span>

                        </a>

                        </li-->

                  </ul>

               </div>

               <!-- End Sidebar -->

               <div class="clearfix"></div>

            </div>

            <!-- Sidebar -left -->

         </div>

         <!-- Left Sidebar End -->

         <!-- ============================================================== -->

         <!-- Start Page Content here -->

         <!-- ============================================================== -->

         <div class="content-page">

            <div class="content">

              <div class="row"> 

               <div class="col-12"> 

               @if( session('success'))



               <div class="alert alert-success alert-dismissible">

                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                 <strong>Success!</strong> {{ session('success') }}

               </div>

               <!-- <div class="alert alert-success pt10 pb10 mt10 mb10">

                  {{ session('success') }}

               </div> -->

               @endif

               @if( session('error'))

               <div class="alert alert-danger mt10 mb10  pt10 pb10">

                  {{ session('error') }}

               </div>

               @endif

               <!--Begin::Content-->

               @yield('content')

               <!--End::Content-->

            </div>

            </div>

            </div>

            <!-- content -->

            <!-- Footer Start -->

            <footer class="footer">

               <div class="container-fluid">

                  <div class="row">

                     <div class="col-md-6"></div>

                     <div class="col-md-6">

                        <div class="text-md-right footer-links d-none d-sm-block">

                        </div>

                     </div>

                  </div>

               </div>

            </footer>

            <!-- end Footer -->

         </div>

         <!-- ============================================================== -->

         <!-- End Page content -->

         <!-- ============================================================== -->

      </div>

      <!-- END wrapper -->


      <script src="{{ asset('backend/assets/js/firebase.js') }}" ></script>

      <script type="text/javascript" crossorigin="anonymous">

         var ajaxurl = "{{ url('/') }}" 

      </script> 

      <script src="{{ asset('backend/assets/js/jquery-ui.js') }}" ></script>

      <script src="{{ asset('backend/js/toastr.min.js') }}" ></script>

      <script type="text/javascript" src="{{ asset('backend/js/jquery-ui.min.js')}}" ></script>   

      <script type="text/javascript" src="{{ asset('backend/js/bootstrap-datepicker.min.js')}}" ></script>   

      <script type="text/javascript" crossorigin="anonymous">      

         var $j = jQuery.noConflict();

           $j("#datepicker1").datepicker({

             format: "yyyy-mm-dd"

           }); 

           $j("#datepicker2").datepicker({

             format: "yyyy-mm-dd"

           });

           $j('.datepicker').datepicker({

               format: "yyyy-mm-dd"

           });

      </script>   

      <!-- Vendor js -->

      <script src="{{ asset('backend/assets/js/vendor.min.js') }}" ></script>

      <!-- knob plugin -->

      <script src="{{ asset('backend/assets/libs/jquery-knob/jquery.knob.min.js') }}" ></script>

      <!--Morris Chart-->

      <script src="{{ asset('backend/assets/libs/raphael/raphael.min.js') }}" ></script>

      <!-- Dashboard init js-->

      <!-- Plugins js-->

      <script src="{{ asset('backend/assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}" ></script>

      <!-- Init js-->

      <script src="{{ asset('backend/assets/js/pages/form-wizard.init.js') }}" ></script>

      <!-- App js -->

      <script src="{{ asset('backend/assets/js/app.min.js') }}" ></script>

      <script src="{{ asset('backend/js/select2.min.js') }}" ></script>

      <!-- third party js -->

      <script src="{{ asset('backend/assets/libs/datatables/jquery.dataTables.min.js') }}" ></script>

      <script src="{{ asset('backend/assets/libs/datatables/dataTables.bootstrap4.js') }}" ></script>

      <script src="{{ asset('backend/assets/libs/datatables/dataTables.responsive.min.js') }}" ></script>

      <script src="{{ asset('backend/assets/libs/datatables/responsive.bootstrap4.min.js') }}" ></script>

      <script src="{{ asset('backend/assets/libs/datatables/dataTables.buttons.min.js') }}" ></script>

      <script src="{{ asset('backend/assets/libs/datatables/buttons.bootstrap4.min.js') }}" ></script>

      <script src="{{ asset('backend/assets/libs/datatables/buttons.html5.min.js') }}" ></script>

      <script src="{{ asset('backend/assets/libs/datatables/buttons.flash.min.js') }}" ></script>

      <script src="{{ asset('backend/assets/libs/datatables/buttons.print.min.js') }}" ></script>

      <script src="{{ asset('backend/assets/libs/datatables/dataTables.keyTable.min.js') }}" ></script>

      <script src="{{ asset('backend/assets/libs/datatables/dataTables.select.min.js') }}" ></script>

      <script src="{{ asset('backend/assets/libs/pdfmake/pdfmake.min.js') }}" ></script>

      <script src="{{ asset('backend/assets/libs/pdfmake/vfs_fonts.js') }}" ></script>

      <script src="{{ asset('backend/assets/libs/pdfmake/vfs_fonts.js') }}" ></script>

      <!-- third party js ends -->

      <!-- Datatables init -->

      <script src="{{ asset('backend/assets/js/pages/datatables.init.js') }}" ></script>

      <script type="text/javascript" src="{{ asset('backend/js/dropzone.js') }}" ></script>

      <script type="text/javascript" crossorigin="anonymous">Dropzone.autoDiscover = false;</script>

      <script type="text/javascript" src="{{ asset('backend/js/dropify.min.js') }}" ></script>

      <script src="{{asset('vendor/jquery-validation/dist/jquery.validate.js')}}" ></script>

      <script type="text/javascript" src="{{ asset('backend/js/admin.js')}}" ></script> 

      <script>

         $(document).ready(function() {

         if (window.File && window.FileList && window.FileReader) {

            $("#galleryimage").on("change", function(e) {

               var files = e.target.files,

               filesLength = files.length;

               for (var i = 0; i < filesLength; i++) {

               var f = files[i]

               var fileReader = new FileReader();

               fileReader.onload = (function(e) {

                  var file = e.target;

                  $("<span class=\"pip\">" +

                     "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +

                     "<br/><span class=\"remove\">Remove image</span>" +

                     "</span>").insertAfter("#galleryimage");

                  $(".remove").click(function(){

                     $(this).parent(".pip").remove();

                  });

                  

                   $(".removee").click(function(){

                     $(this).parent(".pipp").remove();

                  });

                  

                  // Old code here

                  /*$("<img></img>", {

                     class: "imageThumb",

                     src: e.target.result,

                     title: file.name + " | Click to remove"

                  }).insertAfter("#files").click(function(){$(this).remove();});*/

                  

               });

               fileReader.readAsDataURL(f);

               }

            });

         } else {

            alert("Your browser doesn't support to File API")

         }

         });

      </script>

   </body>

</html>