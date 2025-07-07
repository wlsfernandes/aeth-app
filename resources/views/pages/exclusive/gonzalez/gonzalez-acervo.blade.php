@extends('layouts.admin-gonzalez')

@section('title', 'Acervo')

@section('content')
    <section class="section-padding">
        <div class="container" style="min-height: 600px;">
            @if(isset($tag))
                <h5 class="mb-4 text-center text-danger">Digital Collections tagged with <strong>"{{ $tag }}"</strong></h5>
            @endif
            <div class="row gy-4">
                @forelse($digitalCollections as $digitalCollection)
                    <div class="col-md-6 mb-4">
                        <div
                            class="offer__item d-flex flex-wrap align-items-stretch border rounded shadow-sm p-3 h-100 bg-white">
                            <div class="col-sm-4 text-center mb-3 mb-sm-0">
                                <a href="{{ $digitalCollection->media ?? asset('assets/images/shop/no_image.jpg') }}"
                                    class="lightbox-image" data-fancybox="gallery">
                                    <img src="{{ asset('assets/images/shop/no_image.jpg') }}" alt="Click to view larger"
                                        class="img-fluid rounded" style="height: 180px; object-fit: cover;">
                                </a>
                            </div>

                            <div class="col-sm-8 d-flex flex-column justify-content-between ps-sm-4">
                                <div>
                                    <h5 class="mb-2">
                                        <a href="{{ route('details', $digitalCollection->id) }}"
                                            class="text-dark text-decoration-none">
                                            {{ $digitalCollection->title }}
                                        </a>
                                    </h5>
                                    <p class="text-muted mb-2">
                                        {{ $digitalCollection->description }}
                                    </p>
                                    <p><small><b><i> {{ $digitalCollection->creator ?? '' }}</i></b></small></p>

                                </div>
                                <div class="mt-3">
                                    <a class="btn btn-sm btn-gradient w-100"
                                        href="{{ route('accessItem', $digitalCollection->id) }}">
                                        @lang('dashboard.get_full_access')
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <h5 class="mb-4 text-center text-danger">@lang('dashboard.no_digitalCollections')</h5>
                    </div>
                @endforelse
            </div>

            <div class="pagination-wrapper centred" style="margin-top: 20px;margin-bottom: 20px;">
                <ul class="pagination pagination-sm clearfix">
                    @if ($digitalCollections->onFirstPage())
                        <li><a href="#" aria-disabled="true"><i class="icon-56"></i></a></li>
                    @else
                        <li><a href="{{ $digitalCollections->previousPageUrl() }}"><i class="icon-56"></i></a>
                        </li>
                    @endif

                    @foreach ($digitalCollections->getUrlRange(1, $digitalCollections->lastPage()) as $page => $url)
                        <li>
                            <a href="{{ $url }}" class="{{ $digitalCollections->currentPage() === $page ? 'current' : '' }}">
                                {{ $page }}
                            </a>
                        </li>
                    @endforeach

                    @if ($digitalCollections->hasMorePages())
                        <li><a href="{{ $digitalCollections->nextPageUrl() }}"><i class="icon-55"></i></a></li>
                    @else
                        <li><a href="#" aria-disabled="true"><i class="icon-55"></i></a></li>
                    @endif
                </ul>
            </div>

        </div>
    </section>

@endsection