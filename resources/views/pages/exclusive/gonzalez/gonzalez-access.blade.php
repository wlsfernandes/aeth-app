@extends('layouts.admin-gonzalez')

@section('title', 'González Access')

@section('content')
    <style>
        .color-1 {
            background: #FF6B6B;
            color: white;
        }

        .color-2 {
            background: #4ECDC4;
            color: white;
        }

        .color-3 {
            background: #45B7D1;
            color: white;
        }

        .color-4 {
            background: #96CEB4;
            color: white;
        }

        .color-5 {
            background: #9B59B6;
            color: white;
        }

        a.badge:hover {
            opacity: 0.9;
            text-decoration: none;
        }
    </style>
    <section class="section-padding">
        <div class="container" style="min-height: 600px;">
            <div class="row gy-4">
                <div class="shop-details-wrapper">
                    <div class="title-wrapper">
                        <h2 class="text-danger">{{$digitalCollection->title ?? ''}}</h2>
                        <h5 class="text-primary"><i>{{$digitalCollection->creator ?? ''}}</i></h5>
                    </div>
                    <div class="row g-4">

                        <div class="col-lg-8">
                            <div class="shop-details-content">
                                @if($digitalCollection->description)
                                    <p class="text-muted" style="margin-top: 20px;">
                                        {{$digitalCollection->description ?? ''}}
                                    </p>
                                @endif

                                @if($digitalCollection->subject)
                                    <p class="text-muted" style="margin-top: 20px;">
                                        <span class="text-primary fw-bold"><b>Tags:</b></span>
                                        @foreach(explode('|', $digitalCollection->subject) as $tag)
                                            @php
                                                $tag = trim($tag);
                                                $colorIndex = rand(1, 5);
                                            @endphp

                                            @if($tag)
                                                <a href="{{ route('tag.cloud.filter', ['tag' => $tag]) }}"
                                                    class="badge rounded-pill me-1 mb-1 text-decoration-none color-{{ $colorIndex }}"
                                                    style="font-size: 1.05em; padding: 10px 16px; cursor: pointer;">{{ $tag }}</a>
                                            @endif
                                        @endforeach
                                    </p>
                                @endif

                                @if($digitalCollection->publisher)
                                    <p class="text-muted" style="margin-top: 10px;">
                                        <span class="text-primary">Publisher:</span></br>
                                        {{$digitalCollection->publisher ?? ''}}
                                    </p>
                                @endif
                                @if($digitalCollection->dateOfPublication)
                                    <p class="text-muted" style="margin-top: 10px;">
                                        <span class="text-primary">Date Of Publication:</span></br>
                                        {{$digitalCollection->dateOfPublication ?? ''}}
                                    </p>
                                @endif

                                @if($digitalCollection->place)
                                    <p class="text-muted" style="margin-top: 6px;">
                                        <span class="text-primary">Ocassion:</span></br> {{$digitalCollection->place ?? ''}}
                                    </p>
                                @endif
                                @if(isset($digitalCollection->series->name))
                                    <p class="text-muted" style="margin-top: 2px;">
                                        <span class="text-primary">Collection:</span></br>
                                        {{$digitalCollection->series->name ?? ''}}
                                    </p>
                                @endif
                                @if($digitalCollection->typeOfDocument)
                                    <p class="text-muted" style="margin-top: 2px;">
                                        <span class="text-primary">Type:</span></br>
                                        {{$digitalCollection->typeOfDocument ?? ''}}
                                    </p>
                                @endif
                                @if($digitalCollection->omekaIdentifier)
                                    <p class="text-muted" style="margin-top: 2px;">
                                        <span class="text-primary">ID:</span></br>
                                        {{$digitalCollection->omekaIdentifier ?? ''}}
                                    </p>
                                @endif
                                @if(isset($digitalCollection->copyright->name))
                                    <p class="text-muted" style="margin-top: 2px;">
                                        <span class="text-primary">Copyright:</span></br>
                                        <small><i>{{$digitalCollection->copyright->name ?? ''}}</i></small>
                                    </p>
                                @endif

                                <div class="text-center mt-4">
                                    <a href="{{ $digitalCollection->downloadFile }}" class="btn btn-lg btn-gradient px-5"
                                        target="blank">
                                        <i class="bi bi-download me-2"></i> @lang('dashboard.download')
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="shop-details-image">
                                <div class="tab-content">
                                    <div id="thumb1" class="tab-pane fade show active" role="tabpanel">
                                        <div class="shop-details-thumb">
                                            <img src="{{ $digitalCollection->media }}" alt="img" class="img-fluid"
                                                style="cursor: pointer;" data-bs-toggle="modal"
                                                data-bs-target="#imageModal">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark">
                <div class="modal-body p-0 text-center">
                    <img src="{{ $digitalCollection->media }}" alt="img-large" class="img-fluid"
                        style="max-height: 80vh; width: auto;">
                </div>
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </div>

@endsection