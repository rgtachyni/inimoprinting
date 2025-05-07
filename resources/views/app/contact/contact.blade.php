@extends('app._layouts.index')

@section('content')
    <div class="c-layout-page">

        <div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold">
            <div class="container">
                <div class="c-page-title c-pull-left">
                    <h3 class="c-font-uppercase c-font-sbold">Contact Page - 3</h3>
                </div>
                <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                    <li><a href="#">Pages</a></li>
                    <li>/</li>
                    <li><a href="page-contact-3.html">Contact Us 3</a></li>
                    <li>/</li>
                    <li class="c-state_active">Jango Components</li>

                </ul>
            </div>
        </div>
        <div class="c-content-box c-size-md c-bg-img-top c-no-padding c-pos-relative">
            <div class="container">
                <div class="c-content-contact-1 c-opt-1">
                    <div class="row" data-auto-height=".c-height">
                        <div class="col-sm-8 c-desktop"></div>
                        <div class="col-sm-4">
                            <div class="c-body">
                                <div class="c-section">
                                    <h3>Inimo Printing</h3>
                                </div>
                                <div class="c-section">
                                    <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Address</div>
                                    <p>Jl. Klp. Tiga No.44, Balla Parang, Kec. Rappocini, Kota Makassar, Sulawesi Selatan 90232</p>
                                </div>
                                <div class="c-section">
                                    <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Contacts</div>
                                    <p><strong>T</strong> 800 123 0000<br /><strong>F</strong> 800 123 8888</p>
                                </div>
                                <div class="c-section">
                                    <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Social</div><br />
                                    <ul class="c-content-iconlist-1 c-theme">
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="gmapbg" class="c-content-contact-1-gmap" style="height: 615px;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.5776717807753!2d119.42965582236583!3d-5.146720485305463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2b3883e6b39%3A0x3ec04a3513af8f37!2sIniMo%20Printing!5e0!3m2!1sid!2sid!4v1745853918080!5m2!1sid!2sid"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div> <!-- END: CONTENT/CONTACT/CONTACT-1 -->

        <!-- BEGIN: CONTENT/CONTACT/FEEDBACK-1 -->
        <div class="c-content-box c-size-md c-bg-white">
            <div class="container">
                <div class="c-content-feedback-1 c-option-1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="c-container c-bg-green c-bg-img-bottom-right"
                                style="background-image:url(../../assets/base/img/content/misc/feedback_box_1.png)">
                                <div class="c-content-title-1 c-inverse">
                                    <h3 class="c-font-uppercase c-font-bold">Need to know more?</h3>
                                    <div class="c-line-left"></div>
                                    <p class="c-font-lowercase">Try visiting our FAQ page to learn more about our greatest
                                        ever expanding theme, JANGO.</p>
                                    <a href="#"
                                        class="btn btn-md c-btn-border-2x c-btn-white c-btn-uppercase c-btn-square c-btn-bold">Learn
                                        More</a>
                                </div>
                            </div>
                            <div class="c-container c-bg-grey-1 c-bg-img-bottom-right"
                                style="background-image:url(../../assets/base/img/content/misc/feedback_box_2.png)">
                                <div class="c-content-title-1">
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
                                    <p>Ask your questions away and let our dedicated customer service help you look through
                                        our FAQs to get your questions answered!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="c-contact">
                                <div class="c-content-title-1">
                                    <h3 class="c-font-uppercase c-font-bold">Keep in touch</h3>
                                    <div class="c-line-left"></div>
                                    <p class="c-font-lowercase">Our helpline is always open to receive any inquiry or
                                        feedback.
                                        Please feel free to drop us an email from the form below and we will get back to you
                                        as soon as we can.</p>
                                </div>
                                <form action="#">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Name"
                                            class="form-control c-square c-theme input-lg">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Email"
                                            class="form-control c-square c-theme input-lg">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Contact Phone"
                                            class="form-control c-square c-theme input-lg">
                                    </div>
                                    <div class="form-group">
                                        <textarea rows="8" name="message" placeholder="Write comment here ..."
                                            class="form-control c-theme c-square input-lg"></textarea>
                                    </div>
                                    <button type="submit"
                                        class="btn c-theme-btn c-btn-uppercase btn-lg c-btn-bold c-btn-square">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
