@extends('layouts.landing.landing_layout')

@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h1>Video Gallery</h1>
        </div>
    </section>
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Posts
                ============================================= -->
                <div id="posts" class="post-grid grid-container grid-2 clearfix" data-layout="fitRows">

                    @foreach(\App\Models\Video::all() as $video)
                        <div class="entry clearfix">
                            {!! $video->link !!}
                        </div>

                    @endforeach


                </div><!-- #posts end -->

            </div>

        </div>

    </section><!-- #content end -->

@endsection
