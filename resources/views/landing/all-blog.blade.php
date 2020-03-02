@extends('layouts.landing.landing_layout')

@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h1>SERVICES</h1>
        </div>
    </section>
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Posts
                ============================================= -->
                <div id="posts" class="post-grid grid-container grid-3 clearfix" data-layout="fitRows">

                    @foreach(\App\Models\Blog::all() as $blog)
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <a href="{{ route('show-features', $blog->id) }}"><img class="image_fade" src="{!! $blog->image_path !!}" alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-title">
                                <h2><a href="{{ route('show-features', $blog->id) }}">{{ $blog->title }}</a></h2>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> {{ $blog->created_at->format('d/m/Y') }}</li>
                            </ul>
                        </div>

                    @endforeach


                </div><!-- #posts end -->

            </div>

        </div>

    </section><!-- #content end -->

@endsection
