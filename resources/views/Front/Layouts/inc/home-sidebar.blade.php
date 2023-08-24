<div id="sidebar-area" class="sidebar-area">
    <button class="sidebar-trigger close">
        <svg class="sidebar-close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px" width="16px" height="12.7px" viewBox="0 0 16 12.7"
             style="enable-background:new 0 0 16 12.7;" xml:space="preserve">
                <g>
                    <rect x="0" y="5.4" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.1569 7.5208)" width="16"
                          height="2"></rect>
                    <rect x="0" y="5.4" transform="matrix(0.7071 0.7071 -0.7071 0.7071 6.8431 -3.7929)" width="16"
                          height="2"></rect>
                </g>
            </svg>
    </button>
    <div class="sidebar-content">
        <div class="site-logo">
            <a href="{{ route("index") }}"><img src="{{ url('/') }}/storage/{{ siteInfo()->logo }}" alt="logo"></a>
        </div>
        <p>
            {{ siteInfo()->location }}
        </p>
        <ul class="sidebar-info">
            <li><span>Phone :</span> <a href="tel:{{ siteInfo()->phone }}">{{ siteInfo()->phone }}</a> </li>
            <li><span>Email:</span> <a href="mailto:{{ siteInfo()->email }}">{{ siteInfo()->email }}</a></li>
        </ul>
        <ul class="sidebar-social">
            <li><a href="{{ siteInfo()->facebook_page }}"><i class="lab la-facebook-f"></i></a></li>
            <li><a href="{{ siteInfo()->twitter_page }}"><i class="lab la-twitter"></i></a></li>
            <li><a href="{{ siteInfo()->youtube_page }}"><i class="lab la-youtube"></i></a></li>
            <li><a href="{{ siteInfo()->instagram_page }}"><i class="lab la-instagram"></i></a></li>
            <li><a href="{{ siteInfo()->linkedin_page }}"><i class="lab la-linkedin"></i></a></li>
        </ul>
    </div>
</div>

<div id="sidebar-overlay"></div>
