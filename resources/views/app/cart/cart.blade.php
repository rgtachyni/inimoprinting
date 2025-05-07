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
                    <h3 class="c-font-uppercase c-font-sbold">Cart</h3>
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
                                {{-- <li class="c-active">
                                    <a href="shop-customer-dashboard.html">Keranjang</a>
                                </li> --}}
                                <li class="c-active">
                                    <a href="{{'/pesanan'}}">Riwayat pesanan</a>
                                </li>
                                <li class="">
                                    <a href="{{'/pesanan/belumbayar'}}">Belum bayar</a>
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
                <div class="c-shop-cart-page-1 c-layout-sidebar-content ">
                    <div class="row c-cart-table-title  ">
                        <div class="col-md-2 c-cart-image">
                            <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Image</h3>
                        </div>
                        <div class="col-md-4 c-cart-desc">
                            <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Description</h3>
                        </div>

                        <div class="col-md-1 c-cart-qty">
                            <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Qty</h3>
                        </div>
                        <div class="col-md-2 c-cart-price">
                            <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Unit Price</h3>
                        </div>
                        <div class="col-md-1 c-cart-total">
                            <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Total</h3>
                        </div>
                        <div class="col-md-1 c-cart-remove"></div>
                    </div>
                    <!-- BEGIN: SHOPPING CART ITEM ROW -->
                    <div class="row c-cart-table-row">
                        @foreach ($carts as $item)
                            <h2
                                class="c-font-uppercase c-font-bold c-theme-bg c-font-white c-cart-item-title c-cart-item-first">
                                Item 1</h2>
                            <div class="col-md-2 col-sm-3 col-xs-5 c-cart-image">
                                <img src="{{ asset('public/uploads/produk/' . $item->produk->gambar) }}" />
                            </div>
                            <div class="col-md-4 col-sm-9 col-xs-7 c-cart-desc">
                                <h3><a href="shop-product-details-2.html"
                                        class="c-font-bold c-theme-link c-font-22 c-font-dark">{{ $item->produk->namaProduk }}</a>
                                </h3>
                                <p>Color: Blue</p>
                                <p>Size: S</p>
                            </div>

                            <div class="col-md-1 col-sm-3 col-xs-6 c-cart-qty">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">QTY</p>
                                <div class="c-input-group c-spinner">
                                    <input type="text" class="form-control c-item-{{ $item->id }}"
                                        value="{{ $item->jumlah }}" oninput="updateTotal(this)">
                                    <div class="c-input-group-btn-vertical">
                                        <button class="btn btn-default" type="button"
                                            data_input="c-item-{{ $item->id }}" data-maximum="10"
                                            value="{{ $item->jumlah }}"><i class="fa fa-caret-up"></i></button>
                                        <button class="btn btn-default" type="button"
                                            data_input="c-item-{{ $item->id }}" oninput="updateTotal(this)"><i
                                                class="fa fa-caret-down" value="{{ $item->jumlah }}"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-6 c-cart-price">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Unit Price</p>
                                <p class="c-cart-price c-font-bold"id="price-{{ $item->harga }}">Rp.
                                    {{ $item->produk->harga }}</p>
                            </div>
                            <div class="col-md-1 col-sm-3 col-xs-6 c-cart-total">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">
                                </p>
                                <p class="c-cart-price c-font-bold" id="totalHarga-{{ $item->id }}">Rp.
                                    {{ $item->jumlah * $item->produk->harga }}</p>
                            </div>
                            <div class="col-md-1 col-sm-12 c-cart-remove">
                                <a href="#" class="c-theme-link c-cart-remove-desktop">×</a>
                                <a href="#"
                                    class="c-cart-remove-mobile btn c-btn c-btn-md c-btn-square c-btn-red c-btn-border-1x c-font-uppercase">Remove
                                    item from Cart</a>
                            </div>
                        @endforeach
                    </div>

                    <div class="row">
                        <div class="c-cart-subtotal-row">
                            <div class="col-md-2 col-md-offset-9 col-sm-4 col-xs-4 c-cart-subtotal-border">
                                <h3 class="c-font-uppercase c-font-bold c-right c-font-16 c-font-grey-2">Grand Total</h3>
                            </div>
                            <div class="col-md-1 col-sm-4 col-xs-4 c-cart-subtotal-border">
                                <h3 class="c-font-bold c-font-16">Rp. {{ $grandTotal }}</h3>
                            </div>
                        </div>
                    </div>
                    <!-- END: SUBTOTAL ITEM ROW -->
                    <form action="{{ route('prosescheckout') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id">
                        <input type="hidden" name="amount" value="{{ $grandTotal }}">
                        <input type="hidden" name="first_name" value="{{ Auth::user()->name }}">
                        <input type="hidden" name="last_name" value="">
                        <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                        <input type="hidden" name="phone" value="{{ Auth::user()->phone }}">
                        <button type="submit" id="bayar" class="btn c-btn btn-lg c-theme-btn">Checkout</button>
                    </form>

                </div>
            </div>
        </div><!-- END: CONTENT/SHOPS/SHOP-CART-1 -->




        <!-- END: PAGE CONTENT -->
    </div>
@endsection
