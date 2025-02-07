@extends('layouts.admin-categories')

@section('title', 'Admin Dashboard')

@section('content')

<section>
    <div class="text-center mb-4">
        <div class="card">
            <div class="d-flex justify-content-between" style="margin:15px">
                <a href="{{ route('category') }}" class="btn btn-primary waves-effect">
                    <i class="bx bx-arrow-back"></i> Go Back
                </a>
                <p><b>Date of Publication:</b>
                    {{$portal_content->date_of_publication ? $portal_content->date_of_publication->format('Y-m-d') : ''}}
                <p><b>Occasion:</b> {{$portal_content->occasion ?? ''}}</p>
                <p><b>Program:</b> {{$portal_content->program ?? ''}}</p>
                <p><b>Contact:</b> {{$portal_content->contact ?? ''}}</p>
            </div>
        </div>
        <h2><b>Title:</b> {{$portal_content->title}}</h2>
        <p><b>Description:</b> {{$portal_content->description ?? ''}}</p>
        </p>
    </div>
</section>
<section class="d-flex justify-content-center " style="min-height: 100vh;">

    @if($portal_content->media_type === 'PDF')
        <iframe src="{{ $portal_content->url }}#toolbar=0" allowfullscreen loading="lazy"
            style="width: 100%; max-width: 1200px; height: 800px; border: none;">
        </iframe>

    @elseif($portal_content->media_type === 'Video')
        @php
            $url = $portal_content->url;
            function getVideoEmbedUrl($url)
            {
                if (str_contains($url, 'youtube.com') || str_contains($url, 'youtu.be')) {
                    $pattern = '%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)|.*[?&]v=)|youtu\.be/)([^"&?/\\s]{11})%i';
                    preg_match($pattern, $url, $matches);
                    $youtube_id = $matches[1] ?? null;
                    if ($youtube_id) {
                        return "https://www.youtube.com/embed/$youtube_id?rel=0&controls=1&modestbranding=1";
                    }
                }

                if (str_contains($url, 'vimeo.com')) {
                    $vimeo_id = basename(parse_url($url, PHP_URL_PATH));
                    return "https://player.vimeo.com/video/$vimeo_id";
                }

                return null;
            }

            $embed_url = getVideoEmbedUrl($url);
        @endphp

        @if($embed_url)
            <div style="width: 80%; max-width: 800px;">
                <iframe src="{{ $embed_url }}" frameborder="0" allowfullscreen style="width: 100%; aspect-ratio: 16/9;">
                </iframe>
            </div>
        @else
            <p>Invalid video URL</p>
        @endif

    @elseif($portal_content->media_type === 'Image')
        <img src="{{ $url }}" alt="Media Image" style="width: 80%; max-width: 800px; height: auto; border-radius: 8px;">
    @endif

</section>
<section>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="d-flex justify-content-between" style="margin:15px">
                    <a href="{{ route('category') }}" class="btn btn-primary waves-effect">
                        <i class="bx bx-arrow-back"></i> Go Back
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
