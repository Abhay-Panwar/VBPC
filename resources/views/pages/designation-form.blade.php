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
                            <li class="breadcrumb-item active" aria-current="page">Add-Designation</li>
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
                                        <h4>Add-Designation</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area m-1 p-2">

                                @if (session()->has('success'))
                                    <p>
                                        {{ session()->get('success') }}
                                    </p>
                                @endif

                                @if ($errors->any())
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                <form action="{{ route('add_design') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="designation">Add Designation:</label>
                                            <input type="text" id="designation" class="form-control" name="designation"
                                                required>
                                        </div>



                                        <div class="row mb-4">
                                            <div class="col-sm-12">
                                                <br>
                                                <button class="btn btn-primary" type="submit">Add</button>
                                            </div>
                                        </div>

                                </form>
                            </div>
                            <a href="{{ route('datatable-designations') }}"> <button class="btn btn-info mb-2 me-4">See
                                    Designations</button> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
