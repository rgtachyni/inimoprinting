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
                @if ($carts->isEmpty())
                    <div class="c-content-box c-size-lg">
                        <div class="container">
                            <div class="c-shop-cart-page-1 c-center">
                                <i class="fa fa-frown-o c-font-dark c-font-50 c-font-thin "></i>
                                <h2 class="c-font-thin c-center">Your Shopping Cart is Empty</h2>
                                <a href="{{ route('produk.view') }}"
                                    class="btn c-btn btn-lg c-btn-dark c-btn-square c-font-white c-font-bold c-font-uppercase">Continue
                                    Shopping</a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="c-shop-cart-page-1 c-layout-sidebar-content ">
                        <div class="row c-cart-table-title  ">
                            <div class="col-md-2 c-cart-image">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Image</h3>
                            </div>
                            <div class="col-md-3 c-cart-desc">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Description</h3>
                            </div>

                            <div class="col-md-2 c-cart-qty">
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
                                    <img src="{{ asset('storage/produk/' . $item->produk->gambar) }}" />
                                </div>
                                <div class="col-md-3 col-sm-9 col-xs-7 c-cart-desc">
                                    <h3><a href="shop-product-details-2.html"
                                            class="c-font-bold c-theme-link c-font-22 c-font-dark">{{ $item->produk->namaProduk }}</a>
                                    </h3>
                                    <p>{{ $item->catatan }}</p>
                                    {{-- <p>Size: S</p> --}}
                                </div>

                                <div class="col-md-2 col-sm-3 col-xs-6 c-cart-qty">
                                    <input type="number" value="{{ $item->jumlah }}" min="1"
                                        class="form-control qty-input" data-price="{{ $item->produk->harga }}"
                                        data-cart-id="{{ $item->id }}" oninput="handleQtyChange(this)">

                                </div>
                                <div class="col-md-2 col-sm-3 col-xs-6 c-cart-price">
                                    <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Unit Price</p>
                                    {{-- <p class="c-cart-price c-font-bold"id="price">Rp.
                                        {{ number_format($item->produk->harga * $item->produk->jumlah) }}</p> --}}
                                    <p class="c-cart-price c-font-bold"id="price-{{ $item->harga }}">Rp.
                                        {{ number_format($item->produk->harga, 0, ',', '.') }}</p>
                                </div>
                                <div class="col-md-2 col-sm-3 col-xs-6 c-cart-total">

                                    {{-- <p class="c-cart-price c-font-bold" id="grand-total">Rp.
                                        {{ number_format($grandTotal) }}</p> --}}
                                    <p class="c-cart-price c-font-bold" id="totalHarga-{{ $item->id }}">Rp.
                                        {{ number_format($item->jumlah * $item->produk->harga, 0, ',', '.') }}</p>

                                </div>
                                <div class="col-md-1 col-sm-12">
                                    <form action="{{ route('removeFromCart', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="c-theme-link">

                                            <i class="fa fa-times"></i>
                                        </button>

                                    </form>
                                </div>
                            @endforeach
                        </div>



                        <!-- END: SUBTOTAL ITEM ROW -->
                        <form action="{{ route('process') }}" method="POST">
                            @csrf
                            <div class="row col-md-offset-8 ">

                                <label for="urgensi">Silahkan pilih Urgensi Pesanan !</label>
                                <div class="form-group  col-md-offset-2">
                                    <input type="radio" id="normal" name="urgensi" value="normal" required>
                                    <label for="normal">Normal</label><br>
                                    <input type="radio" id="express" name="urgensi" value="express">
                                    <label for="express">Express</label><br>
                                </div>

                            </div>
                            <div class="row">
                                <div class="c-cart-subtotal-row ">
                                    <div class="col-md-3 col-md-offset-7 col-sm-4 col-xs-4 c-cart-subtotal-border">
                                        <h3 class="c-font-uppercase c-font-bold c-right c-font-16 c-font-grey-2">Grand
                                            Total
                                        </h3>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-4 c-cart-subtotal-border ">
                                        <h3 class="c-font-bold c-font-16" id="grandTotal"
                                            data-original="{{ $grandTotal }}">Rp.
                                            {{ number_format($grandTotal, 0, ',', '.') }}</h3>
                                    </div>
                                </div>
                            </div>
                            {{-- <input type="hidden" name="total_price" id="total_price" value="{{ $grandTotal }}"> --}}
                            <input type="hidden" name="id">
                            @foreach ($cartIds as $id)
                                <input type="hidden" name="cart_id[]" value="{{ $id }}">
                            @endforeach
                            <input type="hidden" name="amount" value="{{ $grandTotal }}">
                            <input type="hidden" name="first_name" value="{{ Auth::user()->name }}">
                            <input type="hidden" name="last_name" value="">
                            <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                            <input type="hidden" name="phone" value="{{ Auth::user()->phone }}">
                            <button type="submit" id="bayar"
                                class="btn c-btn btn-lg c-theme-btn col-md-offset-8 ">Checkout</button>
                        </form>


                    </div>
                @endif
            </div>
        </div><!-- END: CONTENT/SHOPS/SHOP-CART-1 -->




        <!-- END: PAGE CONTENT -->
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

{{-- <script>
    function handleQtyChange(inputElement) {
        // Ambil elemen terkait
        const cartId = inputElement.dataset.cartId;
        const unitPrice = parseInt(inputElement.dataset.price);
        const quantity = parseInt(inputElement.value);

        // Validasi jumlah minimal 1
        if (quantity < 1) {
            inputElement.value = 1;
            return;
        }

        // Hitung total harga untuk item ini
        const itemTotal = unitPrice * quantity;

        // Update tampilan total item (jika ada ID total per item)
        const itemTotalElement = document.querySelector(`#totalHarga-${cartId}`);
        if (itemTotalElement) {
            itemTotalElement.textContent = 'Rp. ' + formatRupiah(itemTotal);
        }

        // Hitung ulang grand total dari semua item
        let grandTotal = 0;
        document.querySelectorAll('.qty-input').forEach(el => {
            const qty = parseInt(el.value) || 0;
            const price = parseInt(el.dataset.price) || 0;
            grandTotal += qty * price;
        });

        // Update tampilan grand total
        const grandTotalElement = document.getElementById('grandTotal');
        if (grandTotalElement) {
            grandTotalElement.textContent = 'Rp. ' + formatRupiah(grandTotal);
        }
    }

    function formatRupiah(angka) {
        return angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
</script> --}}
<script>
    function handleQtyChange(inputElement) {
        const cartId = inputElement.dataset.cartId;
        const unitPrice = parseInt(inputElement.dataset.price);
        let quantity = parseInt(inputElement.value);
        const itemTotal = unitPrice * quantity;


        if (quantity < 1) {
            inputElement.value = 1;
            quantity = 1;
        } // Hitung total harga lokal dulu const itemTotal=unitPrice *
        quantity;
        const itemTotalElement = document.querySelector(`#totalHarga-${cartId}`);
        if (itemTotalElement) {
            itemTotalElement.textContent = 'Rp. ' + formatRupiah(itemTotal);
        } // Kirim update ke server via AJAX (fetch)
        fetch('/cart/updateQty', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token" ]').getAttribute('content')
                },
                body: JSON.stringify({
                    cart_id: cartId,
                    jumlah: quantity
                })
            }).then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Update grand total dari response server
                    const grandTotalElement = document.getElementById('grandTotal');
                    if (grandTotalElement) {
                        grandTotalElement.textContent = 'Rp. ' + formatRupiah(data.grand_total);
                    }
                } else {
                    alert('Gagal update jumlah di server');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat mengupdate jumlah');
            });
    }

    function formatRupiah(angka) {
        return angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const express = document.getElementById('express');
        const normal = document.getElementById('normal');
        const grandTotalElem = document.getElementById('grandTotal');
        const originalTotal = parseFloat(grandTotalElem.dataset.original.replace(/\./g, '').replace(',',
            '.')); // Ambil dari atribut data-original
        const amountInput = document.querySelector('input[name="amount"]');

        function updateTotal() {
            let newTotal = originalTotal;

            if (express.checked) {
                newTotal = originalTotal * 1.05; // Tambah 5%
            }

            // Format angka ke Rupiah
            const formatter = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR'
            });

            grandTotalElem.textContent = formatter.format(newTotal);
            // grandTotalElem.textContent = formatter.format(newTotal);
            amountInput.value = Math.round(newTotal);
        }

        express.addEventListener('change', updateTotal);
        normal.addEventListener('change', updateTotal);
    });
</script>
