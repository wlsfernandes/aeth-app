@extends('layouts.admin-gonzalez')

@section('title', 'dashboard.browse_all')

@section('content')
    <section class="section-padding">
        <div class="container" style="min-height: 600px;">
            <div class="row gy-4">
                @forelse($seriess as $series)
                    <div class="col-md-6 mb-4">
                        <div
                            class="offer__item d-flex flex-wrap align-items-stretch border rounded shadow-sm p-3 h-100 bg-white">
                            <div class="col-sm-4 text-center mb-3 mb-sm-0">
                                <a href="{{ $series->media ?? asset('assets/images/shop/no_image.jpg') }}"
                                    class="lightbox-image" data-fancybox="gallery">
                                    <img src="{{ asset('assets/images/shop/no_image.jpg') }}" alt="Click to view larger"
                                        class="img-fluid rounded" style="height: 180px; object-fit: cover;">
                                </a>
                            </div>

                            <div class="col-sm-8 d-flex flex-column justify-content-between ps-sm-4">
                                <div>
                                    <p class="text-muted mb-2">
                                        {{ $series->name ?? '' }}
                                    </p>
                                    <p><small><b><i> {{ $series->creator ?? '' }}</i></b></small></p>

                                </div>
                                <div class="mt-3">
                                    <a class="btn btn-sm btn-gradient w-100" href="{{ route('itemCollection', $series->id) }}">
                                        @lang('dashboard.see_collections')
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="text-muted">@lang('bookstore.no_seriess')</p>
                    </div>
                @endforelse
            </div>

            <div class="pagination-wrapper centred" style="margin-top: 20px;margin-bottom: 20px;">
                <ul class="pagination pagination-sm clearfix">
                    @if ($seriess->onFirstPage())
                        <li><a href="#" aria-disabled="true"><i class="icon-56"></i></a></li>
                    @else
                        <li><a href="{{ $seriess->previousPageUrl() }}"><i class="icon-56"></i></a>
                        </li>
                    @endif

                    @foreach ($seriess->getUrlRange(1, $seriess->lastPage()) as $page => $url)
                        <li>
                            <a href="{{ $url }}" class="{{ $seriess->currentPage() === $page ? 'current' : '' }}">
                                {{ $page }}
                            </a>
                        </li>
                    @endforeach

                    @if ($seriess->hasMorePages())
                        <li><a href="{{ $seriess->nextPageUrl() }}"><i class="icon-55"></i></a></li>
                    @else
                        <li><a href="#" aria-disabled="true"><i class="icon-55"></i></a></li>
                    @endif
                </ul>
            </div>

        </div>
    </section>

@endsection