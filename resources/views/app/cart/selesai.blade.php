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
                    <h3 class="c-font-uppercase c-font-sbold">Pesanan Selesai</h3>
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
                            <a href="javascript:;" class="c-toggler">Pesanan saya<span class="c-arrow"></span></a>
                            <ul class="c-dropdown-menu">
                                <li class="c-active">
                                    <a href="/cart">Keranjang</a>
                                </li>
                                {{-- <li class="">
                                    <a href="/riwayatPesanan">Riwayat pesanan</a>
                                </li> --}}
                                <li class="">
                                    <a href="/pesanan/belumbayar">Belum bayar</a>
                                </li>
                                <li class="">
                                    <a href="/pesanan/proses">Sedang di proses</a>
                                </li>
                                <li class="">
                                    <a href="/pesanan/selesai">Selesai</a>
                                </li>
                                <li class="">
                                    <a href="/pesanan/dibatalkan">Di batalkan</a>
                                </li>
                            </ul>
                        </li>
                    </ul><!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
                </div>
                <div class="c-layout-sidebar-content ">
                    <!-- BEGIN: PAGE CONTENT -->
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-ORDER-HISTORY-2 -->
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">Pesanan Selesai</h3>
                    </div>
                    <div class="row c-margin-b-40 c-order-history-2">
                        <div class="row c-cart-table-title">
                            <div class="col-md-2 c-cart-image">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Image</h3>
                            </div>
                            <div class="col-md-1 c-cart-ref">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Product</h3>
                            </div>
                            <div class="col-md-2 c-cart-desc">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2 ">Qty</h3>
                            </div>
                            <div class="col-md-2 c-cart-price">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Price</h3>
                            </div>
                            <div class="col-md-3 c-cart-total">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Payment Method</h3>
                            </div>
                            <div class="col-md-2 c-cart-qty">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Date</h3>
                            </div>
                        </div>
                        <!-- BEGIN: ORDER HISTORY ITEM ROW -->
                        <div class="row c-cart-table-row">
                            <h2
                                class="c-font-uppercase c-font-bold c-theme-bg c-font-white c-cart-item-title c-cart-item-first">
                                Item 1</h2>
                            <div class="col-md-2 col-sm-3 col-xs-5 c-cart-image">
                                <img src="../../assets/base/img/content/shop3/20.jpg" />
                            </div>
                            <div class="col-md-1 col-sm-3 col-xs-6 c-cart-ref">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Order</p>
                                <p>#1103</p>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 c-cart-desc">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Description</p>
                                <p><a href="shop-product-details-2.html"
                                        class="c-font-bold c-theme-link c-font-dark">Camera</a>
                                </p>
                            </div>
                            <div class="clearfix col-md-2 col-sm-3 col-xs-6 c-cart-price">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Price</p>
                                <p class="c-cart-price c-font-bold">$147.00</p>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 c-cart-total">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Payment Method</p>
                                <p class="c-cart-price c-font-bold">Credit Cart (MasterCard)</p>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-6 c-cart-qty">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Date</p>
                                <p>2 Sep 2015</p>
                            </div>
                        </div>
                        <!-- END: ORDER HISTORY ITEM ROW -->
                        <!-- BEGIN: ORDER HISTORY ITEM ROW -->
                        <div class="row c-cart-table-row">
                            <h2 class="c-font-uppercase c-font-bold c-theme-bg c-font-white c-cart-item-title">Item 2</h2>
                            <div class="col-md-2 col-sm-3 col-xs-5 c-cart-image">
                                <img src="../../assets/base/img/content/shop3/10.jpg" />
                            </div>
                            <div class="col-md-1 col-sm-3 col-xs-6 c-cart-ref">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Order</p>
                                <p>#1106</p>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 c-cart-desc">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Description</p>
                                <p><a href="shop-product-details-2.html" class="c-font-bold c-theme-link c-font-dark">Winter
                                        Hood</a></p>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-6 c-cart-price">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Price</p>
                                <p class="c-cart-price c-font-bold">$99.00</p>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 c-cart-total">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Payment Method</p>
                                <p class="c-cart-price c-font-bold">PayPal</p>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-6 c-cart-qty">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Date</p>
                                <p>5 Sep 2015</p>
                            </div>
                        </div>
                        <!-- END: ORDER HISTORY ITEM ROW -->
                        <!-- BEGIN: ORDER HISTORY ITEM ROW -->
                        <div class="row c-cart-table-row">
                            <h2
                                class="c-font-uppercase c-font-bold c-theme-bg c-font-white c-cart-item-title c-cart-item-first">
                                Item 3</h2>
                            <div class="col-md-2 col-sm-3 col-xs-5 c-cart-image">
                                <img src="../../assets/base/img/content/shop3/22.jpg" />
                            </div>
                            <div class="col-md-1 col-sm-3 col-xs-6 c-cart-ref">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Order</p>
                                <p>#1107</p>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 c-cart-desc">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Description</p>
                                <p><a href="shop-product-details-2.html"
                                        class="c-font-bold c-theme-link c-font-dark">Winter
                                        Coat</a></p>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-6 c-cart-price">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Price</p>
                                <p class="c-cart-price c-font-bold">$82.00</p>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 c-cart-total">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Payment Method</p>
                                <p class="c-cart-price c-font-bold">Credit Cart (MasterCard)</p>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-6 c-cart-qty">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Date</p>
                                <p>7 Sep 2015</p>
                            </div>
                        </div>
                        <!-- END: ORDER HISTORY ITEM ROW -->
                        <!-- BEGIN: ORDER HISTORY ITEM ROW -->
                        <div class="row c-cart-table-row">
                            <h2
                                class="c-font-uppercase c-font-bold c-theme-bg c-font-white c-cart-item-title c-cart-item-first">
                                Item 4</h2>
                            <div class="col-md-2 col-sm-3 col-xs-5 c-cart-image">
                                <img src="../../assets/base/img/content/shop3/21.jpg" />
                            </div>
                            <div class="col-md-1 col-sm-3 col-xs-6 c-cart-ref">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Order</p>
                                <p>#1123</p>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 c-cart-desc">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Description</p>
                                <p><a href="shop-product-details-2.html"
                                        class="c-font-bold c-theme-link c-font-dark">Cotton
                                        Top</a></p>
                            </div>
                            <div class="clearfix col-md-2 col-sm-3 col-xs-6 c-cart-price">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Price</p>
                                <p class="c-cart-price c-font-bold">$54.00</p>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 c-cart-total">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Payment Method</p>
                                <p class="c-cart-price c-font-bold">PayPal</p>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-6 c-cart-qty">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Date</p>
                                <p>8 Sep 2015</p>
                            </div>
                        </div>
                        <!-- END: ORDER HISTORY ITEM ROW -->
                        <!-- BEGIN: ORDER HISTORY ITEM ROW -->
                        <div class="row c-cart-table-row">
                            <h2
                                class="c-font-uppercase c-font-bold c-theme-bg c-font-white c-cart-item-title c-cart-item-first">
                                Item 5</h2>
                            <div class="col-md-2 col-sm-3 col-xs-5 c-cart-image">
                                <img src="../../assets/base/img/content/shop3/23.jpg" />
                            </div>
                            <div class="col-md-1 col-sm-3 col-xs-6 c-cart-ref">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Order</p>
                                <p>#1136</p>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 c-cart-desc">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Description</p>
                                <p><a href="shop-product-details-2.html"
                                        class="c-font-bold c-theme-link c-font-dark">Winter
                                        Jacket</a></p>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-6 c-cart-price">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Price</p>
                                <p class="c-cart-price c-font-bold">$135.00</p>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 c-cart-total">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Payment Method</p>
                                <p class="c-cart-price c-font-bold">Credit Cart (Visa)</p>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-6 c-cart-qty">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Date</p>
                                <p>10 Sep 2015</p>
                            </div>
                        </div>
                        <!-- END: ORDER HISTORY ITEM ROW -->

                    </div>

                    <!-- END: CONTENT/SHOPS/SHOP-ORDER-HISTORY-2 -->
                    <!-- END: PAGE CONTENT -->
                </div>
            </div>
        </div><!-- END: CONTENT/SHOPS/SHOP-CART-1 -->




        <!-- END: PAGE CONTENT -->
    </div>
@endsection
