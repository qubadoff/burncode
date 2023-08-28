<header class="main-header transparent">
    <div class="container">
        <div class="navigation-wrapper">
            <div class="navigation-inner">
                <div class="site-logo">
                    <a href="{{ route("index") }}"><img src="{{ url('/') }}/storage/{{ siteInfo()->logo }}" alt="{{ siteInfo()->name }}"></a>
                </div>
                <nav class="navigation-menu">
                    <ul class="main-menu">
                        <li><a href="{{ route("index") }}">{{__("Home")}}</a></li>
                        <li><a href="{{ route("services") }}">{{__("Our services")}}</a></li>
                        <li><a href="{{ route("projects") }}">{{__("Our Projects")}}</a></li>
                        <li><a href="{{ route("news") }}">{{__("Our News")}}</a></li>
                        <li><a href="{{ route("team") }}">{{__("Our Team")}}</a></li>
                        <li><a href="{{ route("contact") }}">{{__("Contact")}}</a></li>
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
