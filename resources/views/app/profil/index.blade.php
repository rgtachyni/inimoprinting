 @extends('app._layouts.index')

 @section('content')
     <div class="c-layout-page">
         <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
         <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
             <div class="container">
                 <div class="c-page-title c-pull-left">
                     <h3 class="c-font-uppercase c-font-sbold">Customer Dashboard</h3>
                     <h4 class="">Page Sub Title Goes Here</h4>
                 </div>
                 <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                     <li><a href="shop-customer-dashboard.html">Customer Dashboard</a></li>
                     <li>/</li>
                     <li class="c-state_active">Jango Components</li>

                 </ul>
             </div>
         </div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
         <div class="container">
             <div class="c-layout-sidebar-menu c-theme ">
                 <!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
                 <div class="c-sidebar-menu-toggler">
                     <h3 class="c-title c-font-uppercase c-font-bold">My Profile</h3>
                     <a href="javascript:;" class="c-content-toggler" data-toggle="collapse" data-target="#sidebar-menu-1">
                         <span class="c-line"></span> <span class="c-line"></span> <span class="c-line"></span>
                     </a>
                 </div>

                 <ul class="c-sidebar-menu collapse " id="sidebar-menu-1">
                     <li class="c-dropdown c-open">
                         <a href="javascript:;" class="c-toggler">My Profile<span class="c-arrow"></span></a>
                         <ul class="c-dropdown-menu">
                             <li class="c-active">
                                 <a href="{{ route('profil') }}">My Dashbord</a>
                             </li>
                             {{-- <li class="">
                                 <a href="{{ route('Showeditprofil') }}">Edit Profile</a>
                             </li> --}}
                             <li class="">
                                 <a href="{{ route('Showeditprofil') }}">Ubah Password</a>
                             </li>

                         </ul>
                     </li>
                 </ul><!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
             </div>
             <div class="c-layout-sidebar-content ">
                 <!-- BEGIN: PAGE CONTENT -->
                 <!-- BEGIN: CONTENT/SHOPS/SHOP-CUSTOMER-DASHBOARD-1 -->
                 <div class="c-content-title-1">
                     <h3 class="c-font-uppercase c-font-bold">My Dashboard</h3>
                     <div class="c-line-left"></div>
                     {{-- <p class="">
                         Hello <a href="#" class="c-theme-link">Drake Hiro</a> (not <a href="#"
                             class="c-theme-link">Drake Hiro</a>? <a href="#" class="c-theme-link">Sign out</a>).
                         <br />
                     </p> --}}
                 </div>
                 <div class="row">
                     <div class="col-md-6 col-sm-6 col-xs-12 c-margin-b-20">
                         <h3 class="c-font-uppercase c-font-bold">Hi {{ Auth::user()->name }} </h3>
                         <ul class="list-unstyled">
                             <li>{{ $data->namaLengkap }}</li>
                             <li>{{ $data->jkel }}</li>
                             <li>{{ $data->tanggalLahir }}</li>
                             <li>{{ $data->provinsi }}, {{ $data->kabupaten }}</li>
                             <li>{{ $data->alamat }}</li>
                             <li>Phone: {{ $data->noHp }}</li>
                             <li>Email: <a href="mailto:jango@themehats.com"
                                     class="c-theme-link">{{ Auth::user()->email }}</a>
                             </li>
                         </ul>
                         <div class="row c-margin-t-30">
                             <div class="form-group col-md-12" role="group">
                                 <a href="{{ route('Showeditprofil') }}"
                                     class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Edit
                                     Profil</a>
                             </div>
                         </div>
                     </div>
                 </div><!-- END: CONTENT/SHOPS/SHOP-CUSTOMER-DASHBOARD-1 -->
                 <!-- END: PAGE CONTENT -->
             </div>
         </div>
     </div>
 @endsection
