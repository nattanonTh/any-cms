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
                                    <a href="{{ route('show-features', $blog->id) }}"><img class="image_fade" src="{!! $blog->image_path !!}" alt="Image"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-12">
                    <div class="text-center">
                        <a href="{{ route('landing-features') }}">ดูทั้งหมด >></a>
                    </div>
                </div>
            </div>
            <section id="section-about" class="page-section">
                <div class="section dark parallax nobottommargin" style="padding: 180px 0;background-image: url('{{ asset('images/landing/Image 36.png') }}');" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
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
            </section>
            <section>
                <div class="container clearfix pt-5">
                    @foreach(\App\Models\Promotion::orderBy('id', 'desc')->take(3)->get() as $promotion)
                        <div class="nobottommargin" style="display: block;position: relative;margin-right: 4%;margin-bottom: 50px;float: left;">
                            <div class="feature-box media-box">
                                <div class="fbox-media">
                                    <a href="{{ route('show-promotion', $promotion->id) }}"><img src="{{ asset($promotion->image_path) }}" style="max-width: 330px;" alt="Why choose Us?"></a>
                                </div>
                                <div class="fbox-desc">
                                    <a href="{{ route('show-promotion', $promotion->id) }}"><h3>{!! $promotion->title !!}</h3></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row pt-2">
                    <div class="col-12">
                        <div class="text-center">
                            <a href="{{ route('landing-promotion') }}">ดูทั้งหมด >></a>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </section>
            <div class="pt-5 nobottommargin">
                <div class="container clearfix">
                    <hr>
                    <div class="clear"></div>
                    <div id="portfolio" class="portfolio grid-container portfolio-nomargin clearfix" style="position: relative; height: 887.25px;">
                        @foreach(\App\Models\Image::orderBy('id', 'desc')->take(12)->get() as $image)
                            <article class="portfolio-item pf-media pf-icons" style="position: absolute; left: 0px; top: 0px;">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="{{ $image->path }}" alt="Open Imagination">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="{{ $image->path }}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                        <a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <div class="row pt-2">
                        <div class="col-12">
                            <div class="text-center">
                                <a href="{{ route('landing-image-gallery') }}">ดูทั้งหมด >></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row pt-5">
                    <div class="col-sm-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30832.194581248194!2d102.120842!3d14.991355!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd07f6c90b3cf226a!2sDR.BIG%20Clinic!5e0!3m2!1sen!2sth!4v1583133541099!5m2!1sen!2sth" width="1500" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #content end -->
@endsection
