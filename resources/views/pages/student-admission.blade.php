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
                            <li class="breadcrumb-item active" aria-current="page">ADMISSION FORM FOR SESSION</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->
                <div class="row">
                    <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    {{-- <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Registration-Employee</h4>
                                    </div> --}}
                                    <div class="h-100 d-flex align-items-center justify-content-center">
                                        <div class="align-items-center justify-content-center text-center">
                                            <h1>VIDYA BHAWAN POLYTECHNIC(RI)COLLEGE</h1>
                                            <p class="p">(Approved by AICTE,New Delhi & Affillate to Board of Technical Education Rajastan,
                                                Jodhpur)</p>
                                            <p>Badgaon Road,Udaipur -313001(Rajasthan)</p>
                                            <p>Phone : 0294-2451309</p>
                    
                                        </div>
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
                                <form action="{{ route('insert') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <!-- <div class="row mb-4">
                                                <div class="col-sm-12">
                                                    <label class="form-check-label" for="emp_id">Employee-Id:</label>
                                                    <input type="text" class="form-control" name="emp_id">
                                                </div>
                                            </div> -->

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="firstName">First Name:</label>
                                            <input type="text" id="firstName" class="form-control" name="first_name"
                                                required>
                                        </div>

                                        <!-- <div class="row-4"> -->
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="LastName">Last Name:</label>
                                            <input type="text" class="form-control" name="last_name" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-check-label " for="MobileNo">Mobile No:</label>
                                            <input type="text" class="form-control" id="mobile_no" name="mobile_no"
                                                required>
                                                <div id="result_mobile_no"></div>

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
                                            <select class="form-select" name="gender" id="inlineFormSelectPref">
                                                <option value="0">Select your gender</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Other</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="department">Department:</label>
                                            <select class="form-select" name="department" id="inlineFormSelectPref">
                                                <option value="0">Select your Department</option>
                                                @foreach ($department as $row)
                                                    <option value="{{ $row->id }}">{{ $row->dpt_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="designation">Designation:</label>
                                            <select class="form-select" name="designation" id="inlineFormSelectPref">
                                                <option value="0">Select your Designation</option>
                                                @foreach ($designation as $row)
                                                    <option value="{{ $row->id }}">{{ $row->dst_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-4">

                                        <div class="col-md-4">
                                            <label class="form-check-label" for="password">Email:</label>
                                            {{-- <span class="password-toggle-icon"><i class="fas fa-eye"></i></span> --}}
                                            <input type="email" id="email" class="form-control" name="email"
                                                required>
                                                <div id="result_email"></div>
                                        </div>
                                        <div class="col-md-4">
                                        <label class="form-check-label" for="date">Date of birth:</label>
                                        <input type="date" id="password" class="form-control" name="dob" required>
                                        {{-- <input type="text" class="form-control form-control-sm flatpickr-input active" id="date" name="dob" placeholder="Add date picker" readonly="readonly"> --}}
                                    </div>
                                        <div class="col-md-4">
                                        <label class="form-check-label" for="file">Upload Photo:</label>
                                        <input type="file" id="password" class="form-control" name="image" required>
                                    </div>


                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-8">
                                            <label class="form-check-label" for="">Address:</label>
                                            <textarea name="address" id="" class="form-control" cols="20" rows="5"
                                                placeholder="Write Employee Address here (Optional)"></textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-sm-12">
                                            <br>
                                            <button class="btn btn-primary" id="submitBtn" type="submit">Submit</button>
                                        </div>
                                    </div>

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
      $(document).ready(function() {
            $("#email").on('change',function() {

                // var mobile_no = document.getElementById('mobile_no').val();
                var email = $(this).val();
             
                var route = "{{ route('check_exists') }}";

             
                $.ajax({
                    type: 'POST',
                    url: "{{ route('check_exists') }}",
                    data: {
                        // emp_mobile_no: mobile_no,
                      
                        '_token': '{{ csrf_token() }}',
                        'email': email
                     
                    },
                    success: function(response) {
                        if (response.exists) {
                    $('#result_email').text('Email is already exists.');
                    // Disable the submit button
                    $('#submitBtn').prop('disabled', true);
                }  else {
                    // $('#result').text('Data does not exist.');
                    // Enable the submit button
                    $('#submitBtn').prop('disabled', false);
                }
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        // alert('An error occurred while processing your request.');
                    }
                })

            });
            $("#mobile_no").on('change',function() {

                // var mobile_no = document.getElementById('mobile_no').val();
                var mobile_no = $(this).val();
             
                var route = "{{ route('check_exists') }}";

             
                $.ajax({
                    type: 'POST',
                    url: "{{ route('check_exists') }}",
                    data: {
                        // emp_mobile_no: mobile_no,
                      
                        '_token': '{{ csrf_token() }}',
                        'mobile_no': mobile_no
                     
                    },
                    success: function(response) {
                        if (response.exists) {
                    $('#result_mobile_no').text('Mobile Number is already exists.');
                    // Disable the submit button
                    $('#submitBtn').prop('disabled', true);
                }  else {
                    // $('#result').text('Data does not exist.');
                    // Enable the submit button
                    $('#submitBtn').prop('disabled', false);
                }
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        // alert('An error occurred while processing your request.');
                    }
                })

            });
        });
    </script>
@endpush
