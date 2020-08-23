@extends('layouts.landing.landing_layout')

@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h1>Contact us</h1>
        </div>
    </section>
{{--    <section id="content">--}}

{{--        <div class="content-wrap">--}}

{{--            <div class="container clearfix">--}}

{{--                <!-- Postcontent--}}
{{--                ============================================= -->--}}
{{--                <div class="postcontent nobottommargin" >--}}

{{--                    <div class="form-widget">--}}

{{--                        <div class="form-result"></div>--}}

{{--                        <form method="POST" action="{{ route('contact.save') }}" class="" >--}}
{{--                            @csrf--}}
{{--                            <div class="form-process"></div>--}}

{{--                            <div class="col_one_third">--}}
{{--                                <label for="template-contactform-name">Name <small>*</small></label>--}}
{{--                                <input type="text" id="template-contactform-name" name="name" value="" class="sm-form-control required" />--}}
{{--                                @error('name')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

{{--                            <div class="col_one_third">--}}
{{--                                <label for="template-contactform-email">Email <small>*</small></label>--}}
{{--                                <input type="email" id="template-contactform-email" name="email" value="" class="required email sm-form-control" />--}}
{{--                                @error('email')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

{{--                            <div class="col_one_third col_last">--}}
{{--                                <label for="template-contactform-phone">Phone</label>--}}
{{--                                <input type="text" id="template-contactform-phone" name="phone" value="" class="sm-form-control required" />--}}
{{--                                @error('phone')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

{{--                            <div class="clear"></div>--}}

{{--                            <div class="col_full">--}}
{{--                                <label for="template-contactform-message">Message <small>*</small></label>--}}
{{--                                <textarea class="sm-form-control" id="template-contactform-message" name="message" rows="6" cols="30"></textarea>--}}
{{--                                @error('message')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

{{--                            <div class="col_full">--}}
{{--                                <button class="button button-3d nomargin" type="submit" name="template-contactform-submit" value="submit">Submit</button>--}}
{{--                            </div>--}}

{{--                            <input type="hidden" name="prefix" value="template-contactform-">--}}

{{--                        </form>--}}
{{--                    </div>--}}

{{--                </div><!-- .postcontent end -->--}}

{{--            </div>--}}

{{--        </div>--}}

{{--    </section><!-- #content end -->--}}
@endsection
