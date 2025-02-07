@extends('layouts.admin-categories')

@section('title', 'Admin Dashboard')
@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
@endpush
@section('content')
<div class="text-center mb-4">
    <h2>@lang('exclusive.dashboard.pdf')</h2>
    <p>@lang('exclusive.dashboard.explore')</p>
</div>
<section style="margin-bottom:350px;">
    <div class="card-body">
        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead>
                <tr>
                    <th>Access Now</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Program</th>
                    <th>Contact</th>
                    <th>Occasion</th>
                    <th>Date</th>

                </tr>
            </thead>

            <tbody>
                @foreach ($portal_contents as $content)
                    <tr>
                        <td>
                            <a href="{{ route('view-content', $content->id) }}" class="px-3 text-primary">
                                <img src="{{ asset('assets/images/aeth-watch.png') }}" style="width:32px;height:auto">
                            </a>
                        </td>
                        <td>{{ $content->title ?? '' }}</td>
                        <td>{{ $content->description ?? '' }}</td>
                        <td>{{ $content->program ?? '' }}</td>
                        <td>{{ $content->contact ?? '' }}</td>
                        <td>{{ $content->occasion ?? '' }}</td>
                        <td>{{ $content->date_of_publication ? $content->date_of_publication->format('Y-m-d') : '' }}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</section>


@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">

<script>
    $(document).ready(function () {
        $('#datatable').DataTable({
            responsive: true,  // Enable responsive behavior
            searching: true,
        });
    });
</script>
@endsection
