@extends('layouts.landing.landing_layout')

@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h1>Promotion</h1>
        </div>
    </section>
    <section id="content" class="content-wrap">
        <div class="nobottommargin">
            <div class="container clearfix pt-5">
                @foreach(\App\Models\Promotion::orderBy('id', 'desc')->get() as $promotion)
                    <div class="nobottommargin" style="display: block;position: relative;margin-right: 4%;margin-bottom: 50px;float: left;">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img src="{{ asset($promotion->image_path) }}" style="max-width: 330px;" alt="Why choose Us?">
                            </div>
                            <div class="fbox-desc">
                                <h3>{!! $promotion->title !!}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- #content end -->
@endsection
