@extends('layouts.admin-gonzalez')

@section('title', "Results for '$tag'")

@section('content')
    <section class="section-padding">
        <div class="container" style="min-height: 600px;">
            <h2 class="mb-4 text-center">Digital Collections tagged with <strong>"{{ $tag }}"</strong></h2>

            @if ($digitalCollections->isEmpty())
                <p class="text-center text-muted">No items found with this tag.</p>
            @else
                <div class="row">
                    @foreach ($digitalCollections as $item)
                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">{{ $item->title }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><i>{{ $item->creator }}</i></h6>
                                    <p class="card-text">{{ Str::limit($item->description, 150) }}</p>
                                    <a href="{{ route('digital-collections.show', $item->id) }}"
                                        class="btn btn-outline-primary btn-sm">View Collection</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            <div class="text-center mt-4">
                <a href="{{ route('tag.cloud') }}" class="btn btn-secondary">← Back to Tag Cloud</a>
            </div>
        </div>
    </section>
@endsection