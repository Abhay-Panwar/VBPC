@extends('layouts.default')
@section('content')
    <div id="content" class="main-content">
        <div class="container">
            <div class="container">

                <!-- BREADCRUMB -->
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('tables') }}">Table</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Employee Table</li>
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
                                        <h4>Employee Table</h4>
                                    </div>
                                </div>
                            </div>


                            <div class="row layout-spacing">
                                <div class="col-lg-12">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-content widget-content-area m-1 p-2">
                                            <table id="style-3" class="table style-3 dt-table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="checkbox-column text-center"> Employee Id </th>
                                                        <!-- <th class="text-center">Image</th> -->
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Department</th>
                                                        <th>Designation</th>
                                                        <th>Mobile No.</th>
                                                        <th>Gender</th>
                                                        <th>Address</th>
                                                        <th class="text-center">Status</th>
                                                        <th class="text-center dt-no-sorting">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($employee as $row)
                                                        <tr>
                                                            <td class="checkbox-column text-center"> {{ $row->employee_id }}
                                                            </td>
                                                            <!-- <td class="text-center">
                                                                    <span><img src="../src/assets/img/profile-17.jpeg" class="profile-img" alt="avatar"></span>
                                                                </td> -->

                                                            <td> {{ $row->first_name }} </td>
                                                            <td> {{ $row->last_name }} </td>
                                                            <td> {{ $row->dpt_name }} </td>
                                                            <td> {{ $row->dst_name }} </td>
                                                            <td> {{ $row->mobile_no }} </td>
                                                            <td>
                                                                @if ($row->gender == 1)
                                                                    Male
                                                                @elseif($row->gender == 2)
                                                                    Female
                                                                @elseif($row->gender == 3)
                                                                    Other
                                                                @else
                                                                    Undefined
                                                                @endif
                                                            </td>
                                                            <td> {{ $row->addresses }} </td>
                                                            <td class="text-center"><span
                                                                    class="shadow-none badge badge-primary">
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
                                                                    <li><a href="{{ route('updating-employee-form-edit', [$row->employee_id]) }}"
                                                                            class="badge badge-light-primary text-start me-2  action-edit" data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="View"
                                                                            data-original-title="Edit">
                                                                            {{-- <svg
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
                                                                            </svg> --}}

                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-eye p-1 br-8 mb-1">
                                                                                <path
                                                                                    d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                                </path>
                                                                                <circle cx="12" cy="12" r="3">
                                                                                </circle>
                                                                            </svg>
                                                                        </a></li>
                                                                    <li><a onclick="return confirm('Are you sure you want to delete this item?');"
                                                                            href="{{ route('updating-employee-form-delete', [$row->employee_id]) }}"
                                                                            class="badge badge-light-danger text-start action-delete" data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Delete"
                                                                            data-original-title="Delete">
                                                                            <svg
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
                                                                            </svg>
                                                                        </a></li>
                                                                </ul>
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
            </div>
        </div>
        {{-- </div> --}}
    @endsection
