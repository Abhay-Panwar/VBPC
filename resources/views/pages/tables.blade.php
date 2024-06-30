@extends('layouts.default')
@section('content')
<div id="content" class="main-content">
    <div class="container">
        <div class="container">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Table</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tables</li>
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
                                    <h4>College Tables</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area m-1 p-2">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="checkbox-area" scope="col">
                                                {{-- <div class="form-check form-check-primary">
                                                    <input class="form-check-input" id="mixed_parent_all" type="checkbox">
                                                </div> --}}
                                            </th>
                                            <th class="" scope="col">Name</th>
                                            <th scope="col">Date</th>
                                            <th class="text-center" scope="col">Sales</th>
                                            <th class="text-center" scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach($employee as $row)
                                            <td>
                                                <div class="form-check form-check-primary">
                                                    <input class="form-check-input mixed_child" type="checkbox">
                                                </div>
                                            </td>
                                            <td class=""> <a href="{{route('datatable-'.$row->Tables_in_lv1)}}">{{$row->Tables_in_lv1}}</a></td>
                                            <td>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                                </svg>
                                                <span class="table-inner-text">25 Apr</span>
                                            </td>
                                            <td class="text-center">320</td>
                                            <td class="text-center">
                                                <span class="badge badge-light-success">Approved</span>
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
    <!-- </div> -->
</div>
@endsection