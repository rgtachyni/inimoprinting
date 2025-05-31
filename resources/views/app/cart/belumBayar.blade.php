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
                                <li class="{{ Route::is('cart.view') ? 'c-active' : '' }}">
                                    <a href="/cart">Keranjang</a>
                                </li>
                                <li class="{{ Route::is('belumBayar') ? 'c-active' : '' }}">
                                    <a href="/pesanan/belumbayar">Belum bayar</a>
                                </li>
                                <li class="{{ Route::is('sedangProses') ? 'c-active' : '' }}">
                                    <a href="{{ route('sedangProses') }}">Sedang di proses</a>
                                </li>
                                <li class="{{ Route::is('selesai') ? 'c-active' : '' }}">
                                    <a href="/pesanan/selesai">Selesai</a>
                                </li>
                                {{-- <li class="{{ Route::is('dibatalkan') ? 'c-active' : '' }}">
                                    <a href="/pesanan/dibatalkan">Di batalkan</a>
                                </li> --}}
                            </ul>
                        </li>
                    </ul><!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
                </div>
                @if ($transaction->isEmpty())
                    <div class="c-content-box c-size-lg">
                        <div class="container">
                            <div class="c-shop-cart-page-1 c-center">
                                <i class="fa fa-frown-o c-font-dark c-font-50 c-font-thin "></i>
                                <h2 class="c-font-thin c-center">Empty, Let's Go Shopping</h2>
                                <a href="{{ route('produk.view') }}"
                                    class="btn c-btn btn-lg c-btn-dark c-btn-square c-font-white c-font-bold c-font-uppercase">Continue
                                    Shopping</a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="c-layout-sidebar-content ">
                        <!-- BEGIN: PAGE CONTENT -->
                        <!-- BEGIN: CONTENT/SHOPS/SHOP-ORDER-HISTORY -->
                        <div class="c-content-title-1">
                            <h3 class="c-font-uppercase c-font-bold">Belum Bayar</h3>
                            <div class="c-line-left"></div>
                        </div>
                        @if (session('pending'))
                            <div class="alert alert-success">
                                {{ session('pending') }}
                            </div>
                        @endif
                        <div class="row c-margin-b-40 c-order-history-2">
                            <div class="row c-cart-table-title">

                                <div class="col-md-2 c-cart-ref">
                                    <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Order</h3>
                                </div>
                                <div class="col-md-3 c-cart-desc">
                                    <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2 ">Nama Produk</h3>
                                </div>
                                <div class="col-md-4 c-cart-price">
                                    <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Total price</h3>
                                </div>


                            </div>
                            <!-- BEGIN: ORDER HISTORY ITEM ROW -->
                            @foreach ($transaction as $transactions)
                                {{-- @foreach ($transactions->carts as $carts) --}}
                                <div class="row c-cart-table-row">


                                    <div class="col-md-2 col-sm-3 col-xs-6 c-cart-ref">

                                        <p>{{ $transactions->order_id }}</p>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-6 c-cart-ref">
                                        @foreach ($transactions->carts as $carts)
                                            <p>{{ $carts->produk->namaProduk }} x {{ $carts->jumlah }}</p>
                                        @endforeach
                                    </div>

                                    <div class="col-md-4 col-sm-3 col-xs-6 c-cart-ref text-center">

                                        <p>Rp. {{ $transactions->total_price }}</p>
                                    </div>


                                    <div class="col-md-1 col-sm-3 col-xs-6 c-cart-ref text-center">
                                        <a href="{{ route('detailBelumBayar', $transactions->id) }}"
                                            class="btn btn-danger btn-sm  w-100">Bayar</a>
                                    </div>

                                    <div class="col-md-1 col-sm-3 col-xs-6 c-cart-ref text-center">
                                        <a href="https://wa.me/6285244194760?text=Halo%20saya%20ingin%20bertanya%20tentang%20pesanan%20dengan%20Order%20ID%20{{ $carts->order_id }}"
                                            class="btn btn-primary btn-sm w-100 ">
                                            Penjual</a>


                                    </div>

                                </div>
                                {{-- @endforeach --}}
                            @endforeach

                        </div>
                    </div>
                @endif
            </div><!-- END: CONTENT/SHOPS/SHOP-CART-1 -->




            <!-- END: PAGE CONTENT -->
        </div>

    @endsection
