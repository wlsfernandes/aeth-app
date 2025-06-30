@if($testimonials->count())
    <section class="testimonial-style-two sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div class="sec-title mr_70 text-center">
                        <span class="sub-title">Testimonials</span>
                    </div>
                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="7000">
                        <div class="carousel-inner">
                            @foreach($testimonials as $testimonial)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <div class="testimonial-block-one">
                                        <div class="inner-box text-center p-4">
                                            <figure class="thumb-box mb-3">
                                                <img src="{{ $testimonial->image_url }}" alt="{{ $testimonial->name }}"
                                                    class="rounded-circle"
                                                    style="width: 100px; height: 100px; object-fit: cover;">
                                            </figure>
                                            <p class="fst-italic text-muted">
                                                {!! Str::limit(strip_tags($testimonial->{'text_' . (app()->getLocale() ?? 'es')} ?? $testimonial->text_es), 360, '...') !!}
                                                <br />
                                                <a href="{{ route('testimonials') }}"> @lang('Read more')</a>
                                            </p>

                                            <ul class="rating d-flex justify-content-center list-unstyled mt-3 mb-2">
                                                <li><i class="icon-13"></i></li>
                                                <li><i class="icon-13"></i></li>
                                                <li><i class="icon-13"></i></li>
                                                <li><i class="icon-13"></i></li>
                                                <li><i class="icon-13"></i></li>
                                            </ul>
                                            <h3 class="mt-2">{{ $testimonial->name }}</h3>
                                            <span class="designation">{{ $testimonial->title }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        @if($testimonials->count() > 1)
                            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif