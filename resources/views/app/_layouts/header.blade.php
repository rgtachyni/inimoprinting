<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: HEADER -->
<header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="90">
    <div class="c-navbar">
        <div class="container">
            <!-- BEGIN: BRAND -->
            <div class="c-navbar-wrapper clearfix">
                <div class="c-brand c-pull-left">
                    <a href="index.html" class="c-logo">
                        <img src="{{ asset('logo2.png') }}" width="100px" alt="logo" class="c-desktop-logo">
                        <img src="{{ asset('logo2.png') }}" width="90px" alt="logo"
                            class="c-desktop-logo-inverse">
                        <img src="{{ asset('logo2.png') }}" alt="logo" class="c-mobile-logo">
                    </a>
                    {{-- <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                        <span class="c-line"></span>
                        <span class="c-line"></span>
                        <span class="c-line"></span>
                    </button>
                    <button class="c-topbar-toggler" type="button">
                        <i class="fa fa-ellipsis-v"></i>
                    </button>
                    <button class="c-search-toggler" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                    <button class="c-cart-toggler" type="button">
                        <i class="icon-handbag"></i> <span class="c-cart-number c-theme-bg">2</span>
                    </button> --}}

                </div>
                <!-- END: BRAND -->
                <!-- BEGIN: QUICK SEARCH -->
                <form class="c-quick-search" action="#">
                    <input type="text" name="query" placeholder="Type to search..." value=""
                        class="form-control" autocomplete="off">
                    <span class="c-theme-link">&times;</span>
                </form>

                <!-- END: QUICK SEARCH -->
                <!-- BEGIN: HOR NAV -->
                <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- BEGIN: MEGA MENU -->
                <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
                <nav
                    class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
                    <ul class="nav navbar-nav c-theme-nav">
                        <li>
                            <a href="{{ '/' }}" class="c-link dropdown-toggle">Home<span
                                    class="c-arrow c-toggler"></span></a>
                        </li>

                        <li>
                            <a href="{{ '/produk' }}"
                                class="c-link dropdown-toggle block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover">Produk</a>
                            <!-- Dropdown menu -->
                            <div id="dropdownHover"
                                class="z-20 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
                                <ul class="py-5 text-2xl text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownHoverButton">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Spanduk</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Brosur</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Stempel</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Plastik</a>
                                    </li>
                                </ul>
                            </div>
                            {{-- <a href="{{ '/produk' }}" class="c-link dropdown-toggle">Product<span
                                    class="c-arrow c-toggler"></span></a> --}}
                        </li>
                        {{-- <li>
                            <a href="{{ '/store' }}" class="c-link dropdown-toggle">Store<span
                                    class="c-arrow c-toggler"></span></a>
                        </li> --}}
                        <li>
                            <a href="{{ '/contact' }}" class="c-link dropdown-toggle">Contact Us<span
                                    class="c-arrow c-toggler"></span></a>
                        </li>
                        {{-- <li>
                            <a href="{{ route('indexpesanan') }}" class="c-link dropdown-toggle">Pesanan<span
                                    class="c-arrow c-toggler"></span></a>
                        </li> --}}
                        <li class="c-cart-toggler-wrapper">
                            <a href="{{ route('cart.view') }}" class="c-btn-icon c-cart-toggler">
                                <i class="icon-handbag c-cart-icon"></i>
                                {{-- <span class="c-cart-number c-theme-bg">2</span> --}}
                            </a>
                        </li>
                        <li class="c-cart-toggler-wrapper">
                            <a href="" class="c-btn-icon c-cart-toggler">
                                <i class="icon-heart c-wishlist-icon"></i>
                            </a>
                        </li>
                        {{-- <li>
                            <a href="{{ '/login' }}" class="c-link dropdown-toggle">Login<span
                                    class="c-arrow c-toggler"></span></a>
                        </li> --}}

                        <li class="c-cart-toggler-wrapper">
                            <a href="" class="c-btn-icon c-cart-toggler">
                                <i class="icon-user c-login-icon"></i>
                            </a>
                        </li>
                        <li class="c-cart-toggler-wrapper">
                            <a href="" class="c-btn-icon c-cart-toggler">
                                <i class="icon-logout c-logout-icon"></i>
                            </a>
                        </li>
                        {{-- <li>
                            <a href="{{route('cart.view')}}" class="c-link dropdown-toggle"><img src="{{ asset('gambar/cart.png') }}"
                                    alt="note" class="w-12 grid items-center bg-yellow-200"></a>
                        </li> --}}
                        {{-- <li> --}}
                        {{-- <h1 class="c-link dropdown-toggle">Hi {{ Auth::user()->name }}</h1> --}}
                        {{-- </li> --}}




                    </ul>
                </nav>
                <!-- END: MEGA MENU --><!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- END: HOR NAV -->
            </div>
        </div>
    </div>




</header>
<!-- END: HEADER --><!-- END: LAYOUT/HEADERS/HEADER-1 -->
