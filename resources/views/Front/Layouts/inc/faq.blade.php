<section class="faq-section bg-grey padding">
    <div class="container">
        <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
            <h2>{{__("Help and")}}<span class="wow border-animation" data-wow-delay="500ms">{{__("FAQ's")}}</span></h2>
            <p>{{__("FAQ, or Frequently Asked Questions, is a curated list of common queries and their concise answers. It serves as a helpful resource for users, customers, or visitors to quickly find information and solutions to their most typical inquiries.")}}</p>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div id="faq-accordion" class="faq-accordion">
                    @forelse(faqInfo() as $item)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $item->name }}" aria-expanded="true" aria-controls="{{ $item->name }}">
                                    {{ $item->name }}
                                </button>
                            </h2>
                            <div id="{{ $item->name }}" class="accordion-collapse collapse show" aria-labelledby="{{ $item->name }}" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>
                                        {!! $item->body !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @empty
                        No data !
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
