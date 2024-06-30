@extends('layouts.default')
@push('style')
    <style>
        .form-control:disabled:not(.flatpickr-input),
        .form-control[readonly]:not(.flatpickr-input) {
            background-color: #f1f2f3;
            cursor: no-drop;
            color: black !important;
        }

        body.dark .form-control:disabled:not(.flatpickr-input),
        body.dark .form-control[readonly]:not(.flatpickr-input) {
            background-color: #3b3f5c;
            cursor: no-drop;
            color: #d3d3d3 !important;
        }
    </style>
@endpush
@section('content')
    <div id="content" class="main-content">
        <div class="container">
            <div class="container">

                <!-- BREADCRUMB -->
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Form</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Updating-leaves</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->


                <div class="row">
                    <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Updating-leaves</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area m-1 p-2">

                                @if (session()->has('success'))
                                    <div class="alert alert-light-success alert-dismissible fade show border-0 mb-4"
                                        role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-x close" data-bs-dismiss="alert">
                                                <line x1="18" y1="6" x2="6" y2="18">
                                                </line>
                                                <line x1="6" y1="6" x2="18" y2="18">
                                                </line>
                                            </svg></button><strong>{{ session()->get('success') }}</strong>
                                    </div>
                                @elseif (session()->has('error'))
                              
                                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4"
                                        role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-x close" data-bs-dismiss="alert">
                                                <line x1="18" y1="6" x2="6" y2="18">
                                                </line>
                                                <line x1="6" y1="6" x2="18" y2="18">
                                                </line>
                                            </svg></button><strong>{{ session()->get('error') }}</strong>
                                    </div>
                                @endif
                                <form action="{{ route('updating-leaves-form-update', [$leaves->leave_id]) }}"
                                    method="POST">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $leaves->leave_id }}">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="form-check-label" for="firstName">Employee-Id:</label>
                                            <input type="text" id="emp_id" value="{{ $leaves->emp_id }}"
                                                class="form-control" name="emp_id" readonly>
                                        </div>
                                    </div>
                                    <div class="row mt-2">

                                        <div class="col-md-3">
                                            <label class="form-check-label" for="firstName">First Name:</label>
                                            <input type="text" id="emp_id" value="{{ $leaves->first_name }}"
                                                class="form-control" name="#" readonly>
                                        </div>


                                        <div class="col-md-3">
                                            <label class="form-check-label" for="LastName">Last Name:</label>
                                            <input type="text" id="#" value="{{ $leaves->last_name }}"
                                                class="form-control" name="#" readonly>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-check-label " for="MobileNo">Mobile No:</label>
                                            <input type="text" id="#" value="{{ $leaves->mobile_no }}"
                                                class="form-control" name="#" readonly>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-check-label" for="">Gender:</label>
                                            <input type="text" id="#"
                                                value="@if ($leaves->gender == 1) Male
                                            @elseif($leaves->gender == 2)Female
                                            @elseif($leaves->gender == 3)Other
                                            @else Undefined @endif "
                                                class="form-control" name="#" readonly>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-3">
                                            <label class="form-check-label" for="designation">Designation:</label>
                                            <input type="text" id="#" value="{{ $leaves->dst_name }}"
                                                class="form-control" name="#" readonly>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="department">Department:</label>
                                            <input type="text" id="#" value="{{ $leaves->dpt_name }}"
                                                class="form-control" name="#" readonly>
                                        </div>



                                        <div class="col-md-4">
                                            <label class="form-check-label" for="">Email:</label>
                                            <input type="text" id="#" value="{{ $leaves->email }}"
                                                class="form-control" name="#" readonly>
                                        </div>

                                    </div>


                                    <!-- </div> -->
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="email">Leave Type:</label>
                                            <input type="text" id="#" value="{{ $leaves->lt_name }}"
                                                class="form-control" name="#" readonly>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-check-label" for="start-date"> Duration:</label>
                                            <input type="text" id="#" value="{{ $leaves->start_date }}"
                                                class="form-control" name="#" readonly>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-check-label" for="email">To:</label>
                                            <input type="text" id="#" value="{{ $leaves->end_date }}"
                                                class="form-control" name="end_date" readonly>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-check-label" for="email">How Much</label>
                                            <input type="text" id="emp_id" value="{{ $leaves->how_long }}"
                                                class="form-control" name="end_date" readonly>
                                        </div>


                                    </div>

                                    <div class="row mb-4  mt-3">
                                        <div class="col-md-6">
                                            <label class="form-check-label" for="email">Reason:</label>
                                            <textarea id="leave-reason" class="form-control" name="reason" rows="1"  readonly>{{ $leaves->reason }}</textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-check-label" for="email">Location:</label>
                                            <textarea id="leave-reason" class="form-control" name="location" rows="1"  readonly>{{ $leaves->location }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-4  mt-3">
                                        <div class="col-md-6">
                                            <div class="form-check form-check-primary form-check-inline">
                                                <label class="form-check-label">Select your approval:</label>
                                            </div><br>
                                            <div class="form-check form-check-primary form-check-inline">
                                                <input type="radio" class="form-check-input" id="pending" name="approval" value="0"
                                                    {{ $leaves->approval === 0 ? 'checked' : '' }}>
                                                <label for="pending">Pending</label>
                                            </div>
                                            <div class="form-check form-check-primary form-check-inline">
                                                <input type="radio" class="form-check-input" id="approved" name="approval" value="1"
                                                    {{ $leaves->approval === 1 ? 'checked' : '' }}>
                                                <label for="approved">Approved</label>
                                            </div>
                                            <div class="form-check form-check-primary form-check-inline">
                                                <input type="radio" class="form-check-input"  id="decline" name="approval" value="2"
                                                    {{ $leaves->approval === 2 ? 'checked' : '' }}>
                                                <label for="decline">Decline</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-check-label" for="email">Comment:</label>
                                            <textarea id="leave-reason" class="form-control" name="comment" rows="2" >{{ $leaves->comment }}</textarea>
                                        </div>
                                    </div>


                                    <div class="row mb-4">
                                        <div class="col-sm-12">
                                            <br>
                                            <button class="btn btn-primary" type="submit">Update</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
