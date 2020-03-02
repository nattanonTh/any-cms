@extends('layouts.landing.landing_layout')

@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h1>PROMOTION</h1>
        </div>
    </section>
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Posts
                ============================================= -->
                <div id="posts" class="post-grid grid-container grid-3 clearfix" data-layout="fitRows">

                    @foreach(\App\Models\Promotion::all() as $promotion)
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <a href="{{ route('show-promotion', $promotion->id) }}"><img class="image_fade" src="{!! $promotion->image_path !!}" alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-title">
                                <h2><a href="{{ route('show-promotion', $promotion->id) }}">{{ $promotion->title }}</a></h2>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> {{ $promotion->created_at->format('d/m/Y') }}</li>
                            </ul>
                        </div>

                    @endforeach


                </div><!-- #posts end -->

            </div>

        </div>

    </section><!-- #content end -->

@endsection
