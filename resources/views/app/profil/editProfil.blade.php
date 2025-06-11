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
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="c-shop-form-1" action="{{ route('editProfil') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- BEGIN: ADDRESS FORM -->

                    <div class="">
                        <div class="form-group">
                            <label>Foto Profil</label><br>
                            {{-- <img id="preview" src="#" alt="Preview Gambar"
                                style="max-width: 200px; display: none;"> --}}
                            <img src="{{ asset('storage/customer/' . $data->gambar) }}" alt="no" width="120"
                                height="120" style="border-radius: 50%;" id="preview">
                            <br><br>
                            <input type="file" name="gambar" accept="image/*" onchange="lihatGambar(event)">


                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <label class="control-label">Username</label>
                                <input type="text" class="form-control c-square c-theme" placeholder="" id="username"
                                    name="username" value="{{ Auth::user()->username }}" readonly>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {{-- <div class="row"> --}}
                                {{-- <div class="form-group col-md-6"> --}}
                                <label class="control-label">Nama Lengkap</label>
                                <input type="text" class="form-control c-square c-theme" placeholder="" id="namaLengkap"
                                    name="namaLengkap" value="{{ $data->namaLengkap ?? '' }}">
                                {{-- </div> --}}
                                {{-- <div class="col-md-6">
                                        <label class="control-label">Last Name</label>
                                        <input type="text" class="form-control c-square c-theme" placeholder="Last Name">
                                    </div> --}}
                                {{-- </div> --}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="control-label">Email</label>
                                <input type="email" class="form-control c-square c-theme" placeholder="" id="email"
                                    name="email" value="{{ Auth::user()->email }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="control-label">Nomor Telepon</label>
                                <input type="text" class="form-control c-square c-theme" placeholder="" id="noHp"
                                    name="noHp" value="{{ $data->noHp ?? '' }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="control-label">Tanggal Lahir</label>
                                <input type="date" class="form-control c-square c-theme" placeholder="" id="tanggalLahir"
                                    name="tanggalLahir" value="{{ $data->tanggalLahir ?? 'tanggal lahir' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Jenis Kelamin</label><br>

                                <label class="" id="">
                                    <input type="radio" name="jkel" id="jkel" value="lakilaki"
                                        {{ old('jkel', $data->jkel ?? '') == 'lakilaki' ? 'checked' : '' }}> Laki-laki
                                </label> <br>
                                <label style="">
                                    <input type="radio" name="jkel" id="jkel" value="perempuan"
                                        {{ old('jkel' ?? 'jkel', $data->jkel ?? '') == 'perempuan' ? 'checked' : '' }}>
                                    Perempuan
                                </label>

                            </div>
                        </div>

                        {{-- <div class="row">
                            <div class="form-group col-md-12">
                                <label class="control-label">Kecamatan</label>
                                <select class="form-control c-square c-theme">
                                    <option value="1">Malaysia</option>
                                    <option value="2">Singapore</option>
                                    <option value="3">Indonesia</option>
                                    <option value="4">Thailand</option>
                                    <option value="5">China</option>
                                </select>
                            </div>
                        </div> --}}

                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="control-label">Alamat</label>
                                <textarea id="alamat" name="alamat" rows="4" cols="105"
                                    placeholder="SIlahkan isi alamat lengkap seperti kabupaten, provinsi, kota , dll"> {{ old('alamat', $data->alamat ?? '') }}

                                </textarea>
                            </div>
                        </div>



                        {{-- <div class="row">
                            <div class="form-group col-md-12">
                                <label class="control-label">Change Password</label>
                                <input type="password" class="form-control c-square c-theme" placeholder="Password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="control-label">Repeat Password</label>
                                <input type="password" class="form-control c-square c-theme" placeholder="Password">
                                <p class="help-block">Hint: The password should be at least six characters long. <br />
                                    To make it stronger, use upper and lower case letters, numbers, and symbols like ! " ? $
                                    % ^ & ).</p>
                            </div>
                        </div> --}}
                        <!-- END: PASSWORD -->
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
    function lihatGambar(event) {
        const input = event.target;
        const preview = document.getElementById('preview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
