@extends('layouts.user')
@push('style')
    <style>
        .user-profile .widget-content-area .user-info-list ul.contacts-block li a:not(.btn) {
            font-weight: 600;
            font-size: 11px;
            color: #009688;
        }
    </style>
@endpush
@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="middle-content container-xxl p-0">

                <!-- BREADCRUMB -->
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Users</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->

                <div class="row layout-spacing ">

                    <!-- Content -->
                    <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
                        <div class="user-profile">
                            <div class="widget-content widget-content-area">
                                <div class="d-flex justify-content-between">
                                    <input type="hidden" value="{{ $empdata = Session::get('emp_data') }}">
                                    <h3 class="">Profile</h3>
                                    <a href="{{ route('emp_account_set') }}" class="mt-2 edit-profile"> <svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                            <path d="M12 20h9"></path>
                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                        </svg></a>
                                </div>
                                <div class="text-center user-info">
                                    <img src="{{ url($empdata->image) }}" style="width: 100px" alt="avatar">
                                    <p class="">{{ $empdata->first_name }} {{ $empdata->last_name }}</p>
                                </div>
                                <div class="user-info-list">

                                    <div class="">
                                        <ul class="contacts-block list-unstyled col-8">
                                            <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-coffee me-3">
                                                    <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                                                    <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                                                    <line x1="6" y1="1" x2="6" y2="4">
                                                    </line>
                                                    <line x1="10" y1="1" x2="10" y2="4">
                                                    </line>
                                                    <line x1="14" y1="1" x2="14" y2="4">
                                                    </line>
                                                </svg> {{ $empdata->dst_name }}
                                            </li>
                                            <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-calendar me-3">
                                                    <rect x="3" y="4" width="18" height="18" rx="2"
                                                        ry="2"></rect>
                                                    <line x1="16" y1="2" x2="16" y2="6">
                                                    </line>
                                                    <line x1="8" y1="2" x2="8" y2="6">
                                                    </line>
                                                    <line x1="3" y1="10" x2="21" y2="10">
                                                    </line>
                                                </svg>{{ $empdata->dob }}
                                            </li>
                                            <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-map-pin me-3">
                                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                                    <circle cx="12" cy="10" r="3"></circle>
                                                </svg>{{ $empdata->addresses }}
                                            </li>
                                            <li class="contacts-block__item">
                                                <a href="mailto:{{ $empdata->email }}"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-mail me-3">
                                                        <path
                                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                        </path>
                                                        <polyline points="22,6 12,13 2,6"></polyline>
                                                    </svg>{{ $empdata->email }}</a>
                                            </li>
                                            <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-phone me-3">
                                                    <path
                                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                                    </path>
                                                </svg>{{ $empdata->mobile_no }}
                                            </li>
                                        </ul>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">

                        <div class="usr-tasks ">
                            <div class="widget-content widget-content-area">
                                <h3 class="">Total Leave's</h3>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Leave Id</th>
                                                <th class="text-center">Leave Type</th>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($leaves as $row)
                                                <tr>
                                                    <td class="text-center">{{ $row->leave_id }}</td>
                                                    <td class="text-center">
                                                        {{-- <div class="progress br-30">
                                                            <div class="progress-bar br-30 bg-danger" role="progressbar"
                                                                style="width: 29.56%" aria-valuenow="25"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div> --}}
                                                        {{ $row->lt_name }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{-- <p class="text-danger">29.56%</p> --}}
                                                        {{ $row->start_date }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{-- <p>2 mins ago</p> --}}
                                                        <span id="approval"
                                                                    class="shadow-none badge  @if ($row->final_approval == 0) badge-light-primary
                                                        @elseif($row->final_approval == 1)
                                                        badge-light-success
                                                        @else
                                                        badge-light-danger @endif">
                                                                    @if ($row->final_approval == 0)
                                                                        Pending
                                                                    @elseif($row->final_approval == 1)
                                                                        Approved
                                                                    @else
                                                                        Decline
                                                                    @endif

                                                                </span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                

            </div>

        </div>
    @endsection
