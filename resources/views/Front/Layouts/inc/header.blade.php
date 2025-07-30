<header class="main-header transparent">
    <div class="container">
        <div class="navigation-wrapper">
            <div class="navigation-inner">
                <div class="site-logo">
                    <a href="{{ route("index", ['locale' => app()->getLocale()]) }}"><img src="{{ url('/') }}/storage/{{ siteInfo()->logo }}" alt="{{ siteInfo()->name }}"></a>
                </div>
                <nav class="navigation-menu">
                    <ul class="main-menu">
                        <li><a href="{{ route('index', ['locale' => app()->getLocale()]) }}">{{ __('Home') }}</a></li>
                        <li><a href="{{ route('services', ['locale' => app()->getLocale()]) }}">{{ __('Our Services') }}</a></li>
                        <li><a href="{{ route('products', ['locale' => app()->getLocale()]) }}">{{ __('Our Products') }}</a></li>
                        <li><a href="{{ route('projects', ['locale' => app()->getLocale()]) }}">{{ __('Our Projects') }}</a></li>
                        <li><a href="{{ route('news', ['locale' => app()->getLocale()]) }}">{{ __('Our News') }}</a></li>
                        <li><a href="{{ route('team', ['locale' => app()->getLocale()]) }}">{{ __('Our Team') }}</a></li>
                        <li><a href="{{ route('contact', ['locale' => app()->getLocale()]) }}">{{ __('Contact') }}</a></li>

                        <li>
                            <select
                                class="form-select btn btn-warning"
                                onchange="location = this.value;"
                                aria-label="Lang"
                            >
                                <option disabled>{{ __('Language') }}</option>
                                <option value="{{ url('/') }}/en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>EN</option>
                                <option value="{{ url('/') }}/az" {{ app()->getLocale() == 'az' ? 'selected' : '' }}>AZ</option>
                                <option value="{{ url('/') }}/ru" {{ app()->getLocale() == 'ru' ? 'selected' : '' }}>RU</option>
                            </select>
                        </li>
                    </ul>
                </nav>
                <div class="header-right">
                    <a href="/admin" class="default-btn d-none d-md-block">
                        {{__("Dashboard")}}
                    </a>
                    <button class="sidebar-trigger open">
                        <svg class="trigger-opener" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="12.7px"
                             viewBox="0 0 16 12.7" style="enable-background:new 0 0 16 12.7;" xml:space="preserve">
                                <g>
                                    <rect x="5" y="8.4" width="11" height="2" />
                                    <rect x="0" y="2.4" width="16" height="2" />
                                </g>
                            </svg>
                    </button>
                    <div class="mobile-menu-icon">
                        <div class="burger-menu">
                            <div class="line-menu line-half first-line"></div>
                            <div class="line-menu"></div>
                            <div class="line-menu line-half last-line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
