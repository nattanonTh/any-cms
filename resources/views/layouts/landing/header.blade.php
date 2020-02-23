<header id="header" class="sticky-style-2">
    <div class="container clearfix">
        <!-- Logo
        ============================================= -->
        <div id="logo" class="divcenter">
            <a href="#" class="standard-logo" data-dark-logo="{{ asset('/images/landing/logo.png') }}"><img class="divcenter" src="{{ asset('/images/landing/logo.png') }}" alt="Canvas Logo"></a>
            <a href="#" class="retina-logo" data-dark-logo="{{ asset('/images/landing/logo.png') }}"><img class="divcenter" src="{{ asset('/images/landing/logo.png') }}" alt="Canvas Logo"></a>
        </div><!-- #logo end -->
    </div>
    <div id="header-wrap">
        <!-- Primary Navigation
        ============================================= -->
        <nav id="primary-menu" class="style-2 center">
            <div class="container clearfix">
                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                <ul>
                    <li class="{{ isActiveLink('/') ? 'current' : '' }}"><a href="{{ route('landing-page') }}"><div>{{ __('landing_page.menu.home') }}</div></a></li>
                    <li class="{{ isActiveLink('features') ? 'current' : '' }}"><a href="{{ route('landing-features') }}"><div>{{ __('landing_page.menu.features') }}</div></a></li>
                    <li class="{{ isActiveLink('promotion') ? 'current' : '' }}"><a href="{{ route('landing-promotion') }}"><div>{{ __('landing_page.menu.promotion') }}</div></a></li>
                    <li class="{{ isActiveLink('image-gallery') ? 'current' : '' }}"><a href="{{ route('landing-image-gallery') }}"><div>{{ __('landing_page.menu.pic_review') }}</div></a></li>
                    <li class="{{ isActiveLink('clip-gallery') ? 'current' : '' }}"><a href="{{ route('landing-page') }}"><div>{{ __('landing_page.menu.clip_review') }}</div></a></li>
                    <li class="{{ isActiveLink('about-us') ? 'current' : '' }}"><a href="{{ route('landing-page') }}"><div>{{ __('landing_page.menu.about_us') }}</div></a></li>
                    <li class="{{ isActiveLink('contact-us') ? 'current' : '' }}"><a href="{{ route('landing-page') }}"><div>{{ __('landing_page.menu.contact_us') }}</div></a></li>
                </ul>
            </div>
        </nav><!-- #primary-menu end -->
    </div>
</header><!-- #header end -->
