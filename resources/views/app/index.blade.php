@extends('app._layouts.index')

@section('content')
    <!-- BEGIN: PAGE CONTAINER -->
    <div class="c-layout-page">
        <!-- BEGIN: PAGE CONTENT -->
        <!-- BEGIN: LAYOUT/SLIDERS/REVO-SLIDER-4 -->
        <section class="c-layout-revo-slider c-layout-revo-slider-4" dir="ltr">
            <div class="tp-banner-container c-theme">
                <div class="tp-banner rev_slider" data-version="5.0">
                    <ul>
                        <!--BEGIN: SLIDE #1 -->
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                            <img alt="" src="{{ asset('tampilanUser/gambar4.jpg') }}" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption customin customout" data-x="center" data-y="center" data-hoffset=""
                                data-voffset="-50" data-speed="500" data-start="1000" data-transform_idle="o:1;"
                                data-transform_in="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                                data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                                data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="600">
                                <h3
                                    class="c-main-title-circle c-font-48 c-font-bold c-font-center c-font-uppercase c-font-white c-block">
                                    TAKE THE WEB BY<br>STORM WITH JANGO
                                </h3>
                            </div>
                            <div class="tp-caption lft" data-x="center" data-y="center" data-voffset="110" data-speed="900"
                                data-start="2000" data-transform_idle="o:1;"
                                data-transform_in="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                                data-transform_out="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;">
                                <a href="#"
                                    class="c-action-btn btn btn-lg c-btn-square c-theme-btn c-btn-bold c-btn-uppercase">
                                    Order Now</a>
                            </div>
                        </li>
                        <!--END -->

                        <!--BEGIN: SLIDE #2 -->
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                            <img alt="" src="{{ asset('tampilanUser/gambar2.jpg') }}"
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption customin customout" data-x="center" data-y="center" data-hoffset=""
                                data-voffset="-50" data-speed="500" data-start="1000" data-transform_idle="o:1;"
                                data-transform_in="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                                data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:600;e:Back.easeInOut;"
                                data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="600">
                                <h3
                                    class="c-main-title-circle c-font-48 c-font-bold c-font-center c-font-uppercase c-font-white c-block">
                                    JANGO IS OPTIMIZED<br>TO EVERY DEVELOPMENT
                                </h3>
                            </div>
                            <div class="tp-caption lft" data-x="center" data-y="center" data-voffset="110" data-speed="900"
                                data-start="2000" data-transform_idle="o:1;"
                                data-transform_in="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:900;e:Back.easeInOut;"
                                data-transform_out="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:900;e:Back.easeInOut;">
                                <a href="#"
                                    class="c-action-btn btn btn-lg c-btn-square c-theme-btn c-btn-bold c-btn-uppercase">Learn
                                    More</a>
                            </div>
                        </li>
                        <!--END -->

                        <!--BEGIN: SLIDE #3 -->
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="700" data-delay="6000"
                            data-thumb="">
                            <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                            <img alt="" src="{{ asset('tampilanUser/gambar3.jpg') }}"
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="visible-xs" />

                            <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute"
                                data-videowidth="100%" data-videoheight="100%"
                                data-videomp4="../../assets/base/media/video/video-2.mp4" data-videopreload="preload"
                                data-videoloop="none" data-forceCover="1" data-aspectratio="16:9" data-autoplay="true"
                                data-autoplayonlyfirsttime="false" data-nextslideatend="true">
                            </div>

                            <div class="tp-caption customin customout" data-x="center" data-y="center" data-hoffset=""
                                data-voffset="-30" data-speed="500" data-start="1000" data-transform_idle="o:1;"
                                data-transform_in="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                                data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:600;e:Back.easeInOut;"
                                data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                                data-endelementdelay="0.1" data-endspeed="600">
                                <h3
                                    class="c-main-title-square c-font-55 c-font-bold c-font-center c-font-uppercase c-font-white c-block">
                                    Let us show you<br>Unlimited possibilities
                                </h3>
                            </div>

                            <div class="tp-caption lft" data-x="center" data-y="center" data-voffset="130"
                                data-speed="900" data-start="2000" data-transform_idle="o:1;"
                                data-transform_in="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:900;e:Back.easeInOut;"
                                data-transform_out="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:900;e:Back.easeInOut;">
                                <a href="http://themeforest.net/item/jango-responsive-multipurpose-html5-template/11987314"
                                    class="c-action-btn btn btn-lg c-btn-square c-btn-border-2x c-btn-white c-btn-bold c-btn-uppercase">Purchase</a>
                            </div>
                        </li>
                        <!--END -->
                    </ul>
                </div>
            </div>
        </section><!-- END: LAYOUT/SLIDERS/REVO-SLIDER-4 -->

        <!-- BEGIN: CONTENT/FEATURES/FEATURES-1 -->
        <div class="c-content-box c-size-md c-bg-white">
            <div class="c-content-title-1 wow animate fadeInDown">
                <h3 class="c-font-uppercase c-center c-font-bold"> <span style="">3 Langkah Mudah Pesan <br />
                        Di
                        Inimo Printing
                    </span></h3>
                <div class="c-line-center"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="c-content-feature-1 wow animate fadeInUp">
                            <div class="c-content-line-icon c-theme  c-center c-icon-screen-chart "></div>
                            <h3 class="c-font-uppercase c-font-bold">Pilih produk & Kirim desain</h3>
                            <p class="c-font-thin">Tentukan jenis cetakan dan kirim desain, atau minta bantuan tim desain
                                kami.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="c-content-feature-1 wow animate fadeInUp" data-wow-delay="0.2s">
                            <div class="c-content-line-icon c-theme c-icon-support"></div>
                            <h3 class="c-font-uppercase c-font-bold">Tentukan Spesifikasi</h3>
                            <p class="c-font-thin">Pilih ukuran, bahan, jumlah, dan detail lainnya sesuai kebutuhanmu.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 c-card">
                        <div class="c-content-feature-1 wow animate fadeInUp" data-wow-delay="0.4s">
                            <div class="c-content-line-icon c-theme c-icon-bulb"></div>
                            <h3 class="c-font-uppercase c-font-bold">Checkout & order</h3>
                            <p class="c-font-thin">Pesanan dicetak, lalu bisa diambil langsung atau dikirim ke alamatmu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/FEATURES/FEATURES-1 -->


        <!-- BEGIN: CONTENT/MISC/WHY-CHOOSE-US-1 -->
        <div class="c-content-box c-size-lg c-bg-grey-1">
            <div class="container">
                <div class="">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="c-content-feature-5">
                                <div class="c-content-title-1 wow amimate fadeInDown">
                                    <h3 class="c-left c-font-dark c-font-uppercase c-font-bold">Why<br />Inimo
                                        <br /> Printing
                                    </h3>
                                    <div class="c-line-left c-bg-blue-3 c-theme-bg"></div>
                                </div>
                                {{-- <div class="c-text wow animate fadeInLeft">
                                    JANGO is the ultimate tool to power any of your projects. Corporate, ecommerce, SAAS,
                                    CRM and much more.
                                </div> --}}
                                {{-- <button type="submit"
                                    class="btn c-btn-uppercase btn-md c-btn-bold c-btn-square c-theme-btn wow animate fadeIn">Explore</button> --}}
                                <img class="c-photo img-responsive wow animate fadeInUp" width="420" alt=""
                                    src="{{ asset('tampilanUser/gambar1.png') }}" />
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="c-content-accordion-1 c-theme wow animate fadeInRight">
                                <div class="panel-group" id="accordion" role="tablist">
                                    <div class="panel">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a class="c-font-bold c-font-uppercase c-font-19" data-toggle="collapse"
                                                    data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Exceptional Frontend Framework
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                            aria-labelledby="headingOne">
                                            <div class="panel-body c-font-18">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed c-font-uppercase c-font-bold c-font-19"
                                                    data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Modern Design Trends
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingTwo">
                                            <div class="panel-body c-font-18">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed c-font-uppercase c-font-bold c-font-19"
                                                    data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Beatifully Crafted Code
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingThree">
                                            <div class="panel-body c-font-18">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/MISC/WHY-CHOOSE-US-1 -->



        <!-- BEGIN: CONTENT/TABS/TAB-1 -->
        <div class="c-content-box c-size-md c-no-bottom-padding c-overflow-hide">
            <div class="c-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="c-content-title-1">
                            {{-- <h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30">
                                JANGO'S Main Features
                            </h3> --}}
                            <div class="c-line-center c-theme-bg"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="c-content-tab-2 c-theme c-opt-1">
                            <ul class="nav c-tab-icon-stack c-font-sbold c-font-uppercase">
                                <li class="active">
                                    <a href="#c-tab2-opt1-1" data-toggle="tab">
                                        <span class="c-content-line-icon c-icon-25"></span>
                                        <span class="c-title">High- quality prints</span>
                                    </a>
                                    <div class="c-arrow"></div>
                                </li>
                                <li>
                                    <a href="#c-tab2-opt1-2" data-toggle="tab">
                                        <span class="c-content-line-icon c-icon-19"></span>
                                        <span class="c-title">Fast & on-time service</span>
                                    </a>
                                    <div class="c-arrow"></div>
                                </li>
                                <li>
                                    <a href="#c-tab2-opt1-3" data-toggle="tab">
                                        <span class="c-content-line-icon c-icon-14"></span>
                                        <span class="c-title">Affordable prices</span>
                                    </a>
                                    <div class="c-arrow"></div>
                                </li>
                                <li>
                                    <a href="#c-tab2-opt1-4" data-toggle="tab">
                                        <span class="c-content-line-icon c-icon-20"></span>
                                        <span class="c-title">Custom designs</span>
                                    </a>
                                    <div class="c-arrow"></div>
                                </li>
                                <li>
                                    <a href="#c-tab2-opt1-5" data-toggle="tab">
                                        <span class="c-content-line-icon c-icon-33"></span>
                                        <span class="c-title">Friendly support
                                        </span>
                                    </a>
                                    <div class="c-arrow"></div>
                                </li>
                            </ul>
                            <div class="c-tab-content">
                                <div class="c-bg-img-center1"
                                    style="background-image: url(../../assets/base/img/content/backgrounds/bg-62.jpg)">
                                    <div class="container">
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="c-tab2-opt1-1">
                                                <div class="c-tab-pane">
                                                    <img class="img-responsive"
                                                        src="../../assets/base/img/content/stock2/3.jpg" alt="" />

                                                    {{-- <h4 class="c-font-30 c-font-thin c-font-uppercase c-font-bold">Modern
                                                        Design Trends</h4> --}}

                                                    <p class="c-font-17 c-margin-b-20 c-margin-t-20 c-font-thin ">
                                                        Inimo Printing menggunakan bahan dan tinta berkualitas tinggi, serta
                                                        mesin cetak modern. Hasil cetakan tajam, warna akurat, dan tahan
                                                        lama.
                                                    </p>

                                                    {{-- <button class="btn btn-sm c-theme-btn c-btn-square c-btn-bold">
                                                        EXPLORE
                                                    </button> --}}
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="c-tab2-opt1-2">
                                                <div class="c-tab-pane">
                                                    <img class="img-responsive"
                                                        src="../../assets/base/img/content/stock2/04.jpg"
                                                        alt="" />



                                                    <p class="c-font-17 c-margin-b-20 c-margin-t-20 c-font-thin ">
                                                        Proses pengerjaan cepat tanpa mengorbankan kualitas. Kami juga
                                                        menjamin pesanan selesai dan dikirim tepat waktu sesuai kesepakatan.


                                                    </p>

                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="c-tab2-opt1-3">
                                                <div class="c-tab-pane">
                                                    <img class="img-responsive"
                                                        src="../../assets/base/img/content/stock2/5.jpg" alt="" />



                                                    <p class="c-font-17 c-margin-b-20 c-margin-t-20 c-font-thin ">
                                                        Harga bersahabat untuk semua kalangan—baik untuk pelajar, UMKM,
                                                        maupun perusahaan. Kami juga menyediakan berbagai paket sesuai
                                                        budget.
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="c-tab2-opt1-4">
                                                <div class="c-tab-pane">
                                                    <img class="img-responsive"
                                                        src="../../assets/base/img/content/stock2/06.jpg"
                                                        alt="" />



                                                    <p class="c-font-17 c-margin-b-20 c-margin-t-20 c-font-thin ">
                                                        Kamu bisa request desain sesuai keinginan. Mau cetak nama, logo,
                                                        warna khusus, atau desain unik lainnya—kami siap bantu!
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="c-tab2-opt1-5">
                                                <div class="c-tab-pane">
                                                    <img class="img-responsive"
                                                        src="../../assets/base/img/content/stock2/6.jpg" alt="" />



                                                    <p class="c-font-17 c-margin-b-20 c-margin-t-20 c-font-thin ">
                                                        Tim kami responsif, ramah, dan siap membantu kamu dari awal
                                                        pemesanan hingga selesai. Tanya-tanya dulu? Boleh banget!
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- END: CONTENT/TABS/TAB-1 -->



        <!-- BEGIN: CONTENT/SHOPS/SHOP-2-2 -->
        <div class="c-content-box c-size-md c-overflow-hide c-bs-grid-small-space">
            <div class="container">
                <div class="c-content-title-4">
                    <h3 class="c-font-uppercase c-center c-font-bold c-line-strike"><span class="c-bg-white">Produk</span>
                    </h3>
                </div>
                <div class="row">
                    <div data-slider="owl">
                        <div class="owl-carousel owl-theme c-theme owl-small-space c-owl-nav-center" data-rtl="false"
                            data-items="4" data-slide-speed="8000">
                            @foreach ($produk as $produks)
                                <div class="item">
                                    <div class="c-content-product-2 c-bg-white c-border">
                                        <div class="c-content-overlay">
                                            {{-- <div
                                                class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">
                                                Sale</div> --}}
                                            <div class="c-overlay-wrapper">
                                                <div class="c-overlay-content">
                                                    <a href="shop-product-details-2.html"
                                                        class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                                </div>
                                            </div>
                                            <div class="c-bg-img-center-contain c-overlay-object" data-height="height"
                                                style="height: 270px; background-image: url({{ asset('public/uploads/produk/' . $produks->gambar) }})">
                                            </div>
                                        </div>
                                        <div class="c-info">
                                            <p class="c-title c-font-18 c-font-slim">{{ $produks->namaProduk }}</p>
                                            <p class="c-price c-font-16 c-font-slim">Rp. {{ $produks->harga }}

                                            </p>
                                        </div>
                                        <div class="btn-group btn-group-justified" role="group">
                                            <div class="btn-group c-border-top" role="group">
                                                <a href="shop-product-wishlist.html"
                                                    class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                            </div>
                                            <div class="btn-group c-border-left c-border-top" role="group">
                                                <a href="shop-cart.html"
                                                    class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END: CONTENT/SHOPS/SHOP-2-2 -->

        <!-- BEGIN: CONTENT/TESTIMONIALS/TESTIMONIALS-6-1 -->
        <div class="c-content-box c-size-md c-bg-grey-1">
            <div class="container">
                <div class="c-content-blog-post-card-1-slider" data-slider="owl">
                    <div class="c-content-title-1">
                        <h3 class="c-center c-font-uppercase c-font-bold">Customer Reviews</h3>
                        <div class="c-line-center c-theme-bg"></div>
                        <p class="c-center c-font-uppercase1">Lorem ipsum dolor sit amet et consectetuer adipiscing elit
                        </p>
                    </div>
                    <div class="owl-carousel owl-theme c-theme c-owl-nav-center" data-items="3" data-slide-speed="8000"
                        data-rtl="false">
                        <div class="item">
                            <div class="c-content-testimonial-3 c-option-default">
                                <div class="c-content">
                                    Lorem ipsum dolor sit amet et consectetuer adipiscing elit, sed nonummy nib euismod
                                    tincid unt ut ed laoreet dolore sit amet consectetuer adipiscing.
                                </div>
                                <div class="c-person">
                                    <img src="../../assets/base/img/content/avatars/team1.jpg" class="img-responsive">
                                    <div class="c-person-detail c-font-uppercase">
                                        <h4 class="c-name">Mark Doe</h4>
                                        <p class="c-position c-font-bold c-theme-font">CFO, Walmart</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="c-content-testimonial-3 c-option-default">
                                <div class="c-content">
                                    Lorem ipsum dolor sit amet et consectetuer adipiscing elit, sed nonummy nib euismod
                                    tincid unt ut ed laoreet dolore sit amet consectetuer adipiscing.
                                </div>
                                <div class="c-person">
                                    <img src="../../assets/base/img/content/avatars/team6.jpg" class="img-responsive">
                                    <div class="c-person-detail c-font-uppercase">
                                        <h4 class="c-name">Ashley Benson</h4>
                                        <p class="c-position c-font-bold c-theme-font">CFO, Loop Inc</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="c-content-testimonial-3 c-option-default">
                                <div class="c-content">
                                    Lorem ipsum dolor sit amet et consectetuer adipiscing elit, sed nonummy nib euismod
                                    tincid unt ut ed laoreet dolore sit amet consectetuer adipiscing.
                                </div>
                                <div class="c-person">
                                    <img src="../../assets/base/img/content/avatars/team4.jpg" class="img-responsive">
                                    <div class="c-person-detail c-font-uppercase">
                                        <h4 class="c-name">Nina Kunis</h4>
                                        <p class="c-position c-font-bold c-theme-font">CFO, ERA Tech</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="c-content-testimonial-3 c-option-default">
                                <div class="c-content">
                                    Lorem ipsum dolor sit amet et consectetuer adipiscing elit, sed nonummy nib euismod
                                    tincid unt ut ed laoreet dolore sit amet consectetuer adipiscing.
                                </div>
                                <div class="c-person">
                                    <img src="../../assets/base/img/content/avatars/team8.jpg" class="img-responsive">
                                    <div class="c-person-detail c-font-uppercase">
                                        <h4 class="c-name">Ashley Benson</h4>
                                        <p class="c-position c-font-bold c-theme-font">CFO, Loop Inc</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="c-content-testimonial-3 c-option-default">
                                <div class="c-content">
                                    Lorem ipsum dolor sit amet et consectetuer adipiscing elit, sed nonummy nib euismod
                                    tincid unt ut ed laoreet dolore sit amet consectetuer adipiscing.
                                </div>
                                <div class="c-person">
                                    <img src="../../assets/base/img/content/avatars/team7.jpg" class="img-responsive">
                                    <div class="c-person-detail c-font-uppercase">
                                        <h4 class="c-name">Mark Jeep</h4>
                                        <p class="c-position c-font-bold c-theme-font">CFO, ERA Tech</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END: CONTENT/TESTIMONIALS/TESTIMONIALS-6-1 -->





    </div>
    <!-- END: PAGE CONTAINER -->
@endsection

<script src="path/to/jquery.js"></script>
<script src="path/to/jquery.themepunch.tools.min.js"></script>
<script src="path/to/jquery.themepunch.revolution.min.js"></script>

<script>
    jQuery(document).ready(function() {
        jQuery('.tp-banner').show().revolution({
            delay: 5000,
            startwidth: 1170,
            startheight: 500,
            hideThumbs: 10,
            fullWidth: "on",
            forceFullWidth: "on"
        });
    });
</script>
