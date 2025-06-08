@extends('app._layouts.index')

@section('content')
    <div class="c-layout-page">
        <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
        <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
            <div class="container">
                <div class="c-page-title c-pull-left">
                    <h3 class="c-font-uppercase c-font-sbold">Checkout</h3>
                    <h4 class="">Page Sub Title Goes Here</h4>
                </div>
                <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                    <li><a href="shop-checkout.html">Checkout</a></li>
                    <li>/</li>
                    <li class="c-state_active">Jango Components</li>

                </ul>
            </div>
        </div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
        <!-- BEGIN: PAGE CONTENT -->
        <div class="c-content-box c-size-lg col-md-offset-3">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-md-6 ">

                        <div class="c-content-bar-1 c-align-center c-bordered c-theme-border c-shadow ">
                            {{-- <img src="{{ asset('logo2.png') }}" alt="" style="w-2"> --}}
                            <h1 class="c-font-bold c-font-uppercase c-font-24 text-center">Your Order</h1>
                            <ul class="c-order list-unstyled">
                                <li class="row c-margin-b-15">
                                    <div class="col-md-6 c-font-20">
                                        <h2>Product</h2>
                                    </div>
                                    <div class="col-md-6 c-font-20">
                                        <h2>Total</h2>
                                    </div>
                                </li>
                                <li class="row c-border-bottom"></li>
                                <li class="row c-margin-b-15 c-margin-t-15">
                                    @foreach ($carts as $item)
                                        <div class="col-md-6 c-font-20"><a href="shop-product-details.html"
                                                class="c-theme-link">{{ $item->produk->namaProduk }} x
                                                {{ $item->jumlah }}</a>
                                        </div>
                                        <div class="col-md-6 c-font-20">
                                            <p class="">Rp.
                                                {{ number_format($item->jumlah * $item->produk->harga, 0, ',', '.') }}
                                            </p>
                                        </div>
                                    @endforeach
                                </li>


                                <li class="row c-border-top c-margin-b-15"></li>

                                <li class="row c-margin-b-15 c-margin-t-15">
                                    <div class="col-md-6 c-font-20">
                                        <p class="c-font-30">Total</p>
                                    </div>
                                    <div class="col-md-6 c-font-20">
                                        <p class="c-font-bold c-font-30">Rp. <span
                                                class="c-shipping-total">{{ number_format($total, 0, ',', '.') }}</span>
                                        </p>
                                    </div>
                                </li>

                                {{-- <li><input type="hidden" name="metode_pembayaran" value="midtrans"> --}}

                                </li>
                                <li class="row">

                                    <div class="form-group col-md-12" role="group">

                                        <div class="c-cart-buttons">
                                            <button type="submit" id="bayar"
                                                class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Bayar</button>
                                            <a href="{{ '/cart' }}"
                                                class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Cancel</a>
                                        </div>



                                    </div>
                                </li>

                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- END: PAGE CONTENT -->
    </div>

    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.clientKey') }}"></script>
    <script type="text/javascript">
        document.getElementById('bayar').onclick = function() {
            //  document.querySelector('form').submit();
            // SnapToken acquired from previous step
            snap.pay('{{ $transaction->snap_token }}', {
                // Optional
                onSuccess: function(result) {
                    console.log(result);
                    window.location = "{{ route('checkout-success', $transaction->id) }}";

                },
                // Optional
                onPending: function(result) {
                    console.log(result);
                    window.location = "{{ route('checkout-pending', $transaction->id) }}"

                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                },
                // Optional
                onError: function(result) {
                    console.log(result);
                    console.log('{{ $transaction->snap_token }}');
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                }
            });
        };
    </script>
@endsection
