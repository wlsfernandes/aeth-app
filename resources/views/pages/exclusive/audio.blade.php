@extends('layouts.admin-categories')

@section('title', 'Admin Dashboard')
@section('css')
<!-- DataTables -->
<link href="{{ asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<section>
    <div class="text-center mb-4">
        <h2>@lang('exclusive.dashboard.audio')</h2>
        <p>@lang('exclusive.dashboard.explore')</p>
    </div>
    <ol class="list-group list-group-light list-group-numbered">
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Subheading</div>
                Content for list item
            </div>
        </li>

    </ol>
</section>


@endsection
