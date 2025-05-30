@extends('app._layouts.index')

@section('content')
    <div class=" ">

        <body class="">

            <!-- BEGIN: PAGE CONTAINER -->
            <div class="c-layout-page">
                <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
                <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
                    <div class="container">
                        <div class="c-page-title c-pull-left">
                            <h3 class="c-font-uppercase c-font-sbold">Product</h3>
                            <h4 class="">Page Sub Title Goes Here</h4>
                        </div>
                        <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                            <li><a href="shop-product-grid.html">Product </a></li>
                            <li>/</li>
                            <li class="c-state_active">Inimo Printing</li>

                        </ul>
                    </div>
                </div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
                <div class="container">
                    <div class="c-layout-sidebar-menu c-theme ">
                        <!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-MENU -->
                        <div class="c-sidebar-menu-toggler">
                            <h3 class="c-title c-font-uppercase c-font-bold">Navigation</h3>
                            <a href="javascript:;" class="c-content-toggler" data-toggle="collapse"
                                data-target="#sidebar-menu-1">
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                            </a>
                        </div>

                        <ul class="c-sidebar-menu collapse " id="sidebar-menu-1">
                            <li class="c-dropdown c-active c-open">
                                <a href="javascript:;" class="c-toggler">Kategori<span class="c-arrow"></span></a>
                                <ul class="c-dropdown-menu">
                                    <li class="c-active">
                                        <a href="#">Spanduk</a>
                                    </li>
                                    <li>
                                        <a href="#">Stiker</a>
                                    </li>
                                    <li>
                                        <a href="#">Buku</a>
                                    </li>
                                    <li>
                                        <a href="#">Kertas</a>
                                    </li>
                                </ul>
                            </li>
                            {{-- <li class="c-dropdown">
                                <a href="javascript:;" class="c-toggler">Sub Menu Section<span class="c-arrow"></span></a>
                                <ul class="c-dropdown-menu">
                                    <li>
                                        <a href="#">Example Link</a>
                                    </li>
                                    <li class="c-dropdown c-dropdown-sub">
                                        <a href="javascript:;" class="c-toggler c-toggler-sub">Sub Menu
                                            <span class="c-arrow"></span></a>
                                        <ul class="c-dropdown-menu">
                                            <li>
                                                <a href="#">Example Link</a>
                                            </li>
                                            <li>
                                                <a href="#">Example Link</a>
                                            </li>
                                            <li>
                                                <a href="#">Example Link</a>
                                            </li>
                                            <li>
                                                <a href="#">Example Link</a>
                                            </li>
                                            <li>
                                                <a href="#">Example Link</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Example Link</a>
                                    </li>
                                    <li class="c-dropdown">
                                        <a href="javascript:;" class="c-toggler">Sub Menu<span class="c-arrow"></span></a>
                                        <ul class="c-dropdown-menu">
                                            <li>
                                                <a href="#">Example Link</a>
                                            </li>
                                            <li>
                                                <a href="#">Example Link</a>
                                            </li>
                                            <li class="c-dropdown">
                                                <a href="javascript:;" class="c-toggler">Sub Menu<span
                                                        class="c-arrow"></span></a>
                                                <ul class="c-dropdown-menu">
                                                    <li>
                                                        <a href="#">Example Link</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Example Link</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Example Link</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Example Link</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Example Link</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Example Link</a>
                                            </li>
                                            <li>
                                                <a href="#">Example Link</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Example Link</a>
                                    </li>
                                </ul>
                            </li> --}}


                            <div class="c-padding-20 c-margin-t-40 c-bg-grey-1 c-bg-img-bottom-right"
                                style="background-image:url(../../assets/base/img/content/misc/feedback_box_2.png)">
                                <div class="c-content-title-1 c-margin-t-20">
                                    <h3 class="c-font-uppercase c-font-bold">Have a question?</h3>
                                    <div class="c-line-left"></div>
                                    <form action="#">
                                        <div class="input-group input-group-lg c-square">
                                            <input type="text" class="form-control c-square"
                                                placeholder="Ask a question" />
                                            <span class="input-group-btn">
                                                <button class="btn c-theme-btn c-btn-square c-btn-uppercase c-font-bold"
                                                    type="button">Go!</button>
                                            </span>
                                        </div>
                                    </form>
                                    <p class="c-font-thin">Ask your questions away and let our dedicated customer service
                                        help
                                        you look through our FAQs to get your questions answered!</p>
                                </div>
                            </div><!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-MENU -->
                    </div>
                    <div class="c-layout-sidebar-content ">
                        <div class="card-title">
                            <!--begin::Search-->
                            {{-- <form action="{{ route('cari.produk') }}" method="POST"> --}}
                            <div class="c-shop-result-filter-1 clearfix form-inline">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                            rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                        <path
                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>

                                <!--end::Svg Icon-->
                                <input type="text" class="form-control form-control-solid w-300px ps-14"
                                    placeholder="Search" id="cari" name="cari" />
                                {{-- <button type="submit" class="btn btn-primary">Seacrh</button> --}}
                            </div>

                            <!--end::Search-->
                        </div>


                        <div class="c-margin-t-20"></div>


                        <div class="c-bs-grid-small-space">
                            <div class="row" id="tableProduk">
                                @foreach ($produk as $produks)
                                    <div class="col-md-3 col-sm-6 c-margin-b-20 produk-item">
                                        <div class="c-content-product-2 c-bg-white c-border">
                                            <div class="c-content-overlay">

                                                {{-- <div
                                                class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">
                                                Sale</div> --}}
                                                <div class="c-overlay-wrapper">
                                                    <div class="c-overlay-content">
                                                        <a href="{{ route('detailProduk', ['id' => $produks->id]) }}"
                                                            class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                                    </div>
                                                </div>
                                                <div class="c-bg-img-center c-overlay-object" data-height="height"
                                                    style="height: 230px; background-image: url({{ asset('storage/produk/' . $produks->gambar) }});">
                                                </div>
                                                {{-- <div class="c-bg-img-center c-overlay-object" data-height="height"
                                                    style="height: 230px, background-size:cover">
                                                    <img src="{{ asset('storage/produk/' . $produks->gambar) }}">
                                                </div> --}}
                                            </div>
                                            <div class="c-info">
                                                <p class="c-title c-font-16 c-font-slim namaProduk">
                                                    {{ $produks->namaProduk }}</p>
                                                <p class="c-price c-font-14 c-font-slim">Rp. {{ $produks->harga }}

                                                </p>
                                            </div>
                                            <div class="btn-group btn-group-justified" role="group">

                                                <div class="btn-group c-border-left c-border-top" role="group">
                                                    <form action="{{ route('addWhislist', ['id' => $produks->id]) }}"
                                                        method="POST">
                                                        @csrf

                                                        <button type="submit"
                                                            class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">
                                                            Wishlist </button>


                                                    </form>
                                                </div>
                                                <div class="btn-group c-border-left c-border-top" role="group">
                                                    <form action="{{ route('cart.add', ['id' => $produks->id]) }}"
                                                        method="POST">
                                                        @csrf

                                                        <button type="submit"
                                                            class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">
                                                            Cart </button>


                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="w-100"></div>
                                    </div>
                                @endforeach
                            </div>



                        </div>


                    </div>
                </div>

            </div>

            <script src="../../assets/global/plugins/excanvas.min.js"></script>
            <![endif]-->
                            <script src="../../assets/plugins/jquery.min.js" type="text/javascript"></script>
                            <script src="../../assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
                            <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
                            <script src="../../assets/plugins/jquery.easing.min.js" type="text/javascript"></script>
                            <script src="../../assets/plugins/reveal-animate/wow.js" type="text/javascript"></script>
                            <script src="../../assets/demos/default/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript"></script>

                            <!-- END: CORE PLUGINS -->

                            <!-- BEGIN: LAYOUT PLUGINS -->
                            <script src="../../assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
                            <script src="../../assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
                            <script src="../../assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
                            <script src="../../assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
                            <script src="../../assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
                            <script src="../../assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
                            <script src="../../assets/plugins/js-cookie/js.cookie.js" type="text/javascript"></script>
                            <!-- END: LAYOUT PLUGINS -->

                            <!-- BEGIN: THEME SCRIPTS -->
                            <script src="../../assets/base/js/components.js" type="text/javascript"></script>
                            <script src="../../assets/base/js/components-shop.js" type="text/javascript"></script>
                            <script src="../../assets/base/js/app.js" type="text/javascript"></script>
                            <script>
                                $(document).ready(function() {
                                    App.init(); // init core    
                                });
                            </script>
                            <!-- END: THEME SCRIPTS -->

                            <!-- END: LAYOUT/BASE/BOTTOM -->
                        </body>
                    </div>
                    {{-- <script>
            document.getElementById('cari').addEventListener('keyup', function() {
                let filter = this.value.toLowerCase();
                let items = document.querySelectorAll('#tableProduk .produk-item');

                items.forEach(item => {
                    let nama = item.querySelector('.namaProduk').textContent.toLowerCase();
                    if (nama.includes(filter)) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        </script> --}}
                    <script>
                        document.getElementById('cari').addEventListener('keyup', function() {
                            let filter = this.value.toLowerCase();
                            let items = document.querySelectorAll('#tableProduk .produk-item');
                            let found = false;

                            items.forEach(item => {
                                let nama = item.querySelector('.namaProduk').textContent.toLowerCase();
                                if (nama.includes(filter)) {
                                    item.style.display = '';
                                    found = true;
                                } else {
                                    item.style.display = 'none';
                                }
                            });


                            let messageId = 'noResultMessage';
                            let existingMessage = document.getElementById(messageId);

                            if (!found) {

                                if (!existingMessage) {
                                    let noResult = document.createElement('div');
                                    noResult.id = messageId;
                                    noResult.style.padding = '20px';
                                    noResult.style.textAlign = 'center';
                                    noResult.style.fontSize = '18px';
                                    noResult.innerText = 'Pencarian tidak ada';
                                    document.getElementById('tableProduk').appendChild(noResult);
                                }
                            } else {

                                if (existingMessage) {
                                    existingMessage.remove();
                                }
                            }
                        });
                    </script>
@endsection
