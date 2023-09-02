<footer class="footer-section">
    <div class="container">
        <div class="row footer-area">
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="footer-widget">
                    <a class="footer-logo" href="{{ route("index") }}"><img src="{{ url('/') }}/storage/{{ siteInfo()->logo }}" alt="logo"></a>
                    <p>
                        {{ siteInfo()->description }}
                    </p>
                    <ul class="footer-social">
                        <li><a href="{{ siteInfo()->facebook_page }}" target="_blank"><i class="lab la-facebook-f"></i></a></li>
                        <li><a href="{{ siteInfo()->twitter_page }}" target="_blank"><i class="lab la-twitter"></i></a></li>
                        <li><a href="{{ siteInfo()->youtube_page }}" target="_blank"><i class="lab la-youtube"></i></a></li>
                        <li><a href="{{ siteInfo()->instagram_page }}" target="_blank"><i class="lab la-instagram"></i></a></li>
                        <li><a href="{{ siteInfo()->linkedin_page }}" target="_blank"><i class="lab la-linkedin"></i></a></li>
                        <li><a rel="me" href="https://mastodon.social/@burncode" target="_blank"><i class="lab la-mastodon"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="footer-widget">
                    <h3>{{__("Pages")}}</h3>
                    <ul class="footer-list">
                        <li><a href="{{ route("index") }}">{{__("Home")}}</a></li>
                        <li><a href="{{ route("services") }}">{{__("Our services")}}</a></li>
                        <li><a href="{{ route("projects") }}">{{__("Our Projects")}}</a></li>
                        <li><a href="{{ route("news") }}">{{__("Our News")}}</a></li>
                        <li><a href="{{ route("team") }}">{{__("Our Team")}}</a></li>
                        <li><a href="https://forum.burncode.az" target="_blank">{{__("Our Forum")}}</a></li>
                        <li><a href="{{ route("contact") }}">{{__("Contact")}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="footer-widget">
                    <h3>{{__("Information")}}</h3>
                    <ul class="footer-list">
                        <li>
                            <p>{{ siteInfo()->location }}</p>
                        </li>
                        <li><a href="tel:{{ siteInfo()->phone }}">{{ siteInfo()->phone }}</a></li>
                        <li><a href="mailto:{{ siteInfo()->email }}"><span>{{ siteInfo()->email }}</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="footer-widget subscribe">
                    <img class="subscribe-img" src="{{ url('/') }}/assets/img/illustration06.png" alt="illustration">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                \Illuminate\Support\Facades\Session::forget('success');
                            @endphp
                        </div>
                    @endif
                    @if($errors->any())
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    @endif
                    <form action="{{ route("subscribeSend") }}" method="POST" class="subscribe-form">
                        @csrf
                        @method("POST")
                        <div class="mc-fields">
                            <input class="form-control" type="email" name="email" placeholder="{{__("Your Email")}}" required>
                            <button name="submit" class="submit">{{__("Subscribe")}}</button>
                        </div>
                        <div class="clearfix"></div>
                        <div id="mc-form-messages" class="alert" role="alert"></div>
                    </form>
                    <p>
                        {{__("Subscribe us and get all the benifits from today.")}}
                    </p>
                </div>
            </div>
        </div>
        <div class="copyright-text">
            © <span id="currentYear"></span> Burncode LLC, All Rights Reserved.
        </div>
    </div>
</footer>
