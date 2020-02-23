@extends('layouts.landing.landing_layout')

@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h1>Blog</h1>
        </div>
    </section>
    <section id="content" class="content-wrap">
        <div class="container clear-bottommargin clearfix">
            <div class="row">
                @foreach(\App\Models\Blog::all() as $blog)
                    <div class="col-lg-6 col-md-6 bottommargin">
                        <div class="ipost clearfix">
                            <div class="entry-image">
                                <a href="#"><img class="image_fade" src="{!! $blog->image_path !!}" alt="Image"></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- #content end -->
@endsection
