@extends('app._layouts.index')

@section('content')
    {{-- <div class="c-layout-page">
        <h2>Keranjang Belanja</h2>
        @foreach ($carts as $item)
            <div>
                <p>{{ $item->produk->namaProduk }} - {{ $item->jumlah }} pcs - Rp {{ $item->produk->harga }}</p>
                <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </div>
        @endforeach
    </div> --}}

    <div class="c-layout-page">
        <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
        <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
            <div class="container">
                <div class="c-page-title c-pull-left">
                    <h3 class="c-font-uppercase c-font-sbold">Riwayat Pesanan</h3>
                    <h4 class="">Page Sub Title Goes Here</h4>
                </div>
                <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                    <li><a href="shop-cart.html">Shopping Cart</a></li>
                    <li>/</li>
                    <li class="c-state_active">Inimo Printing</li>

                </ul>
            </div>
        </div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
        <!-- BEGIN: PAGE CONTENT -->
        <!-- BEGIN: CONTENT/SHOPS/SHOP-CART-1 -->
        <div class="c-content-box c-size-lg">
            <div class="container ">
                <div class="c-layout-sidebar-menu c-theme ">
                    <!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
                    <div class="c-sidebar-menu-toggler">
                        <h3 class="c-title c-font-uppercase c-font-bold">My Profile</h3>
                        <a href="javascript:;" class="c-content-toggler" data-toggle="collapse"
                            data-target="#sidebar-menu-1">
                            <span class="c-line"></span> <span class="c-line"></span> <span class="c-line"></span>
                        </a>
                    </div>

                    <ul class="c-sidebar-menu collapse " id="sidebar-menu-1">
                        <li class="c-dropdown c-open">
                            <a href="javascript:;" class="c-toggler">Belum Bayar<span class="c-arrow"></span></a>
                            <ul class="c-dropdown-menu">
                                {{-- <li class="c-active">
                                    <a href="shop-customer-dashboard.html">Keranjang</a>
                                </li> --}}
                                <li class="c-active">
                                    <a href="{{ '/indexpesanan' }}">Riwayat pesanan</a>
                                </li>
                                <li class="">
                                    <a href="{{ '/pesanan/belumbayar' }}l">Belum bayar</a>
                                </li>
                                <li class="">
                                    <a href="shop-product-wishlist.html">Sedang di proses</a>
                                </li>
                                <li class="">
                                    <a href="shop-product-wishlist.html">Selesai</a>
                                </li>
                                <li class="">
                                    <a href="shop-product-wishlist.html">Di batalkan</a>
                                </li>
                            </ul>
                        </li>
                    </ul><!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
                </div>
                <div class="c-layout-sidebar-content ">
                    <!-- BEGIN: PAGE CONTENT -->
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-ORDER-HISTORY -->
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">Order History</h3>
                        <div class="c-line-left"></div>
                    </div>
                    <div class="row c-margin-b-40">
                        <div class="c-content-product-2 c-bg-white">
                            <div class="col-md-4">
                                <div class="c-content-overlay">
                                    <div class="c-bg-img-center c-overlay-object" data-height="height"
                                        style="height: 230px; background-image: url(../../assets/base/img/content/shop3/20.jpg);">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="c-info-list">
                                    <h3 class="c-title c-font-bold c-font-22 c-font-dark">
                                        <p class="c-font-14 c-font-thin">Order #: 1107</p>
                                        <a class="c-theme-link" href="shop-product-details-2.html">Winter Coat</a>
                                    </h3>
                                    <p class="c-order-date c-font-14 c-font-thin c-theme-font">21 August 2015</p>
                                    <p class="c-desc c-font-16 c-font-thin">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem
                                        ipsum dolor sit amet.</p>
                                    <p class="c-price c-font-26 c-font-thin">$548</p>
                                    <p class="c-payment-type c-font-14 c-font-bold">via Credit Card (Visa)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- END: CONTENT/SHOPS/SHOP-CART-1 -->




            <!-- END: PAGE CONTENT -->
        </div>
    @endsection
