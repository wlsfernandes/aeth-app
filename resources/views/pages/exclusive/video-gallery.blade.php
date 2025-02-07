@extends('layouts.admin-categories')

@section('title', 'Admin Dashboard')

@section('content')

<section>
    <div class="text-center mb-4">
        <h2>@lang('exclusive.dashboard.pdf')</h2>
        <p>@lang('exclusive.dashboard.explore')</p>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card border border-primary">
                <div class="card-header bg-transparent border-primary">
                    <h5 class="my-0 text-primary"><i class="dripicons-store"></i> Portal Content</b></h5>
                </div>
                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Program</th>
                            <th>Contact</th>
                            <th>Occasion</th>
                            <th>Date</th>
                            <th>Access</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($portal_contents as $content)
                            <tr>
                                <td>{{ $content->title ?? '' }}</td>
                                <td>{{ $content->description ?? '' }}</td>
                                <td>{{ $content->program ?? '' }}</td>
                                <td>{{ $content->contact ?? '' }}</td>
                                <td>{{ $content->occasion ?? '' }}</td>
                                <td>{{ $content->date_of_publication ?? '' }}</td>
                                <td>
                                    <a href="{{ route('view-content', $content->id) }}" class="px-3 text-primary"
                                        target="_blank">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
        </ </section>


        @endsection
        @section('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#datatable').DataTable({
                    searching: true,  // Make sure search is enabled
                });
            });
        </script>
        @endsection
