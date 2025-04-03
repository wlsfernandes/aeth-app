<section class="py-5" style="background-color:#f5f1fb">
    <div class="container">
        <div class="sec-title mb_55 centred">
            <a href="{{ route('post') }}"> <span class="sub-title"><b>@lang('messages.our_blog')</b></span>
                <h4 style="color:#4a235a ">@lang('messages.articles_news')</h4>
            </a>
        </div>
        <div class="row g-4">
            @foreach($articles->take(3) as $article)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0 hover-shadow transition">
                        <a href="{{ $article->image_url }}" data-bs-toggle="modal" data-bs-target="#lightboxModal"
                            data-img="{{ $article->image_url }}">
                            <img src="{{ $article->image_url }}" class="card-img-top" alt="{{ $article->title_en }}">
                        </a>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">
                                @if(App::getLocale() == 'es')
                                    {{ $article->title_es }}
                                @elseif(App::getLocale() == 'pt')
                                    {{ $article->title_pt }}
                                @else
                                    {{ $article->title_en }}
                                @endif
                            </h5>
                            <p class="card-text text-muted small flex-grow-1">
                                <i>{{ $article->plain_summary }}</i>
                            </p>

                            <div class="mt-3 d-flex justify-content-between align-items-center">
                                <a href="{{ route('post.show', $article->slug) }}" class="btn btn-sm btn-gradient">
                                    <i class="bi bi-box-arrow-in-right me-1"></i> @lang('messages.read_more')
                                </a>
                                <small class="text-muted">{{ $article->date }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>