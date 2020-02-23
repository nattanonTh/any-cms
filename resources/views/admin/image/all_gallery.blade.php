@extends('layouts.app')

@section('content')
<section id="page-title">

	<div class="container clearfix">
		<h1>{!! __('home.menu_6') !!}</h1>

	</div>

</section>

<!-- Content ============================================= -->
<section id="content">
	<div class="content-wrap">

		<div class="container clearfix" style="margin-top: 35px" id="product">
			<!-- Shop
					============================================= -->
			<div id="shop" class="shop grid-container clearfix" data-layout="fitRows">
				<div class="col_full clearfix">

					@if (count($iamgeList) > 0)
					<div class="masonry-thumbs grid-4" data-big="4" data-lightbox="gallery">
						@foreach ($iamgeList as $image)
						<a href="{{ $image->path }}" data-lightbox="gallery-item">
							<img class="image_fade" src="{{ $image->path }}" alt="Gallery Thumb 1"></a>
						@endforeach
					</div>
					@else
					<div class="masonry-thumbs grid-4" data-big="4" data-lightbox="gallery">
						<a href="images/portfolio/full/1.jpg" data-lightbox="gallery-item"><img class="image_fade"
								src="images/portfolio/4/1.jpg" alt="Gallery Thumb 1"></a>
						<a href="images/portfolio/full/2.jpg" data-lightbox="gallery-item"><img class="image_fade"
								src="images/portfolio/4/2.jpg" alt="Gallery Thumb 2"></a>
						<a href="images/portfolio/full/3.jpg" data-lightbox="gallery-item"><img class="image_fade"
								src="images/portfolio/4/3.jpg" alt="Gallery Thumb 3"></a>
						<a href="images/portfolio/full/4.jpg" data-lightbox="gallery-item"><img class="image_fade"
								src="images/portfolio/4/4.jpg" alt="Gallery Thumb 4"></a>
						<a href="images/portfolio/full/5.jpg" data-lightbox="gallery-item"><img class="image_fade"
								src="images/portfolio/4/5.jpg" alt="Gallery Thumb 5"></a>
						<a href="images/portfolio/full/6.jpg" data-lightbox="gallery-item"><img class="image_fade"
								src="images/portfolio/4/6.jpg" alt="Gallery Thumb 6"></a>
						<a href="images/portfolio/full/7.jpg" data-lightbox="gallery-item"><img class="image_fade"
								src="images/portfolio/4/7.jpg" alt="Gallery Thumb 7"></a>
						<a href="images/portfolio/full/9.jpg" data-lightbox="gallery-item"><img class="image_fade"
								src="images/portfolio/4/9.jpg" alt="Gallery Thumb 9"></a>
						<a href="images/portfolio/full/10.jpg" data-lightbox="gallery-item"><img class="image_fade"
								src="images/portfolio/4/10.jpg" alt="Gallery Thumb 10"></a>
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>

</section>
<!-- #content end -->
@endsection