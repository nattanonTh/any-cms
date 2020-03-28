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
                    @if($tags->count() > 0)
                        <div class="row">
                            <div class="col-md-12">
                                <ul id="portfolio-filter" class="portfolio-filter clearfix">
                                    <li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
                                    @foreach($tags as $tag)
                                        @if($tag->image->count() > 0)
                                        <li class=""><a href="#" data-filter=".f-{{ $tag->id }}">{{ $tag->tag_name }}</a>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                    <div class="clear"></div>
                    <div class="col_full nobottommargin clearfix">
                        <div id="demo-gallery" class="masonry-thumbs grid-6" data-big="1" data-lightbox="gallery">
                            @foreach(\App\Models\Image::orderBy('id', 'desc')->get() as $image)
                                <a href="{{ $image->path }}" data-lightbox="gallery-item" class="f-{{ $image->tags_id }}"><img class="image_fade" src="{{ $image->thumb_path }}" alt="Gallery"></a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
    </section><!-- #content end -->
@endsection

@push('script')
    <script>
        $(function () {
            jQuery(window).on( 'load', function(){

                var $container = $('#demo-gallery');
                $('#portfolio-filter a').click(function(){
                    $('#portfolio-filter li').removeClass('activeFilter');
                    $(this).parent('li').addClass('activeFilter');
                    var selector = $(this).attr('data-filter');
                    $container.isotope({ filter: selector });
                    return false;
                });

            });
        });
    </script>
@endpush
