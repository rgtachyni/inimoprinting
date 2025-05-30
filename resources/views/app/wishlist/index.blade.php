@extends('app._layouts.index')

@section('content')
    <div class="c-layout-page">


        <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
        <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
            <div class="container">
                <div class="c-page-title c-pull-left">
                    <h3 class="c-font-uppercase c-font-sbold">Wishlist</h3>
                    <h4 class="">Page Sub Title Goes Here</h4>
                </div>
                <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                    <li><a href="shop-product-wishlist.html">Wish List</a></li>
                    <li>/</li>
                    <li class="c-state_active">Jango Components</li>

                </ul>
            </div>
        </div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
        <div class="container">

            <div class="c-layout-sidebar-content ">
                <!-- BEGIN: PAGE CONTENT -->
                <div class="c-content-title-1">
                    <h3 class="c-font-uppercase c-font-bold">My Wishlist</h3>
                    <div class="c-line-left"></div>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('warning'))
                    <div class="alert alert-warning">
                        {{ session('warning') }}
                    </div>
                @endif
                <div class="c-shop-wishlist-1">
                    <div class="c-border-bottom hidden-sm hidden-xs">
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">Gambar</h3>
                            </div>
                            <div class="col-md-3">
                                <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">Nama Produk</h3>
                            </div>

                            <div class="col-md-3">
                                <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">Harga</h3>
                            </div>
                            {{-- <div class="col-md-3">
                                    <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">Aksi</h3>
                                </div> --}}

                        </div>
                    </div>
                    <!-- BEGIN: PRODUCT ITEM ROW -->
                    @foreach ($data as $datas)
                        <div class="c-border-bottom c-row-item gap-5">

                            <div class="row">
                                <div class="col-md-3 col-sm-12">
                                    <div class="c-content-overlay">
                                        {{-- <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="{{ route('detailProduk', ['id' => $datas->id]) }}"
                                                    class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div> --}}
                                        <div class="c-bg-img-top-center c-overlay-object" data-height="height">
                                            <img width="50%" class="img-responsive"
                                                src="{{ asset('storage/produk/' . $datas->produk->gambar) }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <ul class="c-list list-unstyled">
                                        <li class="c-margin-b-25"><a href="shop-product-details-2.html"
                                                class="c-font-bold c-font-22 c-theme-link">{{ $datas->produk->namaProduk }}</a>
                                        </li>
                                        <li class="c-margin-b-10">Color: Blue</li>
                                        <li>Size: S</li>

                                    </ul>
                                </div>

                                <div class="col-md-2 col-sm-2">
                                    <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Unit Price</p>
                                    <p class="c-font-sbold c-font-uppercase c-font-18">Rp. {{ $datas->produk->harga }}</p>
                                </div>
                                <div class="col-md-2 col-sm-2">

                                    <div class="flex justify-center gap-5 ">
                                        <ul class="c-list list-unstyled">


                                            <li class="c-margin-b-10">
                                                <form action="{{ route('wishlist.cart', $datas->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit"
                                                        class="btn btn-sm btn-default c-btn-square c-btn-uppercase c-btn-bold ">AddCart
                                                    </button>
                                                </form>
                                            </li>
                                            <li>
                                                <form action="{{ route('wishlist.delete', $datas->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-default c-btn-square c-btn-uppercase c-btn-bold ">
                                                        Remove</button>
                                                </form>
                                            </li>

                                        </ul>


                                    </div>

                                </div>
                            </div>

                        </div>
                    @endforeach
                    <!-- END: PRODUCT ITEM ROW -->
                    <!-- BEGIN: PRODUCT ITEM ROW -->

                    <!-- END: PRODUCT ITEM ROW -->
                </div> <!-- END: PAGE CONTENT -->
            </div>
        </div>
    </div>
@endsection
