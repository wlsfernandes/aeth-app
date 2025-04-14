@extends('layouts.admin-categories')

@section('title', 'Admin Dashboard')
@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
@endpush
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="d-flex justify-content-between" style="margin:15px">
                    <a href="{{ route('category') }}" class="btn btn-secondary waves-effect">
                        <i class="bx bx-arrow-back"></i> @lang('exclusive.dashboard.go_back')
                    </a>
                    <h2>Articles</h2>
                    <h2>
                </div>
            </div>
        </div>
    </div>
    <section style="margin-bottom:350px;">
        <div class="card-body">
            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>@lang('exclusive.dashboard.access_now')</th>
                        <th>@lang('exclusive.dashboard.title')</th>
                        <th>@lang('exclusive.dashboard.description')</th>
                        <th>@lang('exclusive.dashboard.program')</th>
                        <th>@lang('exclusive.dashboard.contact')</th>
                        <th>@lang('exclusive.dashboard.ocassion')</th>
                        <th>@lang('exclusive.dashboard.date')</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($portal_contents as $content)
                        <tr>
                            <td>
                                <a href="{{ route('view-content', $content->id) }}" class="px-3 text-primary">
                                    <img src="{{ asset('assets/images/aeth-watch.png') }}" style="width:48px;height:48px;">
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
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="d-flex justify-content-between" style="margin:15px">
                    <a href="{{ route('programs') }}" class="btn btn-secondary waves-effect">
                        <i class="bx bx-arrow-back"></i> @lang('exclusive.dashboard.go_back')
                    </a>
                </div>
            </div>
        </div>
    </div>

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