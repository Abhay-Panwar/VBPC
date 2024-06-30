@extends('layouts.default')
@push('style')
    <style>
        .password-toggle-icon {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .password-toggle-icon i {
            font-size: 18px;
            line-height: 1;
            color: #333;
            transition: color 0.3s ease-in-out;
            margin-bottom: 20px;
        }

        .password-toggle-icon i:hover {
            color: #000;
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
                            <li class="breadcrumb-item active" aria-current="page">Updating-Employee</li>
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
                                        <h4>Updating-Employee</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area m-1 p-2">

                                @if (session()->has('success'))
                                    {{-- <p>
                                {{ session()->get('success') }}
                            </p> --}}
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
                                    {{-- <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul> --}}
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
                                <form action="{{ route('updating-employee-form-update', [$employee->id]) }}" method="POST">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $employee->id }}">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="firstName">First Name:</label>
                                            <input type="text" id="firstName" value="{{ $employee->first_name }}"
                                                class="form-control" name="first_name" readonly>
                                        </div>

                                        <!-- <div class="row-4"> -->
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="LastName">Last Name:</label>
                                            <input type="text" class="form-control" value="{{ $employee->last_name }}"
                                                name="last_name" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-check-label " for="MobileNo">Mobile No:</label>
                                            <input type="text" class="form-control"value="{{ $employee->mobile_no }}"
                                                name="mobile_no" readonly>
                                        </div>
                                    </div>


                                    <!-- </div> -->
                                    <div class="row mt-4">

                                        <!-- <div class="col-md-4">
                                                    <label class="form-check-label" for="designation">Designation:</label>
                                                    <input type="text" class="form-control" name="designation">
                                                </div> -->

                                        <div class="col-md-4">
                                            <label class="form-check-label" for="">Gender:</label>
                                            <input type="text" class="form-control"value="{{ $employee->mobile_no }}"
                                                name="mobile_no" readonly>
                                            {{-- <select class="form-select" name="gender" id="inlineFormSelectPref">
                                                <option value="0"{{ $employee->gender === 0 ? 'selected' : '' }}>
                                                    Select your gender</option>
                                                <option value="1"{{ $employee->gender === 1 ? 'selected' : '' }}>Male
                                                </option>
                                                <option value="2"{{ $employee->gender === 2 ? 'selected' : '' }}>
                                                    Female
                                                </option>
                                                <option value="3"{{ $employee->gender === 3 ? 'selected' : '' }}>
                                                    Other
                                                </option>
                                            </select> --}}
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="department">Department:</label>
                                            <input type="text" class="form-control"value="{{ $employee->dpt_name }}"
                                            name="mobile_no" readonly>
                                            {{-- <select class="form-select" name="department" id="inlineFormSelectPref">
                                                <option value="0">Select your Department</option>
                                                 @foreach ($department as $name)
                                                    <option value="{{ $name->id }}"
                                                        {{ $name->id == $employee->dpt_id ? 'selected' : '' }}>
                                                        {{ $name->dpt_name }}</option>
                                                @endforeach
                                            </select> --}}
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="designation">Designation:</label>
                                            <input type="text" class="form-control"value="{{ $employee->dst_name }}"
                                                name="mobile_no" readonly>
                                            {{-- <select class="form-select" name="designation" id="inlineFormSelectPref">
                                                <option value="0">Select your Designation</option>
                                                @foreach ($designation as $name)
                                                    <option value="{{ $name->id }}"
                                                        {{ $name->id == $employee->dst_id ? 'selected' : '' }}>
                                                        {{ $name->dst_name }}</option>
                                                @endforeach
                                            </select> --}}
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <!--
                                            <div class="col-md-4">
                                                <label class="form-check-label" for="password">Password:</label>
                                                <span class="password-toggle-icon"><i class="fas fa-eye"></i></span>
                                                <input type="password" id="password" class="form-control" name="password">
                                            </div> -->



                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-6">
                                            <label class="form-check-label" for="">Address:</label>
                                            <textarea name="address" id="" class="form-control" cols="10" rows="5"
                                                placeholder="Write Employee Address here (Optional)" readonly>{{ $employee->addresses }}</textarea>
                                        </div>
                                        <div class="col-4">

                                            @if ($employee->leave_taken < 20)
                                                <label for="">Available Leaves</label>
                                                <input type="text" class="form-control" name="" id=""
                                                    aria-describedby="helpId"
                                                    value="{{ $leaveperyear - $employee->leave_taken }}" placeholder=""
                                                    readonly>
                                                {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                                            @else
                                                <p>

                                                    Currently you dosn't have reamaining leaves
                                                </p>
                                            @endif
                                        </div>
                                    </div>

                                    {{-- <div class="row mb-4">
                                        <div class="col-sm-12">
                                            <br>
                                            <button class="btn btn-primary" type="submit">Update</button>
                                        </div>
                                    </div> --}}

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}
@endsection
@push('script')
    <script>
        const passwordField = document.getElementById("password");
        const togglePassword = document.querySelector(".password-toggle-icon i");

        togglePassword.addEventListener("click", function() {
            if (passwordField.type === "password") {
                passwordField.type = "text";
                togglePassword.classList.remove("fa-eye");
                togglePassword.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                togglePassword.classList.remove("fa-eye-slash");
                togglePassword.classList.add("fa-eye");
            }
        });
    </script>
@endpush
