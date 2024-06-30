@extends('layouts.user')
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
                            <li class="breadcrumb-item active" aria-current="page">Account Settings</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->

                <div class="account-settings-container layout-top-spacing">

                    <div class="account-content">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <h2>Settings</h2>


                            </div>
                        </div>


                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <form class="section general-info">
                                    <div class="info">
                                        <h6 class="">General Information</h6>
                                        <div class="row">
                                            <div class="col-lg-11 mx-auto">
                                                <div class="row">
                                                    <div class="col-xl-2 col-lg-12 col-md-4">
                                                        <div class="profile-image  mt-4 pe-md-4">

                                                            <!-- // The classic file input element we'll enhance
                                                                                            // to a file pond, we moved the configuration
                                                                                            // properties to JavaScript -->
                                                            <input type="hidden"
                                                                value="{{ $empdata = Session::get('emp_data') }}">

                                                            <div class="img-uploader-content">
                                                                <input type="file" class="filepond" name="filepond"
                                                                    accept="image/png, image/jpeg, image/gif" />
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <div class="form">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="first_name">First Name</label>
                                                                        <input type="text" class="form-control mb-3"
                                                                            id="first_name" placeholder="Full Name"
                                                                            value="{{ $empdata->first_name }}">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="last_name">Last Name</label>
                                                                        <input type="text" class="form-control mb-3"
                                                                            id="last_name" placeholder="Designer"
                                                                            value="{{ $empdata->last_name }}">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="country">Designation</label>
                                                                        <input type="text" class="form-control mb-3"
                                                                            id="last_name" placeholder="Designer"
                                                                            value="{{ $empdata->dst_name }}" readonly>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="department">Department</label>
                                                                        <input type="text" class="form-control mb-3"
                                                                            id="department" placeholder="department"
                                                                            value="{{ $empdata->dpt_name }}" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="phone">Phone</label>
                                                                        <input type="text" class="form-control mb-3"
                                                                            id="phone"
                                                                            placeholder="Write your phone number here"
                                                                            value="{{ $empdata->mobile_no }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="location">Location</label>
                                                                        <input type="text" class="form-control mb-3"
                                                                            id="location"
                                                                            placeholder="{{ $empdata->addresses }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="email">Email</label>
                                                                        <input type="text" class="form-control mb-3"
                                                                            id="email"
                                                                            placeholder="Write your email here"
                                                                            value="{{ $empdata->email }}">
                                                                        <a href="{{ route('send_email') }}">Reset
                                                                            Password </a>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-10 mb-1">

                                                                    @if (session()->has('success'))
                                                                        <div class="alert alert-light-success alert-dismissible fade show border-0 md-2"
                                                                            role="alert"> <button type="button"
                                                                                class="btn-close" data-bs-dismiss="alert"
                                                                                aria-label="Close"> <svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-x close"
                                                                                    data-bs-dismiss="alert">
                                                                                    <line x1="18" y1="6"
                                                                                        x2="6" y2="18">
                                                                                    </line>
                                                                                    <line x1="6" y1="6"
                                                                                        x2="18" y2="18">
                                                                                    </line>
                                                                                </svg></button><strong>{{ session()->get('success') }}</strong>
                                                                        </div>
                                                                    @elseif (session()->has('error'))
                                                                        <div class="alert alert-light-danger alert-dismissible fade show border-0 sm-4"
                                                                            role="alert"> <button type="button"
                                                                                class="btn-close" data-bs-dismiss="alert"
                                                                                aria-label="Close"> <svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-x close"
                                                                                    data-bs-dismiss="alert">
                                                                                    <line x1="18" y1="6"
                                                                                        x2="6" y2="18">
                                                                                    </line>
                                                                                    <line x1="6" y1="6"
                                                                                        x2="18" y2="18">
                                                                                    </line>
                                                                                </svg></button><strong>{{ session()->get('error') }}</strong>
                                                                        </div>
                                                                    @endif
                                                                </div>

                                                                <div class="col-md-12 mt-1">
                                                                    <div class="form-group text-end">
                                                                        <button class="btn btn-secondary">Save</button>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
