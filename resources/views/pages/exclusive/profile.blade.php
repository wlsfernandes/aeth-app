@extends('layouts.admin-categories')

@section('title', 'Admin Dashboard')
@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
@endpush
@section('content')
    <div class="container rounded bg-white mt-5 mb-5">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                <i class="fas fa-check-circle"></i> <!-- Success icon -->
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li><i class="bx bx-error"></i> {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        class="font-weight-bold">{{$member->first_name ? $user->name : ''}}</span><span
                        class="text-black-50">{{ $user->email }}</span><span>
                    </span></div>
            </div>

            <div class="col-md-5 border-right">
                <form method="POST" action="{{ route('members.update', $member->id) }}" accept-charset="UTF-8"
                    style="display:inline">
                    @csrf
                    @method('PUT')
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Member Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control"
                                    value="{{$member->first_name ?? ''}}" name="first_name"></div>
                            <div class="col-md-6"><label class="labels">Surname</label><input type="text"
                                    class="form-control" value="{{$member->last_name ?? ''}}" name="last_name"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Phone Number</label><input type="text"
                                    class="form-control" value="{{$member->phone_number ?? ''}}" name="phone_number">
                            </div>
                            <div class="col-md-12"><label class="labels">Address 1</label><input type="text"
                                    class="form-control" value="{{$member->address_line_1 ?? ''}}" name="address_line_1">
                            </div>
                            <div class="col-md-12"><label class="labels">Address </label><input type="text"
                                    class="form-control" value="{{$member->address_line_2 ?? ''}}" name="address_line_2">
                            </div>
                            <div class="col-md-12"><label class="labels">Postcode</label><input type="text"
                                    class="form-control" value="{{$member->zipcode ?? ''}}" name="zipcode"></div>
                            <div class="col-md-12"><label class="labels">State</label><input type="text"
                                    class="form-control" value="{{$member->state ?? ''}}" name="state"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Country</label><input type="text"
                                    class="form-control" value="{{$member->country ?? ''}}" name="country"></div>
                            <div class="col-md-6"><label class="labels">State</label><input type="text" class="form-control"
                                    value="{{$member->state ?? ''}}" name="state"></div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save
                                Profile</button></div>
                    </div>
                </form>
            </div>

            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span
                            class="border px-3 p-1 add-experience"><a href="{{ route('certification') }}"
                                style="font-size: 14px; display: flex; align-items: center;">
                                <i class="bi bi-award" style="font-size: 25px;"></i> Membership Certification
                            </a></span></div><br>

                </div>
            </div>
        </div>
    </div>

@endsection
@section('style')
    <style>
        body {
            background: rgb(99, 39, 120)
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }

        .profile-button {
            background: rgb(99, 39, 120);
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #682773
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none
        }

        .back:hover {
            color: #682773;
            cursor: pointer
        }

        .labels {
            font-size: 11px
        }

        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        }
    </style>
@endsection
