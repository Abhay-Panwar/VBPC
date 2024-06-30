@extends('layouts.default')
@section('content')
<div id="content" class="main-content">
    <div class="container">
        <div class="container">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('tables')}}">Table</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Staff Table</li>
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
                                    <h4>Staff Table</h4>
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
                                                    <th>Duty</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center dt-no-sorting">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($staff as $row)
                                                <tr>
                                                    <td class="checkbox-column text-center"> {{$row->emp_id}} </td>
                                                    <!-- <td class="text-center">
                                                            <span><img src="../src/assets/img/profile-17.jpeg" class="profile-img" alt="avatar"></span>
                                                        </td> -->

                                                    <td> {{$row->first_name}} </td>
                                                    <td> {{$row->last_name}} </td>
                                                    <td> {{$row->dpt_id}} </td>
                                                    <td> {{$row->dst_id}} </td>
                                                    <td> {{$row->mobile_no}} </td>
                                                    <td>   @if($row->gender==1) 
                                                        Male
                                                        @elseif($row->gender==2) 
                                                        Female
                                                        @elseif($row->gender==3) 
                                                        Other
                                                        @else
                                                        Undefined
                                                        @endif 
                                                    </td>
                                                    <td> {{$row->duty}} </td>
                                                    <td class="text-center"><span class="shadow-none badge badge-primary"> 
                                                        @if($row->status==0) 
                                                        Pending
                                                        @elseif($row->status==1) 
                                                        Approved
                                                        @else
                                                        Decline
                                                        @endif
                                                    </span></td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li><a href="{{route('updating-employee-form-edit',[$row->emp_id])}}" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1">
                                                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                                    </svg></a></li>
                                                            <li><a href="{{route('updating-employee-form-view',[$row->emp_id])}}" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                                              </svg></a></li>
                                                            <li><a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('updating-employee-form-delete',[$row->id])}}" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1">
                                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                    </svg></a></li>
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
</div>
@endsection