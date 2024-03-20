@extends('Front.Layouts.app')

@section('meta')
    <meta name="description" content="{{__("Our FAQ's")}}">
    <meta name="author" content="{{__("Our FAQ's")}}">
    <meta property="og:image" content="{{ url('/') }}/storage/{{ siteInfo()->image }}" />
@endsection

@section('pageTitle')
    {{__("FAQ")}}
@endsection


@section('content')
    <section class="page-header bd-bottom">
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="container">
            <div class="page-header-info text-center">
                <h2>{{__("Our FAQ's")}}</h2>
                <p>
                    {{__("Welcome to our FAQ page! Find quick answers to common questions about our products and services. Can't find what you need? Contact our support team for assistance.")}}
                </p>
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

    <section class="faq-section bg-grey padding">
        <div class="container">
            <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
                <h2>@lang("Our FAQ's")</h2>
                <p>@lang("FAQ, or Frequently Asked Questions, is a curated list of common queries and their concise answers. It serves as a helpful resource for users, customers, or visitors to quickly find information and solutions to their most typical inquiries.")</p>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div id="faq-accordion" class="faq-accordion">
                        @forelse(faqInfo() as $index => $item)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqHeading{{ $index }}">
                                    <button class="accordion-button{{ $index == 0 ? ' active' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse{{ $index }}" aria-expanded="{{ $index == 0 ? 'true' : 'false' }}" aria-controls="faqCollapse{{ $index }}">
                                        {{ $item->name }}
                                    </button>
                                </h2>
                                <div id="faqCollapse{{ $index }}" class="accordion-collapse{{ $index == 0 ? ' show' : ' collapse' }}" aria-labelledby="faqHeading{{ $index }}" data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>
                                            {!! $item->body !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="accordion-item">
                                <p>No data!</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
