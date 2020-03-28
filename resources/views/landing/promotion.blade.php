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

                <div class="single-post nobottommargin">

                    <!-- Single Post
                    ============================================= -->
                    <div class="entry clearfix">

                        <!-- Entry Title
                        ============================================= -->
                        <div class="entry-title">
                            <h2>{{ $promotion->title }}</h2>
                        </div><!-- .entry-title end -->

                        <!-- Entry Meta
                        ============================================= -->
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> {{ $promotion->created_at->format('d/m/Y') }}</li>
                        </ul><!-- .entry-meta end -->

                        <!-- Entry Image
                        ============================================= -->
                        <div class="entry-image bottommargin">
                            <img src="{!! asset($promotion->image_path) !!}" alt="Blog Single">
                        </div><!-- .entry-image end -->

                        <!-- Entry Content
                        ============================================= -->
                        <div class="entry-content notopmargin">

                        {!! $promotion->content !!}

                        </div>

                        <div class="text-center pt-5">
                            <a class="button button-large button-circle button-aqua active" href="https://lin.ee/6kPReXr" style="background-color: #182643">
                                สอบถามเพิ่มเติม/ชื้อและจองคิว
                            </a>
                        </div>
                    </div><!-- .entry end -->
                </div>

            </div>

        </div>

    </section><!-- #content end -->

@endsection
