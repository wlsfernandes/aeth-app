@extends('layouts.admin-gonzalez')

@section('title', 'Acervo')

@section('content')
    <section class="section-padding">
        <div class="container" style="min-height: 600px;">
            <h5 class="mb-4 text-center text-primary">@lang('dashboard.search_help')</h5>
            <div class="row gy-4">
                <form method="GET" action="{{ route('selectedOptions') }}" class="row g-3">

                    {{-- Line 1: Title --}}
                    <div class="col-md-12 mb-2">
                        <input type="text" class="form-control" name="title" placeholder="@lang('dashboard.title')">
                    </div>

                    {{-- Line 2: Tag --}}
                    <div class="col-md-12 mb-2">
                        <input type="text" class="form-control" name="tag" placeholder="@lang('dashboard.select_tag')">
                    </div>

                    {{-- Line 3: Selects --}}
                    <div class="col-md-4 mb-2">
                        <select name="series_id" class="form-select">
                            <option value="">@lang('dashboard.select_series')</option>
                            @foreach($seriess as $series)
                                <option value="{{ $series->id }}">{{ $series->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4 mb-2">
                        <select name="typeOfDocument" class="form-select">
                            <option value="">@lang('dashboard.select_type')</option>
                            @foreach($types as $type)
                                <option value="{{ $type }}">{{ $type }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4 mb-2">
                        <select name="creator" class="form-select">
                            <option value="">@lang('dashboard.select_creator')</option>
                            @foreach($creators as $creator)
                                <option value="{{ $creator }}">{{ $creator }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Submit Button --}}
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary w-100 mt-2">
                            <i class="far fa-search"></i> @lang('dashboard.search')
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </section>

@endsection