@extends('Front.Layouts.app')

@section('meta')
    <meta name="description" content="{{ siteInfo()->description }}">
    <meta name="author" content="{{ siteInfo()->description }}">
@endsection

@section('pageTitle')
    {{ siteInfo()->description }}
@endsection


@section('content')

    @include('Front.Layouts.inc.slider')

    <div class="sponsor-section padding"></div>

    <section class="workflow-section">
        <img class="anim-illustration parallax-item" src="{{ url('/') }}/assets/img/element-3.png" alt="illustration">
        <img class="anim-illustration parallax-item bottom" src="{{ url('/') }}/assets/img/element-4.png" alt="illustration">
        <div class="container">
            <div class="row workflow-wrap padding">
                <div class="col-lg-7 sm-padding">
                    <div class="section-heading mb-40 wow fade-in-left" data-wow-delay="200ms">
                        <h2>
                            {{__("Empowering Your Business through Technology")}}
                        </h2>
                        <p>
                            {{__("Empowering Your Business through Technology is more than just a slogan; it's our guiding principle and commitment to your success. At Burncode, we believe that the right application of technology can transform businesses, drive innovation, and propel growth.")}}
                        </p>
                    </div>
                    <div class="workflow-items">
                        <div class="workflow-item">
                            <div class="wf-line-progress"></div>
                            <div class="workflow-line"></div>
                            <div class="workfow-count">1</div>
                            <div class="workflow-info wow fade-in-left" data-wow-delay="300ms">
                                <h3>{{__("Web technologies")}}</h3>
                                <p>{{__("Web technologies encompass a dynamic realm of tools, protocols, and frameworks that power the internet, enabling seamless communication, interaction, and information sharing across the globe.")}}</p>
                            </div>
                        </div>
                        <div class="workflow-item">
                            <div class="wf-line-progress"></div>
                            <div class="workflow-line"></div>
                            <div class="workfow-count">2</div>
                            <div class="workflow-info wow fade-in-left" data-wow-delay="400ms">
                                <h3>{{__("Mobile technologies")}}</h3>
                                <p>{{__("Mobile technologies refer to the evolving set of tools and innovations that drive the functionality and capabilities of smartphones and mobile devices, enabling a wide range of applications and services on the go.")}}</p>
                            </div>
                        </div>
                        <div class="workflow-item">
                            <div class="wf-line-progress"></div>
                            <div class="workflow-line"></div>
                            <div class="workfow-count">3</div>
                            <div class="workflow-info wow fade-in-left" data-wow-delay="500ms">
                                <h3>{{__("CRM softwares")}}</h3>
                                <p>{{__("CRM software, or Customer Relationship Management software, is a powerful tool that helps businesses efficiently manage interactions and relationships with their customers. It centralizes customer data, streamlines communication, and empowers organizations to deliver personalized experiences and drive growth.")}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 sm-padding">
                    <div class="workflow-img">
                        <img src="{{ url('/') }}/assets/img/illustration02.png" alt="illustration">
                        <img class="music lf-left-right" src="{{ url('/') }}/assets/img/music01.png" alt="img">
                        <img class="music lf-up-down" src="{{ url('/') }}/assets/img/music02.png" alt="img">
                        <img class="music lf-bottom-corner" src="{{ url('/') }}/assets/img/music03.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-section padding-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 sm-padding">
                    <div class="feature-img">
                        <img src="{{ url('/') }}/assets/img/illustration03.png" alt="illustration">
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="section-heading mb-40 wow fade-in-bottom" data-wow-delay="200ms">
                        <h2>{{__("Strategies that get you on the Path to")}} <span class="wow border-animation" data-wow-delay="300ms">{{__("Success")}}!</span></h2>
                        <p>
                            {{__("Our success in creating business solutions is due in large part spacially to talented and highly committed team.")}}
                        </p>
                    </div>
                    <div class="feature-lists">
                        <div class="feature-item wow fade-in-bottom" data-wow-delay="300ms">
                            <img class="feature-icon" src="{{ url('/') }}/assets/img/icons/icon03.png" alt="icon">
                            <div class="feature-content">
                                <h3>{{__("User Interface")}}</h3>
                                <p>{{__("A well-designed UI enhances user experience by presenting information and functionality in an intuitive and user-friendly manner.")}}</p>
                            </div>
                        </div>
                        <div class="feature-item wow fade-in-bottom" data-wow-delay="400ms">
                            <img class="feature-icon" src="{{ url('/') }}/assets/img/icons/icon05.png" alt="icon">
                            <div class="feature-content">
                                <h3>{{__("Branding Strategy")}}</h3>
                                <p>{{__("An effective branding strategy helps businesses establish a strong, recognizable presence and build lasting connections with their target audience.")}}</p>
                            </div>
                        </div>
                        <div class="feature-item wow fade-in-bottom" data-wow-delay="500ms">
                            <img class="feature-icon" src="{{ url('/') }}/assets/img/icons/icon15.png" alt="icon">
                            <div class="feature-content">
                                <h3>{{__("Data Analytics")}}</h3>
                                <p>{{__("Data analytics is the process of examining and interpreting large volumes of data to uncover meaningful insights, patterns, and trends. It empowers organizations to make informed decisions, optimize operations, and gain a competitive edge by harnessing the power of data.")}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('Front.Layouts.inc.faq')

@endsection
