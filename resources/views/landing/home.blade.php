@extends('layouts.landing.landing_layout')

@section('content')
    @include('layouts.landing.slider', ['banners' => \App\Models\Banner::all()])
    <section id="content">
        <div class="text-center" style="padding-top: 10px;background-color: #182643;">
            <h3 style="color: white">รับสิทธิประโยชน์ก่อนใคร เลือกเลยตอนนี้</h3>
        </div>
        <div class="content-wrap">
            <div class="container clear-bottommargin clearfix">
                <div class="row">
                    @foreach(\App\Models\Blog::take(8)->get() as $blog)
                        <div class="col-lg-3 col-md-6 bottommargin">
                            <div class="ipost clearfix">
                                <div class="entry-image">
                                    <a href="#"><img class="image_fade" src="{!! $blog->image_path !!}" alt="Image"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-12">
                    <div class="text-center">
                        <a href="">ดูทั้งหมด >></a>
                    </div>
                </div>
            </div>
            <section id="section-about" class="page-section">
                <div class="section dark parallax nobottommargin" style="padding: 80px 0;background-image: url('{{ asset('images/landing/Image 36.png') }}');" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

                    <div class="container clearfix">

                        <div class="col_one_fourth nobottommargin center" data-animate="bounceIn">
                            <i class="i-plain i-xlarge divcenter nobottommargin icon-code"></i>
                            <div class="counter counter-lined"><span data-from="100" data-to="846" data-refresh-interval="50" data-speed="2000"></span>K+</div>
                            <h5>Lines of Codes</h5>
                        </div>

                        <div class="col_one_fourth nobottommargin center" data-animate="bounceIn" data-delay="200">
                            <i class="i-plain i-xlarge divcenter nobottommargin icon-magic"></i>
                            <div class="counter counter-lined"><span data-from="3000" data-to="15360" data-refresh-interval="100" data-speed="2500"></span>+</div>
                            <h5>KBs of HTML Files</h5>
                        </div>

                        <div class="col_one_fourth nobottommargin center" data-animate="bounceIn" data-delay="400">
                            <i class="i-plain i-xlarge divcenter nobottommargin icon-file-text"></i>
                            <div class="counter counter-lined"><span data-from="10" data-to="386" data-refresh-interval="25" data-speed="3500"></span>*</div>
                            <h5>No. of Templates</h5>
                        </div>

                        <div class="col_one_fourth nobottommargin center col_last" data-animate="bounceIn" data-delay="600">
                            <i class="i-plain i-xlarge divcenter nobottommargin icon-time"></i>
                            <div class="counter counter-lined"><span data-from="60" data-to="1200" data-refresh-interval="30" data-speed="2700"></span>+</div>
                            <h5>Hours of Coding</h5>
                        </div>

                    </div>

                </div>
                <div class="container clearfix">
                    <div class="col_one_third nobottommargin">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img src="{{ asset('/landing/images/services/1.jpg') }}" alt="Why choose Us?">
                            </div>
                            <div class="fbox-desc">
                                <h3>Why choose Us.<span class="subtitle">Because we are Reliable.</span></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col_one_third nobottommargin">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img src="{{ asset('/landing/images/services/2.jpg') }}" alt="Why choose Us?">
                            </div>
                            <div class="fbox-desc">
                                <h3>Our Mission.<span class="subtitle">To Redefine your Brand.</span></h3>
                                <p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum molestias quo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col_one_third nobottommargin col_last">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img src="{{ asset('/landing/images/services/3.jpg') }}" alt="Why choose Us?">
                            </div>
                            <div class="fbox-desc">
                                <h3>What we Do.<span class="subtitle">Make our Customers Happy.</span></h3>
                                <p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore totam. Accusamus perspiciatis asperiores labore esse ab accusantium ea modi ut.</p>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </section>
        </div>
    </section><!-- #content end -->
@endsection
