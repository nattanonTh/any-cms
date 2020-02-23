@extends('layouts.landing.landing_layout')

@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h1>Gallery</h1>
        </div>
    </section>
    <section id="content" class="content-wrap">
            <div class="nobottommargin">
                <div class="container clearfix">
                    <div class="clear"></div>
                    <div id="portfolio" class="portfolio grid-container portfolio-nomargin clearfix" style="position: relative; height: 887.25px;">
                        @foreach(\App\Models\Image::orderBy('id', 'desc')->get() as $image)
                            <article class="portfolio-item pf-media pf-icons" style="position: absolute; left: 0px; top: 0px;">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="{{ $image->path }}" alt="Open Imagination">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="{{ $image->path }}" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
    </section><!-- #content end -->
@endsection
