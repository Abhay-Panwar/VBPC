@extends('layouts.default')
@section('content')
    <div id="content" class="main-content">
       
            <div class="container">

                <!-- BREADCRUMB -->
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('tables') }}">Table</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Designation Table</li>
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
                                        <h4>Designation Table</h4>
                                       

                                    </div>
                                </div>
                            </div>
                            <!-- <div class="widget-content widget-content-area">
                                <div class="seperator-header">
                                    <h4 class="">Style 3</h4>
                                </div> -->

                            <div class="row layout-spacing">
                                <div class="col-lg-12">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-content widget-content-area m-1 p-2">
                                            <div class="text-end">
                                                <button type="button" class="btn btn-primary mr-2" data-bs-toggle="modal"
                                                    data-bs-target="#add_designation">Add More</button>
                                            </div>
                                            <table id="style-3" class="table style-3 dt-table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="checkbox-column text-center"> Designation Id </th>
                                                        <!-- <th class="text-center">Image</th> -->
                                                        <th>Designation</th>
                                                        <th class="text-center">Status</th>
                                                        <th class="text-center dt-no-sorting">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($designation as $row)
                                                        <tr>
                                                            <td class="checkbox-column text-center"> {{ $row->id }}
                                                            </td>
                                                            <!-- <td class="text-center">
                                                                <span><img src="../src/assets/img/profile-17.jpeg" class="profile-img" alt="avatar"></span>
                                                            </td> -->

                                                            <td> {{ $row->dst_name }} </td>
                                                            <td class="text-center"><span
                                                                    class="shadow-none badge @if ($row->status == 0) badge-light-primary
                                                    @elseif($row->status == 1)
                                                    badge-light-success
                                                    @else
                                                    badge-light-danger @endif">
                                                                    @if ($row->status == 0)
                                                                        Pending
                                                                    @elseif($row->status == 1)
                                                                        Approved
                                                                    @else
                                                                        Decline
                                                                    @endif
                                                                </span></td>
                                                            <td class="text-center">
                                                                <ul class="table-controls">
                                                                    <li><a href="{{ route('updating-designation-form-edit', [$row->id]) }}"
                                                                            class="bs-tooltip" data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Edit"
                                                                            data-original-title="Edit"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-edit-2 p-1 br-8 mb-1">
                                                                                <path
                                                                                    d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                                </path>
                                                                            </svg></a></li>
                                                                    <li><a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('delete_design',[$row->id])}}" class="bs-tooltip"
                                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                                            title="Delete" data-original-title="Delete"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-trash p-1 br-8 mb-1">
                                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                            </svg></a></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="add_designation" tabindex="-1" role="dialog"
                                        aria-labelledby="add_designationLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form action="{{ route('add_design') }}" method="POST">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="add_designationLabel">Add Designatrion
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close">

                                                        </button>
                                                    </div>
                                                    <div class="modal-body">



                                                        <div class="row">
                                                            <div class="col">
                                                                <label class="form-check-label" for="designatrion">Add
                                                                    Designatrion:</label>
                                                                <input type="text" id="designatrion"
                                                                    class="form-control" name="designation" required>
                                                            </div>
                                                </form>

                                            </div>
                                            <div class="modal-footer">
                                                <div class="row">

                                                    <div class="col-sm-12">
                                                        <button class="btn btn-light-dark" data-bs-dismiss="modal"
                                                            type="button">Discard</button>

                                                        <button class="btn btn-primary" type="submit">Add</button>
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
            </div>
   
        
    @endsection
