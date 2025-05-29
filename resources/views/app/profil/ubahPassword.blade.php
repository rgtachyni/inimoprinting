@extends('app._layouts.index')

@section('content')
    <div class="c-layout-page">
        <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
        <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
            <div class="container">
                <div class="c-page-title c-pull-left">
                    <h3 class="c-font-uppercase c-font-sbold">Customer Edit Profile</h3>
                    <h4 class="">Page Sub Title Goes Here</h4>
                </div>
                <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                    <li class="c-state_active">Inimo Printing</li>

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
                            <li class="">
                                <a href="{{ route('ShowubahPassword') }}">Ubah Password</a>
                            </li>
                            {{-- <li class="">
				<a href="shop-order-history.html">Order History</a>
			</li> --}}
                            {{-- <li class="">
				<a href="shop-customer-addresses.html">My Addresses</a>
			</li>
			<li class="">
				<a href="shop-product-wishlist.html">My Wishlist</a>
			</li> --}}
                        </ul>
                    </li>
                </ul><!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
            </div>
            <div class="c-layout-sidebar-content ">
                <!-- BEGIN: PAGE CONTENT -->
                <div class="c-content-title-1">
                    <h3 class="c-font-uppercase c-font-bold">Edit Profile</h3>
                    <div class="c-line-left"></div>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="c-shop-form-1" action="{{ route('ubahPassword') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="control-label">Password lama</label>
                            <input type="password" class="form-control c-square c-theme" placeholder="" id="passwordLama"
                                name="passwordLama">
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Password baru</label>
                            <input type="password" class="form-control c-square c-theme" placeholder="" id="passwordBaru"
                                name="passwordBaru">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="control-label">Ulangi Password</label>
                            <input type="password" class="form-control c-square c-theme" placeholder=""
                                id="passwordBaru_confirmation" name="passwordBaru_confirmation">
                            {{-- <i class="fa fa-eye" onclick="togglePassword('password')"></i> --}}
                            <p class="help-block">Hint: The password should be at least six characters long. <br />
                                To make it stronger, use upper and lower case letters, numbers, and symbols like ! " ? $
                                % ^ & ).</p>
                        </div>
                    </div>

                    <div class="row c-margin-t-30">
                        <div class="form-group col-md-12" role="group">
                            <button type="submit"
                                class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Submit</button>
                            <button type="submit"
                                class="btn btn-lg btn-default c-btn-square c-btn-uppercase c-btn-bold">Cancel</button>
                        </div>
                    </div>
            </div>
            <!-- END: ADDRESS FORM -->
            </form> <!-- END: PAGE CONTENT -->
        </div>
    </div>
    </div>
@endsection
<script>
    function togglePassword(id) {
        const input = document.getElementById(id);
        if (input.type === "password") {
            input.type = "text";
        } else {
            input.type = "password";
        }
    }
</script>
