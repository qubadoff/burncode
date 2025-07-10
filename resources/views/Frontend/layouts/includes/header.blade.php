<!-- Header Start -->
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="{{ route("index", ['locale' => app()->getLocale()]) }}">
                    <img src="{{ url('/') }}/storage/{{ siteInfo()->logo }}" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item"><a class="nav-link" href="{{ route('index', ['locale' => app()->getLocale()]) }}">{{ __('Home') }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('services', ['locale' => app()->getLocale()]) }}">{{ __('Our Services') }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('products', ['locale' => app()->getLocale()]) }}">{{ __('Our Products') }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('projects', ['locale' => app()->getLocale()]) }}">{{ __('Our Projects') }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('news', ['locale' => app()->getLocale()]) }}">{{ __('Our News') }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('team', ['locale' => app()->getLocale()]) }}">{{ __('Our Team') }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact', ['locale' => app()->getLocale()]) }}">{{ __('Contact') }}</a></li>
                        </ul>
                    </div>
                    <!-- Let’s Start Button Start -->
                    <div class="header-btn d-inline-flex">
                        <a href="/admin" target="_blank" class="btn-default">{{__("Dashboard")}}</a>
                    </div>
                    <!-- Let’s Start Button End -->
                </div>
                <!-- Main Menu End -->

                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
<!-- Header End -->
