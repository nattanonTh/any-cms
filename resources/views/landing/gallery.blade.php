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
                        <div class="col_full nobottommargin clearfix">
                            <div class="masonry-thumbs grid-6" data-big="3" data-lightbox="gallery">
                                @foreach(\App\Models\Image::orderBy('id', 'desc')->get() as $image)
                                    <a href="{{ asset($image->path) }}" data-lightbox="gallery-item"><img class="image_fade" src="{{ asset($image->path) }}" alt="Gallery Thumb 1"></a>
                                @endforeach
                            </div>
                        </div>
                    </div>
            </div>
    </section><!-- #content end -->
@endsection
