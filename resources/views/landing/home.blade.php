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
                <div class="section dark parallax nobottommargin" style="padding: 100px 0;background-image: url('{{ asset('images/landing/Image 36.png') }}');" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
                    <div class="container clearfix">
                        <div class="nobottommargin " data-animate="bounceIn">
                            <a href="tel:043-333333333" class="button button-large button-circle button-aqua active">คุยกับเรา 043-333333333</a>
                        </div>
                    </div>
                </div>
                <div class="section notopmargin noborder nobottommargin" style="background-color: white">
                    <div class="container clearfix">
                        <div class="heading-block center nobottommargin">
                            <h2>โปรโมชัน</h2>
                            <span>ติดตามโปรโมชันต่างๆ ไม่พลาดทุกโปรสุดคุ้มได้ที่นี่เลย</span>
                        </div>
                    </div>
                </div>
                <div class="container clearfix pt-5">
                    @foreach(\App\Models\Promotion::orderBy('id', 'desc')->take(6)->get() as $promotion)
                        <div class="col_one_third nobottommargin">
                            <div class="feature-box media-box">
                                <div class="fbox-media">
                                    <img src="{{ asset($promotion->image_path) }}" alt="Why choose Us?">
                                </div>
                                <div class="fbox-desc">
                                    <h3>{!! $promotion->title !!}</h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="clear"></div>
            </section>
            <div class="section nobottommargin">
                <div class="container clearfix">
                    <div class="clear"></div>

                    <div id="portfolio" class="portfolio grid-container portfolio-nomargin clearfix" style="position: relative; height: 887.25px;">
                        <article class="portfolio-item pf-media pf-icons" style="position: absolute; left: 0px; top: 0px;">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="images/portfolio/4/1.jpg" alt="Open Imagination">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="images/portfolio/full/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Open Imagination</a></h3>
                                <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #content end -->
@endsection
