@extends('layouts.default')
@push('style')
<style>
.sign-contain{
  width: 35%;
  height: 400ph;
  margin: auto;
  justify-content: center;
  align-items: center;
  border: 2px green solid;
  border-radius: 5%;
}
</style>
@endpush

@section('NICE')
<div class="sign-contain">
  @if(session()->has('success'))
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
  <form action="{{route('store')}}" method="post">
   @csrf
  <div class="form-group">
    <label for="Email1">Email address</label>
    <input type="email" name="email" class="form-control" value="" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="User1">Username</label>
    <input type="text" name="user" class="form-control" value="" id="user" aria-describedby="userHelp" placeholder="Enter Username">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="Password1">Password</label>
    <input type="password" name="password" class="form-control" value="" id="password" placeholder="Password">
  </div>
  <!-- <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <!-- <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   </div>
   @endsection