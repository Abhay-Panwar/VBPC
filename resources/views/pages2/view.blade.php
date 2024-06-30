<?php use Illuminate\Support\Facades\Session;?>
@extends('layouts.default')
@push('style')
<style>
    .h2{
        color: green;
    }
</style>
@endpush
@section('NICE')

   <table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>Email</th>
            <th>Username</th>
            <th>password</th>
            <th>Update</th>
            <th>Delete</th>
            <th>view</th>
        </tr>
    </thead>
    <!-- //  return redirect()->route('update',[$id])->view("pages.update" ,compact('signup'));
    return view("pages.update",compact('signup'));
    // return redirect()>view("pages.update",[$signup->id],compact('signup'));
        // return redirect()->intended('update')->compact('signup'); -->
    <tbody>
        @foreach($signup as $row)
        <tr>
            <td>{{$id=$row->id}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->user}}</td>
            <td>Passwords is encrypted</td>
            <!-- <td><a href="{{route('edit',$id)}}"><button class="btn btn-success">Update</button></a></td> -->
            <td><a href="{{route('edit',[$row->id])}}"><button class="btn btn-success">Update</button></a></td>
            
            <td><a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('delete',[$row->id])}}"><button class="btn btn-danger">delete</button></a></td>
            <td><a href="{{route('show',[$row->id])}}"><button class="btn btn-info">Details</button></a></td>
        </tr>
        @endforeach
   </table>
@stop
<?php  Session::put('id',$id);?>