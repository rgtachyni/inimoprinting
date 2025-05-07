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
                <div class="c-shop-cart-page-1">
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
                        <div class="col-md-1 c-cart-total">
                            <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Aksi</h3>
                        </div>
                        <div class="col-md-1 c-cart-remove"></div>
                    </div>
                    <!-- BEGIN: SHOPPING CART ITEM ROW -->
                    <div class="row c-cart-table-row">
                        @foreach ($data as $item)
                            <h2
                                class="c-font-uppercase c-font-bold c-theme-bg c-font-white c-cart-item-title c-cart-item-first">
                                Item 1</h2>
                            <div class="col-md-2 col-sm-3 col-xs-5 c-cart-image">
                                <h3><a href="shop-product-details-2.html"
                                        class="c-font-bold c-theme-link c-font-22 c-font-dark">{{ $item->order_id }}</a>
                                </h3>
                            </div>
                            <div class="col-md-4 col-sm-9 col-xs-7 c-cart-desc">
                                <h3><a href="shop-product-details-2.html"
                                        class="c-font-bold c-theme-link c-font-22 c-font-dark">{{ $item->total_price }}</a>
                                </h3>
                            </div>

                            <div class="col-md-2 col-sm-3 col-xs-6 c-cart-price">
                                @if ($item['status'] == 'pending')
                                    <span class="badge bg-warning text-dark">{{ $item['status'] }}</span>
                                @elseif ($item['status'] == 'success')
                                    <span class="badge bg-success">{{ $item['status'] }}</span>
                                @else
                                    <span class="badge bg-danger">{{ $item['status'] }}</span>
                                @endif
                            </div>
                            <div class="col-md-1 col-sm-12 c-cart-remove">
                                @if ($item['status'] == 'pending')
                                    <form action="{{ route('prosescheckout') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item['id'] }}">
                                        <input type="hidden" name="order_id" value="{{ $item['order_id'] }}">
                                        <input type="hidden" name="amount" value="{{ $item['total_price'] }}">
                                        <button type="submit" class="btn btn-primary">Bayar</button>
                                    </form>
                                @endif
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div><!-- END: CONTENT/SHOPS/SHOP-CART-1 -->




        <!-- END: PAGE CONTENT -->
    </div>
@endsection
