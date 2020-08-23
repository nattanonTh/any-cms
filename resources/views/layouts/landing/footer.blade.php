<div class="container mb-5 text-center">
    <hr>

    <div class="row clear-bottommargin pt-5">
        <div class="col-md-12 col-lg-3 bottommargin clearfix">
            <div class="feature-box fbox-center fbox-bg fbox-plain">
                <div class="fbox-icon">
                    <a href="https://www.google.com/maps?ll=14.991355,102.120842&z=13&t=m&hl=en&gl=TH&mapclient=embed&cid=15023846250679050858" target="_blank"><i class="icon-map-marker2"></i></a>
                </div>
                <h3>
                    1340/25 ถ.สุรนารายน์ <br>ต.ในเมือง อ.เมือง จ.นครราชสีมา<br>
                    <span class="subtitle">11:00 - 20:00 น.</span>
                </h3>
                <a href="https://www.google.com/maps?ll=14.991355,102.120842&z=13&t=m&hl=en&gl=TH&mapclient=embed&cid=15023846250679050858" class="button button-large button-circle button-aqua active">เปิดแผนที่</a>
            </div>
        </div>

        <div class="col-md-12 col-lg-3 bottommargin clearfix">
            <div class="feature-box fbox-center fbox-bg fbox-plain">
                <div class="fbox-icon">
                    <a href="tel:0986539889"><i class="icon-phone3"></i></a>
                </div>
                <h3>
                    Speak to Us<span class="subtitle">098-653-9889</span>
                </h3>
                <br>
                <a href="tel:0986539889" class="button button-large button-circle button-aqua active">คุยกับเจ้าหน้าที่</a>
            </div>
        </div>

        <div class="col-md-12 col-lg-3 bottommargin clearfix">
            <div class="feature-box fbox-center fbox-bg fbox-plain">
                <div class="fbox-icon">
                    <a href="https://www.facebook.com/doctorbigclinic/" target="_blank"><i class="icon-facebook"></i></a>
                </div>
                <h3>
                    Facebook<span class="subtitle"><a href="https://www.facebook.com/doctorbigclinic/" target="_blank"> doctorbigclinic</a></span>
                </h3>
                <br>
                <a href="https://www.facebook.com/doctorbigclinic/" class="button button-large button-circle button-aqua active">ไปที่ Fanpage</a>
            </div>
        </div>

        <div class="col-md-12 col-lg-3 bottommargin clearfix">
            <div class="feature-box fbox-center fbox-bg fbox-plain">
                <div class="fbox-icon">
                    <a href="https://lin.ee/6kPReXr" target="_blank"><i class="icon-line"></i></a>
                </div>
                <h3>
                    Line<span class="subtitle"><a href="https://lin.ee/6kPReXr" target="_blank"> doctorbigclinic</a></span>
                </h3>
                <br>
                <a href="https://lin.ee/6kPReXr" class="button button-large button-circle button-aqua active">ไปที่ Line</a>
            </div>
        </div>
    </div>
</div>

<footer id="footer" class="dark" style="background-color: #202932;">

    <div class="container">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap clearfix">

            <div class="col_one_third" style="width: 50%;">

                <div class="col_half">

                    <div class="widget clearfix">

                        <img src="{{ asset('/landing/footer-widget-logo.png') }}" alt="" class="footer-logo">

                        <p>DR.BIG Clinic <strong>เสริมจมูกเกาหลีแท้</strong> <strong>เสริมคาง</strong> <strong>ปรับรูปหน้า</strong> ดูแลผิว By <strong>หมอบิ๊ก</strong></p>

                    </div>

                </div>

                <div class="col_last">

                    <div class="widget widget_links clearfix">

                        <ul>
                            <li class="{{ isActiveLink('/') ? 'current' : '' }}"><a href="{{ route('landing-page') }}"><div>{{ __('landing_page.menu.home') }}</div></a></li>
                            <li class="{{ isActiveLink('features') ? 'current' : '' }}"><a href="{{ route('landing-features') }}"><div>{{ __('landing_page.menu.features') }}</div></a></li>
                            <li class="{{ isActiveLink('promotions') ? 'current' : '' }}"><a href="{{ route('landing-promotion') }}"><div>{{ __('landing_page.menu.promotion') }}</div></a></li>
                            <li class="{{ isActiveLink('image-gallery') ? 'current' : '' }}"><a href="{{ route('landing-image-gallery') }}"><div>{{ __('landing_page.menu.pic_review') }}</div></a></li>
                            <li class="{{ isActiveLink('clip-gallery') ? 'current' : '' }}"><a href="{{ route('landing-video') }}"><div>{{ __('landing_page.menu.clip_review') }}</div></a></li>
{{--                            <li class="{{ isActiveLink('about-us') ? 'current' : '' }}"><a href="{{ route('landing-about-us') }}"><div>{{ __('landing_page.menu.about_us') }}</div></a></li>--}}
                            <li class="{{ isActiveLink('contact-us') ? 'current' : '' }}"><a href="{{ route('landing-contact-us') }}"><div>{{ __('landing_page.menu.contact_us') }}</div></a></li>
                        </ul>

                    </div>

                </div>

            </div>

            <div class="col_one_third col_last">

                <div class="fb-page" data-href="https://www.facebook.com/doctorbigclinic/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/doctorbigclinic/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/doctorbigclinic/">DR.BIG Clinic เสริมจมูกเกาหลีแท้ เสริมคาง ปรับรูปหน้า ดูแลผิว By หมอบิ๊ก</a></blockquote></div>

            </div>

        </div><!-- .footer-widgets-wrap end -->

    </div>
</footer><!-- #footer end -->
