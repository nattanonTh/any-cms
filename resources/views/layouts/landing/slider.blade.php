<section id="slider" class="slider-element slider-parallax swiper_wrapper clearfix">
    <div class="swiper-container swiper-parent">
        <div class="swiper-wrapper">
            @foreach($banners as $banner)
            <div class="swiper-slide" onclick="clickSlide(this)" data-url="{!! $banner->link !!}" style="background-image: url({{ asset($banner->image_path) }}); background-position: center top;">
            </div>
            @endforeach
        </div>
        @if ($banners->count() > 1)
        <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
        <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
        <div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
        @endif
    </div>
</section>
<script>
    function clickSlide(el) {
        if (el != '') {
            window.open(el.dataset.url);
        }
    }
</script>
