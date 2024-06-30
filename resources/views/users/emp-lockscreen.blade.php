@extends('layouts.login')
@section('content')
    <div class="auth-container d-flex h-100">

        <div class="container mx-auto align-self-center">

            <div class="row">

                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                    <div class="card mt-3 mb-3">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12 mb-3">

                                    <div class="media mb-4">

                                        <div class="avatar avatar-lg me-3">
                                            <img alt="avatar" src="{{$empdata->image}}"
                                                class="rounded-circle">
                                        </div>

                                        <div class="media-body align-self-center">

                                            <h3 class="mb-0">{{$empdata->first_name}} {{$empdata->last_name}}</h3>
                                            <p class="mb-0">Enter your password to unlock your ID</p>

                                        </div>
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
                                    </div>

                                </div>
                                <form action="{{ route('emp_unlock') }}">

                                    <div class="col-12">
                                        <div class="mb-4">
                                            <label class="form-label">Password</label>
                                            <input type="text" name="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <button type="submit" class="btn btn-secondary w-100">UNLOCK</button>
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
