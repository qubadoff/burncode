<section class="hero-section">
    <div class="container">
        @if(!is_null(offers()))
            @foreach(offers() as $offer)
                <div class="card">
                    <div class="card-body">
                        {!! $offer->body !!}
                    </div>
                </div>
            @endforeach
        @endif
        <div class="row hero-wrap">
            <div class="col-lg-7 sm-padding">
                <div class="hero-content">
                    <h1>
                        {{__("Bring your business to the virtual world with Burncode.")}}
                    </h1>
                    <p>
                        {{__("Burncode company has been serving its customers for more than 2 years. During this period, we have implemented a number of small and large projects. We offer you quality work and a reasonable price.")}}
                    </p>
                    <div class="btn-group">
                        <a href="{{ route("contact") }}" class="default-btn">{{__("Get start")}}</a>
                        <a class="play-btn venobox" data-vbtype="video"
                           href="{{ siteInfo()->slider_video_url }}">
                                <span class="play-icon">
                                    <svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="currentColor"
                                              d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z">
                                        </path>
                                    </svg>
                                </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 sm-padding">
                <div class="hero-img-holder">
                    <div class="animated-shape"></div>
                    <div class="js-atropos">
                        <div class="atropos-scale">
                            <div class="atropos-rotate">
                                <div class="atropos-inner">
                                    <div class="parallax-item">
                                        <img data-atropos-offset="-3" src="{{ url('/') }}/assets/img/illustration07.png" alt="img">
                                    </div>
                                    <div data-atropos-offset="3" class="hero-elements">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="animated-dots">
        <span class="dot lf-left-right"></span>
        <span class="dot lf-up-down"></span>
        <span class="dot lf-up-down"></span>
        <span class="dot lf-rotate-center"></span>
        <span class="dot lf-left-right"></span>
        <span class="dot lf-rotate-center"></span>
    </div>
</section>
