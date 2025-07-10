<!-- Footer Start -->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Mega Footer Start -->
                <div class="mega-footer">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <!-- Footer About Start -->
                            <div class="footer-about">
                                <figure>
                                    <img src="{{ url("/") }}/storage/{{ siteInfo()->logo }}" alt="">
                                </figure>
                                <p>
                                    Burncode company has been serving its customers for more than 5 years. During this period, we have implemented a number of small and large projects. We offer you quality work and a reasonable price.
                                </p>
                                <ul>
                                    <li><a href="mailto:{{ siteInfo()->email }}">{{ siteInfo()->email }}</a></li>
                                    <li><a href="tel:{{ siteInfo()->phone }}">{{ siteInfo()->phone }}</a></li>
                                </ul>
                            </div>
                            <!-- Footer About End -->
                        </div>

                        <div class="col-lg-2 col-md-4">
                            <!-- Footer Links Start -->
                            <div class="footer-links">
                                <h2>pages</h2>
                                <ul>
                                    <li><a href="{{ route('index', ['locale' => app()->getLocale()]) }}">{{ __('Home') }}</a></li>
                                    <li><a href="{{ route('services', ['locale' => app()->getLocale()]) }}">{{ __('Our Services') }}</a></li>
                                    <li><a href="{{ route('products', ['locale' => app()->getLocale()]) }}">{{ __('Our Products') }}</a></li>
                                    <li><a href="{{ route('projects', ['locale' => app()->getLocale()]) }}">{{ __('Our Projects') }}</a></li>
                                    <li><a href="{{ route('news', ['locale' => app()->getLocale()]) }}">{{ __('Our News') }}</a></li>
                                    <li><a href="{{ route('team', ['locale' => app()->getLocale()]) }}">{{ __('Our Team') }}</a></li>
                                    <li><a href="{{ route('contact', ['locale' => app()->getLocale()]) }}">{{ __('Contact') }}</a></li>
                                </ul>
                            </div>
                            <!-- Footer Links End -->
                        </div>

                        <div class="col-lg-2 col-md-4">
                            <!-- Footer Links Start -->
                            <div class="footer-links">
                                <h2>Socials</h2>
                                <ul>
                                    <li><a href="{{ siteInfo()->facebook_page }}">Facebook</a></li>
                                    <li><a href="{{ siteInfo()->instagram_page }}">Instagram</a></li>
                                    <li><a href="{{ siteInfo()->linkedin_page }}">Linkedin</a></li>
                                    <li><a href="{{ siteInfo()->twitter_page }}">X.com</a></li>
                                </ul>
                            </div>
                            <!-- Footer Links End -->
                        </div>

                        <div class="col-lg-2 col-md-4">
                            <!-- Footer Links Start -->
                            <div class="footer-links">
                                <h2>services</h2>
                                <ul>
                                    @forelse(services() as $service)
                                        <li><a href="{{ route("singleService", ['slug' => $service->slug]) }}">{{ $service->name }}</a></li>
                                    @empty
                                        No Data !
                                    @endforelse
                                </ul>
                            </div>
                            <!-- Footer Links End -->
                        </div>
                    </div>
                </div>
                <!-- Mega Footer End -->

                <!-- Copyright Footer Start -->
                <div class="footer-copyright">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <!-- Footer Copyright Content Start -->
                            <div class="footer-copyright-text">
                                <p>Copyright © {{ date('Y') }} Burncode LLC. All rights reserved.</p>
                            </div>
                            <!-- Footer Copyright Content End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Footer Policy Links Start -->
                            <div class="footer-policy-links">
                                <ul>
                                    <li><a href="#">privacy policy</a></li>
                                    <li><a href="#">terms of service</a></li>
                                    <li class="highlighted"><a href="#top">go to top</a></li>
                                </ul>
                            </div>
                            <!-- Footer Policy Links End -->
                        </div>
                    </div>
                </div>
                <!-- Copyright Footer End -->
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
